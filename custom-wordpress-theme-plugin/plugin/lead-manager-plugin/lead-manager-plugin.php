<?php
/**
 * Plugin Name: Lead Manager Plugin
 * Plugin URI: https://github.com/KartikR136/custom-wordpress-theme-plugin
 * Description: Custom lead management plugin with shortcode, REST API, admin dashboard, and secure form processing.
 * Version: 1.0.0
 * Author: Kartikey
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LMP_VERSION', '1.0.0' );
define( 'LMP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'LMP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

require_once LMP_PLUGIN_DIR . 'includes/class-shortcode.php';
require_once LMP_PLUGIN_DIR . 'includes/class-security.php';
require_once LMP_PLUGIN_DIR . 'includes/class-database.php';
require_once LMP_PLUGIN_DIR . 'includes/helpers.php';
require_once LMP_PLUGIN_DIR . 'includes/class-rest-api.php';
require_once LMP_PLUGIN_DIR . 'includes/class-admin-menu.php';
require_once LMP_PLUGIN_DIR . 'includes/class-lead-post-type.php';

function lmp_activate_plugin() {
	LMP_Database::create_tables();
}
register_activation_hook( __FILE__, 'lmp_activate_plugin' );

function lmp_init_plugin() {
	LMP_Shortcode::init();
	LMP_Security::init();
	LMP_REST_API::init();
	LMP_Admin_Menu::init();
	LMP_Lead_Post_Type::init();
}
add_action( 'plugins_loaded', 'lmp_init_plugin' );