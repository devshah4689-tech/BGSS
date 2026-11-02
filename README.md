# BGSS & Associates – Premium Corporate Website Redesign

A complete, high-end, CXO-grade corporate website engineered for **BGSS & Associates** (Chartered Accountants & Advisors).

Designed with the aesthetic and storytelling clarity of leading international advisory institutions (McKinsey, Boston Consulting Group, Big Four, and premier corporate law firms), modernizing the original web presence.

---

## 1. Project Overview & Architecture

The website is developed with **PHP 8+**, **HTML5**, **CSS3 (Custom Variables & Modern Grid/Flexbox)**, **Vanilla ES6+ JavaScript**, and **GSAP + ScrollTrigger** for scroll-based choreography. It is fully deployable to standard shared hosting environments (Hostinger, cPanel, Apache/Nginx) with zero build tools or Node.js required.

```
bgss-website/
├── .htaccess                      # Production Apache configuration (Caching, Gzip, Security, Pretty URLs)
├── config.php                     # Central configuration, site constants, CSRF tokens, service/partner arrays
├── index.php                      # Full cinematic homepage with all core sections
├── about.php                      # Dedicated About & Leadership page with full partner biographies
├── services.php                   # Detailed Practice Areas with anchors, analytical writeups, & capabilities
├── contact.php                    # Direct reach page with corporate enquiry form & contact details
├── process-contact.php            # Secure backend form processor with CSRF, Honeypot, Rate Limiting & Mail
├── privacy-policy.php             # Confidentiality & data protection policy
├── cookie-policy.php              # Privacy-centric cookie policy
├── disclaimer.php                 # Regulatory disclaimer complying with ICAI regulations
├── 404.php                        # Styled custom error page
├── index.html                     # Pre-rendered static HTML homepage for preview
├── about.html                     # Pre-rendered static HTML about page
├── services.html                  # Pre-rendered static HTML services page
├── contact.html                   # Pre-rendered static HTML contact page
├── assets/
│   ├── css/
│   │   ├── variables.css          # Design tokens (Crimson red & white palette, CA corporate typography, spacing)
│   │   ├── nav.css                # Fixed glassmorphic navigation, transitions, mobile drawer
│   │   ├── main.css               # Core layout, hero, editorial sections, cards, contact
│   │   └── pages.css              # Subpage layouts, values, partner detail biographies
│   ├── js/
│   │   ├── main.js                # Core interactions, smooth navigation scroll, form validation
│   │   └── animations.js          # GSAP 3 + ScrollTrigger cinematic timelines & reveals
│   └── images/
│       ├── hero-bg.svg            # Bespoke architectural geometric background (dark with crimson red accents)
│       ├── about-office.svg       # Corporate boardroom / architectural placeholder
│       ├── partner-bhaumik.svg    # Partner portrait placeholder
│       ├── partner-saumya.svg     # Partner portrait placeholder
│       ├── partner-shalibhadra.svg# Partner portrait placeholder
│       ├── partner-malay.svg      # Partner portrait placeholder
│       └── og-image.svg           # Social preview share card
└── includes/
    ├── header.php                 # Reusable HTML head, preconnects, and navigation
    ├── navigation.php             # Shared header navigation bar & mobile menu
    ├── footer.php                 # Multi-column corporate footer & legal links
    └── contact-popup.php          # Accessible enquiry dialog
```

---

## 2. Design System & Typography

- **Brand Color Palette:** Crimson Red (`#C8102E`, matching BGSS corporate logo identity) combined with crisp white (`#FFFFFF`), light warm backgrounds (`#FAFAFA`, `#F8F9FA`), and deep midnight navy (`#0F172A`) for high-contrast corporate gravitas.
- **Typography:** Authoritative Chartered Accountancy stack:
  - **Headings & Display:** `Plus Jakarta Sans` (Clean, structured, commanding geometric sans)
  - **Body & Editorial:** `Inter` (Precise, legible, international consulting grade)
- **Cinematic Animations:** GSAP 3 + ScrollTrigger for word-by-word hero reveals, smooth parallax scrolling, card stagger reveals, and interactive hover states.

---

## 3. Local Preview Server

A local server is running at:
```
http://localhost:8080/
```
- **Homepage:** `http://localhost:8080/`
- **About & Leadership:** `http://localhost:8080/about.html`
- **Practice Areas / Services:** `http://localhost:8080/services.html`
- **Contact & Enquiry:** `http://localhost:8080/contact.html`

---

## 4. Deployment Instructions (Hostinger / cPanel / Shared Hosting)

1. **Upload Files:**
   Upload the contents of `bgss-website` directly into your web root (usually `public_html/` or `htdocs/`).

2. **Configure Email & Settings:**
   Open `config.php` and verify:
   ```php
   define('SITE_URL',       'https://bgssassociates.com');
   define('SITE_EMAIL',     'info@bgssassociates.com');
   define('FORM_TO_EMAIL',  'your-actual-inbox@bgssassociates.com');
   ```

3. **SSL / HTTPS:**
   In `.htaccess`, ensure HTTPS redirection is enabled:
   ```apache
   RewriteCond %{HTTPS} off
   RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [R=301,L]
   ```
