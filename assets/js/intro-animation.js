/**
 * BGSS & Associates – Cinematic CA Firm Video Intro Animation
 * intro-animation.js | High-performance WebGL/Canvas + GSAP Engine
 * Features: Scales of Justice, Corporate Practice Pillars, Gold Dust Constellation & Anamorphic Lens Flare
 */

'use strict';

(function () {
  const overlay = document.getElementById('logo-intro-overlay');
  if (!overlay) return;

  const canvas         = document.getElementById('intro-canvas');
  const skipBtn        = document.getElementById('intro-skip-btn');
  const crest          = overlay.querySelector('.intro-ca-crest');
  const crestStrokes   = overlay.querySelectorAll('.crest-stroke, .crest-beam');
  const crestPaths     = overlay.querySelectorAll('.crest-path');
  const crestLabel     = overlay.querySelector('.intro-crest-label');
  const strokePaths    = overlay.querySelectorAll('.intro-logo-stroke path');
  const fill           = overlay.querySelector('.intro-logo-fill');
  const shimmer        = overlay.querySelector('.intro-shimmer');
  const flare          = overlay.querySelector('.intro-anamorphic-flare');
  const firmTitle      = overlay.querySelector('.intro-firm-title');
  const subtitle       = overlay.querySelector('.intro-subtitle');
  const divider        = overlay.querySelector('.intro-divider');
  const dividerGem     = overlay.querySelector('.intro-divider-gem');
  const pillars        = overlay.querySelectorAll('.intro-pillar-item');
  const pillarSeps     = overlay.querySelectorAll('.intro-pillar-sep');
  const tagline        = overlay.querySelector('.intro-tagline');
  const jurisdiction   = overlay.querySelector('.intro-jurisdiction');

  let animationFinished = false;
  let particleReqId = null;

  /* ── 1. Floating Gold & Crimson Ambient Constellation Dust System ── */
  if (canvas) {
    const ctx = canvas.getContext('2d');
    let width = (canvas.width = window.innerWidth);
    let height = (canvas.height = window.innerHeight);

    window.addEventListener('resize', () => {
      width = canvas.width = window.innerWidth;
      height = canvas.height = window.innerHeight;
    }, { passive: true });

    const particles = [];
    const COUNT = Math.min(50, Math.floor(width / 26));

    for (let i = 0; i < COUNT; i++) {
      particles.push({
        x: Math.random() * width,
        y: Math.random() * height,
        r: Math.random() * 1.8 + 0.6,
        vx: (Math.random() - 0.5) * 0.35,
        vy: (Math.random() - 0.5) * 0.35 - 0.15, // gentle drift upward
        alpha: Math.random() * 0.6 + 0.2,
        isGold: Math.random() > 0.45 // blend of rich gold & subtle crimson
      });
    }

    function renderParticles() {
      if (animationFinished) return;
      ctx.clearRect(0, 0, width, height);

      // Draw subtle connecting constellation lines between nearby financial nodes
      for (let i = 0; i < particles.length; i++) {
        for (let j = i + 1; j < particles.length; j++) {
          const dx = particles[i].x - particles[j].x;
          const dy = particles[i].y - particles[j].y;
          const dist = Math.sqrt(dx * dx + dy * dy);

          if (dist < 75) {
            ctx.beginPath();
            ctx.moveTo(particles[i].x, particles[i].y);
            ctx.lineTo(particles[j].x, particles[j].y);
            const lineAlpha = (1 - dist / 75) * 0.12;
            ctx.strokeStyle = `rgba(212, 168, 67, ${lineAlpha})`;
            ctx.lineWidth = 0.6;
            ctx.stroke();
          }
        }
      }

      // Draw particles
      particles.forEach(p => {
        p.x += p.vx;
        p.y += p.vy;

        if (p.x < 0) p.x = width;
        if (p.x > width) p.x = 0;
        if (p.y < 0) p.y = height;
        if (p.y > height) p.y = 0;

        ctx.beginPath();
        ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
        if (p.isGold) {
          ctx.fillStyle = `rgba(212, 168, 67, ${p.alpha * 0.75})`;
          ctx.shadowBlur = 8;
          ctx.shadowColor = '#D4A843';
        } else {
          ctx.fillStyle = `rgba(167, 37, 58, ${p.alpha * 0.55})`;
          ctx.shadowBlur = 6;
          ctx.shadowColor = '#A7253A';
        }
        ctx.fill();
      });

      particleReqId = requestAnimationFrame(renderParticles);
    }
    renderParticles();
  }

  /* ── 2. Cinematic GSAP CA Firm Motion Sequence ── */
  const masterTL = gsap.timeline({
    defaults: { ease: 'power3.out' },
    onComplete: finishIntro
  });

  // Step 1: Skip button appears immediately
  if (skipBtn) {
    gsap.to(skipBtn, { opacity: 1, duration: 0.6, delay: 0.3 });
  }

  // Step 2: Scales of Justice CA Crest & Laurel Wreath Draw In
  if (crest) {
    masterTL.to(crest, {
      opacity: 1,
      scale: 1,
      y: 0,
      duration: 0.9,
      ease: 'back.out(1.4)'
    }, 0.1);
  }

  if (crestStrokes && crestStrokes.length) {
    masterTL.to(crestStrokes, {
      strokeDashoffset: 0,
      duration: 1.2,
      stagger: 0.05,
      ease: 'power2.inOut'
    }, 0.2);
  }

  if (crestPaths && crestPaths.length) {
    masterTL.to(crestPaths, {
      opacity: 0.85,
      duration: 0.8,
      stagger: 0.08,
      ease: 'power2.out'
    }, 0.5);
  }

  if (crestLabel) {
    masterTL.to(crestLabel, {
      opacity: 1,
      y: 0,
      duration: 0.7,
      ease: 'power3.out'
    }, 0.7);
  }

  // Step 3: Laser stroke drawing of BGSS letters
  if (strokePaths && strokePaths.length) {
    masterTL.to(strokePaths, {
      strokeDashoffset: 0,
      duration: 1.3,
      stagger: 0.12,
      ease: 'power2.inOut'
    }, 0.6);
  }

  // Step 4: Solid Dual Radiant Fill illuminates
  if (fill) {
    masterTL.to(fill, {
      opacity: 1,
      duration: 0.8,
      ease: 'power2.out'
    }, 1.3);
  }

  // Step 5: Firm Title "BGSS & ASSOCIATES" reveals
  if (firmTitle) {
    masterTL.to(firmTitle, {
      opacity: 1,
      y: 0,
      duration: 0.8,
      ease: 'power3.out'
    }, 1.5);
  }

  // Step 6: Subtitle "CHARTERED ACCOUNTANTS & REGULATORY ADVISORS"
  if (subtitle) {
    masterTL.to(subtitle, {
      opacity: 1,
      y: 0,
      letterSpacing: '0.24em',
      duration: 0.7,
      ease: 'power3.out'
    }, 1.8);
  }

  // Step 7: Gold Divider expands with rotating center diamond
  if (divider) {
    masterTL.to(divider, {
      width: '260px',
      duration: 0.7,
      ease: 'power2.out'
    }, 2.0);
  }

  if (dividerGem) {
    masterTL.to(dividerGem, {
      opacity: 1,
      scale: 1,
      rotation: 225,
      duration: 0.8,
      ease: 'back.out(2)'
    }, 2.1);
  }

  // Step 8: Key CA Practice Pillars sequentially light up
  if (pillars && pillars.length) {
    masterTL.to(pillars, {
      opacity: 1,
      y: 0,
      duration: 0.5,
      stagger: 0.08,
      ease: 'power2.out'
    }, 2.2);
  }

  if (pillarSeps && pillarSeps.length) {
    masterTL.to(pillarSeps, {
      opacity: 0.8,
      duration: 0.4,
      stagger: 0.08
    }, 2.3);
  }

  // Step 9: Anamorphic Horizontal Lens Flare sweep & Metallic Shimmer
  if (flare) {
    masterTL.fromTo(flare,
      { left: '-120%', opacity: 0 },
      { left: '120%', opacity: 0.95, duration: 1.1, ease: 'power2.inOut' },
      2.6
    );
  }

  if (shimmer) {
    masterTL.fromTo(shimmer,
      { left: '-150%' },
      { left: '150%', duration: 0.9, ease: 'power2.inOut' },
      2.7
    );
  }

  // Step 10: Tagline & Jurisdiction reveal
  if (tagline) {
    masterTL.to(tagline, {
      opacity: 0.85,
      y: 0,
      duration: 0.7,
      ease: 'power3.out'
    }, 2.8);
  }

  if (jurisdiction) {
    masterTL.to(jurisdiction, {
      opacity: 1,
      y: 0,
      letterSpacing: '0.35em',
      duration: 0.7,
      ease: 'power3.out'
    }, 3.0);
  }

  // Step 11: Hold cinematic grandeur frame briefly before smooth dissolve
  masterTL.to({}, { duration: 0.5 });

  /* ── 3. Smooth Outro & Website Reveal ── */
  function finishIntro() {
    if (animationFinished) return;
    animationFinished = true;

    if (particleReqId) {
      cancelAnimationFrame(particleReqId);
    }

    gsap.to(overlay, {
      opacity: 0,
      scale: 1.05,
      filter: 'blur(8px)',
      duration: 0.75,
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
