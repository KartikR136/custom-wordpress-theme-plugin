<?php
/**
 * ACF field setup
 *
 * @package CustomCorporateTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function cct_register_acf_fields() {

	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key' => 'group_service_details',
			'title' => 'Service Details',
			'fields' => array(
				array(
					'key' => 'field_service_icon',
					'label' => 'Service Icon',
					'name' => 'service_icon',
					'type' => 'image',
				),
				array(
					'key' => 'field_service_subtitle',
					'label' => 'Subtitle',
					'name' => 'service_subtitle',
					'type' => 'text',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'service',
					),
				),
			),
		)
	);
}
add_action( 'acf/init', 'cct_register_acf_fields' );