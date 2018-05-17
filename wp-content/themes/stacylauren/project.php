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
    			<div class="row">
					<div class="container">
						<div class="col-md-12 project-excerpt">
								<?php while ( have_posts() ) :
									the_post();
									the_content(sprintf(
										/* translators: %s: Name of current post. */
										wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'stacylauren' ), array( 'span' => array( 'class' => array() ) ) ),
										the_title( '<span class="screen-reader-text">"', '"</span>', false )
									)); 
								endwhile;	?>
						</div> <!-- .col-md-12 -->
					</div> <!-- .container -->
				</div><!-- .row -->
    		</div> <!-- row -->
    	<div class="arrow-down"></div>	
    	</header><!-- .entry-header -->   
    	<div class="entry-content container-fluid">
    		<div class="content">
    			<div class="row">
    				<div class="col-md-12">
            			<section class="projects fadein700">
            					<?php
            					$args = array(
            					  'post_type'   => 'projects',
            					  'post_status' => 'publish',
            					  'posts_per_page'=>-1,
            					 );
            					$terms = wp_get_post_terms($post->ID , 'project-categories');
            					$projects = new WP_Query( $args );
            					if( $projects->have_posts() ) :
            					      while( $projects->have_posts() ) :
            					        $projects->the_post();
            					        ?>
            					            <article>
            					            	
            					            		<figure class="screenshot">
	            					            		<?php echo(the_post_thumbnail()); ?>
	            					            		<figcaption class="screenshot-caption screenshot-caption_bottom">
	            					            			<div>
	            					            				<h2><?php echo(the_title()) ?></h2>
	            					            				<p class="category-name">
																	<?php the_terms( $post->ID, 'project-categories', '', ' ', ''); ?> 
																</p>
	            					            				<p><?php echo(the_excerpt()) ?> </p>
	            					            				<p class="view-project"><a href="<?php the_permalink() ?>">View Project <i class="fa fa-arrow-right"></i></a></p>
	            					            			</div>
	            					            		</figcaption>
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