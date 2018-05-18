<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
				<?php	the_title( '<h1 class="entry-title">', '</h1>' ); ?>		
				</div> <!-- .col-md-12 -->
				<?php //if ( is_single() && 'projects' == get_post_type()) : 

				while ( have_posts() ) :
					the_post(); ?>
				<div class="row">
					<div class="container">
						<div class="col-md-12 project-excerpt">
							<?php the_excerpt(); ?>
						</div> <!-- .col-md-12 -->
					</div> <!-- .container -->
				</div><!-- .row -->
				<?php //endif; ?>
			</div> <!-- row -->
	    	<div class="arrow-down"></div>
		</header><!-- .entry-header -->	
		<div class="entry-content">
			<div class="content fadein700">
				<div class="row">
					<div class="container">
						<div class="col-md-8">		

			<?php if ( is_single() && 'projects' == get_post_type()) :  {
				get_template_part( 'template-parts/content', 'projects' );
			}
			else : get_template_part( 'template-parts/content', get_post_type() ); 
			endif; ?>
						</div> <!-- .col-md-8 -->
						<div class="col-md-4 projects-sidebar">
							<?php if ( 'projects' == get_post_type() ) { ?>
								<ul class="project-categories">
									<?php the_terms( $post->ID, 'project-categories', '<li>', '', '</li>'); ?> 
								</ul>
								<ul class="project-tags">
									Tagged: <?php the_terms( $post->ID, 'project-tags', '<li>', ', ', '</li>'); ?> 
								</ul>
								<p class="project_description">
									<?php the_field('project_description'); ?>
								</p>	
								<?php get_sidebar('projects');
								stacylauren_post_navigation();
							} else 
								get_sidebar(); 
								//stacylauren_post_navigation();
							?>
						</div><!-- .col-md-4 -->
					</div> <!-- .container	-->	
				</div> <!-- .row -->
			</div> <!-- .content -->
		</div><!-- .entry-content -->				
			<?php // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile; // End of the loop.
		?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
