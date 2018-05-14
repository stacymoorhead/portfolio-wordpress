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
	

</article><!-- #post-<?php the_ID(); ?> -->



