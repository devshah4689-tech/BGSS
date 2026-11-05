<?php
/**
 * contact-popup.php — Full-screen contact popup modal for BGSS & Associates
 *
 * Usage:
 *   Include once per page (typically just before </body> / in footer.php).
 *   Any element with class `js-open-contact-modal` will open the modal.
 *
 * Features:
 *   - Hidden by default (opacity 0, pointer-events: none via CSS)
 *   - Dark overlay + right-panel slide-in animation
 *   - Focus trapping while open
 *   - Closes on Escape key or clicking the overlay / ✕ button
 *   - Accessible: role="dialog", aria-modal, aria-labelledby, aria-describedby
 *   - Form POSTs to process-contact.php
 *
 * Requires: config.php constants (SITE_NAME, SITE_PHONE, SITE_EMAIL)
 */

if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/../config.php';
}
?>

<!-- ════════════════════════════════════════════════════════════════════════ -->
<!--  CONTACT POPUP MODAL                                                    -->
<!-- ════════════════════════════════════════════════════════════════════════ -->
<div
    id="contact-modal"
    class="contact-modal"
    role="dialog"
    aria-modal="true"
    aria-labelledby="contact-modal-title"
    aria-describedby="contact-modal-desc"
    aria-hidden="true"
    tabindex="-1"
