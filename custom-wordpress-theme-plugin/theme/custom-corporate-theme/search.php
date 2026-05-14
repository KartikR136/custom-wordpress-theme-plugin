<?php
/**
 * Search results template
 *
 * @package CustomCorporateTheme
 */

get_header();
?>

<main class="site-main">
	<section class="search-results-page">
		<div class="container">

			<header class="search-header">
				<h1>
					Search Results for:
					"<?php echo esc_html( get_search_query() ); ?>"
				</h1>
			</header>

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<article class="search-result-item">
						<h2>
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h2>

						<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
					</article>

				<?php endwhile; ?>
			<?php else : ?>

				<p>No matching results found.</p>

			<?php endif; ?>

		</div>
	</section>
</main>

<?php
get_footer();