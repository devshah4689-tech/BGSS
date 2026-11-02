<?php
/**
 * disclaimer.php — Professional Regulatory Disclaimer for BGSS & Associates
 * Complying with ICAI Regulations
 * PHP 8+
 */

declare(strict_types=1);

require_once __DIR__ . '/config.php';

$page_title       = 'Regulatory Disclaimer | BGSS & Associates – Chartered Accountants';
$meta_description = 'Professional and statutory disclaimer for BGSS & Associates in accordance with the regulations and guidelines prescribed by the Institute of Chartered Accountants of India (ICAI).';
$current_page     = 'disclaimer';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navigation.php';
?>

<main id="main-content">
  <section class="page-hero" aria-labelledby="disclaimer-title">
    <div class="page-hero-bg" aria-hidden="true">
      <img src="/assets/images/hero-bg.svg" alt="" fetchpriority="high">
    </div>
    <div class="page-hero-content">
      <nav class="page-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span aria-hidden="true">/</span>
        <span>Disclaimer</span>
      </nav>
      <p class="overline">Regulatory Compliance</p>
      <h1 id="disclaimer-title">Regulatory <em>Disclaimer.</em></h1>
      <p class="page-hero-sub">
        Official statutory disclosures in compliance with guidelines formulated by the Institute of Chartered Accountants of India (ICAI).
      </p>
    </div>
  </section>

  <section class="section-pad" style="background-color: var(--color-white);">
    <div class="container" style="max-width: 860px;">
      <article style="color: var(--color-slate); line-height: 1.85; font-size: var(--text-base);">
        <h2 style="font-size: var(--text-2xl); color: var(--color-navy); margin-bottom: var(--space-4);">1. ICAI Compliance &amp; Non-Solicitation</h2>
        <p style="margin-bottom: var(--space-6);">
          In accordance with the guidelines and code of ethics established by the Institute of Chartered Accountants of India (ICAI), this website is maintained solely for the purpose of providing general factual information regarding BGSS &amp; Associates and its practice areas. This website does not constitute, and shall not be construed as, advertising, solicitation, invitation, or inducement of any sort whatsoever to solicit work.
        </p>

        <h2 style="font-size: var(--text-2xl); color: var(--color-navy); margin-bottom: var(--space-4);">2. Not Professional Legal or Tax Advice</h2>
        <p style="margin-bottom: var(--space-6);">
          The contents published on this website—including text, graphics, insights, and service overviews—are intended solely for general informational purposes and do not constitute formal tax, legal, financial, or regulatory advice. Users and readers should not act upon any information contained herein without obtaining independent, formal professional counsel tailored to their specific factual scenario.
        </p>

        <h2 style="font-size: var(--text-2xl); color: var(--color-navy); margin-bottom: var(--space-4);">3. No Professional-Client Relationship</h2>
        <p style="margin-bottom: var(--space-6);">
          Accessing, browsing, or transmitting inquiries through this website, or interacting via email or web form, does not establish a chartered accountant-client advisory relationship between the user and BGSS &amp; Associates. A formal client engagement is created exclusively upon the execution of an official, bilateral engagement letter setting out agreed terms of reference.
        </p>

        <h2 style="font-size: var(--text-2xl); color: var(--color-navy); margin-bottom: var(--space-4);">4. Limitation of Liability</h2>
        <p style="margin-bottom: var(--space-6);">
          While BGSS &amp; Associates endeavours to keep information accurate and up to date, tax laws, judicial interpretations, and administrative circulars in India and internationally are subject to constant amendment. BGSS &amp; Associates expressly disclaims all warranties, express or implied, regarding the completeness, accuracy, or timeliness of website material, and assumes no liability for actions taken in reliance upon the contents of this website.
        </p>

        <h2 style="font-size: var(--text-2xl); color: var(--color-navy); margin-bottom: var(--space-4);">5. Intellectual Property</h2>
        <p>
          All trademarks, logos, brand elements, and written materials on this site are the intellectual property of BGSS &amp; Associates. Unauthorised duplication, reproduction, or distribution without prior written authorization is strictly prohibited.
        </p>
      </article>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
