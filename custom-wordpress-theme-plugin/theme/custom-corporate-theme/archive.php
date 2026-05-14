<?php
/**
 * Archive template
 *
 * @package CustomCorporateTheme
 */

get_header();
?>

<main class="site-main">
	<section class="archive-wrapper">
		<div class="container">

			<header class="archive-header">
				<h1><?php the_archive_title(); ?></h1>
				<p><?php the_archive_description(); ?></p>
			</header>

			<div class="archive-grid">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<article class="archive-card">
							<a href="<?php the_permalink(); ?>">
								<h2><?php the_title(); ?></h2>
							</a>

							<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18 ) ); ?></p>
						</article>

					<?php endwhile; ?>
				<?php endif; ?>
			</div>

		</div>
	</section>
</main>

<?php
get_footer();