<?php
/**
 * CareConcierge — SEO metadata.
 *
 * Prints page title, meta description, canonical URL, Open Graph and
 * Twitter card tags into <head>. No SEO plugin required. No visible
 * page copy is changed.
 *
 * Per-URL metadata is resolved by careconcierge_seo_meta_for_request().
 * Add new entries to that switch when new vertical pages are cloned.
 *
 * @package CareConcierge
 */

defined( 'ABSPATH' ) || exit;

/**
 * Production canonical host. Update if the production hostname changes.
 * Used by canonical, OG, and Twitter URL builders so the same value
 * appears in every metadata tag and never drifts.
 */
if ( ! defined( 'CARECONCIERGE_CANONICAL_HOST' ) ) {
	define( 'CARECONCIERGE_CANONICAL_HOST', 'https://careconcierge.health' );
}

if ( ! function_exists( 'careconcierge_seo_meta_for_request' ) ) {
	/**
	 * Resolve the SEO metadata for the current request.
	 * Returns an associative array consumed by every metadata printer.
	 *
	 * Per the brief, the home page renders the same composition as
	 * /surgeons/ while that is the master vertical, so its canonical
	 * points at /surgeons/ to avoid duplicate-content confusion. The
	 * /surgeons/ URL is its own canonical.
	 *
	 * @return array {
	 *     @type string $title        Document title (drives <title> + og:title).
	 *     @type string $description  Meta description.
	 *     @type string $canonical    Absolute canonical URL.
	 *     @type string $og_type      Open Graph type (e.g. website).
	 *     @type string $og_image     Absolute URL of the social-share image.
	 *     @type bool   $robots_noindex  True to emit noindex,nofollow.
	 * }
	 */
	function careconcierge_seo_meta_for_request() {
		$path = isset( $_SERVER['REQUEST_URI'] ) ? wp_parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) : '/';
		$path = '/' . trim( (string) $path, '/' );
		if ( '/' === $path && isset( $_SERVER['REQUEST_URI'] ) && '/' !== rtrim( $_SERVER['REQUEST_URI'], '?' ) && '' !== trim( wp_parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) ?? '', '/' ) ) {
			$path = '/' . trim( wp_parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ), '/' );
		}

		$site_name        = 'CareConcierge Health';
		$default_image    = CARECONCIERGE_CANONICAL_HOST . '/wp-content/themes/careconcierge/assets/images/photography/deck.jpg';

		$surgeons_title       = 'CareConcierge Health | Patient Communication Infrastructure for Private Surgical Practices';
		$surgeons_description = 'Patient communication infrastructure for private elective practices. Every serious enquiry answered, every lead qualified, every handoff ready before the conversation goes cold.';

		switch ( $path ) {
			case '/surgeons':
			case '/surgeons/':
				return array(
					'title'         => $surgeons_title,
					'description'   => $surgeons_description,
					'canonical'     => CARECONCIERGE_CANONICAL_HOST . '/surgeons/',
					'og_type'       => 'website',
					'og_image'      => $default_image,
					'robots_noindex'=> false,
				);
			case '/':
				/* Home renders the surgeons composition as the master page
				   while only the surgeons vertical is live. Canonicalise
				   home → /surgeons/ to keep duplicate-content noise out
				   of search until additional verticals exist. */
				return array(
					'title'         => $surgeons_title,
					'description'   => $surgeons_description,
					'canonical'     => CARECONCIERGE_CANONICAL_HOST . '/surgeons/',
					'og_type'       => 'website',
					'og_image'      => $default_image,
					'robots_noindex'=> false,
				);
		}

		/* Fallback for any other URL — uses WP's title and a quiet
		   description; no noindex unless explicitly required by the
		   page. */
		return array(
			'title'         => wp_get_document_title(),
			'description'   => $surgeons_description,
			'canonical'     => CARECONCIERGE_CANONICAL_HOST . esc_url_raw( $path ),
			'og_type'       => 'website',
			'og_image'      => $default_image,
			'robots_noindex'=> false,
		);
	}
}

/**
 * Filter the WP-generated <title> so the surgeons / home pages use
 * the master title verbatim. Other URLs fall through to WP defaults.
 */
