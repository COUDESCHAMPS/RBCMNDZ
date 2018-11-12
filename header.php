<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RBCMNDZ
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,800,900" rel="stylesheet">



	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">


	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="header-container">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><h1 class="title-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></h1></a></p>
				<?php
			endif;
			$_s_description = get_bloginfo( 'description', 'display' );
			if ( $_s_description || is_customize_preview() ) :
				?>
			<?php endif; ?>

		</div><!-- .header-container -->
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			
		<div class="menu-navegacion">		
				
			<?php
			wp_nav_menu( array(
				'theme_location' => 'header_menu',
				'menu_id'        => 'primary-menu',
			) );
			?>
		
		</div>
		</nav><!-- #site-navigation -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">
