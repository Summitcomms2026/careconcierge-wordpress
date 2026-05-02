<?php
/**
 * Title: Section 01 — Hero
 * Slug: careconcierge/section-01-hero
 * Categories: careconcierge
 * Description: Eucalyptus hero with asymmetric grid: headline + CTA on the left, abstract system signal on the right.
 * Inserter: yes
 */
?>
<!-- wp:group {"tagName":"section","className":"cc-section cc-section--hero","backgroundColor":"eucalyptus","textColor":"ink-blue","layout":{"type":"constrained","contentSize":"100%","wideSize":"100%"}} -->
<section id="hero" class="wp-block-group cc-section cc-section--hero has-ink-blue-color has-eucalyptus-background-color has-text-color has-background">
	<!-- wp:html -->
	<div class="cc-hero-grid">
		<div class="cc-hero-grid__main cc-reveal">
			<h1 class="cc-hero-headline">The patient communication infrastructure for private elective practice.</h1>
			<p class="cc-hero-subhead">Every enquiry answered. Every lead qualified. Every handoff ready on your desk &mdash; while you&rsquo;re in theatre.</p>
			<a class="cc-button cc-button--primary cc-hero-cta" href="#walkthrough">Book a thirty-minute walkthrough <span aria-hidden="true">&rarr;</span></a>
		</div>
		<aside class="cc-system-signal cc-reveal" aria-label="System overview">
			<p class="cc-system-signal__label">System</p>
			<ol class="cc-system-signal__list" role="list">
				<li class="cc-system-signal__item"><span class="cc-system-signal__dot" aria-hidden="true"></span>Enquiry received</li>
				<li class="cc-system-signal__item"><span class="cc-system-signal__dot" aria-hidden="true"></span>Response sent</li>
				<li class="cc-system-signal__item"><span class="cc-system-signal__dot" aria-hidden="true"></span>Lead qualified</li>
				<li class="cc-system-signal__item"><span class="cc-system-signal__dot" aria-hidden="true"></span>Handoff ready</li>
				<li class="cc-system-signal__item"><span class="cc-system-signal__dot" aria-hidden="true"></span>Consultation booked</li>
			</ol>
			<p class="cc-system-signal__meta"><span>Live</span><span>24 / 7 / 365</span></p>
		</aside>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
