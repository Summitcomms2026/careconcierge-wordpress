<?php
/**
 * CareConcierge — analytics placeholder.
 *
 * Intentionally does not enqueue any third-party script. When an
 * analytics provider (Plausible or GA4) is chosen and an ID is
 * supplied, set CARECONCIERGE_ANALYTICS_PROVIDER and the matching
 * ID constant in wp-config.php (or via this file's filter hook) and
 * the appropriate snippet will be printed into <head>.
 *
 * Tracked events (to be wired by the chosen provider):
 *   - hero "Book Your Meeting" CTA               (#hero .cc-hero-cta)
 *   - investment "Book a founder briefing" CTA   (#investment .cc-invest__cta)
 *   - sample report click                        (#report a[href$="sample-report.pdf"])
 *   - deck request submit                        (cc_deck_request AJAX success)
 *   - deck download click                        (#deck-request [data-cc-deck-link])
 *   - Calendly interaction                       (Calendly inline widget event API)
 *   - email click                                (a[href^="mailto:"])
 *   - audience selector clicks                   (.cc-audience-link)
 *   - accordion opens                            (.cc-faq__summary click → data-cc-open=true)
 *
 * @package CareConcierge
 */

defined( 'ABSPATH' ) || exit;

/**
 * TODO — once an analytics provider is selected, set:
 *   define( 'CARECONCIERGE_ANALYTICS_PROVIDER', 'plausible' );  // or 'ga4'
 *   define( 'CARECONCIERGE_ANALYTICS_DOMAIN', 'careconcierge.health' );  // for Plausible
 *   define( 'CARECONCIERGE_ANALYTICS_GA4_ID', 'G-XXXXXXXXXX' );          // for GA4
 *
 * The function below will then emit the chosen snippet exactly once,
 * with no inline secrets in source-controlled files.
 */
if ( ! function_exists( 'careconcierge_print_analytics' ) ) {
	function careconcierge_print_analytics() {
		$provider = defined( 'CARECONCIERGE_ANALYTICS_PROVIDER' ) ? CARECONCIERGE_ANALYTICS_PROVIDER : '';
		if ( ! $provider ) {
			/* No provider configured yet. Print a one-line HTML
			   comment so a future reader of the source can see the
			   integration point exists without revealing internals. */
			echo "<!-- CareConcierge analytics: provider not configured (see inc/analytics.php) -->\n";
			return;
		}

		switch ( strtolower( $provider ) ) {
			case 'plausible':
				$domain = defined( 'CARECONCIERGE_ANALYTICS_DOMAIN' )
					? CARECONCIERGE_ANALYTICS_DOMAIN
					: 'careconcierge.health';
				printf(
					"\n<!-- CareConcierge analytics: Plausible -->\n<script defer data-domain=\"%s\" src=\"https://plausible.io/js/script.tagged-events.js\"></script>\n",
					esc_attr( $domain )
				);
				break;

			case 'ga4':
				$id = defined( 'CARECONCIERGE_ANALYTICS_GA4_ID' )
					? CARECONCIERGE_ANALYTICS_GA4_ID
					: '';
				if ( ! preg_match( '/^G-[A-Z0-9]+$/', $id ) ) {
					echo "<!-- CareConcierge analytics: GA4 ID missing or malformed -->\n";
					return;
				}
				printf(
					"\n<!-- CareConcierge analytics: GA4 -->\n<script async src=\"https://www.googletagmanager.com/gtag/js?id=%s\"></script>\n<script>\nwindow.dataLayer = window.dataLayer || [];\nfunction gtag(){dataLayer.push(arguments);}\ngtag('js', new Date());\ngtag('config', '%s', { 'anonymize_ip': true });\n</script>\n",
					esc_attr( $id ),
					esc_attr( $id )
				);
				break;
		}
	}
}
add_action( 'wp_head', 'careconcierge_print_analytics', 9 );
