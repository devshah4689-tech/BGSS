/**
 * BGSS & Associates – Premium GSAP Animations
 * animations.js | v2.0
 * Requires: GSAP 3.12+, ScrollTrigger
 */

'use strict';

/* ── Register Plugin ── */
gsap.registerPlugin(ScrollTrigger);

/* ── Reduced-Motion Guard ── */
const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const isMobile      = window.matchMedia('(max-width: 768px)').matches;

/* ── Helper: Create a reusable ScrollTrigger config ── */
function st(trigger, opts = {}) {
  return {
    trigger,
    start: opts.start || 'top 85%',
    end:   opts.end   || 'bottom 15%',
    toggleActions: opts.toggleActions || 'play none none none',
    ...opts,
  };
}

/* ═══════════════════════════════════════
   01. PAGE LOADER EXIT
   ═══════════════════════════════════════ */
function animateLoader() {
  const dismissLoader = () => {
    const loader = document.querySelector('#page-loader');
    if (!loader) return;
    gsap.to(loader, {
      opacity: 0,
      duration: 0.5,
      ease: 'power2.out',
      onComplete: () => {
        loader.style.display = 'none';
        document.body.classList.remove('js-loading');
        document.body.classList.add('js-ready');
      }
    });
  };

  document.addEventListener('site:loaded', dismissLoader);
  // Fallback safety
  setTimeout(dismissLoader, 400);
}

/* ═══════════════════════════════════════
   02. CINEMATIC HERO SECTION
   ═══════════════════════════════════════ */
function animateHero() {
  if (reducedMotion) {
    gsap.set(['.hero-eyebrow', '.hero-title', '.hero-sub', '.hero-actions', '.hero-scroll-indicator'], { opacity: 1 });
    return;
  }

  const tl = gsap.timeline({ delay: 0.25 });

  /* Background subtle zoom */
  gsap.fromTo('.hero-bg img', 
    { scale: 1.12 },
    { scale: 1, duration: 2.8, ease: 'power2.out' }
  );

  /* Eyebrow badge */
  tl.fromTo('.hero-eyebrow',
    { opacity: 0, y: 25, letterSpacing: '0.25em' },
    { opacity: 1, y: 0, letterSpacing: '0.16em', duration: 0.8, ease: 'power3.out' }
  );

  /* Headline — word by word */
  const words = document.querySelectorAll('.hero-title .hero-word-inner');
  if (words.length) {
    tl.fromTo(words,
      { yPercent: 120, opacity: 0 },
      {
        yPercent: 0,
        opacity: 1,
        duration: 1.0,
        stagger: 0.06,
        ease: 'power4.out',
      },
      '-=0.5'
    );
  } else {
    tl.fromTo('.hero-title',
      { opacity: 0, y: 50 },
      { opacity: 1, y: 0, duration: 1.0, ease: 'power3.out' },
      '-=0.5'
    );
  }

  /* Subtitle with soft fade */
  tl.fromTo('.hero-sub',
    { opacity: 0, y: 25 },
    { opacity: 1, y: 0, duration: 0.85, ease: 'power3.out' },
    '-=0.6'
  );

  /* Action Buttons sequential reveal */
  tl.fromTo('.hero-actions .btn',
    { opacity: 0, y: 20, scale: 0.95 },
    { opacity: 1, y: 0, scale: 1, duration: 0.6, stagger: 0.12, ease: 'back.out(1.4)' },
    '-=0.5'
  );

  /* Scroll indicator */
  tl.fromTo('.hero-scroll-indicator',
    { opacity: 0, y: -10 },
    { opacity: 1, y: 0, duration: 0.8, ease: 'power2.out' },
    '-=0.2'
  );

  /* Silky smooth background parallax on scroll */
  gsap.to('.hero-bg', {
    yPercent: isMobile ? 8 : 20,
    ease: 'none',
    scrollTrigger: {
      trigger: '.hero',
      start: 'top top',
      end:   'bottom top',
      scrub: 1.2,
    }
  });

  /* Fade hero content on scroll */
  gsap.to('.hero-content', {
    opacity: 0,
    y: -50,
    ease: 'none',
    scrollTrigger: {
      trigger: '.hero',
      start: 'center top',
      end:   'bottom top',
      scrub: 0.8,
    }
  });
}

/* ═══════════════════════════════════════
   03. SECTION TITLE REVEALS
   ═══════════════════════════════════════ */
