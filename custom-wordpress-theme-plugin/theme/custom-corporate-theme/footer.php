<?php
/**
 * Theme footer
 *
 * @package CustomCorporateTheme
 */
?>

<footer class="site-footer">
	<div class="container">

		<div class="footer-grid">
			<div class="footer-brand">
				<h3><?php bloginfo( 'name' ); ?></h3>
				<p>Modern digital solutions for ambitious businesses.</p>
			</div>

			<div class="footer-links">
				<h4>Quick Links</h4>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'menu_class'     => 'footer-menu',
						'container'      => false,
					)
				);
				?>
			</div>

			<div class="footer-contact">
				<h4>Contact</h4>
				<p>Email: kr5665@gmail.com</p>
				<p>Phone: +91 9876543210</p>
			</div>
		</div>

		<div class="copyright">
			<p>
				© <?php echo esc_html( date( 'Y' ) ); ?>
				<?php bloginfo( 'name' ); ?>. All rights reserved.
			</p>
		</div>

	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>