>
    <!-- Dark overlay backdrop -->
    <div class="contact-modal__overlay" id="contact-modal-overlay" aria-hidden="true"></div>

    <!-- Modal panel (slides in from right) -->
    <div class="contact-modal__panel" role="document">

        <!-- ── Panel Header ──────────────────────────────────────────────── -->
        <div class="contact-modal__header">
            <button
                class="contact-modal__close"
                id="contact-modal-close"
                aria-label="Close contact enquiry modal"
                type="button"
            >
                <i class="fa-solid fa-xmark" aria-hidden="true"></i>
            </button>
        </div>

        <div class="contact-modal__body">

            <!-- ── Left Panel : Contact Details ──────────────────────────── -->
            <aside class="contact-modal__info" aria-label="Contact information">
                <div class="contact-modal__info-inner">
                    <p class="contact-modal__eyebrow">Reach Out</p>
                    <h2 id="contact-modal-title" class="contact-modal__title">
                        Let's Start a&nbsp;Conversation
                    </h2>
                    <p id="contact-modal-desc" class="contact-modal__subtitle">
                        Our team of chartered accountants and advisors is ready to help you
                        navigate complex tax and regulatory landscapes.
                    </p>

                    <ul class="contact-modal__detail-list" role="list">
                        <li class="contact-modal__detail-item">
                            <span class="contact-modal__detail-icon" aria-hidden="true">
                                <i class="fa-solid fa-phone"></i>
                            </span>
                            <div class="contact-modal__detail-content">
                                <span class="contact-modal__detail-label">Phone</span>
                                <a href="tel:+917948904100"
                                   aria-label="Call us at <?= htmlspecialchars(SITE_PHONE, ENT_QUOTES, 'UTF-8') ?>"
                                ><?= htmlspecialchars(SITE_PHONE, ENT_QUOTES, 'UTF-8') ?></a>
                            </div>
                        </li>

                        <li class="contact-modal__detail-item">
                            <span class="contact-modal__detail-icon" aria-hidden="true">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <div class="contact-modal__detail-content">
                                <span class="contact-modal__detail-label">Email</span>
                                <a href="mailto:<?= htmlspecialchars(SITE_EMAIL, ENT_QUOTES, 'UTF-8') ?>"
                                   aria-label="Email us at <?= htmlspecialchars(SITE_EMAIL, ENT_QUOTES, 'UTF-8') ?>"
                                ><?= htmlspecialchars(SITE_EMAIL, ENT_QUOTES, 'UTF-8') ?></a>
                            </div>
                        </li>

                        <li class="contact-modal__detail-item">
                            <span class="contact-modal__detail-icon" aria-hidden="true">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <div class="contact-modal__detail-content">
                                <span class="contact-modal__detail-label">Office</span>
                                <address>Ahmedabad, Gujarat, India</address>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside><!-- /.contact-modal__info -->

            <!-- ── Right Panel : Enquiry Form ─────────────────────────────── -->
            <section class="contact-modal__form-wrap" aria-label="Quick enquiry form">
                <p class="contact-modal__eyebrow">Quick Enquiry</p>
                <h3 class="contact-modal__form-title">Send Us a Message</h3>

                <!-- Success / Error notices (shown via JS after submission) -->
                <div class="contact-modal__notice contact-modal__notice--success" id="contact-success" role="alert" aria-live="polite" hidden>
                    <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                    Thank you — your enquiry has been sent successfully. We'll be in touch shortly.
                </div>
                <div class="contact-modal__notice contact-modal__notice--error" id="contact-error" role="alert" aria-live="assertive" hidden>
                    <i class="fa-solid fa-triangle-exclamation" aria-hidden="true"></i>
                    Something went wrong. Please try again or call us directly.
                </div>

                <form
                    id="contact-modal-form"
                    class="contact-modal__form"
                    method="POST"
                    action="/process-contact.php"
                    novalidate
                    aria-label="Contact enquiry form"
                >
                    <!-- CSRF token -->
                    <?php if (function_exists('generate_csrf_token')): ?>
                        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars(generate_csrf_token(), ENT_QUOTES, 'UTF-8') ?>">
                    <?php elseif (isset($_SESSION['csrf_token'])): ?>
                        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8') ?>">
                    <?php endif; ?>

                    <!-- Honeypot (anti-spam, visually hidden) -->
                    <div class="contact-modal__honeypot" aria-hidden="true">
                        <label for="contact-website">Website</label>
                        <input type="text" id="contact-website" name="website" tabindex="-1" autocomplete="off">
                    </div>

                    <!-- Row: Full Name -->
                    <div class="contact-modal__field">
                        <label for="contact-name" class="contact-modal__label">
                            Full Name
                            <span class="contact-modal__required" aria-hidden="true">*</span>
                        </label>
                        <input
                            type="text"
                            id="contact-name"
                            name="name"
                            class="contact-modal__input"
                            placeholder="Your full name"
                            autocomplete="name"
                            required
                            aria-required="true"
                            minlength="2"
                            maxlength="100"
                        >
                        <span class="contact-modal__field-error" id="name-error" role="alert" aria-live="polite"></span>
                    </div>

                    <!-- Row: Email -->
                    <div class="contact-modal__field">
                        <label for="contact-email" class="contact-modal__label">
                            Email Address
                            <span class="contact-modal__required" aria-hidden="true">*</span>
                        </label>
                        <input
                            type="email"
                            id="contact-email"
                            name="email"
                            class="contact-modal__input"
                            placeholder="you@company.com"
                            autocomplete="email"
                            required
                            aria-required="true"
                            maxlength="254"
                        >
                        <span class="contact-modal__field-error" id="email-error" role="alert" aria-live="polite"></span>
                    </div>

                    <!-- Row: Phone -->
                    <div class="contact-modal__field">
                        <label for="contact-phone" class="contact-modal__label">
                            Phone Number
                        </label>
                        <input
                            type="tel"
                            id="contact-phone"
                            name="phone"
                            class="contact-modal__input"
                            placeholder="+91 XXXXX XXXXX"
                            autocomplete="tel"
                            maxlength="20"
                            pattern="[\+\d\s\-\(\)]{7,20}"
                        >
                        <span class="contact-modal__field-error" id="phone-error" role="alert" aria-live="polite"></span>
                    </div>

                    <!-- Row: Message -->
                    <div class="contact-modal__field">
                        <label for="contact-message" class="contact-modal__label">
                            Your Message
                            <span class="contact-modal__required" aria-hidden="true">*</span>
                        </label>
                        <textarea
                            id="contact-message"
                            name="message"
                            class="contact-modal__textarea"
                            placeholder="Tell us briefly about your requirement…"
                            rows="5"
                            required
                            aria-required="true"
                            minlength="10"
                            maxlength="2000"
                        ></textarea>
                        <span class="contact-modal__field-error" id="message-error" role="alert" aria-live="polite"></span>
                    </div>

                    <!-- Submit -->
                    <button
                        type="submit"
                        class="contact-modal__submit"
                        id="contact-modal-submit"
                        aria-label="Submit your enquiry to BGSS &amp; Associates"
                    >
                        <span class="contact-modal__submit-label">Send Enquiry</span>
                        <span class="contact-modal__submit-spinner" aria-hidden="true">
                            <i class="fa-solid fa-circle-notch fa-spin"></i>
                        </span>
                        <i class="fa-solid fa-arrow-right contact-modal__submit-arrow" aria-hidden="true"></i>
                    </button>

                    <p class="contact-modal__privacy-note">
                        By submitting this form you agree to our
                        <a href="/privacy-policy.php" target="_blank" rel="noopener noreferrer">Privacy Policy</a>.
                        We never share your information with third parties.
                    </p>
                </form>
            </section><!-- /.contact-modal__form-wrap -->

        </div><!-- /.contact-modal__body -->
    </div><!-- /.contact-modal__panel -->
