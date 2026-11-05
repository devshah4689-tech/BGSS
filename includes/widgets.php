<?php
/**
 * widgets.php — Floating Action Widgets for BGSS & Associates
 * Includes:
 *   1. Official WhatsApp Direct Connect Button (Redirects to +91 6352392705)
 *   2. AskBGSS Corporate Advisory AI Chatbot Dialog & Launcher
 */

$wa_phone_digits = '916352392705';
$wa_phone_display = '+91 63523 92705';
$wa_prefill = rawurlencode('Hello BGSS & Associates, I would like to inquire about your advisory services.');
$wa_url = "https://wa.me/{$wa_phone_digits}?text={$wa_prefill}";
?>

<!-- ════════════════════════════════════════════════════════════════════════ -->
<!--  BGSS FLOATING ACTION WIDGETS (Bottom Right Corner)                     -->
<!-- ════════════════════════════════════════════════════════════════════════ -->
<aside class="bgss-floating-container" aria-label="Quick Connect &amp; Advisory Assistant">

  <!-- ── 1. AskBGSS Chatbot Launcher Button ──────────────────────────────── -->
  <button
    type="button"
    class="bgss-floating-btn bgss-btn-chatbot"
    id="askbgss-open-btn"
    aria-label="Open AskBGSS Corporate Advisory AI Chatbot"
    aria-expanded="false"
    aria-controls="askbgss-chatbot-window"
    title="AskBGSS AI Advisory"
  >
    <!-- AI Sparkle Icon -->
    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
      <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
      <circle cx="12" cy="10" r="1" fill="currentColor"></circle>
      <circle cx="8" cy="10" r="1" fill="currentColor"></circle>
      <circle cx="16" cy="10" r="1" fill="currentColor"></circle>
    </svg>
    
    <!-- Live Active Pulse Dot -->
    <span class="bgss-chatbot-live-dot" aria-hidden="true"></span>

    <!-- Desktop Capsule Label -->
    <span class="bgss-chatbot-capsule-tag" aria-hidden="true">
      <span class="tag-status-dot"></span>
      AskBGSS
    </span>
  </button>

  <!-- ── 2. WhatsApp Direct Connect Button ───────────────────────────────── -->
  <a
    href="<?= $wa_url ?>"
    target="_blank"
    rel="noopener noreferrer"
    class="bgss-floating-btn bgss-btn-whatsapp js-whatsapp-link"
    data-whatsapp="true"
    data-whatsapp-msg="Hello BGSS &amp; Associates, I would like to inquire about your advisory services."
    aria-label="Chat on WhatsApp with BGSS &amp; Associates (<?= $wa_phone_display ?>)"
    title="Chat with BGSS on WhatsApp (<?= $wa_phone_display ?>)"
  >
    <!-- Official WhatsApp SVG Icon -->
    <svg viewBox="0 0 24 24" aria-hidden="true" width="30" height="30">
      <path fill="currentColor" d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2m.01 1.67c2.2 0 4.26.86 5.82 2.42a8.225 8.225 0 0 1 2.41 5.83c0 4.54-3.7 8.24-8.24 8.24-1.48 0-2.93-.4-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.196 8.196 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24m4.52 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.03-1.25-.75-.67-1.26-1.5-1.41-1.75-.14-.25-.02-.39.11-.51.11-.11.25-.29.37-.44.13-.14.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.34-.76-1.84-.2-.48-.4-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.13.17 1.78 2.71 4.3 3.8 2.53 1.09 2.53.73 2.99.69.46-.04 1.47-.6 1.68-1.19.21-.58.21-1.08.15-1.19-.07-.1-.23-.17-.48-.29z"/>
    </svg>

    <!-- Floating Hover Tooltip -->
    <span class="bgss-btn-tooltip" aria-hidden="true">
      <i class="fa-brands fa-whatsapp" style="color:#25D366;"></i> Chat on WhatsApp (<?= $wa_phone_display ?>)
    </span>
  </a>

</aside>

<!-- ════════════════════════════════════════════════════════════════════════ -->
<!--  AskBGSS CHATBOT WINDOW (Interactive Corporate AI Advisory)             -->
<!-- ════════════════════════════════════════════════════════════════════════ -->
<div
  id="askbgss-chatbot-window"
  role="dialog"
  aria-modal="false"
  aria-labelledby="askbgss-title"
  aria-hidden="true"
