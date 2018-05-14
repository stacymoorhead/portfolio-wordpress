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
		if (! get_post_type('projects')) : { ?>
		<div class="entry-meta">
			<?php stacylauren_posted_on(); ?>
		</div><!-- .entry-meta -->
		
		<?php
		} endif; ?>
		<?php if (is_single()) : {
			the_content( sprintf(
			/* translators: %s: Name of current post. */
			wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'stacylauren' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) );
		} else : ?>
		<p>
			<?php $the_excerpt = get_the_excerpt(); if ( '' != $the_excerpt ) {}	echo $the_excerpt; ?>
			<a class="read-more" href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">Read More <i class="fa fa-arrow-right"></i></a>
		</p>
		<?php endif;

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'stacylauren' ),
			'after'  => '</div>',
		) );
	?>
	<footer class="entry-footer">
		<?php stacylauren_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	

</article><!-- #post-<?php the_ID(); ?> -->



