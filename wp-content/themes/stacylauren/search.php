<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Stacy_Lauren
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

		<header class="entry-header container-fluid">
			<div class="row">
				<div class="col-md-12">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'stacylauren' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
						</div> <!-- .col-md-12 -->
					</div> <!-- .container -->
				</div><!-- .row -->
			<div class="arrow-down"></div>	
			</header><!-- .page-header -->
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>
			<div class="entry-content">
				<div class="content">
					<div class="row">
						<div class="container">
							<div class="col-md-8">					
								<?php /**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' ); ?>
							</div> <!-- .col-md-8 -->
							<div class="col-md-4">
								<?php get_sidebar(); ?>
							</div><!--.col-md-4-->
						</div> <!-- .container	-->	
					</div> <!-- .row -->
				</div> <!-- .content -->
			</div><!-- .entry-content -->									
					
							<?php endwhile;
					
					
					
							else :
					
								get_template_part( 'template-parts/content', 'none' );
					
							endif;
							?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
