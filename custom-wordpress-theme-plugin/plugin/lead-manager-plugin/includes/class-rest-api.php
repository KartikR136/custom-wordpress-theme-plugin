<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class LMP_REST_API {

	public static function init() {
		add_action( 'rest_api_init', array( __CLASS__, 'register_routes' ) );
	}

	public static function register_routes() {
		register_rest_route(
			'lmp/v1',
			'/leads',
			array(
				'methods'             => 'GET',
				'callback'            => array( __CLASS__, 'get_leads' ),
				'permission_callback' => function () {
					return current_user_can( 'manage_options' );
				},
			)
		);
	}

	public static function get_leads() {
		global $wpdb;

		$table = $wpdb->prefix . 'lead_manager';

		$results = $wpdb->get_results(
			"SELECT * FROM {$table} ORDER BY created_at DESC",
			ARRAY_A
		);

		return rest_ensure_response( $results );
	}
}