<?php
/**
 * Title: Section 05 — The Owner’s View (Conversion Intelligence Report)
 * Slug: careconcierge/section-05-report
 * Categories: careconcierge
 * Description: Editorial text on the left; central proof object — the Conversion Intelligence Report — on the right with a TOC-style preview.
 * Inserter: yes
 */
?>
<!-- wp:group {"tagName":"section","className":"cc-section cc-section--report","backgroundColor":"soft-feather","textColor":"ink-blue","layout":{"type":"constrained","contentSize":"100%","wideSize":"100%"}} -->
<section id="report" class="wp-block-group cc-section cc-section--report has-ink-blue-color has-soft-feather-background-color has-text-color has-background">
	<!-- wp:html -->
	<div class="cc-report-grid">
		<div class="cc-report-text cc-reveal">
			<p class="cc-eyebrow">The Owner&rsquo;s View</p>
			<h2>You are not buying software. You are buying the report.</h2>
			<p>Most platforms show activity. CareConcierge is designed to show consequence.</p>
			<p class="cc-report-supporting">Each month, the principal receives a plain-English Conversion Intelligence Report showing what happened at the front end of the practice: what came in, what was answered, what was qualified, what was handed off, which sleeping beauties were reawakened, and where value is still leaking.</p>
			<p class="cc-report-coda">Not a dashboard. Not another login. Not more noise. <em>A report an owner can actually read.</em></p>
			<?php /* TODO: drop the actual eight-page sample PDF at /sample-report.pdf in WP uploads or theme root once the file is supplied. Until then this 404s gracefully. */ ?>
			<a class="cc-button cc-button--ghost" href="/sample-report.pdf" target="_blank" rel="noopener">See a sample report <span aria-hidden="true">&rarr;</span></a>
		</div>

		<aside class="cc-report-artifact cc-reveal" aria-label="Sample monthly report">
			<header class="cc-report-artifact__masthead">
				<div>
					<p class="cc-report-artifact__name">Conversion Intelligence Report</p>
					<p class="cc-report-artifact__sub">For the principal &middot; Sample issue</p>
				</div>
				<p class="cc-report-artifact__date">Monthly</p>
			</header>
			<ol class="cc-report-artifact__list" role="list">
				<li class="cc-report-artifact__row">
					<span class="cc-report-artifact__num">01</span>
					<span class="cc-report-artifact__key">Enquiries handled</span>
					<span class="cc-report-artifact__pages">pp 1&ndash;2</span>
				</li>
				<li class="cc-report-artifact__row">
					<span class="cc-report-artifact__num">02</span>
					<span class="cc-report-artifact__key">Consultations generated</span>
					<span class="cc-report-artifact__pages">pp 3&ndash;4</span>
				</li>
				<li class="cc-report-artifact__row">
					<span class="cc-report-artifact__num">03</span>
					<span class="cc-report-artifact__key">Estimated revenue protected</span>
					<span class="cc-report-artifact__pages">pp 5&ndash;6</span>
				</li>
				<li class="cc-report-artifact__row">
					<span class="cc-report-artifact__num">04</span>
					<span class="cc-report-artifact__key">Lapsed-enquiry value recovered</span>
					<span class="cc-report-artifact__pages">pp 7&ndash;8</span>
				</li>
			</ol>
			<footer class="cc-report-artifact__footer">
				<span>Eight pages</span>
				<span>Plain English</span>
				<span>Delivered to the principal</span>
			</footer>
		</aside>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
