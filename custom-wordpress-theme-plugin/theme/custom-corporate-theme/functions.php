<?php
/**
 * Theme bootstrap file
 *
 * @package CustomCorporateTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CCT_THEME_VERSION', '1.0.0' );
define( 'CCT_THEME_DIR', get_template_directory() );
define( 'CCT_THEME_URI', get_template_directory_uri() );

/**
 * Core includes
 */
require_once CCT_THEME_DIR . '/inc/theme-support.php';
require_once CCT_THEME_DIR . '/inc/enqueue.php';
require_once CCT_THEME_DIR . '/inc/custom-post-types.php';
require_once CCT_THEME_DIR . '/inc/custom-taxonomies.php';
require_once CCT_THEME_DIR . '/inc/acf-fields.php';
require_once CCT_THEME_DIR . '/inc/security.php';
require_once CCT_THEME_DIR . '/inc/helpers.php';

/**
 * Gutenberg custom blocks
 */
require_once CCT_THEME_DIR . '/blocks/testimonial-block/render.php';
require_once CCT_THEME_DIR . '/blocks/service-card-block/render.php';