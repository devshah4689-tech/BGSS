<?php
/**
 * process-contact.php — Secure contact form handler for BGSS & Associates
 *
 * Accepts POST requests only. Validates CSRF token, honeypot, rate limit,
 * and all form fields. Sends an HTML email on success and returns JSON.
 *
 * PHP 8+
 */

declare(strict_types=1);

require_once __DIR__ . '/config.php';

// ── Force JSON response type ───────────────────────────────────────────────────
header('Content-Type: application/json; charset=UTF-8');

// ── Helper: send JSON and exit ─────────────────────────────────────────────────
function json_respond(bool $success, array $payload = [], int $status = 200): never
{
    http_response_code($status);
    echo json_encode(array_merge(['success' => $success], $payload), JSON_UNESCAPED_UNICODE);
    exit;
}

// ── 1. Method guard ───────────────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_respond(false, ['message' => 'Method Not Allowed.'], 405);
}

// ── 2. CSRF verification ──────────────────────────────────────────────────────
$submitted_token = $_POST['csrf_token'] ?? '';
if (!verify_csrf_token($submitted_token)) {
    json_respond(false, ['message' => 'Invalid or expired security token. Please refresh the page and try again.'], 403);
}

// ── 3. Honeypot check (spam trap) ────────────────────────────────────────────
if (!empty($_POST['website'])) {
    // Silently accept but do not process — return fake success to confuse bots
    json_respond(false, ['message' => 'Submission rejected.'], 400);
}

// ── 4. Rate limiting ──────────────────────────────────────────────────────────
$rate_limit_window   = 300;   // seconds
$rate_limit_max      = 3;     // max submissions per window
$now                 = time();

if (!isset($_SESSION['contact_submissions']) || !is_array($_SESSION['contact_submissions'])) {
    $_SESSION['contact_submissions'] = [];
}

// Prune timestamps outside the window
$_SESSION['contact_submissions'] = array_filter(
    $_SESSION['contact_submissions'],
    fn(int $ts): bool => ($now - $ts) < $rate_limit_window
);

if (count($_SESSION['contact_submissions']) >= $rate_limit_max) {
    json_respond(false, [
        'message' => 'Too many submissions. Please wait a few minutes before trying again.',
    ], 429);
}

// ── 5. Collect & sanitise raw inputs ─────────────────────────────────────────
$full_name    = sanitise_input($_POST['full_name']    ?? '');
$company_name = sanitise_input($_POST['company_name'] ?? '');
$email        = sanitise_input($_POST['email']        ?? '');
$phone        = sanitise_input($_POST['phone']        ?? '');
$service      = sanitise_input($_POST['service']      ?? '');
$message      = sanitise_input($_POST['message']      ?? '');

// ── 6. Validation ─────────────────────────────────────────────────────────────
$errors = [];

$allowed_services = [
    'tax-advisory',
    'corporate-tax-compliance',
    'tax-litigation',
    'transfer-pricing',
    'fema-forex',
    'mergers-acquisitions',
    'general',
];

// full_name
if ($full_name === '') {
    $errors['full_name'] = 'Full name is required.';
} elseif (mb_strlen($full_name) < 2) {
    $errors['full_name'] = 'Full name must be at least 2 characters.';
} elseif (mb_strlen($full_name) > 100) {
    $errors['full_name'] = 'Full name must not exceed 100 characters.';
}

// company_name
if ($company_name === '') {
    $errors['company_name'] = 'Company name is required.';
} elseif (mb_strlen($company_name) < 2) {
    $errors['company_name'] = 'Company name must be at least 2 characters.';
} elseif (mb_strlen($company_name) > 150) {
    $errors['company_name'] = 'Company name must not exceed 150 characters.';
}

// email
if ($email === '') {
    $errors['email'] = 'Email address is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address.';
} elseif (mb_strlen($email) > 200) {
    $errors['email'] = 'Email address must not exceed 200 characters.';
}