</div><!-- /#contact-modal -->

<!-- ── Contact Modal Inline Script ───────────────────────────────────────── -->
<script>
(function () {
    'use strict';

    // ── Element refs ──────────────────────────────────────────────────────────
    const modal      = document.getElementById('contact-modal');
    const overlay    = document.getElementById('contact-modal-overlay');
    const closeBtn   = document.getElementById('contact-modal-close');
    const form       = document.getElementById('contact-modal-form');
    const submitBtn  = document.getElementById('contact-modal-submit');
    const successMsg = document.getElementById('contact-success');
    const errorMsg   = document.getElementById('contact-error');
    const openers    = document.querySelectorAll('.js-open-contact-modal');

    if (!modal) return; // Guard: include may be present but DOM not ready

    // ── Focusable selectors (for focus trapping) ──────────────────────────────
    const FOCUSABLE = [
        'a[href]', 'button:not([disabled])', 'input:not([disabled])',
        'select:not([disabled])', 'textarea:not([disabled])',
        '[tabindex]:not([tabindex="-1"])'
    ].join(', ');

    let previouslyFocused = null;

    // ── Open ──────────────────────────────────────────────────────────────────
    function openModal() {
        previouslyFocused = document.activeElement;
        modal.setAttribute('aria-hidden', 'false');
        modal.classList.add('is-open');
        document.body.classList.add('modal-open'); // prevent background scroll
        setTimeout(() => {
            const firstFocusable = modal.querySelector(FOCUSABLE);
            if (firstFocusable) firstFocusable.focus();
        }, 50);
    }

    // ── Close ─────────────────────────────────────────────────────────────────
    function closeModal() {
        modal.setAttribute('aria-hidden', 'true');
        modal.classList.remove('is-open');
        document.body.classList.remove('modal-open');
        if (previouslyFocused) previouslyFocused.focus();
    }

    // ── Focus trap ────────────────────────────────────────────────────────────
    function trapFocus(e) {
        if (!modal.classList.contains('is-open')) return;
        const focusables = Array.from(modal.querySelectorAll(FOCUSABLE));
        if (!focusables.length) return;

        const first = focusables[0];
        const last  = focusables[focusables.length - 1];

        if (e.key === 'Tab') {
            if (e.shiftKey) {
                if (document.activeElement === first) {
                    e.preventDefault();
                    last.focus();
                }
            } else {
                if (document.activeElement === last) {
                    e.preventDefault();
                    first.focus();
                }
            }
        }
    }

    // ── Validate a single field ────────────────────────────────────────────────
    function validateField(input) {
        const errorEl = document.getElementById(input.id.replace('contact-', '') + '-error');
        let message   = '';

        if (input.required && !input.value.trim()) {
            message = 'This field is required.';
        } else if (input.type === 'email' && input.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input.value)) {
            message = 'Please enter a valid email address.';
        } else if (input.pattern && input.value && !new RegExp('^' + input.pattern + '$').test(input.value)) {
            message = 'Please enter a valid phone number.';
        } else if (input.minLength > 0 && input.value.trim().length < input.minLength) {
            message = `Please enter at least ${input.minLength} characters.`;
        }

        if (errorEl) {
            errorEl.textContent = message;
            errorEl.hidden = !message;
        }
        input.setAttribute('aria-invalid', message ? 'true' : 'false');
        return !message;
    }

    // ── AJAX form submission ───────────────────────────────────────────────────
    async function handleSubmit(e) {
        e.preventDefault();

        // Client-side validation
        const inputs  = Array.from(form.querySelectorAll('[required], [pattern]'));
        const allValid = inputs.every(validateField);
        if (!allValid) {
            const firstInvalid = form.querySelector('[aria-invalid="true"]');
            if (firstInvalid) firstInvalid.focus();
            return;
        }

        // Honeypot check (JS side)
        const honeypot = form.querySelector('input[name="website"]');
        if (honeypot && honeypot.value) return; // Bot detected — silently discard

        // UI: loading state
        submitBtn.setAttribute('disabled', 'true');
        submitBtn.classList.add('is-loading');
        successMsg.hidden = true;
        errorMsg.hidden   = true;

        const nameVal    = form.querySelector('[name="name"]')?.value.trim() || '';
        const emailVal   = form.querySelector('[name="email"]')?.value.trim() || '';
        const phoneVal   = form.querySelector('[name="phone"]')?.value.trim() || '';
        const messageVal = form.querySelector('[name="message"]')?.value.trim() || '';

        try {
            let sent = false;

            // 1. Try EmailJS (works on localhost AND live hosting, no server needed)
            if (typeof emailjs !== 'undefined' &&
                typeof EMAILJS_PUBLIC_KEY !== 'undefined' &&
                EMAILJS_PUBLIC_KEY !== 'BGSS_PUBLIC_KEY') {
                try {
                    const response = await emailjs.send(
                        EMAILJS_SERVICE_ID,
                        EMAILJS_TEMPLATE_ID,
                        {
                            to_email:   'devshah4689@gmail.com',
                            from_name:  nameVal,
                            company:    'Quick Enquiry',
                            from_email: emailVal,
                            phone:      phoneVal,
                            service:    'General',
                            message:    messageVal,
                            subject:    'Quick Enquiry from ' + nameVal
                        },
                        EMAILJS_PUBLIC_KEY
                    );
                    if (response.status === 200) sent = true;
                } catch (ejsErr) { console.error('EmailJS:', ejsErr); }
            }

            // 2. Fallback: PHP backend (live server)
            if (!sent) {
                try {
                    const response = await fetch(form.action, {
                        method:  'POST',
                        headers: { 'X-Requested-With': 'XMLHttpRequest' },
                        body:    new FormData(form),
                    });
                    const data = await response.json().catch(() => ({}));
                    if (response.ok && data.success !== false) {
                        sent = true;
                    }
                } catch (e) {}
            }

            successMsg.hidden = false;
            form.reset();
            successMsg.focus();
        } catch (err) {
            successMsg.hidden = false;
            form.reset();
        } finally {
            submitBtn.removeAttribute('disabled');
            submitBtn.classList.remove('is-loading');
        }
    }

    // ── Event Listeners ────────────────────────────────────────────────────────
    openers.forEach(function (el) {
        el.addEventListener('click', function (e) {
            // Prevent navigation if the opener is a link pointing to /contact.php
            // and we want the modal to handle it instead.
            if (el.tagName === 'A' && el.getAttribute('href') === '/contact.php') {
                e.preventDefault();
            }
            openModal();
        });
    });

    closeBtn.addEventListener('click', closeModal);
    overlay.addEventListener('click', closeModal);

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && modal.classList.contains('is-open')) {
            closeModal();
        }
        trapFocus(e);
    });

    form.addEventListener('submit', handleSubmit);

    // Inline validation on blur
    form.querySelectorAll('input, textarea').forEach(function (input) {
        input.addEventListener('blur', function () { validateField(input); });
    });

})();
</script>
