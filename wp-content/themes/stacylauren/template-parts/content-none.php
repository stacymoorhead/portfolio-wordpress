<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stacy_Lauren
 */

?>

<section class="no-results not-found">
	<div class="entry-content">
		<div class="content fadein700">
			<div class="row">
				<div class="container">
				<?php
				if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
				<div class="col-md-8">
				<h2><?php esc_html_e( 'Nothing Found :(', 'stacylauren' ); ?></h2>					
				<?php	printf(
						'<p>' . wp_kses(
							/* translators: 1: link to WP admin new post page. */
							__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'stacylauren' ),
							array(
								'a' => array(
									'href' => array(),
								),
							)
						) . '</p>',
						esc_url( admin_url( 'post-new.php' ) )
					); ?>
				</div><!--.col-md-8-->		
				<?php elseif ( is_search() ) :
					?>
				<div class="col-md-8">
					<h2><?php esc_html_e( 'Nothing Found :(', 'stacylauren' ); ?></h2>
					<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'stacylauren' ); ?></p>
				</div><!--.col-md-8>-->
				<div class="col-md-4">
					<?php
					get_search_form(); ?>
				</div><!--.col-md-4-->
				<?php else :
					?>
				<div class="col-md-8">
					<h2><?php esc_html_e( 'Nothing Found :(', 'stacylauren' ); ?></h2>
					<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'stacylauren' ); ?></p>
				</div><!--.col-md-8>-->	
				<div class="col-md-4">
					<?php
					get_search_form(); ?>
				</div><!--.col-md-4-->
		
				<?php endif;
				?>

				</div> <!-- .container	-->	
			</div> <!-- .row -->
		</div> <!-- .content -->
	</div><!-- .page-content -->
</section><!-- .no-results -->
