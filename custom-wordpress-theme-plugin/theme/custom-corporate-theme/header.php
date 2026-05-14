<?php
/**
 * Theme header
 *
 * @package CustomCorporateTheme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">
	<div class="container header-container">

		<div class="logo-area">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<h2><?php bloginfo( 'name' ); ?></h2>
				<?php endif; ?>
			</a>
		</div>
<button class="nav-toggle" aria-label="Toggle Menu">
	Menu
</button>

		<nav class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_class'     => 'nav-menu',
					'container'      => false,
				)
			);
			?>
		</nav>

	</div>
</header>