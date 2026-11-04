/**
 * BGSS & Associates – Cinematic Logo Intro Animation (Video Style)
 * intro-animation.js | High-performance WebGL/Canvas + GSAP Engine
 */

'use strict';

(function () {
  const overlay   = document.getElementById('logo-intro-overlay');
  if (!overlay) return;

  const canvas    = document.getElementById('intro-canvas');
  const skipBtn   = document.getElementById('intro-skip-btn');
  const stroke    = overlay.querySelector('.intro-logo-stroke');
  const strokePaths = overlay.querySelectorAll('.intro-logo-stroke path');
  const fill      = overlay.querySelector('.intro-logo-fill');
  const shimmer   = overlay.querySelector('.intro-shimmer');
  const subtitle  = overlay.querySelector('.intro-subtitle');
  const divider   = overlay.querySelector('.intro-divider');
  const tagline   = overlay.querySelector('.intro-tagline');

  let animationFinished = false;
  let particleReqId = null;

  /* ── 1. Floating Ambient Dust Particle System ── */
  if (canvas) {
    const ctx = canvas.getContext('2d');
    let width = (canvas.width = window.innerWidth);
    let height = (canvas.height = window.innerHeight);

    window.addEventListener('resize', () => {
      width = canvas.width = window.innerWidth;
      height = canvas.height = window.innerHeight;
    }, { passive: true });

    const particles = [];
    const COUNT = Math.min(45, Math.floor(width / 30));

    for (let i = 0; i < COUNT; i++) {
      particles.push({
        x: Math.random() * width,
        y: Math.random() * height,
        r: Math.random() * 2 + 0.6,
        vx: (Math.random() - 0.5) * 0.4,
        vy: (Math.random() - 0.5) * 0.4 - 0.2, // gentle drift upward
        alpha: Math.random() * 0.5 + 0.2,
      });
    }

    function renderParticles() {
      if (animationFinished) return;
      ctx.clearRect(0, 0, width, height);

      particles.forEach(p => {
        p.x += p.vx;
        p.y += p.vy;

        if (p.x < 0) p.x = width;
        if (p.x > width) p.x = 0;
        if (p.y < 0) p.y = height;
        if (p.y > height) p.y = 0;

        ctx.beginPath();
        ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(167, 37, 58, ${p.alpha * 0.6})`;
        ctx.shadowBlur = 6;
        ctx.shadowColor = '#D2909B';
        ctx.fill();
      });

      particleReqId = requestAnimationFrame(renderParticles);
    }
    renderParticles();
  }

  /* ── 2. Cinematic GSAP Logo Sequence ── */
  const masterTL = gsap.timeline({
    defaults: { ease: 'power3.out' },
    onComplete: finishIntro
  });

  // Step 1: Skip button reveals gently
  if (skipBtn) {
    gsap.to(skipBtn, { opacity: 1, duration: 0.8, delay: 0.6 });
  }

  // Step 2: Laser stroke outline of BGSS draws in
  if (strokePaths && strokePaths.length) {
    masterTL.to(strokePaths, {
      strokeDashoffset: 0,
      duration: 1.5,
      stagger: 0.12,
      ease: 'power2.inOut',
    }, 0.2);
  } else if (stroke) {
    masterTL.to(stroke, {
      strokeDashoffset: 0,
      duration: 1.4,
      ease: 'power2.inOut',
    }, 0.2);
  }

  // Step 3: Solid radiant crimson fill illuminates
  if (fill) {
    masterTL.to(fill, {
      opacity: 1,
      duration: 0.9,
      ease: 'power2.out',
    }, 1.2);
  }

  // Step 4: Metallic light shimmer sweeps horizontally across letters
  if (shimmer) {
    masterTL.fromTo(shimmer,
      { left: '-150%' },
      { left: '150%', duration: 1.0, ease: 'power2.inOut' },
      1.5
    );
  }

  // Step 5: Subtitle cinematic expand & fade-up
  if (subtitle) {
    masterTL.to(subtitle, {
      opacity: 1,
      y: 0,
      letterSpacing: '0.28em',
      duration: 0.9,
      ease: 'power3.out',
    }, 1.8);
  }

  // Step 6: Laser accent divider line expands from center
  if (divider) {
    masterTL.to(divider, {
      width: '180px',
      duration: 0.7,
      ease: 'power2.out',
    }, 2.1);
  }

  // Step 7: Corporate Tagline reveals softly
  if (tagline) {
    masterTL.to(tagline, {
      opacity: 0.85,
      y: 0,
      duration: 0.8,
      ease: 'power3.out',
    }, 2.3);
  }

  // Step 8: Hold cinematic frame for impact
  masterTL.to({}, { duration: 0.6 });

  /* ── 3. Smooth Outro & Website Reveal ── */
  function finishIntro() {
    if (animationFinished) return;
    animationFinished = true;

    if (particleReqId) {
      cancelAnimationFrame(particleReqId);
    }

    gsap.to(overlay, {
      opacity: 0,
      scale: 1.08,
      filter: 'blur(10px)',
      duration: 0.7,
      ease: 'power2.inOut',
      onComplete: () => {
        overlay.classList.add('is-finished');
        document.body.classList.remove('js-loading');
        document.body.classList.add('js-ready');

        // Dispatch site:loaded event to trigger hero animations seamlessly
        document.dispatchEvent(new CustomEvent('site:loaded'));
      }
    });
  }

  // Skip button click handler
  if (skipBtn) {
    skipBtn.addEventListener('click', (e) => {
      e.preventDefault();
      masterTL.kill();
      finishIntro();
    });
  }

  // Escape key skip handler
  window.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && !animationFinished) {
      masterTL.kill();
      finishIntro();
    }
  });

})();
