<?php
/**
 * Helper utilities
 *
 * @package CustomCorporateTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function cct_get_trimmed_content( $limit = 25 ) {
	return wp_trim_words( get_the_excerpt(), $limit );
}

function cct_placeholder_image() {
	return esc_url( CCT_THEME_URI . '/assets/images/placeholder.jpg' );
}

function cct_is_services_archive() {
	return is_post_type_archive( 'service' );
}