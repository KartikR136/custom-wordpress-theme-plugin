<?php
/**
 * Taxonomy registration
 *
 * @package CustomCorporateTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function cct_register_taxonomies() {
	register_taxonomy(
		'service_category',
		'service',
		array(
			'label'        => 'Service Categories',
			'public'       => true,
			'hierarchical' => true,
			'show_in_rest' => true,
		)
	);
}
add_action( 'init', 'cct_register_taxonomies' );