function animateSectionTitles() {
  if (reducedMotion) return;

  gsap.utils.toArray('.section-title, .about-heading, .why-heading, .global-heading, .contact-heading').forEach(el => {
    gsap.fromTo(el,
      { opacity: 0, y: 40 },
      {
        opacity: 1,
        y: 0,
        duration: 0.95,
        ease: 'power3.out',
        scrollTrigger: st(el, { start: 'top 88%' }),
      }
    );
  });
}

/* ═══════════════════════════════════════
   04. RULE LINES & DIVIDERS
   ═══════════════════════════════════════ */
function animateLines() {
  if (reducedMotion) return;

  gsap.utils.toArray('.gold-rule, .animated-line').forEach(line => {
    gsap.fromTo(line,
      { scaleX: 0, transformOrigin: 'left center' },
      {
        scaleX: 1,
        duration: 0.9,
        ease: 'power3.out',
        scrollTrigger: st(line, { start: 'top 92%' }),
      }
    );
  });
}

/* ═══════════════════════════════════════
   05. ABOUT SECTION & STAT COUNTERS
   ═══════════════════════════════════════ */
function animateAbout() {
  if (reducedMotion) return;

  /* Left text reveal */
  gsap.fromTo('.about-left',
    { opacity: 0, x: -40 },
    {
      opacity: 1, x: 0,
      duration: 1.0,
      ease: 'power3.out',
      scrollTrigger: st('.about-section', { start: 'top 78%' }),
    }
  );

  /* Dynamic rolling counters */
  const statNumbers = document.querySelectorAll('.about-stat-number');
  if (statNumbers.length) {
    ScrollTrigger.create({
      trigger: '.about-stats',
      start: 'top 85%',
      once: true,
      onEnter: () => {
        statNumbers.forEach(stat => {
          const raw = stat.getAttribute('data-count');
          if (!raw) return;
          const target = parseInt(raw, 10);
          const suffix = stat.getAttribute('data-suffix') || '';
          const obj = { val: 0 };
          gsap.to(obj, {
            val: target,
            duration: 1.8,
            ease: 'power2.out',
            onUpdate: () => {
              stat.textContent = Math.floor(obj.val) + suffix;
            }
          });
        });
      }
    });
  }

  /* Stats cards entrance stagger */
  gsap.fromTo('.about-stat',
    { opacity: 0, y: 25 },
    {
      opacity: 1, y: 0,
      duration: 0.7,
      stagger: 0.12,
      ease: 'power3.out',
      scrollTrigger: st('.about-stats', { start: 'top 82%' }),
    }
  );

  /* Editorial image reveal */
  gsap.fromTo('.about-img-frame',
    { clipPath: 'inset(100% 0 0 0)' },
    {
      clipPath: 'inset(0% 0 0 0)',
      duration: 1.1,
      ease: 'power4.out',
      scrollTrigger: st('.about-right', { start: 'top 80%' }),
    }
  );

  /* Image subtle zoom settle */
  gsap.fromTo('.about-img-frame img',
    { scale: 1.15 },
    {
      scale: 1,
      duration: 1.4,
      ease: 'power3.out',
      scrollTrigger: st('.about-right', { start: 'top 80%' }),
    }
  );

  /* Corner accent pop */
  gsap.fromTo('.about-corner-accent',
    { opacity: 0, scale: 0.8 },
    {
      opacity: 1, scale: 1,
      duration: 0.8,
      delay: 0.35,
      ease: 'back.out(1.5)',
      scrollTrigger: st('.about-right', { start: 'top 75%' }),
    }
  );
}

/* ═══════════════════════════════════════
   06. SERVICES SECTION
   ═══════════════════════════════════════ */
function animateServices() {
  if (reducedMotion) return;

  /* Editorial service panels */
  gsap.fromTo('.service-panel',
    { opacity: 0, y: 45, scale: 0.98 },
    {
      opacity: 1,
      y: 0,
      scale: 1,
      duration: 0.8,
      stagger: {
        each: 0.12,
        grid: 'auto',
        from: 'start',
      },
      ease: 'power3.out',
      scrollTrigger: st('.services-grid', { start: 'top 82%' }),
    }
  );

  /* Decorative service numbers */
  gsap.fromTo('.service-num',
    { opacity: 0, y: 15 },
    {
      opacity: 1,
      y: 0,
      duration: 0.6,
      stagger: 0.08,
      ease: 'power2.out',
      scrollTrigger: st('.services-grid', { start: 'top 80%' }),
    }
  );
}

/* ═══════════════════════════════════════
   07. PARTNERS LEADERSHIP SECTION
   ═══════════════════════════════════════ */
