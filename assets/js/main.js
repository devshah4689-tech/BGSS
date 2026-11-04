/**
 * BGSS & Associates – Main JavaScript
 * main.js | v1.0
 * Handles: navigation, cursor, mobile menu, loader, misc interactions
 */

'use strict';

/* ── Utility ── */
const qs  = (sel, ctx = document) => ctx.querySelector(sel);
const qsa = (sel, ctx = document) => [...ctx.querySelectorAll(sel)];
const on  = (el, ev, fn, opts) => el && el.addEventListener(ev, fn, opts);

/* ── Page Loader ── */
function initLoader() {
  const loader = qs('#page-loader');
  if (!loader) {
    document.body.classList.remove('js-loading');
    document.body.classList.add('js-ready');
    document.dispatchEvent(new CustomEvent('site:loaded'));
    return;
  }

  let loaded = false;
  function finish() {
    if (loaded) return;
    loaded = true;
    document.body.classList.remove('js-loading');
    document.body.classList.add('js-ready');
    loader.style.transition = 'opacity 0.35s ease';
    loader.style.opacity    = '0';
    setTimeout(() => {
      loader.style.display = 'none';
      document.dispatchEvent(new CustomEvent('site:loaded'));
    }, 400);
  }

  window.addEventListener('load', finish);
  setTimeout(finish, 450); // Guarantee instant appearance
}

/* ── Custom Cursor ── */
function initCursor() {
  const cursor   = qs('#custom-cursor');
  const follower = qs('#cursor-follower');
  if (!cursor || !follower) return;

  // Only on desktop pointer devices
  if (window.matchMedia('(hover: none)').matches) return;

  let mouseX = 0, mouseY = 0;
  let followerX = 0, followerY = 0;
  let rafId;

  document.addEventListener('mousemove', e => {
    mouseX = e.clientX;
    mouseY = e.clientY;
    cursor.style.transform = `translate(${mouseX}px, ${mouseY}px) translate(-50%, -50%)`;
  });

  function animateFollower() {
    followerX += (mouseX - followerX) * 0.12;
    followerY += (mouseY - followerY) * 0.12;
    follower.style.transform = `translate(${followerX}px, ${followerY}px) translate(-50%, -50%)`;
    rafId = requestAnimationFrame(animateFollower);
  }
  animateFollower();

  // Expand on interactive elements
  const expandEls = qsa('a, button, [role="button"], .service-panel, .partner-card, .partner-ad-card, .partner-ad-pill, .partner-ad-arrow-btn, .hero-slider-tab, input, textarea, select');
  expandEls.forEach(el => {
    on(el, 'mouseenter', () => document.body.classList.add('cursor-expanded'));
    on(el, 'mouseleave', () => document.body.classList.remove('cursor-expanded'));
  });

  // Show cursor only after first move
  cursor.style.opacity   = '0';
  follower.style.opacity = '0';
  document.addEventListener('mousemove', function show() {
    cursor.style.opacity   = '1';
    follower.style.opacity = '0.6';
    document.removeEventListener('mousemove', show);
  }, { once: true });
}

/* ── Navigation ── */
function initNavigation() {
  const nav       = qs('#site-nav');
  const hamburger = qs('#nav-hamburger');
  const mobileNav = qs('#nav-mobile');
  if (!nav) return;

  /* Scroll state */
  let scrolled = false;
  const THRESHOLD = 30;

  function updateNav() {
    const shouldBeScrolled = window.scrollY > THRESHOLD;
    if (shouldBeScrolled !== scrolled) {
      scrolled = shouldBeScrolled;
      nav.classList.toggle('nav-scrolled', scrolled);
    }
  }

  window.addEventListener('scroll', updateNav, { passive: true });
  updateNav(); // init

  /* Search flyout */
  const searchBtn   = qs('#nav-search-btn');
  const searchModal = qs('#nav-search-modal');
  const searchClose = qs('#nav-search-close');
  const searchInput = qs('#nav-search-input');

  if (searchBtn && searchModal) {
    on(searchBtn, 'click', (e) => {
      e.stopPropagation();
      searchModal.classList.toggle('is-open');
      if (searchModal.classList.contains('is-open')) {
        setTimeout(() => searchInput?.focus(), 50);
      }
    });

    if (searchClose) {
      on(searchClose, 'click', (e) => {
        e.stopPropagation();
        searchModal.classList.remove('is-open');
      });
    }

    on(document, 'click', (e) => {
      if (!searchModal.contains(e.target) && e.target !== searchBtn) {
        searchModal.classList.remove('is-open');
      }
    });

    on(document, 'keydown', (e) => {
      if (e.key === 'Escape') searchModal.classList.remove('is-open');
    });
  }

  /* Mobile menu */
  if (hamburger && mobileNav) {
    function openMenu() {
      hamburger.classList.add('is-open');
      mobileNav.classList.add('is-open');
      hamburger.setAttribute('aria-expanded', 'true');
      mobileNav.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
    }
    function closeMenu() {
      hamburger.classList.remove('is-open');
      mobileNav.classList.remove('is-open');
      hamburger.setAttribute('aria-expanded', 'false');
      mobileNav.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    }

    on(hamburger, 'click', () => {
      mobileNav.classList.contains('is-open') ? closeMenu() : openMenu();
    });

    // Close on link click
    qsa('a', mobileNav).forEach(a => on(a, 'click', closeMenu));

    // Close on Escape
    on(document, 'keydown', e => { if (e.key === 'Escape') closeMenu(); });
  }

  /* Active link highlight */
  const currentPath = window.location.pathname.replace(/\/$/, '') || '/';
  qsa('.nav-links a, .nav-mobile-links a').forEach(a => {
    const href = a.getAttribute('href').replace(/\/$/, '') || '/';
    if (href === currentPath) a.classList.add('active');
  });
}

