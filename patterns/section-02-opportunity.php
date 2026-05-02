<?php
/**
 * Title: Section 02 — The Hidden Leak (Opportunity)
 * Slug: careconcierge/section-02-opportunity
 * Categories: careconcierge
 * Description: The quiet leak between enquiry and consultation. Editorial text on the left, image placeholder + regulatory credibility panel on the right.
 * Inserter: yes
 */
?>
<!-- wp:group {"tagName":"section","className":"cc-section cc-section--opportunity","backgroundColor":"soft-cloud","textColor":"ink-blue","layout":{"type":"constrained","contentSize":"100%","wideSize":"100%"}} -->
<section id="opportunity" class="wp-block-group cc-section cc-section--opportunity has-ink-blue-color has-soft-cloud-background-color has-text-color has-background">
	<!-- wp:html -->
	<div class="cc-opportunity-grid">
		<div class="cc-opportunity-text cc-reveal">
			<p class="cc-eyebrow">The Hidden Leak</p>
			<h2>The most expensive gap in private practice is no longer visibility. It is response.</h2>
			<p>Private surgeons do not lose every opportunity in public. The real leak is quieter. It happens after hours, between procedures, across inboxes, in hesitant WhatsApp messages, cold web enquiries, half-qualified leads, and patient conversations that never reach the coordinator with enough context to act.</p>
			<p>Advertising can create demand. It cannot protect it. Once a patient raises their hand, speed, tone, judgement, and follow-through become the commercial difference.</p>
			<p>CareConcierge was built for that gap.</p>
		</div>
		<div class="cc-opportunity-aside">
			<?php /* Replace .cc-img-ph with <img src="…" alt="…" class="cc-img cc-img-ph--portrait"> when supplied. Suggested: a tonal architectural / clinic-interior photograph (e.g. supplied via /wp-content/themes/careconcierge/assets/images/placeholders/opportunity.jpg). */ ?>
			<div class="cc-img-ph cc-img-ph--portrait cc-reveal" role="img" aria-label="Practice atmosphere placeholder — image to follow">
				<span class="cc-img-ph__caption">Practice atmosphere &mdash; image to follow</span>
			</div>
			<aside class="cc-proof-panel cc-reveal" aria-label="Regulatory environments considered">
				<p class="cc-proof-panel__heading">Built for the regulatory reality of private practice.</p>
				<div class="cc-proof-row">
					<span class="cc-proof-row__code">AHPRA</span>
					<p class="cc-proof-row__name">Australian Health Practitioner Regulation Agency</p>
				</div>
				<div class="cc-proof-row">
					<span class="cc-proof-row__code">GMC</span>
					<p class="cc-proof-row__name">General Medical Council, United Kingdom</p>
				</div>
				<div class="cc-proof-row">
					<span class="cc-proof-row__code">ASA</span>
					<p class="cc-proof-row__name">Advertising Standards Authority, United Kingdom</p>
				</div>
				<div class="cc-proof-row">
					<span class="cc-proof-row__code">HIPAA</span>
					<p class="cc-proof-row__name">Health Insurance Portability and Accountability Act, United States</p>
				</div>
				<p class="cc-proof-panel__disclaimer">References indicate regulatory environments considered in deployment; they do not imply endorsement, approval, partnership, certification, or accreditation by these bodies.</p>
			</aside>
		</div>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
