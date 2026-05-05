<?php
/**
 * Title: Medical — Section 02 The Hidden Leak
 * Slug: careconcierge/medical-section-02-opportunity
 * Categories: careconcierge
 * Description: Other Medical hidden-leak opportunity. Mirrors the master with copy adapted from WebCopy_OtherMedical_Page.docx. Same regulator strip as the surgeons master (AHPRA / GMC / ASA / HIPAA).
 * Inserter: yes
 */
?>
<!-- wp:group {"tagName":"section","className":"cc-section cc-section--opportunity","backgroundColor":"soft-cloud","textColor":"ink-blue","layout":{"type":"constrained","contentSize":"100%","wideSize":"100%"}} -->
<section id="opportunity" class="wp-block-group cc-section cc-section--opportunity has-ink-blue-color has-soft-cloud-background-color has-text-color has-background">
	<!-- wp:html -->
	<div class="cc-opportunity-grid">
		<div class="cc-opportunity-text cc-reveal cc-reveal--from-left">
			<p class="cc-eyebrow">The Hidden Leak</p>
			<h2>The most expensive gap in private practice is no longer visibility. It is response.</h2>
			<p>Private specialists do not lose every opportunity in public. The real leak is quieter. It happens after hours, between consultations, across inboxes, in hesitant WhatsApp messages, cold web enquiries, half-qualified leads, and patient conversations that never reach the coordinator with enough context to act.</p>
			<p>Advertising can create demand. It cannot protect it. Once a patient raises their hand, <strong>speed, tone, judgement, and follow-through</strong> become the commercial difference.</p>
			<p>CareConcierge was built for that gap.</p>
			<a class="cc-button cc-button--ghost cc-opportunity-text__cta" href="#deck-request">Download deck <span aria-hidden="true">&rarr;</span></a>
		</div>
		<figure class="cc-img cc-img--portrait cc-reveal cc-reveal--from-right">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/medical/medical_hiddenleak.jpg" alt="A quiet specialist clinic moment — the after-hours space where a patient enquiry sits unanswered" loading="lazy" decoding="async" />
		</figure>
	</div>

	<aside class="cc-regulator-strip" aria-label="Regulatory environments considered">
		<p class="cc-regulator-strip__heading cc-reveal">Built for the regulatory reality of private practice.</p>
		<ul class="cc-regulator-strip__list cc-reveal-group" role="list">
			<li class="cc-regulator-strip__item cc-reveal">
				<img class="cc-regulator-strip__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/regulators/ahpra.png" alt="" loading="lazy" decoding="async" />
				<span class="cc-regulator-strip__name">AHPRA &middot; Australia</span>
			</li>
			<li class="cc-regulator-strip__item cc-reveal">
				<img class="cc-regulator-strip__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/regulators/gmc.png" alt="" loading="lazy" decoding="async" />
				<span class="cc-regulator-strip__name">GMC &middot; United Kingdom</span>
			</li>
			<li class="cc-regulator-strip__item cc-reveal">
				<img class="cc-regulator-strip__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/regulators/asa.png" alt="" loading="lazy" decoding="async" />
				<span class="cc-regulator-strip__name">ASA &middot; United Kingdom</span>
			</li>
			<li class="cc-regulator-strip__item cc-reveal">
				<img class="cc-regulator-strip__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/regulators/hipaa.png" alt="" loading="lazy" decoding="async" />
				<span class="cc-regulator-strip__name">HIPAA &middot; United States</span>
			</li>
		</ul>
		<p class="cc-regulator-strip__disclaimer cc-reveal">References indicate regulatory environments considered in deployment; they do not imply endorsement, approval, partnership, certification, or accreditation by these bodies.</p>
	</aside>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
