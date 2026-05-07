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

		$dentists_title       = 'CareConcierge Health | Patient Communication Infrastructure for Dental and Orthodontic Practices';
		$dentists_description = 'Patient communication infrastructure for private dental and orthodontic practices. Every serious enquiry answered, every lead qualified, every handoff ready before the conversation goes cold.';

		$medical_title        = 'CareConcierge Health | Patient Communication Infrastructure for Private Specialist Clinics';
		$medical_description  = 'Patient communication infrastructure for private specialist clinics. Respond faster, qualify patient intent, prepare warmer handoffs, and recover value already sitting inside the practice.';

		$privacy_title        = 'Privacy Notice | CareConcierge Health';
		$privacy_description  = 'Privacy information for CareConcierge Health, including how enquiries, communications, and business contact information are handled.';

		$terms_title          = 'Terms and Conditions | CareConcierge Health';
		$terms_description    = 'CareConcierge Health service terms, market-specific addenda, and legal information for Australia, the United Kingdom, and the United States.';

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
			case '/dentists':
			case '/dentists/':
				return array(
					'title'         => $dentists_title,
					'description'   => $dentists_description,
					'canonical'     => CARECONCIERGE_CANONICAL_HOST . '/dentists/',
					'og_type'       => 'website',
					'og_image'      => $default_image,
					'robots_noindex'=> false,
				);
			case '/medical':
			case '/medical/':
				return array(
					'title'         => $medical_title,
					'description'   => $medical_description,
					'canonical'     => CARECONCIERGE_CANONICAL_HOST . '/medical/',
					'og_type'       => 'website',
					'og_image'      => $default_image,
					'robots_noindex'=> false,
				);
			case '/privacy-notice':
			case '/privacy-notice/':
				return array(
					'title'         => $privacy_title,
					'description'   => $privacy_description,
					'canonical'     => CARECONCIERGE_CANONICAL_HOST . '/privacy-notice/',
					'og_type'       => 'article',
					'og_image'      => $default_image,
					'robots_noindex'=> true,
					/* Legal pages must remain publicly accessible (DocuSign,
					   Stripe, email footers, client review) but should not
					   appear in search indexes. "follow" preserves outbound
					   link equity to the marketing pages; "noarchive" keeps
					   cached snapshots out of search results. */
					'robots'        => 'noindex, follow, noarchive',
				);
			case '/terms':
			case '/terms/':
				return array(
					'title'         => $terms_title,
					'description'   => $terms_description,
					'canonical'     => CARECONCIERGE_CANONICAL_HOST . '/terms/',
					'og_type'       => 'article',
					'og_image'      => $default_image,
					'robots_noindex'=> true,
					'robots'        => 'noindex, follow, noarchive',
				);
			case '/':
				/* Home renders the surgeons composition as the master page
				   while only the surgeons vertical is the public default.
				   Canonicalise home → /surgeons/ to keep duplicate-content
				   noise out of search. */
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

		$governed = array(
			'/', '/surgeons', '/surgeons/',
			'/dentists', '/dentists/',
			'/medical', '/medical/',
			'/privacy-notice', '/privacy-notice/',
			'/terms', '/terms/',
		);
		if ( in_array( $path, $governed, true ) ) {
			/* Use the full master title verbatim and suppress the
			   automatic " — site name" suffix WP would otherwise add. */
			$parts['title']   = $meta['title'];
			unset( $parts['site'], $parts['tagline'] );
		}
		return $parts;
	}
}
add_filter( 'document_title_parts', 'careconcierge_filter_document_title_parts' );

/* Drop the title separator for our governed pages — every governed
   title contains its own " | " so no separator is required. */
