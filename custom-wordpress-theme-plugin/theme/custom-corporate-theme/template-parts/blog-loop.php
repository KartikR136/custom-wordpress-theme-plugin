<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<article class="blog-card">
			<h2><?php the_title(); ?></h2>
			<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
		</article>

	<?php endwhile; ?>
<?php endif; ?>