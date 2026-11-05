/**
 * BGSS & Associates – AskBGSS Chatbot & WhatsApp Integration
 * chatbot.js | v1.0
 * Handles:
 *  1. WhatsApp click & instant redirection to 6352392705
 *  2. AskBGSS interactive corporate advisory assistant
 *  3. Dynamic response engine for tax, FEMA, litigation, partners, M&A, contacts
 *  4. In-chat consultation booking with direct WhatsApp dispatch
 */

'use strict';

(function () {
  function getLiveWaNumber() {
    try {
      const raw = localStorage.getItem('bgss_admin_data');
      if (raw) {
        const d = JSON.parse(raw);
        if (d.settings && d.settings.whatsapp_number) return d.settings.whatsapp_number.replace(/\D/g, '');
      }
    } catch(e) {}
    return localStorage.getItem('bgss_wa_number') || '916352392705';
  }

  function getLiveEmail() {
    try {
      const raw = localStorage.getItem('bgss_admin_data');
      if (raw) {
        const d = JSON.parse(raw);
        if (d.settings && d.settings.contact_email) return d.settings.contact_email;
      }
    } catch(e) {}
    return localStorage.getItem('bgss_contact_email') || 'devshah4689@gmail.com';
  }

  const DEFAULT_WA_MSG = 'Hello BGSS & Associates, I would like to inquire about your advisory services.';

  /* ── 1. WhatsApp Redirect Helper ── */
  function openWhatsApp(customMessage) {
    const waNumber = getLiveWaNumber();
    const text = encodeURIComponent(customMessage || DEFAULT_WA_MSG);
    const url = `https://wa.me/${waNumber}?text=${text}`;
    window.open(url, '_blank', 'noopener,noreferrer');
  }

  // Bind any element with [data-whatsapp] or .js-whatsapp-link
  document.addEventListener('click', (e) => {
    const waTrigger = e.target.closest('[data-whatsapp], .js-whatsapp-link');
    if (waTrigger) {
      e.preventDefault();
      const customMsg = waTrigger.getAttribute('data-whatsapp-msg') || DEFAULT_WA_MSG;
      openWhatsApp(customMsg);
    }
  });

  /* ── 2. Knowledge Base for AskBGSS ── */
  const KB = [
    {
      id: 'tax-advisory',
      keywords: ['tax advisory', 'income tax', 'direct tax', 'tax planning', 'hni', 'family office', 'tax saving'],
      title: 'Strategic Corporate Tax Advisory',
      answer: `<strong>BGSS Tax Advisory Practice:</strong><br>
We deliver comprehensive direct tax planning and strategy for domestic enterprises, multinationals, family offices, and high-net-worth individuals.<br><br>
<strong>Key Capabilities:</strong>
<ul>
  <li>Tax-efficient corporate structuring & holding architectures</li>
  <li>Cross-border tax optimization & treaty benefits (DTAA)</li>
  <li>Capital gains strategy & family wealth succession</li>
  <li>Annual & advance tax computational reviews</li>
</ul>`,
      actions: [
        { label: 'Chat on WhatsApp', waMsg: 'Hi BGSS, I need advisory on Corporate Tax.' },
        { label: 'Book Consultation', isForm: true }
      ]
    },
    {
      id: 'litigation',
      keywords: ['litigation', 'appeal', 'dispute', 'itat', 'high court', 'supreme court', 'assessment', 'scrutiny', 'demand', 'notice'],
      title: 'Tax Litigation & Appellate Defense',
      answer: `<strong>Tax Litigation & Dispute Resolution:</strong><br>
Led by partner <em>Saumya Sheth</em>, our litigation practice represents clients before CIT(Appeals), the Income Tax Appellate Tribunal (ITAT), High Courts, and the Supreme Court of India.<br><br>
<strong>What we do:</strong>
<ul>
  <li>Defense in faceless assessments and complex scrutiny proceedings</li>
  <li>Formulation of strategic grounds of appeal and paper books</li>
  <li>Argued landmark rulings in transfer pricing and direct tax</li>
  <li>Stay of demand and compounding of offenses</li>
</ul>`,
      actions: [
        { label: 'Discuss a Tax Dispute', waMsg: 'Hello BGSS, I received an Income Tax notice/order and need litigation defense.' },
        { label: 'Book Consultation', isForm: true }
      ]
    },
    {
      id: 'transfer-pricing',
      keywords: ['transfer pricing', 'tp', 'benchmarking', '3ceb', 'arm\'s length', 'apa', 'cross border transaction', 'inter company'],
      title: 'Transfer Pricing & Cross-Border Benchmarking',
      answer: `<strong>Transfer Pricing Practice:</strong><br>
Led by partner <em>Shalibhadra Shah</em>, we assist multinational enterprises with inter-company transaction economics, risk alignment, and statutory defense.<br><br>
<strong>Offerings:</strong>
<ul>
  <li>Form 3CEB certification & comprehensive TP study reports</li>
  <li>Global database benchmarking (Capital IQ, Prowess, Orbis)</li>
  <li>Advance Pricing Agreements (APAs) & Safe Harbour filings</li>
  <li>Transfer pricing dispute defense before TPO, DRP & ITAT</li>
</ul>`,
      actions: [
        { label: 'Inquire on Transfer Pricing', waMsg: 'Hi BGSS, I need assistance with Transfer Pricing documentation and Form 3CEB.' },
        { label: 'Book Consultation', isForm: true }
      ]
    },
    {
      id: 'fema',
      keywords: ['fema', 'forex', 'foreign exchange', 'rbi', 'fdi', 'odi', 'ecb', 'remittance', 'inbound', 'outbound', 'cross border', 'foreign investment'],
      title: 'FEMA & Global Regulatory Advisory',
      answer: `<strong>Foreign Exchange Management Act (FEMA) Advisory:</strong><br>
We guide Indian and overseas enterprises through Reserve Bank of India (RBI) regulations and cross-border capital flows.<br><br>
<strong>Capabilities:</strong>
<ul>
  <li>Foreign Direct Investment (FDI) structuring into India</li>
  <li>Overseas Direct Investment (ODI) by Indian entities</li>
  <li>External Commercial Borrowings (ECB) structuring</li>
  <li>FC-GPR / FC-TRS / APR statutory reporting on FIRMS portal</li>
  <li>Compounding applications before the Reserve Bank of India</li>
</ul>`,
      actions: [
        { label: 'Discuss FEMA / RBI Requirement', waMsg: 'Hello BGSS, I need guidance regarding FEMA regulations and RBI filings.' },
        { label: 'Book Consultation', isForm: true }
      ]
    },
    {
      id: 'ma',
      keywords: ['m&a', 'merger', 'acquisition', 'demerger', 'restructuring', 'due diligence', 'slump sale', 'nclt', 'amalgamation'],
      title: 'Mergers & Acquisitions (M&A) Structuring',
      answer: `<strong>Transaction Advisory & M&A:</strong><br>
Led by partner <em>Malay Kalavadia</em>, our team architects high-stakes corporate deals with maximum tax efficiency and regulatory certainty.<br><br>
<strong>Focus Areas:</strong>
<ul>
  <li>Comprehensive Tax Due Diligence (buy-side and sell-side)</li>
  <li>NCLT-approved schemes of amalgamation, demerger & capital reduction</li>
  <li>Business acquisition models (Slump Sale, Asset Purchase, Share Purchase)</li>
  <li>Post-merger integration & step-up optimization</li>
</ul>`,
      actions: [
        { label: 'Discuss M&A Transaction', waMsg: 'Hi BGSS, I would like to consult on an M&A / corporate restructuring transaction.' },
        { label: 'Book Consultation', isForm: true }
      ]
    },
    {
      id: 'compliance',
      keywords: ['compliance', 'corporate tax', 'filing', 'audit', 'tax audit', 'withholding', 'tds', 'advance tax'],
      title: 'Corporate Tax Compliance & Statutory Filings',
      answer: `<strong>Corporate Tax Compliance:</strong><br>
End-to-end statutory accuracy designed to prevent regulatory disputes and ensure full alignment with evolving Indian tax codes.<br><br>
<strong>Scope:</strong>
<ul>
  <li>Corporate income tax return preparation & filing (ITR-6)</li>
  <li>Tax audit reports under section 44AB (Form 3CA/3CB/3CD)</li>
  <li>Quarterly advance tax modeling and estimations</li>
  <li>TDS/TCS returns, 15CA/15CB certificates for foreign remittances</li>
</ul>`,
      actions: [
        { label: 'Contact for Compliance', waMsg: 'Hello BGSS, I need corporate tax compliance and audit support.' }
      ]
    },
    {
      id: 'partners',
      keywords: ['partner', 'partners', 'team', 'who are the partners', 'leadership', 'bhaumik', 'saumya', 'shalibhadra', 'malay', 'founders'],
      title: 'Leadership & Partners of BGSS & Associates',
      answer: `<strong>Partners of BGSS & Associates:</strong><br>
BGSS is anchored by four distinguished Chartered Accountants:
<ul>
  <li><strong>Bhaumik Goda, CA:</strong> Corporate Tax Advisory & International Structuring. 20+ years guiding listed entities, PE & family offices.</li>
  <li><strong>Saumya Sheth, CA:</strong> Tax Litigation & Appellate Defense. Recognized authority before the ITAT, High Courts, and Supreme Court.</li>
  <li><strong>Shalibhadra Shah, CA:</strong> Transfer Pricing & FEMA Compliance. Specialist in cross-border benchmarking and RBI statutory frameworks.</li>
  <li><strong>Malay Kalavadia, CA:</strong> Mergers & Acquisitions and Corporate Restructuring. Expert in deal structuring and NCLT schemes.</li>
</ul>`,
      actions: [
        { label: 'View All Partners Online', link: '/about.html#partners' },
        { label: 'Connect on WhatsApp', waMsg: 'Hi BGSS, I would like to schedule a discussion with one of the partners.' }
      ]
    },
    {
      id: 'contact',
      keywords: ['contact', 'address', 'phone', 'email', 'location', 'office', 'where are you', 'visiting hours', 'ahmedabad office', 'call', 'number'],
      title: 'Office Location & Direct Reach',
      answer: `<strong>BGSS & Associates Headquarters:</strong><br>
📍 <strong>Address:</strong> 604, Shiti Ratna Building, Panchwati Circle, C.G. Road, Ahmedabad &ndash; 380 009, Gujarat, India.<br><br>
📞 <strong>Direct Phones:</strong><br>
&bull; <a href="tel:+919099927783" style="color:#A7253A;font-weight:700;">+91 90999 27783</a><br>
&bull; <a href="tel:+917948904100" style="color:#A7253A;font-weight:700;">+91 79 4890 4100</a><br><br>
💬 <strong>WhatsApp Official:</strong> <a href="https://wa.me/916352392705" target="_blank" style="color:#25D366;font-weight:700;">+91 63523 92705</a><br>
✉️ <strong>Email:</strong> <a href="mailto:devshah4689@gmail.com" style="color:#A7253A;font-weight:600;">devshah4689@gmail.com</a><br>
⏰ <strong>Business Hours:</strong> Monday &ndash; Friday, 9:30 AM &ndash; 6:30 PM IST`,
      actions: [
        { label: 'Open WhatsApp Chat', waMsg: 'Hello BGSS, I would like to get in touch with your Ahmedabad office.' },
        { label: 'Get Directions on Maps', link: 'https://maps.google.com/?q=Shiti+Ratna+Building+Panchwati+Circle+CG+Road+Ahmedabad' }
      ]
    },
    {
      id: 'career',
      keywords: ['career', 'jobs', 'hiring', 'vacancy', 'articleship', 'internship', 'apply', 'work with us', 'ca fresher'],
      title: 'Careers & Articleship at BGSS',
      answer: `<strong>Join BGSS & Associates:</strong><br>
We are continuously seeking ambitious Chartered Accountants, semi-qualified professionals, and top-tier CA articles passionate about corporate taxation, litigation, and transaction advisory.<br><br>
<strong>How to apply:</strong><br>
Send your updated CV to <a href="mailto:devshah4689@gmail.com?subject=Career%20Application%20at%20BGSS" style="color:#A7253A;font-weight:700;">devshah4689@gmail.com</a> with the subject line <em>"Application - [Your Specialization/Articleship]"</em>.`,
      actions: [
        { label: 'Inquire on WhatsApp', waMsg: 'Hello BGSS HR, I would like to inquire about career opportunities at BGSS.' }
      ]
    }
  ];

  /* ── 3. Chatbot Logic & UI ── */
  function initAskBGSS() {
    const chatWindow = document.getElementById('askbgss-chatbot-window');
    const openBtn    = document.getElementById('askbgss-open-btn');
    const closeBtn   = document.getElementById('askbgss-close-btn');
    const resetBtn   = document.getElementById('askbgss-reset-btn');
    const chatBody   = document.getElementById('askbgss-messages-body');
    const chatInput  = document.getElementById('askbgss-chat-input');
    const sendBtn    = document.getElementById('askbgss-send-btn');
    const typingInd  = document.getElementById('askbgss-typing-indicator');

    if (!chatWindow || !openBtn) return;

    let isOpen = false;

    // Toggle Chatbot
    function toggleChat(forceState) {
      isOpen = (typeof forceState === 'boolean') ? forceState : !isOpen;
      chatWindow.classList.toggle('is-open', isOpen);
      openBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      chatWindow.setAttribute('aria-hidden', isOpen ? 'false' : 'true');

      if (isOpen) {
        setTimeout(() => chatInput && chatInput.focus(), 150);
        scrollToBottom();
      }
    }

    openBtn.addEventListener('click', (e) => {
      e.preventDefault();
      toggleChat();
    });

    if (closeBtn) {
      closeBtn.addEventListener('click', (e) => {
        e.preventDefault();
        toggleChat(false);
      });
    }

    // Close on Escape key
    window.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && isOpen) {
        toggleChat(false);
      }
    });

    function scrollToBottom() {
      if (!chatBody) return;
      chatBody.scrollTop = chatBody.scrollHeight;
    }

    function getTimeString() {
      const now = new Date();
      return now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
    }

    // Append Message to UI
    function appendMessage(sender, htmlContent, actions) {
      const msgDiv = document.createElement('div');
      msgDiv.className = `askbgss-msg askbgss-msg--${sender}`;

      let actionsHtml = '';
      if (actions && actions.length) {
        actionsHtml = '<div class="askbgss-chips-wrap">';
        actions.forEach(act => {
          if (act.waMsg) {
            actionsHtml += `<button type="button" class="askbgss-chip askbgss-chip--wa" data-action="wa" data-msg="${encodeURIComponent(act.waMsg)}"><i class="fa-brands fa-whatsapp"></i> ${act.label}</button>`;
          } else if (act.isForm) {
            actionsHtml += `<button type="button" class="askbgss-chip" data-action="open-form"><i class="fa-solid fa-calendar-check"></i> ${act.label}</button>`;
          } else if (act.link) {
            actionsHtml += `<a href="${act.link}" class="askbgss-chip" target="_blank" rel="noopener"><i class="fa-solid fa-arrow-up-right-from-square"></i> ${act.label}</a>`;
          } else if (act.query) {
            actionsHtml += `<button type="button" class="askbgss-chip" data-action="query" data-query="${encodeURIComponent(act.query)}">${act.label}</button>`;
          }
        });
        actionsHtml += '</div>';
      }

      msgDiv.innerHTML = `
        <div class="askbgss-bubble">
          ${htmlContent}
          ${actionsHtml}
        </div>
        <span class="askbgss-time">${getTimeString()}</span>
      `;

      // Insert before typing indicator
      if (typingInd && typingInd.parentNode === chatBody) {
        chatBody.insertBefore(msgDiv, typingInd);
      } else {
        chatBody.appendChild(msgDiv);
      }

      scrollToBottom();
    }

    function showTyping() {
      if (typingInd) {
        typingInd.classList.add('is-visible');
        chatBody.appendChild(typingInd);
        scrollToBottom();
      }
    }

    function hideTyping() {
      if (typingInd) {
        typingInd.classList.remove('is-visible');
      }
    }

    // Intelligent Matching Engine
    function findBestAnswer(query) {
      const clean = query.toLowerCase().trim();

      // Check greetings
      if (/^(hi|hello|hey|greetings|good morning|good afternoon|namaste)/i.test(clean)) {
        return {
          answer: `Hello! Welcome to <strong>BGSS & Associates</strong>. I am <strong>AskBGSS</strong>, your AI corporate advisory assistant.<br><br>How can I assist you today? You can choose a topic below or type any question regarding Tax, FEMA, M&A, or Litigation.`,
          actions: [
            { label: 'Corporate Tax Advisory', query: 'Tell me about Corporate Tax Advisory' },
            { label: 'Tax Litigation & ITAT', query: 'How can you help with Tax Litigation?' },
            { label: 'Transfer Pricing & FEMA', query: 'Tell me about Transfer Pricing and FEMA' },
            { label: 'Mergers & Acquisitions', query: 'Tell me about M&A services' },
            { label: 'Meet Our Partners', query: 'Who are the partners?' },
            { label: 'Talk on WhatsApp', waMsg: 'Hi BGSS, I need assistance.' }
          ]
        };
      }

      // Check direct WhatsApp query
      if (clean.includes('whatsapp') || clean.includes('chat') || clean.includes('phone') || clean.includes('call')) {
        const contactEntry = KB.find(k => k.id === 'contact');
        return {
          answer: `You can reach our partners immediately on WhatsApp at <strong>+91 63523 92705</strong> or call our office line at <strong>+91 90999 27783</strong>.<br><br>Click the green button below to start a WhatsApp conversation right now:`,
          actions: [
            { label: 'Chat on WhatsApp Now (6352392705)', waMsg: 'Hello BGSS, I would like to speak to an advisor.' },
            { label: 'View Full Contact Info', query: 'Where is your office located?' }
          ]
        };
      }

      // Score matching entries
      let bestMatch = null;
      let highestScore = 0;

      for (const entry of KB) {
        let score = 0;
        for (const kw of entry.keywords) {
          if (clean.includes(kw)) {
            score += kw.length; // weight longer specific matches
          }
        }
        if (score > highestScore) {
          highestScore = score;
          bestMatch = entry;
        }
      }

      if (bestMatch && highestScore > 0) {
        return {
          answer: bestMatch.answer,
          actions: bestMatch.actions || []
        };
      }

      // Fallback response with helpful guidance & WhatsApp link
      return {
        answer: `Thank you for your enquiry regarding "<em>${escapeHtml(query)}</em>".<br><br>
BGSS & Associates is a specialized chartered accountancy firm delivering high-end counsel in <strong>Tax Advisory, Litigation Defense, Transfer Pricing, FEMA, and Mergers & Acquisitions</strong>.<br><br>
Would you like to speak directly with our advisory team on WhatsApp or request a private consultation?`,
        actions: [
          { label: '💬 Chat Directly on WhatsApp', waMsg: `Hello BGSS & Associates, I have an inquiry: ${query}` },
          { label: '📅 Request Consultation', isForm: true },
          { label: 'View Practice Areas', query: 'What services does BGSS offer?' },
          { label: 'Meet the Partners', query: 'Who are the partners?' }
        ]
      };
    }

    function escapeHtml(str) {
      return (str || '')
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#039;');
    }

    // Process User Query
    function handleUserSubmit(userText) {
      const text = (userText || (chatInput ? chatInput.value : '')).trim();
      if (!text) return;

      if (chatInput) {
        chatInput.value = '';
        chatInput.focus();
      }

      // Render user message
      appendMessage('user', escapeHtml(text));

      // Simulate bot thinking with typing indicator
      showTyping();
      const delay = Math.min(800, Math.max(350, text.length * 15));

      setTimeout(() => {
        hideTyping();
        const res = findBestAnswer(text);
        appendMessage('bot', res.answer, res.actions);
      }, delay);
    }

    if (sendBtn) {
      sendBtn.addEventListener('click', (e) => {
        e.preventDefault();
        handleUserSubmit();
      });
    }

    if (chatInput) {
      chatInput.addEventListener('keydown', (e) => {
        if (e.key === 'Enter') {
          e.preventDefault();
          handleUserSubmit();
        }
      });
    }

    // Delegate clicks inside chat messages (Chips, Action buttons, WhatsApp, In-Chat Form)
    chatBody.addEventListener('click', (e) => {
      const chip = e.target.closest('[data-action]');
      if (!chip) return;

      const action = chip.getAttribute('data-action');

      if (action === 'wa') {
        const msg = decodeURIComponent(chip.getAttribute('data-msg') || DEFAULT_WA_MSG);
        openWhatsApp(msg);
      } else if (action === 'query') {
        const q = decodeURIComponent(chip.getAttribute('data-query') || '');
        handleUserSubmit(q);
      } else if (action === 'open-form') {
        renderConsultationForm();
      }
    });

    // Render Consultation Form inside Chat
    function renderConsultationForm() {
      const formHtml = `
        <strong>Book a Confidential Consultation:</strong>
        <p style="font-size:0.78rem;color:#64748B;margin-top:2px;">Our partners will evaluate your inquiry and respond within 1 business day.</p>
        <form class="askbgss-form js-askbgss-inchat-form">
          <input type="text" class="askbgss-form-input" name="client_name" placeholder="Your Name *" required>
          <input type="tel" class="askbgss-form-input" name="client_phone" placeholder="Phone Number *" required>
          <input type="email" class="askbgss-form-input" name="client_email" placeholder="Business Email">
          <select class="askbgss-form-select" name="client_service">
            <option value="Tax Advisory">Corporate Tax Advisory</option>
            <option value="Tax Litigation">Tax Litigation & ITAT</option>
            <option value="Transfer Pricing">Transfer Pricing</option>
            <option value="FEMA Compliance">FEMA & Global Advisory</option>
            <option value="M&A Structuring">Mergers & Acquisitions</option>
            <option value="General Consultation">General CA Consultation</option>
          </select>
          <button type="submit" class="askbgss-action-btn">
            Submit & Connect on WhatsApp <i class="fa-brands fa-whatsapp"></i>
          </button>
        </form>
      `;
      appendMessage('bot', formHtml);
    }

    // Handle in-chat form submission
    chatBody.addEventListener('submit', async (e) => {
      const form = e.target.closest('.js-askbgss-inchat-form');
      if (!form) return;
      e.preventDefault();

      const name = form.client_name ? form.client_name.value.trim() : '';
      const phone = form.client_phone ? form.client_phone.value.trim() : '';
      const email = form.client_email ? form.client_email.value.trim() : '';
      const service = form.client_service ? form.client_service.value : 'General Consultation';

      if (!name || !phone) {
        alert('Please provide your name and phone number.');
        return;
      }

      form.style.display = 'none';

      // 1. Try EmailJS (works on localhost AND live hosting, no server needed)
      let sent = false;
      if (typeof emailjs !== 'undefined' &&
          typeof EMAILJS_PUBLIC_KEY !== 'undefined' &&
          EMAILJS_PUBLIC_KEY !== 'BGSS_PUBLIC_KEY') {
        try {
          const response = await emailjs.send(
            EMAILJS_SERVICE_ID,
            EMAILJS_TEMPLATE_ID,
            {
              to_email:   'devshah4689@gmail.com',
              from_name:  name,
              company:    'AskBGSS Chatbot Consultation',
              from_email: email || 'not-provided@askbgss.com',
              phone:      phone,
              service:    service,
              message:    `Consultation request via AskBGSS chatbot.\nClient: ${name}\nService: ${service}\nPhone: ${phone}\nEmail: ${email || 'Not provided'}`,
              subject:    `AskBGSS Consultation Request: ${service} – ${name}`
            },
            EMAILJS_PUBLIC_KEY
          );
          if (response.status === 200) sent = true;
        } catch (ejsErr) { console.error('EmailJS chatbot:', ejsErr); }
      }

      // 2. Fallback: PHP backend (live server)
      if (!sent) {
        try {
          const postData = new FormData();
          postData.append('full_name', name);
          postData.append('company_name', 'AskBGSS Consultation');
          postData.append('email', email || 'devshah4689@gmail.com');
          postData.append('phone', phone);
          postData.append('service', 'general');
          postData.append('message', `Consultation booking via AskBGSS chatbot.\nClient: ${name}\nService: ${service}\nPhone: ${phone}\nEmail: ${email}`);
          postData.append('csrf_token', 'demo_token');
          fetch('/process-contact.php', { method: 'POST', body: postData }).catch(() => {});
        } catch (err) {}
      }

      const successHtml = `
        <div class="askbgss-action-card">
          <div class="askbgss-action-card-title"><i class="fa-solid fa-circle-check" style="color:#2F6D4F;"></i> Consultation Request Sent!</div>
          <p class="askbgss-action-card-text">
            Thank you, <strong>${escapeHtml(name)}</strong>. Your consultation request for <strong>${escapeHtml(service)}</strong> has been sent directly to our advisory team.<br>
            A practice partner will review your requirements and connect with you at <strong>${escapeHtml(phone)}</strong>.
          </p>
        </div>
      `;
      appendMessage('bot', successHtml);
    });

    // Delegate dispatch to WhatsApp button
    chatBody.addEventListener('click', (e) => {
      const btn = e.target.closest('.js-dispatch-wa');
      if (!btn) return;
      const name = decodeURIComponent(btn.getAttribute('data-name') || '');
      const phone = decodeURIComponent(btn.getAttribute('data-phone') || '');
      const service = decodeURIComponent(btn.getAttribute('data-service') || '');
      const waMsg = `Hello BGSS & Associates, my name is ${name}. I am requesting a consultation regarding ${service}. My contact number is ${phone}.`;
      openWhatsApp(waMsg);
    });

    // Reset Chat Handler
    if (resetBtn) {
      resetBtn.addEventListener('click', () => {
        // Keep initial welcome message and remove subsequent
        const msgs = chatBody.querySelectorAll('.askbgss-msg');
        msgs.forEach((m, idx) => {
          if (idx > 0) m.remove();
        });
        appendMessage('bot', `Conversation reset. How can I assist you today?`, [
          { label: 'Corporate Tax', query: 'Tax Advisory' },
          { label: 'Litigation & ITAT', query: 'Tax Litigation' },
          { label: 'FEMA & Transfer Pricing', query: 'FEMA and Transfer Pricing' },
          { label: 'WhatsApp', waMsg: DEFAULT_WA_MSG }
        ]);
      });
    }
  }

  // Init on DOM Ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initAskBGSS);
  } else {
    initAskBGSS();
  }
})();
