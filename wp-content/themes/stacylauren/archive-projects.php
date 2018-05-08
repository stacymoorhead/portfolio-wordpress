<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stacy_Lauren
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<header class="entry-header container-fluid">
				<div class="row">
					<div class="col-md-12">
					<?php
						the_archive_title( '<h1>', '</h1>' );
					?>		
					</div> <!-- .col-md-12 -->
					<div class="row">
						<div class="container">
							<div class="col-md-12 project-excerpt">
								<?php the_archive_description(); ?>
							</div> <!-- .col-md-12 -->
						</div> <!-- .container -->
					</div><!-- .row -->
				</div> <!-- row -->
		    	<div class="arrow-down"></div>
			</header><!-- .entry-header -->	
			<div class="entry-content">
				<div class="content">
					<div class="row">
						<div class="container">
							<div class="col-md-8">			
							<?php if ( have_posts() ) : 
								
								/* Start the Loop */
								while ( have_posts() ) :
									
									the_post();
									
									/*
									 * Include the Post-Type-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', get_post_type() );
					
								endwhile;
					
								//the_posts_navigation();
					
							else :
					
								get_template_part( 'template-parts/content', 'none' );
					
							endif;
							?>					</div> <!-- .col-md-8 -->
							<div class="col-md-4">					
								<?php get_sidebar('projects'); ?>
							</div><!-- .col-md-4 -->
						</div> <!-- .container	-->	
					</div> <!-- .row -->
				</div> <!-- .content -->
			</div><!-- .entry-content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
