<?php
/**
 * Title: Section 08 — The Founder Briefing (Walkthrough)
 * Slug: careconcierge/section-08-walkthrough
 * Categories: careconcierge
 * Description: Closing section — photo + intro across the top, real Calendly inline embed below for booking the founder briefing, email fallback at the foot.
 * Inserter: yes
 */
?>
<!-- wp:group {"tagName":"section","className":"cc-section cc-section--walkthrough","backgroundColor":"soft-cloud","textColor":"ink-blue","layout":{"type":"constrained","contentSize":"100%","wideSize":"100%"}} -->
<section id="walkthrough" class="wp-block-group cc-section cc-section--walkthrough has-ink-blue-color has-soft-cloud-background-color has-text-color has-background">
	<!-- wp:html -->
	<div class="cc-walk-grid">
		<div class="cc-walk-grid__hero">
			<figure class="cc-walk__photo cc-reveal cc-reveal--from-left">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photography/founder-briefing.jpg" alt="A founder at the table during a briefing session — laptop, notebook, calm focus" loading="lazy" decoding="async" />
			</figure>
			<div class="cc-walk__intro cc-reveal cc-reveal--from-right">
				<p class="cc-eyebrow">The Founder Briefing</p>
				<h2>Thirty minutes. Video. With a founder.</h2>
				<p>This is not a product demo. It is a <strong>founder-led diagnosis</strong> of the gap between enquiry and consultation in your practice.</p>
				<p>In thirty minutes, we look at how patients currently enter your world, where response breaks down, how much burden sits with the front desk or coordinator, where dormant value may already sit in your enquiry history, and whether CareConcierge is likely to be useful. If it is not the right fit, we will say so.</p>
				<p class="cc-walk__supporting">There is no sales team. The conversation either earns the next conversation, or it does not.</p>
			</div>
		</div>

		<div class="cc-walk__calendly cc-reveal cc-reveal--from-bottom" aria-label="Book the founder briefing">
			<div class="calendly-inline-widget" data-url="https://calendly.com/greg-careconcierge/30min" style="min-width:320px;height:600px;"></div>
			<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
		</div>

		<p class="cc-walk__email cc-reveal">Prefer to send a question first? Write to <a href="mailto:care@careconcierge.health">care@careconcierge.health</a>.</p>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
