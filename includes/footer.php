<?php
/**
 * footer.php — Site-wide footer, script loading, and closing tags for BGSS & Associates
 *
 * Outputs:
 *   - Full .site-footer element (brand, nav, services, contact columns)
 *   - Footer bottom bar with legal links
 *   - GSAP + ScrollTrigger CDN scripts
 *   - Local JS: /assets/js/main.js, /assets/js/animations.js
 *   - Closing </body></html>
 *
 * Requires: config.php constants (SITE_NAME, SITE_PHONE, SITE_EMAIL)
 */

if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/../config.php';
}

$footer_year = date('Y');
?>

<!-- ════════════════════════════════════════════════════════════════════════ -->
<!--  SITE FOOTER                                                            -->
<!-- ════════════════════════════════════════════════════════════════════════ -->
<footer class="site-footer" role="contentinfo">
    <div class="footer-container">
        <div class="footer-grid">

            <!-- ── Column 1 : Brand ──────────────────────────────────────── -->
            <div class="footer-col footer-col--brand">
                <a href="/" class="footer-logo" aria-label="<?= htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8') ?> - Home">
                    <img src="/assets/images/bgss-logo-white.svg" alt="<?= htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8') ?>" style="height: 30px; width: auto; margin-bottom: 8px; display: block;">
                    <span class="footer-logo-name"><?= htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8') ?></span>
                    <span class="footer-logo-sub">Chartered Accountants</span>
                </a>

                <p class="footer-brand-desc">
                    A premier chartered accountancy firm headquartered in Ahmedabad, delivering
                    strategic tax, regulatory, and advisory excellence to businesses across India
                    and beyond.
                </p>

                <!-- Social Icons -->
                <div class="footer-social" aria-label="Social media links">
                    <a href="#"
                       class="footer-social-link"
                       aria-label="Follow BGSS &amp; Associates on LinkedIn"
                       rel="noopener noreferrer"
                       target="_blank"
                    >
                        <i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
                    </a>
                </div>
            </div><!-- /.footer-col--brand -->

            <!-- ── Column 2 : Navigation ─────────────────────────────────── -->
            <nav class="footer-col footer-col--nav" aria-label="Footer navigation">
                <h3 class="footer-heading">Navigation</h3>
                <ul class="footer-links" role="list">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about.php">About Us</a></li>
                    <li><a href="/about.php#partners">Our Team</a></li>
                    <li><a href="/services.php">Services</a></li>
                    <li><a href="#insights">Insights</a></li>
                    <li><a href="/contact.php">Contact</a></li>
                </ul>
            </nav><!-- /.footer-col--nav -->

            <!-- ── Column 3 : Services ───────────────────────────────────── -->
            <nav class="footer-col footer-col--services" aria-label="Our services">
                <h3 class="footer-heading">Our Services</h3>
                <ul class="footer-links" role="list">
                    <li><a href="/services.php#tax-advisory">Tax Advisory</a></li>
                    <li><a href="/services.php#corporate-tax">Corporate Tax Compliance</a></li>
                    <li><a href="/services.php#tax-litigation">Tax Litigation</a></li>
                    <li><a href="/services.php#transfer-pricing">Transfer Pricing</a></li>
                    <li><a href="/services.php#fema">Foreign Exchange Management</a></li>
                    <li><a href="/services.php#ma">Mergers &amp; Acquisitions</a></li>
                </ul>
            </nav><!-- /.footer-col--services -->

            <!-- ── Column 4 : Contact ────────────────────────────────────── -->
            <div class="footer-col footer-col--contact">
                <h3 class="footer-heading">Contact Us</h3>

                <address class="footer-contact-list">
                    <div class="footer-contact-item" style="white-space:nowrap;display:flex;align-items:center;gap:6px;flex-wrap:nowrap;">
                        <i class="fa-solid fa-phone footer-contact-icon" aria-hidden="true" style="flex-shrink:0;"></i>
                        <a href="tel:+919099927783" style="white-space:nowrap;" aria-label="Call us at <?= htmlspecialchars(SITE_PHONE, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(SITE_PHONE, ENT_QUOTES, 'UTF-8') ?></a>
                        <span style="opacity:0.6;">/</span>
                        <a href="tel:+917948904100" style="white-space:nowrap;" aria-label="Call us at <?= htmlspecialchars(SITE_PHONE_ALT, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(SITE_PHONE_ALT, ENT_QUOTES, 'UTF-8') ?></a>
                    </div>

                    <div class="footer-contact-item">
                        <i class="fa-solid fa-envelope footer-contact-icon" aria-hidden="true"></i>
                        <a href="mailto:<?= htmlspecialchars(SITE_EMAIL, ENT_QUOTES, 'UTF-8') ?>"
                           aria-label="Email us at <?= htmlspecialchars(SITE_EMAIL, ENT_QUOTES, 'UTF-8') ?>"
                        ><?= htmlspecialchars(SITE_EMAIL, ENT_QUOTES, 'UTF-8') ?></a>
                    </div>

                    <div class="footer-contact-item">
                        <i class="fa-solid fa-location-dot footer-contact-icon" aria-hidden="true"></i>
                        <a href="https://maps.google.com/?q=Shiti+Ratna+Building+Panchwati+Circle+CG+Road+Ahmedabad" target="_blank" rel="noopener noreferrer" style="color:inherit;text-decoration:none;" aria-label="View BGSS &amp; Associates on Google Maps">
                            <span>604, Shiti Ratna, Panchwati Circle, C.G. Road, Ahmedabad &ndash; 380 009</span>
                        </a>
                    </div>
                </address>

                <!-- Quick Enquiry CTA -->
                <a href="/contact.php"
                   class="footer-cta js-open-contact-modal"
                   aria-label="Send a quick enquiry to BGSS &amp; Associates"
                >Quick Enquiry</a>
            </div><!-- /.footer-col--contact -->

        </div><!-- /.footer-grid -->
    </div><!-- /.footer-container -->

    <!-- ── Footer Bottom Bar ─────────────────────────────────────────────── -->
    <div class="footer-bottom" role="contentinfo">
        <div class="footer-container footer-bottom-inner">
            <p class="footer-copy">
                &copy; <?= $footer_year ?> <?= htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8') ?>.
                All Rights Reserved.
            </p>
            <nav class="footer-legal-links" aria-label="Legal links">
                <a href="/privacy-policy.php">Privacy Policy</a>
                <span class="footer-legal-sep" aria-hidden="true">&middot;</span>
                <a href="/cookie-policy.php">Cookie Policy</a>
                <span class="footer-legal-sep" aria-hidden="true">&middot;</span>
                <a href="/disclaimer.php">Disclaimer</a>
            </nav>
        </div>
    </div><!-- /.footer-bottom -->

</footer><!-- /.site-footer -->

<?php require_once __DIR__ . '/contact-popup.php'; ?>

<!-- ════════════════════════════════════════════════════════════════════════ -->
<!--  SCRIPTS                                                                -->
<!-- ════════════════════════════════════════════════════════════════════════ -->

<!-- GSAP core -->
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
    integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    defer
></script>

<!-- GSAP ScrollTrigger plugin -->
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
    integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zws0QDteBmrMaTLQekMFWhlKQ7gCbfRBSRfw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    defer
></script>

<!-- Local scripts -->
<script src="/assets/js/intro-animation.js?v=1.0" defer></script>
<script src="/assets/js/main.js?v=1.0"       defer></script>
<script src="/assets/js/animations.js?v=1.0" defer></script>
<?php if (!empty($extra_js)): ?>
<script src="<?= htmlspecialchars($extra_js, ENT_QUOTES, 'UTF-8') ?>" defer></script>
<?php endif; ?>

</body>
</html>
