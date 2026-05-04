<?php
/**
 * Title: Section 01 — Hero
 * Slug: careconcierge/section-01-hero
 * Categories: careconcierge
 * Description: Eucalyptus hero with eyebrow, revised copy, ghost-style CTA, image montage on the right, and the System Live panel integrated as a floating overlay on the montage.
 * Inserter: yes
 */
?>
<!-- wp:group {"tagName":"section","className":"cc-section cc-section--hero","backgroundColor":"eucalyptus","textColor":"ink-blue","layout":{"type":"constrained","contentSize":"100%","wideSize":"100%"}} -->
<section id="hero" class="wp-block-group cc-section cc-section--hero has-ink-blue-color has-eucalyptus-background-color has-text-color has-background">
	<!-- wp:html -->
	<div class="cc-hero-grid">
		<div class="cc-hero-grid__main cc-reveal">
			<p class="cc-eyebrow">Meet Your CareConcierge</p>
			<h1 class="cc-hero-headline">The invisible layer behind the more responsive plastic surgery practice.</h1>
			<p class="cc-hero-subhead">Every serious enquiry answered. Every lead qualified. Every handoff ready before the conversation goes cold.</p>
			<p class="cc-hero-subhead cc-hero-subhead--secondary">CareConcierge protects the moment between patient interest and booked consultation &mdash; the moment where even premium practices quietly lose revenue, reputation and control. And prospects lay in your database like <strong>sleeping beauties</strong>, waiting to be awoken.</p>
			<a class="cc-button cc-button--ghost cc-hero-cta" href="#walkthrough">Book Your Meeting <span aria-hidden="true">&rarr;</span></a>
			<p class="cc-hero-qualifier">Patient-Intent Infrastructure for Plastic Surgeons.</p>
		</div>
		<div class="cc-hero-visual cc-reveal-group">
			<figure class="cc-hero-montage__primary cc-img cc-reveal">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photography/hero-2.jpg" alt="A patient lit by a phone screen at night, the moment a serious enquiry sits unanswered" loading="eager" decoding="async" />
			</figure>
			<figure class="cc-hero-montage__secondary cc-img cc-reveal">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photography/hero-1.jpg" alt="Patient communication infrastructure at work" loading="eager" decoding="async" />
			</figure>
			<figure class="cc-hero-montage__tertiary cc-img cc-reveal">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photography/hero-3.jpg" alt="A practitioner in conversation with a patient" loading="eager" decoding="async" />
			</figure>
			<aside class="cc-system-signal cc-system-signal--integrated cc-reveal" aria-label="System overview">
				<p class="cc-system-signal__label">System Live</p>
				<ol class="cc-system-signal__list" role="list">
					<li class="cc-system-signal__item"><span class="cc-system-signal__dot" aria-hidden="true"></span>Enquiry received</li>
					<li class="cc-system-signal__item"><span class="cc-system-signal__dot" aria-hidden="true"></span>Response sent</li>
					<li class="cc-system-signal__item"><span class="cc-system-signal__dot" aria-hidden="true"></span>Lead qualified</li>
					<li class="cc-system-signal__item"><span class="cc-system-signal__dot" aria-hidden="true"></span>Handoff ready</li>
					<li class="cc-system-signal__item"><span class="cc-system-signal__dot" aria-hidden="true"></span>Consultation booked</li>
				</ol>
				<p class="cc-system-signal__meta"><span>24 / 7 / 365</span></p>
			</aside>
		</div>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
