<?php
/**
 * contact.php — Contact & Direct Consultation for BGSS & Associates
 * PHP 8+
 */

declare(strict_types=1);

require_once __DIR__ . '/config.php';

$page_title       = 'Contact & Consultation | BGSS & Associates – Chartered Accountants';
$meta_description = 'Connect with the partners at BGSS & Associates for strategic tax advisory, litigation defense, transfer pricing, FEMA, or M&A requirements in Ahmedabad and globally.';
$meta_keywords    = 'contact chartered accountants Ahmedabad, tax advisory consultation, BGSS associates phone email, transfer pricing consultant contact';
$current_page     = 'contact';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navigation.php';
?>

<main id="main-content">

  <!-- ═══════════════════════════════════════════════════════
       SECTION 01 – PAGE HERO
       ═══════════════════════════════════════════════════════ -->
  <section class="page-hero" aria-labelledby="contact-hero-heading">
    <div class="page-hero-bg" aria-hidden="true">
      <img src="/assets/images/hero-bg.svg" alt="" fetchpriority="high">
    </div>
    <div class="page-hero-content">
      <nav class="page-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span aria-hidden="true">/</span>
        <span>Contact</span>
      </nav>
      <p class="overline">Get In Touch</p>
      <h1 id="contact-hero-heading">
        Let's Start a <em>Conversation.</em>
      </h1>
      <p class="page-hero-sub">
        Connect directly with our partners to explore how BGSS &amp; Associates can support your tax, regulatory, and corporate restructuring requirements.
      </p>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════
       SECTION 02 – CONTACT DETAILS & FORM
       ═══════════════════════════════════════════════════════ -->
  <section class="section-pad" style="background-color: var(--color-white);">
    <div class="container">
      <div class="contact-info-grid">

        <!-- Left Column: Contact Information -->
        <div class="contact-info-col">
          <p class="overline">Direct Reach</p>
          <h2>Connect with Our Advisory Team</h2>
          <div class="gold-rule"></div>
          
          <p style="color: var(--color-slate); font-size: var(--text-base); line-height: 1.8; margin-bottom: var(--space-8);">
            We advise corporate groups, family enterprises, and multinational entities across India and internationally. Every inquiry is reviewed with discretion by a relevant practice partner.
          </p>

          <div class="contact-info-item">
            <div class="contact-info-item-icon" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                <path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
            </div>
            <div>
              <div class="contact-info-item-label">Telephone</div>
              <div class="contact-info-item-value">
                <a href="tel:+917948904100">+91 79 4890 4100</a> / <a href="tel:+917948904101">4101</a>
              </div>
              <p style="font-size: var(--text-xs); color: var(--color-muted); margin-top: 4px;">
                Direct switchboard to partners’ executive chambers
              </p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-item-icon" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
            </div>
            <div>
              <div class="contact-info-item-label">Electronic Mail</div>
              <div class="contact-info-item-value">
                <a href="mailto:devshah4689@gmail.com">devshah4689@gmail.com</a>
              </div>
              <p style="font-size: var(--text-xs); color: var(--color-muted); margin-top: 4px;">
                Responses provided within one business day
              </p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-item-icon" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
            </div>
            <div>
              <div class="contact-info-item-label">Corporate Office</div>
              <div class="contact-info-item-value">
                Ahmedabad, Gujarat, India
              </div>
              <p style="font-size: var(--text-xs); color: var(--color-muted); margin-top: 4px;">
                Consultations by appointment
              </p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-item-icon" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                <circle cx="12" cy="12" r="10"/>
                <polyline points="12 6 12 12 16 14"/>
              </svg>
            </div>
            <div>
              <div class="contact-info-item-label">Business Hours</div>
              <div class="contact-info-item-value" style="font-size: var(--text-base);">
                Monday – Friday: 9:30 AM – 6:30 PM IST
              </div>
              <p style="font-size: var(--text-xs); color: var(--color-muted); margin-top: 4px;">
                Saturday: By appointment | Sunday: Closed
              </p>
            </div>
          </div>

        </div>

        <!-- Right Column: Consultation Request Form -->
        <div>
          <div style="background-color: var(--color-off-white); border: 1px solid var(--color-border); padding: clamp(2rem, 4vw, 3.5rem); border-radius: var(--radius-sm); box-shadow: var(--shadow-sm);">
            <p class="overline">Confidential Enquiry</p>
            <h3 style="font-size: var(--text-2xl); color: var(--color-navy); margin-bottom: var(--space-2);">
              Schedule an Advisory Discussion
            </h3>
            <p style="font-size: var(--text-sm); color: var(--color-slate); margin-bottom: var(--space-8);">
              Please provide essential background so that the appropriate practice partner can prepare for our initial engagement.
            </p>

            <form
              id="contact-form"
              class="contact-form"
              action="/process-contact.php"
              method="POST"
              novalidate
              aria-label="Corporate enquiry form"
            >
              <!-- CSRF Token -->
              <input type="hidden" name="csrf_token" value="<?= generate_csrf_token() ?>">

              <!-- Honeypot -->
              <div style="position: absolute; left: -9999px; top: -9999px;" aria-hidden="true">
                <label for="website-field">Website</label>
                <input type="text" id="website-field" name="website" tabindex="-1" autocomplete="off">
              </div>

              <div class="form-row">
                <div class="form-group">
                  <label for="full_name">Full Name <span aria-hidden="true" style="color: #c0392b;">*</span></label>
                  <input
                    type="text"
                    id="full_name"
                    name="full_name"
                    placeholder="e.g. Rajesh Mehta"
                    required
                    autocomplete="name"
                    aria-required="true"
                  >
                  <span class="field-error" role="alert" aria-live="polite" style="display:none; color:#c0392b; font-size:var(--text-xs); margin-top:4px;"></span>
                </div>

                <div class="form-group">
                  <label for="company_name">Company / Entity Name <span aria-hidden="true" style="color: #c0392b;">*</span></label>
                  <input
                    type="text"
                    id="company_name"
                    name="company_name"
                    placeholder="e.g. Apex Global Corp"
                    required
                    autocomplete="organization"
                    aria-required="true"
                  >
                  <span class="field-error" role="alert" aria-live="polite" style="display:none; color:#c0392b; font-size:var(--text-xs); margin-top:4px;"></span>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group">
                  <label for="email">Business Email <span aria-hidden="true" style="color: #c0392b;">*</span></label>
                  <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="e.g. rmehta@apexcorp.com"
                    required
                    autocomplete="email"
                    aria-required="true"
                  >
                  <span class="field-error" role="alert" aria-live="polite" style="display:none; color:#c0392b; font-size:var(--text-xs); margin-top:4px;"></span>
                </div>

                <div class="form-group">
                  <label for="phone">Direct Phone <span aria-hidden="true" style="color: #c0392b;">*</span></label>
                  <input
                    type="tel"
                    id="phone"
                    name="phone"
                    placeholder="+91 98765 43210"
                    required
                    autocomplete="tel"
                    aria-required="true"
                  >
                  <span class="field-error" role="alert" aria-live="polite" style="display:none; color:#c0392b; font-size:var(--text-xs); margin-top:4px;"></span>
                </div>
              </div>

              <div class="form-group">
                <label for="service">Practice Area of Interest <span aria-hidden="true" style="color: #c0392b;">*</span></label>
                <select id="service" name="service" required aria-required="true">
                  <option value="" disabled selected>Select an area of practice</option>
                  <?php foreach ($SERVICES as $svc): ?>
                    <option value="<?= htmlspecialchars($svc['id']) ?>"><?= htmlspecialchars($svc['title']) ?></option>
                  <?php endforeach; ?>
                  <option value="general">Comprehensive Advisory / Other Mandate</option>
                </select>
                <span class="field-error" role="alert" aria-live="polite" style="display:none; color:#c0392b; font-size:var(--text-xs); margin-top:4px;"></span>
              </div>

              <div class="form-group">
                <label for="message">Summary of Corporate Requirement</label>
                <textarea
                  id="message"
                  name="message"
                  rows="5"
                  placeholder="Please outline the nature of your inquiry, transaction timeline, or current regulatory challenge…"
                ></textarea>
              </div>

              <div style="margin-top: var(--space-4);">
                <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;">
                  Submit Advisory Request
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
                <p style="font-size: 0.75rem; color: var(--color-muted); text-align: center; margin-top: var(--space-3);">
                  Information shared is treated under strict professional non-disclosure guidelines.
                </p>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════
       SECTION 03 – OFFICE PRESENCE & MAP
       ═══════════════════════════════════════════════════════ -->
  <section class="section-pad map-section" aria-labelledby="map-section-title">
    <div class="container">
      <div style="text-align: center; max-width: 50ch; margin-inline: auto; margin-bottom: var(--space-8);">
        <p class="overline" style="justify-content: center;">Headquarters</p>
        <h2 id="map-section-title" class="section-title">
          Our Ahmedabad <em>Presence</em>
        </h2>
        <div class="gold-rule" style="margin-inline: auto;"></div>
        <p style="color: var(--color-slate); font-size: var(--text-sm);">
          Strategically positioned in Gujarat's primary commercial capital, serving enterprises throughout Western India and connecting with cross-border clients globally.
        </p>
      </div>

      <div class="map-placeholder" aria-label="Ahmedabad Office Map">
        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
          <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/>
          <circle cx="12" cy="9" r="2.5"/>
        </svg>
        <div style="text-align: center;">
          <h4 style="font-family: var(--font-display); font-size: var(--text-xl); color: var(--color-navy); margin-bottom: var(--space-2);">
            BGSS &amp; Associates – Corporate Chambers
          </h4>
          <p style="font-size: var(--text-sm); color: var(--color-slate);">
            Ahmedabad, Gujarat, India
          </p>
          <p style="font-size: var(--text-xs); color: var(--color-muted); margin-top: var(--space-2);">
            Telephone: +91 79 4890 4100 &bull; Email: devshah4689@gmail.com
          </p>
        </div>
      </div>
    </div>
  </section>

</main>

<?php
require_once __DIR__ . '/includes/contact-popup.php';
require_once __DIR__ . '/includes/footer.php';
?>
