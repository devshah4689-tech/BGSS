<?php
/**
 * header.php — Global HTML <head> and opening <body> for BGSS & Associates
 *
 * Variables accepted from the including page:
 *   $page_title       (string)  – Overrides the default <title>
 *   $meta_description (string)  – Overrides the default meta description
 *   $meta_keywords    (string)  – Additional keywords for the page (optional)
 *   $current_page     (string)  – Slug used by navigation.php for active-state styling
 *
 * Requires: config.php constants (SITE_NAME, SITE_TAGLINE, SITE_URL,
 *           SITE_EMAIL, SITE_PHONE, META_DESCRIPTION, OG_IMAGE)
 */

if (!defined('SITE_NAME')) {
    // Fallback: load config if not already loaded by the parent page
    require_once __DIR__ . '/../config.php';
}

// ── Defaults ──────────────────────────────────────────────────────────────────
$page_title       = $page_title       ?? (SITE_NAME . ' | ' . SITE_TAGLINE);
$meta_description = $meta_description ?? META_DESCRIPTION;
$meta_keywords    = $meta_keywords    ?? 'chartered accountants, tax advisory, corporate tax, transfer pricing, FEMA, mergers acquisitions, Ahmedabad, Gujarat, India';
$canonical_url    = SITE_URL . strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
$og_image         = OG_IMAGE;

// ── JSON-LD structured data ────────────────────────────────────────────────────
$structured_data = [
    '@context'    => 'https://schema.org',
    '@type'       => 'AccountingService',
    'name'        => 'BGSS & Associates',
    'url'         => 'https://bgssassociates.com',
    'telephone'   => '+91-79-4890-4100',
    'email'       => 'info@bgssassociates.com',
    'address'     => [
        '@type'           => 'PostalAddress',
        'addressLocality' => 'Ahmedabad',
        'addressRegion'   => 'Gujarat',
        'addressCountry'  => 'IN',
    ],
    'description' => META_DESCRIPTION,
    'sameAs'      => [],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ── Primary SEO ─────────────────────────────────────────────────────── -->
    <title><?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($meta_description, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="keywords"    content="<?= htmlspecialchars($meta_keywords, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="robots"      content="index, follow">
    <meta name="author"      content="<?= htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8') ?>">

    <!-- ── Canonical ───────────────────────────────────────────────────────── -->
    <link rel="canonical" href="<?= htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8') ?>">

    <!-- ── Open Graph ──────────────────────────────────────────────────────── -->
    <meta property="og:type"        content="website">
    <meta property="og:site_name"   content="<?= htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:title"       content="<?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($meta_description, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:url"         content="<?= htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:image"       content="<?= htmlspecialchars($og_image, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:locale"      content="en_IN">

    <!-- ── Twitter Card ────────────────────────────────────────────────────── -->
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:title"       content="<?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($meta_description, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:image"       content="<?= htmlspecialchars($og_image, ENT_QUOTES, 'UTF-8') ?>">

    <!-- ── Preconnect: Google Fonts ────────────────────────────────────────── -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- ── Google Fonts (Corporate CA Advisory Stack) ────────────────────── -->
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <!-- ── Font Awesome 6 ──────────────────────────────────────────────────── -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plh7eecDqX9igSQ0X1f5qkiT1m+zQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    >

    <!-- ── Stylesheets ─────────────────────────────────────────────────────── -->
    <link rel="stylesheet" href="/assets/css/variables.css?v=1.0">
    <link rel="stylesheet" href="/assets/css/nav.css?v=1.0">
    <link rel="stylesheet" href="/assets/css/main.css?v=1.0">
    <link rel="stylesheet" href="/assets/css/pages.css?v=1.0">
    <link rel="stylesheet" href="/assets/css/intro-animation.css?v=1.0">

    <!-- ── Structured Data (JSON-LD) ───────────────────────────────────────── -->
    <script type="application/ld+json">
        <?= json_encode($structured_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>
    </script>
</head>

<body class="js-loading">

    <!-- ── Cinematic Logo Animation Intro (Video Style) ─────────────────────── -->
    <div id="logo-intro-overlay" role="dialog" aria-label="BGSS &amp; Associates Introduction">
      <canvas id="intro-canvas" class="intro-canvas-bg"></canvas>
      <div class="intro-ambient-glow" aria-hidden="true"></div>

      <div class="intro-content">
        <div class="intro-svg-wrap">
          <svg class="intro-logo-svg" viewBox="0 0 460 120" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <linearGradient id="introRedGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" stop-color="#FF3366" />
                <stop offset="50%" stop-color="#E61E50" />
                <stop offset="100%" stop-color="#C8102E" />
              </linearGradient>
            </defs>
            <!-- Laser stroke drawing outline -->
            <text x="230" y="90" text-anchor="middle" class="intro-logo-stroke">BGSS</text>
            <!-- Glowing gradient solid fill -->
            <text x="230" y="90" text-anchor="middle" class="intro-logo-fill">BGSS</text>
          </svg>
          <div class="intro-shimmer" aria-hidden="true"></div>
        </div>

        <div class="intro-subtitle">CHARTERED ACCOUNTANTS &amp; ADVISORS</div>
        <div class="intro-divider" aria-hidden="true"></div>
        <div class="intro-tagline">CLARITY IN COMPLEXITY &middot; CONFIDENCE IN EVERY DECISION</div>
      </div>

      <button id="intro-skip-btn" class="intro-skip-btn" type="button" aria-label="Skip Introduction">
        Skip Intro <i class="fa-solid fa-forward-step" aria-hidden="true"></i>
      </button>
    </div><!-- /#logo-intro-overlay -->

    <!-- ── Custom Cursor ───────────────────────────────────────────────────── -->
    <div id="custom-cursor"    aria-hidden="true"></div>
    <div id="cursor-follower"  aria-hidden="true"></div>
