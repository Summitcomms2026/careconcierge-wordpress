<?php
/**
 * Title: Dentists — Section 05b Request the Deck
 * Slug: careconcierge/dentists-section-05b-deck-request
 * Categories: careconcierge
 * Description: Dental & Ortho deck request. Same form / states / wiring as the master; copy adapted from WebCopy_DentalOrtho_Page.docx. Form posts to wp-admin/admin-ajax.php (cc_deck_request) — the dental deck PDF is not yet wired into careconcierge_deck_url_for_market() so for now market-keyed downloads return the existing surgeons editions; the "Other" state remains the safe path until dental editions are uploaded.
 * Inserter: yes
 */

$cc_deck_nonce = wp_create_nonce( 'cc_deck_request' );
?>
<!-- wp:group {"tagName":"section","className":"cc-section cc-section--deck","backgroundColor":"soft-cloud","textColor":"ink-blue","layout":{"type":"constrained","contentSize":"100%","wideSize":"100%"}} -->
<section id="deck-request" class="wp-block-group cc-section cc-section--deck has-ink-blue-color has-soft-cloud-background-color has-text-color has-background">
	<!-- wp:html -->
	<div class="cc-deck-grid">

		<!-- Left column: editorial copy + six promise points -->
		<div class="cc-deck__copy">
			<p class="cc-eyebrow cc-reveal">The Private Dental Practice Deck</p>
			<h2 class="cc-deck__headline cc-reveal">Request the private dental practice deck.</h2>
			<div class="cc-deck__body cc-reveal">
				<p>A serious dental enquiry rarely arrives casually. The patient has researched the treatment, compared practices, checked credentials, worried about discomfort, considered the cost, then waited until the question felt real enough to ask.</p>
			</div>

			<ol class="cc-deck-points cc-reveal-group" role="list">
				<li class="cc-deck-points__item cc-reveal">
					<span class="cc-deck-points__num" aria-hidden="true">01</span>
					<div class="cc-deck-points__text">
						<h3 class="cc-deck-points__title">Why the first response is now your marketing</h3>
						<p class="cc-deck-points__body">The deck explains why, in regulated private dentistry, the decisive advantage is no longer simply what you advertise. It is how quickly, intelligently and safely your practice responds once the patient reaches out.</p>
					</div>
				</li>
				<li class="cc-deck-points__item cc-reveal">
					<span class="cc-deck-points__num" aria-hidden="true">02</span>
					<div class="cc-deck-points__text">
						<h3 class="cc-deck-points__title">Where value leaks before consultation</h3>
						<p class="cc-deck-points__body">After-hours messages, delayed callbacks, vague fee questions, unqualified enquiries and lapsed conversations all carry commercial consequence. The deck maps the leak most practices feel but rarely measure.</p>
					</div>
				</li>
				<li class="cc-deck-points__item cc-reveal">
					<span class="cc-deck-points__num" aria-hidden="true">03</span>
					<div class="cc-deck-points__text">
						<h3 class="cc-deck-points__title">How CareConcierge protects the chain of custody</h3>
						<p class="cc-deck-points__body">From enquiry received to AI response, lead triage, warm handoff and consultation protection, the deck shows how serious patient intent is held until the practice team can act.</p>
					</div>
				</li>
				<li class="cc-deck-points__item cc-reveal">
					<span class="cc-deck-points__num" aria-hidden="true">04</span>
					<div class="cc-deck-points__text">
						<h3 class="cc-deck-points__title">Why this is not just a chatbot</h3>
						<p class="cc-deck-points__body">The deck draws the distinction clearly: a chatbot is a scripted decision tree. CareConcierge is a controlled conversational agent built around approved practice content, escalation rules, regulator-aware boundaries and consultation intent.</p>
					</div>
				</li>
				<li class="cc-deck-points__item cc-reveal">
					<span class="cc-deck-points__num" aria-hidden="true">05</span>
					<div class="cc-deck-points__text">
						<h3 class="cc-deck-points__title">What changed inside an established UK private dental practice</h3>
						<p class="cc-deck-points__body">The deck includes the founding proof point: staff freed from repetitive FAQ admin, after-hours leads captured, patients responding positively to the speed and quality of replies, and monthly Conversion Intelligence delivered to the principal.</p>
					</div>
				</li>
				<li class="cc-deck-points__item cc-reveal">
					<span class="cc-deck-points__num" aria-hidden="true">06</span>
					<div class="cc-deck-points__text">
						<h3 class="cc-deck-points__title">How the practice goes live in three weeks</h3>
						<p class="cc-deck-points__body">The implementation model is deliberately practical: intake, knowledge-base build, live deployment, first-month review, script refinement, conversion tracking, optional lapsed-enquiry reactivation and managed optimisation.</p>
					</div>
				</li>
			</ol>
		</div>

		<!-- Right column: deck visual + form (or thank-you state) -->
		<div class="cc-deck__visual">
			<figure class="cc-deck__artwork cc-reveal cc-reveal--from-right">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photography/deck.jpg" alt="The CareConcierge dental practice deck &mdash; confidential commercial briefing" loading="lazy" decoding="async" />
			</figure>

			<aside class="cc-deck-form cc-reveal cc-reveal--from-bottom" aria-labelledby="cc-deck-form-title-dentists">
				<!-- Default (form) state -->
				<div class="cc-deck-form__state cc-deck-form__state--form" data-cc-state="form">
					<header class="cc-deck-form__masthead">
						<p class="cc-deck-form__label">Confidential request</p>
						<h3 id="cc-deck-form-title-dentists" class="cc-deck-form__title">Request the private dental practice deck</h3>
						<p class="cc-deck-form__intro">Tell us where to send the relevant version. We will share the deck most appropriate to your market, regulatory environment and practice model.</p>
					</header>

					<!--
					Form behaviour (kept in comments so this remains public-facing prose):
					  - Submits via JavaScript fetch() to wp-admin/admin-ajax.php
					    (action: cc_deck_request) — see assets/js/main.js step 6.
					  - Server handler validates every required field, sends an
					    internal notification to greg@careconcierge.health and a
					    confirmation email to the requester — see functions.php
					    careconcierge_handle_deck_request().
					  - Dental editions of the deck are not yet uploaded to
					    /assets/documents/. Until they are, the dynamic
					    download link in the .thanks state will fall back to
					    the existing plastic surgery editions, and the team
					    should plan to swap them in via the deck-URL map
					    (careconcierge_deck_url_for_market() in functions.php)
					    once dental PDFs are supplied. The "Other" state is
					    safe to use today and tells the requester we will
					    send the right edition directly.
					-->
					<form class="cc-deck-form__form" novalidate>
						<input type="hidden" name="cc_deck_nonce" value="<?php echo esc_attr( $cc_deck_nonce ); ?>" />
						<input type="hidden" name="cc_deck_page_url" value="" />

						<p class="cc-deck-form__caution" role="note">
							<span class="cc-deck-form__caution-label" aria-hidden="true">Please note</span>
							Please do not include patient-identifiable or clinical information.
						</p>

						<div class="cc-deck-form__field">
							<label for="cc-deck-name-dentists">Full name <span class="cc-deck-form__required" aria-hidden="true">*</span></label>
							<input id="cc-deck-name-dentists" name="full_name" type="text" required autocomplete="name" placeholder="Dr / Mr / Ms / First and last name" />
						</div>

						<div class="cc-deck-form__field">
							<label for="cc-deck-practice-dentists">Practice name <span class="cc-deck-form__required" aria-hidden="true">*</span></label>
							<input id="cc-deck-practice-dentists" name="practice_name" type="text" required autocomplete="organization" placeholder="Your clinic or company name" />
						</div>

						<div class="cc-deck-form__row">
							<div class="cc-deck-form__field">
								<label for="cc-deck-role-dentists">Role <span class="cc-deck-form__required" aria-hidden="true">*</span></label>
								<select id="cc-deck-role-dentists" name="role" required>
									<option value="" disabled selected>Select your role</option>
									<option>Specialist Dentist</option>
									<option>Practice Principal</option>
									<option>Practice Manager</option>
									<option>Treatment Coordinator</option>
									<option>Clinic Director</option>
									<option>Marketing / Growth Lead</option>
									<option>Other</option>
								</select>
							</div>
							<div class="cc-deck-form__field">
								<label for="cc-deck-market-dentists">Country / Market <span class="cc-deck-form__required" aria-hidden="true">*</span></label>
								<select id="cc-deck-market-dentists" name="market" required>
									<option value="" disabled selected>Select your market</option>
									<option value="AU">Australia</option>
									<option value="UK">United Kingdom</option>
									<option value="US">United States</option>
									<option value="OTHER">Other</option>
								</select>
							</div>
						</div>

						<div class="cc-deck-form__field">
							<label for="cc-deck-website-dentists">Practice website <span class="cc-deck-form__required" aria-hidden="true">*</span></label>
							<input id="cc-deck-website-dentists" name="practice_website" type="text" required autocomplete="url" placeholder="yourpractice.com" />
						</div>

						<div class="cc-deck-form__field">
							<label for="cc-deck-email-dentists">Email address <span class="cc-deck-form__required" aria-hidden="true">*</span></label>
							<input id="cc-deck-email-dentists" name="email" type="email" required autocomplete="email" placeholder="work email preferred" />
						</div>

						<div class="cc-deck-form__field">
							<label for="cc-deck-challenge-dentists">Main enquiry challenge <span class="cc-deck-form__required" aria-hidden="true">*</span></label>
							<select id="cc-deck-challenge-dentists" name="challenge" required>
								<option value="" disabled selected>Select the challenge that matters most</option>
								<option>After-hours enquiries</option>
								<option>Slow response times</option>
								<option>Too many repetitive questions</option>
								<option>Low enquiry-to-consultation conversion</option>
								<option>Lapsed enquiries not followed up</option>
								<option>Treatment coordinator capacity</option>
								<option>Unsure &mdash; I want to understand the opportunity</option>
							</select>
						</div>

						<div class="cc-deck-form__field">
							<label for="cc-deck-volume-dentists">Monthly enquiry volume <span class="cc-deck-form__required" aria-hidden="true">*</span></label>
							<select id="cc-deck-volume-dentists" name="volume" required>
								<option value="" disabled selected>Select your monthly enquiry volume</option>
								<option>Under 25</option>
								<option>25&ndash;50</option>
								<option>51&ndash;100</option>
								<option>101&ndash;200</option>
								<option>200+</option>
							</select>
						</div>

						<div class="cc-deck-form__error" role="alert" aria-live="polite"></div>

						<button type="submit" class="cc-button cc-button--primary cc-deck-form__submit">
							<span class="cc-deck-form__submit-label">Send me the deck</span>
							<span class="cc-deck-form__submit-spinner" aria-hidden="true"></span>
						</button>

						<p class="cc-deck-form__consent">By submitting this form, you agree that CareConcierge may contact you about the deck and relevant patient communication infrastructure.</p>
						<p class="cc-deck-form__trust">We will not share your details. We will not add you to a carnival of automated nonsense. One deck, then a considered follow-up if relevant.</p>
					</form>
				</div>

				<!-- Thank-you state (deck delivered) -->
				<div class="cc-deck-form__state cc-deck-form__state--thanks" data-cc-state="thanks" hidden>
					<header class="cc-deck-form__masthead">
						<p class="cc-deck-form__label">Delivered</p>
						<h3 class="cc-deck-form__title">Thank you. The deck is ready.</h3>
					</header>
					<div class="cc-deck-form__thanks-body">
						<p>The private dentistry edition for your market is available below.</p>
						<p>Read it as a private-practice briefing, not a software presentation. It sets out where patient intent leaks, why response speed now matters commercially, how CareConcierge protects the early-stage conversation, and what changed inside an established UK private dental practice.</p>
						<p>The question is simple: how many serious patients are already reaching your practice, but failing to reach the consultation chair?</p>
					</div>

					<a class="cc-button cc-button--primary cc-deck-form__download" href="#" data-cc-deck-link target="_blank" rel="noopener">
						<span data-cc-deck-label>Download the deck</span> <span aria-hidden="true">&rarr;</span>
					</a>

					<a class="cc-button cc-button--ghost cc-deck-form__secondary" href="https://calendly.com/greg-careconcierge/30min" target="_blank" rel="noopener">
						Book a founder briefing <span aria-hidden="true">&rarr;</span>
					</a>

					<p class="cc-deck-form__microcopy">A 30-minute conversation with the founding team. No obligation. No theatre. Apart from the clinical kind, obviously.</p>
				</div>

				<!-- Thank-you state — Other market (no auto download) -->
				<div class="cc-deck-form__state cc-deck-form__state--other" data-cc-state="other" hidden>
					<header class="cc-deck-form__masthead">
						<p class="cc-deck-form__label">Received</p>
						<h3 class="cc-deck-form__title">Thank you. We will send the right edition directly.</h3>
					</header>
					<div class="cc-deck-form__thanks-body">
						<p>Your practice sits outside the three current deck editions, so we will send the most relevant version directly rather than giving you the wrong document with undeserved confidence. Small mercy, but an important one.</p>
					</div>

					<a class="cc-button cc-button--ghost cc-deck-form__secondary" href="https://calendly.com/greg-careconcierge/30min" target="_blank" rel="noopener">
						Book a founder briefing <span aria-hidden="true">&rarr;</span>
					</a>
				</div>
			</aside>
		</div>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
