<?php
/**
 * Security hardening
 *
 * @package CustomCorporateTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

remove_action( 'wp_head', 'wp_generator' );

function cct_disable_xmlrpc() {
	return false;
}
add_filter( 'xmlrpc_enabled', 'cct_disable_xmlrpc' );

function cct_security_headers() {
	header( 'X-Frame-Options: SAMEORIGIN' );
	header( 'X-Content-Type-Options: nosniff' );
}
add_action( 'send_headers', 'cct_security_headers' );