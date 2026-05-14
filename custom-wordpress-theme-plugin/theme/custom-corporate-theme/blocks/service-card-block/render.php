<?php
/**
 * Service card block render
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function cct_register_service_block() {

	wp_register_script(
		'cct-service-editor',
		CCT_THEME_URI . '/blocks/service-card-block/index.js',
		array( 'wp-blocks', 'wp-element' ),
		CCT_THEME_VERSION,
		true
	);

	wp_register_style(
		'cct-service-editor-style',
		CCT_THEME_URI . '/blocks/service-card-block/editor.css',
		array(),
		CCT_THEME_VERSION
	);

	wp_register_style(
		'cct-service-style',
		CCT_THEME_URI . '/blocks/service-card-block/style.css',
		array(),
		CCT_THEME_VERSION
	);

	register_block_type(
		CCT_THEME_DIR . '/blocks/service-card-block',
		array(
			'render_callback' => 'cct_render_service_block',
		)
	);
}
add_action( 'init', 'cct_register_service_block' );

function cct_render_service_block() {
	return '
	<div class="service-block-card">
		<h3>Custom CMS Development</h3>
		<p>Scalable CMS solutions built for growth-focused teams.</p>
	</div>
	';
}