<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stacy_Lauren
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				stacylauren_posted_on();
				stacylauren_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	<?php stacylauren_post_thumbnail(); ?>

	<div class="entry-content">
		<div class="contaner content">
			<div class="row">
				<div class="col-md-12">			
					<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'stacylauren' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );
			
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'stacylauren' ),
						'after'  => '</div>',
					) );
					?>
				</div> <!-- .col-md-12 -->
			</div> <!-- .row -->
			<footer class="entry-footer row">
				<div class="col-md-12">
					<?php stacylauren_entry_footer(); ?>
				</div><!-- .col-md-12 -->
			</footer><!-- .entry-footer .row -->
		</div> <!-- .container .content -->	
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