function animatePartners() {
  if (reducedMotion) return;
  if (!document.querySelector('.partners-grid') && !document.querySelector('.partner-card')) return;

  /* Stagger cards with slight scale elevation */
  gsap.fromTo('.partner-card',
    { opacity: 0, y: 50, scale: 0.96 },
    {
      opacity: 1,
      y: 0,
      scale: 1,
      duration: 0.85,
      stagger: 0.14,
      ease: 'power3.out',
      scrollTrigger: st('.partners-grid', { start: 'top 82%' }),
    }
  );

  /* Image clip reveal */
  gsap.utils.toArray('.partner-img-wrap').forEach((wrap, i) => {
    gsap.fromTo(wrap,
      { clipPath: 'inset(100% 0 0 0)' },
      {
        clipPath: 'inset(0% 0 0 0)',
        duration: 1.0,
        delay: i * 0.12,
        ease: 'power4.out',
        scrollTrigger: st('.partners-grid', { start: 'top 82%' }),
      }
    );
  });
}

/* ═══════════════════════════════════════
   08. WHY BGSS SECTION
   ═══════════════════════════════════════ */
function animateWhy() {
  if (reducedMotion) return;

  gsap.fromTo('.why-left',
    { opacity: 0, x: -50 },
    {
      opacity: 1, x: 0,
      duration: 0.95,
      ease: 'power3.out',
      scrollTrigger: st('.why-section', { start: 'top 76%' }),
    }
  );

  gsap.fromTo('.why-item',
    { opacity: 0, x: 35 },
    {
      opacity: 1, x: 0,
      duration: 0.75,
      stagger: 0.1,
      ease: 'power3.out',
      scrollTrigger: st('.why-items', { start: 'top 80%' }),
    }
  );
}

/* ═══════════════════════════════════════
   09. GLOBAL REACH SECTION
   ═══════════════════════════════════════ */
function animateGlobal() {
  if (reducedMotion) return;

  // Card entrance
  gsap.fromTo('.global-map-card',
    { opacity: 0, y: 40, scale: 0.96 },
    {
      opacity: 1, y: 0, scale: 1,
      duration: 1.0,
      ease: 'power3.out',
      scrollTrigger: st('.global-section', { start: 'top 75%' }),
    }
  );

  // Countries staggered fade-in
  gsap.fromTo('.map-country',
    { opacity: 0 },
    {
      opacity: 1,
      duration: 0.8,
      stagger: { each: 0.002, from: 'center' },
      ease: 'power2.out',
      scrollTrigger: st('.global-map-card', { start: 'top 80%' }),
    }
  );

  // India highlight flash
  gsap.fromTo('.map-india-layer',
    { opacity: 0, scale: 0.92 },
    {
      opacity: 1, scale: 1,
      duration: 0.9,
      delay: 0.6,
      ease: 'back.out(1.7)',
      scrollTrigger: st('.global-map-card', { start: 'top 80%' }),
    }
  );

  // Flow arcs appear sequentially
  gsap.fromTo('.map-flow-arc',
    { opacity: 0 },
    {
      opacity: 1,
      duration: 0.6,
      stagger: 0.18,
      delay: 0.9,
      ease: 'power2.inOut',
      scrollTrigger: st('.global-map-card', { start: 'top 80%' }),
    }
  );

  // Global tags stagger
  gsap.fromTo('.global-tag',
    { opacity: 0, y: 15, scale: 0.94 },
    {
      opacity: 1, y: 0, scale: 1,
      duration: 0.5,
      stagger: 0.06,
      ease: 'back.out(1.5)',
      scrollTrigger: st('.global-tags', { start: 'top 85%' }),
    }
  );

  // Corridor bar slide up
  gsap.fromTo('.map-corridor-bar',
    { opacity: 0, y: 20 },
    {
      opacity: 1, y: 0,
      duration: 0.7,
      delay: 1.2,
      ease: 'power2.out',
      scrollTrigger: st('.global-map-card', { start: 'top 80%' }),
    }
  );

  // Corridor stat numbers count up
  gsap.fromTo('.corridor-stat-num',
    { opacity: 0, y: 8 },
    {
      opacity: 1, y: 0,
      duration: 0.5,
      stagger: 0.12,
      delay: 1.4,
      ease: 'back.out(1.5)',
      scrollTrigger: st('.map-corridor-bar', { start: 'top 90%' }),
    }
  );
}

/* ═══════════════════════════════════════
   10. CONTACT SECTION
   ═══════════════════════════════════════ */
