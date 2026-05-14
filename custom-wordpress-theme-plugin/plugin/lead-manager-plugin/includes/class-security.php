<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class LMP_Security {

	public static function init() {
		add_filter( 'rest_authentication_errors', array( __CLASS__, 'restrict_rest' ) );
	}

	public static function restrict_rest( $result ) {
		if ( ! empty( $result ) ) {
			return $result;
		}

		return $result;
	}
}