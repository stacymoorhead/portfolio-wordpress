<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</div> <!-- .col-med-12 -->
				</div> <!-- row -->
		    	<div class="arrow-down"></div>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<div class="content fadein700">
					<div class="row">
						<div class="container">
							<div class="col-md-12">			
							<?php
							while ( have_posts() ) :
								the_post();
					
								get_template_part( 'template-parts/content', 'page' );
					
							?>
						</div> <!-- .col-md-12 -->
					</div> <!-- .container	-->
				</div> <!-- .row -->
			</div><!-- .entry-content -->
			<?php // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile; // End of the loop.
		?>			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
