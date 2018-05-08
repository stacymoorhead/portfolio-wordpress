<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stacy_Lauren
 */

?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header>
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	
			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php
				stacylauren_posted_on();
				stacylauren_posted_by();
				?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
	
		<?php stacylauren_post_thumbnail(); ?>
	
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	

	</article><!-- #post-<?php the_ID(); ?> -->
				
			