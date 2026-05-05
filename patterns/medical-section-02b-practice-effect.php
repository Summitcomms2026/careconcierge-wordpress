<?php
/**
 * Title: Medical — Section 02b The Practice Effect
 * Slug: careconcierge/medical-section-02b-practice-effect
 * Categories: careconcierge
 * Description: Other Medical practice-effect bridge. 50/50 split with photography left, prose right. Copy adapted from WebCopy_OtherMedical_Page.docx ("front end of the clinic begins to behave like the quality of the care itself").
 * Inserter: yes
 */
?>
<!-- wp:group {"tagName":"section","className":"cc-section cc-section--practice-effect","backgroundColor":"cloud-white","textColor":"ink-blue","layout":{"type":"constrained","contentSize":"100%","wideSize":"100%"}} -->
<section id="practice-effect" class="wp-block-group cc-section cc-section--practice-effect has-ink-blue-color has-cloud-white-background-color has-text-color has-background">
	<!-- wp:html -->
	<div class="cc-practice-effect-grid">
		<div class="cc-practice-effect__visual">
			<figure class="cc-practice-effect__photo cc-practice-effect__photo--landscape cc-reveal cc-reveal--from-left">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photography/practice-effect-landscape.jpg" alt="The clinic in calm operation &mdash; coordinator and patient in conversation" loading="lazy" decoding="async" />
			</figure>
			<figure class="cc-practice-effect__photo cc-practice-effect__photo--portrait cc-reveal cc-reveal--from-bottom">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/medical/medical_practiceeffect.jpg" alt="A specialist clinician at quiet focus inside a well-run clinic" loading="lazy" decoding="async" />
			</figure>
		</div>
		<div class="cc-practice-effect cc-reveal cc-reveal--from-right">
			<p class="cc-eyebrow">The Practice Effect</p>
			<h2>The front end of the clinic begins to behave like the quality of the care itself.</h2>
			<p>Patients feel answered sooner. Coordinators receive warmer handoffs. Principals stop wondering what was missed overnight, over the weekend, or while the team was busy with the patients already inside the clinic.</p>
			<p>This is not about replacing human judgement. It is about protecting human judgement from the noise, delay, and leakage that surround every high-value enquiry.</p>
			<p>When the first response is immediate, intelligent, and regulator-aware, the practice feels more controlled before the patient has even walked through the door.</p>
			<p class="cc-practice-effect__beauties">It also helps the clinic reawaken its <strong>sleeping beauties</strong>: valuable enquiries and cooled patient conversations that were never properly lost, merely left unattended.</p>
		</div>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
