<?php
/**
 * 404.php — Page Not Found for BGSS & Associates
 * PHP 8+
 */

declare(strict_types=1);

require_once __DIR__ . '/config.php';

$page_title       = '404 – Page Not Found | BGSS & Associates';
$meta_description = 'The page you requested could not be found.';
$current_page     = '404';

http_response_code(404);

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navigation.php';
?>

<main id="main-content">
  <section class="section-pad" style="min-height: 70vh; display: flex; align-items: center; justify-content: center; text-align: center; background-color: var(--color-off-white);">
    <div class="container" style="max-width: 600px;">
      <p class="overline" style="justify-content: center;">Error 404</p>
      <h1 style="font-size: clamp(3rem, 7vw, 6rem); color: var(--color-navy); margin-bottom: var(--space-4);">
        Page <em>Not Found</em>
      </h1>
      <div class="gold-rule" style="margin-inline: auto;"></div>
      <p style="color: var(--color-slate); font-size: var(--text-lg); line-height: 1.7; margin-bottom: var(--space-8);">
        The page you requested may have been relocated, updated, or does not exist. Please return to our homepage or explore our advisory services.
      </p>
      <div style="display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap;">
        <a href="/" class="btn btn-primary">
          Return to Homepage
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="/services.php" class="btn btn-ghost-dark">
          Explore Services
        </a>
      </div>
    </div>
  </section>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
