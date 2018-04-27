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
    	<div class="entry-content">
    		<div class="content">
    			<div class="row">
    				<div class="col-md-12">
            			<section class="projects fadein700">
            					<?php
            					$args = array(
            					  'post_type'   => 'projects',
            					  'post_status' => 'publish',
            					  
            					 );
            					  
            					$projects = new WP_Query( $args );
            					if( $projects->have_posts() ) :
            					      while( $projects->have_posts() ) :
            					        $projects->the_post();
            					        ?>
            					            <article>
            					            	<figure class="screenshot"><?php printf( '%1$s<figcaption class="screenshot-caption screenshot-caption_bottom"><div><h2>%2$s</h2><p>%3$s</p></div></figcaption>', get_the_post_thumbnail(), get_the_title(), get_the_excerpt() /*get_field('job_title')*/ ); 
            					        ?>
            									</figure>
            								</article>
            					        
            					        <?php
            					      endwhile;
            					      wp_reset_postdata();
            					else :
            					  esc_html_e( 'No projects to display!', 'text-domain' );
            					endif;
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
