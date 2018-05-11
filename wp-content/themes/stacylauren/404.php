<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
						<h1 class="page-title"><?php esc_html_e( 'Oops!', 'stacylauren' ); ?></h1>
					</div> <!-- .col-med-12 -->
					<div class="row">
						<div class="container">
							<div class="col-md-12 project-excerpt">
								<p><?php esc_html_e( 'That page can&rsquo;t be found :(', 'stacylauren' ); ?></p>
							</div> <!-- .col-md-12 -->
						</div> <!-- .container -->
					</div><!-- .row -->					
				</div> <!-- row -->
		    	<div class="arrow-down"></div>
			</header><!-- .entry-header -->
			<section class="error-404 not-found">			
				<div class="entry-content">
					<div class="content fadein700">
						<div class="row">
							<div class="container">
								<div class="col-md-8">	
									<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'stacylauren' ); ?></p>
									<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
									<div class="widget widget_categories">
										<h2><?php esc_html_e( 'Most Used Categories', 'stacylauren' ); ?></h2>
										<ul>
											<?php
											wp_list_categories( array(
												'orderby'    => 'count',
												'order'      => 'DESC',
												'show_count' => 1,
												'title_li'   => '',
												'number'     => 10,
											) );
											?>
										</ul>
									</div><!-- .widget -->
									<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
								</div> <!-- .col-md-8 -->
								<div class="col-md-4">					
									<?php get_search_form();
									/* translators: %1$s: smiley */
									$stacylauren_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'stacylauren' ), convert_smilies( ':)' ) ) . '</p>';
									the_widget( 'WP_Widget_Archives', "after_title=</h2>$stacylauren_archive_content" );
								?>

							</div><!--.col-md-4>-->
						</div> <!-- .container	-->
					</div> <!-- .row -->
				</div><!-- .entry-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