/* ── Smooth Anchor Scrolling ── */
function initSmoothScroll() {
  qsa('a[href^="#"]').forEach(a => {
    on(a, 'click', e => {
      const id = a.getAttribute('href').slice(1);
      const target = qs(`#${id}`);
      if (target) {
        e.preventDefault();
        const navH = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--nav-h'));
        const top  = target.getBoundingClientRect().top + window.scrollY - navH;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });
}

/* ── Contact Form Validation ── */
function initContactForm() {
  const form = qs('#contact-form');
  if (!form) return;

  const showError = (field, msg) => {
    const err = field.parentElement.querySelector('.field-error');
    if (err) { err.textContent = msg; err.style.display = 'block'; }
    field.classList.add('is-invalid');
  };
  const clearError = field => {
    const err = field.parentElement.querySelector('.field-error');
    if (err) { err.textContent = ''; err.style.display = 'none'; }
    field.classList.remove('is-invalid');
  };

  qsa('input, select, textarea', form).forEach(f => {
    on(f, 'input', () => clearError(f));
    on(f, 'blur',  () => clearError(f));
  });

  on(form, 'submit', async e => {
    e.preventDefault();
    let valid = true;

    const fields = {
      full_name:    { el: form.full_name,    minLen: 2, label: 'Full name' },
      company_name: { el: form.company_name, minLen: 2, label: 'Company name' },
      email:        { el: form.email,        pattern: /^[^\s@]+@[^\s@]+\.[^\s@]+$/, label: 'Business email' },
      phone:        { el: form.phone,        pattern: /^\+?[\d\s\-()]{7,15}$/, label: 'Phone number' },
      service:      { el: form.service,      required: true, label: 'Service' },
    };

    for (const [key, cfg] of Object.entries(fields)) {
      const val = cfg.el ? cfg.el.value.trim() : '';
      if (!val) { showError(cfg.el, `${cfg.label} is required.`); valid = false; continue; }
      if (cfg.minLen && val.length < cfg.minLen) { showError(cfg.el, `${cfg.label} must be at least ${cfg.minLen} characters.`); valid = false; }
      if (cfg.pattern && !cfg.pattern.test(val)) { showError(cfg.el, `Please enter a valid ${cfg.label.toLowerCase()}.`); valid = false; }
    }
    if (!valid) return;

    // Submit
    const btn  = form.querySelector('[type="submit"]');
    const orig = btn.innerHTML;
    btn.disabled = true;
    btn.innerHTML = '<span>Sending…</span>';

    try {
      const res  = await fetch(form.action, { method: 'POST', body: new FormData(form) });
      const data = await res.json();
      if (data.success) {
        form.innerHTML = `
          <div class="form-success" role="alert">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
              <path d="M20 6L9 17l-5-5"/>
            </svg>
            <h3>Thank you, ${data.name || ''}.</h3>
            <p>We have received your enquiry and will be in touch within one business day.</p>
          </div>`;
      } else {
        btn.disabled  = false;
        btn.innerHTML = orig;
        showError(qs('input', form), data.message || 'Submission failed. Please try again.');
      }
    } catch {
      btn.disabled  = false;
      btn.innerHTML = orig;
    }
  });
}

/* ── Counter Animation ── */
function initCounters() {
  const counters = qsa('[data-count]');
  if (!counters.length) return;

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const el  = entry.target;
      const end = parseInt(el.dataset.count);
      const dur = 1800;
      const start = performance.now();

      function step(now) {
        const pct = Math.min((now - start) / dur, 1);
        const ease = 1 - Math.pow(1 - pct, 3); // ease-out-cubic
        el.textContent = Math.floor(ease * end) + (el.dataset.suffix || '');
        if (pct < 1) requestAnimationFrame(step);
      }
      requestAnimationFrame(step);
      observer.unobserve(el);
    });
  }, { threshold: 0.5 });

  counters.forEach(c => observer.observe(c));
}

