<?php
/**
 * Theme support configuration
 *
 * @package CustomCorporateTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function cct_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/editor-style.css' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'custom-corporate-theme' ),
			'footer'  => __( 'Footer Menu', 'custom-corporate-theme' ),
		)
	);
}
add_action( 'after_setup_theme', 'cct_theme_setup' );