<?php
/**
 * The sidebar containing the buttons area for the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stacy_Lauren
 */

if ( ! is_active_sidebar( 'sidebar-projects' ) ) {
	return;
}
?>


<?php dynamic_sidebar( 'sidebar-projects' ); ?>
