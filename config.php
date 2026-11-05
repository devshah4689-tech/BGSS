<?php
/**
 * BGSS & Associates – Site Configuration
 * Central configuration file for the website
 */

// ── Site Identity ──────────────────────────────────────────────────────────────
define('SITE_NAME',        'BGSS & Associates');
define('SITE_TAGLINE',     'Chartered Accountants | Tax & Regulatory Advisory');
define('SITE_URL',         'https://bgssassociates.com');
define('SITE_EMAIL',       'devshah4689@gmail.com');
define('SITE_PHONE',       '+91 90999 27783');
define('SITE_PHONE_ALT',   '+91 79 4890 4100');
define('SITE_WHATSAPP',    '+91 63523 92705');
define('WHATSAPP_NUMBER',  '916352392705');
define('SITE_ADDRESS',     '604, Shiti Ratna Building, Panchwati Circle, C.G. Road, Ahmedabad – 380 009, Gujarat, India');

// ── SEO Defaults ───────────────────────────────────────────────────────────────
define('META_DESCRIPTION', 'BGSS & Associates is a premier chartered accountancy firm offering strategic tax advisory, corporate tax compliance, transfer pricing, FEMA, M&A and regulatory advisory services in India and globally.');
define('META_KEYWORDS',    'tax advisory India, chartered accountants Ahmedabad, transfer pricing, corporate tax compliance, FEMA advisory, mergers acquisitions, tax litigation, BGSS Associates');
define('OG_IMAGE',         SITE_URL . '/assets/images/og-image.jpg');

// ── Contact Form ───────────────────────────────────────────────────────────────
define('FORM_TO_EMAIL',    'devshah4689@gmail.com');
define('FORM_FROM_EMAIL',  'noreply@bgssassociates.com');
define('FORM_FROM_NAME',   'BGSS Website Contact');

// ── Security ───────────────────────────────────────────────────────────────────
define('CSRF_SECRET',      'bgss_2024_secure_token_xK9mN3pQ7rT2vW5y');

// ── Environment ────────────────────────────────────────────────────────────────
define('DEBUG_MODE', false);

if (DEBUG_MODE) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    error_reporting(0);
}

// ── Session Start ──────────────────────────────────────────────────────────────
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ── CSRF Helper ────────────────────────────────────────────────────────────────
function generate_csrf_token(): string {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function verify_csrf_token(string $token): bool {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// ── Sanitise Input ─────────────────────────────────────────────────────────────
function sanitise_input(string $data): string {
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
}

// ── Services List ──────────────────────────────────────────────────────────────
$SERVICES = [
    ['id' => 'tax-advisory',              'title' => 'Tax Advisory',                  'desc' => 'Comprehensive income-tax planning and advisory for corporates, high-net-worth individuals and family offices across industries.'],
    ['id' => 'corporate-tax-compliance',  'title' => 'Corporate Tax Compliance',      'desc' => 'End-to-end management of corporate tax filings, advance-tax computations and regulatory submissions to ensure full statutory compliance.'],
    ['id' => 'tax-litigation',            'title' => 'Tax Litigation',                'desc' => 'Strategic representation and advisory at all levels of tax disputes – from assessment proceedings through appellate tribunals and High Courts.'],
    ['id' => 'transfer-pricing',          'title' => 'Transfer Pricing',              'desc' => 'Documentation, benchmarking, APA negotiations and dispute resolution for inter-company transactions across borders.'],
    ['id' => 'fema-forex',                'title' => 'Foreign Exchange Management',   'desc' => 'Advisory and compliance under FEMA for inbound and outbound investments, ECB, ODI, FDI and cross-border remittances.'],
    ['id' => 'mergers-acquisitions',      'title' => 'Mergers & Acquisitions',        'desc' => 'Tax-efficient structuring, due diligence and post-merger integration advisory for domestic and cross-border transactions.'],
];

// ── Partners List ──────────────────────────────────────────────────────────────
$PARTNERS = [
    ['name' => 'Bhaumik Goda',      'designation' => 'Chartered Accountant', 'specialty' => 'Corporate Tax & International Advisory',    'img' => 'partner-bhaumik.jpg'],
    ['name' => 'Saumya Sheth',      'designation' => 'Chartered Accountant', 'specialty' => 'Tax Litigation & Regulatory Affairs',       'img' => 'partner-saumya.jpg'],
    ['name' => 'Shalibhadra Shah',  'designation' => 'Chartered Accountant', 'specialty' => 'Transfer Pricing & FEMA Compliance',        'img' => 'partner-shalibhadra.jpg'],
    ['name' => 'Malay Kalavadia',   'designation' => 'Chartered Accountant', 'specialty' => 'Mergers & Acquisitions, Restructuring',     'img' => 'partner-malay.jpg'],
];
