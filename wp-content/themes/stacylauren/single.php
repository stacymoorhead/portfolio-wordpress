<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Stacy_Lauren
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<header class="entry-header container-fluid">
			<div class="row">
				<div class="col-md-12">
				<?php	the_title( '<h1 class="entry-title">', '</h1>' ); ?>		
				</div> <!-- .col-md-12 -->
				<?php if ( is_single() && 'projects' == get_post_type()) : ?>
				<div class="row">
					<div class="container">
						<div class="col-md-12 project-excerpt">
							<?php the_excerpt(); ?>
						</div> <!-- .col-md-12 -->
					</div> <!-- .container -->
				</div><!-- .row -->
				<?php endif; ?>
			</div> <!-- row -->
	    	<div class="arrow-down"></div>
		</header><!-- .entry-header -->			
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile; // End of the loop.
		?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
