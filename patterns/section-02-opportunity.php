<?php
/**
 * Title: Section 02 — The Opportunity
 * Slug: careconcierge/section-02-opportunity
 * Categories: careconcierge
 * Description: Editorial text on the left, image placeholder + refined regulator credibility panel on the right.
 * Inserter: yes
 */
?>
<!-- wp:group {"tagName":"section","className":"cc-section cc-section--opportunity","backgroundColor":"soft-cloud","textColor":"ink-blue","layout":{"type":"constrained","contentSize":"100%","wideSize":"100%"}} -->
<section id="opportunity" class="wp-block-group cc-section cc-section--opportunity has-ink-blue-color has-soft-cloud-background-color has-text-color has-background">
	<!-- wp:html -->
	<div class="cc-opportunity-grid">
		<div class="cc-opportunity-text cc-reveal">
			<p class="cc-eyebrow">The Opportunity</p>
			<h2>The competitive edge is no longer advertising.</h2>
			<p>ASA, GMC and AHPRA guidance now tightly restrict what private surgical practice can say, and how it can say it. The edge belongs to whoever responds fastest, most intelligently, at any hour.</p>
			<p>The mover wins the consultation. We built CareConcierge so the mover is, reliably, you.</p>
		</div>
		<div class="cc-opportunity-aside">
			<?php /* Replace .cc-img-ph with <img src="…" alt="…" class="cc-img cc-img-ph--portrait"> when supplied. Suggested: a tonal architectural / clinic-interior photograph (e.g. supplied via /wp-content/themes/careconcierge/assets/images/placeholders/opportunity.jpg). */ ?>
			<div class="cc-img-ph cc-img-ph--portrait cc-reveal" role="img" aria-label="Editorial photograph placeholder — atmospheric clinic interior to follow">
				<span class="cc-img-ph__caption">Editorial photograph &mdash; to follow</span>
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
