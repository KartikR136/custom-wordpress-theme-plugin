<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class LMP_Database {

	public static function create_tables() {
		global $wpdb;

		$table = $wpdb->prefix . 'lead_manager';
		$charset = $wpdb->get_charset_collate();

		$sql = "
		CREATE TABLE {$table} (
			id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
			name VARCHAR(255) NOT NULL,
			email VARCHAR(255) NOT NULL,
			message TEXT,
			created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
			PRIMARY KEY (id)
		) {$charset};
		";

		require_once ABSPATH . 'wp-admin/includes/upgrade.php';
		dbDelta( $sql );
	}

	public static function insert_lead( $name, $email, $message ) {
		global $wpdb;

		$table = $wpdb->prefix . 'lead_manager';

		return $wpdb->insert(
			$table,
			array(
				'name'    => $name,
				'email'   => $email,
				'message' => $message,
			),
			array( '%s', '%s', '%s' )
		);
	}
}