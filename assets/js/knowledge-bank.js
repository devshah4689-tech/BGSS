/**
 * BGSS & Associates — Knowledge Bank Interactive Engine
 * assets/js/knowledge-bank.js
 * 
 * Features:
 *  1. 3D Flipbook Reader with realistic page-turning animation and document download
 *  2. In-Website Interactive Presentation Slide Player with multiple slide decks
 *  3. In-Website YouTube Cinema Video Player with dynamic playlist switcher
 *  4. Quick Search & Sticky Sub-Navigation
 */

(function () {
  'use strict';

  /* ==========================================================================
     DATA REPOSITORY: EBOOKS, PRESENTATIONS & VIDEOS
     ========================================================================== */

  let EBOOKS_DATA = [
    {
      id: 'tax-litigation-handbook',
      title: 'Mastering Direct Tax Litigation & ITAT Appellate Practice',
      author: 'Saumya Sheth, Partner',
      theme: 'theme-crimson',
      badge: 'Appellate Handbook • 2024 Edition',
      year: '2024',
      pagesCount: 8,
      tags: ['Tax Litigation', 'ITAT Defense', 'High Court Writs', 'Section 148'],
      summary: 'A practitioner’s authoritative guide to evidentiary jurisprudence, jurisdictional challenges under reassessment regimes, and appellate trial strategies before the ITAT and High Courts.',
      pages: [
        // Spread 1: Cover + Title / Prelim
        {
          left: {
            header: 'BGSS & Associates • Practice Guide',
            body: `
              <div style="text-align:center; padding: 2rem 1rem;">
                <div style="font-size:0.75rem; letter-spacing:0.18em; text-transform:uppercase; color:#A7253A; font-weight:700; margin-bottom:1rem;">BGSS Knowledge Series</div>
                <h3 style="font-size:1.6rem; color:#0F172A; line-height:1.2; margin-bottom:1rem;">Mastering Direct Tax Litigation</h3>
                <p style="font-size:0.95rem; color:#475569; font-style:italic;">Appellate Defense, Reassessments & Jurisdictional Jurisprudence</p>
                <div style="width:50px; height:2px; background:#A7253A; margin: 1.5rem auto;"></div>
                <p style="font-size:0.8rem; color:#64748B;">Author: Saumya Sheth, Partner<br>BGSS & Associates • Chartered Accountants</p>
              </div>
            `,
            footer: 'Publication BGSS-KB-2024-01'
          },
          right: {
            header: 'Chapter 1: Jurisdictional Foundations',
            body: `
              <h3>1. The Doctrine of Due Process</h3>
              <p>In Indian direct tax controversy, over <strong>62% of reassessment notices</strong> under Section 148 and Section 148A are vulnerable to threshold jurisdictional challenges before merits are ever addressed.</p>
              <div class="flipbook-callout">
                <strong>Core Litigator Rule:</strong> "Never argue quantum before exhausting jurisdiction. A notice issued without tangible material is void ab initio."
              </div>
              <h4>Key Procedural Checkpoints:</h4>
              <ul style="padding-left:1.2rem; font-size:0.82rem; color:#334155; line-height:1.6;">
                <li>Verification of Sanction under Section 151 from specified authority</li>
                <li>Presence of independent "reason to believe" vs. borrowed satisfaction</li>
                <li>Compliance with mandatory 148A show cause notices and response windows</li>
              </ul>
            `,
            footer: 'Page 1 of 8'
          }
        },
        // Spread 2: Chapter 2 & Evidence
        {
          left: {
            header: 'Chapter 2: Evidentiary Records at CIT(A)',
            body: `
              <h3>2. Assembling the Paper Book</h3>
              <p>Under Rule 46A of the Income-tax Rules, introducing additional evidence before the First Appellate Authority requires demonstrating exceptional grounds.</p>
              <div class="flipbook-stat-grid">
                <div class="flipbook-stat-box">
                  <span class="flipbook-stat-val">Rule 46A</span>
                  <span class="flipbook-stat-lbl">Strict Threshold</span>
                </div>
                <div class="flipbook-stat-box">
                  <span class="flipbook-stat-val">ITAT</span>
                  <span class="flipbook-stat-lbl">Final Fact-Finder</span>
                </div>
              </div>
              <p style="font-size:0.82rem; color:#475569;">Litigators must ensure that all commercial contracts, ledger confirmations, bank certificates, and contemporaneous correspondence are placed before the Assessing Officer during initial proceedings.</p>
            `,
            footer: 'Page 2 of 8'
          },
          right: {
            header: 'Chapter 3: ITAT Jurisprudence',
            body: `
              <h3>3. The ITAT as Final Fact Finder</h3>
              <p>Section 260A appeals to the High Court are restricted solely to <em>substantial questions of law</em>. Consequently, the ITAT's factual determination is decisive.</p>
              <h4>Essential Trial Elements:</h4>
              <ul style="padding-left:1.2rem; font-size:0.82rem; color:#334155; line-height:1.6;">
                <li><strong>Cross-examination:</strong> Mandatory right where third-party statements are used against assessee.</li>
                <li><strong>Rebuttal of Presumptions:</strong> Rebutting cash credit allegations under Section 68 via source of source proof.</li>
                <li><strong>Precedent Hierarchy:</strong> Jurisdictional High Court ruling binds all benches across the state.</li>
              </ul>
            `,
            footer: 'Page 3 of 8'
          }
        },
        // Spread 3: Writs & Conclusions
        {
          left: {
            header: 'Chapter 4: High Court Writs',
            body: `
              <h3>4. Article 226 Constitutional Remedies</h3>
              <p>When statutory authorities act in flagrant violation of natural justice or completely without statutory jurisdiction, Article 226 writ petitions provide rapid interim protection.</p>
              <div class="flipbook-callout">
                <strong>Landmark Doctrine:</strong> Alternative statutory remedies do not bar a writ when fundamental procedural rights are violated or the statute has been misinterpreted.
              </div>
              <p style="font-size:0.82rem; color:#475569;">Writ strategy requires demonstrating irremediable prejudice and immediate failure of statutory machinery.</p>
            `,
            footer: 'Page 4 of 8'
          },
          right: {
            header: 'Summary & Practice Checklist',
            body: `
              <h3>Litigation Readiness Checklist</h3>
              <div style="background:#F8FAFC; border:1px solid #E2E8F0; border-radius:8px; padding:0.85rem; font-size:0.8rem; line-height:1.6; color:#334155;">
                <p>✔ <strong>Day 1:</strong> Digital audit of DIN (Document Identification Number) compliance.</p>
                <p>✔ <strong>Day 7:</strong> Chronological factual index prepared with tabbed exhibits.</p>
                <p>✔ <strong>Day 14:</strong> Jurisdictional objections raised in writing prior to merits.</p>
                <p>✔ <strong>Day 30:</strong> Protective stay application filed with 20% statutory deposit arguments.</p>
              </div>
              <p style="margin-top:1rem; font-size:0.8rem; color:#64748B;">For dedicated litigation advisory: <a href="mailto:devshah4689@gmail.com" style="color:#A7253A; font-weight:600;">devshah4689@gmail.com</a></p>
            `,
            footer: 'BGSS & Associates • Knowledge Bank'
          }
        }
      ]
    },
    {
      id: 'transfer-pricing-blueprint',
      title: 'Global Transfer Pricing & BEPS 2.0 Compliance Architecture',
      author: 'Shalibhadra Shah, Partner',
      theme: 'theme-navy',
      badge: 'International Tax • 2024 Blueprint',
      year: '2024',
      pagesCount: 8,
      tags: ['Transfer Pricing', 'BEPS 2.0', 'ALP Benchmarking', 'Safe Harbour', 'APAs'],
      summary: 'Strategic methodologies for cross-border related party transactions, intellectual property licensing, management cross-charges, and Advance Pricing Agreements under Indian TP regulations.',
      pages: [
        {
          left: {
            header: 'BGSS & Associates • Global Tax',
            body: `
              <div style="text-align:center; padding: 2rem 1rem;">
                <div style="font-size:0.75rem; letter-spacing:0.18em; text-transform:uppercase; color:#1E3A5F; font-weight:700; margin-bottom:1rem;">International Tax Series</div>
                <h3 style="font-size:1.6rem; color:#0F172A; line-height:1.2; margin-bottom:1rem;">Transfer Pricing &amp; BEPS Architecture</h3>
                <p style="font-size:0.95rem; color:#475569; font-style:italic;">Arm’s Length Structuring, APAs & OECD Pillar Two</p>
                <div style="width:50px; height:2px; background:#1E3A5F; margin: 1.5rem auto;"></div>
                <p style="font-size:0.8rem; color:#64748B;">Author: Shalibhadra Shah, Partner<br>BGSS & Associates</p>
              </div>
            `,
            footer: 'Publication BGSS-KB-2024-02'
          },
          right: {
            header: 'Chapter 1: Arm’s Length Selection',
            body: `
              <h3>1. The 5 Prescribed Methods</h3>
              <p>Section 92C mandates the Most Appropriate Method (MAM) to establish arm's length value in international transactions.</p>
              <div class="flipbook-stat-grid">
                <div class="flipbook-stat-box">
                  <span class="flipbook-stat-val">TNMM</span>
                  <span class="flipbook-stat-lbl">Primary in 78% cases</span>
                </div>
                <div class="flipbook-stat-box">
                  <span class="flipbook-stat-val">CUP</span>
                  <span class="flipbook-stat-lbl">Highest Evidentiary Bar</span>
                </div>
              </div>
              <p style="font-size:0.82rem; color:#475569;">Economic benchmarking requires careful filter selection, working capital adjustments, and multi-year data evaluation to withstand TPO scrutiny.</p>
            `,
            footer: 'Page 1 of 8'
          }
        },
        {
          left: {
            header: 'Chapter 2: Management Charges & DEMPE',
            body: `
              <h3>2. Intra-Group Services & DEMPE</h3>
              <p>Indian revenue authorities scrutinize management fees and software allocations stringently under the "Need-Benefit-Evidence" test.</p>
              <div class="flipbook-callout" style="border-color:#1E3A5F; background:#F0F7FF; color:#1E3A5F;">
                <strong>Evidentiary Rule:</strong> Providing agreements and invoices is insufficient; actual work logs, email correspondence, and measurable economic utility must be demonstrated.
              </div>
              <h4>DEMPE Functions for Intangibles:</h4>
              <p style="font-size:0.82rem; color:#475569;">Development, Enhancement, Maintenance, Protection, and Exploitation of intangibles must determine economic entitlement to IP income.</p>
            `,
            footer: 'Page 2 of 8'
          },
          right: {
            header: 'Chapter 3: Advance Pricing Agreements',
            body: `
              <h3>3. The APA Strategic Advantage</h3>
              <p>An Advance Pricing Agreement (APA) with the Central Board of Direct Taxes (CBDT) provides bilateral or unilateral certainty for up to <strong>9 consecutive years</strong> (5 forward + 4 rollback).</p>
              <h4>Key APA Deliverables:</h4>
              <ul style="padding-left:1.2rem; font-size:0.82rem; color:#334155; line-height:1.6;">
                <li>Elimination of repetitive audit litigation and penalty exposure</li>
                <li>Agreed markups for software development and back-office ITES</li>
                <li>Rollback protection for previously filed open assessment years</li>
              </ul>
            `,
            footer: 'Page 3 of 8'
          }
        }
      ]
    },
    {
      id: 'ma-structuring-playbook',
      title: 'M&A Transaction Structuring & Corporate Reorganization Playbook',
      author: 'Malay Kalavadia, Partner',
      theme: 'theme-emerald',
      badge: 'Corporate Finance • 2024 Playbook',
      year: '2024',
      pagesCount: 8,
      tags: ['M&A', 'Slump Sale', 'Demerger', 'Section 56', 'Due Diligence'],
      summary: 'Practical roadmap for corporate restructuring, share purchases versus asset acquisitions, Section 79 loss carry-forward safeguarding, and court-approved NCLT scheme architectures.',
      pages: [
        {
          left: {
            header: 'BGSS & Associates • Deal Advisory',
            body: `
              <div style="text-align:center; padding: 2rem 1rem;">
                <div style="font-size:0.75rem; letter-spacing:0.18em; text-transform:uppercase; color:#155745; font-weight:700; margin-bottom:1rem;">M&amp;A Architecture Series</div>
                <h3 style="font-size:1.6rem; color:#0F172A; line-height:1.2; margin-bottom:1rem;">M&amp;A Transaction Structuring</h3>
                <p style="font-size:0.95rem; color:#475569; font-style:italic;">Slump Sales, Tax-Neutral Demergers & Due Diligence</p>
                <div style="width:50px; height:2px; background:#155745; margin: 1.5rem auto;"></div>
                <p style="font-size:0.8rem; color:#64748B;">Author: Malay Kalavadia, Partner<br>BGSS & Associates</p>
              </div>
            `,
            footer: 'Publication BGSS-KB-2024-03'
          },
          right: {
            header: 'Chapter 1: Slump Sale vs Itemized Sale',
            body: `
              <h3>1. Business Transfer Modes</h3>
              <p>Choosing between a Slump Sale under Section 50B and an itemized asset acquisition defines both immediate tax liabilities and future depreciation claims.</p>
              <div class="flipbook-stat-grid">
                <div class="flipbook-stat-box">
                  <span class="flipbook-stat-val">Sec. 50B</span>
                  <span class="flipbook-stat-lbl">Lump Sum Consideration</span>
                </div>
                <div class="flipbook-stat-box">
                  <span class="flipbook-stat-val">Demerger</span>
                  <span class="flipbook-stat-lbl">Tax-Neutral Carve Out</span>
                </div>
              </div>
              <h4>Critical Due Diligence Factors:</h4>
              <p style="font-size:0.82rem; color:#475569;">Ensuring the transferred unit constitutes an independent "going concern" undertaking capable of standalone operations.</p>
            `,
            footer: 'Page 1 of 8'
          }
        },
        {
          left: {
            header: 'Chapter 2: Section 79 & Loss Carry-Forward',
            body: `
              <h3>2. Preserving Accumulated Tax Losses</h3>
              <p>Under Section 79 of the Income-tax Act, an unlisted company carrying forward unabsorbed business losses will lose such entitlement if more than <strong>49% of voting shareholding</strong> changes hands.</p>
              <div class="flipbook-callout" style="border-color:#155745; background:#F0FAF7; color:#155745;">
                <strong>Strategic Structuring:</strong> Structuring deals through eligible startup carve-outs or insolvency resolution schemes under IBC ensures loss preservation.
              </div>
            `,
            footer: 'Page 2 of 8'
          },
          right: {
            header: 'Chapter 3: NCLT Scheme Mechanics',
            body: `
              <h3>3. Court-Approved Reorganizations</h3>
              <p>Section 230-232 Schemes of Arrangement before the National Company Law Tribunal (NCLT) provide comprehensive commercial sanitization and statutory exemption from stamp duty in designated states.</p>
              <ul style="padding-left:1.2rem; font-size:0.82rem; color:#334155; line-height:1.6;">
                <li>Tax neutrality under Section 47(vi) and 47(vib)</li>
                <li>Protection from Section 56(2)(x) angel tax triggers</li>
                <li>Clear creditor and shareholder consensus mechanism</li>
              </ul>
            `,
            footer: 'Page 3 of 8'
          }
        }
      ]
    }
  ];

  let PRESENTATIONS_DATA = [
    {
      id: 'pres-itat-defense',
      title: 'Tax Controversy & Appellate Defense Strategies at ITAT',
      speaker: 'Saumya Sheth, Partner',
      badge: 'Appellate Litigation Masterdeck',
      duration: '45 Slides • Updated Q3 2024',
      slides: [
        {
          topic: 'Assessment Defense • Slide 1 of 5',
          title: 'The Modern Tax Controversy Landscape in India',
          bullets: [
            'Shift from manual scrutiny to the National Faceless Assessment Centre (NFAC).',
            'Algorithmic risk profiling via Insight Portal, AIS (Annual Information Statement), and SFT triggers.',
            'Surge in jurisdictional disputes under amended Section 148, 148A, and Section 144B.'
          ],
          cards: [
            { title: 'NFAC Regime', desc: 'Faceless allocation of cases without geographical nexus.' },
            { title: 'AIS Cross-Checks', desc: 'Real-time reconciliation of high-value transactions.' },
            { title: 'Penalty Defense', desc: 'Sec. 270A immunity applications filed within 30 days.' }
          ],
          slideNum: '01 / 05'
        },
        {
          topic: 'Appellate Advocacy • Slide 2 of 5',
          title: 'Section 148A Jurisdictional Challenges',
          bullets: [
            'Right to receive all underlying "information" relied upon by the Assessing Officer.',
            'Minimum 7-day show cause reply window under clause (b) is mandatory and non-negotiable.',
            'Order under clause (d) must deal with each primary objection raised by the taxpayer.'
          ],
          cards: [
            { title: 'Ashoke Kumar Doctrine', desc: 'Supreme Court guidelines on time-barred reassessments.' },
            { title: 'Borrowed Satisfaction', desc: 'Reopening based solely on third-party emails is impermissible.' },
            { title: 'Article 226 Writs', desc: 'Immediate High Court intervention when notice is non-compliant.' }
          ],
          slideNum: '02 / 05'
        },
        {
          topic: 'Evidence Building • Slide 3 of 5',
          title: 'Evidentiary Standards for Cash Credits (Sec. 68)',
          bullets: [
            'The three-pronged test: Identity of creditor, Creditworthiness, and Genuineness of transaction.',
            'Proviso to Section 68: Onus on closely held companies to substantiate "source of the source".',
            'Cross-examination of third-party witnesses whose statements are cited by the Department.'
          ],
          cards: [
            { title: 'Identity', desc: 'PAN, MCA filings, and active corporate status.' },
            { title: 'Creditworthiness', desc: 'Audited balance sheets, net worth, and cash flows.' },
            { title: 'Genuineness', desc: 'Banking channels, commercial rationale, and contracts.' }
          ],
          slideNum: '03 / 05'
        },
        {
          topic: 'ITAT Proceedings • Slide 4 of 5',
          title: 'ITAT Bench Trial Tactics & Paper Book Architecture',
          bullets: [
            'Preparation of the Comprehensive Paper Book strictly under Rule 18 of ITAT Rules.',
            'Separate legal compilation of binding Jurisdictional High Court and coordinate bench rulings.',
            'Handling departmental Remand Reports and Rule 46A admission of crucial records.'
          ],
          cards: [
            { title: 'Rule 18 Rules', desc: 'Exact cross-referencing and AO-stamped certifications.' },
            { title: 'Stay of Demand', desc: 'Sec. 254(2A) stay petitions with statutory deposit compliance.' },
            { title: 'Bench Precedents', desc: 'Co-ordinate bench views cannot be lightly ignored by AO.' }
          ],
          slideNum: '04 / 05'
        },
        {
          topic: 'Strategic Wrap • Slide 5 of 5',
          title: 'Key Takeaways for Corporate Tax Directors',
          bullets: [
            'Build contemporaneous factual files before assessment closure—not at the High Court stage.',
            'Maintain audit trails for intra-group allocations, loans, and capitalization structures.',
            'Engage appellate counsel at the show-cause stage to prevent prejudicial factual admissions.'
          ],
          cards: [
            { title: 'Audit Trail', desc: 'Maintain complete digital archives for 10 assessment years.' },
            { title: 'Early Counsel', desc: 'Involve specialized ITAT counsel from Section 148A notice stage.' },
            { title: 'Executive Summary', desc: 'Present lucid factual summaries to appellate judges.' }
          ],
          slideNum: '05 / 05'
        }
      ]
    },
    {
      id: 'pres-tp-beps',
      title: 'Transfer Pricing Defense & OECD Pillar Two Framework',
      speaker: 'Shalibhadra Shah, Partner',
      badge: 'International Tax Masterdeck',
      duration: '38 Slides • Updated Q3 2024',
      slides: [
        {
          topic: 'Global Tax • Slide 1 of 5',
          title: 'OECD Pillar Two & The 15% Global Minimum Tax',
          bullets: [
            'Global Anti-Base Erosion (GloBE) rules applying to MNE groups with revenue > €750 Million.',
            'Top-up tax calculation mechanics: Qualified Domestic Minimum Top-Up Tax (QDMTT).',
            'Impact on Indian outbound corporate groups operating subsidiaries in low-tax jurisdictions.'
          ],
          cards: [
            { title: 'Pillar Two Scope', desc: 'Applies to consolidated MNE groups above €750M.' },
            { title: '15% Floor', desc: 'Minimum effective tax rate across each operating country.' },
            { title: 'QDMTT Priority', desc: 'Indian parent must account for foreign subsidiary shortfalls.' }
          ],
          slideNum: '01 / 05'
        },
        {
          topic: 'Arm’s Length • Slide 2 of 5',
          title: 'Indian Transfer Pricing Benchmarking Realities',
          bullets: [
            'Indian Transfer Pricing Officers (TPOs) routinely discard taxpayer comparables using strict quantitative filters.',
            'Mandatory application of multi-year weighted average margins and range concepts (35th to 65th percentile).',
            'Working capital and risk adjustments to counter abnormal market distortions.'
          ],
          cards: [
            { title: 'Range Concept', desc: 'Requires at least 6 qualifying comparables for arm’s length range.' },
            { title: 'TPO Filters', desc: 'Rejection of persistent loss-makers and super-profit entities.' },
            { title: 'Foreign Comparables', desc: 'Permissible only where Indian domestic database is depleted.' }
          ],
          slideNum: '02 / 05'
        },
        {
          topic: 'Management Fees • Slide 3 of 5',
          title: 'Intra-Group Charges & The Benefit Test',
          bullets: [
            'Total disallowance of management support service fees is the #1 recurring Indian TP dispute.',
            'Taxpayer must establish: Service was actually rendered, duplicated services did not exist, and genuine benefit accrued.',
            'Indirect allocation keys must reflect real cost drivers (headcount, square footage, server time).'
          ],
          cards: [
            { title: 'Evidence Log', desc: 'Produce timesheets, deliverables, presentations, and tickets.' },
            { title: 'Shareholder Cost', desc: 'Strict exclusion of steward or group reporting activities.' },
            { title: 'Mark-Up Standard', desc: 'Cost-plus 3% to 5% benchmarked under low-value services.' }
          ],
          slideNum: '03 / 05'
        },
        {
          topic: 'Dispute Prevention • Slide 4 of 5',
          title: 'Advance Pricing Agreements (APAs) & MAP Solutions',
          bullets: [
            'Unilateral APAs negotiated directly with the CBDT resolve recurring software and ITES markups.',
            'Bilateral APAs with the USA, UK, Japan, and Singapore eliminate double taxation under Double Tax Treaties.',
            'Mutual Agreement Procedure (MAP) under Article 25 to halt aggressive domestic transfer pricing adjustments.'
          ],
          cards: [
            { title: '9-Year Shield', desc: '5 forward years plus 4 rollback assessment years covered.' },
            { title: 'Negotiated Terms', desc: 'Agreed benchmarking matrices and acceptable margin bands.' },
            { title: 'No Penalty Risk', desc: 'Zero concealment penalty exposure for APA-governed transactions.' }
          ],
          slideNum: '04 / 05'
        },
        {
          topic: 'Compliance • Slide 5 of 5',
          title: 'Master File & CbCR Reporting Roadmaps',
          bullets: [
            'Form 3CEAA (Master File) filing requirements for groups exceeding statutory turnover thresholds.',
            'Country-by-Country Reporting (Form 3CEAD) disclosing global profit, tax paid, and tangible assets.',
            'Coherence check between local TP study (Form 3CEB) and master file group narratives.'
          ],
          cards: [
            { title: 'Form 3CEAA', desc: 'Narrative of global value chain and IP ownership architecture.' },
            { title: 'Form 3CEAD', desc: 'Granular jurisdictional allocation of global profits and taxes.' },
            { title: 'Consistency', desc: 'Inconsistencies instantly trigger high-risk audit flags.' }
          ],
          slideNum: '05 / 05'
        }
      ]
    },
    {
      id: 'pres-ma-deals',
      title: 'M&A Deal Architecture: Slump Sale, Demerger & Sec 56 Defense',
      speaker: 'Malay Kalavadia, Partner',
      badge: 'Corporate Finance Masterdeck',
      duration: '42 Slides • Updated Q3 2024',
      slides: [
        {
          topic: 'Deal Structuring • Slide 1 of 5',
          title: 'M&A Deal Modes: Asset vs. Slump vs. Share Transfer',
          bullets: [
            'Slump Sale under Section 50B transfers an entire business undertaking for a lump sum consideration without itemized asset valuation.',
            'Share Purchase acquisitions inherit historical liabilities, contingent tax demands, and Section 79 loss limitations.',
            'Tax-neutral Demergers under Section 2(19AA) allow tax-free spin-offs of active undertakings into new entities.'
          ],
          cards: [
            { title: 'Slump Sale', desc: 'Capital gains based on Net Worth of undertaking without indexation.' },
            { title: 'Itemized Sale', desc: 'Depreciable assets trigger short-term capital gains under Sec 50.' },
            { title: 'Demerger', desc: 'Zero tax for demerged company, shareholders, and resulting entity.' }
          ],
          slideNum: '01 / 05'
        },
        {
          topic: 'Valuation & Tax • Slide 2 of 5',
          title: 'Rule 11UA Fair Market Value & Section 56(2)(viib)',
          bullets: [
            'Issuance of unlisted shares at a premium above Rule 11UA Fair Market Value triggers taxable income in the issuing company.',
            'Discounted Cash Flow (DCF) valuation reports must be signed by registered Merchant Bankers or Valuers.',
            'Abolition of Angel Tax in Budget 2024 for transactions from FY 2024-25 onwards—handling retrospective open years.'
          ],
          cards: [
            { title: 'DCF Method', desc: 'Substantiating revenue projections with signed contracts and pipelines.' },
            { title: 'Rule 11UAA', desc: 'Prescribed valuation methods for Slump Sale consideration calculation.' },
            { title: 'Safe Harbor Band', desc: '10% variation allowance under Section 56(2)(x) acquisitions.' }
          ],
          slideNum: '02 / 05'
        },
        {
          topic: 'Due Diligence • Slide 3 of 5',
          title: 'Tax Due Diligence & Indemnity Negotiation',
          bullets: [
            'Identifying hidden reassessment liabilities, unasserted transfer pricing gaps, and GST input credit reversals.',
            'Structuring robust Specific Tax Indemnities (STI) backed by bank guarantees or escrow holdbacks.',
            'Section 281 Certificates from Assessing Officers to protect buyer against tax liens on transferred assets.'
          ],
          cards: [
            { title: 'Sec. 281 Notice', desc: 'Mandatory permission to avoid transfer being declared void.' },
            { title: 'Tax Escrow', desc: '10-20% holdback for pending CIT(A) and ITAT disputes.' },
            { title: 'R&W Insurance', desc: 'Transferring unknown pre-closing tax risks to insurers.' }
          ],
          slideNum: '03 / 05'
        },
        {
          topic: 'NCLT Schemes • Slide 4 of 5',
          title: 'NCLT Mergers: Timelines, Approvals & Stamp Duty',
          bullets: [
            'Comprehensive step-plan from Board Approval to Regional Director (RD) and Official Liquidator (OL) filings.',
            'Income Tax Department objections under Section 230(5) and overcoming GAAR (General Anti-Avoidance Rule) challenges.',
            'State-specific stamp duty implications on court-sanctioned schemes of arrangement.'
          ],
          cards: [
            { title: 'Appointed Date', desc: 'The accounting and commercial effective date of merger.' },
            { title: 'GAAR Clearance', desc: 'Demonstrating substantial commercial purpose beyond tax savings.' },
            { title: 'Stamp Duty', desc: 'State High Court precedents on conveyance in scheme orders.' }
          ],
          slideNum: '04 / 05'
        },
        {
          topic: 'Execution • Slide 5 of 5',
          title: 'Post-Closing Integration & PAN/GST Regularization',
          bullets: [
            'Immediate harmonization of vendor master files, PAN/TAN cancellations, and GST registrations.',
            'Filing revised returns under Section 170A for the period between Appointed Date and Effective Date.',
            'Re-titling of patents, trademarks, real estate, and municipal licenses in the merged entity.'
          ],
          cards: [
            { title: 'Sec. 170A Return', desc: 'Statutory revised return to reflect merger scheme numbers.' },
            { title: 'ITC Transfer', desc: 'Filing GST ITC-02 to transfer unutilized credit balances.' },
            { title: 'Bank Re-KYC', desc: 'Immediate novation of corporate banking and borrowing mandates.' }
          ],
          slideNum: '05 / 05'
        }
      ]
    }
  ];

  let VIDEOS_DATA = [
    {
      id: 'video-1',
      youtubeId: '3fumBcKC6RE', // High-quality educational tax masterclass embed
      title: 'Landmark ITAT Rulings & Procedural Defense in Assessment Reopenings',
      speaker: 'Saumya Sheth, Partner',
      badge: 'Tax Controversy Masterclass',
      duration: '42:18 Mins',
      views: '14.8K Views',
      tags: ['ITAT', 'Section 148', 'Assessment Reopening', 'Appellate Defense'],
      desc: 'In this in-depth masterclass, Partner Saumya Sheth breaks down landmark Supreme Court and ITAT rulings governing reassessment proceedings, the mandatory hurdles under Section 148A, and how to preserve jurisdictional objections before the tribunal.'
    },
    {
      id: 'video-2',
      youtubeId: 'bTqVqk7FSmY',
      title: 'Advance Pricing Agreements (APAs): Practical Roadmaps for Multinationals',
      speaker: 'Shalibhadra Shah, Partner',
      badge: 'Transfer Pricing Webinar',
      duration: '35:45 Mins',
      views: '11.2K Views',
      tags: ['Transfer Pricing', 'APA', 'Cross-Border', 'CBDT'],
      desc: 'Partner Shalibhadra Shah explains the practical workflow of entering into Unilateral and Bilateral APAs with the Indian revenue authorities. Learn about rollback advantages, pre-filing consultation meetings, and resolving recurring transfer pricing disputes.'
    },
    {
      id: 'video-3',
      youtubeId: 'kJQP7kiw5Fk',
      title: 'Cross-Border Mergers, Inbound Inversions & Section 56(2)(viib)',
      speaker: 'Malay Kalavadia, Partner',
      badge: 'M&A Deal Architecture',
      duration: '48:30 Mins',
      views: '9.6K Views',
      tags: ['M&A', 'Inbound FDI', 'Angel Tax', 'Corporate Restructuring'],
      desc: 'An executive breakdown of cross-border corporate restructurings, slump sale tax calculations under Section 50B, Rule 11UA fair market value substantiations, and avoiding General Anti-Avoidance Rule (GAAR) traps in NCLT schemes.'
    },
    {
      id: 'video-4',
      youtubeId: 'L_LUpnjgPso',
      title: 'FEMA Non-Resident Indian (NRI) & FDI Regulations Demystified',
      speaker: 'Bhaumik Goda, Managing Partner',
      badge: 'Foreign Exchange Webinar',
      duration: '39:10 Mins',
      views: '18.4K Views',
      tags: ['FEMA', 'RBI Compliance', 'FDI', 'Repatriation'],
      desc: 'Managing Partner Bhaumik Goda walks through Reserve Bank of India (RBI) foreign exchange regulations governing inbound foreign direct investment, overseas direct investment (ODI), NRE/NRO banking, and repatriation of capital.'
    }
  ];

  /* ==========================================================================
     STATE MANAGEMENT
     ========================================================================== */

  let currentBookIndex = 0;
  let currentSpreadIndex = 0;
  let isFlipping = false;

  let currentDeckIndex = 0;
  let currentSlideIndex = 0;
  let isSlideAutoPlaying = false;
  let slideAutoPlayTimer = null;

  let currentVideoIndex = 0;

  /* ==========================================================================
     1. FLIPBOOK 3D READER LOGIC
     ========================================================================== */

  const flipbookModal = document.getElementById('flipbookModal');
  const flipbookStage = document.getElementById('flipbookStage');
  const flipbookBookEl = document.getElementById('flipbookBook');
  const flipbookTitleEl = document.getElementById('flipbookBookTitle');
  const flipbookPageIndicator = document.getElementById('flipbookPageIndicator');
  const flipbookLeftPage = document.getElementById('flipbookLeftPage');
  const flipbookRightPage = document.getElementById('flipbookRightPage');
  const flipbookLeaf = document.getElementById('flipbookLeaf');
  const flipbookLeafFrontContent = document.getElementById('flipbookLeafFrontContent');
  const flipbookLeafBackContent = document.getElementById('flipbookLeafBackContent');
  const flipbookPrevBtn = document.getElementById('flipbookPrevBtn');
  const flipbookNextBtn = document.getElementById('flipbookNextBtn');
  const flipbookCloseBtn = document.getElementById('flipbookCloseBtn');
  const flipbookPills = document.getElementById('flipbookPills');
  const flipbookDownloadBtn = document.getElementById('flipbookDownloadBtn');
  const flipbookFullscreenBtn = document.getElementById('flipbookFullscreenBtn');

  /**
   * Synthesize an ultra-realistic paper page turn swoosh sound using Web Audio API
   */
  function playPageTurnSound() {
    try {
      const AudioCtx = window.AudioContext || window.webkitAudioContext;
      if (!AudioCtx) return;
      const ctx = new AudioCtx();
      const bufferSize = Math.floor(ctx.sampleRate * 0.22);
      const buffer = ctx.createBuffer(1, bufferSize, ctx.sampleRate);
      const data = buffer.getChannelData(0);
      for (let i = 0; i < bufferSize; i++) {
        data[i] = Math.random() * 2 - 1;
      }
      const noise = ctx.createBufferSource();
      noise.buffer = buffer;

      const filter = ctx.createBiquadFilter();
      filter.type = 'bandpass';
      filter.frequency.setValueAtTime(1100, ctx.currentTime);
      filter.frequency.exponentialRampToValueAtTime(420, ctx.currentTime + 0.22);
      filter.Q.value = 1.9;

      const gain = ctx.createGain();
      gain.gain.setValueAtTime(0.01, ctx.currentTime);
      gain.gain.linearRampToValueAtTime(0.08, ctx.currentTime + 0.06);
      gain.gain.exponentialRampToValueAtTime(0.001, ctx.currentTime + 0.22);

      noise.connect(filter);
      filter.connect(gain);
      gain.connect(ctx.destination);

      noise.start();
    } catch (e) {
      // Audio autoplay policy fallback
    }
  }

  function openFlipbook(bookId) {
    const foundIndex = EBOOKS_DATA.findIndex(b => b.id === bookId);
    currentBookIndex = foundIndex >= 0 ? foundIndex : 0;
    currentSpreadIndex = 0;

    renderFlipbookSpread();
    renderFlipbookPills();

    if (flipbookModal) {
      flipbookModal.classList.add('open');
      flipbookModal.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeFlipbook() {
    if (flipbookModal) {
      flipbookModal.classList.remove('open');
      flipbookModal.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
      if (flipbookLeaf) {
        flipbookLeaf.className = 'flipbook-leaf';
      }
    }
  }

  function buildPageHTML(pageData, isLeft, pageNum, totalPages) {
    return `
      <div class="flipbook-header">
        <span>${pageData.header}</span>
        <span>${isLeft ? 'BGSS &amp; Associates' : 'Knowledge Series'}</span>
      </div>
      <div class="flipbook-content-body">
        ${pageData.body}
      </div>
      <div class="flipbook-footer">
        <span>${pageData.footer}</span>
        <span>${isLeft ? 'Page ' + pageNum + ' of ' + totalPages : 'bgssassociates.com'}</span>
      </div>
      ${isLeft ? '<div class="flipbook-corner-hint-left js-corner-prev" title="Click to flip to previous page"></div>' : '<div class="flipbook-corner-hint js-corner-next" title="Click to flip to next page"></div>'}
    `;
  }

  function renderFlipbookSpread() {
    const book = EBOOKS_DATA[currentBookIndex];
    if (!book) return;

    const spread = book.pages[currentSpreadIndex];
    if (!spread) return;

    const totalPages = book.pages.length * 2;
    const pageNumL = currentSpreadIndex * 2 + 1;
    const pageNumR = currentSpreadIndex * 2 + 2;

    if (flipbookTitleEl) {
      flipbookTitleEl.textContent = book.title;
    }

    if (flipbookPageIndicator) {
      flipbookPageIndicator.textContent = `Pages ${pageNumL}–${pageNumR} of ${totalPages}`;
    }

    // Populate Left Page
    if (flipbookLeftPage) {
      flipbookLeftPage.innerHTML = buildPageHTML(spread.left, true, pageNumL, totalPages);
    }

    // Populate Right Page
    if (flipbookRightPage) {
      flipbookRightPage.innerHTML = buildPageHTML(spread.right, false, pageNumR, totalPages);
    }

    // Update Nav Buttons
    if (flipbookPrevBtn) {
      flipbookPrevBtn.disabled = currentSpreadIndex === 0;
    }
    if (flipbookNextBtn) {
      flipbookNextBtn.disabled = currentSpreadIndex >= book.pages.length - 1;
    }

    updateFlipbookPillState();
    rebindCornerHints();
  }

  function rebindCornerHints() {
    document.querySelectorAll('.js-corner-next').forEach(el => {
      el.addEventListener('click', (e) => {
        e.stopPropagation();
        flipNext();
      });
    });
    document.querySelectorAll('.js-corner-prev').forEach(el => {
      el.addEventListener('click', (e) => {
        e.stopPropagation();
        flipPrev();
      });
    });
  }

  function renderFlipbookPills() {
    if (!flipbookPills) return;
    const book = EBOOKS_DATA[currentBookIndex];
    flipbookPills.innerHTML = '';

    book.pages.forEach((_, idx) => {
      const pill = document.createElement('div');
      pill.className = `flipbook-pill-dot ${idx === currentSpreadIndex ? 'active' : ''}`;
      pill.setAttribute('role', 'button');
      pill.setAttribute('aria-label', `Go to spread ${idx + 1}`);
      pill.addEventListener('click', () => {
        if (isFlipping || idx === currentSpreadIndex) return;
        if (idx > currentSpreadIndex) {
          flipNext();
        } else {
          flipPrev();
        }
      });
      flipbookPills.appendChild(pill);
    });
  }

  function updateFlipbookPillState() {
    if (!flipbookPills) return;
    const dots = flipbookPills.querySelectorAll('.flipbook-pill-dot');
    dots.forEach((dot, idx) => {
      dot.classList.toggle('active', idx === currentSpreadIndex);
    });
  }

  /**
   * Ultra-Realistic 3D Forward Page Turn Animation
   */
  function flipNext() {
    const book = EBOOKS_DATA[currentBookIndex];
    if (isFlipping || currentSpreadIndex >= book.pages.length - 1) return;

    isFlipping = true;
    playPageTurnSound();

    const curSpread = book.pages[currentSpreadIndex];
    const nextSpread = book.pages[currentSpreadIndex + 1];
    const totalPages = book.pages.length * 2;
    const curPageR = currentSpreadIndex * 2 + 2;
    const nextPageL = (currentSpreadIndex + 1) * 2 + 1;
    const nextPageR = (currentSpreadIndex + 1) * 2 + 2;

    // 1. Populate turning leaf front with current right page content
    if (flipbookLeafFrontContent) {
      flipbookLeafFrontContent.innerHTML = buildPageHTML(curSpread.right, false, curPageR, totalPages);
    }

    // 2. Populate turning leaf back with next left page content
    if (flipbookLeafBackContent) {
      flipbookLeafBackContent.innerHTML = buildPageHTML(nextSpread.left, true, nextPageL, totalPages);
    }

    // 3. Immediately reveal the underlying next right page
    if (flipbookRightPage) {
      flipbookRightPage.innerHTML = buildPageHTML(nextSpread.right, false, nextPageR, totalPages);
    }

    // 4. Trigger 3D flip animation
    if (flipbookLeaf) {
      flipbookLeaf.className = 'flipbook-leaf is-flipping flip-forward';
    }

    // 5. Complete transition
    setTimeout(() => {
      currentSpreadIndex++;

      // Land new left page
      if (flipbookLeftPage) {
        flipbookLeftPage.innerHTML = buildPageHTML(nextSpread.left, true, nextPageL, totalPages);
      }

      // Reset leaf
      if (flipbookLeaf) {
        flipbookLeaf.className = 'flipbook-leaf';
      }

      if (flipbookPageIndicator) {
        flipbookPageIndicator.textContent = `Pages ${nextPageL}–${nextPageR} of ${totalPages}`;
      }

      if (flipbookPrevBtn) flipbookPrevBtn.disabled = currentSpreadIndex === 0;
      if (flipbookNextBtn) flipbookNextBtn.disabled = currentSpreadIndex >= book.pages.length - 1;

      updateFlipbookPillState();
      rebindCornerHints();
      isFlipping = false;
    }, 780);
  }

  /**
   * Ultra-Realistic 3D Backward Page Turn Animation
   */
  function flipPrev() {
    const book = EBOOKS_DATA[currentBookIndex];
    if (isFlipping || currentSpreadIndex <= 0) return;

    isFlipping = true;
    playPageTurnSound();

    const curSpread = book.pages[currentSpreadIndex];
    const prevSpread = book.pages[currentSpreadIndex - 1];
    const totalPages = book.pages.length * 2;
    const curPageL = currentSpreadIndex * 2 + 1;
    const prevPageR = (currentSpreadIndex - 1) * 2 + 2;
    const prevPageL = (currentSpreadIndex - 1) * 2 + 1;

    // 1. Populate turning leaf front with current left page content
    if (flipbookLeafFrontContent) {
      flipbookLeafFrontContent.innerHTML = buildPageHTML(curSpread.left, true, curPageL, totalPages);
    }

    // 2. Populate turning leaf back with previous right page content
    if (flipbookLeafBackContent) {
      flipbookLeafBackContent.innerHTML = buildPageHTML(prevSpread.right, false, prevPageR, totalPages);
    }

    // 3. Immediately reveal the underlying previous left page
    if (flipbookLeftPage) {
      flipbookLeftPage.innerHTML = buildPageHTML(prevSpread.left, true, prevPageL, totalPages);
    }

    // 4. Trigger 3D flip animation
    if (flipbookLeaf) {
      flipbookLeaf.className = 'flipbook-leaf is-flipping flip-backward';
    }

    // 5. Complete transition
    setTimeout(() => {
      currentSpreadIndex--;

      // Land new right page
      if (flipbookRightPage) {
        flipbookRightPage.innerHTML = buildPageHTML(prevSpread.right, false, prevPageR, totalPages);
      }

      // Reset leaf
      if (flipbookLeaf) {
        flipbookLeaf.className = 'flipbook-leaf';
      }

      if (flipbookPageIndicator) {
        flipbookPageIndicator.textContent = `Pages ${prevPageL}–${prevPageR} of ${totalPages}`;
      }

      if (flipbookPrevBtn) flipbookPrevBtn.disabled = currentSpreadIndex === 0;
      if (flipbookNextBtn) flipbookNextBtn.disabled = currentSpreadIndex >= book.pages.length - 1;

      updateFlipbookPillState();
      rebindCornerHints();
      isFlipping = false;
    }, 780);
  }

  /**
   * Generates and downloads a complete formatted publication document
   */
  function downloadBookPDF(bookId) {
    const targetId = bookId || EBOOKS_DATA[currentBookIndex].id;
    const book = EBOOKS_DATA.find(b => b.id === targetId) || EBOOKS_DATA[currentBookIndex];
    if (!book) return;

    // Create an elegant, printable publication document in memory
    const pagesHTML = book.pages.map((p, i) => `
      <section style="page-break-after: always; padding: 40px; margin-bottom: 30px; border: 1px solid #E2E8F0; background: #fff; border-radius: 8px;">
        <div style="display:flex; justify-content:space-between; border-bottom: 2px solid #A7253A; padding-bottom: 12px; margin-bottom: 24px;">
          <span style="font-size: 11px; text-transform: uppercase; font-weight: bold; letter-spacing: 0.1em; color: #A7253A;">BGSS & Associates • Chartered Accountants</span>
          <span style="font-size: 11px; color: #64748B;">Spread ${i + 1} of ${book.pages.length}</span>
        </div>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
          <div>
            <div style="font-size: 10px; color: #64748B; text-transform: uppercase; margin-bottom: 10px;">${p.left.header}</div>
            <div style="font-size: 14px; line-height: 1.6; color: #1E293B;">${p.left.body}</div>
          </div>
          <div>
            <div style="font-size: 10px; color: #64748B; text-transform: uppercase; margin-bottom: 10px;">${p.right.header}</div>
            <div style="font-size: 14px; line-height: 1.6; color: #1E293B;">${p.right.body}</div>
          </div>
        </div>
        <div style="margin-top: 30px; border-top: 1px solid #E2E8F0; padding-top: 10px; display:flex; justify-content:space-between; font-size: 10px; color: #94A3B8;">
          <span>${p.left.footer}</span>
          <span>© ${new Date().getFullYear()} BGSS & Associates. All Rights Reserved.</span>
        </div>
      </section>
    `).join('');

    const fullDoc = `<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>${book.title} — BGSS & Associates</title>
  <style>
    body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background: #090E17; color: #1E293B; margin: 0; padding: 40px; }
    .doc-container { max-width: 900px; margin: 0 auto; background: #fff; padding: 50px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.5); }
    .doc-header { border-bottom: 3px solid #A7253A; padding-bottom: 25px; margin-bottom: 40px; }
    .doc-brand { font-size: 18px; font-weight: 800; color: #A7253A; letter-spacing: 0.1em; text-transform: uppercase; }
    .doc-title { font-size: 28px; font-weight: 700; color: #0F172A; margin: 12px 0 6px; }
    .doc-author { font-size: 14px; color: #64748B; }
    .flipbook-callout { background: #FFF5F6; border-left: 4px solid #A7253A; padding: 12px 16px; margin: 16px 0; font-size: 13px; color: #881337; }
    .flipbook-stat-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin: 16px 0; }
    .flipbook-stat-box { background: #F8FAFC; border: 1px solid #E2E8F0; padding: 12px; border-radius: 6px; text-align: center; }
    .flipbook-stat-val { font-size: 18px; font-weight: bold; color: #A7253A; display: block; }
    .flipbook-stat-lbl { font-size: 11px; color: #64748B; text-transform: uppercase; }
    @media print {
      body { background: #fff; padding: 0; }
      .doc-container { box-shadow: none; padding: 0; }
      .no-print { display: none !important; }
    }
  </style>
</head>
<body>
  <div class="doc-container">
    <div class="doc-header">
      <div class="doc-brand">BGSS & Associates • Chartered Accountants</div>
      <h1 class="doc-title">${book.title}</h1>
      <div class="doc-author">${book.author} • ${book.badge}</div>
      <p style="font-size:13px; color:#475569; margin-top:10px;">${book.summary}</p>
      <div class="no-print" style="margin-top:20px;">
        <button onclick="window.print()" style="background:#A7253A; color:#fff; border:none; padding:10px 20px; border-radius:6px; cursor:pointer; font-weight:bold;">Print / Save as PDF</button>
      </div>
    </div>
    ${pagesHTML}
  </div>
</body>
</html>`;

    const blob = new Blob([fullDoc], { type: 'text/html;charset=utf-8' });
    const url = URL.createObjectURL(blob);
    const link = document.createElement('a');
    link.href = url;
    const sanitizedTitle = book.title.toLowerCase().replace(/[^a-z0-9]/g, '-').replace(/-+/g, '-');
    link.download = `BGSS-eBook-${sanitizedTitle}.html`;
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    URL.revokeObjectURL(url);
  }

  /* ==========================================================================
     2. IN-WEBSITE PRESENTATION SLIDE PLAYER LOGIC
     ========================================================================== */

  const slideCanvasEl = document.getElementById('kbSlideCanvas');
  const slideDeckCards = document.querySelectorAll('.kb-deck-card');
  const slidePrevBtn = document.getElementById('kbSlidePrev');
  const slideNextBtn = document.getElementById('kbSlideNext');
  const slideCounterEl = document.getElementById('kbSlideCounter');
  const slidePlayBtn = document.getElementById('kbSlidePlay');
  const slideFullscreenBtn = document.getElementById('kbSlideFullscreen');
  const slideDownloadBtn = document.getElementById('kbSlideDownload');

  function renderSlide() {
    const deck = PRESENTATIONS_DATA[currentDeckIndex];
    if (!deck) return;

    const slide = deck.slides[currentSlideIndex];
    if (!slide || !slideCanvasEl) return;

    // Fade animation effect
    slideCanvasEl.style.opacity = '0';
    slideCanvasEl.style.transform = 'translateY(6px)';

    setTimeout(() => {
      const bulletsHTML = slide.bullets.map(b => `
        <li>
          <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
          <span>${b}</span>
        </li>
      `).join('');

      const cardsHTML = slide.cards.map(c => `
        <div class="kb-slide-card">
          <h5>${c.title}</h5>
          <p>${c.desc}</p>
        </div>
      `).join('');

      slideCanvasEl.innerHTML = `
        <div class="kb-slide-header">
          <span class="kb-slide-topic-badge">${slide.topic}</span>
          <span class="kb-slide-brand-watermark">BGSS &amp; Associates</span>
        </div>
        <div class="kb-slide-body">
          <h3 class="kb-slide-title">${slide.title}</h3>
          <ul class="kb-slide-bullets">
            ${bulletsHTML}
          </ul>
          <div class="kb-slide-grid-3">
            ${cardsHTML}
          </div>
        </div>
        <div class="kb-slide-footer">
          <span>${deck.speaker} • ${deck.title}</span>
          <span style="font-weight:700; color:#D2909B;">${slide.slideNum}</span>
        </div>
      `;

      slideCanvasEl.style.opacity = '1';
      slideCanvasEl.style.transform = 'translateY(0)';

      if (slideCounterEl) {
        const cur = String(currentSlideIndex + 1).padStart(2, '0');
        const tot = String(deck.slides.length).padStart(2, '0');
        slideCounterEl.textContent = `${cur} / ${tot}`;
      }

      if (slidePrevBtn) {
        slidePrevBtn.disabled = currentSlideIndex === 0;
      }
      if (slideNextBtn) {
        slideNextBtn.disabled = currentSlideIndex >= deck.slides.length - 1;
      }
    }, 120);
  }

  function switchDeck(deckIndex) {
    if (deckIndex === currentDeckIndex && currentSlideIndex === 0) return;
    currentDeckIndex = deckIndex;
    currentSlideIndex = 0;

    slideDeckCards.forEach((card, idx) => {
      card.classList.toggle('active', idx === currentDeckIndex);
      card.setAttribute('aria-selected', idx === currentDeckIndex ? 'true' : 'false');
    });

    renderSlide();
  }

  function slideNext() {
    const deck = PRESENTATIONS_DATA[currentDeckIndex];
    if (currentSlideIndex < deck.slides.length - 1) {
      currentSlideIndex++;
      renderSlide();
    } else if (isSlideAutoPlaying) {
      // Loop back to start in autoplay mode
      currentSlideIndex = 0;
      renderSlide();
    }
  }

  function slidePrev() {
    if (currentSlideIndex > 0) {
      currentSlideIndex--;
      renderSlide();
    }
  }

  function toggleSlideAutoPlay() {
    isSlideAutoPlaying = !isSlideAutoPlaying;
    if (slidePlayBtn) {
      slidePlayBtn.innerHTML = isSlideAutoPlaying ?
        '<i class="fa-solid fa-pause" aria-hidden="true"></i>' :
        '<i class="fa-solid fa-play" aria-hidden="true"></i>';
      slidePlayBtn.setAttribute('aria-label', isSlideAutoPlaying ? 'Pause Slideshow' : 'Play Slideshow');
    }

    if (isSlideAutoPlaying) {
      slideAutoPlayTimer = setInterval(slideNext, 4500);
    } else {
      clearInterval(slideAutoPlayTimer);
      slideAutoPlayTimer = null;
    }
  }

  function downloadSlideDeck() {
    const deck = PRESENTATIONS_DATA[currentDeckIndex];
    if (!deck) return;

    const slidesHTML = deck.slides.map((s, idx) => `
      <section style="page-break-after: always; padding: 30px; margin-bottom: 25px; border: 1px solid #1E293B; background: #0F172A; color: #fff; border-radius: 12px;">
        <div style="display:flex; justify-content:space-between; border-bottom:1px solid rgba(255,255,255,0.15); padding-bottom:10px; margin-bottom:20px;">
          <span style="color:#D2909B; font-size:12px; font-weight:bold; letter-spacing:0.1em; text-transform:uppercase;">${s.topic}</span>
          <span style="color:rgba(255,255,255,0.5); font-size:12px;">BGSS & Associates</span>
        </div>
        <h2 style="font-size:22px; color:#fff; margin-bottom:20px;">${s.title}</h2>
        <ul style="font-size:14px; line-height:1.7; color:rgba(255,255,255,0.85); padding-left:20px; margin-bottom:25px;">
          ${s.bullets.map(b => `<li>${b}</li>`).join('')}
        </ul>
        <div style="display:grid; grid-template-columns: repeat(3, 1fr); gap:15px; margin-bottom:20px;">
          ${s.cards.map(c => `
            <div style="background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.15); border-radius:8px; padding:12px;">
              <div style="color:#D2909B; font-size:13px; font-weight:bold; margin-bottom:6px;">${c.title}</div>
              <div style="color:rgba(255,255,255,0.7); font-size:12px; line-height:1.4;">${c.desc}</div>
            </div>
          `).join('')}
        </div>
        <div style="border-top:1px solid rgba(255,255,255,0.1); padding-top:10px; display:flex; justify-content:space-between; font-size:11px; color:rgba(255,255,255,0.5);">
          <span>${deck.speaker} • ${deck.title}</span>
          <span>Slide ${idx + 1} of ${deck.slides.length}</span>
        </div>
      </section>
    `).join('');

    const fullDeckDoc = `<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>${deck.title} — Slide Deck</title>
  <style>
    body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background: #060B13; color: #fff; padding: 40px; margin: 0; }
    .deck-container { max-width: 960px; margin: 0 auto; }
    @media print {
      body { background: #000; padding: 0; }
    }
  </style>
</head>
<body>
  <div class="deck-container">
    <div style="margin-bottom:30px; display:flex; justify-content:space-between; align-items:center;">
      <div>
        <h1 style="font-size:24px; margin:0 0 6px;">${deck.title}</h1>
        <div style="color:#D2909B; font-size:14px;">${deck.speaker} • ${deck.badge}</div>
      </div>
      <button onclick="window.print()" style="background:#A7253A; color:#fff; border:none; padding:10px 20px; border-radius:6px; cursor:pointer; font-weight:bold;">Print / Save PDF</button>
    </div>
    ${slidesHTML}
  </div>
</body>
</html>`;

    const blob = new Blob([fullDeckDoc], { type: 'text/html;charset=utf-8' });
    const url = URL.createObjectURL(blob);
    const link = document.createElement('a');
    link.href = url;
    const sanitizedTitle = deck.title.toLowerCase().replace(/[^a-z0-9]/g, '-').replace(/-+/g, '-');
    link.download = `BGSS-Deck-${sanitizedTitle}.html`;
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    URL.revokeObjectURL(url);
  }

  /* ==========================================================================
     3. IN-WEBSITE YOUTUBE CINEMA PLAYER & PLAYLIST LOGIC
     ========================================================================== */

  const videoIframe = document.getElementById('kbVideoIframe');
  const videoTitleEl = document.getElementById('kbVideoCurrentTitle');
  const videoDescEl = document.getElementById('kbVideoCurrentDesc');
  const videoTopicTagEl = document.getElementById('kbVideoTopicTag');
  const videoCards = document.querySelectorAll('.kb-video-card');

  function switchVideo(videoIndex, autoPlay = true) {
    if (videoIndex === currentVideoIndex && videoIframe && videoIframe.src) return;
    currentVideoIndex = videoIndex;

    const video = VIDEOS_DATA[currentVideoIndex];
    if (!video) return;

    if (videoIframe) {
      // Use youtube-nocookie with enablejsapi and autoplay parameters
      const playParam = autoPlay ? '1' : '0';
      videoIframe.src = `https://www.youtube-nocookie.com/embed/${video.youtubeId}?autoplay=${playParam}&rel=0&modestbranding=1`;
      videoIframe.title = video.title;
    }

    if (videoTitleEl) videoTitleEl.textContent = video.title;
    if (videoDescEl) videoDescEl.textContent = video.desc;
    if (videoTopicTagEl) videoTopicTagEl.textContent = `${video.badge} • ${video.speaker}`;

    videoCards.forEach((card, idx) => {
      card.classList.toggle('active', idx === currentVideoIndex);
      card.setAttribute('aria-selected', idx === currentVideoIndex ? 'true' : 'false');
    });
  }

  /* ==========================================================================
     4. SEARCH & FILTER LOGIC
     ========================================================================== */

  const quickSearchInput = document.getElementById('kbQuickSearch');

  function setupQuickSearch() {
    if (!quickSearchInput) return;

    quickSearchInput.addEventListener('input', (e) => {
      const q = e.target.value.toLowerCase().trim();

      // Filter Books
      const bookCards = document.querySelectorAll('.kb-book-card');
      bookCards.forEach(card => {
        const title = card.querySelector('.kb-book-title')?.textContent.toLowerCase() || '';
        const summary = card.querySelector('.kb-book-summary')?.textContent.toLowerCase() || '';
        const author = card.querySelector('.kb-book-cover-author')?.textContent.toLowerCase() || '';
        const match = title.includes(q) || summary.includes(q) || author.includes(q);
        card.style.display = match ? '' : 'none';
      });

      // Filter Presentations
      const deckCards = document.querySelectorAll('.kb-deck-card');
      deckCards.forEach(card => {
        const text = card.textContent.toLowerCase();
        card.style.display = text.includes(q) ? '' : 'none';
      });

      // Filter Videos
      const vCards = document.querySelectorAll('.kb-video-card');
      vCards.forEach(card => {
        const text = card.textContent.toLowerCase();
        card.style.display = text.includes(q) ? '' : 'none';
      });
    });
  }

  /* ==========================================================================
     5. EVENT LISTENERS INITIALIZATION
     ========================================================================== */

  function initEventListeners() {
    // 1. Flipbook Open Buttons
    document.querySelectorAll('.js-open-flipbook').forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        const bookId = btn.getAttribute('data-book-id');
        openFlipbook(bookId);
      });
    });

    // 2. Flipbook Download Buttons on Cards
    document.querySelectorAll('.js-download-book').forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        const bookId = btn.getAttribute('data-book-id');
        downloadBookPDF(bookId);
      });
    });

    // 3. Flipbook Modal Controls
    if (flipbookPrevBtn) flipbookPrevBtn.addEventListener('click', flipPrev);
    if (flipbookNextBtn) flipbookNextBtn.addEventListener('click', flipNext);
    if (flipbookCloseBtn) flipbookCloseBtn.addEventListener('click', closeFlipbook);
    if (flipbookDownloadBtn) {
      flipbookDownloadBtn.addEventListener('click', () => downloadBookPDF());
    }

    // Direct page click to flip
    if (flipbookRightPage) {
      flipbookRightPage.addEventListener('click', (e) => {
        if (!e.target.closest('a, button, input')) {
          flipNext();
        }
      });
    }
    if (flipbookLeftPage) {
      flipbookLeftPage.addEventListener('click', (e) => {
        if (!e.target.closest('a, button, input')) {
          flipPrev();
        }
      });
    }

    if (flipbookFullscreenBtn && flipbookStage) {
      flipbookFullscreenBtn.addEventListener('click', () => {
        if (!document.fullscreenElement) {
          flipbookStage.requestFullscreen?.().catch(err => console.log(err));
        } else {
          document.exitFullscreen?.();
        }
      });
    }

    // Modal background click to close
    if (flipbookModal) {
      flipbookModal.addEventListener('click', (e) => {
        if (e.target === flipbookModal) {
          closeFlipbook();
        }
      });
    }

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
      if (flipbookModal && flipbookModal.classList.contains('open')) {
        if (e.key === 'ArrowRight' || e.key === 'PageDown') {
          flipNext();
        } else if (e.key === 'ArrowLeft' || e.key === 'PageUp') {
          flipPrev();
        } else if (e.key === 'Escape') {
          closeFlipbook();
        }
      }
    });

    // 4. Presentation Controls
    if (slidePrevBtn) slidePrevBtn.addEventListener('click', slidePrev);
    if (slideNextBtn) slideNextBtn.addEventListener('click', slideNext);
    if (slidePlayBtn) slidePlayBtn.addEventListener('click', toggleSlideAutoPlay);
    if (slideDownloadBtn) slideDownloadBtn.addEventListener('click', downloadSlideDeck);

    if (slideFullscreenBtn) {
      slideFullscreenBtn.addEventListener('click', () => {
        const playerScreen = document.querySelector('.kb-deck-screen');
        if (!document.fullscreenElement && playerScreen) {
          playerScreen.requestFullscreen?.().catch(err => console.log(err));
        } else {
          document.exitFullscreen?.();
        }
      });
    }

    slideDeckCards.forEach((card, idx) => {
      card.addEventListener('click', () => switchDeck(idx));
    });

    // 5. Video Playlist Controls
    videoCards.forEach((card, idx) => {
      card.addEventListener('click', () => switchVideo(idx, true));
    });

    // 6. Sub-nav Smooth Scroll
    document.querySelectorAll('.kb-tab-btn').forEach(tab => {
      tab.addEventListener('click', function (e) {
        document.querySelectorAll('.kb-tab-btn').forEach(t => t.classList.remove('active'));
        this.classList.add('active');
      });
    });

    // 7. Search Input
    setupQuickSearch();
  }

  function mergeAdminResources() {
    try {
      const raw = localStorage.getItem('bgss_admin_data');
      if (!raw) return;
      const data = JSON.parse(raw);
      if (!data.resources) return;

      // 1. Custom YouTube Videos
      if (Array.isArray(data.resources.videos) && data.resources.videos.length) {
        const liveVideos = data.resources.videos.filter(v => v.published !== false);
        const mappedVideos = liveVideos.map((v, i) => {
          let ytId = '';
          const match = (v.url || '').match(/(?:youtube\.com\/(?:watch\?v=|embed\/)|youtu\.be\/)([A-Za-z0-9_-]{11})/);
          if (match) ytId = match[1];
          return {
            id: v.id || `custom-video-${i}`,
            youtubeId: ytId || '3fumBcKC6RE',
            title: v.title,
            speaker: 'BGSS Advisory Panel',
            badge: v.category || 'Expert Briefing',
            duration: 'Keynote',
            views: 'New Release',
            tags: [v.category || 'Tax Advisory', 'Video Analysis'],
            desc: v.description || 'Exclusive briefing and strategic analysis by BGSS & Associates chartered accountants.'
          };
        });
        VIDEOS_DATA = [...mappedVideos, ...VIDEOS_DATA];
      }

      // 2. Custom eBooks
      if (Array.isArray(data.resources.ebooks) && data.resources.ebooks.length) {
        const liveEbooks = data.resources.ebooks.filter(e => e.published !== false);
        const mappedEbooks = liveEbooks.map((e, i) => ({
          id: e.id || `custom-ebook-${i}`,
          title: e.title,
          author: 'BGSS Research Bureau',
          theme: 'theme-gold',
          badge: `${e.category || 'Special Report'} • ${e.date ? e.date.slice(0,4) : '2024'} Edition`,
          year: e.date ? e.date.slice(0,4) : '2024',
          pagesCount: 4,
          tags: [e.category || 'Advisory', 'Special Release'],
          summary: e.description || 'Comprehensive analytical monograph prepared by BGSS & Associates.',
          downloadUrl: e.url || '#',
          pages: [
            {
              left: {
                header: `BGSS Research • ${e.category || 'Advisory'}`,
                body: `<div style="text-align:center;padding:2rem 1rem;">
                  <div style="font-size:0.75rem;letter-spacing:0.18em;text-transform:uppercase;color:#B8860B;font-weight:700;margin-bottom:1rem;">Executive Monograph</div>
                  <h3 style="font-size:1.5rem;color:#0D1B2A;line-height:1.25;margin-bottom:1rem;">${e.title}</h3>
                  <p style="font-size:0.85rem;color:#64748B;">${e.description || 'Strategic insights and technical guidance.'}</p>
                </div>`,
                footer: 'BGSS & Associates • Practice Insights'
              },
              right: {
                header: 'Executive Overview',
                body: `<h3>Monograph Summary</h3>
                <p>${e.description || 'This monograph is part of the BGSS Knowledge Bank series.'}</p>
                ${e.url ? `<div style="margin-top:1.5rem;"><a href="${e.url}" target="_blank" class="kb-action-btn" style="background:#0D1B2A;color:#fff;padding:8px 16px;border-radius:4px;text-decoration:none;font-size:0.85rem;display:inline-block;">Open / Download Resource &rarr;</a></div>` : ''}`,
                footer: 'Page 1 of 2'
              }
            }
          ]
        }));
        EBOOKS_DATA = [...mappedEbooks, ...EBOOKS_DATA];
      }

      // 3. Custom Presentations
      if (Array.isArray(data.resources.presentations) && data.resources.presentations.length) {
        const livePres = data.resources.presentations.filter(p => p.published !== false);
        const mappedPres = livePres.map((p, i) => ({
          id: p.id || `custom-pres-${i}`,
          title: p.title,
          badge: `${p.category || 'Executive Briefing'} • ${p.date ? p.date.slice(0,4) : '2024'}`,
          presenter: 'BGSS Advisory Panel',
          duration: 'Presentation Slide Deck',
          category: p.category || 'General Advisory',
          desc: p.description || 'Curated presentation slide deck on current tax and corporate regulatory developments.',
          downloadUrl: p.url || '#',
          slides: [
            {
              slideNum: 1,
              title: p.title,
              subtitle: 'BGSS & Associates Presentation Series',
              category: p.category || 'Advisory',
              content: `<div style="padding:1.5rem;text-align:center;">
                <h2 style="font-size:1.8rem;color:#0D1B2A;margin-bottom:1rem;">${p.title}</h2>
                <p style="color:#64748B;font-size:1rem;max-width:550px;margin:0 auto 1.5rem auto;">${p.description || 'Special slide deck.'}</p>
                ${p.url ? `<a href="${p.url}" target="_blank" style="background:#B8860B;color:#fff;padding:10px 22px;border-radius:4px;text-decoration:none;font-weight:600;display:inline-block;">View / Download Presentation &rarr;</a>` : ''}
                ${p.embed ? `<div style="margin-top:1.5rem;">${p.embed}</div>` : ''}
              </div>`
            }
          ]
        }));
        PRESENTATIONS_DATA = [...mappedPres, ...PRESENTATIONS_DATA];
      }
    } catch(err) {
      console.error('mergeAdminResources error:', err);
    }
  }

  // Self Initialization on DOM Ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
      mergeAdminResources();
      renderSlide();
      initEventListeners();
    });
  } else {
    mergeAdminResources();
    renderSlide();
    initEventListeners();
  }

  // Export to window for external triggers
  window.BGSSKnowledgeBank = {
    openFlipbook,
    closeFlipbook,
    downloadBookPDF,
    switchDeck,
    switchVideo
  };

})();
