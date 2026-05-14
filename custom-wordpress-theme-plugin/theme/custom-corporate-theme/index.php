<?php
/**
 * Main template fallback
 *
 * @package CustomCorporateTheme
 */

get_header();
?>

<main class="site-main">
	<section class="content-wrapper">
		<div class="container">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<h1><?php the_title(); ?></h1>
						</header>

						<div class="entry-content">
							<?php the_content(); ?>
						</div>
					</article>

				<?php endwhile; ?>
			<?php else : ?>

				<article class="no-content">
					<h2>No Content Found</h2>
					<p>Sorry, nothing matched your request.</p>
				</article>

			<?php endif; ?>
		</div>
	</section>
</main>

<?php
get_footer();