<?php
/**
 * Title: Page — Terms and Conditions (Static)
 * Slug: careconcierge/page-terms
 * Categories: careconcierge
 * Description: Standalone Terms and Conditions page for DocuSign / Stripe / commercial workflows. Master Service Terms (sourced from CareConcierge Engagement Order v3.5), Australia framing, UK Data Processing Addendum (UK DPA + Schedule 1), and conditional US HIPAA / Business Associate Addendum (sourced from CareConcierge Addenda Package v1.5). Soft Cloud / Ink Blue editorial column. Used by templates/page-terms.html (slug: terms → /terms/).
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","className":"cc-section cc-section--legal-page cc-legal-page","backgroundColor":"soft-cloud","textColor":"ink-blue","layout":{"type":"constrained","contentSize":"100%","wideSize":"100%"}} -->
<section id="terms" class="wp-block-group cc-section cc-section--legal-page cc-legal-page has-ink-blue-color has-soft-cloud-background-color has-text-color has-background">
	<!-- wp:html -->
	<div class="cc-legal-page__inner">
		<header class="cc-legal-page__masthead">
			<p class="cc-legal-page__eyebrow">CareConcierge Legal</p>
			<h1 class="cc-legal-page__title">Terms and Conditions</h1>
			<p class="cc-legal-page__lead">These Terms and Conditions are provided for CareConcierge clients, prospective clients, DocuSign review, Stripe review, and related commercial/legal workflows. The Engagement Order, Service Terms and Conditions, and any applicable market-specific addenda together form the Agreement between CareConcierge and the Client.</p>
			<p class="cc-legal-page__caution">This page is provided for review convenience. The signed Engagement Order and any executed addenda govern the specific engagement.</p>
		</header>

		<nav class="cc-legal-page__nav" aria-label="On this page">
			<ol>
				<li><a href="#master-service-terms">Master Service Terms</a></li>
				<li><a href="#australia">Australia</a></li>
				<li><a href="#united-kingdom">United Kingdom</a></li>
				<li><a href="#united-states">United States</a></li>
			</ol>
		</nav>

		<div class="cc-legal-page__body">

			<section id="anatomy" class="cc-legal-page__section cc-legal-page__section--framing">
				<h2>Anatomy of the Agreement</h2>
				<p>This package contains two schedule-level addenda to the CareConcierge Engagement Order and Service Terms and Conditions (the Master Agreement). They are drafted to bolt onto the Master Agreement without displacing it. The Master Agreement remains the governing commercial and legal instrument. Each addendum operates as a schedule that takes effect only in the circumstances described below, and only with respect to the regulatory regime to which it relates.</p>
				<h3>Addendum 1 &mdash; UK Data Processing Addendum</h3>
				<p>The UK DPA applies where CareConcierge processes Personal Data on behalf of a UK-based Client in connection with the Services. The default allocation of roles is Client as Controller and CareConcierge as Processor in respect of patient enquiry data passing through the Services. Each party may also act as an independent Controller for its own internal business records (billing, compliance, legal) without that being construed as a joint-controller arrangement.</p>
				<p>The UK DPA is incorporated by reference in the Engagement Order for UK Clients. A tick-box or signature at Engagement Order stage confirms the Client&rsquo;s acceptance of its terms. It becomes operative from the date the Engagement Order is executed and remains in force for so long as CareConcierge processes Personal Data on behalf of that Client.</p>
				<h3>Addendum 2 &mdash; US HIPAA / Business Associate Addendum</h3>
				<p>The HIPAA Addendum is deliberately drafted as a conditional schedule. It applies only where each of three conditions is satisfied: (a) the Client is a Covered Entity or Business Associate as those terms are defined under HIPAA; (b) the parties expect Protected Health Information to flow through the Services; and (c) the parties have confirmed in writing (via the Engagement Order or a separate instrument) that the Addendum applies to the engagement.</p>
				<p>This construction reflects operational reality. CareConcierge&rsquo;s default launch infrastructure in the United Kingdom and Australia is configured for patient enquiry handling, lead qualification, and booking support &mdash; not for the ingestion, storage, or routine processing of clinical health information. A US engagement intentionally configured to avoid PHI will sit outside the HIPAA Addendum and be governed by the Master Agreement&rsquo;s general data-protection provisions. A US engagement in which PHI is expected to flow engages the HIPAA Addendum and, in that case, the infrastructure-precondition clause (clause 12) prevents any PHI handling from commencing until the HIPAA-aligned infrastructure and subcontractor arrangements (including compliant hosting and downstream Business Associate Agreements) are in place and confirmed in writing. Any commercial uplift arising from those arrangements flows through the existing Additional Loadings mechanism in the Master Agreement rather than creating a parallel commercial channel.</p>
				<h3>Order of precedence</h3>
				<p>Each addendum is subordinate to the Master Agreement. Where an addendum is silent, the Master Agreement governs. Where an addendum and the Master Agreement conflict on a matter within the subject matter of the addendum (data protection for the UK DPA; PHI handling for the HIPAA Addendum), the addendum prevails to the extent of the conflict. On all other matters, the Master Agreement prevails. Neither addendum expands the scope of the Services as defined in clause 4 of the Master Agreement or the limitation of liability in clause 20.</p>
				<h3>Attachment and execution</h3>
				<p>Both addenda are intended for electronic execution alongside the Engagement Order via DocuSign or equivalent. For UK Clients, the UK DPA attaches automatically. For US Clients, the HIPAA Addendum attaches only where the applicability trigger is satisfied and a specific confirmation is included in the Engagement Order. This keeps the commercial document simple for the majority of US engagements that will not initially handle PHI, while providing an immediate, credible BAA framework for those that do.</p>
			</section>

			<section id="master-service-terms" class="cc-legal-page__section">
				<h2>Master Service Terms</h2>
				<p>The Master Service Terms below are reproduced from the CareConcierge Engagement Order (v3.5). They accompany and form part of every signed Engagement Order. Where this page and the executed Engagement Order or any executed addendum differ in operative wording, the executed documents govern.</p>
				<p>These Service Terms and Conditions accompany and form part of the CareConcierge Engagement Order. The Engagement Order, these Terms, and any schedules or addenda referenced in the Engagement Order together constitute the Agreement between the parties.</p>
				<p>In the event of any inconsistency between the Engagement Order and these Terms, the Engagement Order prevails, except in respect of legal matters (including limitation of liability, intellectual property, confidentiality, and governing law), in which case these Terms prevail.</p>
				<h3>1. Definitions</h3>
				<p>In this Agreement, unless the context otherwise requires:</p>
				<p>&ldquo;Additional Loadings&rdquo; means any surcharges, add-ons, or variable fees specified in the Engagement Order in respect of additional surgeons, additional clinic locations, additional channels, additional AI conversation volume, or other variations to standard scope.</p>
				<p>&ldquo;Agreement&rdquo; means the Engagement Order, these Terms, and any schedules, loadings, addenda, or variations referenced in or appended to the Engagement Order.</p>
				<p>&ldquo;Business Day&rdquo; means a day that is not a Saturday, Sunday, or public holiday in Queensland, Australia.</p>
				<p>&ldquo;CareConcierge&rdquo; means CareConcierge Pty Limited (ACN 697 228 783), an Australian proprietary company registered in Queensland, with its mailing address at PO Box 944, Paradise Point, Queensland 4216, Australia. Also referred to as &ldquo;we&rdquo;, &ldquo;us&rdquo;, and &ldquo;our&rdquo;.</p>
				<p>&ldquo;Channels&rdquo; means the communication channels configured for the Client under the Services, which may include WhatsApp, SMS, Instagram direct messages, Meta Messenger, web chat, email, or such other channels as the parties agree in writing.</p>
				<p>&ldquo;Client&rdquo; means the practice, company, partnership, or other legal entity identified in the Engagement Order. Also referred to as &ldquo;you&rdquo; and &ldquo;your&rdquo;.</p>
				<p>&ldquo;Client Materials&rdquo; means all information, documentation, content, patient communication guidelines, pricing parameters, tone-of-voice references, clinical boundaries, and other materials supplied by the Client to CareConcierge for the purpose of configuring and operating the Services.</p>
				<p>&ldquo;Confidential Information&rdquo; has the meaning given in clause 17.</p>
				<p>&ldquo;Engagement Order&rdquo; means the signed front-page order referencing these Terms and identifying the Client, the selected Plan, the applicable Fees, and any Additional Loadings.</p>
				<p>&ldquo;Fair Use&rdquo; means use of the Services consistent with (a) the ordinary operation of the Client&rsquo;s practice as disclosed in the Engagement Order (including the number of surgeons, the number of clinic locations, and the estimated monthly enquiry volume), and (b) bona fide patient enquiry handling in the course of the Client&rsquo;s business. Fair Use excludes automated, synthetic, bulk, or spam-like usage; use of the Services for purposes other than patient communication and enquiry conversion; and any material and sustained increase in usage that reflects a change in the Client&rsquo;s scale or scope without corresponding scoping with CareConcierge. Where CareConcierge forms a reasonable view that usage has materially exceeded Fair Use, CareConcierge may in good faith raise the matter with the Client and discuss Additional Loadings commensurate with actual usage.</p>
				<p>&ldquo;Fees&rdquo; means the Setup Fee, the Monthly Fee, and any Additional Loadings payable by the Client under the Engagement Order.</p>
				<p>&ldquo;Go-Live&rdquo; means the date on which the Services are first made operational for the Client, as confirmed in writing by CareConcierge.</p>
				<p>&ldquo;Initial Term&rdquo; means the minimum commitment period specified in the Engagement Order, being twelve (12) or twenty-four (24) months commencing on the date of execution of the Engagement Order.</p>
				<p>&ldquo;Intellectual Property Rights&rdquo; means all intellectual property rights of whatever nature throughout the world, whether registered or unregistered, including copyright, trade marks, trade names, designs, patents, rights in software, code, prompt architecture, workflow design, configuration, reporting logic, know-how, and trade secrets.</p>
				<p>&ldquo;Knowledge Base&rdquo; means the configured body of practice-approved content, FAQs, pricing parameters, escalation rules, and tone-of-voice references from which the Services draw to respond to enquiries.</p>
				<p>&ldquo;Monthly Fee&rdquo; means the recurring monthly subscription fee for the Plan specified in the Engagement Order, together with any Additional Loadings.</p>
				<p>&ldquo;Plan&rdquo; means the Practice, Growth, or Elite service tier selected by the Client in the Engagement Order.</p>
				<p>&ldquo;Platform&rdquo; means the CareConcierge proprietary platform, comprising the prompt architecture, configuration logic, workflow design, reporting logic, system integrations, and associated intellectual property that together deliver the Services.</p>
				<p>&ldquo;Release Fee&rdquo; has the meaning given in clause 12.</p>
				<p>&ldquo;Renewal Term&rdquo; has the meaning given in clause 11.</p>
				<p>&ldquo;Services&rdquo; means the patient communication and conversion services described in clause 4, as configured for the Client under the Engagement Order.</p>
				<p>&ldquo;Setup Fee&rdquo; means the one-off implementation fee specified in the Engagement Order.</p>
				<p>&ldquo;Third-Party Platforms&rdquo; has the meaning given in clause 8.</p>
				<h3>2. Interpretation</h3>
				<p>2.1  Headings are for ease of reference only and do not affect interpretation.</p>
				<p>2.2  The singular includes the plural and vice versa; words importing gender include other genders.</p>
				<p>2.3  A reference to a clause, schedule, or annexure is a reference to a clause, schedule, or annexure of or to this Agreement.</p>
				<p>2.4  A reference to a document or agreement includes that document or agreement as varied, novated, or replaced from time to time.</p>
				<p>2.5  A reference to a party includes that party&rsquo;s successors and permitted assigns.</p>
				<p>2.6  A reference to a statute includes regulations and instruments made under it and any consolidation, amendment, or replacement.</p>
				<p>2.7  Words and expressions defined in the Corporations Act 2001 (Cth) have the meanings given to them in that Act at the date of this Agreement.</p>
				<p>2.8  A reference to &ldquo;writing&rdquo; includes email and any other method of representing words, figures, or symbols in a permanent and visible form.</p>
				<p>2.9  The meaning of general words is not limited by specific examples introduced by &ldquo;including&rdquo;, &ldquo;for example&rdquo;, or similar expressions.</p>
				<p>2.10  If a day on or by which an obligation must be performed is not a Business Day, the obligation must be performed on the next Business Day.</p>
				<h3>3. The Agreement and acceptance</h3>
				<p>3.1  These Terms apply to the supply of the Services by CareConcierge to the Client under the Engagement Order. By executing the Engagement Order, the Client accepts these Terms in full.</p>
				<p>3.2  These Terms prevail over any terms and conditions of the Client, however communicated, unless expressly agreed to in writing and signed by an authorised signatory of CareConcierge.</p>
				<p>3.3  No variation of this Agreement is effective unless in writing and signed by an authorised signatory of each party. No employee, agent, or representative of CareConcierge has authority to vary, waive, or extend these Terms except in writing signed by an authorised signatory of CareConcierge.</p>
				<p>3.4  Where more than one entity or person enters into this Agreement as Client, each is jointly and severally liable for all payments and obligations under the Agreement.</p>
				<h3>4. Services and scope</h3>
				<p>4.1  CareConcierge will provide the Client with the Services described in the Plan selected in the Engagement Order. The Services are an AI-assisted patient communication and enquiry conversion system, designed to:</p>
				<p>(a)  respond immediately to patient enquiries across the configured Channels, drawing exclusively on the practice-approved Knowledge Base;</p>
				<p>(b)  answer frequently-asked questions relating to the Client&rsquo;s services, scope, availability, and general pricing parameters, within the boundaries set by the Knowledge Base;</p>
				<p>(c)  triage, qualify, and hand off decision-ready enquiries to the Client&rsquo;s team with context for human follow-up;</p>
				<p>(d)  where the Plan includes it, operate lapsed patient reactivation sequences and produce monthly conversion intelligence reporting; and</p>
				<p>(e)  where the Plan includes it, provide periodic strategic review, optimisation, and account management.</p>
				<p>4.2  The Services are intended to augment, not replace, the Client&rsquo;s clinical, commercial, and operational team. The Services do not provide medical advice, do not make clinical decisions, and do not recommend or endorse any specific treatment or procedure. See clause 7.</p>
				<p>4.3  CareConcierge reserves the right to update, improve, or modify the Platform, the underlying models, the reporting logic, and the configuration tools from time to time, provided that no such update will materially reduce the functionality of the Services as configured for the Client.</p>
				<h3>5. Client responsibilities</h3>
				<p>5.1  The Client is responsible for:</p>
				<p>(a)  the accuracy, currency, and lawfulness of all Client Materials supplied to CareConcierge;</p>
				<p>(b)  its own compliance with all applicable laws, professional standards, and regulatory obligations, including (as applicable) advertising restrictions, patient consent requirements, clinical governance, and data protection obligations;</p>
				<p>(c)  the review, approval, and ongoing maintenance of the Knowledge Base from which the Services draw;</p>
				<p>(d)  all clinical decisions, treatment planning, consent processes, and patient-specific recommendations, which remain at all times the sole responsibility of the Client and its clinicians;</p>
				<p>(e)  procuring and maintaining any accounts, licences, or credentials required for CareConcierge to access or configure third-party tools on the Client&rsquo;s behalf, including (where applicable) the Client&rsquo;s practice management system, CRM, messaging platforms, and social media accounts; and</p>
				<p>(f)  prompt response to reasonable requests from CareConcierge for information, approvals, or access during onboarding and ongoing optimisation.</p>
				<p>5.2  The Client acknowledges that the quality and effectiveness of the Services depend in part on the quality of the Client Materials and the Client&rsquo;s timely engagement in onboarding and review. CareConcierge is not responsible for any degradation in Service performance attributable to incomplete, inaccurate, or out-of-date Client Materials.</p>
				<h3>6. Onboarding, practice-approved content, and compliance boundaries</h3>
				<p>6.1  Onboarding will proceed in accordance with CareConcierge&rsquo;s standard implementation cadence, including a structured intake interview, construction of the Knowledge Base, and configuration of the Channels. CareConcierge will use reasonable efforts to achieve Go-Live within approximately twenty-one (21) days of execution of the Engagement Order, subject to the Client&rsquo;s timely cooperation.</p>
				<p>6.2  All content used by the Services in responding to patient enquiries is drawn from the Knowledge Base, which is constructed from Client Materials and reviewed and approved by the Client prior to Go-Live. The Client is responsible for keeping the Knowledge Base current and for notifying CareConcierge promptly of any material changes to its services, pricing, practitioners, or compliance requirements.</p>
				<p>6.3  The Services operate within compliance boundaries configured in consultation with the Client, including:</p>
				<p>(a)  guardrails preventing the Services from making clinical claims, diagnostic statements, outcome guarantees, or treatment recommendations;</p>
				<p>(b)  guardrails preventing the Services from using patient testimonials, before-and-after imagery, or language restricted under applicable advertising guidelines in the Client&rsquo;s market; and</p>
				<p>(c)  escalation rules under which enquiries of a clinical, urgent, or sensitive nature are routed to the Client&rsquo;s team rather than answered by the Services.</p>
				<p>6.4  CareConcierge uses reasonable efforts to configure the Services consistently with the advertising and professional standards applicable to the Client&rsquo;s market as understood at the time of configuration. However, regulatory interpretation and enforcement practice evolve, and the Client remains solely responsible for its own regulatory compliance. CareConcierge does not warrant that the Services will prevent all possible breaches of professional or advertising standards.</p>
				<h3>7. AI service limitations and no clinical decision-making</h3>
				<p>7.1  The Services use artificial intelligence to generate responses from the Knowledge Base. The Client acknowledges that:</p>
				<p>(a)  AI-generated responses are probabilistic and may, on occasion, produce outputs that are unexpected, incomplete, or inconsistent with the Knowledge Base, notwithstanding reasonable configuration and testing;</p>
				<p>(b)  the Services are not a medical device, do not provide medical advice, do not perform diagnosis, and do not substitute for consultation with a qualified clinician; and</p>
				<p>(c)  nothing in the Services is to be construed as a clinical recommendation, a promise of suitability for any procedure, or a prediction of any clinical or commercial outcome.</p>
				<p>7.2  The Services include escalation logic under which enquiries requiring clinical judgement are routed to the Client for human review. The Client must ensure that escalated enquiries are reviewed and responded to by appropriately qualified personnel.</p>
				<p>7.3  CareConcierge does not make, and the Client shall not rely on, any representation or warranty as to the volume, conversion rate, revenue, or booked cases that may result from use of the Services. Any forecasts, case studies, benchmarks, or commercial estimates communicated by CareConcierge are indicative only.</p>
				<h3>8. Channels and third-party platforms</h3>
				<p>8.1  The Services rely in part on third-party services, channels, messaging providers, payment systems, practice management systems, CRM platforms, hosting infrastructure, and other integrations (each a Third-Party Platform).</p>
				<p>8.2  The Client acknowledges that Third-Party Platforms are not within CareConcierge&rsquo;s control and that their availability, performance, pricing, features, policies, and terms of use may change from time to time. CareConcierge is not liable for any interruption, degradation, modification, suspension, or discontinuation of a Third-Party Platform, nor for any consequence of the Client&rsquo;s use or inability to use any Third-Party Platform, to the extent such matter is beyond CareConcierge&rsquo;s reasonable control.</p>
				<p>8.3  Where CareConcierge configures, resells, or provides access to a Third-Party Platform on behalf of the Client (including, without limitation, messaging gateways, workflow automation tools, or communications infrastructure), the Client&rsquo;s use of that Third-Party Platform is subject to the relevant provider&rsquo;s terms of service. The Client will comply with all such terms.</p>
				<p>8.4  The Client is responsible for the payment of any usage-based, consumption-based, or per-message charges imposed by Third-Party Platforms, including (where applicable) SMS and WhatsApp conversation fees. Such charges are separate from and additional to the Fees payable to CareConcierge under the Engagement Order.</p>
				<h3>9. Fees, additional loadings, and taxes</h3>
				<p>9.1  In consideration of CareConcierge providing the Services, the Client will pay the Setup Fee, the Monthly Fee, and any Additional Loadings specified in the Engagement Order.</p>
				<p>9.2  Additional surgeon, location, channel, or conversation-volume loadings apply where specified in the Engagement Order. Such Additional Loadings form part of the Monthly Fee and are payable on the same terms.</p>
				<p>9.3  CareConcierge may review the Monthly Fee annually and apply a reasonable adjustment on sixty (60) days&rsquo; written notice to the Client, provided that no such adjustment will take effect during any current Initial Term or Renewal Term for which a price lock applies.</p>
				<p>9.4  Where the Client has selected the twenty-four (24) month Agreement Term, the Monthly Fee is locked for the duration of that Initial Term and is not subject to adjustment during that period.</p>
				<p>9.5  All Fees are exclusive of applicable taxes. The Client will pay any Goods and Services Tax (GST), Value Added Tax (VAT), sales tax, use tax, or similar tax properly chargeable on the Fees at the prevailing rate, subject to CareConcierge issuing a valid tax invoice.</p>
				<h3>10. Billing, setup, and payment</h3>
				<p>10.1  The Setup Fee is due and payable on execution of the Engagement Order. CareConcierge is not obliged to commence onboarding until the Setup Fee has been received in cleared funds.</p>
				<p>10.2  The Monthly Fee commences on the earlier of (a) the date of Go-Live and (b) the date falling twenty-eight (28) days after execution of the Engagement Order. Thereafter, the Monthly Fee is payable in advance on the same calendar day of each successive month, or as otherwise specified in the Engagement Order.</p>
				<p>10.3  Where the Client elects Annual Upfront payment in the Engagement Order, the aggregate Monthly Fees for the first twelve (12) months are payable in advance, less the discount specified in the Engagement Order, and are non-refundable on the terms set out in clause 12.</p>
				<p>10.4  Fees are payable by direct debit, credit card, or such other method as CareConcierge may from time to time accept. The Client authorises CareConcierge (or its payment processor) to debit the nominated account or card for all Fees due under this Agreement.</p>
				<p>10.5  If any Fee is not received by its due date, CareConcierge may (without limiting its other rights):</p>
				<p>(a)  charge interest on the overdue amount at a rate equal to the Reserve Bank of Australia cash rate plus four percent (4%) per annum, calculated daily from the due date until payment in full;</p>
				<p>(b)  recover from the Client all reasonable costs and expenses (including legal costs on an indemnity basis and debt recovery fees) incurred in collecting overdue amounts; and</p>
				<p>(c)  suspend the Services in accordance with clause 13.</p>
				<p>10.6  The Client is responsible for notifying CareConcierge promptly of any change to its billing details, nominated account, or authorised payment method.</p>
				<h3>11. Minimum term and automatic renewal</h3>
				<p>11.1  This Agreement commences on the date of execution of the Engagement Order and continues for the Initial Term. The Client acknowledges that the Initial Term is a minimum commitment and that full minimum-term liability applies in accordance with clause 12.</p>
				<p>11.2  On expiry of the Initial Term, this Agreement automatically renews for successive renewal periods of twelve (12) months each (each a Renewal Term), on the same terms, unless either party gives the other not less than sixty (60) days&rsquo; written notice of non-renewal prior to the end of the then-current term.</p>
				<p>11.3  CareConcierge will provide the Client with a courtesy renewal notice not less than ninety (90) days prior to the end of each Initial Term and each Renewal Term, setting out the anticipated renewal date and any applicable fee adjustments. Failure by CareConcierge to provide such courtesy notice does not affect the operation of clause 11.2 or the Client&rsquo;s obligations under this Agreement.</p>
				<p>11.4  Any change to the Monthly Fee taking effect from the commencement of a Renewal Term will be communicated in writing by CareConcierge not less than sixty (60) days prior to the end of the then-current term.</p>
				<h3>12. Release and early termination</h3>
				<p>12.1  Subject to clause 12.5, the Client is liable for the full Fees payable for the Initial Term and any current Renewal Term. Where the Client terminates this Agreement (whether by notice, repudiation, or otherwise) before the end of the then-current term for any reason other than CareConcierge&rsquo;s uncured material breach, the full balance of Monthly Fees payable for the unexpired portion of the then-current term becomes immediately due and payable as a Release Fee.</p>
				<p>12.2  The Release Fee is equal to:</p>
				<p>(a)  the aggregate Monthly Fees (including any Additional Loadings) that would have been payable for the unexpired portion of the then-current Initial Term or Renewal Term; plus</p>
				<p>(b)  an administrative fee equal to one (1) month&rsquo;s Monthly Fee (including any Additional Loadings) in respect of the deconfiguration, handover, and account closure work reasonably required.</p>
				<p>12.3  Pre-paid Fees (including any Annual Upfront payment) are non-refundable. Where the aggregate pre-paid Fees exceed the Release Fee calculated under clause 12.2, the excess will be credited to the Client on request; no cash refund is payable.</p>
				<p>12.4  CareConcierge may, at its absolute discretion, accept a lesser sum in full and final settlement of the Release Fee where commercial circumstances warrant. No Client is entitled to a reduced settlement as of right.</p>
				<p>12.5  The Client may terminate this Agreement for CareConcierge&rsquo;s uncured material breach by giving CareConcierge written notice of the breach and allowing a period of thirty (30) days in which to cure the breach. If the breach is not cured within that period, the Client may terminate this Agreement by further written notice without liability for the Release Fee, and any pre-paid Fees in respect of Services not yet rendered will be refunded on a pro-rata basis.</p>
				<h3>13. Suspension for non-payment</h3>
				<p>13.1  If any Fee is not received by its due date and remains unpaid seven (7) days after CareConcierge has issued a written reminder to the Client, CareConcierge may suspend the Services in whole or in part, without liability, until payment in full (including any interest and recovery costs) is received.</p>
				<p>13.2  Suspension of the Services under this clause does not relieve the Client of its obligation to pay Fees accruing during the period of suspension, nor does it constitute termination of this Agreement. The Initial Term and any Renewal Term continue to run during any period of suspension.</p>
				<p>13.3  CareConcierge will use reasonable efforts to restore the Services promptly following the Client&rsquo;s remediation of non-payment, but may require a reasonable reactivation fee in respect of the technical and administrative work required to do so.</p>
				<h3>14. Termination for cause and effect of termination</h3>
				<p>14.1  Either party may terminate this Agreement immediately by written notice to the other if the other party:</p>
				<p>(a)  commits a material breach of this Agreement and fails to cure that breach within thirty (30) days of receiving written notice specifying the breach and requiring it to be cured;</p>
				<p>(b)  becomes insolvent, is placed into administration, liquidation, or receivership, enters into a scheme of arrangement with creditors, or is otherwise unable to pay its debts as they fall due; or</p>
				<p>(c)  ceases, or threatens to cease, to carry on business.</p>
				<p>14.2  CareConcierge may terminate this Agreement immediately by written notice to the Client if the Client engages in conduct that, in CareConcierge&rsquo;s reasonable opinion, exposes CareConcierge to legal, regulatory, or reputational harm, including any conduct that breaches applicable advertising standards, professional standards, or data protection law.</p>
				<p>14.3  On termination of this Agreement for any reason:</p>
				<p>(a)  all Fees accrued up to the effective date of termination, together with any Release Fee payable under clause 12, become immediately due and payable;</p>
				<p>(b)  CareConcierge will cease providing the Services, deactivate Client-configured automations, and return or destroy the Client Materials in its possession, save for copies required to be retained for legal, regulatory, or archival purposes;</p>
				<p>(c)  each party will return or destroy the Confidential Information of the other party that is in its possession or control, subject to the exceptions in clause 17; and</p>
				<p>(d)  the clauses that by their nature are intended to survive termination (including clauses 12, 14, 16, 17, 18, 20, 21, 22, 24, 25, and 26) survive.</p>
				<h3>15. Service availability and support</h3>
				<p>15.1  CareConcierge will use reasonable commercial efforts to ensure that the Services are available on a twenty-four (24) hour, seven (7) day basis, subject to scheduled maintenance, emergency maintenance, and any interruption caused by Third-Party Platforms or events outside CareConcierge&rsquo;s reasonable control.</p>
				<p>15.2  CareConcierge will use reasonable efforts to provide notice of scheduled maintenance at least twenty-four (24) hours in advance where reasonably practicable. CareConcierge may undertake emergency maintenance without prior notice where it reasonably considers it necessary to preserve the security, integrity, or performance of the Services.</p>
				<p>15.3  Support during Business Days will be provided via the contact channels notified by CareConcierge from time to time. The scope, cadence, and priority of support depends on the Plan selected by the Client.</p>
				<p>15.4  CareConcierge does not provide technical support in respect of the Client&rsquo;s own hardware, software, network, practice management system, or third-party tools, except to the extent such support forms part of the scope of configuration agreed in writing.</p>
				<h3>16. Intellectual property</h3>
				<p>16.1  As between the parties, CareConcierge retains all right, title, and interest in and to the Platform and all Intellectual Property Rights in the Platform, including (without limitation) the prompt architecture, configuration logic, workflow design, reporting logic, optimisation methods, training data, and associated know-how. Nothing in this Agreement transfers ownership of any Platform Intellectual Property Rights to the Client.</p>
				<p>16.2  The Client retains all right, title, and interest in and to the Client Materials. The Client grants CareConcierge a non-exclusive, royalty-free, worldwide licence to use, reproduce, modify, and adapt the Client Materials for the purposes of configuring and providing the Services during the term of this Agreement.</p>
				<p>16.3  The Knowledge Base configured for the Client is built from Client Materials using the Platform. The Client&rsquo;s configured Knowledge Base is licensed to the Client during the term of this Agreement for the purpose of receiving the Services. On termination of this Agreement, the Client&rsquo;s licence to use the configured Knowledge Base ceases. The Client Materials themselves (independent of the Knowledge Base configuration) remain the Client&rsquo;s property.</p>
				<p>16.4  CareConcierge may use aggregated, anonymised, and de-identified data derived from the operation of the Services to improve the Platform, develop new features, and produce benchmarking. CareConcierge will not use any data in a manner that identifies the Client or any patient, and will comply at all times with applicable data protection law.</p>
				<p>16.5  Neither party may use, reproduce, display, or otherwise exploit the name, logo, trade marks, or identifying information of the other party in marketing materials, case studies, press or media communications, investor or fundraising materials, website content, or any other external communication, without the prior written consent of that other party. Consent may be given on a case-by-case basis and may be limited in scope or subject to conditions (including approval rights over specific wording and imagery). For the avoidance of doubt, the identity of the Client as a CareConcierge customer is treated as Confidential Information under clause 17. This clause survives termination of this Agreement.</p>
				<h3>17. Confidentiality</h3>
				<p>17.1  Confidential Information means all non-public information disclosed by one party (the Discloser) to the other (the Recipient) under or in connection with this Agreement that is marked as confidential or that a reasonable person would understand to be confidential in the circumstances. Confidential Information includes (without limitation) the Platform, the Knowledge Base, patient communication logs, the Client Materials, commercial terms, pricing, business strategies, and any personal information of patients.</p>
				<p>17.2  The Recipient will:</p>
				<p>(a)  hold the Discloser&rsquo;s Confidential Information in strict confidence;</p>
				<p>(b)  use it only for the purposes of performing its obligations or exercising its rights under this Agreement;</p>
				<p>(c)  disclose it only to those of its personnel, contractors, and advisors who have a need to know and who are bound by confidentiality obligations substantially equivalent to these; and</p>
				<p>(d)  apply to it no less a standard of care than the Recipient applies to its own confidential information of like importance, and in any event a reasonable standard of care.</p>
				<p>17.3  The obligations in this clause do not apply to information that: (a) is or becomes publicly available through no breach of this Agreement; (b) was lawfully in the Recipient&rsquo;s possession without restriction before disclosure; (c) is lawfully obtained from a third party without restriction; or (d) is independently developed by the Recipient without reference to the Discloser&rsquo;s Confidential Information.</p>
				<p>17.4  The Recipient may disclose Confidential Information to the extent required by law, regulation, court order, or regulatory authority, provided that (where legally permissible) the Recipient gives the Discloser prompt notice of the required disclosure and cooperates with any reasonable effort by the Discloser to seek a protective order.</p>
				<h3>18. Data protection and privacy</h3>
				<p>18.1  Each party will comply with all data protection and privacy laws applicable to it in connection with this Agreement. This includes, as applicable, the Privacy Act 1988 (Cth) and the Australian Privacy Principles for Australian clients, and equivalent legislation in the Client&rsquo;s jurisdiction.</p>
				<p>18.2  The Client acknowledges that patient-related information may pass through the Services in the course of enquiry handling. The Client is responsible for: (a) ensuring that patients are appropriately informed of, and have consented to, the Client&rsquo;s use of the Services for the handling of their enquiries and personal information, to the extent required by applicable law; and (b) its own obligations as the entity primarily responsible for the patient relationship and for clinical records.</p>
				<p>18.3  CareConcierge will implement and maintain reasonable technical and organisational measures designed to protect personal information processed in connection with the Services against unauthorised access, use, disclosure, alteration, or destruction.</p>
				<p>18.4  CareConcierge will not use personal information passing through the Services for any purpose other than (a) providing the Services to the Client; (b) improving the Platform in de-identified form in accordance with clause 16.4; and (c) as required by law.</p>
				<p>18.5  Where CareConcierge uses sub-processors (including Third-Party Platforms) to process personal information in connection with the Services, CareConcierge will use reasonable efforts to ensure that each such sub-processor is bound by data protection obligations substantially equivalent to those in this Agreement.</p>
				<p>18.6  In the event of a data breach materially affecting the Client&rsquo;s personal information, CareConcierge will notify the Client without undue delay and will cooperate reasonably with the Client in responding to the breach and discharging any notification obligations arising under applicable law.</p>
				<h3>19. Warranties and disclaimers</h3>
				<p>19.1  CareConcierge warrants that it will provide the Services with reasonable care and skill and in accordance with generally accepted practices for managed AI communication services.</p>
				<p>19.2  Except as expressly set out in this Agreement and to the maximum extent permitted by law, all other warranties, representations, conditions, and guarantees, whether express or implied by law, custom, or otherwise, are excluded. Without limiting the generality of the foregoing, CareConcierge does not warrant or guarantee:</p>
				<p>(a)  that the Services will be uninterrupted, error-free, free from defects, or secure against all threats;</p>
				<p>(b)  any specific outcome, including any level of enquiry volume, response quality, conversion rate, booked cases, revenue, or return on investment; or</p>
				<p>(c)  the performance or availability of any Third-Party Platform.</p>
				<p>19.3  Nothing in this Agreement excludes, restricts, or modifies the application of any provision, the exercise of any right or remedy, or the imposition of any liability, under the Competition and Consumer Act 2010 (Cth), the Australian Consumer Law, or any equivalent consumer protection legislation, where to do so would be void, unenforceable, or unlawful.</p>
				<h3>20. Limitation of liability</h3>
				<p>20.1  To the maximum extent permitted by law:</p>
				<p>(a)  neither party is liable to the other for any indirect, incidental, special, consequential, or punitive loss or damage, or for any loss of profits, loss of revenue, loss of goodwill, loss of business opportunity, loss of data, or loss of anticipated savings, arising out of or in connection with this Agreement, however caused; and</p>
				<p>(b)  CareConcierge&rsquo;s aggregate liability to the Client under or in connection with this Agreement, whether in contract, tort (including negligence), under statute, or otherwise, is limited to an amount equal to the total Fees paid by the Client to CareConcierge in the twelve (12) months preceding the event giving rise to the liability.</p>
				<p>20.2  Nothing in this clause limits either party&rsquo;s liability for: (a) death or personal injury caused by its negligence; (b) fraud or fraudulent misrepresentation; (c) wilful misconduct; or (d) any liability that cannot be limited or excluded at law.</p>
				<p>20.3  The Client acknowledges that the allocation of risk reflected in this clause, the Fees, and the other terms of this Agreement has been agreed between the parties as a commercially reasonable allocation of risk for the Services.</p>
				<h3>21. Indemnities</h3>
				<p>21.1  The Client will indemnify and hold CareConcierge (and its directors, officers, employees, and agents) harmless from and against all claims, damages, losses, liabilities, costs, and expenses (including reasonable legal costs) suffered or incurred by CareConcierge arising out of or in connection with:</p>
				<p>(a)  any breach by the Client of this Agreement;</p>
				<p>(b)  the content of any Client Materials, including any claim that the Client Materials infringe the Intellectual Property Rights of a third party, misrepresent any service, or breach applicable law;</p>
				<p>(c)  any clinical decision, treatment recommendation, or act or omission of the Client, its clinicians, or its personnel; or</p>
				<p>(d)  the Client&rsquo;s non-compliance with applicable advertising, professional, regulatory, or data protection obligations.</p>
				<p>21.2  CareConcierge will indemnify the Client against third-party claims that the Platform (as provided by CareConcierge and used by the Client in accordance with this Agreement) infringes the Intellectual Property Rights of that third party, provided that the Client (a) notifies CareConcierge promptly of any such claim; (b) gives CareConcierge sole control of the defence and settlement; and (c) provides CareConcierge with reasonable cooperation at CareConcierge&rsquo;s expense. This indemnity does not apply to claims arising from Client Materials, unauthorised modifications to the Platform, or use of the Platform in breach of this Agreement.</p>
				<h3>22. Force majeure</h3>
				<p>22.1  Neither party is liable for any failure or delay in performing its obligations under this Agreement (other than an obligation to pay money) to the extent such failure or delay is caused by an event beyond its reasonable control, including acts of God, natural disaster, fire, flood, pandemic, war, civil unrest, industrial action, government action, failure of telecommunications or internet infrastructure, or failure of Third-Party Platforms (each a Force Majeure Event).</p>
				<p>22.2  The affected party will notify the other party promptly of the Force Majeure Event and its expected impact, and will use reasonable efforts to mitigate the effects and resume performance as soon as reasonably practicable.</p>
				<p>22.3  If a Force Majeure Event continues for more than sixty (60) consecutive days, either party may terminate this Agreement by written notice without liability (other than accrued liabilities up to the date of termination).</p>
				<h3>23. Notices</h3>
				<p>23.1  Any notice, demand, or other communication under this Agreement must be in writing and may be given by email or by hand to the relevant party at the address or email address notified by that party from time to time. Notices to CareConcierge must be sent to the email address notified in the Engagement Order or to its mailing address at PO Box 944, Paradise Point, Queensland 4216, Australia.</p>
				<p>23.2  A notice is deemed to have been received: (a) if delivered by hand, when delivered; (b) if sent by email, on the day of transmission, provided no delivery failure notification is received.</p>
				<p>23.3  A communication by email from a representative of a party is taken to be authorised by that party unless and until the contrary is notified in writing.</p>
				<h3>24. Governing law and jurisdiction</h3>
				<p>24.1  This Agreement is governed by and construed in accordance with the laws of Queensland, Australia, and the laws of the Commonwealth of Australia that apply in that jurisdiction.</p>
				<p>24.2  The parties submit to the exclusive jurisdiction of the courts of Queensland and the courts of appeal from them in respect of all matters arising out of or in connection with this Agreement, subject to clause 25.</p>
				<h3>25. Dispute resolution</h3>
				<p>25.1  Before commencing court proceedings (other than for interlocutory relief) in respect of any dispute arising out of or in connection with this Agreement (a Dispute), the party asserting the Dispute must give written notice to the other party specifying the nature of the Dispute and the outcome sought (a Dispute Notice).</p>
				<p>25.2  Within ten (10) Business Days of the Dispute Notice, senior representatives of each party will meet (in person or by video conference) and negotiate in good faith to resolve the Dispute.</p>
				<p>25.3  If the Dispute is not resolved within twenty (20) Business Days of the Dispute Notice, either party may refer the Dispute to mediation administered by the Resolution Institute (or such other body as the parties may agree). The mediator&rsquo;s fees will be borne equally by the parties. Each party will bear its own costs of participation.</p>
				<p>25.4  If the Dispute is not resolved by mediation within forty (40) Business Days of the mediator&rsquo;s appointment, either party may commence court proceedings in accordance with clause 24.</p>
				<p>25.5  Nothing in this clause prevents a party from seeking urgent interlocutory relief from a court of competent jurisdiction.</p>
				<h3>26. General provisions</h3>
				<p>26.1  Entire agreement. This Agreement constitutes the entire agreement between the parties in respect of its subject matter and supersedes all prior agreements, representations, and understandings.</p>
				<p>26.2  Severance. If any provision of this Agreement is held by a court of competent jurisdiction to be invalid, illegal, or unenforceable, the provision will be read down to the extent necessary to make it valid and enforceable, or if that is not possible, severed, and the remainder of the Agreement will continue in full force and effect.</p>
				<p>26.3  Waiver. No failure or delay by a party to exercise any right, power, or remedy under this Agreement operates as a waiver of that right, power, or remedy. A waiver is only effective if given in writing and signed by the party granting it.</p>
				<p>26.4  Assignment. The Client may not assign, novate, or otherwise transfer its rights or obligations under this Agreement without the prior written consent of CareConcierge. CareConcierge may assign or novate this Agreement to any successor or related body corporate on written notice to the Client.</p>
				<p>26.5  Relationship. This Agreement does not create a relationship of employment, agency, partnership, or joint venture between the parties. Each party acts as an independent contractor.</p>
				<p>26.6  Further assurance. Each party will do, and will procure that its personnel do, all such acts and things and execute all such documents as may reasonably be required to give full effect to this Agreement.</p>
				<p>26.7  Counterparts and electronic signatures. This Agreement may be executed in any number of counterparts, each of which is an original and all of which together constitute one and the same instrument. Execution by electronic signature, including via DocuSign or equivalent platform, is valid and binding.</p>
				<p>26.8  No reliance. Each party acknowledges that it has not relied on any representation, warranty, or statement made by the other party except as expressly set out in this Agreement, and that it has had the opportunity to obtain independent legal and financial advice before entering into this Agreement.</p>
			</section>

			<section id="australia" class="cc-legal-page__section">
				<h2>Australia</h2>
				<p>For Australian clients, the Master Service Terms apply together with the signed Engagement Order and any schedules, loadings, or variations referenced in that Engagement Order. No UK Data Processing Addendum or US HIPAA / Business Associate Addendum applies unless separately agreed in writing.</p>
				<p>The Agreement for an Australian engagement ordinarily consists of:</p>
				<p>(a)&nbsp; the signed Engagement Order;</p>
				<p>(b)&nbsp; the Master Service Terms; and</p>
				<p>(c)&nbsp; any schedules, loadings, or variations referenced in the Engagement Order.</p>
				<p>Australian clients are subject to the Privacy Act 1988 (Cth) and the Australian Privacy Principles, as referenced in clause 18 of the Master Service Terms. The CareConcierge <a href="/privacy-notice/">Privacy Notice</a> describes how CareConcierge handles personal information about its clients, prospective clients, and website visitors.</p>
			</section>

			<section id="united-kingdom" class="cc-legal-page__section">
				<h2>United Kingdom</h2>
				<p>For UK clients, the Agreement consists of the signed Engagement Order, the Master Service Terms, and the UK Data Processing Addendum (UK DPA) where CareConcierge processes Personal Data on behalf of the Client in the course of providing the Services. The UK DPA operates as a schedule to the Master Service Terms in the manner described in &ldquo;Anatomy of the Agreement&rdquo; above.</p>
				<p>The default role allocation under the UK DPA is Client as Controller and CareConcierge as Processor. Each party may also act as an independent Controller for its own internal business records. The UK DPA does not create a joint-controller arrangement.</p>
				<h3>UK Data Processing Addendum</h3>
				<p>This UK Data Processing Addendum (the UK DPA) forms part of the CareConcierge Engagement Order and Service Terms and Conditions entered into between CareConcierge Pty Limited and the Client (the Master Agreement). The UK DPA applies where CareConcierge processes Personal Data on behalf of the Client in the course of providing the Services to the Client under the Master Agreement.</p>
				<h4>1. Interpretation and relationship to the Master Agreement</h4>
				<p>1.1  In this UK DPA, the following terms have the meanings set out below. Terms defined in the Master Agreement have the same meaning when used in this UK DPA, unless the context otherwise requires.</p>
				<p>&ldquo;Controller&rdquo; has the meaning given in the UK GDPR.</p>
				<p>&ldquo;Data Protection Laws&rdquo; the UK GDPR, the Data Protection Act 2018, and any other data protection and privacy laws of the United Kingdom applicable to the processing of Personal Data under this UK DPA, in each case as amended, replaced, or supplemented from time to time.</p>
				<p>&ldquo;Data Subject&rdquo; has the meaning given in the UK GDPR.</p>
				<p>&ldquo;Personal Data&rdquo; has the meaning given in the UK GDPR, limited in this UK DPA to Personal Data processed by CareConcierge on behalf of the Client in the course of providing the Services.</p>
				<p>&ldquo;Personal Data Breach&rdquo; has the meaning given in the UK GDPR.</p>
				<p>&ldquo;Processor&rdquo; has the meaning given in the UK GDPR.</p>
				<p>&ldquo;Restricted Transfer&rdquo; a transfer of Personal Data from the United Kingdom to a country or territory that is not the subject of an adequacy determination under the Data Protection Act 2018.</p>
				<p>&ldquo;Special Category Data&rdquo; has the meaning given in Article 9(1) of the UK GDPR.</p>
				<p>&ldquo;Sub-processor&rdquo; any third party appointed by CareConcierge to process Personal Data on behalf of the Client in connection with the Services.</p>
				<p>&ldquo;Supervisory Authority&rdquo; the United Kingdom Information Commissioner&rsquo;s Office or any successor authority with jurisdiction in respect of the Data Protection Laws.</p>
				<p>&ldquo;UK GDPR&rdquo; the retained EU law version of Regulation (EU) 2016/679 as it forms part of the law of the United Kingdom by virtue of section 3 of the European Union (Withdrawal) Act 2018, as amended from time to time.</p>
				<p>1.2  This UK DPA is a schedule to the Master Agreement. Where a conflict arises between this UK DPA and the Master Agreement on a matter within the subject matter of this UK DPA, this UK DPA prevails to the extent of the conflict. On all other matters, the Master Agreement prevails. Nothing in this UK DPA expands the scope of the Services or the limitation of liability in clause 20 of the Master Agreement.</p>
				<h4>2. Purpose and scope</h4>
				<p>2.1  This UK DPA applies where CareConcierge processes Personal Data on behalf of the Client in connection with the Services under the Master Agreement. It takes effect from the date of execution of the Engagement Order and remains in force for so long as CareConcierge processes Personal Data on behalf of the Client.</p>
				<p>2.2  The Client is responsible for ensuring that its instructions to CareConcierge, and its own use of the Services, comply with the Data Protection Laws. CareConcierge&rsquo;s role is limited to processing Personal Data in accordance with the Master Agreement, this UK DPA, and the Client&rsquo;s documented instructions.</p>
				<h4>3. Roles of the parties</h4>
				<p>3.1  For Personal Data processed by CareConcierge in connection with the Services, the parties&rsquo; default roles are:</p>
				<p>(a)  the Client acts as Controller; and</p>
				<p>(b)  CareConcierge acts as Processor.</p>
				<p>3.2  Each party may also act as an independent Controller in respect of Personal Data that it processes for its own internal business purposes, including billing and accounts administration, compliance and regulatory record-keeping, legal and professional advice, and internal governance. The parties do not intend this UK DPA to create a joint-controller arrangement within the meaning of Article 26 of the UK GDPR. Where the parties determine that a joint-controller arrangement is or may be required for a specific configuration of the Services, they will agree an appropriate arrangement in writing.</p>
				<p>3.3  CareConcierge will not combine Personal Data processed on behalf of the Client with Personal Data processed on behalf of any other client except as permitted for the aggregated, de-identified, and anonymised improvement use case described in clause 16.4 of the Master Agreement.</p>
				<h4>4. Subject matter, duration, nature, and purpose of processing</h4>
				<p>4.1  The subject matter, duration, nature, and purpose of the processing, together with the categories of Data Subject and types of Personal Data, are set out in Schedule 1 to this UK DPA.</p>
				<p>4.2  The processing described in Schedule 1 is aligned with the Services as described in clause 4 of the Master Agreement and the clinical and compliance boundaries in clauses 6 and 7 of the Master Agreement.</p>
				<h4>5. Documented instructions</h4>
				<p>5.1  CareConcierge will process Personal Data only on documented instructions from the Client, including with regard to Restricted Transfers, unless processing is required by law to which CareConcierge is subject, in which case CareConcierge will inform the Client of that legal requirement before processing, unless such notification is prohibited by law.</p>
				<p>5.2  The Master Agreement, the Engagement Order, the configuration of the Services agreed during onboarding, and any written operational instructions issued by the Client from time to time together constitute the Client&rsquo;s documented instructions for the purposes of this clause.</p>
				<p>5.3  If CareConcierge considers in good faith that an instruction infringes the Data Protection Laws, it will inform the Client promptly and may (without liability) decline to perform that instruction pending resolution.</p>
				<h4>6. Processor obligations</h4>
				<p>6.1  CareConcierge will:</p>
				<p>(a)  process Personal Data only for the duration of the Master Agreement and only for the purposes described in Schedule 1 and the Client&rsquo;s documented instructions;</p>
				<p>(b)  ensure that personnel authorised to process Personal Data are subject to confidentiality obligations substantially equivalent to those in clause 17 of the Master Agreement;</p>
				<p>(c)  implement and maintain the technical and organisational measures described in clause 9;</p>
				<p>(d)  comply with clause 7 in relation to Sub-processors;</p>
				<p>(e)  taking into account the nature of the processing, provide the Client with reasonable assistance by appropriate technical and organisational measures, insofar as possible, to enable the Client to fulfil its obligation to respond to requests for exercising Data Subject rights under the Data Protection Laws;</p>
				<p>(f)  provide the Client with reasonable assistance in ensuring compliance with its obligations under Articles 32 to 36 of the UK GDPR, taking into account the nature of the processing and the information available to CareConcierge;</p>
				<p>(g)  at the choice of the Client, return or delete Personal Data on termination of the Services, in accordance with clause 12; and</p>
				<p>(h)  make available to the Client information reasonably necessary to demonstrate compliance with this clause, and co-operate with audits as provided in clause 11.</p>
				<h4>7. Sub-processors</h4>
				<p>7.1  The Client grants CareConcierge general written authorisation to appoint Sub-processors for the provision of the Services, subject to this clause.</p>
				<p>7.2  The categories of Sub-processor authorised as at the date of this UK DPA are set out in Schedule 1. These comprise the platform, communications, workflow automation, hosting, vector store, and artificial intelligence provider categories necessary to deliver the Services.</p>
				<p>7.3  CareConcierge will notify the Client of any intended addition or replacement of a Sub-processor not less than fourteen (14) days before the change takes effect. The notice will identify the Sub-processor, the services it will provide, and the location of processing. The Client may object to the change within the notice period on reasonable data-protection grounds by written notice to CareConcierge.</p>
				<p>7.4  If the Client objects under clause 7.3, the parties will discuss the objection in good faith and CareConcierge may propose a reasonable alternative arrangement (including alternative safeguards or an alternative Sub-processor). If no alternative is agreed within thirty (30) days of the objection, the Client&rsquo;s sole remedy is to terminate the affected component of the Services by written notice, without triggering the Release Fee under clause 12 of the Master Agreement in respect of that component. For the avoidance of doubt, termination of the Services for a Sub-processor objection is limited to the component affected; the balance of the Services continues on the terms of the Master Agreement.</p>
				<p>7.5  CareConcierge will impose on each Sub-processor, by written contract, data protection obligations substantially equivalent to those set out in this UK DPA. CareConcierge remains liable to the Client for the performance of each Sub-processor&rsquo;s obligations.</p>
				<h4>8. International transfers</h4>
				<p>8.1  The Client acknowledges that CareConcierge is established in Australia and that the provision of the Services may involve Restricted Transfers of Personal Data from the United Kingdom to Australia and to Sub-processors located outside the United Kingdom.</p>
				<p>8.2  Where a Restricted Transfer occurs, the parties will rely on a legally valid transfer mechanism under the Data Protection Laws. The parties agree that the International Data Transfer Addendum to the European Commission&rsquo;s Standard Contractual Clauses issued by the Information Commissioner (the UK Addendum) shall apply to such Restricted Transfers between the parties, and the parties are deemed to have entered into the UK Addendum on the terms that apply between a Controller (the Client, as data exporter) and a Processor (CareConcierge, as data importer), with the relevant details completed by reference to Schedule 1 of this UK DPA.</p>
				<p>8.3  For Restricted Transfers to Sub-processors, CareConcierge will ensure that a legally valid transfer mechanism is in place before the transfer occurs, which may include reliance on the UK Addendum, the Data Protection Act 2018 Part 3 transfer mechanisms, or any successor mechanism recognised under the Data Protection Laws.</p>
				<p>8.4  If any transfer mechanism relied on under this clause is invalidated or ceases to be recognised under the Data Protection Laws, the parties will use reasonable efforts to adopt an alternative valid mechanism without undue delay.</p>
				<h4>9. Security</h4>
				<p>9.1  CareConcierge will implement and maintain technical and organisational measures appropriate to the risk presented by the processing. The measures take into account the state of the art, the costs of implementation, the nature, scope, context, and purposes of the processing, and the risks of varying likelihood and severity for the rights and freedoms of Data Subjects.</p>
				<p>9.2  The measures will, as appropriate, include:</p>
				<p>(a)  pseudonymisation or encryption of Personal Data in transit and at rest where technically reasonable;</p>
				<p>(b)  measures to ensure the ongoing confidentiality, integrity, availability, and resilience of the systems and services used to process Personal Data;</p>
				<p>(c)  measures to restore the availability of and access to Personal Data in a timely manner in the event of a physical or technical incident;</p>
				<p>(d)  role-based access controls, credential management, and logging of access to Personal Data;</p>
				<p>(e)  secure configuration and maintenance of hosting infrastructure and Sub-processor environments;</p>
				<p>(f)  periodic review and testing of the effectiveness of technical and organisational measures; and</p>
				<p>(g)  personnel training on data protection and information security appropriate to role.</p>
				<p>9.3  CareConcierge may update its technical and organisational measures from time to time, provided that no such update will materially reduce the level of protection afforded to Personal Data.</p>
				<h4>10. Personal Data Breach</h4>
				<p>10.1  CareConcierge will notify the Client of a Personal Data Breach affecting Personal Data processed under this UK DPA without undue delay after becoming aware of it.</p>
				<p>10.2  The notification will include, to the extent known to CareConcierge at the time of notification and as further information becomes available:</p>
				<p>(a)  a description of the nature of the Personal Data Breach, including where possible the categories and approximate number of Data Subjects and Personal Data records concerned;</p>
				<p>(b)  the name and contact details of a point of contact at CareConcierge from whom more information can be obtained;</p>
				<p>(c)  the likely consequences of the Personal Data Breach; and</p>
				<p>(d)  the measures taken or proposed to be taken to address the Personal Data Breach and to mitigate its possible adverse effects.</p>
				<p>10.3  CareConcierge will co-operate reasonably with the Client in the investigation, mitigation, and remediation of the Personal Data Breach, and will provide reasonable assistance with any notifications the Client is required to make to the Supervisory Authority or affected Data Subjects.</p>
				<h4>11. Audit and information rights</h4>
				<p>11.1  CareConcierge will make available to the Client, on reasonable written request, information reasonably necessary to demonstrate compliance with this UK DPA, including written responses to reasonable security and data-protection questionnaires, and copies of any relevant third-party certifications, reports, or attestations then held by CareConcierge.</p>
				<p>11.2  Where the Client reasonably considers that the information provided under clause 11.1 is insufficient to demonstrate compliance with a specific matter, the Client may request an audit conducted by the Client or by a qualified third-party auditor appointed by the Client and reasonably acceptable to CareConcierge. The parties will agree the scope, timing, and conduct of the audit in advance.</p>
				<p>11.3  An audit under clause 11.2 will:</p>
				<p>(a)  be conducted no more than once in any twelve-month period, save where a Personal Data Breach or reasonable evidence of material non-compliance warrants more frequent review;</p>
				<p>(b)  be conducted on not less than thirty (30) days&rsquo; prior written notice, save in the case of a Personal Data Breach requiring urgent investigation;</p>
				<p>(c)  be conducted during normal business hours, in a manner that minimises disruption to the operation of the Services and other CareConcierge clients;</p>
				<p>(d)  be subject to the auditor entering into confidentiality obligations substantially equivalent to those in clause 17 of the Master Agreement; and</p>
				<p>(e)  be at the Client&rsquo;s cost, save where the audit identifies material non-compliance by CareConcierge, in which case CareConcierge will bear the reasonable cost of the audit.</p>
				<p>11.4  Nothing in this clause requires CareConcierge to disclose information that would breach its obligations of confidence to any other client, its own trade secrets, or the security of its Platform.</p>
				<h4>12. Return or deletion on termination</h4>
				<p>12.1  On termination of the Master Agreement or cessation of processing under this UK DPA, CareConcierge will, at the Client&rsquo;s written election, return the Personal Data to the Client or delete it. Where the Client elects return, CareConcierge will provide the Personal Data in a commonly used, machine-readable format.</p>
				<p>12.2  Clause 12.1 does not apply to Personal Data that CareConcierge is required to retain by law, by a regulatory or professional obligation, or for the establishment, exercise, or defence of legal claims. CareConcierge will continue to apply the protections of this UK DPA to any such retained Personal Data for so long as it is retained.</p>
				<h4>13. Liability</h4>
				<p>13.1  The liability of each party under or in connection with this UK DPA is subject to the limitation of liability in clause 20 of the Master Agreement. Nothing in this UK DPA creates or expands any liability that would not otherwise exist under the Master Agreement.</p>
				<h4>14. Changes in law</h4>
				<p>14.1  If a change in the Data Protection Laws, or a decision of a Supervisory Authority or court, requires a material amendment to this UK DPA to maintain its validity or effectiveness, the parties will negotiate in good faith an amendment to achieve that result.</p>
				<h3>Schedule 1 to the UK DPA &mdash; Processing particulars</h3>
				<p>Parties</p>
				<p>Controller: the Client, as identified in the Engagement Order.</p>
				<p>Processor: CareConcierge Pty Limited (ACN 697 228 783).</p>
				<p>Subject matter of processing</p>
				<p>Processing of patient enquiry data in connection with the CareConcierge patient communication and enquiry conversion Services provided to the Client under the Master Agreement.</p>
				<p>Duration of processing</p>
				<p>For the duration of the Master Agreement and for such additional period as is required by law or for the establishment, exercise, or defence of legal claims, in accordance with clause 12.</p>
				<p>Nature of the processing</p>
				<p>Receipt and acknowledgement of patient enquiries across configured Channels (including WhatsApp, SMS, Meta Messenger, Instagram direct messages, web chat, and email);</p>
				<p>Generation of AI-assisted responses drawn from the Client&rsquo;s practice-approved Knowledge Base;</p>
				<p>Triage and qualification of enquiries;</p>
				<p>Handover to the Client&rsquo;s personnel at the decision-ready point;</p>
				<p>Retention of message logs for quality, optimisation, and conversion reporting purposes;</p>
				<p>Lead reactivation sequences (where the Plan includes this); and</p>
				<p>Generation of aggregate reporting and Conversion Intelligence outputs.</p>
				<p>Purposes of the processing</p>
				<p>Delivery of the Services as described in clause 4 of the Master Agreement; and</p>
				<p>Performance of CareConcierge&rsquo;s obligations under the Master Agreement.</p>
				<p>Categories of Data Subject</p>
				<p>Prospective and current patients of the Client who contact the Client&rsquo;s practice through a configured Channel;</p>
				<p>Personnel of the Client who interact with the Services in the course of their duties; and</p>
				<p>Any other individuals whose Personal Data is supplied to CareConcierge by the Client or included in a patient enquiry.</p>
				<p>Types of Personal Data</p>
				<p>Identity data: name, title, salutation;</p>
				<p>Contact data: telephone number, email address, messaging identifier (for example WhatsApp number or Instagram handle);</p>
				<p>Enquiry content: the text of messages sent by or on behalf of the Data Subject, including any information the Data Subject chooses to provide about the treatment they are considering, their general availability, and their preferences;</p>
				<p>Booking preferences: preferred consultation times, location preferences, and similar non-clinical preferences;</p>
				<p>Operational metadata: timestamps, Channel of enquiry, conversation identifiers, and routing status.</p>
				<p>Special Category Data</p>
				<p>The Services are configured to handle general patient enquiries and are not intended to elicit, store, or process Special Category Data on a routine basis. Where a Data Subject volunteers Special Category Data in the course of an enquiry, the Services will treat such data with the same confidentiality and security as other Personal Data, and the escalation logic configured in the Knowledge Base will route the enquiry to the Client&rsquo;s personnel for appropriate handling. The Client is responsible for configuring the Knowledge Base and escalation rules to minimise the incidental handling of Special Category Data.</p>
				<p>Approved Sub-processor categories</p>
				<p>CRM and platform provider (the platform on which the Services are operated, including customer relationship management, workflow orchestration, and messaging);</p>
				<p>Messaging and communications providers (including WhatsApp Business API, SMS gateway, and email delivery);</p>
				<p>Workflow automation hosting (virtual private server hosting for automation workflows);</p>
				<p>Knowledge base and vector storage provider (where applicable);</p>
				<p>Artificial intelligence model provider (for the generation of responses from the Knowledge Base);</p>
				<p>Data analytics, logging, and monitoring providers; and</p>
				<p>Payment processing provider (for the collection of Fees under the Master Agreement).</p>
				<p>The current list of specific Sub-processors within each category is maintained by CareConcierge and will be provided to the Client on request.</p>
				<p>International transfer mechanism</p>
				<p>The UK International Data Transfer Addendum to the European Commission&rsquo;s Standard Contractual Clauses (UK Addendum), between the Client as Controller/data exporter and CareConcierge as Processor/data importer, applies to Restricted Transfers under this UK DPA, in accordance with clause 8.</p>
				<p>Retention</p>
				<p>Personal Data is retained for the duration of the Master Agreement and, on termination, is returned or deleted in accordance with clause 12, save where retention is required by law or for the establishment, exercise, or defence of legal claims.</p>
			</section>

			<section id="united-states" class="cc-legal-page__section">
				<h2>United States</h2>
				<p>For US clients, the Agreement consists of the signed Engagement Order, the Master Service Terms, and the US HIPAA / Business Associate Addendum (HIPAA Addendum) <em>only where its applicability conditions are satisfied</em>. The HIPAA Addendum is conditional. It applies to a specific engagement only where: (a) the Client is a Covered Entity or Business Associate as defined under HIPAA; (b) the parties expect Protected Health Information (PHI) to flow through the Services in the course of the engagement; and (c) the parties have confirmed in writing that the HIPAA Addendum applies, whether in the Engagement Order or in a separate signed instrument.</p>
				<p>Where these conditions are not satisfied &mdash; including where the Services are configured, with the Client&rsquo;s agreement, to handle general enquiry, lead qualification, and booking workflows in a manner that does not involve PHI &mdash; the HIPAA Addendum does not apply, and the general data-protection provisions of the Master Service Terms govern.</p>
				<p>Where the HIPAA Addendum applies, the infrastructure-precondition clause (clause 12 of the HIPAA Addendum) prevents PHI handling from commencing until HIPAA-aligned infrastructure and Subcontractor arrangements (including a HIPAA-aligned hosting environment, dedicated platform configuration, and executed downstream Business Associate Agreements) are in place and confirmed in writing between the parties. CareConcierge does not provide clinical services, diagnosis, treatment planning, or stewardship of the Client&rsquo;s clinical records, save in the limited respect described in clause 9 of the HIPAA Addendum.</p>
				<h3>US HIPAA / Business Associate Addendum</h3>
				<p>This HIPAA / Business Associate Addendum (the HIPAA Addendum) forms part of the CareConcierge Engagement Order and Service Terms and Conditions entered into between CareConcierge Pty Limited and the Client (the Master Agreement). The HIPAA Addendum applies only to engagements that satisfy the applicability trigger in clause 1, and operates as a schedule to the Master Agreement.</p>
				<h4>1. Applicability</h4>
				<p>1.1  This HIPAA Addendum applies to a specific engagement between the parties only where all of the following conditions are satisfied:</p>
				<p>(a)  the Client is a Covered Entity or a Business Associate (as those terms are defined at 45 CFR &sect;160.103);</p>
				<p>(b)  the parties expect that Protected Health Information will be created, received, maintained, or transmitted by CareConcierge on behalf of the Client in the course of providing the Services; and</p>
				<p>(c)  the parties have confirmed in writing (whether in the Engagement Order or in a separate signed instrument referencing this HIPAA Addendum) that this HIPAA Addendum applies to the engagement.</p>
				<p>1.2  Where the applicability trigger in clause 1.1 is not satisfied &mdash; including where the Services are configured, with the Client&rsquo;s agreement, to handle general enquiry, lead qualification, and booking workflows in a manner that does not involve the creation, receipt, maintenance, or transmission of Protected Health Information &mdash; this HIPAA Addendum does not apply. In such cases the general data protection provisions of the Master Agreement govern the engagement.</p>
				<p>1.3  The Client will notify CareConcierge promptly if it becomes aware that a configuration previously scoped as non-PHI-handling is operating in a manner that results in the routine handling of Protected Health Information, and the parties will agree in writing whether this HIPAA Addendum is to apply prospectively.</p>
				<h4>2. Definitions</h4>
				<p>2.1  In this HIPAA Addendum:</p>
				<p>&ldquo;Breach&rdquo; has the meaning given at 45 CFR &sect;164.402.</p>
				<p>&ldquo;Business Associate&rdquo; has the meaning given at 45 CFR &sect;160.103.</p>
				<p>&ldquo;Covered Entity&rdquo; has the meaning given at 45 CFR &sect;160.103.</p>
				<p>&ldquo;Designated Record Set&rdquo; has the meaning given at 45 CFR &sect;164.501.</p>
				<p>&ldquo;Electronic Protected Health Information (ePHI)&rdquo; has the meaning given at 45 CFR &sect;160.103, limited to ePHI that CareConcierge creates, receives, maintains, or transmits on behalf of the Client.</p>
				<p>&ldquo;HIPAA&rdquo; the Health Insurance Portability and Accountability Act of 1996, as amended, and the regulations promulgated thereunder, including the Privacy Rule, the Security Rule, the Breach Notification Rule, and the HITECH Act, all as amended from time to time.</p>
				<p>&ldquo;Protected Health Information (PHI)&rdquo; has the meaning given at 45 CFR &sect;160.103, limited to PHI that CareConcierge creates, receives, maintains, or transmits on behalf of the Client.</p>
				<p>&ldquo;Security Incident&rdquo; has the meaning given at 45 CFR &sect;164.304.</p>
				<p>&ldquo;Subcontractor&rdquo; a person or entity (other than a member of CareConcierge&rsquo;s workforce) to whom CareConcierge delegates a function, activity, or service involving the creation, receipt, maintenance, or transmission of PHI on behalf of the Client.</p>
				<p>2.2  Terms defined in the Master Agreement have the same meaning when used in this HIPAA Addendum, unless the context otherwise requires. Where a term is defined in both HIPAA and the Master Agreement, the HIPAA definition governs for the purposes of this HIPAA Addendum.</p>
				<h4>3. Relationship to the Master Agreement</h4>
				<p>3.1  This HIPAA Addendum is a schedule to the Master Agreement. Where a conflict arises between this HIPAA Addendum and the Master Agreement on a matter within the subject matter of this HIPAA Addendum (being the creation, receipt, maintenance, transmission, use, or disclosure of PHI), this HIPAA Addendum prevails to the extent of the conflict. On all other matters, the Master Agreement prevails.</p>
				<p>3.2  Nothing in this HIPAA Addendum expands the scope of the Services as described in clause 4 of the Master Agreement, the clinical and compliance boundaries in clauses 6 and 7 of the Master Agreement, or the limitation of liability in clause 20 of the Master Agreement.</p>
				<h4>4. Permitted uses and disclosures of PHI</h4>
				<p>4.1  CareConcierge may use and disclose PHI only:</p>
				<p>(a)  to perform the Services for, or on behalf of, the Client under the Master Agreement;</p>
				<p>(b)  as permitted or required by this HIPAA Addendum;</p>
				<p>(c)  as required by law; and</p>
				<p>(d)  for the proper management and administration of CareConcierge&rsquo;s own business, and to carry out its legal responsibilities, in each case where use or disclosure of PHI is permitted by 45 CFR &sect;164.504(e)(4).</p>
				<p>4.2  CareConcierge will not use or disclose PHI in a manner that would violate HIPAA if done by the Client, except as expressly permitted by this HIPAA Addendum or HIPAA itself.</p>
				<p>4.3  CareConcierge will not sell PHI, and will not use or disclose PHI for marketing or fundraising purposes, except in each case as expressly permitted under HIPAA and agreed in writing between the parties.</p>
				<p>4.4  CareConcierge may use PHI to create aggregated, de-identified, and anonymised data in the form permitted under 45 CFR &sect;164.514, and may use such de-identified data for the purposes described in clause 16.4 of the Master Agreement. Data de-identified under this clause is no longer PHI.</p>
				<h4>5. Safeguards</h4>
				<p>5.1  CareConcierge will implement and maintain reasonable and appropriate administrative, physical, and technical safeguards to prevent the use or disclosure of PHI other than as permitted by this HIPAA Addendum.</p>
				<p>5.2  CareConcierge will comply with the applicable provisions of the Security Rule at 45 CFR Part 164, Subpart C with respect to ePHI, including the administrative, physical, and technical safeguards required by &sect;&sect;164.308, 164.310, and 164.312, and the organisational requirements at &sect;164.314.</p>
				<p>5.3  Specific safeguards implemented by CareConcierge for a particular engagement, including hosting environment, encryption configuration, access controls, audit logging, and workforce training, will be documented as part of the scoping of the engagement.</p>
				<h4>6. Minimum necessary</h4>
				<p>6.1  CareConcierge will, consistent with &sect;164.502(b), request, use, and disclose only the minimum amount of PHI necessary to perform the Services or to carry out the permitted use or disclosure.</p>
				<h4>7. Subcontractors</h4>
				<p>7.1  Where CareConcierge engages a Subcontractor to create, receive, maintain, or transmit PHI on its behalf in connection with the Services, CareConcierge will enter into a written Business Associate Agreement with the Subcontractor containing obligations substantially equivalent to those imposed on CareConcierge under this HIPAA Addendum, in accordance with 45 CFR &sect;164.502(e)(1)(ii) and &sect;164.308(b)(2).</p>
				<p>7.2  CareConcierge will not engage a Subcontractor to process PHI until the written Business Associate Agreement required by clause 7.1 is in place.</p>
				<p>7.3  A breach of a Subcontractor&rsquo;s obligations in respect of PHI will not, of itself, constitute a breach by CareConcierge of this HIPAA Addendum, provided that CareConcierge has complied with clauses 7.1 and 7.2 and has taken reasonable steps to cure the breach on becoming aware of it or to terminate the Subcontractor arrangement where cure is not feasible.</p>
				<h4>8. Security Incidents and Breach notification</h4>
				<p>8.1  CareConcierge will notify the Client of any Breach of Unsecured PHI affecting the Client&rsquo;s PHI without unreasonable delay after discovery, and in any event within the time required by 45 CFR &sect;164.410 (or such shorter period as may be agreed in the Engagement Order for a specific engagement).</p>
				<p>8.2  The notification will include, to the extent known at the time of notification and as further information becomes available, the information described at 45 CFR &sect;164.410(c).</p>
				<p>8.3  CareConcierge will report Security Incidents of which it becomes aware to the Client. The parties agree that, consistent with the HIPAA commentary, routine unsuccessful attempts to penetrate CareConcierge&rsquo;s systems (such as routine pings, port scans, and similar events that do not result in unauthorised access, use, or disclosure of PHI) may be reported on an aggregated basis through CareConcierge&rsquo;s periodic security reporting rather than individually.</p>
				<p>8.4  CareConcierge will co-operate reasonably with the Client in investigating, mitigating, and remediating any Breach or Security Incident, including in connection with any notifications the Client is required to make to individuals, the Secretary of the US Department of Health and Human Services, or the media.</p>
				<h4>9. Individual rights support</h4>
				<p>9.1  To the extent that CareConcierge maintains PHI in a Designated Record Set on behalf of the Client, CareConcierge will, on reasonable written request from the Client:</p>
				<p>(a)  make available to the Client, or to the individual as the Client directs, PHI in the Designated Record Set as required by 45 CFR &sect;164.524;</p>
				<p>(b)  make amendments to PHI in the Designated Record Set as directed by the Client under 45 CFR &sect;164.526; and</p>
				<p>(c)  document and make available information required for the Client to respond to requests for an accounting of disclosures under 45 CFR &sect;164.528.</p>
				<p>9.2  CareConcierge is a communication and enquiry conversion service, not a clinical record holder. The Designated Record Set for most engagements will be held by the Client in its practice management system, CRM, or clinical records system, and not by CareConcierge. CareConcierge&rsquo;s assistance under clause 9.1 is limited to PHI actually held by CareConcierge on behalf of the Client.</p>
				<h4>10. Access by the Secretary</h4>
				<p>10.1  CareConcierge will make its internal practices, books, and records relating to the use and disclosure of PHI available to the Secretary of the US Department of Health and Human Services for purposes of determining compliance with HIPAA, in accordance with 45 CFR &sect;164.504(e)(2)(ii)(I).</p>
				<h4>11. Return or destruction of PHI on termination</h4>
				<p>11.1  On termination of the Master Agreement, or on cessation of the engagement for which this HIPAA Addendum applies, CareConcierge will, at the Client&rsquo;s written election and to the extent feasible, return to the Client or destroy all PHI received from, or created, maintained, or transmitted by CareConcierge on behalf of, the Client, and will retain no copies of the PHI.</p>
				<p>11.2  Where return or destruction of PHI is not feasible (for example, where PHI is embedded in backup media retained for disaster recovery purposes, or in archival records required to be retained by law), CareConcierge will:</p>
				<p>(a)  extend the protections of this HIPAA Addendum to the retained PHI;</p>
				<p>(b)  limit further uses and disclosures of the retained PHI to those purposes that make return or destruction infeasible; and</p>
				<p>(c)  return or destroy the retained PHI when return or destruction becomes feasible.</p>
				<h4>12. Infrastructure precondition</h4>
				<p>12.1  Notwithstanding any other provision of this HIPAA Addendum or the Master Agreement, the parties acknowledge that HIPAA-compliant operation of the Services may require specific infrastructure, vendor, and Subcontractor arrangements, which may include:</p>
				<p>(a)  a HIPAA-aligned hosting environment in the United States, separate from the hosting environment used for the default launch configuration of the Services in other markets;</p>
				<p>(b)  a dedicated sub-account or instance on the CareConcierge Platform, configured to segregate PHI from other client data;</p>
				<p>(c)  executed Business Associate Agreements with each Subcontractor or Third-Party Platform provider that will create, receive, maintain, or transmit PHI in connection with the Services, including (as applicable) the hosting provider, the platform provider, the messaging provider, the workflow automation provider, and the artificial intelligence model provider; and</p>
				<p>(d)  such additional administrative, physical, or technical safeguards as may be required by the nature of the engagement.</p>
				<p>12.2  Neither party will commence, cause, or permit the handling of PHI in connection with the Services for a particular engagement until the infrastructure, vendor, and Subcontractor arrangements required for that engagement are in place and have been confirmed in writing between the parties.</p>
				<p>12.3  The infrastructure configuration, the Subcontractor arrangements, and any associated service adjustments required for a particular engagement will be documented in the Engagement Order or in a written scoping schedule prior to PHI-enabled Go-Live.</p>
				<p>12.4  Any Additional Loadings (as defined in clause 1 of the Master Agreement) arising from HIPAA-aligned infrastructure, Subcontractor arrangements, or service adjustments &mdash; including separate hosting fees, dedicated sub-account fees, additional compliance tooling, or additional Subcontractor fees &mdash; will be specified in the Engagement Order and payable in accordance with clauses 9 and 10 of the Master Agreement.</p>
				<h4>13. No expansion of service scope</h4>
				<p>13.1  Nothing in this HIPAA Addendum expands the scope of the Services beyond the communication, triage, qualification, and conversion workflows described in clause 4 of the Master Agreement. CareConcierge does not, under this HIPAA Addendum or otherwise, provide clinical services, diagnosis, treatment planning, treatment recommendations, or stewardship of the Client&rsquo;s clinical records or Designated Record Set, except in the limited respect described in clause 9.</p>
				<p>13.2  The clinical boundary, escalation logic, and AI service limitations in clauses 6 and 7 of the Master Agreement continue to apply in full to any engagement subject to this HIPAA Addendum.</p>
				<h4>14. Term</h4>
				<p>14.1  This HIPAA Addendum takes effect with respect to a specific engagement from the date on which the applicability trigger in clause 1 is satisfied and the parties confirm in writing that the Addendum applies. It continues in force for so long as CareConcierge handles PHI on behalf of the Client, and survives termination to the extent necessary to give effect to clause 11 and any obligations in respect of retained PHI.</p>
				<h4>15. Amendment</h4>
				<p>15.1  The parties will negotiate in good faith to amend this HIPAA Addendum as necessary to comply with any amendment to HIPAA or the regulations made under HIPAA.</p>
			</section>

			<footer class="cc-legal-page__contact-coda">
				<p>For questions about these Terms, please contact <a href="mailto:care@careconcierge.health?subject=Terms%20enquiry%20%E2%80%94%20CareConcierge">care@careconcierge.health</a>. Privacy information is set out in the CareConcierge <a href="/privacy-notice/">Privacy Notice</a>.</p>
			</footer>
		</div>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
