<?php
/*
Template Name: Contact Page
*/

get_header();
?>

<main>
	<div class="container">
		<h1>Contact Us</h1>
		<?php echo do_shortcode('[lead_capture_form]'); ?>
	</div>
</main>

<?php get_footer(); ?>