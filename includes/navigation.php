<?php
/**
 * navigation.php — Site-wide navigation for BGSS & Associates
 *
 * Variables accepted from the including page:
 *   $current_page (string) – Slug identifying the active page.
 *                            Accepted values: 'home' | 'partners' | 'services' | 'knowledge-bank' | 'fema' | 'career' | 'contact'
 *
 * Requires: config.php constants (SITE_NAME, SITE_PHONE, SITE_EMAIL)
 */

if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/../config.php';
}

$current_page = $current_page ?? 'home';

/**
 * Helper: returns 'active' when the supplied slug matches the current page.
 */
function nav_active(string $slug, string $current): string
{
    return $slug === $current ? 'active' : '';
}
?>

<!-- ── Navigation Bar (Matching Uploaded Pill Navigation Screenshot) ─────────── -->
<nav id="site-nav" role="navigation" aria-label="Main navigation">
    <div class="nav-container">

        <!-- Logo: Bold Red BGSS -->
        <a href="/" class="nav-logo" aria-label="<?= htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8') ?> - Home">
            <span class="nav-logo-text">BGSS</span>
        </a>

        <!-- PILL NAVIGATION BAR (Exact Match to Screenshot in Brand Red - All 7 Sections) -->
        <div class="nav-pill-wrapper">
            <nav class="nav-pill-bar" role="navigation" aria-label="Main menu">
                <!-- 1. HOME -->
                <a href="/"
                   class="nav-pill-link <?= nav_active('home', $current_page) ?>"
                   data-tooltip="Home"
                   aria-label="Home"
                   <?= $current_page === 'home' ? 'aria-current="page"' : '' ?>
                >
                    <i class="fa-solid fa-table-cells-large" aria-hidden="true"></i>
                </a>

                <!-- 2. PARTNERS -->
                <a href="/about.php#partners"
                   class="nav-pill-link <?= nav_active('partners', $current_page) ?>"
                   data-tooltip="Partners"
                   aria-label="Partners"
                   <?= $current_page === 'partners' ? 'aria-current="page"' : '' ?>
                >
                    <i class="fa-solid fa-box-archive" aria-hidden="true"></i>
                </a>

                <!-- 3. SERVICES -->
                <a href="/services.php"
                   class="nav-pill-link <?= nav_active('services', $current_page) ?>"
                   data-tooltip="Services"
                   aria-label="Services"
                   <?= $current_page === 'services' ? 'aria-current="page"' : '' ?>
                >
                    <i class="fa-solid fa-cash-register" aria-hidden="true"></i>
                </a>

                <!-- 4. KNOWLEDGE BANK -->
                <a href="/services.php#knowledge-bank"
                   class="nav-pill-link <?= nav_active('knowledge-bank', $current_page) ?>"
                   data-tooltip="Knowledge Bank"
                   aria-label="Knowledge Bank"
                   <?= $current_page === 'knowledge-bank' ? 'aria-current="page"' : '' ?>
                >
                    <i class="fa-solid fa-book-open" aria-hidden="true"></i>
                </a>

                <!-- 5. FEMA -->
                <a href="/services.php#fema-forex"
                   class="nav-pill-link <?= nav_active('fema', $current_page) ?>"
                   data-tooltip="FEMA"
                   aria-label="FEMA and Global Advisory"
                   <?= $current_page === 'fema' ? 'aria-current="page"' : '' ?>
                >
                    <i class="fa-solid fa-globe" aria-hidden="true"></i>
                </a>

                <!-- 6. CAREER -->
                <a href="/contact.php#career"
                   class="nav-pill-link <?= nav_active('career', $current_page) ?>"
                   data-tooltip="Career"
                   aria-label="Career Opportunities"
                   <?= $current_page === 'career' ? 'aria-current="page"' : '' ?>
                >
                    <i class="fa-solid fa-briefcase" aria-hidden="true"></i>
                </a>

                <!-- 7. CONTACT -->
                <a href="/contact.php"
                   class="nav-pill-link <?= nav_active('contact', $current_page) ?>"
                   data-tooltip="Contact"
                   aria-label="Contact"
                   <?= $current_page === 'contact' ? 'aria-current="page"' : '' ?>
                >
                    <i class="fa-solid fa-receipt" aria-hidden="true"></i>
                </a>
            </nav>
        </div>

        <!-- Right: Circular Search Button (Matching reference website bgssassociates.com) -->
        <div class="nav-right-actions">
            <button id="nav-search-btn" class="nav-search-circle" type="button" aria-label="Search website">
                <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
            </button>
        </div>

    </div><!-- /.nav-container -->
</nav><!-- /#site-nav -->

<!-- Search Flyout Modal -->
<div id="nav-search-modal" role="dialog" aria-modal="true" aria-label="Site Search">
    <div class="search-modal-inner">
        <div class="search-modal-input-wrap">
            <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
            <input type="search" id="nav-search-input" class="search-modal-input" placeholder="Search services, partners, knowledge bank…" autocomplete="off">
            <button type="button" id="nav-search-close" class="search-modal-close" aria-label="Close search">
                <i class="fa-solid fa-xmark" aria-hidden="true"></i>
            </button>
        </div>
        <div class="search-modal-quicklinks">
            <span style="font-size:0.75rem;font-weight:700;color:#94A3B8;display:inline-flex;align-items:center;margin-right:4px;">POPULAR:</span>
            <a href="/services.php#tax-advisory" class="search-quicklink">Corporate Tax</a>
            <a href="/services.php#transfer-pricing" class="search-quicklink">Transfer Pricing</a>
            <a href="/services.php#fema-forex" class="search-quicklink">FEMA</a>
            <a href="/about.php#partners" class="search-quicklink">Partners</a>
            <a href="/services.php#mergers-acquisitions" class="search-quicklink">M&amp;A</a>
        </div>
    </div>
</div>
