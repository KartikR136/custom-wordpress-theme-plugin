<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class LMP_Admin_Menu {

	public static function init() {
		add_action( 'admin_menu', array( __CLASS__, 'register_menu' ) );
		add_action( 'admin_enqueue_scripts', array( __CLASS__, 'enqueue_assets' ) );
	}

	public static function register_menu() {
		add_menu_page(
			'Lead Manager',
			'Lead Manager',
			'manage_options',
			'lmp-dashboard',
			array( __CLASS__, 'dashboard_page' ),
			'dashicons-groups',
			25
		);

		add_submenu_page(
			'lmp-dashboard',
			'Settings',
			'Settings',
			'manage_options',
			'lmp-settings',
			array( __CLASS__, 'settings_page' )
		);
	}

	public static function enqueue_assets() {
		wp_enqueue_style(
			'lmp-admin-style',
			LMP_PLUGIN_URL . 'admin/admin.css',
			array(),
			LMP_VERSION
		);
	}

	public static function dashboard_page() {
		include LMP_PLUGIN_DIR . 'admin/admin-dashboard.php';
	}

	public static function settings_page() {
		include LMP_PLUGIN_DIR . 'admin/settings-page.php';
	}
}