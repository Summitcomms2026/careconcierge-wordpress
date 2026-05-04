<?php
/**
 * Title: Section 05 — The Owner’s View (Conversion Intelligence Report)
 * Slug: careconcierge/section-05-report
 * Categories: careconcierge
 * Description: Editorial text on the left; on the right, a photographic surface (opportunity1.jpg) with the Conversion Intelligence Report as a floating overlay panel sized and styled in the spirit of the hero’s System Live signal.
 * Inserter: yes
 */
?>
<!-- wp:group {"tagName":"section","className":"cc-section cc-section--report","backgroundColor":"soft-feather","textColor":"ink-blue","layout":{"type":"constrained","contentSize":"100%","wideSize":"100%"}} -->
<section id="report" class="wp-block-group cc-section cc-section--report has-ink-blue-color has-soft-feather-background-color has-text-color has-background">
	<!-- wp:html -->
	<div class="cc-report-grid">
		<div class="cc-report-text cc-reveal cc-reveal--from-left">
			<p class="cc-eyebrow">The Owner&rsquo;s View</p>
			<h2>You are not buying software. You are buying the owner&rsquo;s view.</h2>
			<p>Most platforms show activity. CareConcierge is designed to show consequence.</p>
			<p class="cc-report-supporting">Each month, the principal receives a plain-English Conversion Intelligence Report &mdash; what came in, what was qualified, what was handed off, which <strong>sleeping beauties</strong> were reawakened, and where <strong>value is still leaking</strong>.</p>
			<p class="cc-report-coda">Not a dashboard. Not another login. Not more noise. A report an owner can actually read.</p>
			<a class="cc-button cc-button--ghost" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/documents/sample-report.pdf" target="_blank" rel="noopener">See a sample report <span aria-hidden="true">&rarr;</span></a>
		</div>

		<div class="cc-report-visual">
			<figure class="cc-report-visual__photo cc-reveal cc-reveal--from-right">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photography/report-backdrop.jpg" alt="A practice principal at calm focus, the moment a monthly report lands" loading="lazy" decoding="async" />
			</figure>
			<aside class="cc-report-artifact cc-reveal cc-reveal--from-bottom" aria-label="Sample monthly report">
				<header class="cc-report-artifact__masthead">
					<p class="cc-report-artifact__name">Conversion Intelligence Report</p>
					<p class="cc-report-artifact__sub">For the principal &middot; Sample issue</p>
				</header>
				<ol class="cc-report-artifact__list" role="list">
					<li class="cc-report-artifact__row">
						<span class="cc-report-artifact__num">01</span>
						<span class="cc-report-artifact__key">Enquiries handled</span>
					</li>
					<li class="cc-report-artifact__row">
						<span class="cc-report-artifact__num">02</span>
						<span class="cc-report-artifact__key">Consultations generated</span>
					</li>
					<li class="cc-report-artifact__row">
						<span class="cc-report-artifact__num">03</span>
						<span class="cc-report-artifact__key">Estimated revenue protected</span>
					</li>
					<li class="cc-report-artifact__row">
						<span class="cc-report-artifact__num">04</span>
						<span class="cc-report-artifact__key">Lapsed-enquiry value recovered</span>
					</li>
				</ol>
				<footer class="cc-report-artifact__footer">
					<span>Delivered to the Principal, Monthly.</span>
				</footer>
			</aside>
		</div>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
