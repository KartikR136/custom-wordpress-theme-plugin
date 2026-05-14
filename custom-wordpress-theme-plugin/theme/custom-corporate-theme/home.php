<?php
/**
 * Blog listing template
 *
 * @package CustomCorporateTheme
 */

get_header();
?>

<main class="site-main">
	<section class="blog-listing">
		<div class="container">
			<div class="section-heading">
				<h1>Latest Articles</h1>
				<p>Insights, engineering notes, and product updates.</p>
			</div>

			<div class="blog-grid">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<article class="blog-card">
							<a href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'medium' ); ?>
								<?php endif; ?>

								<h2><?php the_title(); ?></h2>
							</a>

							<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
						</article>

					<?php endwhile; ?>
				<?php endif; ?>
			</div>

			<div class="pagination">
				<?php the_posts_pagination(); ?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();