if ( ! function_exists( 'careconcierge_filter_document_title_separator' ) ) {
	function careconcierge_filter_document_title_separator( $sep ) {
		$path = isset( $_SERVER['REQUEST_URI'] ) ? wp_parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) : '/';
		$path = '/' . trim( (string) $path, '/' );
		$governed = array(
			'/', '/surgeons', '/surgeons/',
			'/dentists', '/dentists/',
			'/medical', '/medical/',
			'/privacy-notice', '/privacy-notice/',
			'/terms', '/terms/',
		);
		if ( in_array( $path, $governed, true ) ) {
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

		/* Robots directive. The optional 'robots' key (when set on a
		   per-URL basis by careconcierge_seo_meta_for_request) carries
		   the full directive string verbatim — used for the legal pages
		   that must remain publicly accessible but not indexed. The
		   legacy boolean 'robots_noindex' is the fallback for any URL
		   that just needs the default "noindex,nofollow" treatment. */
		if ( ! empty( $meta['robots'] ) ) {
			printf(
				"<meta name=\"robots\" content=\"%s\" />\n",
				esc_attr( $meta['robots'] )
			);
		} elseif ( ! empty( $meta['robots_noindex'] ) ) {
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

/**
 * Pages that should not appear in the WordPress XML sitemap.
 * Looked up dynamically by slug so the same code works locally
 * and in production regardless of differing post IDs. Slugs are
 * the slugs of the WP page records, not URL paths.
 *
 * Marketing pages (/, /surgeons/, /dentists/, /medical/) are
 * intentionally NOT in this list — they remain discoverable.
 *
 * @return string[]
 */
if ( ! function_exists( 'careconcierge_sitemap_excluded_slugs' ) ) {
	function careconcierge_sitemap_excluded_slugs() {
		return array( 'privacy-notice', 'terms' );
	}
}

/**
 * Exclude the legal pages from the core WordPress XML sitemap.
 *
 * The pages remain publicly accessible at their canonical URLs
 * (DocuSign / Stripe / email footers continue to work). They are
 * just no longer advertised in /wp-sitemap.xml.
 *
 * Excluded pages are resolved by slug at request time and folded
 * into the existing post__not_in argument so any other exclusions
 * a future filter may add are preserved.
 *
 * @param array  $args      Query args passed to WP_Query for the sitemap.
 * @param string $post_type Post type the sitemap is being built for.
 * @return array
 */
if ( ! function_exists( 'careconcierge_filter_sitemap_query_args' ) ) {
	function careconcierge_filter_sitemap_query_args( $args, $post_type ) {
		if ( 'page' !== $post_type ) {
			return $args;
		}
		$excluded_ids = array();
		foreach ( careconcierge_sitemap_excluded_slugs() as $slug ) {
			$page = get_page_by_path( $slug, OBJECT, 'page' );
			if ( $page instanceof WP_Post ) {
				$excluded_ids[] = $page->ID;
			}
		}
		if ( empty( $excluded_ids ) ) {
			return $args;
		}
		$existing = isset( $args['post__not_in'] ) && is_array( $args['post__not_in'] ) ? $args['post__not_in'] : array();
		$args['post__not_in'] = array_values( array_unique( array_merge( $existing, $excluded_ids ) ) );
		return $args;
	}
}
add_filter( 'wp_sitemaps_posts_query_args', 'careconcierge_filter_sitemap_query_args', 10, 2 );

/**
 * Send X-Robots-Tag for the legal pages only.
 *
 * Belt-and-braces reinforcement of the noindex meta tag — DocuSign,
 * Stripe and other clients that fetch HEAD or follow stricter
 * indexing rules pick up the directive even before parsing the
 * <head>. Scope is limited to the two specific paths; no global
 * application.
 */
if ( ! function_exists( 'careconcierge_legal_pages_x_robots_tag' ) ) {
	function careconcierge_legal_pages_x_robots_tag() {
		$path = isset( $_SERVER['REQUEST_URI'] ) ? wp_parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) : '/';
		$path = '/' . trim( (string) $path, '/' );
		$noindex_paths = array(
			'/privacy-notice',
			'/privacy-notice/',
			'/terms',
			'/terms/',
		);
		if ( in_array( $path, $noindex_paths, true ) && ! headers_sent() ) {
			header( 'X-Robots-Tag: noindex, follow, noarchive' );
		}
	}
}
add_action( 'send_headers', 'careconcierge_legal_pages_x_robots_tag' );
