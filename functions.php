<?php
/**
 * CareConcierge theme bootstrap.
 *
 * @package CareConcierge
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'careconcierge_setup' ) ) {
	function careconcierge_setup() {
		load_theme_textdomain( 'careconcierge', get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

		add_editor_style( 'assets/css/main.css' );

		register_block_pattern_category(
			'careconcierge',
			array( 'label' => __( 'CareConcierge', 'careconcierge' ) )
		);
	}
}
add_action( 'after_setup_theme', 'careconcierge_setup' );

if ( ! function_exists( 'careconcierge_asset_version' ) ) {
	/**
	 * mtime-based version for cache-busting during active development.
	 * Falls back to theme version on any read failure.
	 */
	function careconcierge_asset_version( $relative_path ) {
		$full = get_template_directory() . '/' . ltrim( $relative_path, '/' );
		$mtime = @filemtime( $full );
		if ( $mtime ) {
			return (string) $mtime;
		}
		return wp_get_theme()->get( 'Version' );
	}
}

if ( ! function_exists( 'careconcierge_enqueue_assets' ) ) {
	function careconcierge_enqueue_assets() {
		// Adobe Fonts (Typekit). Loaded first so font-family declarations resolve when main.css parses.
		wp_enqueue_style(
			'careconcierge-typekit',
			'https://use.typekit.net/jyc4lck.css',
			array(),
			null
		);

		wp_enqueue_style(
			'careconcierge-main',
			get_template_directory_uri() . '/assets/css/main.css',
			array( 'careconcierge-typekit' ),
			careconcierge_asset_version( 'assets/css/main.css' )
		);

		wp_enqueue_script(
			'careconcierge-main',
			get_template_directory_uri() . '/assets/js/main.js',
			array(),
			careconcierge_asset_version( 'assets/js/main.js' ),
			true
		);

		// Expose admin-ajax URL to the front-end script so the deck-request
		// form can submit cleanly without hard-coding the WP path.
		wp_localize_script(
			'careconcierge-main',
			'CCDeck',
			array(
				'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			)
		);
	}
}
add_action( 'wp_enqueue_scripts', 'careconcierge_enqueue_assets' );

/**
 * Map a market code (AU/UK/US) to its deck PDF URL inside the theme.
 * Returns false for unknown markets (used to drive the "Other" thank-you state).
 */
if ( ! function_exists( 'careconcierge_deck_url_for_market' ) ) {
	function careconcierge_deck_url_for_market( $market ) {
		$map = array(
			'AU' => 'careconcierge-plastic-surgeons-au.pdf',
			'UK' => 'careconcierge-plastic-surgeons-uk.pdf',
			'US' => 'careconcierge-plastic-surgeons-us.pdf',
		);
		$market = strtoupper( (string) $market );
		if ( ! isset( $map[ $market ] ) ) {
			return false;
		}
		return get_template_directory_uri() . '/assets/documents/' . $map[ $market ];
	}
}

/**
 * Map a market code to its human label (for emails + the dynamic CTA).
 */
if ( ! function_exists( 'careconcierge_deck_label_for_market' ) ) {
	function careconcierge_deck_label_for_market( $market ) {
		$labels = array(
			'AU'    => 'Australia',
			'UK'    => 'United Kingdom',
			'US'    => 'United States',
			'OTHER' => 'Other',
		);
		$market = strtoupper( (string) $market );
		return isset( $labels[ $market ] ) ? $labels[ $market ] : '';
	}
}

/**
 * AJAX handler for the "Request the Deck" form.
 * - Verifies the cc_deck_request nonce.
 * - Validates required fields server-side.
 * - Sends an internal notification to greg@careconcierge.health.
 * - Sends a confirmation email to the requester (with the deck URL when applicable).
 * - Returns the deck URL and market label so the JS can reveal the right CTA.
 */
if ( ! function_exists( 'careconcierge_handle_deck_request' ) ) {
	function careconcierge_handle_deck_request() {
		// Nonce
		$nonce = isset( $_POST['cc_deck_nonce'] ) ? sanitize_text_field( wp_unslash( $_POST['cc_deck_nonce'] ) ) : '';
		if ( ! wp_verify_nonce( $nonce, 'cc_deck_request' ) ) {
			wp_send_json_error( array( 'message' => 'Security check failed. Please reload and try again.' ), 400 );
		}

		// Pull + sanitise fields
		$fields = array(
			'full_name'        => isset( $_POST['full_name'] )        ? sanitize_text_field( wp_unslash( $_POST['full_name'] ) )        : '',
			'practice_name'    => isset( $_POST['practice_name'] )    ? sanitize_text_field( wp_unslash( $_POST['practice_name'] ) )    : '',
			'role'             => isset( $_POST['role'] )             ? sanitize_text_field( wp_unslash( $_POST['role'] ) )             : '',
			'market'           => isset( $_POST['market'] )           ? sanitize_text_field( wp_unslash( $_POST['market'] ) )           : '',
			'practice_website' => isset( $_POST['practice_website'] ) ? sanitize_text_field( wp_unslash( $_POST['practice_website'] ) ) : '',
			'email'            => isset( $_POST['email'] )            ? sanitize_email( wp_unslash( $_POST['email'] ) )                 : '',
			'challenge'        => isset( $_POST['challenge'] )        ? sanitize_text_field( wp_unslash( $_POST['challenge'] ) )        : '',
			'volume'           => isset( $_POST['volume'] )           ? sanitize_text_field( wp_unslash( $_POST['volume'] ) )           : '',
			'page_url'         => isset( $_POST['cc_deck_page_url'] ) ? esc_url_raw( wp_unslash( $_POST['cc_deck_page_url'] ) )         : '',
		);

		// Server-side validation — every visible required field must be present.
		$required = array( 'full_name', 'practice_name', 'role', 'market', 'practice_website', 'email', 'challenge', 'volume' );
		foreach ( $required as $key ) {
			if ( '' === $fields[ $key ] ) {
				wp_send_json_error( array( 'message' => 'Please complete every required field.' ), 422 );
			}
		}
		if ( ! is_email( $fields['email'] ) ) {
			wp_send_json_error( array( 'message' => 'Please enter a valid email address.' ), 422 );
		}
		$market = strtoupper( $fields['market'] );
		if ( ! in_array( $market, array( 'AU', 'UK', 'US', 'OTHER' ), true ) ) {
			wp_send_json_error( array( 'message' => 'Unrecognised market.' ), 422 );
		}

		$market_label = careconcierge_deck_label_for_market( $market );
		$deck_url     = careconcierge_deck_url_for_market( $market );    // false for OTHER

		// ---- Notification to Greg
		$to_admin      = 'greg@careconcierge.health';
		$subject_admin = sprintf( 'New CareConcierge deck request — %s', $fields['practice_name'] );
		$lines         = array(
			'Full name: '              . $fields['full_name'],
			'Practice name: '          . $fields['practice_name'],
			'Role: '                   . $fields['role'],
			'Country / market: '       . $market_label . ' (' . $market . ')',
			'Practice website: '       . $fields['practice_website'],
			'Email: '                  . $fields['email'],
			'Main enquiry challenge: ' . $fields['challenge'],
			'Monthly enquiry volume: ' . $fields['volume'],
			'',
			'Page URL: '               . ( $fields['page_url'] ? $fields['page_url'] : '(not supplied)' ),
			'Submitted: '              . current_time( 'Y-m-d H:i:s' ) . ' (' . wp_timezone_string() . ')',
		);
		$body_admin = implode( "\r\n", $lines );
		$headers    = array(
			'Reply-To: ' . $fields['full_name'] . ' <' . $fields['email'] . '>',
		);
		$sent_admin = wp_mail( $to_admin, $subject_admin, $body_admin, $headers );

		// ---- Optional confirmation to the requester (best-effort).
		$first_name      = strtok( $fields['full_name'], ' ' );
		$subject_user    = 'Your CareConcierge plastic surgery deck';
		$user_body_lines = array(
			'Dear ' . ( $first_name ? $first_name : 'colleague' ) . ',',
			'',
			'Thank you for requesting the CareConcierge plastic surgery deck.',
		);
		if ( $deck_url ) {
			$user_body_lines[] = '';
			$user_body_lines[] = 'You can download the relevant edition (' . $market_label . ') here:';
			$user_body_lines[] = $deck_url;
		} else {
			$user_body_lines[] = '';
			$user_body_lines[] = 'Your practice sits outside our three current deck editions (Australia, United Kingdom, United States), so we will send the most relevant version directly rather than giving you the wrong document with undeserved confidence.';
		}
		$user_body_lines = array_merge( $user_body_lines, array(
			'',
			'The deck sets out the commercial case for elevated patient communication in private surgical practice — where enquiries are arriving, where serious intent is often lost, how AI-assisted response can stay within approved clinical boundaries, and what changes when every enquiry is captured, qualified and handed over properly.',
			'',
			'The deck is best read as a private-practice briefing rather than a software presentation. The central question is simple: how much patient value is already reaching your practice, but failing to reach the consultation room?',
			'',
			'If it raises the right questions, you can book a short founder briefing here:',
			'https://calendly.com/greg-careconcierge/30min',
			'',
			'Best regards,',
			'',
			'Gregory Gray',
			'Commercial Co-Founder',
			'CareConcierge',
		) );
		$user_headers = array( 'From: CareConcierge <greg@careconcierge.health>' );
		wp_mail( $fields['email'], $subject_user, implode( "\r\n", $user_body_lines ), $user_headers );

		// ---- Response to the browser
		wp_send_json_success( array(
			'state'       => $deck_url ? 'thanks' : 'other',
			'market'      => $market,
			'marketLabel' => $market_label,
			'deckUrl'     => $deck_url ? $deck_url : '',
			'adminMailed' => (bool) $sent_admin,
		) );
	}
}
add_action( 'wp_ajax_cc_deck_request',        'careconcierge_handle_deck_request' );
add_action( 'wp_ajax_nopriv_cc_deck_request', 'careconcierge_handle_deck_request' );

/**
 * Preconnect Adobe Fonts hosts to shave round-trip cost.
 */
if ( ! function_exists( 'careconcierge_resource_hints' ) ) {
	function careconcierge_resource_hints( $urls, $relation_type ) {
		if ( 'preconnect' === $relation_type ) {
			$urls[] = array( 'href' => 'https://use.typekit.net', 'crossorigin' );
			$urls[] = array( 'href' => 'https://p.typekit.net',   'crossorigin' );
		}
		return $urls;
	}
}
add_filter( 'wp_resource_hints', 'careconcierge_resource_hints', 10, 2 );

/**
 * Active audience vertical for the request.
 * Returns one of: surgeons (default), dentists, medical.
 */
if ( ! function_exists( 'careconcierge_current_audience' ) ) {
	function careconcierge_current_audience() {
		$path = isset( $_SERVER['REQUEST_URI'] ) ? wp_parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) : '/';
		$path = trim( (string) $path, '/' );
		if ( $path === 'dentists' )   return 'dentists';
		if ( $path === 'medical' )    return 'medical';
		return 'surgeons';
	}
}

if ( ! function_exists( 'careconcierge_body_classes' ) ) {
	function careconcierge_body_classes( $classes ) {
		$classes[] = 'cc-vertical-' . careconcierge_current_audience();
		return $classes;
	}
}
add_filter( 'body_class', 'careconcierge_body_classes' );
