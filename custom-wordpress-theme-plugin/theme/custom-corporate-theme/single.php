<?php
/**
 * Single post template
 *
 * @package CustomCorporateTheme
 */

get_header();
?>

<main class="site-main">
	<section class="single-post-wrapper">
		<div class="container">

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<article <?php post_class(); ?>>

						<header class="entry-header">
							<h1><?php the_title(); ?></h1>

							<div class="post-meta">
								<span><?php echo esc_html( get_the_date() ); ?></span>
								<span><?php the_author(); ?></span>
							</div>
						</header>

						<?php if ( has_post_thumbnail() ) : ?>
							<div class="featured-image">
								<?php the_post_thumbnail( 'large' ); ?>
							</div>
						<?php endif; ?>

						<div class="entry-content">
							<?php the_content(); ?>
						</div>

					</article>

				<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</section>
</main>

<?php
get_footer();