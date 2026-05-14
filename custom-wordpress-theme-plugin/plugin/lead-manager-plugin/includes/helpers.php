<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function lmp_format_datetime( $datetime ) {
	return date( 'd M Y, h:i A', strtotime( $datetime ) );
}

function lmp_get_settings() {
	return get_option( 'lmp_settings', array() );
}