// phone
if ($phone === '') {
    $errors['phone'] = 'Phone number is required.';
} elseif (mb_strlen($phone) < 7 || mb_strlen($phone) > 15) {
    $errors['phone'] = 'Phone number must be between 7 and 15 characters.';
} elseif (!preg_match('/^[\d\s\+\-\(\)]+$/', $phone)) {
    $errors['phone'] = 'Phone number may only contain digits, spaces, +, -, ( and ).';
}

// service
if ($service === '') {
    $errors['service'] = 'Please select a service area.';
} elseif (!in_array($service, $allowed_services, true)) {
    $errors['service'] = 'Please select a valid service from the list.';
}

// message (optional but capped)
if ($message !== '' && mb_strlen($message) > 2000) {
    $errors['message'] = 'Message must not exceed 2,000 characters.';
}

if (!empty($errors)) {
    json_respond(false, [
        'message' => 'Please correct the errors below.',
        'errors'  => $errors,
    ], 422);
}

// ── 7. Build friendly service label ───────────────────────────────────────────
$service_labels = [
    'tax-advisory'            => 'Tax Advisory',
    'corporate-tax-compliance'=> 'Corporate Tax Compliance',
    'tax-litigation'          => 'Tax Litigation',
    'transfer-pricing'        => 'Transfer Pricing',
    'fema-forex'              => 'Foreign Exchange Management (FEMA)',
    'mergers-acquisitions'    => 'Mergers & Acquisitions',
    'general'                 => 'General Enquiry',
];
$service_label = $service_labels[$service] ?? ucwords(str_replace('-', ' ', $service));

// ── 8. Build HTML email body ──────────────────────────────────────────────────
$submitted_at  = date('D, d M Y \a\t H:i:s T');
$message_html  = $message !== ''
    ? nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'))
    : '<em style="color:#718096;">No message provided.</em>';

