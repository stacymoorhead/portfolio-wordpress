<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stacy_Lauren
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="gradient">
	<div id="page" class="site bg">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'stacylauren' ); ?></a>
		<div id="wrapper" class="">
			<div class="overlay" style="display: none;"></div>
				<nav id="sidebar-wrapper" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'container'		 => 'ul',
						'menu_id'        => 'primary-menu',
						'menu_class'   	 => 'nav sidebar-nav',
					) );
					?>
				</nav><!-- #site-navigation -->	
			<header id="masthead" class="site-header">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$stacylauren_description = get_bloginfo( 'description', 'display' );
					if ( $stacylauren_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $stacylauren_description; /* WPCS: xss ok. */ ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
			</header><!-- #masthead -->
			<div id="content page-content-wrapper" class="site-content">
				<button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
	            <span class="hamb-top"></span>
	            <span class="hamb-middle"></span>
	            <span class="hamb-bottom"></span>
	            </button>
				
