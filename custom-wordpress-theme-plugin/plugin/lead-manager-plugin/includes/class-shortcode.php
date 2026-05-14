<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class LMP_Shortcode {

	public static function init() {
		add_shortcode( 'lead_capture_form', array( __CLASS__, 'render_form' ) );
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue_assets' ) );
		add_action( 'wp_ajax_submit_lead_form', array( __CLASS__, 'handle_submission' ) );
		add_action( 'wp_ajax_nopriv_submit_lead_form', array( __CLASS__, 'handle_submission' ) );
	}

	public static function enqueue_assets() {
		wp_enqueue_style(
			'lmp-public-style',
			LMP_PLUGIN_URL . 'public/public.css',
			array(),
			LMP_VERSION
		);

		wp_enqueue_script(
			'lmp-public-script',
			LMP_PLUGIN_URL . 'public/public.js',
			array( 'jquery' ),
			LMP_VERSION,
			true
		);

		wp_localize_script(
			'lmp-public-script',
			'lmp_ajax',
			array(
				'ajax_url' => admin_url( 'admin-ajax.php' ),
				'nonce'    => wp_create_nonce( 'lmp_nonce' ),
			)
		);
	}

	public static function render_form() {
		ob_start();
		include LMP_PLUGIN_DIR . 'public/lead-form.php';
		return ob_get_clean();
	}

	public static function handle_submission() {

		if (
			! isset( $_POST['nonce'] ) ||
			! wp_verify_nonce( $_POST['nonce'], 'lmp_nonce' )
		) {
			wp_send_json_error( 'Security validation failed.' );
		}

		$name = sanitize_text_field( $_POST['name'] ?? '' );
		$email = sanitize_email( $_POST['email'] ?? '' );
		$message = sanitize_textarea_field( $_POST['message'] ?? '' );

		LMP_Database::insert_lead( $name, $email, $message );

		wp_send_json_success( 'Lead captured successfully.' );
	}
}