$email_body = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Enquiry – BGSS &amp; Associates</title>
</head>
<body style="margin:0;padding:0;background:#F4F1EC;font-family:'Helvetica Neue',Arial,sans-serif;font-size:15px;color:#2C3E50;">

  <!-- Wrapper -->
  <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
      <td align="center" style="padding:40px 16px;">
        <table role="presentation" width="620" cellspacing="0" cellpadding="0" border="0"
               style="max-width:620px;width:100%;background:#ffffff;border-radius:4px;overflow:hidden;box-shadow:0 4px 24px rgba(13,27,42,0.10);">

          <!-- Header -->
          <tr>
            <td style="background:#0D1B2A;padding:36px 40px;">
              <p style="margin:0;font-size:22px;font-weight:700;color:#ffffff;letter-spacing:-0.02em;">
                BGSS &amp; Associates
              </p>
              <p style="margin:4px 0 0;font-size:12px;color:#B8860B;letter-spacing:0.1em;text-transform:uppercase;">
                New Website Enquiry
              </p>
            </td>
          </tr>

          <!-- Gold rule -->
          <tr>
            <td style="height:3px;background:linear-gradient(90deg,#B8860B,#D4A843);"></td>
          </tr>

          <!-- Body -->
          <tr>
            <td style="padding:40px 40px 32px;">

              <p style="margin:0 0 24px;font-size:16px;color:#0D1B2A;font-weight:600;">
                A new enquiry has been submitted via the BGSS &amp; Associates website.
              </p>

              <!-- Details table -->
              <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0"
                     style="border-collapse:collapse;border:1px solid #E2DED8;border-radius:4px;overflow:hidden;">
                <tr style="background:#F9F7F4;">
                  <td style="padding:12px 16px;font-size:12px;font-weight:600;text-transform:uppercase;letter-spacing:0.08em;color:#B8860B;border-bottom:1px solid #E2DED8;width:40%;">Full Name</td>
                  <td style="padding:12px 16px;border-bottom:1px solid #E2DED8;color:#2C3E50;">{$full_name}</td>
                </tr>
                <tr>
                  <td style="padding:12px 16px;font-size:12px;font-weight:600;text-transform:uppercase;letter-spacing:0.08em;color:#B8860B;border-bottom:1px solid #E2DED8;background:#F9F7F4;">Company</td>
                  <td style="padding:12px 16px;border-bottom:1px solid #E2DED8;color:#2C3E50;">{$company_name}</td>
                </tr>
                <tr style="background:#F9F7F4;">
                  <td style="padding:12px 16px;font-size:12px;font-weight:600;text-transform:uppercase;letter-spacing:0.08em;color:#B8860B;border-bottom:1px solid #E2DED8;">Email</td>
                  <td style="padding:12px 16px;border-bottom:1px solid #E2DED8;color:#2C3E50;">
                    <a href="mailto:{$email}" style="color:#B8860B;text-decoration:none;">{$email}</a>
                  </td>
                </tr>
                <tr>
                  <td style="padding:12px 16px;font-size:12px;font-weight:600;text-transform:uppercase;letter-spacing:0.08em;color:#B8860B;border-bottom:1px solid #E2DED8;background:#F9F7F4;">Phone</td>
                  <td style="padding:12px 16px;border-bottom:1px solid #E2DED8;color:#2C3E50;">{$phone}</td>
                </tr>
                <tr style="background:#F9F7F4;">
                  <td style="padding:12px 16px;font-size:12px;font-weight:600;text-transform:uppercase;letter-spacing:0.08em;color:#B8860B;border-bottom:1px solid #E2DED8;">Service Area</td>
                  <td style="padding:12px 16px;border-bottom:1px solid #E2DED8;color:#2C3E50;">
                    <span style="display:inline-block;background:#0D1B2A;color:#D4A843;font-size:12px;font-weight:600;padding:3px 10px;border-radius:2px;letter-spacing:0.06em;">{$service_label}</span>
                  </td>
                </tr>
                <tr>
                  <td style="padding:12px 16px;font-size:12px;font-weight:600;text-transform:uppercase;letter-spacing:0.08em;color:#B8860B;background:#F9F7F4;vertical-align:top;">Message</td>
                  <td style="padding:12px 16px;color:#2C3E50;line-height:1.7;">{$message_html}</td>
                </tr>
              </table>

              <!-- Reply CTA -->
              <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top:32px;">
                <tr>
                  <td>
                    <a href="mailto:{$email}?subject=Re: Your Enquiry – BGSS %26 Associates"
                       style="display:inline-block;background:#0D1B2A;color:#ffffff;text-decoration:none;padding:13px 28px;font-size:12px;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;border-radius:2px;">
                      Reply to {$full_name} &rarr;
                    </a>
                  </td>
                </tr>
              </table>

            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background:#F9F7F4;border-top:1px solid #E2DED8;padding:20px 40px;">
              <p style="margin:0;font-size:11px;color:#718096;line-height:1.6;">
                Submitted: {$submitted_at}<br>
                This email was generated automatically by the BGSS &amp; Associates website contact form.
                Do not reply to this email directly — use the reply button above to respond to the enquirer.
              </p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>

</body>
</html>
HTML;

// ── 9. Compose and send email ─────────────────────────────────────────────────
$to      = FORM_TO_EMAIL;
$subject = "New Enquiry from {$company_name} – BGSS & Associates Website";

$from_name    = FORM_FROM_NAME;
$from_email   = FORM_FROM_EMAIL;
$reply_to     = $email;

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: {$from_name} <{$from_email}>\r\n";
$headers .= "Reply-To: {$full_name} <{$reply_to}>\r\n";
$headers .= "X-Mailer: PHP/" . PHP_VERSION . "\r\n";
$headers .= "X-Priority: 1\r\n";

$mail_sent = mail($to, $subject, $email_body, $headers);

if (!$mail_sent) {
    json_respond(false, [
        'message' => 'We were unable to send your message due to a server error. Please call us directly or email us at ' . SITE_EMAIL . '.',
    ], 500);
}

// ── 10. Record submission timestamp for rate limiting ─────────────────────────
$_SESSION['contact_submissions'][] = $now;

// Regenerate CSRF token after successful use
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));

// ── 11. Return success ────────────────────────────────────────────────────────
$first_name = explode(' ', $full_name)[0];
json_respond(true, ['name' => $first_name]);
