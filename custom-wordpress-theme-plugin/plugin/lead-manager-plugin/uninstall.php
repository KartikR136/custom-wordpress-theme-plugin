<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

global $wpdb;

$table = $wpdb->prefix . 'lead_manager';

$wpdb->query( "DROP TABLE IF EXISTS {$table}" );

delete_option( 'lmp_settings' );