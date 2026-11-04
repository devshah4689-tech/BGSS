<?php
/**
 * knowledge-bank.php — Knowledge Bank for BGSS & Associates
 * PHP 8+
 */

declare(strict_types=1);

require_once __DIR__ . '/config.php';

$page_title       = 'Knowledge Bank | eBooks, Presentations & Masterclasses — BGSS & Associates';
$meta_description = 'Explore the BGSS & Associates Knowledge Bank: read interactive 3D eBooks with online flip animation and direct download, browse high-stakes tax presentation slide decks, and stream expert YouTube masterclasses.';
$meta_keywords    = 'knowledge bank, tax ebooks, tax presentations, ITAT defense webinar, transfer pricing masterclass, M&A restructuring guide';
$current_page     = 'knowledge-bank';
$extra_css        = '/assets/css/knowledge-bank.css?v=1.0';
$extra_js         = '/assets/js/knowledge-bank.js?v=1.0';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navigation.php';
?>

<main id="main-content">

  <!-- PAGE HERO -->
  <section class="page-hero" style="position:relative; overflow:hidden; background: radial-gradient(circle at 80% 20%, rgba(167, 37, 58, 0.22) 0%, transparent 60%), #090E17; padding: clamp(4rem, 8vh, 6.5rem) 0 clamp(2.5rem, 5vh, 4rem);">
    <div class="container" style="position:relative; z-index:2;">
      <nav class="page-hero-breadcrumb" style="display:flex; gap:8px; font-size:0.8rem; color:rgba(255,255,255,0.6); margin-bottom:1.25rem;">
        <a href="/" style="color:inherit; text-decoration:none;">Home</a> / <span style="color:#D2909B;">Knowledge Bank</span>
      </nav>
      <div style="display:inline-flex; align-items:center; gap:8px; background:rgba(167,37,58,0.18); border:1px solid rgba(167,37,58,0.4); padding:4px 14px; border-radius:9999px; margin-bottom:1rem;">
        <span style="width:6px; height:6px; border-radius:50%; background:#D2909B; box-shadow:0 0 8px #D2909B;"></span>
        <span style="font-size:0.72rem; font-weight:700; letter-spacing:0.15em; text-transform:uppercase; color:#D2909B;">Executive Thought Leadership &bull; 2024</span>
      </div>
      <h1 style="font-family:var(--font-display); font-size:clamp(2.2rem, 4.5vw, 3.8rem); font-weight:500; color:#FFFFFF; line-height:1.15; max-width:18ch; margin-bottom:1.25rem;">
        Decades of Technical Depth. <em style="font-style:normal; background:linear-gradient(135deg, #FFF 30%, #FFB3C1 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Open for Industry Leaders.</em>
      </h1>
      <p style="max-width:58ch; color:rgba(255,255,255,0.78); font-size:clamp(0.95rem, 1.15vw, 1.1rem); line-height:1.7; margin-bottom:0;">
        Access our complete repository of technical eBooks with interactive 3D page flip animation, in-website presentation slide decks, and high-stakes YouTube webinars curated by BGSS &amp; Associates partners.
      </p>
    </div>
  </section>

  <!-- STICKY SUB-NAVIGATION & QUICK FILTER BAR -->
  <div class="kb-subnav-bar">
    <div class="container">
      <div class="kb-subnav-inner">
        <div class="kb-subnav-tabs" role="tablist" aria-label="Knowledge Bank Sections">
          <a href="#ebooks" class="kb-tab-btn active">
            <i class="fa-solid fa-book" aria-hidden="true"></i>
            <span>Technical eBooks</span>
            <span class="kb-tab-count">3</span>
          </a>
          <a href="#presentations" class="kb-tab-btn">
            <i class="fa-solid fa-person-chalkboard" aria-hidden="true"></i>
            <span>Presentations</span>
            <span class="kb-tab-count">3</span>
          </a>
          <a href="#videos" class="kb-tab-btn">
            <i class="fa-brands fa-youtube" aria-hidden="true"></i>
            <span>YouTube Videos</span>
            <span class="kb-tab-count">4</span>
          </a>
        </div>

        <div class="kb-search-quick">
          <i class="fa-solid fa-magnifying-glass kb-search-icon" aria-hidden="true"></i>
          <input type="search" id="kbQuickSearch" class="kb-search-input" placeholder="Quick filter publications &amp; decks…" aria-label="Filter knowledge bank">
        </div>
      </div>
    </div>
  </div>

  <!-- ============================================================
       SECTION 1: TECHNICAL EBOOKS (WITH 3D FLIP ANIMATION & DOWNLOAD)
       ============================================================ -->
  <section class="kb-section" id="ebooks">
    <div class="container">
      <div class="kb-section-header">
        <span class="kb-section-badge">
          <i class="fa-solid fa-book-open-reader" aria-hidden="true"></i> Section 01 &bull; Publications
        </span>
        <h2 class="kb-section-title">Technical <em>eBooks &amp; Handbooks</em></h2>
        <p class="kb-section-desc">
          Click <strong>Read Online</strong> to launch our interactive 3D book reader with realistic page flip animation, or click <strong>Download Book</strong> to save an instant offline publication document.
        </p>
      </div>

      <!-- eBooks 3D Grid -->
      <div class="kb-books-grid">

        <!-- Book Card 1 -->
        <article class="kb-book-card">
          <div class="kb-book-cover-wrap">
            <div class="kb-book-3d js-open-flipbook" data-book-id="tax-litigation-handbook" role="button" aria-label="Read Mastering Direct Tax Litigation online">
              <div class="kb-book-face theme-crimson">
                <div class="kb-book-emblem">
                  <span>BGSS Series</span>
                  <span>2024 Ed.</span>
                </div>
                <div>
                  <div style="font-size:0.6rem; letter-spacing:0.15em; text-transform:uppercase; color:#FFB3C1; font-weight:700;">Appellate Handbook</div>
                  <h4 class="kb-book-cover-title">Mastering Direct Tax Litigation</h4>
                </div>
                <div class="kb-book-cover-author">Saumya Sheth, Partner</div>
              </div>
            </div>
          </div>

          <div class="kb-book-meta">
            <span><i class="fa-regular fa-clock" aria-hidden="true"></i> 8 Pages</span>
            <span>&bull;</span>
            <span><i class="fa-solid fa-scale-balanced" aria-hidden="true"></i> Appellate Trial</span>
          </div>

          <h3 class="kb-book-title">Mastering Direct Tax Litigation &amp; ITAT Practice</h3>
          <p class="kb-book-summary">
            A practitioner’s authoritative guide to evidentiary jurisprudence, Section 148/148A reassessment challenges, and appellate trial strategies before the ITAT and High Courts.
          </p>

          <div class="kb-book-tags">
            <span class="kb-tag">Tax Litigation</span>
            <span class="kb-tag">ITAT Defense</span>
            <span class="kb-tag">High Court Writs</span>
            <span class="kb-tag">Sec. 148A</span>
          </div>

          <div class="kb-book-actions">
            <button class="kb-btn-read js-open-flipbook" data-book-id="tax-litigation-handbook" type="button">
              <i class="fa-solid fa-book-open" aria-hidden="true"></i> Read Online
            </button>
            <button class="kb-btn-download js-download-book" data-book-id="tax-litigation-handbook" type="button">
              <i class="fa-solid fa-download" aria-hidden="true"></i> Download
            </button>
          </div>
        </article>

        <!-- Book Card 2 -->
        <article class="kb-book-card">
          <div class="kb-book-cover-wrap">
            <div class="kb-book-3d js-open-flipbook" data-book-id="transfer-pricing-blueprint" role="button" aria-label="Read Global Transfer Pricing & BEPS Architecture online">
              <div class="kb-book-face theme-navy">
                <div class="kb-book-emblem">
                  <span>BGSS Global</span>
                  <span>2024 Ed.</span>
                </div>
                <div>
                  <div style="font-size:0.6rem; letter-spacing:0.15em; text-transform:uppercase; color:#93C5FD; font-weight:700;">International Tax</div>
                  <h4 class="kb-book-cover-title">Transfer Pricing &amp; BEPS Blueprint</h4>
                </div>
                <div class="kb-book-cover-author">Shalibhadra Shah, Partner</div>
              </div>
            </div>
          </div>

          <div class="kb-book-meta">
            <span><i class="fa-regular fa-clock" aria-hidden="true"></i> 8 Pages</span>
            <span>&bull;</span>
            <span><i class="fa-solid fa-globe" aria-hidden="true"></i> Cross-Border</span>
          </div>

          <h3 class="kb-book-title">Global Transfer Pricing &amp; BEPS 2.0 Compliance</h3>
          <p class="kb-book-summary">
            Strategic methodologies for arm's length benchmarking, intra-group management cross-charges, and Advance Pricing Agreements (APAs) under Indian TP regulations.
          </p>

          <div class="kb-book-tags">
            <span class="kb-tag">Transfer Pricing</span>
            <span class="kb-tag">BEPS 2.0</span>
            <span class="kb-tag">APAs</span>
            <span class="kb-tag">ALP Benchmarking</span>
          </div>

          <div class="kb-book-actions">
            <button class="kb-btn-read js-open-flipbook" data-book-id="transfer-pricing-blueprint" type="button">
              <i class="fa-solid fa-book-open" aria-hidden="true"></i> Read Online
            </button>
            <button class="kb-btn-download js-download-book" data-book-id="transfer-pricing-blueprint" type="button">
              <i class="fa-solid fa-download" aria-hidden="true"></i> Download
            </button>
          </div>
        </article>

        <!-- Book Card 3 -->
        <article class="kb-book-card">
          <div class="kb-book-cover-wrap">
            <div class="kb-book-3d js-open-flipbook" data-book-id="ma-structuring-playbook" role="button" aria-label="Read M&A Transaction Structuring Playbook online">
              <div class="kb-book-face theme-emerald">
                <div class="kb-book-emblem">
                  <span>BGSS Deals</span>
                  <span>2024 Ed.</span>
                </div>
                <div>
                  <div style="font-size:0.6rem; letter-spacing:0.15em; text-transform:uppercase; color:#6EE7B7; font-weight:700;">Corporate Finance</div>
                  <h4 class="kb-book-cover-title">M&amp;A Structuring &amp; Reorganization</h4>
                </div>
                <div class="kb-book-cover-author">Malay Kalavadia, Partner</div>
              </div>
            </div>
          </div>

          <div class="kb-book-meta">
            <span><i class="fa-regular fa-clock" aria-hidden="true"></i> 8 Pages</span>
            <span>&bull;</span>
            <span><i class="fa-solid fa-diagram-project" aria-hidden="true"></i> Deal Advisory</span>
          </div>

          <h3 class="kb-book-title">M&amp;A Transaction Structuring &amp; Reorganization</h3>
          <p class="kb-book-summary">
            Practical roadmap for corporate restructuring, share vs asset transfers, Section 79 loss carry-forward safeguarding, and court-approved NCLT scheme architectures.
          </p>

          <div class="kb-book-tags">
            <span class="kb-tag">M&amp;A Structuring</span>
            <span class="kb-tag">Slump Sale</span>
            <span class="kb-tag">NCLT Schemes</span>
            <span class="kb-tag">Sec. 79</span>
          </div>

          <div class="kb-book-actions">
            <button class="kb-btn-read js-open-flipbook" data-book-id="ma-structuring-playbook" type="button">
              <i class="fa-solid fa-book-open" aria-hidden="true"></i> Read Online
            </button>
            <button class="kb-btn-download js-download-book" data-book-id="ma-structuring-playbook" type="button">
              <i class="fa-solid fa-download" aria-hidden="true"></i> Download
            </button>
          </div>
        </article>

      </div><!-- /kb-books-grid -->
    </div>
  </section>

  <!-- ============================================================
       FLIPBOOK MODAL READER (3D REALISTIC PAGE TURN ANIMATION)
       ============================================================ -->
  <div class="flipbook-modal" id="flipbookModal" role="dialog" aria-modal="true" aria-label="3D Flipbook Reader">
    <div class="flipbook-container">

      <!-- Modal Toolbar -->
      <div class="flipbook-toolbar">
        <div class="flipbook-book-info">
          <i class="fa-solid fa-book" style="color:#D2909B;" aria-hidden="true"></i>
          <span class="flipbook-book-title" id="flipbookBookTitle">Mastering Direct Tax Litigation</span>
          <span class="flipbook-page-indicator" id="flipbookPageIndicator">Pages 1–2 of 8</span>
        </div>

        <div class="flipbook-tools">
          <button class="flipbook-tool-btn" id="flipbookDownloadBtn" type="button" title="Download eBook Document" aria-label="Download eBook Document">
            <i class="fa-solid fa-download" aria-hidden="true"></i>
          </button>
          <button class="flipbook-tool-btn" id="flipbookFullscreenBtn" type="button" title="Toggle Fullscreen" aria-label="Toggle Fullscreen">
            <i class="fa-solid fa-expand" aria-hidden="true"></i>
          </button>
          <button class="flipbook-close-btn" id="flipbookCloseBtn" type="button" title="Close Reader (Esc)" aria-label="Close Reader">
            <i class="fa-solid fa-xmark" aria-hidden="true"></i>
          </button>
        </div>
      </div>

      <!-- 3D Book Stage -->
      <div class="flipbook-stage" id="flipbookStage">
        <div class="flipbook-book" id="flipbookBook">
          <!-- Left Spread Page -->
          <div class="flipbook-page-spread flipbook-page-left" id="flipbookLeftPage">
            <!-- Dynamic Content -->
            <div class="flipbook-corner-hint-left" id="flipbookCornerHintLeft" title="Click to flip to previous page" aria-label="Previous page"></div>
          </div>

          <!-- Right Spread Page -->
          <div class="flipbook-page-spread flipbook-page-right" id="flipbookRightPage">
            <!-- Dynamic Content -->
            <div class="flipbook-corner-hint" id="flipbookCornerHintRight" title="Click to flip to next page" aria-label="Next page"></div>
          </div>

          <!-- Ultra-Realistic 3D Flipping Leaf (Front and Back Faces) -->
          <div class="flipbook-leaf" id="flipbookLeaf" aria-hidden="true">
            <div class="flipbook-leaf-face flipbook-leaf-front" id="flipbookLeafFront">
              <div class="flipbook-leaf-content" id="flipbookLeafFrontContent"></div>
              <div class="flipbook-leaf-shadow"></div>
            </div>
            <div class="flipbook-leaf-face flipbook-leaf-back" id="flipbookLeafBack">
              <div class="flipbook-leaf-content" id="flipbookLeafBackContent"></div>
              <div class="flipbook-leaf-shadow"></div>
            </div>
          </div>

          <!-- Cast Shadows during 3D Flip -->
          <div class="flipbook-left-cast-shadow" aria-hidden="true"></div>
          <div class="flipbook-right-cast-shadow" aria-hidden="true"></div>
        </div>
      </div>

      <!-- Modal Bottom Navigation Controls -->
      <div class="flipbook-bottom-nav">
        <button class="flipbook-nav-btn" id="flipbookPrevBtn" type="button" aria-label="Previous Page Spread">
          <i class="fa-solid fa-chevron-left" aria-hidden="true"></i> Previous Spread
        </button>

        <div class="flipbook-pills" id="flipbookPills" role="tablist" aria-label="Page navigation dots">
          <!-- Dynamic Dots -->
        </div>

        <button class="flipbook-nav-btn" id="flipbookNextBtn" type="button" aria-label="Next Page Spread">
          Next Spread <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
        </button>
      </div>

    </div>
  </div><!-- /flipbook-modal -->

  <!-- ============================================================
       SECTION 2: PRESENTATIONS (IN-WEBSITE INTERACTIVE SLIDE PLAYER)
       ============================================================ -->
  <section class="kb-section" id="presentations">
    <div class="container">
      <div class="kb-section-header">
        <span class="kb-section-badge">
          <i class="fa-solid fa-chalkboard-user" aria-hidden="true"></i> Section 02 &bull; Slide Decks
        </span>
        <h2 class="kb-section-title">In-Website <em>Presentation Player</em></h2>
        <p class="kb-section-desc">
          Browse and study our partner presentation decks directly within the website. Use controls to flip slides, toggle autoplay, enter fullscreen, or download the formatted deck.
        </p>
      </div>

      <div class="kb-presentations-wrap">

        <!-- Main Slide Player -->
        <div class="kb-deck-player">
          <div class="kb-deck-screen">
            <div class="kb-slide-canvas" id="kbSlideCanvas">
              <!-- Dynamically rendered slide content -->
            </div>
          </div>

          <!-- Controls Bar -->
          <div class="kb-deck-controls">
            <div class="kb-deck-btn-group">
              <button class="kb-deck-ctrl-btn" id="kbSlidePrev" type="button" aria-label="Previous Slide">
                <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
              </button>
              <button class="kb-deck-ctrl-btn" id="kbSlidePlay" type="button" aria-label="Play Slideshow">
                <i class="fa-solid fa-play" aria-hidden="true"></i>
              </button>
              <button class="kb-deck-ctrl-btn" id="kbSlideNext" type="button" aria-label="Next Slide">
                <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
              </button>
              <span class="kb-deck-counter" id="kbSlideCounter">01 / 05</span>
            </div>

            <div class="kb-deck-actions">
              <button class="kb-btn-slide-download" id="kbSlideDownload" type="button">
                <i class="fa-solid fa-download" aria-hidden="true"></i> Download Deck
              </button>
              <button class="kb-deck-ctrl-btn" id="kbSlideFullscreen" type="button" aria-label="Fullscreen Slideshow">
                <i class="fa-solid fa-expand" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar / Deck Selector -->
        <aside class="kb-deck-sidebar">
          <h4 class="kb-sidebar-title">Featured Slide Decks</h4>
          <div class="kb-deck-list" role="tablist" aria-label="Available presentation decks">

            <!-- Deck 1 -->
            <div class="kb-deck-card active" data-deck-index="0" role="tab" aria-selected="true">
              <div class="kb-deck-icon">
                <i class="fa-solid fa-scale-balanced" aria-hidden="true"></i>
              </div>
              <div class="kb-deck-card-info">
                <h5 class="kb-deck-card-title">Tax Controversy Defense at ITAT</h5>
                <div class="kb-deck-card-meta">
                  <span>Saumya Sheth</span>
                  <span>&bull;</span>
                  <span>5 Key Slides</span>
                </div>
              </div>
            </div>

            <!-- Deck 2 -->
            <div class="kb-deck-card" data-deck-index="1" role="tab" aria-selected="false">
              <div class="kb-deck-icon">
                <i class="fa-solid fa-globe" aria-hidden="true"></i>
              </div>
              <div class="kb-deck-card-info">
                <h5 class="kb-deck-card-title">Transfer Pricing &amp; OECD Pillar Two</h5>
                <div class="kb-deck-card-meta">
                  <span>Shalibhadra Shah</span>
                  <span>&bull;</span>
                  <span>5 Key Slides</span>
                </div>
              </div>
            </div>

            <!-- Deck 3 -->
            <div class="kb-deck-card" data-deck-index="2" role="tab" aria-selected="false">
              <div class="kb-deck-icon">
                <i class="fa-solid fa-diagram-project" aria-hidden="true"></i>
              </div>
              <div class="kb-deck-card-info">
                <h5 class="kb-deck-card-title">M&amp;A Deal Modes &amp; Section 56 Defense</h5>
                <div class="kb-deck-card-meta">
                  <span>Malay Kalavadia</span>
                  <span>&bull;</span>
                  <span>5 Key Slides</span>
                </div>
              </div>
            </div>

          </div>
        </aside>

      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION 3: YOUTUBE VIDEOS (IN-WEBSITE PLAYABLE MASTERCLASSES)
       ============================================================ -->
  <section class="kb-section" id="videos">
    <div class="container">
      <div class="kb-section-header">
        <span class="kb-section-badge">
          <i class="fa-brands fa-youtube" aria-hidden="true"></i> Section 03 &bull; Video Masterclasses
        </span>
        <h2 class="kb-section-title">In-Website <em>YouTube Webinars</em></h2>
        <p class="kb-section-desc">
          Watch our partners' specialized video webinars and masterclasses directly inside the website without being redirected away. Select any session from the playlist below.
        </p>
      </div>

      <div class="kb-videos-wrap">

        <!-- Main Video Cinema Player -->
        <div class="kb-video-cinema">
          <div class="kb-video-frame-wrap">
            <iframe id="kbVideoIframe" 
                    src="https://www.youtube-nocookie.com/embed/3fumBcKC6RE?rel=0&amp;modestbranding=1" 
                    title="Landmark ITAT Rulings &amp; Procedural Defense in Assessment Reopenings" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
            </iframe>
          </div>

          <div class="kb-video-meta-bar">
            <span class="kb-video-topic-tag" id="kbVideoTopicTag">Tax Controversy Masterclass &bull; Saumya Sheth, Partner</span>
            <h3 class="kb-video-current-title" id="kbVideoCurrentTitle">Landmark ITAT Rulings &amp; Procedural Defense in Assessment Reopenings</h3>
            <p class="kb-video-current-desc" id="kbVideoCurrentDesc" style="color:rgba(255,255,255,0.7); font-size:0.88rem; line-height:1.6; margin:0;">
              In this in-depth masterclass, Partner Saumya Sheth breaks down landmark Supreme Court and ITAT rulings governing reassessment proceedings, the mandatory hurdles under Section 148A, and how to preserve jurisdictional objections before the tribunal.
            </p>
          </div>
        </div>

        <!-- Video Playlist Selector -->
        <aside class="kb-video-sidebar">
          <h4 class="kb-sidebar-title">Webinar Playlist</h4>
          <div class="kb-video-list" role="tablist" aria-label="Available video masterclasses">

            <!-- Video 1 -->
            <div class="kb-video-card active" data-video-index="0" role="tab" aria-selected="true">
              <div class="kb-video-thumb">
                <img src="/assets/images/service-litigation.jpg" alt="Tax Litigation Webinar Thumbnail">
                <span class="kb-video-duration">42:18</span>
                <span class="kb-video-play-icon"><i class="fa-solid fa-play" aria-hidden="true"></i></span>
              </div>
              <div class="kb-video-card-info">
                <span class="kb-video-badge">Tax Controversy</span>
                <h5 class="kb-video-card-title">Landmark ITAT Rulings &amp; Sec 148A Defense</h5>
                <div class="kb-video-speaker">Saumya Sheth, Partner</div>
              </div>
            </div>

            <!-- Video 2 -->
            <div class="kb-video-card" data-video-index="1" role="tab" aria-selected="false">
              <div class="kb-video-thumb">
                <img src="/assets/images/service-transfer-pricing.jpg" alt="Transfer Pricing Webinar Thumbnail">
                <span class="kb-video-duration">35:45</span>
                <span class="kb-video-play-icon"><i class="fa-solid fa-play" aria-hidden="true"></i></span>
              </div>
              <div class="kb-video-card-info">
                <span class="kb-video-badge">Transfer Pricing</span>
                <h5 class="kb-video-card-title">Advance Pricing Agreements (APAs) Roadmap</h5>
                <div class="kb-video-speaker">Shalibhadra Shah, Partner</div>
              </div>
            </div>

            <!-- Video 3 -->
            <div class="kb-video-card" data-video-index="2" role="tab" aria-selected="false">
              <div class="kb-video-thumb">
                <img src="/assets/images/service-ma.jpg" alt="M&A Webinar Thumbnail">
                <span class="kb-video-duration">48:30</span>
                <span class="kb-video-play-icon"><i class="fa-solid fa-play" aria-hidden="true"></i></span>
              </div>
              <div class="kb-video-card-info">
                <span class="kb-video-badge">M&amp;A Structuring</span>
                <h5 class="kb-video-card-title">Cross-Border Mergers &amp; Sec 56 Defense</h5>
                <div class="kb-video-speaker">Malay Kalavadia, Partner</div>
              </div>
            </div>

            <!-- Video 4 -->
            <div class="kb-video-card" data-video-index="3" role="tab" aria-selected="false">
              <div class="kb-video-thumb">
                <img src="/assets/images/hero-bg.jpg" alt="FEMA Webinar Thumbnail">
                <span class="kb-video-duration">39:10</span>
                <span class="kb-video-play-icon"><i class="fa-solid fa-play" aria-hidden="true"></i></span>
              </div>
              <div class="kb-video-card-info">
                <span class="kb-video-badge">FEMA &amp; RBI</span>
                <h5 class="kb-video-card-title">NRI &amp; FDI Regulations Demystified</h5>
                <div class="kb-video-speaker">Bhaumik Goda, Managing Partner</div>
              </div>
            </div>

          </div>
        </aside>

      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
