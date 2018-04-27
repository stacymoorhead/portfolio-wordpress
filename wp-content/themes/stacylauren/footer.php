<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stacy_Lauren
 */

?>

        		</div><!-- #content #page-content-wrapper .site-content -->
        
        </div><!-- #page .site -->
        <?php wp_footer(); ?>
        <?php if ( !is_front_page() ) : ?>
        <footer class="site-footer">
            <div class="row footer-widgets">
                <div class="container">
                    <div class="col-md-4">
                        <?php wp_nav_menu( array ( 'menu' => 'footer' ) ); ?>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-4">
                        <?php the_custom_logo(); ?>
                        <?php bloginfo( 'name' ); ?>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-4">
                        <h2>Find me on:</h2>
                        <?php get_template_part( 'menu', 'social' ); ?>
                    </div><!-- .col-md-4 -->
                </div> <!-- .container -->    
            </div> <!-- .row footer-widgets-->
            <div class="row copyright">
                <div class="col-md-12">
                    <p>Website design &amp; development by <a href="http://www.stacylauren.com">Stacy Lauren Designs</a> Copyright &copy; <?php echo date(" Y"); ?> </p>
                	<p>Website not viewing properly? You may need to upgrade your <a href="http://whatbrowser.org/">browser</a>. This site is best viewed in a <a href="http://browsehappy.com/">modern browser</a>.</p>
                </div><!-- .col-md-12 -->
            </div><!-- .row .copyright -->
        </footer>
        <?php	
        endif; ?>
   
    </div> <!-- .bg -->
</body>
</html>
