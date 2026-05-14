<?php
/*
Template Name: Services Page
*/

get_header();
?>

<main>
	<div class="container">
		<h1>Services</h1>
		<?php get_template_part( 'template-parts/services-grid' ); ?>
	</div>
</main>

<?php get_footer(); ?>