>
  <!-- ── Header ── -->
  <div class="askbgss-header">
    <div class="askbgss-header-brand">
      <div class="askbgss-avatar" aria-hidden="true">
        <span>BG</span>
        <span class="askbgss-avatar-dot"></span>
      </div>
      <div class="askbgss-header-info">
        <h2 id="askbgss-title" class="askbgss-title">
          AskBGSS <span class="askbgss-title-badge">Advisor</span>
        </h2>
        <span class="askbgss-subtitle">Chartered Accountants &amp; Advisory</span>
      </div>
    </div>

    <!-- Header Actions -->
    <div class="askbgss-header-actions">
      <!-- WhatsApp Direct from Header -->
      <a
        href="<?= $wa_url ?>"
        target="_blank"
        rel="noopener noreferrer"
        class="askbgss-header-btn askbgss-header-btn--wa js-whatsapp-link"
        data-whatsapp="true"
        aria-label="Direct WhatsApp Reach"
        title="Chat on WhatsApp"
      >
        <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
      </a>

      <!-- Reset Chat History -->
      <button
        type="button"
        id="askbgss-reset-btn"
        class="askbgss-header-btn"
        aria-label="Restart Conversation"
        title="Restart Conversation"
      >
        <i class="fa-solid fa-arrow-rotate-right" aria-hidden="true"></i>
      </button>

      <!-- Close Window -->
      <button
        type="button"
        id="askbgss-close-btn"
        class="askbgss-header-btn"
        aria-label="Close AskBGSS Assistant"
        title="Close"
      >
        <i class="fa-solid fa-xmark" aria-hidden="true"></i>
      </button>
    </div>
  </div>

  <!-- ── Message Body ── -->
  <div class="askbgss-body" id="askbgss-messages-body" role="log" aria-live="polite">

    <!-- Initial Welcome Message from AskBGSS -->
    <div class="askbgss-msg askbgss-msg--bot">
      <div class="askbgss-bubble">
        <p><strong>Welcome to BGSS &amp; Associates!</strong></p>
        <p>
          I am <strong>AskBGSS</strong>, your digital advisory assistant. How can we help you navigate Indian taxation, cross-border regulations, or corporate advisory today?
        </p>

        <!-- Quick Tap Suggestion Chips -->
        <div class="askbgss-chips-wrap">
          <button type="button" class="askbgss-chip" data-action="query" data-query="Corporate Tax Advisory">
            <i class="fa-solid fa-calculator"></i> Corporate Tax
          </button>
          <button type="button" class="askbgss-chip" data-action="query" data-query="Tax Litigation and ITAT defense">
            <i class="fa-solid fa-scale-balanced"></i> Tax Litigation
          </button>
          <button type="button" class="askbgss-chip" data-action="query" data-query="Transfer Pricing and FEMA regulations">
            <i class="fa-solid fa-globe"></i> Transfer Pricing &amp; FEMA
          </button>
          <button type="button" class="askbgss-chip" data-action="query" data-query="Mergers and Acquisitions">
            <i class="fa-solid fa-diagram-project"></i> M&amp;A Structuring
          </button>
          <button type="button" class="askbgss-chip" data-action="query" data-query="Who are the partners?">
            <i class="fa-solid fa-user-tie"></i> Our Partners
          </button>
          <button type="button" class="askbgss-chip" data-action="query" data-query="Where is your office located?">
            <i class="fa-solid fa-location-dot"></i> Office &amp; Contact
          </button>
          <button type="button" class="askbgss-chip askbgss-chip--wa" data-action="wa" data-msg="Hello BGSS &amp; Associates, I would like to consult on my tax matter.">
            <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp (6352392705)
          </button>
          <button type="button" class="askbgss-chip" data-action="open-form">
            <i class="fa-solid fa-calendar-check"></i> Book Consultation
          </button>
        </div>
      </div>
      <span class="askbgss-time">Just now</span>
    </div>

    <!-- Typing Indicator (hidden until active) -->
    <div class="askbgss-typing" id="askbgss-typing-indicator" aria-hidden="true">
      <span class="askbgss-typing-dot"></span>
      <span class="askbgss-typing-dot"></span>
      <span class="askbgss-typing-dot"></span>
    </div>

  </div>

  <!-- ── Footer Input Area ── -->
  <div class="askbgss-footer">
    <div class="askbgss-input-wrap">
      <input
        type="text"
        id="askbgss-chat-input"
        class="askbgss-input"
        placeholder="Ask about tax, FEMA, M&amp;A, partners…"
        autocomplete="off"
        aria-label="Ask AskBGSS a question"
      >
      <button
        type="button"
        id="askbgss-send-btn"
        class="askbgss-send-btn"
        aria-label="Send message"
        title="Send"
      >
        <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
      </button>
    </div>
    <div class="askbgss-disclaimer">
      Institutional guidance in alignment with ICAI standards &bull; Direct reach: <strong>6352392705</strong>
    </div>
  </div>
</div>
