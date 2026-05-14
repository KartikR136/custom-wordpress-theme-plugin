<?php
/**
 * Asset loading
 *
 * @package CustomCorporateTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function cct_enqueue_assets() {
	wp_enqueue_style(
		'cct-main',
		CCT_THEME_URI . '/assets/css/main.css',
		array(),
		CCT_THEME_VERSION
	);

	wp_enqueue_style(
		'cct-responsive',
		CCT_THEME_URI . '/assets/css/responsive.css',
		array( 'cct-main' ),
		CCT_THEME_VERSION
	);

	wp_enqueue_script(
		'cct-main-js',
		CCT_THEME_URI . '/assets/js/main.js',
		array(),
		CCT_THEME_VERSION,
		true
	);

	wp_enqueue_script(
		'cct-navigation',
		CCT_THEME_URI . '/assets/js/navigation.js',
		array(),
		CCT_THEME_VERSION,
		true
	);

	wp_enqueue_script(
		'cct-ajax-form',
		CCT_THEME_URI . '/assets/js/ajax-form.js',
		array( 'jquery' ),
		CCT_THEME_VERSION,
		true
	);

	wp_localize_script(
		'cct-ajax-form',
		'cct_ajax',
		array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			'nonce'    => wp_create_nonce( 'cct_ajax_nonce' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'cct_enqueue_assets' );