/* ── Lazy Images ── */
function initLazyImages() {
  if ('loading' in HTMLImageElement.prototype) {
    qsa('img[loading="lazy"]').forEach(img => {
      if (img.dataset.src) img.src = img.dataset.src;
    });
    return;
  }
  // Fallback IntersectionObserver
  const io = new IntersectionObserver(entries => {
    entries.forEach(({ isIntersecting, target }) => {
      if (!isIntersecting) return;
      if (target.dataset.src) target.src = target.dataset.src;
      io.unobserve(target);
    });
  });
  qsa('img[data-src]').forEach(img => io.observe(img));
}

/* ── Contact Modal ── */
function initContactModal() {
  const modal     = qs('#contact-modal');
  const openBtns  = qsa('.js-open-contact-modal');
  const closeBtn  = qs('#contact-modal-close');
  if (!modal) return;

  const openModal = () => {
    modal.classList.add('is-open');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
    setTimeout(() => qs('[autofocus]', modal)?.focus(), 100);
  };
  const closeModal = () => {
    modal.classList.remove('is-open');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  };

  openBtns.forEach(b => on(b, 'click', openModal));
  if (closeBtn) on(closeBtn, 'click', closeModal);
  on(modal, 'click', e => { if (e.target === modal) closeModal(); });
  on(document, 'keydown', e => { if (e.key === 'Escape') closeModal(); });
}

/* ── Service Panel Hover ── */
function initServicePanels() {
  qsa('.service-panel').forEach(panel => {
    const num = qs('.service-num', panel);
    // Tilt effect (subtle)
    on(panel, 'mousemove', e => {
      const { left, top, width, height } = panel.getBoundingClientRect();
      const x = (e.clientX - left) / width  - 0.5;
      const y = (e.clientY - top)  / height - 0.5;
      panel.style.transform = `perspective(600px) rotateY(${x * 3}deg) rotateX(${-y * 2}deg)`;
    });
    on(panel, 'mouseleave', () => {
      panel.style.transform = '';
    });
  });
}

/* ── Init Pill Navigation & ScrollSpy ── */
function initPillNavigation() {
  const pillLinks = qsa('.nav-pill-link');
  if (!pillLinks.length) return;

  // Click handler: instantly set active state and smooth scroll if in-page
  pillLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      const href = link.getAttribute('href');
      if (href && href.startsWith('#')) {
        const target = qs(href);
        if (target) {
          e.preventDefault();
          pillLinks.forEach(l => l.classList.remove('active'));
          link.classList.add('active');
          const navH = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--nav-h')) || 80;
          const top = target.getBoundingClientRect().top + window.scrollY - navH + 5;
          window.scrollTo({ top, behavior: 'smooth' });
        }
      }
    });
  });

  // ScrollSpy on Homepage (index.html)
  const isHomePage = window.location.pathname === '/' || window.location.pathname.endsWith('index.html') || window.location.pathname.endsWith('index.php');
  if (isHomePage) {
    const sections = [
      { id: 'hero', slug: 'home' },
      { id: 'about', slug: 'partners' },
      { id: 'partners', slug: 'partners' },
      { id: 'services', slug: 'services' },
      { id: 'why-bgss', slug: 'services' },
      { id: 'global', slug: 'fema' },
      { id: 'contact', slug: 'contact' }
    ];

    let ticking = false;
    window.addEventListener('scroll', () => {
      if (!ticking) {
        requestAnimationFrame(() => {
          const scrollPos = window.scrollY + 220;
          let currentSlug = 'home';

          for (const s of sections) {
            const el = document.getElementById(s.id);
            if (el && el.offsetTop <= scrollPos) {
              currentSlug = s.slug;
            }
          }

          pillLinks.forEach(l => {
            const tooltip = (l.getAttribute('data-tooltip') || '').toLowerCase();
            if (tooltip === currentSlug || (currentSlug === 'fema' && tooltip === 'fema')) {
              l.classList.add('active');
            } else {
              l.classList.remove('active');
            }
          });

          ticking = false;
        });
        ticking = true;
      }
    }, { passive: true });
  }
}

/* ── Init All ── */
document.addEventListener('DOMContentLoaded', () => {
  initLoader();
  initCursor();
  initNavigation();
  initPillNavigation();
  initSmoothScroll();
  initContactForm();
  initCounters();
  initLazyImages();
  initContactModal();
  initServicePanels();
});
