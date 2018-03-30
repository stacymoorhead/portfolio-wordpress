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
				<button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
			    	<span class="hamb-top"></span>
			        <span class="hamb-middle"></span>
			        <span class="hamb-bottom"></span>
		        </button>	
			<header id="masthead" class="container-fluid site-header">
				<div class="row">
					<div class="branding-container">
					<?php if ( !is_home() ) :
						the_custom_logo(); ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					<?php	
					endif; ?>
					</div> <!-- .branding-container -->
					<div class="social-container">
				        <div class="social"><a href="http://www.facebook.com/stacy.pezzola"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></div>
				        <div class="social"><a href="http://www.twitter.com/heartshapedfart"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></div>
				        <div class="social"><a href="http://www.instagram.com/heartshapedfarts"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></div>
			        </div><!-- .social-container -->    
				</div><!-- .row -->
			</header><!-- #masthead .container-fluid -->	
				<?php if ( is_home() ) :
					?>				
				<div class="site-branding">
					<?php
					the_custom_logo(); ?>
						<div class="branding">
							<div class="logo">
								<h1 class="site-title title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php 
								$stacylauren_description = get_bloginfo( 'description', 'display' );
								if ( $stacylauren_description || is_customize_preview() ) :
									?>
									<p class="site-description"><?php echo $stacylauren_description; /* WPCS: xss ok. */ ?></p>
								<?php endif; ?>
							</div><!-- .logo -->
						</div><!-- .branding -->
				</div><!-- .site-branding -->
				<?php endif; ?>
			<div id="content page-content-wrapper" class="site-content">

				
