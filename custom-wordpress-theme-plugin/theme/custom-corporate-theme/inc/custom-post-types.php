<?php
/**
 * Custom Post Types
 *
 * @package CustomCorporateTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function cct_register_post_types() {

	register_post_type(
		'service',
		array(
			'labels' => array(
				'name'          => 'Services',
				'singular_name' => 'Service',
			),
			'public'       => true,
			'has_archive'  => true,
			'show_in_rest' => true,
			'menu_icon'    => 'dashicons-admin-tools',
			'supports'     => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
			),
		)
	);

	register_post_type(
		'testimonial',
		array(
			'labels' => array(
				'name'          => 'Testimonials',
				'singular_name' => 'Testimonial',
			),
			'public'       => true,
			'show_in_rest' => true,
			'menu_icon'    => 'dashicons-format-quote',
			'supports'     => array(
				'title',
				'editor',
			),
		)
	);
}
add_action( 'init', 'cct_register_post_types' );