<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stacy_Lauren
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-project'); ?>>
	<div class="entry-content">
		<div class="content">
			<div class="row">
				<div class="container">
					<div class="col-md-8">
						<?php if (! is_single()) : {
							the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); 
							} endif; 
							
							stacylauren_post_thumbnail(); 
	
							the_content( sprintf(
								/* translators: %s: Name of current post. */
								wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'stacylauren' ), array( 'span' => array( 'class' => array() ) ) ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							) );
				
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'stacylauren' ),
								'after'  => '</div>',
							) );
						?>
						<footer class="entry-footer">
							<?php stacylauren_entry_footer(); ?>
						</footer><!-- .entry-footer -->
					</div> <!-- .col-md-8 -->
					<div class="col-md-4">
						<?php if ( 'projects' == get_post_type() ) {
							the_category(); ?>
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

</article><!-- #post-<?php the_ID(); ?> -->



