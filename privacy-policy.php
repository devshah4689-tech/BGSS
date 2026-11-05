<?php
/**
 * privacy-policy.php — Privacy Policy for BGSS & Associates
 * PHP 8+
 */

declare(strict_types=1);

require_once __DIR__ . '/config.php';

$page_title       = 'Privacy Policy | BGSS & Associates – Chartered Accountants';
$meta_description = 'Privacy Policy of BGSS & Associates regarding data collection, confidentiality, client information protection and regulatory compliance.';
$current_page     = 'privacy';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navigation.php';
?>

<main id="main-content">
  <section class="page-hero" aria-labelledby="privacy-title">
    <div class="page-hero-bg" aria-hidden="true">
      <img src="/assets/images/hero-bg.svg" alt="" fetchpriority="high">
    </div>
    <div class="page-hero-content">
      <nav class="page-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span aria-hidden="true">/</span>
        <span>Privacy Policy</span>
      </nav>
      <p class="overline">Confidentiality &amp; Trust</p>
      <h1 id="privacy-title">Privacy <em>Policy.</em></h1>
      <p class="page-hero-sub">
        Our commitment to safeguarding personal, proprietary, and corporate client information in accordance with professional ethical standards and applicable data protection legislation.
      </p>
    </div>
  </section>

  <section class="section-pad" style="background-color: var(--color-white);">
    <div class="container" style="max-width: 860px;">
      <article style="color: var(--color-slate); line-height: 1.85; font-size: var(--text-base);">
        <h2 style="font-size: var(--text-2xl); color: var(--color-navy); margin-bottom: var(--space-4);">1. Introduction</h2>
        <p style="margin-bottom: var(--space-6);">
          BGSS &amp; Associates ("we," "our," or "the Firm") is a chartered accountancy partnership firm based in Ahmedabad, Gujarat, India. As professional advisors governed by the regulations of the Institute of Chartered Accountants of India (ICAI), we maintain rigorous confidentiality standards regarding all information entrusted to us by clients, prospective clients, and website visitors.
        </p>

        <h2 style="font-size: var(--text-2xl); color: var(--color-navy); margin-bottom: var(--space-4);">2. Information We Collect</h2>
        <p style="margin-bottom: var(--space-4);">
          When you interact with our website or contact our practice, we may collect:
        </p>
        <ul style="list-style: disc; padding-left: var(--space-6); margin-bottom: var(--space-6);">
          <li>Identity information: Full name, professional title, and company/entity affiliation.</li>
          <li>Contact details: Business email address, telephone numbers, and corporate postal addresses.</li>
          <li>Mandate background: Specific practice areas of interest and contextual descriptions of advisory requirements provided in enquiry forms.</li>
          <li>Technical data: Anonymised IP addresses, browser types, and standard web access logs collected solely for site security and performance.</li>
        </ul>

        <h2 style="font-size: var(--text-2xl); color: var(--color-navy); margin-bottom: var(--space-4);">3. Purpose and Use of Data</h2>
        <p style="margin-bottom: var(--space-6);">
          Information gathered is processed exclusively for professional consultation, responding to inquiries, executing chartered accountancy mandates, maintaining security against malicious automated submissions, and complying with statutory obligations. We never sell, lease, or monetize client data under any circumstances.
        </p>

        <h2 style="font-size: var(--text-2xl); color: var(--color-navy); margin-bottom: var(--space-4);">4. Professional Confidentiality</h2>
        <p style="margin-bottom: var(--space-6);">
          Information shared with BGSS &amp; Associates within the scope of professional advisory engagements is protected by statutory professional privilege and ethical standards prescribed by the Chartered Accountants Act, 1949 and the ICAI Code of Ethics.
        </p>

        <h2 style="font-size: var(--text-2xl); color: var(--color-navy); margin-bottom: var(--space-4);">5. Contact for Inquiries</h2>
        <p>
          For inquiries regarding our data handling or confidentiality policies, please reach out directly to:
          <br><strong>BGSS &amp; Associates</strong>
          <br>Email: <a href="mailto:devshah4689@gmail.com" style="color: var(--color-gold); font-weight: 600;">devshah4689@gmail.com</a>
          <br>Telephone: +91 79 4890 4100
        </p>
      </article>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
