<?php
/**
 * Static page template
 *
 * @package CustomCorporateTheme
 */

get_header();
?>

<main class="site-main">
	<section class="page-wrapper">
		<div class="container">

			<?php while ( have_posts() ) : the_post(); ?>

				<article <?php post_class(); ?>>
					<header class="entry-header">
						<h1><?php the_title(); ?></h1>
					</header>

					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</article>

			<?php endwhile; ?>

		</div>
	</section>
</main>

<?php
get_footer();