function animateContact() {
  if (reducedMotion) return;

  gsap.fromTo('.contact-left',
    { opacity: 0, y: 40 },
    {
      opacity: 1, y: 0,
      duration: 0.9,
      ease: 'power3.out',
      scrollTrigger: st('.contact-section', { start: 'top 78%' }),
    }
  );

  gsap.fromTo('.contact-form .form-group',
    { opacity: 0, y: 25 },
    {
      opacity: 1, y: 0,
      duration: 0.65,
      stagger: 0.08,
      ease: 'power3.out',
      scrollTrigger: st('.contact-form', { start: 'top 82%' }),
    }
  );
}

/* ═══════════════════════════════════════
   11. OVERLINES & EDITORIAL TEXT
   ═══════════════════════════════════════ */
function animateTextBlocks() {
  if (reducedMotion) return;

  gsap.utils.toArray('.overline').forEach(el => {
    gsap.fromTo(el,
      { opacity: 0, x: -20 },
      {
        opacity: 1, x: 0,
        duration: 0.7,
        ease: 'power3.out',
        scrollTrigger: st(el, { start: 'top 92%' }),
      }
    );
  });

  gsap.utils.toArray('.about-body p, .section-intro, .contact-sub').forEach(el => {
    gsap.fromTo(el,
      { opacity: 0, y: 20 },
      {
        opacity: 1, y: 0,
        duration: 0.8,
        ease: 'power3.out',
        scrollTrigger: st(el, { start: 'top 90%' }),
      }
    );
  });
}

/* ═══════════════════════════════════════
   12. FOOTER REVEAL
   ═══════════════════════════════════════ */
function animateFooter() {
  if (reducedMotion) return;

  gsap.fromTo('.footer-grid > *',
    { opacity: 0, y: 35 },
    {
      opacity: 1, y: 0,
      duration: 0.75,
      stagger: 0.1,
      ease: 'power3.out',
      scrollTrigger: st('.site-footer', { start: 'top 92%' }),
    }
  );
}

/* ═══════════════════════════════════════
   13. SCROLL PROGRESS INDICATOR
   ═══════════════════════════════════════ */
function initScrollProgress() {
  let bar = document.getElementById('scroll-progress');
  if (!bar) {
    bar = document.createElement('div');
    bar.id = 'scroll-progress';
    Object.assign(bar.style, {
      position:   'fixed',
      top:        '0',
      left:       '0',
      height:     '3px',
      width:      '0%',
      background: 'linear-gradient(90deg, #C8102E 0%, #FF7A1E 100%)',
      zIndex:     '9999',
      transition: 'none',
      pointerEvents: 'none',
    });
    document.body.appendChild(bar);
  }

  gsap.to(bar, {
    width: '100%',
    ease: 'none',
    scrollTrigger: {
      start:  'top top',
      end:    'bottom bottom',
      scrub:  0.2,
    }
  });
}

/* ═══════════════════════════════════════
   14. PILL MENU DYNAMIC SCROLL TRACKING
   ═══════════════════════════════════════ */
function initNavScrollTracking() {
  const pillLinks = document.querySelectorAll('.nav-pill-link');
  if (!pillLinks.length) return;

  const sections = [
    { id: 'hero',     index: 0 },
    { id: 'about',    index: 0 },
    { id: 'partners', index: 1 },
    { id: 'services', index: 2 },
    { id: 'why-bgss', index: 3 },
    { id: 'global',   index: 4 },
    { id: 'contact',  index: 6 },
  ];

  sections.forEach(sec => {
    const el = document.getElementById(sec.id);
    if (!el) return;

    ScrollTrigger.create({
      trigger: el,
      start: 'top 45%',
      end:   'bottom 45%',
      onToggle: self => {
        if (self.isActive && pillLinks[sec.index]) {
          pillLinks.forEach(l => l.classList.remove('active'));
          pillLinks[sec.index].classList.add('active');
        }
      }
    });
  });
}

/* ═══════════════════════════════════════
   INIT ALL
   ═══════════════════════════════════════ */
function initAllAnimations() {
  animateLoader();

  // Wait for site:loaded event for hero animation
  document.addEventListener('site:loaded', animateHero, { once: true });
  if (document.readyState === 'complete') {
    document.dispatchEvent(new CustomEvent('site:loaded'));
  }

  animateSectionTitles();
  animateLines();
  animateAbout();
  animateServices();
  animatePartners();
  animateWhy();
  animateGlobal();
  animateContact();
  animateTextBlocks();
  animateFooter();

  if (!isMobile) initScrollProgress();
  initNavScrollTracking();

  /* Refresh ScrollTrigger once fonts load */
  document.fonts?.ready.then(() => ScrollTrigger.refresh());
}

/* Start after DOM is ready */
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initAllAnimations);
} else {
  initAllAnimations();
}
