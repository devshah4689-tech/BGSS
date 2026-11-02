<?php
/**
 * services.php — Comprehensive Practice Areas & Services for BGSS & Associates
 * PHP 8+
 */

declare(strict_types=1);

require_once __DIR__ . '/config.php';

$page_title       = 'Practice Areas & Services | BGSS & Associates – Chartered Accountants';
$meta_description = 'Explore our multidisciplinary advisory practice: Tax Advisory, Corporate Tax Compliance, Tax Litigation, Transfer Pricing, FEMA & Foreign Exchange, and Mergers & Acquisitions.';
$meta_keywords    = 'tax advisory India, corporate tax compliance, tax litigation ITAT High Court, transfer pricing documentation benchmarking, FEMA advisory RBI, mergers acquisitions structuring';
$current_page     = 'services';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navigation.php';

// Detailed data for each service
$service_details = [
    [
        'id'       => 'tax-advisory',
        'number'   => '01',
        'title'    => 'Tax Advisory',
        'overline' => 'Strategic Counsel',
        'lead'     => 'Strategic income-tax planning and advisory tailored for corporate groups, fast-scaling enterprises, high-net-worth individuals and family offices across diverse business landscapes.',
        'p1'       => 'In an era of relentless regulatory transformation and aggressive enforcement, corporate taxation demands proactive forward-looking architecture rather than reactive response. Our advisory practice collaborates with CFOs, corporate boards, and investment committees to establish legally robust, tax-optimized strategies for both routine business operations and catalytic corporate decisions.',
        'p2'       => 'We advise on domestic tax structuring, the creation and reorganisation of business entities, rationalisation of effective tax rates, intellectual property holding frameworks, and dividend distribution planning. Every advisory recommendation is subjected to rigorous stress-testing against General Anti-Avoidance Rules (GAAR) and evolving judicial precedents to ensure sustainable commercial validity.',
        'p3'       => 'Our dedicated research desk continually monitors legislative revisions, judicial pronouncements from appellate tribunals and constitutional courts, and circulars issued by the Central Board of Direct Taxes (CBDT), ensuring that our clients retain strategic agility and never face avoidable exposure.',
        'capabilities' => [
            'Corporate Direct Tax Structuring & Reorganisation',
            'HNW Family Office & Promoters Wealth Structuring',
            'GAAR Risk Evaluation & Mitigation Advisory',
            'Business Restructuring & IP Licensing Frameworks',
            'Tax Incentives, Deductions & Exemption Optimization'
        ],
        'icon'     => '<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>'
    ],
    [
        'id'       => 'corporate-tax-compliance',
        'number'   => '02',
        'title'    => 'Corporate Tax Compliance',
        'overline' => 'Precision & Governance',
        'lead'     => 'End-to-end statutory corporate tax compliance frameworks guaranteeing total adherence, absolute timeliness, and full institutional peace of mind.',
        'p1'       => 'Tax compliance under contemporary direct tax regimes has transformed into a high-stakes digital ecosystem characterised by faceless scrutiny, real-time data triangulation, and stringent automated penalties. BGSS & Associates manages corporate compliance portfolios with institutional precision, liberating leadership to concentrate on core operational expansion.',
        'p2'       => 'Our scope encompasses the rigorous computation and periodic review of advance tax liabilities, preparation and electronic submission of corporate income-tax returns, comprehensive Tax Audit reports under Section 44AB, and end-to-end Tax Deducted at Source (TDS/TCS) compliance and quarterly statement reconciliations.',
        'p3'       => 'We establish structured compliance workflows and internal verification checkpoints that preempt discrepancies between financial statements, Annual Information Statements (AIS), and tax filings, eliminating procedural friction and mitigating scrutiny triggers before they manifest.',
        'capabilities' => [
            'Corporate Income-tax Return Preparation & E-filing',
            'Statutory Tax Audits under Section 44AB',
            'Advance Tax Estimation, Modelling & Periodic Review',
            'TDS / TCS Compliance, Filing & Discrepancy Rectification',
            'Liaison with Revenue Authorities for Statutory Certifications'
        ],
        'icon'     => '<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
    ],
    [
        'id'       => 'tax-litigation',
        'number'   => '03',
        'title'    => 'Tax Litigation & Dispute Resolution',
        'overline' => 'Advocacy & Defense',
        'lead'     => 'High-calibre dispute defense and strategic representation across the complete spectrum of Indian direct tax controversy and appellate hierarchies.',
        'p1'       => 'Tax disputes represent significant operational disruption and substantial financial exposure. BGSS & Associates possesses an established reputation for technical advocacy, combining exhaustive statutory interpretation with nuanced judicial acumen to safeguard our clients’ rightful positions in complex assessment and appellate proceedings.',
        'p2'       => 'Our litigation team drafts detailed factual submissions and legal defences for Faceless Assessment proceedings, reassessments under Section 148, transfer pricing adjustments, and special audits. We represent clients before the Commissioner of Income Tax (Appeals), the Dispute Resolution Panel (DRP), and the Income Tax Appellate Tribunal (ITAT).',
        'p3'       => 'In matters elevated to Constitutional High Courts and the Supreme Court of India, our partners work in close coordination with Senior Advocates, formulating core legal propositions, framing substantial questions of law, and creating comprehensive paper books for oral arguments.',
        'capabilities' => [
            'Faceless Assessment & Reassessment Strategy & Defense',
            'Advocacy before CIT(A) and the Dispute Resolution Panel (DRP)',
            'Regular Representation before the Income Tax Appellate Tribunal (ITAT)',
            'Formulation of Strategy for High Court & Supreme Court Petitions',
            'Stay of Demand, Rectifications & Penalty Defense'
        ],
        'icon'     => '<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>'
    ],
    [
        'id'       => 'transfer-pricing',
        'number'   => '04',
        'title'    => 'Transfer Pricing',
        'overline' => 'Global Arm’s-Length Integrity',
        'lead'     => 'Defensible cross-border economic benchmarking, transfer pricing documentation, policy formulation, and audit resolution aligned with OECD and Indian guidelines.',
        'p1'       => 'Multinational enterprises operating across borders face intense scrutiny regarding the allocation of profits among group affiliates. Our Transfer Pricing practice combines economic analysis, industry benchmarking, and regulatory insight to develop transfer pricing methodologies that withstand aggressive scrutiny from revenue authorities.',
        'p2'       => 'We assist multinational corporations and Indian groups with comprehensive three-tier transfer pricing documentation: Local File preparation, Master File compliance, and Country-by-Country Reporting (CbCR) analysis. Our benchmarking analyses leverage authoritative global and domestic financial databases to substantiate arm\'s length pricing across goods, services, management charges, royalties, and financial arrangements.',
        'p3'       => 'To eliminate prospective friction, we advise clients on Advance Pricing Agreements (APAs)—both unilateral and bilateral—and provide dispute mitigation through Mutual Agreement Procedure (MAP) mechanisms under bilateral Double Taxation Avoidance Agreements (DTAAs).',
        'capabilities' => [
            'Comprehensive Local File, Master File & CbCR Compliance',
            'Economic Benchmarking Studies & Functional Analysis (FAR)',
            'Advance Pricing Agreement (APA) Strategy & Negotiations',
            'Intra-Group Service Charges & Royalty Benchmarking',
            'Transfer Pricing Audit Representation & DRP Submissions'
        ],
        'icon'     => '<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>'
    ],
    [
        'id'       => 'fema-forex',
        'number'   => '05',
        'title'    => 'Foreign Exchange Management (FEMA)',
        'overline' => 'Cross-Border Capital Structuring',
        'lead'     => 'In-depth regulatory advisory and compliance under FEMA for foreign inbound investment, overseas direct investment, and international commercial borrowings.',
        'p1'       => 'Navigating India’s foreign exchange regulatory architecture requires absolute familiarity with Reserve Bank of India (RBI) notifications, master directions, and the overarching Foreign Exchange Management Act (FEMA). We empower global enterprises and domestic corporations to navigate international capital mobility securely and transparently.',
        'p2'       => 'Our FEMA practice guides overseas investors on Foreign Direct Investment (FDI) route selection, entry compliance, pricing guidelines, and downstream investment structures. For Indian conglomerates venturing abroad, we structure Overseas Direct Investments (ODI) and Overseas Portfolio Investments (OPI) in accordance with revised Overseas Investment Rules.',
        'p3'       => 'We also structure External Commercial Borrowings (ECB), trade credits, non-convertible debentures, and cross-border guarantees. In cases of past inadvertent procedural infractions, we manage Compounding of Contraventions petitions before the RBI to regularise records efficiently without reputational harm.',
        'capabilities' => [
            'FDI Entry Strategy, Structuring & Reporting via FIRMS Portal',
            'Overseas Direct Investment (ODI / OPI) Structuring & Approvals',
            'External Commercial Borrowing (ECB) Advisory & Documentation',
            'Preparation & Representation for RBI Compounding Petitions',
            'Cross-Border Remittances, Form 15CA/CB Certifications'
        ],
        'icon'     => '<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
    ],
    [
        'id'       => 'mergers-acquisitions',
        'number'   => '06',
        'title'    => 'Mergers & Acquisitions (M&A)',
        'overline' => 'Transactional Tax Architecture',
        'lead'     => 'High-impact tax structuring, comprehensive due diligence, and deal execution advisory for domestic and cross-border amalgamations, demergers, and acquisitions.',
        'p1'       => 'Strategic corporate transactions demand a balance between commercial value capture and regulatory tax optimization. BGSS & Associates acts as trusted tax counsel in acquisitions, corporate restructuring, business transfers, and promoter exits.',
        'p2'       => 'Our engagement begins during early transaction ideation with structural feasibility assessments: evaluating the relative tax efficiency of share purchases versus asset acquisitions, slump sales under Section 50B, court-approved schemes of arrangement under NCLT, and capital reduction mechanisms.',
        'p3'       => 'We conduct comprehensive buy-side and sell-side Tax Due Diligence, identifying latent tax liabilities, unhedged exposures, and potential indemnification requirements. Following closing, our team manages post-merger statutory amalgamations, loss carry-forward verifications under Section 79, and operational tax integration.',
        'capabilities' => [
            'Transaction Tax Structuring (Asset Sale vs. Slump Sale vs. Demerger)',
            'Buy-Side & Vendor-Side Comprehensive Tax Due Diligence',
            'NCLT Schemes of Arrangement Tax Advisory & Approvals',
            'Post-Acquisition Integration & Historical Tax Loss Preservation',
            'Family Business Succession & Shareholder Exit Structuring'
        ],
        'icon'     => '<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>'
    ]
];
?>

