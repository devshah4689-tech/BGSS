<?php
/**
 * about.php — About Us page for BGSS & Associates
 * PHP 8+
 */

declare(strict_types=1);

require_once __DIR__ . '/config.php';

$page_title       = 'About Us | BGSS & Associates – Chartered Accountants';
$meta_description = 'Learn about BGSS & Associates – an Ahmedabad-based premier chartered accountancy firm with four experienced partners delivering expert tax, regulatory and advisory services since 1998.';
$current_page     = 'about';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navigation.php';

// Partner biographies (supplement to the $PARTNERS array from config.php)
$partner_bios = [
    'Bhaumik Goda'     => 'Bhaumik specialises in corporate tax advisory and M&A structuring for domestic and cross-border transactions, bringing over 20 years of experience in serving listed companies, private equity clients and family offices. His strategic counsel has guided some of India\'s most complex corporate restructurings and has been instrumental in building the firm\'s reputation as a trusted advisor for high-value transactions. He combines technical rigour with a deep commercial perspective, consistently delivering outcomes that create lasting business value.',
    'Saumya Sheth'     => 'Saumya is an expert in tax litigation and regulatory representation at all appellate levels, widely recognised for his strategic approach to dispute resolution and his advisory expertise on complex assessment proceedings. He has appeared before the Income Tax Appellate Tribunal, High Courts and the Supreme Court of India, and his track record in high-stakes matters has made him a sought-after counsel for enterprises facing significant tax disputes. Saumya\'s approach blends technical mastery with pragmatic strategy to achieve the best possible outcomes for clients.',
    'Shalibhadra Shah' => 'Shalibhadra leads the firm\'s transfer pricing and FEMA practice, bringing extensive experience in benchmarking studies, advance pricing agreements and RBI/FEMA compliance for multinational corporations and Indian corporates engaged in cross-border activities. His deep knowledge of international tax frameworks and regulatory requirements enables him to design defensible inter-company pricing structures aligned with OECD guidelines and Indian regulations. He has successfully guided numerous MNCs through complex transfer pricing audits and APA negotiations.',
    'Malay Kalavadia'  => 'Malay drives the firm\'s M&A and restructuring advisory practice, with a specialisation in tax-efficient deal structuring, due diligence and post-merger integration for both domestic and cross-border transactions. He advises corporates, promoters and financial investors across a range of M&A structures including slump sales, scheme of arrangements and business transfers, and brings a nuanced understanding of the interplay between tax law and corporate law in complex transactions. Malay is known for his meticulous attention to detail and his ability to navigate multi-jurisdictional regulatory landscapes.',
];
?>

