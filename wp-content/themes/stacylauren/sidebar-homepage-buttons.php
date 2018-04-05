<?php
/**
 * The sidebar containing the buttons area for the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stacy_Lauren
 */

if ( ! is_active_sidebar( 'homepage-buttons' ) ) {
	return;
}
?>


<?php dynamic_sidebar( 'homepage-buttons' ); ?>
