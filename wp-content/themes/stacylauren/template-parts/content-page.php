<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stacy_Lauren
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php stacylauren_post_thumbnail(); ?>

		
	<?php
	the_content();

	wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'stacylauren' ),
		'after'  => '</div>',
	) );
	?>

	<?php if ( get_edit_post_link() ) : ?>
				

	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
