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
	}
}
add_action( 'wp_enqueue_scripts', 'careconcierge_enqueue_assets' );

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
