<?php
/**
 * Testimonial block render
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function cct_register_testimonial_block() {

	wp_register_script(
		'cct-testimonial-editor',
		CCT_THEME_URI . '/blocks/testimonial-block/index.js',
		array( 'wp-blocks', 'wp-element' ),
		CCT_THEME_VERSION,
		true
	);

	wp_register_style(
		'cct-testimonial-editor-style',
		CCT_THEME_URI . '/blocks/testimonial-block/editor.css',
		array(),
		CCT_THEME_VERSION
	);

	wp_register_style(
		'cct-testimonial-style',
		CCT_THEME_URI . '/blocks/testimonial-block/style.css',
		array(),
		CCT_THEME_VERSION
	);

	register_block_type(
		CCT_THEME_DIR . '/blocks/testimonial-block',
		array(
			'render_callback' => 'cct_render_testimonial_block',
		)
	);
}
add_action( 'init', 'cct_register_testimonial_block' );

function cct_render_testimonial_block() {
	return '
	<div class="testimonial-block">
		<blockquote>
			"Outstanding engineering execution and great delivery."
		</blockquote>
		<div class="author">— Enterprise Client</div>
	</div>
	';
}