<main id="main-content">

  <!-- ═══════════════════════════════════════════════════════
       SECTION 01 – PAGE HERO
       ═══════════════════════════════════════════════════════ -->
  <section class="page-hero" aria-labelledby="services-hero-title">
    <div class="page-hero-bg" aria-hidden="true">
      <img src="/assets/images/hero-bg.svg" alt="" fetchpriority="high">
    </div>
    <div class="page-hero-content">
      <nav class="page-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span aria-hidden="true">/</span>
        <span>Services</span>
      </nav>
      <p class="overline">Multidisciplinary Advisory</p>
      <h1 id="services-hero-title">
        Comprehensive Tax &amp; Regulatory <em>Advisory.</em>
      </h1>
      <p class="page-hero-sub">
        Rigorous technical knowledge, commercial insight, and strategic acumen designed to help enterprises navigate complexity, mitigate exposure, and execute transformative corporate moves.
      </p>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════
       SECTION 02 – OVERVIEW / PHILOSOPHY
       ═══════════════════════════════════════════════════════ -->
  <section class="section-pad" style="background-color: var(--color-white); border-bottom: 1px solid var(--color-border-light);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: clamp(2rem, 5vw, 5rem); align-items: center;">
        <div>
          <p class="overline">Our Practice Framework</p>
          <h2 class="section-title">
            Specialist Expertise.<br><em>Measurable Commercial Value.</em>
          </h2>
          <div class="gold-rule"></div>
        </div>
        <div>
          <p class="lead" style="margin-bottom: var(--space-4);">
            At BGSS &amp; Associates, we reject one-size-fits-all compliance templates. We structure solutions around the unique commercial rhythm and risk profile of your enterprise.
          </p>
          <p style="color: var(--color-slate); font-size: var(--text-base); line-height: 1.8;">
            Our four partners bring hands-on involvement to every engagement, synthesizing deep statutory knowledge with real-world corporate foresight. Whether defending a multi-crore transfer pricing adjustment before an appellate tribunal or structuring a cross-border acquisition under FEMA, we deliver clear, actionable strategies that move business forward.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════
       SECTION 03 – DETAILED SERVICE BREAKDOWNS
       ═══════════════════════════════════════════════════════ -->
  <section id="practice-areas" aria-label="Practice Areas Detail">
    <?php foreach ($service_details as $idx => $svc): ?>
      <article
        class="service-detail"
        id="<?= htmlspecialchars($svc['id']) ?>"
        aria-labelledby="title-<?= htmlspecialchars($svc['id']) ?>"
      >
        <div class="container">
          <div class="service-detail-grid">
            
            <!-- Content Column -->
            <div class="service-detail-content">
              <div class="service-detail-num" aria-hidden="true"><?= $svc['number'] ?></div>
              <p class="overline"><?= htmlspecialchars($svc['overline']) ?></p>
              <h2 id="title-<?= htmlspecialchars($svc['id']) ?>">
                <?= htmlspecialchars($svc['title']) ?>
              </h2>
              <div class="gold-rule"></div>

              <p class="lead" style="color: var(--color-charcoal); font-weight: 500; margin-bottom: var(--space-5);">
                <?= htmlspecialchars($svc['lead']) ?>
              </p>
              <p><?= htmlspecialchars($svc['p1']) ?></p>
              <p><?= htmlspecialchars($svc['p2']) ?></p>
              <p><?= htmlspecialchars($svc['p3']) ?></p>

              <h4 style="font-family: var(--font-body); font-size: var(--text-sm); text-transform: uppercase; letter-spacing: var(--ls-widest); color: var(--color-navy); margin-top: var(--space-8); font-weight: 700;">
                Core Capabilities &amp; Advisory Scope
              </h4>
              <ul class="service-capabilities" role="list">
                <?php foreach ($svc['capabilities'] as $cap): ?>
                  <li role="listitem"><?= htmlspecialchars($cap) ?></li>
                <?php endforeach; ?>
              </ul>

              <div style="margin-top: var(--space-8); display: flex; gap: var(--space-4); align-items: center; flex-wrap: wrap;">
                <button
                  type="button"
                  class="btn btn-primary js-open-contact-modal"
                  aria-label="Discuss <?= htmlspecialchars($svc['title']) ?> with Our Advisory Team"
                >
                  Consult Advisory Team
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
                <a href="/contact.php" class="arrow-link">
                  Direct Enquiry
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
              </div>
            </div>

            <!-- Visual / Card Column -->
            <div class="service-detail-visual" aria-hidden="true">
              <div class="service-detail-img-placeholder" style="position: relative; border-radius: var(--radius-sm); padding: clamp(2rem, 5vw, 4rem); background: linear-gradient(135deg, var(--color-cream) 0%, #E9E5DD 100%);">
                <div style="text-align: center;">
                  <div style="width: 80px; height: 80px; margin-inline: auto; display: flex; align-items: center; justify-content: center; background: var(--color-white); border-radius: 50%; box-shadow: var(--shadow-sm); color: var(--color-gold); margin-bottom: var(--space-6);">
                    <?= $svc['icon'] ?>
                  </div>
                  <span style="font-family: var(--font-display); font-size: var(--text-2xl); color: var(--color-navy); display: block; margin-bottom: var(--space-3);">
                    <?= htmlspecialchars($svc['title']) ?>
                  </span>
                  <span style="display: block; font-size: var(--text-xs); letter-spacing: var(--ls-widest); text-transform: uppercase; color: var(--color-gold); font-weight: 600;">
                    BGSS &amp; Associates Practice Group
                  </span>
                  <p style="font-size: var(--text-sm); color: var(--color-slate); max-width: 34ch; margin-inline: auto; margin-top: var(--space-4); line-height: 1.6;">
                    Direct partner oversight, multi-disciplinary analysis, and robust defense documentation on every mandate.
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </article>
    <?php endforeach; ?>
  </section>

  <!-- ═══════════════════════════════════════════════════════
       SECTION 04 – ENGAGEMENT MODEL
       ═══════════════════════════════════════════════════════ -->
  <section class="section-pad values-section" style="background-color: var(--color-navy);">
    <div class="container">
      <div style="max-width: 60ch; margin-bottom: var(--space-12);">
        <p class="overline" style="color: var(--color-gold-light);">Our Advisory Methodology</p>
        <h2 style="color: var(--color-white); font-size: var(--text-3xl);">
          The BGSS Engagement <em>Framework</em>
        </h2>
        <div class="gold-rule"></div>
        <p style="color: rgba(255,255,255,0.7); font-size: var(--text-md); line-height: 1.75;">
          Every client assignment is executed under an established four-stage methodology that enforces technical precision and commercial alignment at every checkpoint.
        </p>
      </div>

      <div class="values-grid">
        <div class="value-col">
          <div style="font-family: var(--font-display); font-size: 2.5rem; color: var(--color-gold); font-weight: 700; margin-bottom: var(--space-3);">01</div>
          <h3 class="value-col-title">Diagnostic &amp; Discovery</h3>
          <p>We scrutinize transaction histories, operational flows, regulatory filings, and corporate contracts to identify exposures, friction points, and value creation opportunities.</p>
        </div>
        <div class="value-col">
          <div style="font-family: var(--font-display); font-size: 2.5rem; color: var(--color-gold); font-weight: 700; margin-bottom: var(--space-3);">02</div>
          <h3 class="value-col-title">Statutory &amp; Economic Structuring</h3>
          <p>Our senior partners architect defensible solutions based on statutory provisions, relevant jurisprudence, and international OECD standards to ensure structural integrity.</p>
        </div>
        <div class="value-col">
          <div style="font-family: var(--font-display); font-size: 2.5rem; color: var(--color-gold); font-weight: 700; margin-bottom: var(--space-3);">03</div>
          <h3 class="value-col-title">Seamless Execution &amp; Defense</h3>
          <p>From filing regulatory applications to presenting representations before appellate authorities, we handle complete implementation with relentless attention to detail.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════
       SECTION 05 – CTA STRIP
       ═══════════════════════════════════════════════════════ -->
  <section class="cta-strip">
    <div class="container">
      <p class="overline" style="justify-content: center;">Partner With Us</p>
      <h2>Need Strategic Counsel on a Complex Matter?</h2>
      <p style="max-width: 52ch; margin-inline: auto; margin-bottom: var(--space-8); color: var(--color-slate);">
        Connect directly with our partners to discuss your tax structuring, compliance obligations, or cross-border regulatory challenges.
      </p>
      <div class="btn-row">
        <button type="button" class="btn btn-primary js-open-contact-modal">
          Schedule a Consultation
        </button>
        <a href="/contact.php" class="btn btn-ghost-dark">
          Contact Our Offices
        </a>
      </div>
    </div>
  </section>

</main>

<?php
require_once __DIR__ . '/includes/contact-popup.php';
require_once __DIR__ . '/includes/footer.php';
?>
