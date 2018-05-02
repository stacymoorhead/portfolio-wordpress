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
	<header class="entry-header container-fluid">
		<div class="row">
			<div class="col-md-12">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div> <!-- .col-med-12 -->
		</div> <!-- row -->
    	<div class="arrow-down"></div>
	</header><!-- .entry-header -->
	<?php stacylauren_post_thumbnail(); ?>

	<div class="entry-content">
		<div class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="container">
				<?php
				the_content();
		
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'stacylauren' ),
					'after'  => '</div>',
				) );
				?>

				<?php if ( get_edit_post_link() ) : ?>
					<footer class="entry-footer row">
						<?php
						edit_post_link(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Edit <span class="screen-reader-text">%s</span>', 'stacylauren' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							),
							'<span class="edit-link">',
							'</span>'
						);
						?>
					</footer><!-- .entry-footer -->
				</div> <!-- .container	-->
			</div> <!-- .col-md-12 -->
		</div> <!-- .row -->
	</div><!-- .entry-content -->		
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
