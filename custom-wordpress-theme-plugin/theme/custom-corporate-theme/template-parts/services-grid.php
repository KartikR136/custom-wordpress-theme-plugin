<?php
$query = new WP_Query(
	array(
		'post_type'      => 'service',
		'posts_per_page' => 6,
	)
);
?>

<div class="services-grid">
	<?php if ( $query->have_posts() ) : ?>
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>

			<div class="service-card">
				<h3><?php the_title(); ?></h3>
				<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 15 ) ); ?></p>
			</div>

		<?php endwhile; ?>
	<?php endif; ?>

	<?php wp_reset_postdata(); ?>
</div>