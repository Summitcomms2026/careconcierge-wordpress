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
	}
}
add_action( 'after_setup_theme', 'careconcierge_setup' );

if ( ! function_exists( 'careconcierge_enqueue_assets' ) ) {
	function careconcierge_enqueue_assets() {
		$theme_version = wp_get_theme()->get( 'Version' );

		wp_enqueue_style(
			'careconcierge-main',
			get_template_directory_uri() . '/assets/css/main.css',
			array(),
			$theme_version
		);

		wp_enqueue_script(
			'careconcierge-main',
			get_template_directory_uri() . '/assets/js/main.js',
			array(),
			$theme_version,
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'careconcierge_enqueue_assets' );

if ( ! function_exists( 'careconcierge_register_pattern_dir' ) ) {
	function careconcierge_register_pattern_dir() {
		if ( function_exists( 'register_block_pattern_directory' ) ) {
			register_block_pattern_directory( get_template_directory() . '/patterns' );
		}
	}
}
add_action( 'init', 'careconcierge_register_pattern_dir' );
