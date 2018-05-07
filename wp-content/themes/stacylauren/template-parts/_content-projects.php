<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stacy_Lauren
 */

?>

 <?php
	$args = array(
	  'post_type'   => 'projects',
	  'post_status' => 'publish',
	  
	 );
	$category = get_the_category();
	$projects = new WP_Query( $args );
	if( $projects->have_posts() ) :
	      while( $projects->have_posts() ) :
	        $projects->the_post();
	        ?>
	            <article>
	            	<a href="<?php the_permalink() ?>">
	            		<figure class="screenshot">
		            		<?php echo(the_post_thumbnail()); ?>
		            		<figcaption class="screenshot-caption screenshot-caption_bottom">
		            			<div>
		            				<h2><?php echo(the_title()) ?></h2>
		            				<p class="category-name"><span><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></span></p>
		            				<p><?php echo(the_excerpt()) ?> </p>
		            			</div>
		            		</figcaption>
						</figure>
					</a>
				</article>
	        
	        <?php
	      endwhile;
	      wp_reset_postdata();
	else :
	  esc_html_e( 'No projects to display!', 'text-domain' );
	endif;
	?>



