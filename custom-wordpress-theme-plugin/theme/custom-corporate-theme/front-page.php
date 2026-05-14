<?php
/**
 * Front page template
 *
 * @package CustomCorporateTheme
 */

get_header();
?>

<main class="site-main">

	<?php get_template_part( 'template-parts/hero-section' ); ?>

	<section class="services-section">
		<div class="container">
			<div class="section-heading">
				<h2>Our Services</h2>
				<p>Scalable digital solutions tailored for modern businesses.</p>
			</div>

			<?php get_template_part( 'template-parts/services-grid' ); ?>
		</div>
	</section>

	<section class="about-preview">
		<div class="container">
			<div class="about-grid">
				<div>
					<h2>Who We Are</h2>
					<p>
						We build modern digital experiences using scalable engineering practices,
						custom CMS workflows, and performance-focused design.
					</p>
				</div>

				<div>
					<img src="<?php echo esc_url( CCT_THEME_URI . '/assets/images/placeholder.jpg' ); ?>" alt="Team">
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>

	<?php get_template_part( 'template-parts/cta-banner' ); ?>

</main>

<?php
get_footer();