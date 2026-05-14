<?php
/**
 * 404 template
 *
 * @package CustomCorporateTheme
 */

get_header();
?>

<main class="site-main">
	<section class="error-page">
		<div class="container">
			<div class="error-box">
				<h1>404</h1>
				<h2>Page Not Found</h2>
				<p>The page you requested does not exist.</p>

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-primary">
					Back to Home
				</a>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();