<main id="main-content">

  <!-- ═══════════════════════════════════════════════════════
       SECTION 01 – PAGE HERO
       ═══════════════════════════════════════════════════════ -->
  <section
    class="page-hero"
    aria-labelledby="about-hero-heading"
    style="
      position: relative;
      min-height: 52vh;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding-block: var(--space-32) var(--space-20);
      background: linear-gradient(135deg, var(--color-navy) 0%, var(--color-navy-mid) 60%, #0a1520 100%);
      overflow: hidden;
    "
  >
    <!-- Decorative background texture -->
    <div aria-hidden="true" style="
      position: absolute;
      inset: 0;
      background-image:
        radial-gradient(ellipse 60% 60% at 80% 20%, rgba(184,134,11,0.08) 0%, transparent 70%),
        radial-gradient(ellipse 40% 40% at 10% 80%, rgba(184,134,11,0.05) 0%, transparent 70%);
      pointer-events: none;
    "></div>

    <!-- Decorative grid lines -->
    <div aria-hidden="true" style="
      position: absolute;
      inset: 0;
      background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
                        linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
      background-size: 80px 80px;
      pointer-events: none;
    "></div>

    <div class="container" style="position:relative;z-index:1;">

      <!-- Breadcrumb -->
      <nav aria-label="Breadcrumb" style="margin-bottom: var(--space-8);">
        <ol role="list" style="
          display: flex;
          align-items: center;
          gap: var(--space-2);
          list-style: none;
          font-size: var(--text-xs);
          letter-spacing: var(--ls-wider);
          text-transform: uppercase;
          color: rgba(255,255,255,0.45);
        ">
          <li><a href="/" style="color:rgba(255,255,255,0.45);transition:color 0.2s;" onmouseover="this.style.color='var(--color-gold)'" onmouseout="this.style.color='rgba(255,255,255,0.45)'">Home</a></li>
          <li aria-hidden="true" style="color:rgba(255,255,255,0.3);">/</li>
          <li style="color:var(--color-gold-light);" aria-current="page">About Us</li>
        </ol>
      </nav>

      <p class="overline" style="color:var(--color-gold);margin-bottom:var(--space-5);">Our Story</p>

      <h1
        id="about-hero-heading"
        style="
          font-family: var(--font-display);
          font-size: var(--text-3xl);
          font-weight: var(--fw-bold);
          color: var(--color-white);
          line-height: var(--lh-snug);
          letter-spacing: var(--ls-tight);
          max-width: 18ch;
          margin-bottom: var(--space-6);
        "
      >
        Decades of <em style="font-style:italic;color:var(--color-gold-light);">Expertise.</em><br>
        A Commitment to Excellence.
      </h1>

      <p style="
        font-size: var(--text-lg);
        color: rgba(255,255,255,0.7);
        max-width: 60ch;
        line-height: var(--lh-relaxed);
        font-weight: var(--fw-light);
        margin-bottom: 0;
      ">
        BGSS &amp; Associates has been a trusted advisory partner to enterprises across India and globally,
        delivering tax and regulatory solutions that create real business value.
      </p>

    </div><!-- /.container -->

    <!-- Bottom fade into white -->
    <div aria-hidden="true" style="
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 120px;
      background: linear-gradient(to bottom, transparent, rgba(255,255,255,0.04));
      pointer-events: none;
    "></div>

  </section><!-- /.page-hero -->


  <!-- ═══════════════════════════════════════════════════════
       SECTION 02 – FIRM INTRODUCTION
       ═══════════════════════════════════════════════════════ -->
  <section class="section-pad" id="firm-intro" aria-labelledby="firm-intro-heading">
    <div class="container">
      <div style="
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: clamp(3rem, 6vw, 6rem);
        align-items: center;
      ">

        <!-- Left: Story text -->
        <div>
          <p class="overline">Established 1998</p>

          <div class="clip-reveal">
            <div style="
              font-family: var(--font-display);
              font-size: clamp(5rem, 10vw, 9rem);
              font-weight: var(--fw-bold);
              color: var(--color-navy);
              line-height: 1;
              letter-spacing: var(--ls-tight);
              margin-bottom: var(--space-8);
              opacity: 0.08;
              user-select: none;
            " aria-hidden="true">Since<br>1998</div>
          </div>

          <h2 id="firm-intro-heading" class="section-title" style="margin-top: calc(-1 * clamp(3rem, 6vw, 5rem));">
            A Legacy of <em>Advisory Excellence</em>
          </h2>

          <span class="gold-rule"></span>

          <div style="display:flex;flex-direction:column;gap:var(--space-5);">
            <p>
              Founded in Ahmedabad in 1998, BGSS &amp; Associates has grown from a specialised tax practice
              into one of Gujarat's most respected chartered accountancy firms. Today, four distinguished
              partners lead the firm's work across corporate tax, litigation, transfer pricing, FEMA and
              mergers &amp; acquisitions.
            </p>
            <p>
              Our practice serves a diverse client base — from listed corporations and multinational
              enterprises to private equity funds and family-owned businesses — across India and
              internationally. We combine a thorough understanding of Indian regulations with an
              international perspective developed through years of cross-border advisory work.
            </p>
            <p>
              What sets us apart is our philosophy: tax is not merely a compliance obligation — it is a
              strategic lever. We help our clients use this lever intelligently, with technical precision
              and commercial insight that drive measurable business outcomes.
            </p>
          </div>

          <div style="display:flex;gap:var(--space-10);margin-top:var(--space-10);" aria-label="Firm highlights">
            <div>
              <div style="font-family:var(--font-display);font-size:var(--text-3xl);font-weight:var(--fw-bold);color:var(--color-gold);line-height:1;">25+</div>
              <div style="font-size:var(--text-xs);letter-spacing:var(--ls-wider);text-transform:uppercase;color:var(--color-muted);margin-top:var(--space-1);">Years of Experience</div>
            </div>
            <div>
              <div style="font-family:var(--font-display);font-size:var(--text-3xl);font-weight:var(--fw-bold);color:var(--color-gold);line-height:1;">4</div>
              <div style="font-size:var(--text-xs);letter-spacing:var(--ls-wider);text-transform:uppercase;color:var(--color-muted);margin-top:var(--space-1);">Expert Partners</div>
            </div>
            <div>
              <div style="font-family:var(--font-display);font-size:var(--text-3xl);font-weight:var(--fw-bold);color:var(--color-gold);line-height:1;">500+</div>
              <div style="font-size:var(--text-xs);letter-spacing:var(--ls-wider);text-transform:uppercase;color:var(--color-muted);margin-top:var(--space-1);">Clients Served</div>
            </div>
          </div>
        </div><!-- /left -->

        <!-- Right: Decorative pull quote -->
        <div style="position:relative;">
          <div style="
            background: var(--color-navy);
            padding: clamp(2.5rem, 5vw, 4rem);
            border-radius: var(--radius-md);
            position: relative;
            overflow: hidden;
          ">
            <!-- Large decorative quote mark -->
            <div aria-hidden="true" style="
              position: absolute;
              top: -20px;
              left: 28px;
              font-family: var(--font-display);
              font-size: 12rem;
              line-height: 1;
              color: rgba(184,134,11,0.12);
              font-weight: var(--fw-bold);
              user-select: none;
              pointer-events: none;
            ">"</div>

            <blockquote style="position:relative;z-index:1;">
              <p style="
                font-family: var(--font-display);
                font-size: var(--text-xl);
                font-style: italic;
                font-weight: var(--fw-regular);
                color: var(--color-white);
                line-height: var(--lh-snug);
                letter-spacing: var(--ls-tight);
                margin-bottom: var(--space-8);
              ">
                Tax is not a profession but our passion.
              </p>
              <footer style="display:flex;align-items:center;gap:var(--space-4);">
                <div style="width:2.5rem;height:1px;background:var(--color-gold);flex-shrink:0;"></div>
                <cite style="font-size:var(--text-xs);letter-spacing:var(--ls-wider);text-transform:uppercase;color:var(--color-gold);font-style:normal;">
                  The BGSS &amp; Associates Philosophy
                </cite>
              </footer>
            </blockquote>

            <!-- Decorative gold accent corner -->
            <div aria-hidden="true" style="
              position: absolute;
              bottom: 0;
              right: 0;
              width: 80px;
              height: 80px;
              background: linear-gradient(135deg, transparent 50%, rgba(184,134,11,0.15) 50%);
            "></div>
          </div>

          <!-- Floating accent dot -->
          <div aria-hidden="true" style="
            position: absolute;
            top: -20px;
            right: -20px;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 1px solid rgba(184,134,11,0.25);
            pointer-events: none;
          "></div>
          <div aria-hidden="true" style="
            position: absolute;
            bottom: -12px;
            left: -12px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--color-gold-pale);
            pointer-events: none;
          "></div>
        </div><!-- /right -->

      </div>
    </div><!-- /.container -->
  </section><!-- /#firm-intro -->


  <!-- ═══════════════════════════════════════════════════════
       SECTION 03 – PARTNERS GRID
       ═══════════════════════════════════════════════════════ -->
  <section
    class="section-pad"
    id="partners"
    aria-labelledby="partners-heading"
    style="background: var(--color-off-white);"
  >
    <div class="container">

      <div style="text-align:center;max-width:56ch;margin-inline:auto;margin-bottom:clamp(3rem,6vw,5rem);">
        <p class="overline" style="justify-content:center;">Our Leadership</p>
        <h2 class="section-title" id="partners-heading">
          Meet the <em>Partners</em>
        </h2>
        <span class="gold-rule" style="margin-inline:auto;"></span>
        <p style="color:var(--color-slate);">
          Four distinguished Chartered Accountants whose combined expertise spans every major dimension
          of Indian and international tax and regulatory law.
        </p>
      </div>

      <div style="
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(min(100%, 280px), 1fr));
        gap: var(--space-8);
      " role="list" aria-label="Partner profiles">

        <?php foreach ($PARTNERS as $partner):
            $bio = $partner_bios[$partner['name']] ?? '';
            $initials = implode('', array_map(fn($w) => $w[0], explode(' ', $partner['name'])));
        ?>
        <article
          role="listitem"
          style="
            background: var(--color-white);
            border-radius: var(--radius-md);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: transform var(--dur-base) var(--ease-out), box-shadow var(--dur-base) var(--ease-out);
            display: flex;
            flex-direction: column;
          "
          onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='var(--shadow-lg)'"
          onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='var(--shadow-sm)'"
        >

          <!-- Photo placeholder -->
          <div style="
            aspect-ratio: 4/3;
            background: linear-gradient(135deg, var(--color-navy) 0%, var(--color-navy-mid) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
          ">
            <!-- Decorative pattern -->
            <div aria-hidden="true" style="
              position: absolute;
              inset: 0;
              background-image: radial-gradient(circle at 70% 30%, rgba(184,134,11,0.15) 0%, transparent 60%);
            "></div>

            <!-- Partner image (falls back to monogram placeholder) -->
            <img
              src="/assets/images/<?= htmlspecialchars($partner['img'], ENT_QUOTES, 'UTF-8') ?>"
              alt="Portrait photograph of <?= htmlspecialchars($partner['name'], ENT_QUOTES, 'UTF-8') ?>, <?= htmlspecialchars($partner['designation'], ENT_QUOTES, 'UTF-8') ?>"
              loading="lazy"
              decoding="async"
              style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;"
              onerror="this.style.display='none';this.nextElementSibling.style.display='flex';"
            >

            <!-- Monogram fallback (hidden when image loads) -->
            <div style="
              display: none;
              position: relative;
              z-index: 1;
              flex-direction: column;
              align-items: center;
              justify-content: center;
              gap: var(--space-3);
            " aria-hidden="true">
              <div style="
                width: 72px;
                height: 72px;
                border-radius: 50%;
                border: 2px solid var(--color-gold);
                display: flex;
                align-items: center;
                justify-content: center;
                font-family: var(--font-display);
                font-size: var(--text-xl);
                font-weight: var(--fw-bold);
                color: var(--color-gold-light);
                letter-spacing: var(--ls-wide);
              "><?= htmlspecialchars($initials, ENT_QUOTES, 'UTF-8') ?></div>
            </div>

            <!-- Specialty badge -->
            <div style="
              position: absolute;
              bottom: 0;
              left: 0;
              right: 0;
              padding: var(--space-4) var(--space-5) var(--space-3);
              background: linear-gradient(to top, rgba(13,27,42,0.95) 0%, transparent 100%);
            ">
              <p style="
                font-size: var(--text-xs);
                letter-spacing: var(--ls-wider);
                text-transform: uppercase;
                color: var(--color-gold-light);
                margin: 0;
                font-weight: var(--fw-semibold);
              "><?= htmlspecialchars($partner['specialty'], ENT_QUOTES, 'UTF-8') ?></p>
            </div>
          </div><!-- /photo -->

          <!-- Card body -->
          <div style="padding: var(--space-6); flex: 1; display: flex; flex-direction: column; gap: var(--space-4);">
            <div>
              <h3 style="
                font-family: var(--font-display);
                font-size: var(--text-xl);
                font-weight: var(--fw-bold);
                color: var(--color-navy);
                margin-bottom: var(--space-1);
                line-height: var(--lh-snug);
              "><?= htmlspecialchars($partner['name'], ENT_QUOTES, 'UTF-8') ?></h3>
              <p style="
                font-size: var(--text-xs);
                letter-spacing: var(--ls-wide);
                text-transform: uppercase;
                color: var(--color-gold);
                font-weight: var(--fw-semibold);
                margin: 0;
              "><?= htmlspecialchars($partner['designation'], ENT_QUOTES, 'UTF-8') ?></p>
            </div>

            <div style="width:2rem;height:1px;background:var(--color-border);"></div>

            <?php if ($bio): ?>
            <p style="
              font-size: var(--text-sm);
              color: var(--color-slate);
              line-height: var(--lh-relaxed);
              flex: 1;
            "><?= htmlspecialchars($bio, ENT_QUOTES, 'UTF-8') ?></p>
            <?php endif; ?>
          </div><!-- /card body -->

        </article>
        <?php endforeach; ?>

      </div><!-- /partner grid -->
    </div><!-- /.container -->
  </section><!-- /#partners -->


  <!-- ═══════════════════════════════════════════════════════
       SECTION 04 – APPROACH & VALUES
       ═══════════════════════════════════════════════════════ -->
  <section
    class="section-pad"
    id="approach"
    aria-labelledby="approach-heading"
    style="background: var(--color-navy);"
  >
    <!-- Background texture -->
    <div aria-hidden="true" style="
      position: absolute;
      inset: 0;
      background-image:
        radial-gradient(ellipse 50% 60% at 90% 50%, rgba(184,134,11,0.07) 0%, transparent 70%),
        linear-gradient(rgba(255,255,255,0.02) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.02) 1px, transparent 1px);
      background-size: auto, 80px 80px, 80px 80px;
      pointer-events: none;
    "></div>

    <div class="container" style="position:relative;z-index:1;">

      <div style="text-align:center;max-width:50ch;margin-inline:auto;margin-bottom:clamp(3rem,6vw,5rem);">
        <p class="overline" style="color:var(--color-gold);justify-content:center;">Who We Are</p>
        <h2 class="section-title" id="approach-heading" style="color:var(--color-white);">
          Our <em>Mission, Values</em> &amp; Approach
        </h2>
        <span class="gold-rule" style="margin-inline:auto;"></span>
      </div>

      <div style="
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(min(100%, 280px), 1fr));
        gap: var(--space-6);
      ">

        <!-- Mission -->
        <div style="
          border: 1px solid rgba(184,134,11,0.25);
          border-radius: var(--radius-md);
          padding: clamp(2rem, 4vw, 3rem);
          transition: border-color var(--dur-base) var(--ease-out), background var(--dur-base) var(--ease-out);
          position: relative;
          overflow: hidden;
        "
        onmouseover="this.style.borderColor='rgba(184,134,11,0.6)';this.style.background='rgba(184,134,11,0.05)'"
        onmouseout="this.style.borderColor='rgba(184,134,11,0.25)';this.style.background='transparent'"
        >
          <div style="
            width: 52px;
            height: 52px;
            border-radius: var(--radius-md);
            background: rgba(184,134,11,0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: var(--space-6);
          " aria-hidden="true">
            <i class="fa-solid fa-compass" style="font-size:1.375rem;color:var(--color-gold-light);"></i>
          </div>
          <h3 style="
            font-family: var(--font-display);
            font-size: var(--text-xl);
            font-weight: var(--fw-bold);
            color: var(--color-white);
            margin-bottom: var(--space-4);
          ">Our Mission</h3>
          <div style="width:2rem;height:1px;background:var(--color-gold);margin-bottom:var(--space-5);"></div>
          <p style="color:rgba(255,255,255,0.7);line-height:var(--lh-relaxed);font-size:var(--text-base);">
            To deliver technically rigorous and commercially meaningful advisory that empowers our clients
            to navigate complexity with confidence.
          </p>
        </div>

        <!-- Values -->
        <div style="
          border: 1px solid rgba(184,134,11,0.25);
          border-radius: var(--radius-md);
          padding: clamp(2rem, 4vw, 3rem);
          transition: border-color var(--dur-base) var(--ease-out), background var(--dur-base) var(--ease-out);
          position: relative;
          overflow: hidden;
        "
        onmouseover="this.style.borderColor='rgba(184,134,11,0.6)';this.style.background='rgba(184,134,11,0.05)'"
        onmouseout="this.style.borderColor='rgba(184,134,11,0.25)';this.style.background='transparent'"
        >
          <div style="
            width: 52px;
            height: 52px;
            border-radius: var(--radius-md);
            background: rgba(184,134,11,0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: var(--space-6);
          " aria-hidden="true">
            <i class="fa-solid fa-gem" style="font-size:1.375rem;color:var(--color-gold-light);"></i>
          </div>
          <h3 style="
            font-family: var(--font-display);
            font-size: var(--text-xl);
            font-weight: var(--fw-bold);
            color: var(--color-white);
            margin-bottom: var(--space-4);
          ">Our Values</h3>
          <div style="width:2rem;height:1px;background:var(--color-gold);margin-bottom:var(--space-5);"></div>
          <ul role="list" style="display:flex;flex-direction:column;gap:var(--space-3);">
            <?php foreach (['Integrity', 'Excellence', 'Client Focus', 'Innovation'] as $value): ?>
            <li style="display:flex;align-items:center;gap:var(--space-3);color:rgba(255,255,255,0.7);font-size:var(--text-base);">
              <span style="
                width: 6px;
                height: 6px;
                border-radius: 50%;
                background: var(--color-gold);
                flex-shrink: 0;
              " aria-hidden="true"></span>
              <?= htmlspecialchars($value, ENT_QUOTES, 'UTF-8') ?>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- Approach -->
        <div style="
          border: 1px solid rgba(184,134,11,0.25);
          border-radius: var(--radius-md);
          padding: clamp(2rem, 4vw, 3rem);
          transition: border-color var(--dur-base) var(--ease-out), background var(--dur-base) var(--ease-out);
          position: relative;
          overflow: hidden;
        "
        onmouseover="this.style.borderColor='rgba(184,134,11,0.6)';this.style.background='rgba(184,134,11,0.05)'"
        onmouseout="this.style.borderColor='rgba(184,134,11,0.25)';this.style.background='transparent'"
        >
          <div style="
            width: 52px;
            height: 52px;
            border-radius: var(--radius-md);
            background: rgba(184,134,11,0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: var(--space-6);
          " aria-hidden="true">
            <i class="fa-solid fa-lightbulb" style="font-size:1.375rem;color:var(--color-gold-light);"></i>
          </div>
          <h3 style="
            font-family: var(--font-display);
            font-size: var(--text-xl);
            font-weight: var(--fw-bold);
            color: var(--color-white);
            margin-bottom: var(--space-4);
          ">Our Approach</h3>
          <div style="width:2rem;height:1px;background:var(--color-gold);margin-bottom:var(--space-5);"></div>
          <p style="color:rgba(255,255,255,0.7);line-height:var(--lh-relaxed);font-size:var(--text-base);">
            We combine deep regulatory knowledge with a thorough understanding of our clients' businesses
            to deliver advice that is both legally sound and commercially effective.
          </p>
        </div>

      </div><!-- /values grid -->
    </div><!-- /.container -->
  </section><!-- /#approach -->


  <!-- ═══════════════════════════════════════════════════════
       SECTION 05 – CONTACT CTA STRIP
       ═══════════════════════════════════════════════════════ -->
  <section
    class="section-pad-sm"
    aria-label="Call to action – work with us"
    style="background: var(--color-cream);border-top:1px solid var(--color-border);"
  >
    <div class="container">
      <div style="
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: var(--space-8);
      ">
        <div>
          <p class="overline">Next Steps</p>
          <h2 style="
            font-family: var(--font-display);
            font-size: var(--text-2xl);
            font-weight: var(--fw-bold);
            color: var(--color-navy);
            line-height: var(--lh-snug);
            margin: 0;
          ">Ready to Work With Us?</h2>
        </div>
        <div style="display:flex;flex-wrap:wrap;gap:var(--space-4);">
          <a href="/contact.php" class="btn btn-primary" aria-label="Contact the BGSS & Associates team">
            Contact Our Team
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="/services.php" class="btn btn-ghost-dark" aria-label="Explore our services">
            Explore Our Services
          </a>
        </div>
      </div>
    </div>
  </section><!-- /cta strip -->

</main><!-- /#main-content -->

<?php
require_once __DIR__ . '/includes/contact-popup.php';
require_once __DIR__ . '/includes/footer.php';
?>
