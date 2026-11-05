<?php
/**
 * BGSS & Associates – Homepage
 * index.php
 */

require_once __DIR__ . '/config.php';

$page_title       = SITE_NAME . ' | ' . SITE_TAGLINE;
$meta_description = META_DESCRIPTION;
$current_page     = 'home';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navigation.php';
?>

<main id="main-content">

  <!-- ═══════════════════════════════════════════════════════
       SECTION 01 – 4-BANNER HERO SLIDER WITH ANIMATION & LUXURY COVERED BORDER
       ═══════════════════════════════════════════════════════ -->
  <section class="hero hero-slider-section" id="hero" aria-label="Homepage hero banner slider">
    <div class="hero-canvas-frame">
      <!-- Illuminated Top Curved Border Beam -->
      <div class="hero-curved-border-beam" aria-hidden="true"></div>

      <!-- Luxury Corner Accent Brackets -->
      <div class="hero-corner-bracket top-left" aria-hidden="true"></div>
      <div class="hero-corner-bracket top-right" aria-hidden="true"></div>
      <div class="hero-corner-bracket bottom-left" aria-hidden="true"></div>
      <div class="hero-corner-bracket bottom-right" aria-hidden="true"></div>

      <!-- Slider Viewport -->
      <div class="hero-slider" id="heroSlider" role="region" aria-roledescription="carousel" aria-label="BGSS Key Practice Banners">

        <!-- SLIDE 1: Strategic Corporate Tax Advisory -->
        <div class="hero-slide active" role="group" aria-roledescription="slide" aria-label="1 of 4: Corporate Tax Advisory" data-slide-index="0">
          <div class="hero-bg" aria-hidden="true">
            <img src="/assets/images/hero-bg.jpg" alt="Corporate Tax Advisory &amp; Architecture" fetchpriority="high" decoding="async">
          </div>
          <div class="hero-overlay" aria-hidden="true"></div>

          <div class="hero-content">
            <div class="hero-floating-badge">
              <span class="badge-icon"><i class="fa-solid fa-shield-halved" aria-hidden="true"></i></span>
              <span class="badge-text">Strategic Tax Architecture</span>
              <span class="badge-sep" aria-hidden="true"></span>
              <span class="badge-stat">25+ Years Experience &bull; 500+ Clients</span>
            </div>

            <p class="overline hero-eyebrow">
              <span class="eyebrow-pulsing-dot" aria-hidden="true"></span>
              Chartered Accountants &amp; Advisors
            </p>

            <h1 class="hero-title" aria-label="Clarity in Complexity.">
              <span class="hero-word"><span class="hero-word-inner">Clarity</span></span>
              <span class="hero-word"><span class="hero-word-inner">in</span></span>
              <span class="hero-word hero-line-break"><span class="hero-word-inner">Complexity.</span></span>
            </h1>

            <p class="hero-sub">
              Strategic tax, regulatory and business advisory solutions designed to help enterprises navigate complexity, unlock opportunities and achieve sustainable growth.
            </p>

            <div class="hero-actions">
              <a href="/services.php#tax-advisory" class="btn btn-primary">
                Explore Our Expertise
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
              <a href="/contact.php" class="btn btn-outline">
                Connect With Our Team
              </a>
            </div>
          </div>
        </div><!-- /slide 1 -->

        <!-- SLIDE 2: Tax Litigation & Appellate Defense -->
        <div class="hero-slide" role="group" aria-roledescription="slide" aria-label="2 of 4: Tax Litigation" data-slide-index="1">
          <div class="hero-bg" aria-hidden="true">
            <img src="/assets/images/service-litigation.jpg" alt="Tax Litigation &amp; Dispute Resolution" loading="lazy" decoding="async">
          </div>
          <div class="hero-overlay" aria-hidden="true"></div>

          <div class="hero-content">
            <div class="hero-floating-badge">
              <span class="badge-icon"><i class="fa-solid fa-scale-balanced" aria-hidden="true"></i></span>
              <span class="badge-text">Appellate Litigation Defense</span>
              <span class="badge-sep" aria-hidden="true"></span>
              <span class="badge-stat">ITAT &bull; High Courts &bull; Supreme Court</span>
            </div>

            <p class="overline hero-eyebrow">
              <span class="eyebrow-pulsing-dot" aria-hidden="true"></span>
              Direct Tax Controversy &amp; Dispute Resolution
            </p>

            <h2 class="hero-title" aria-label="Defending Enterprise Value At Every Judicial Forum.">
              <span class="hero-word"><span class="hero-word-inner">Defending</span></span>
              <span class="hero-word"><span class="hero-word-inner">Enterprise</span></span>
              <span class="hero-word hero-line-break"><span class="hero-word-inner">Value</span></span>
              <span class="hero-word"><span class="hero-word-inner">At</span></span>
              <span class="hero-word"><span class="hero-word-inner">Every</span></span>
              <span class="hero-word"><span class="hero-word-inner">Judicial</span></span>
              <span class="hero-word"><span class="hero-word-inner">Forum.</span></span>
            </h2>

            <p class="hero-sub">
              Formidable representation and deep procedural expertise in high-stakes assessment disputes, appellate defenses, and landmark constitutional tax jurisprudence.
            </p>

            <div class="hero-actions">
              <a href="/services.php#tax-litigation" class="btn btn-primary">
                Litigation Capabilities
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
              <a href="/contact.php" class="btn btn-outline">
                Schedule Case Evaluation
              </a>
            </div>
          </div>
        </div><!-- /slide 2 -->

        <!-- SLIDE 3: International Transfer Pricing & FEMA -->
        <div class="hero-slide" role="group" aria-roledescription="slide" aria-label="3 of 4: Transfer Pricing &amp; FEMA" data-slide-index="2">
          <div class="hero-bg" aria-hidden="true">
            <img src="/assets/images/service-transfer-pricing.jpg" alt="International Transfer Pricing &amp; FEMA Compliance" loading="lazy" decoding="async">
          </div>
          <div class="hero-overlay" aria-hidden="true"></div>

          <div class="hero-content">
            <div class="hero-floating-badge">
              <span class="badge-icon"><i class="fa-solid fa-globe" aria-hidden="true"></i></span>
              <span class="badge-text">Cross-Border &amp; Regulatory</span>
              <span class="badge-sep" aria-hidden="true"></span>
              <span class="badge-stat">15+ Jurisdictions &bull; OECD Alignment</span>
            </div>

            <p class="overline hero-eyebrow">
              <span class="eyebrow-pulsing-dot" aria-hidden="true"></span>
              Transfer Pricing, BEPS &amp; Foreign Exchange (FEMA)
            </p>

            <h2 class="hero-title" aria-label="Precision Architecture For Global Capital &amp; Pricing.">
              <span class="hero-word"><span class="hero-word-inner">Precision</span></span>
              <span class="hero-word"><span class="hero-word-inner">Architecture</span></span>
              <span class="hero-word hero-line-break"><span class="hero-word-inner">For</span></span>
              <span class="hero-word"><span class="hero-word-inner">Global</span></span>
              <span class="hero-word"><span class="hero-word-inner">Capital</span></span>
              <span class="hero-word"><span class="hero-word-inner">&amp;</span></span>
              <span class="hero-word"><span class="hero-word-inner">Pricing.</span></span>
            </h2>

            <p class="hero-sub">
              Defensible economic benchmarking, Advance Pricing Agreements (APAs), and comprehensive foreign exchange compliance under RBI regulations for multinational enterprises.
            </p>

            <div class="hero-actions">
              <a href="/services.php#transfer-pricing" class="btn btn-primary">
                Transfer Pricing Desk
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
              <a href="/services.php#fema-forex" class="btn btn-outline">
                FEMA Regulatory Advisory
              </a>
            </div>
          </div>
        </div><!-- /slide 3 -->

        <!-- SLIDE 4: Mergers, Acquisitions & Deal Structuring -->
        <div class="hero-slide" role="group" aria-roledescription="slide" aria-label="4 of 4: M&amp;A Restructuring" data-slide-index="3">
          <div class="hero-bg" aria-hidden="true">
            <img src="/assets/images/service-ma.jpg" alt="Mergers &amp; Acquisitions Structuring" loading="lazy" decoding="async">
          </div>
          <div class="hero-overlay" aria-hidden="true"></div>

          <div class="hero-content">
            <div class="hero-floating-badge">
              <span class="badge-icon"><i class="fa-solid fa-diagram-project" aria-hidden="true"></i></span>
              <span class="badge-text">Transaction Structuring &amp; M&amp;A</span>
              <span class="badge-sep" aria-hidden="true"></span>
              <span class="badge-stat">Due Diligence &bull; NCLT Schemes</span>
            </div>

            <p class="overline hero-eyebrow">
              <span class="eyebrow-pulsing-dot" aria-hidden="true"></span>
              Mergers, Acquisitions &amp; Corporate Reorganization
            </p>

            <h2 class="hero-title" aria-label="Structuring Transformative Deals.">
              <span class="hero-word"><span class="hero-word-inner">Structuring</span></span>
              <span class="hero-word"><span class="hero-word-inner">Transformative</span></span>
              <span class="hero-word hero-line-break"><span class="hero-word-inner">Deals.</span></span>
            </h2>

            <p class="hero-sub">
              Tax-efficient transaction architecture, acquisition due diligence, slump sales, and court-approved corporate restructurings engineered for long-term stakeholder value.
            </p>

            <div class="hero-actions">
              <a href="/services.php#mergers-acquisitions" class="btn btn-primary">
                M&amp;A Capabilities
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
              <a href="/contact.php" class="btn btn-outline">
                Discuss a Transaction
              </a>
            </div>
          </div>
        </div><!-- /slide 4 -->

      </div><!-- /hero-slider -->

      <!-- Slider Navigation Arrow Controls -->
      <div class="hero-slider-controls">
        <button class="hero-slider-btn prev" id="sliderPrevBtn" type="button" aria-label="Previous Slide">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M15 18l-6-6 6-6"/></svg>
        </button>
        <button class="hero-slider-btn next" id="sliderNextBtn" type="button" aria-label="Next Slide">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M9 18l6-6-6-6"/></svg>
        </button>
      </div>

      <!-- Bottom Interactive Slide Bar (Tabs + Progress) -->
      <div class="hero-slider-bottom">
        <div class="hero-slider-bottom-inner">

          <!-- Slide Numerical Counter -->
          <div class="hero-slider-counter" aria-hidden="true">
            <span class="slider-current-num" id="sliderCurrentNum">01</span>
            <span class="slider-counter-divider">/</span>
            <span class="slider-total-num">04</span>
          </div>

          <!-- Slide Tabs with Progress Bars -->
          <div class="hero-slider-tabs" role="tablist" aria-label="Key Practice Areas">
            <button class="hero-slider-tab active" role="tab" aria-selected="true" data-tab-index="0" aria-label="Slide 1: Corporate Tax Advisory">
              <span class="tab-index">01</span>
              <span class="tab-title">Corporate Tax Advisory</span>
              <span class="tab-progress"><span class="tab-progress-bar"></span></span>
            </button>
            <button class="hero-slider-tab" role="tab" aria-selected="false" data-tab-index="1" aria-label="Slide 2: Tax Litigation &amp; Defense">
              <span class="tab-index">02</span>
              <span class="tab-title">Tax Litigation &amp; Defense</span>
              <span class="tab-progress"><span class="tab-progress-bar"></span></span>
            </button>
            <button class="hero-slider-tab" role="tab" aria-selected="false" data-tab-index="2" aria-label="Slide 3: Transfer Pricing &amp; FEMA">
              <span class="tab-index">03</span>
              <span class="tab-title">Transfer Pricing &amp; FEMA</span>
              <span class="tab-progress"><span class="tab-progress-bar"></span></span>
            </button>
            <button class="hero-slider-tab" role="tab" aria-selected="false" data-tab-index="3" aria-label="Slide 4: M&amp;A &amp; Deal Structuring">
              <span class="tab-index">04</span>
              <span class="tab-title">M&amp;A &amp; Deal Structuring</span>
              <span class="tab-progress"><span class="tab-progress-bar"></span></span>
            </button>
          </div>

          <!-- Play / Pause Button -->
          <button class="hero-slider-playpause" id="sliderPlayPauseBtn" type="button" aria-label="Pause slideshow" title="Pause / Play Slideshow">
            <i class="fa-solid fa-pause" id="sliderPlayPauseIcon" aria-hidden="true"></i>
          </button>

        </div>
      </div>
    </div><!-- /hero-canvas-frame -->

    <!-- Scroll Down Indicator -->
    <div class="hero-scroll-indicator" aria-hidden="true">
      <span>Scroll</span>
      <div class="hero-scroll-line"></div>
    </div>
  </section><!-- /hero -->


  <!-- ═══════════════════════════════════════════════════════
       SECTION 01.5 – PARTNERS' THOUGHT (AD TYPE CAROUSEL MATCHING SCREENSHOT)
       ═══════════════════════════════════════════════════════ -->
  <section class="partners-thoughts-section" id="partners-thoughts" aria-label="Partner Thoughts and Perspectives">
    <div class="container">
      <div class="partner-ad-container">

        <!-- Carousel Viewport -->
        <div class="partner-ad-viewport" id="adCarouselViewport">
          <div class="partner-ad-track" id="adCarouselTrack">

            <!-- Card 1: Bhaumik Goda -->
            <article class="partner-ad-card" data-index="0">
              <div class="partner-ad-card-top">
                <div class="partner-ad-avatar">
                  <img src="/assets/images/partner-bhaumik.jpg" alt="Bhaumik Goda" width="54" height="54" loading="lazy" decoding="async">
                </div>
                <span class="partner-ad-badge">Ad</span>
              </div>
              <h3 class="partner-ad-name">Bhaumik Goda</h3>
              <p class="partner-ad-role">Corporate tax and M&amp;A</p>
              <p class="partner-ad-quote">"Tax strategy is a core driver of corporate valuation and governance."</p>
              <div class="partner-ad-tags">
                <span class="partner-ad-tag">#CorporateTax</span>
                <span class="partner-ad-tag">#M&amp;AStructuring</span>
              </div>
            </article>

            <!-- Card 2: Saumya Sheth -->
            <article class="partner-ad-card" data-index="1">
              <div class="partner-ad-card-top">
                <div class="partner-ad-avatar">
                  <img src="/assets/images/partner-saumya.jpg" alt="Saumya Sheth" width="54" height="54" loading="lazy" decoding="async">
                </div>
                <span class="partner-ad-badge">Ad</span>
              </div>
              <h3 class="partner-ad-name">Saumya Sheth</h3>
              <p class="partner-ad-role">Tax litigation and ITAT</p>
              <p class="partner-ad-quote">"Victory is won by building an unassailable factual foundation."</p>
              <div class="partner-ad-tags">
                <span class="partner-ad-tag">#TaxLitigation</span>
                <span class="partner-ad-tag">#ITATDefense</span>
              </div>
            </article>

            <!-- Card 3: Shalibhadra Shah -->
            <article class="partner-ad-card" data-index="2">
              <div class="partner-ad-card-top">
                <div class="partner-ad-avatar">
                  <img src="/assets/images/partner-shalibhadra.jpg" alt="Shalibhadra Shah" width="54" height="54" loading="lazy" decoding="async">
                </div>
                <span class="partner-ad-badge">Ad</span>
              </div>
              <h3 class="partner-ad-name">Shalibhadra Shah</h3>
              <p class="partner-ad-role">Transfer pricing and FEMA</p>
              <p class="partner-ad-quote">"Documentation must be commercially defensible, not just benchmarked."</p>
              <div class="partner-ad-tags">
                <span class="partner-ad-tag">#TransferPricing</span>
                <span class="partner-ad-tag">#FEMACompliance</span>
              </div>
            </article>

            <!-- Card 4: Malay Kalavadia -->
            <article class="partner-ad-card" data-index="3">
              <div class="partner-ad-card-top">
                <div class="partner-ad-avatar">
                  <img src="/assets/images/partner-malay.jpg" alt="Malay Kalavadia" width="54" height="54" loading="lazy" decoding="async">
                </div>
                <span class="partner-ad-badge">Ad</span>
              </div>
              <h3 class="partner-ad-name">Malay Kalavadia</h3>
              <p class="partner-ad-role">M&amp;A and restructuring</p>
              <p class="partner-ad-quote">"The true success of an M&amp;A transaction lies where commercial ambition and tax architecture harmonize."</p>
              <div class="partner-ad-tags">
                <span class="partner-ad-tag">#M&amp;AStructuring</span>
                <span class="partner-ad-tag">#DueDiligence</span>
              </div>
            </article>

          </div><!-- /partner-ad-track -->
        </div><!-- /partner-ad-viewport -->

        <!-- Bottom Controls Matching Screenshot -->
        <div class="partner-ad-bottom-bar">
          <div class="partner-ad-pills" role="tablist" aria-label="Partner thoughts pagination">
            <button class="partner-ad-pill active" role="tab" aria-selected="true" data-index="0" aria-label="Partner 1: Bhaumik Goda"></button>
            <button class="partner-ad-pill" role="tab" aria-selected="false" data-index="1" aria-label="Partner 2: Saumya Sheth"></button>
            <button class="partner-ad-pill" role="tab" aria-selected="false" data-index="2" aria-label="Partner 3: Shalibhadra Shah"></button>
            <button class="partner-ad-pill" role="tab" aria-selected="false" data-index="3" aria-label="Partner 4: Malay Kalavadia"></button>
          </div>

          <div class="partner-ad-arrows">
            <button class="partner-ad-arrow-btn prev" id="adPrevBtn" type="button" aria-label="Previous partner thought">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
            <button class="partner-ad-arrow-btn next" id="adNextBtn" type="button" aria-label="Next partner thought">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
            </button>
          </div>
        </div>

      </div><!-- /partner-ad-container -->
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════
       SECTION 02 – ABOUT
       ═══════════════════════════════════════════════════════ -->
  <section class="about-section section-pad" id="about" aria-labelledby="about-heading">
    <div class="container">
      <div class="about-grid">

        <!-- Left: Text -->
        <div class="about-left">
          <p class="overline">About BGSS &amp; Associates</p>

          <h2 class="about-heading" id="about-heading">
            Beyond Compliance.<br>
            Building <em>Confidence.</em>
          </h2>

          <div class="about-body">
            <p>
              BGSS &amp; Associates offers a comprehensive range of tax and regulatory advisory services to clients in India and across the globe. Our experienced partners combine deep technical knowledge, commercial understanding and a commitment to delivering meaningful business outcomes.
            </p>
            <p>
              We partner with clients to support their tax and regulatory functions, identify high-value opportunities and address complex regulatory challenges. Our solutions are founded on rigorous understanding of every client's needs and are based on a thorough understanding of law, judicial trends and global developments.
            </p>
            <p>
              For our entire team of professionals — tax is not a profession but our passion, and we take pride in delivering measurable value to our clients.
            </p>
          </div>

          <div class="about-stats" aria-label="Firm statistics">
            <div class="about-stat">
              <div class="about-stat-number" data-count="25" data-suffix="+">25+</div>
              <div class="about-stat-label">Years of Experience</div>
            </div>
            <div class="about-stat">
              <div class="about-stat-number" data-count="4">4</div>
              <div class="about-stat-label">Expert Partners</div>
            </div>
            <div class="about-stat">
              <div class="about-stat-number" data-count="500" data-suffix="+">500+</div>
              <div class="about-stat-label">Clients Served</div>
            </div>
            <div class="about-stat">
              <div class="about-stat-number" data-count="15" data-suffix="+">15+</div>
              <div class="about-stat-label">Countries Advisory</div>
            </div>
          </div>

          <a href="/about.php" class="arrow-link" style="margin-top: var(--space-10);">
            Discover Our Story
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <!-- Right: Image -->
        <div class="about-right" aria-hidden="true">
          <div class="about-img-frame">
            <img
              src="/assets/images/about-office.jpg"
              alt="BGSS & Associates office environment – professional advisory firm"
              loading="lazy"
              decoding="async"
              width="600"
              height="750"
            >
          </div>
          <div class="about-corner-accent" aria-hidden="true"></div>
        </div>

      </div>
    </div>
  </section><!-- /about -->


  <!-- ═══════════════════════════════════════════════════════
       SECTION 03 – SERVICES / EXPERTISE
       ═══════════════════════════════════════════════════════ -->
  <section class="services-section section-pad" id="services" aria-labelledby="services-heading">
    <div class="container">

      <div class="services-header">
        <div>
          <p class="overline">Our Practice Areas</p>
          <h2 class="section-title" id="services-heading">
            Areas of <em>Expertise</em>
          </h2>
        </div>
        <a href="/services.php" class="arrow-link" aria-label="View all services">
          View All Services
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>

      <div class="services-grid" role="list">
        <?php foreach ($SERVICES as $i => $svc): ?>
        <article class="service-panel" role="listitem" aria-label="<?= htmlspecialchars($svc['title']) ?>">
          <span class="service-num" aria-hidden="true">0<?= $i + 1 ?></span>

          <!-- Minimal line icon per service -->
          <div class="service-icon" aria-hidden="true">
            <?php
            $icons = [
              '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>',
              '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
              '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>',
              '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>',
              '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
              '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>',
            ];
            echo $icons[$i];
            ?>
          </div>

          <h3 class="service-title"><?= htmlspecialchars($svc['title']) ?></h3>
          <p class="service-desc"><?= htmlspecialchars($svc['desc']) ?></p>

          <a href="/services.php#<?= htmlspecialchars($svc['id']) ?>" class="service-link" aria-label="Explore <?= htmlspecialchars($svc['title']) ?>">
            Explore Service
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </article>
        <?php endforeach; ?>
      </div>

    </div>
  </section><!-- /services -->

  <!-- ============================================================
       SECTION 04 – LEADERSHIP / OUR PARTNERS
       ============================================================ -->
  <section class="partners-section section-pad" id="partners" aria-labelledby="partners-heading">
    <div class="container">
      <div class="services-header">
        <div>
          <p class="overline">Leadership &amp; Advisory</p>
          <h2 class="section-title" id="partners-heading">Our <em>Partners</em></h2>
        </div>
        <a href="/about.php#partners" class="arrow-link" aria-label="Learn more about our partners">
          View Partner Profiles
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>

            <div class="partners-grid" role="list">
        <!-- 1. Bhaumik Goda -->
        <article class="partner-card" role="listitem">
          <div class="partner-img-wrap">
            <img src="/assets/images/partner-bhaumik.jpg" alt="Bhaumik Goda, Chartered Accountant" loading="lazy" decoding="async" width="400" height="533">
            <div class="partner-hover-details">
              <span class="partner-hover-badge">Chartered Accountant</span>
              <h4 class="partner-hover-name">Bhaumik Goda</h4>
              <p class="partner-hover-spec">Corporate Tax Advisory &amp; International Structuring</p>
              <p class="partner-hover-bio">20+ years advising listed entities, private equity &amp; family offices on corporate tax architecture and cross-border M&amp;A structuring.</p>
              <div class="partner-hover-tags">
                <span class="partner-hover-tag">Direct Tax</span>
                <span class="partner-hover-tag">M&amp;A Deals</span>
                <span class="partner-hover-tag">Cross-Border</span>
              </div>
              <a href="/about.html#bhaumik-goda" class="partner-hover-btn">
                <span>View Full Profile</span>
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </div>
        </article>

        <!-- 2. Saumya Sheth -->
        <article class="partner-card" role="listitem">
          <div class="partner-img-wrap">
            <img src="/assets/images/partner-saumya.jpg" alt="Saumya Sheth, Chartered Accountant" loading="lazy" decoding="async" width="400" height="533">
            <div class="partner-hover-details">
              <span class="partner-hover-badge">Chartered Accountant</span>
              <h4 class="partner-hover-name">Saumya Sheth</h4>
              <p class="partner-hover-spec">Tax Litigation &amp; Dispute Resolution</p>
              <p class="partner-hover-bio">Appellate representation expert, arguing before the ITAT, High Courts and the Supreme Court of India in landmark direct tax controversies.</p>
              <div class="partner-hover-tags">
                <span class="partner-hover-tag">Appellate Tax</span>
                <span class="partner-hover-tag">ITAT Defense</span>
                <span class="partner-hover-tag">High Court</span>
              </div>
              <a href="/about.html#saumya-sheth" class="partner-hover-btn">
                <span>View Full Profile</span>
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </div>
        </article>

        <!-- 3. Shalibhadra Shah -->
        <article class="partner-card" role="listitem">
          <div class="partner-img-wrap">
            <img src="/assets/images/partner-shalibhadra.jpg" alt="Shalibhadra Shah, Chartered Accountant" loading="lazy" decoding="async" width="400" height="533">
            <div class="partner-hover-details">
              <span class="partner-hover-badge">Chartered Accountant</span>
              <h4 class="partner-hover-name">Shalibhadra Shah</h4>
              <p class="partner-hover-spec">Transfer Pricing &amp; FEMA Compliance</p>
              <p class="partner-hover-bio">Leads transfer pricing &amp; FEMA practice, economic benchmarking, Advance Pricing Agreements (APAs), and RBI cross-border compliance.</p>
              <div class="partner-hover-tags">
                <span class="partner-hover-tag">Transfer Pricing</span>
                <span class="partner-hover-tag">FEMA &amp; RBI</span>
                <span class="partner-hover-tag">APA Studies</span>
              </div>
              <a href="/about.html#shalibhadra-shah" class="partner-hover-btn">
                <span>View Full Profile</span>
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </div>
        </article>

        <!-- 4. Malay Kalavadia -->
        <article class="partner-card" role="listitem">
          <div class="partner-img-wrap">
            <img src="/assets/images/partner-malay.jpg" alt="Malay Kalavadia, Chartered Accountant" loading="lazy" decoding="async" width="400" height="533">
            <div class="partner-hover-details">
              <span class="partner-hover-badge">Chartered Accountant</span>
              <h4 class="partner-hover-name">Malay Kalavadia</h4>
              <p class="partner-hover-spec">Mergers &amp; Acquisitions, Restructuring</p>
              <p class="partner-hover-bio">M&amp;A advisory specialist in tax-efficient deal structuring, transaction due diligence, slump sales, and court-approved NCLT schemes.</p>
              <div class="partner-hover-tags">
                <span class="partner-hover-tag">M&amp;A Advisory</span>
                <span class="partner-hover-tag">Due Diligence</span>
                <span class="partner-hover-tag">NCLT Schemes</span>
              </div>
              <a href="/about.html#malay-kalavadia" class="partner-hover-btn">
                <span>View Full Profile</span>
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════
       SECTION 04 – WHY BGSS
       ═══════════════════════════════════════════════════════ -->
  <section class="why-section section-pad" id="why-bgss" aria-labelledby="why-heading">
    <div class="container">
      <div class="why-grid">

        <!-- Left: Heading & intro -->
        <div class="why-left">
          <p class="overline" style="color: rgba(255,255,255,0.5);">
            Our Differentiators
          </p>
          <h2 class="why-heading" id="why-heading">
            Expertise That <em>Moves Business</em> Forward.
          </h2>
          <p class="why-sub">
            BGSS &amp; Associates goes beyond technical compliance to deliver commercially meaningful advice. We understand that every regulatory challenge is also a business challenge.
          </p>
          <a href="/about.php" class="btn btn-gold" style="margin-top: var(--space-10);">
            Learn About Our Approach
          </a>
        </div>

        <!-- Right: Feature items -->
        <div class="why-right">
          <div class="why-items">

            <?php
            $whyItems = [
              [
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>',
                'title' => 'Deep Regulatory Expertise',
                'desc'  => 'Thorough, rigorous understanding of tax and regulatory frameworks built over decades of practice across all industries.',
              ],
              [
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>',
                'title' => 'Commercially Focused Advice',
                'desc'  => 'Advisory that is anchored in business reality, always translating technical positions into practical, commercially viable outcomes.',
              ],
              [
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>',
                'title' => 'Understanding of Judicial Trends',
                'desc'  => 'Informed strategic positions at every stage of tax disputes, from assessment through appellate courts and beyond.',
              ],
              [
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>',
                'title' => 'Global Business Perspective',
                'desc'  => 'Cross-border insight for international tax, transfer pricing, FEMA and inbound/outbound advisory for multinational enterprises.',
              ],
              [
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>',
                'title' => 'Long-term Client Relationships',
                'desc'  => 'We invest in understanding your business deeply, acting as a trusted long-term advisory partner rather than a transactional service provider.',
              ],
              [
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>',
                'title' => 'Practical and Actionable Solutions',
                'desc'  => 'Clear, implementable recommendations that your team can act on immediately, without excessive complexity or ambiguity.',
              ],
            ];
            ?>

            <?php foreach ($whyItems as $item): ?>
            <div class="why-item">
              <div class="why-item-icon" aria-hidden="true"><?= $item['icon'] ?></div>
              <div>
                <h3 class="why-item-title"><?= htmlspecialchars($item['title']) ?></h3>
                <p class="why-item-desc"><?= htmlspecialchars($item['desc']) ?></p>
              </div>
            </div>
            <?php endforeach; ?>

          </div>
        </div>

      </div>
    </div>
  </section><!-- /why-bgss -->


  <!-- ═══════════════════════════════════════════════════════
       SECTION 06 – GLOBAL PERSPECTIVE
       ═══════════════════════════════════════════════════════ -->
  <section class="global-section section-pad" id="global" aria-labelledby="global-heading">
    <div class="container">
      <div class="global-inner">

        <!-- Left: Map -->
        <div class="global-map-wrap" aria-hidden="true">
          <!-- Inline SVG world-map approximation (simplified dot-grid style) -->
          <svg class="global-map-svg" viewBox="0 0 800 450" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="World map showing global advisory reach">
            <!-- Subtle continent outlines -->
            <defs>
              <style>
                .map-continent { fill: none; stroke: var(--color-border); stroke-width: 1.5; }
                .map-grid      { fill: none; stroke: rgba(0,0,0,0.04); stroke-width: 0.8; }
              </style>
            </defs>

            <!-- Grid lines -->
            <?php for ($lat = 0; $lat <= 450; $lat += 45): ?>
            <line class="map-grid" x1="0" y1="<?= $lat ?>" x2="800" y2="<?= $lat ?>"/>
            <?php endfor; ?>
            <?php for ($lon = 0; $lon <= 800; $lon += 80): ?>
            <line class="map-grid" x1="<?= $lon ?>" y1="0" x2="<?= $lon ?>" y2="450"/>
            <?php endfor; ?>

            <!-- Simplified continent shapes (approximate paths) -->
            <!-- North America -->
            <path class="map-continent" d="M85,60 L180,60 L200,100 L190,150 L160,180 L140,200 L120,180 L90,160 L75,120 Z"/>
            <!-- South America -->
            <path class="map-continent" d="M160,230 L200,220 L220,280 L210,340 L190,380 L165,370 L150,320 L145,270 Z"/>
            <!-- Europe -->
            <path class="map-continent" d="M360,60 L420,55 L435,80 L430,110 L410,120 L385,115 L365,100 L355,80 Z"/>
            <!-- Africa -->
            <path class="map-continent" d="M360,130 L410,125 L430,160 L435,220 L420,280 L395,310 L370,300 L350,260 L345,190 L355,150 Z"/>
            <!-- Asia -->
            <path class="map-continent" d="M440,55 L600,50 L640,80 L650,120 L620,160 L580,180 L530,175 L490,160 L455,140 L435,110 Z"/>
            <!-- India (highlighted) -->
            <path class="map-continent" style="stroke:var(--color-gold);stroke-width:2.5;fill:rgba(184,134,11,0.08);" d="M510,130 L540,125 L550,160 L540,200 L520,215 L505,195 L500,165 Z"/>
            <!-- Australia -->
            <path class="map-continent" d="M590,270 L650,265 L670,300 L660,340 L630,355 L600,345 L580,310 Z"/>

            <!-- Pulse dots for key cities -->
            <!-- Mumbai/Ahmedabad -->
            <circle class="global-pulse" cx="522" cy="160" r="5" style="animation-delay:0s"/>
            <!-- London -->
            <circle class="global-pulse" cx="385" cy="78" r="4" style="animation-delay:0.4s"/>
            <!-- Singapore -->
            <circle class="global-pulse" cx="590" cy="195" r="4" style="animation-delay:0.8s"/>
            <!-- New York -->
            <circle class="global-pulse" cx="165" cy="95" r="4" style="animation-delay:1.2s"/>
            <!-- Dubai -->
            <circle class="global-pulse" cx="470" cy="148" r="4" style="animation-delay:0.6s"/>
          </svg>
        </div>

        <!-- Right: Content -->
        <div class="global-content">
          <p class="overline">International Advisory</p>
          <h2 class="global-heading" id="global-heading">
            India Expertise.<br><em>Global Perspective.</em>
          </h2>
          <p style="color:var(--color-slate);font-size:var(--text-md);line-height:1.75;margin-top:var(--space-6);">
            Our advisory practice serves enterprises engaged in cross-border operations, inbound investments into India, and Indian companies expanding globally. We bring together local regulatory depth with an understanding of international tax architecture.
          </p>

          <div class="global-tags" aria-label="Key advisory areas">
            <span class="global-tag">Cross-Border Advisory</span>
            <span class="global-tag">International Tax</span>
            <span class="global-tag">Transfer Pricing</span>
            <span class="global-tag">FEMA &amp; Forex</span>
            <span class="global-tag">Inbound Investment</span>
            <span class="global-tag">Outbound Structuring</span>
            <span class="global-tag">Double Tax Treaties</span>
            <span class="global-tag">Global M&amp;A</span>
          </div>

          <a href="/services.php#fema-forex" class="arrow-link" style="margin-top: var(--space-10);">
            Explore International Services
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

      </div>
    </div>
  </section><!-- /global -->


  <!-- ═══════════════════════════════════════════════════════
       SECTION 07 – CONTACT / CONSULTATION CTA
       ═══════════════════════════════════════════════════════ -->
  <section class="contact-section section-pad" id="contact" aria-labelledby="contact-heading">
    <div class="container">
      <div class="contact-grid">

        <!-- Left: CTA Text -->
        <div class="contact-left">
          <p class="overline">Get In Touch</p>
          <h2 class="contact-heading section-title" id="contact-heading">
            Let's Navigate Your Next Business <em>Challenge.</em>
          </h2>
          <p class="contact-sub" style="color:var(--color-slate);font-size:var(--text-md);line-height:1.75;margin-top:var(--space-6);">
            Connect with our team to explore how BGSS &amp; Associates can support your tax, regulatory and business advisory requirements.
          </p>

          <div class="contact-detail" style="margin-top: var(--space-10);">
            <div class="contact-detail-icon" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            </div>
            <div class="contact-detail-text">
              <a href="tel:+917948904100" style="color:var(--color-charcoal);font-weight:500;">+91 79 4890 4100</a><br>
              <span style="color:var(--color-muted);font-size:var(--text-sm);">Monday–Friday, 9:30 AM–6:30 PM IST</span>
            </div>
          </div>

          <div class="contact-detail">
            <div class="contact-detail-icon" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <div class="contact-detail-text">
              <a href="mailto:devshah4689@gmail.com" style="color:var(--color-charcoal);font-weight:500;">devshah4689@gmail.com</a><br>
              <span style="color:var(--color-muted);font-size:var(--text-sm);">We respond within one business day</span>
            </div>
          </div>

          <div class="contact-detail">
            <div class="contact-detail-icon" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <div class="contact-detail-text">
              Ahmedabad, Gujarat, India
            </div>
          </div>
        </div>

        <!-- Right: Enquiry Form -->
        <div class="contact-right">
          <form
            class="contact-form"
            id="contact-form"
            action="/process-contact.php"
            method="POST"
            novalidate
            aria-label="Contact enquiry form"
          >
            <!-- CSRF Token -->
            <input type="hidden" name="csrf_token" value="<?= generate_csrf_token() ?>">
            <!-- Honeypot -->
            <div style="position:absolute;left:-9999px;top:-9999px;" aria-hidden="true">
              <label for="website-field">Website</label>
              <input type="text" id="website-field" name="website" tabindex="-1" autocomplete="off">
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="full_name">Full Name <span aria-hidden="true">*</span></label>
                <input
                  type="text"
                  id="full_name"
                  name="full_name"
                  placeholder="Your full name"
                  required
                  autocomplete="name"
                  aria-required="true"
                >
                <span class="field-error" role="alert" aria-live="polite" style="display:none;color:#c0392b;font-size:var(--text-xs);margin-top:var(--space-1);"></span>
              </div>
              <div class="form-group">
                <label for="company_name">Company Name <span aria-hidden="true">*</span></label>
                <input
                  type="text"
                  id="company_name"
                  name="company_name"
                  placeholder="Your company"
                  required
                  autocomplete="organization"
                  aria-required="true"
                >
                <span class="field-error" role="alert" aria-live="polite" style="display:none;color:#c0392b;font-size:var(--text-xs);margin-top:var(--space-1);"></span>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="email">Business Email <span aria-hidden="true">*</span></label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="name@company.com"
                  required
                  autocomplete="email"
                  aria-required="true"
                >
                <span class="field-error" role="alert" aria-live="polite" style="display:none;color:#c0392b;font-size:var(--text-xs);margin-top:var(--space-1);"></span>
              </div>
              <div class="form-group">
                <label for="phone">Phone Number <span aria-hidden="true">*</span></label>
                <input
                  type="tel"
                  id="phone"
                  name="phone"
                  placeholder="+91 98765 43210"
                  required
                  autocomplete="tel"
                  aria-required="true"
                >
                <span class="field-error" role="alert" aria-live="polite" style="display:none;color:#c0392b;font-size:var(--text-xs);margin-top:var(--space-1);"></span>
              </div>
            </div>

            <div class="form-group">
              <label for="service">Service Interested In <span aria-hidden="true">*</span></label>
              <select id="service" name="service" required aria-required="true">
                <option value="" disabled selected>Select a service area</option>
                <?php foreach ($SERVICES as $svc): ?>
                <option value="<?= htmlspecialchars($svc['id']) ?>"><?= htmlspecialchars($svc['title']) ?></option>
                <?php endforeach; ?>
                <option value="general">General Enquiry</option>
              </select>
              <span class="field-error" role="alert" aria-live="polite" style="display:none;color:#c0392b;font-size:var(--text-xs);margin-top:var(--space-1);"></span>
            </div>

            <div class="form-group">
              <label for="message">Message</label>
              <textarea
                id="message"
                name="message"
                rows="5"
                placeholder="Please describe your requirements in brief…"
                autocomplete="off"
              ></textarea>
            </div>

            <div class="form-submit">
              <button type="submit" class="btn btn-primary" aria-label="Submit enquiry">
                Send Enquiry
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section><!-- /contact -->

</main><!-- /main-content -->

<?php require_once __DIR__ . '/includes/footer.php'; ?>


