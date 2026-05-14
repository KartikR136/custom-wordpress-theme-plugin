<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class LMP_Lead_Post_Type {

	public static function init() {
		add_action( 'init', array( __CLASS__, 'register_post_type' ) );
	}

	public static function register_post_type() {
		register_post_type(
			'lmp_lead',
			array(
				'labels' => array(
					'name'          => 'Leads',
					'singular_name' => 'Lead',
				),
				'public'       => false,
				'show_ui'      => true,
				'show_in_menu' => false,
				'supports'     => array(
					'title',
					'editor',
				),
				'menu_icon' => 'dashicons-id',
			)
		);
	}
}