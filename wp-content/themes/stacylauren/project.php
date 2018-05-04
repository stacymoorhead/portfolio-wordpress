<?php
/*
Template Name: Project
 *
 * @package stacy_lauren
 */

get_header(); ?>
	<div id="primary" class="content-area">
    	<header class="entry-header container-fluid">
    		<div class="row">
    			<div class="col-md-12">
    				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    			</div> <!-- .col-med-12 -->
    		</div> <!-- row -->
    	<div class="arrow-down"></div>	
    	</header><!-- .entry-header -->   
    	<div class="entry-content container-fluid">
    		<div class="content">
    			<div class="row">
    				<div class="col-md-12">
            			<section class="projects fadein700">
							<?php
							while ( have_posts() ) :
								the_post();
					
								get_template_part( 'template-parts/content', 'projects' );
					
								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
					
							endwhile; // End of the loop.
							?>   
            			</section><!-- .projects -->
    				</div> <!-- .col-md-12 -->
    			</div> <!-- .row -->
    		</div> <!-- .container	-->
    	</div><!-- .entry-content -->	        			
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