if ( ! function_exists( 'careconcierge_filter_document_title_parts' ) ) {
	function careconcierge_filter_document_title_parts( $parts ) {
		$meta = careconcierge_seo_meta_for_request();
		$path = isset( $_SERVER['REQUEST_URI'] ) ? wp_parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) : '/';
		$path = '/' . trim( (string) $path, '/' );

		if ( in_array( $path, array( '/', '/surgeons', '/surgeons/' ), true ) ) {
			/* Use the full master title verbatim and suppress the
			   automatic " — site name" suffix WP would otherwise add. */
			$parts['title']   = $meta['title'];
			unset( $parts['site'], $parts['tagline'] );
		}
		return $parts;
	}
}
add_filter( 'document_title_parts', 'careconcierge_filter_document_title_parts' );

/* Drop the title separator for our governed pages — the master title
   contains its own " | " so no separator is required. */
if ( ! function_exists( 'careconcierge_filter_document_title_separator' ) ) {
	function careconcierge_filter_document_title_separator( $sep ) {
		$path = isset( $_SERVER['REQUEST_URI'] ) ? wp_parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) : '/';
		$path = '/' . trim( (string) $path, '/' );
		if ( in_array( $path, array( '/', '/surgeons', '/surgeons/' ), true ) ) {
			return '';
		}
		return $sep;
	}
}
add_filter( 'document_title_separator', 'careconcierge_filter_document_title_separator' );

/**
 * Print SEO meta tags into <head>. Hooked early so they appear before
 * Typekit and the main stylesheet — keeps social-scraper crawlers
 * happy on small responses.
 */
if ( ! function_exists( 'careconcierge_print_meta_tags' ) ) {
	function careconcierge_print_meta_tags() {
		$meta = careconcierge_seo_meta_for_request();

		echo "\n<!-- CareConcierge SEO -->\n";

		printf(
			"<meta name=\"description\" content=\"%s\" />\n",
			esc_attr( $meta['description'] )
		);

		printf(
			"<link rel=\"canonical\" href=\"%s\" />\n",
			esc_url( $meta['canonical'] )
		);

		if ( ! empty( $meta['robots_noindex'] ) ) {
			echo "<meta name=\"robots\" content=\"noindex,nofollow\" />\n";
		}

		/* Open Graph */
		printf(
			"<meta property=\"og:site_name\" content=\"%s\" />\n",
			esc_attr( 'CareConcierge Health' )
		);
		printf(
			"<meta property=\"og:type\" content=\"%s\" />\n",
			esc_attr( $meta['og_type'] )
		);
		printf(
			"<meta property=\"og:title\" content=\"%s\" />\n",
			esc_attr( $meta['title'] )
		);
		printf(
			"<meta property=\"og:description\" content=\"%s\" />\n",
			esc_attr( $meta['description'] )
		);
		printf(
			"<meta property=\"og:url\" content=\"%s\" />\n",
			esc_url( $meta['canonical'] )
		);
		if ( ! empty( $meta['og_image'] ) ) {
			printf(
				"<meta property=\"og:image\" content=\"%s\" />\n",
				esc_url( $meta['og_image'] )
			);
			echo "<meta property=\"og:image:alt\" content=\"CareConcierge — patient communication infrastructure for private surgical practices\" />\n";
		}

		/* Twitter / X — summary_large_image so the deck cover shows
		   in full when shared. */
		echo "<meta name=\"twitter:card\" content=\"summary_large_image\" />\n";
		printf(
			"<meta name=\"twitter:title\" content=\"%s\" />\n",
			esc_attr( $meta['title'] )
		);
		printf(
			"<meta name=\"twitter:description\" content=\"%s\" />\n",
			esc_attr( $meta['description'] )
		);
		if ( ! empty( $meta['og_image'] ) ) {
			printf(
				"<meta name=\"twitter:image\" content=\"%s\" />\n",
				esc_url( $meta['og_image'] )
			);
		}

		echo "<!-- /CareConcierge SEO -->\n";
	}
}
add_action( 'wp_head', 'careconcierge_print_meta_tags', 5 );
