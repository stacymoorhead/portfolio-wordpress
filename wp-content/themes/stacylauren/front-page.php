<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Stacy_Lauren
 */

get_header();
?>

				
			<section class="row branding">
				<div class="col-md-12 title fadein600">
					<div class="logo">
						<?php
						// check to see if the logo exists and add it to the page
						if ( get_theme_mod( 'stacylauren_homepage_logo' ) ) : ?>
						 
						<img src="<?php echo get_theme_mod( 'stacylauren_homepage_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
						 
						<?php // add a fallback if the logo doesn't exist
						else : ?>
						 
						<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
						 
						<?php endif; ?>
					</div> <!-- .logo -->
					<h1><?php bloginfo( 'name' ); ?></h1>
					<?php 
					$stacylauren_description = get_bloginfo( 'description', 'display' );
					if ( $stacylauren_description || is_customize_preview() ) :
						?>
						<p><?php echo $stacylauren_description; /* WPCS: xss ok. */ ?></p>
					<?php endif; 
					get_sidebar('homepage-buttons'); ?>
					<!--<button class="button fadein700">See the Work</button>
					<button class="button fadein700">Start a Project</button>-->
				</div> <!-- .col-md-12 title -->
			</section><!-- .row .branding -->


<?php
get_footer();
