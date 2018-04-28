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
                    <div class="col-md-4 links">
                        <h2>Links</h2>
                        <hr>
                        <?php wp_nav_menu( array ( 'menu' => 'footer' ) ); ?>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-4 footer-branding">
                        <h2>Contact</h2>
                        <hr>
                        <?php the_custom_logo(); ?>
                        <h3>Stacy Moorhead</h3>
                        <p class="email"><i class="fa fa-envelope"></i> <a href="mailto:<?php echo ( get_theme_mod('email_link') ); ?>"><?php echo ( get_theme_mod('email_link') ); ?></a></p>
                        <p class="phone"><i class="fa fa-phone"></i> <?php echo ( get_theme_mod('phone') ); ?></p>
                        <?php get_sidebar('footer-button'); ?>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-4 footer-social">
                        <h2>Find me on</h2>
                        <hr>
                        <?php get_template_part( 'menu', 'social' ); ?>
                    </div><!-- .col-md-4 -->
                </div> <!-- .container -->    
            </div> <!-- .row footer-widgets-->
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-12">
                        <p>Website design &amp; development by <a href="http://www.stacylauren.com">Stacy Lauren Designs</a> Copyright &copy; <?php echo date(" Y"); ?> </p>
                    	<p>Website not viewing properly? You may need to upgrade your <a href="http://whatbrowser.org/">browser</a>. This site is best viewed in a <a href="http://browsehappy.com/">modern browser</a>.</p>
                    </div><!-- .col-md-12 -->
                </div> <!-- .row -->   
            </div><!-- .container .copyright -->
        </footer>
        <?php	
        endif; ?>
   
    </div> <!-- .bg -->
</body>
</html>
