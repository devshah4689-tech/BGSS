<?php
/**
 * cookie-policy.php — Cookie Policy for BGSS & Associates
 * PHP 8+
 */

declare(strict_types=1);

require_once __DIR__ . '/config.php';

$page_title       = 'Cookie Policy | BGSS & Associates – Chartered Accountants';
$meta_description = 'Cookie Policy of BGSS & Associates outlining the minimal, privacy-centric use of cookies on our corporate website.';
$current_page     = 'cookie';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navigation.php';
?>

<main id="main-content">
  <section class="page-hero" aria-labelledby="cookie-title">
    <div class="page-hero-bg" aria-hidden="true">
      <img src="/assets/images/hero-bg.svg" alt="" fetchpriority="high">
    </div>
    <div class="page-hero-content">
      <nav class="page-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span aria-hidden="true">/</span>
        <span>Cookie Policy</span>
      </nav>
      <p class="overline">Transparency</p>
      <h1 id="cookie-title">Cookie <em>Policy.</em></h1>
      <p class="page-hero-sub">
        Information on how BGSS &amp; Associates employs strictly essential cookies to provide a secure and streamlined browsing experience.
      </p>
    </div>
  </section>

  <section class="section-pad" style="background-color: var(--color-white);">
    <div class="container" style="max-width: 860px;">
      <article style="color: var(--color-slate); line-height: 1.85; font-size: var(--text-base);">
        <h2 style="font-size: var(--text-2xl); color: var(--color-navy); margin-bottom: var(--space-4);">1. Minimal Cookie Usage</h2>
        <p style="margin-bottom: var(--space-6);">
          BGSS &amp; Associates operates a privacy-centric website. We do not employ third-party advertising cookies, behavioural profiling trackers, or invasive commercial beacons.
        </p>

        <h2 style="font-size: var(--text-2xl); color: var(--color-navy); margin-bottom: var(--space-4);">2. Essential Cookies</h2>
        <p style="margin-bottom: var(--space-4);">
          Our website utilizes only strictly necessary session cookies required for core technical integrity:
        </p>
        <ul style="list-style: disc; padding-left: var(--space-6); margin-bottom: var(--space-6);">
          <li><strong>PHPSESSID / Session Token:</strong> Retains active session context for CSRF security validation across form interactions.</li>
          <li><strong>Anti-Spam Tokens:</strong> Cryptographic verification tokens that protect our contact gateways against automated brute-force abuse.</li>
        </ul>

        <h2 style="font-size: var(--text-2xl); color: var(--color-navy); margin-bottom: var(--space-4);">3. Managing Preferences</h2>
        <p style="margin-bottom: var(--space-6);">
          You may modify your web browser preferences to decline or clear cookies at any time. However, disabling session cookies may impact your ability to submit advisory enquiry forms securely.
        </p>

        <h2 style="font-size: var(--text-2xl); color: var(--color-navy); margin-bottom: var(--space-4);">4. Updates to this Policy</h2>
        <p>
          Any revisions to our technical cookie usage will be documented on this page. For additional clarity, write to <a href="mailto:info@bgssassociates.com" style="color: var(--color-gold); font-weight: 600;">info@bgssassociates.com</a>.
        </p>
      </article>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
