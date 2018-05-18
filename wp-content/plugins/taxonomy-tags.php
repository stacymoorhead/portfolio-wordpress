<?php
/*
Plugin Name: Project Tags Shortcode
Description: Adds shortcode to display custom taxonomies in sidebar widgets
*/

// First we create a function
function list_tags_custom_taxonomy( $atts ) {
 
// Inside the function we extract custom taxonomy parameter of our shortcode
 
    extract( shortcode_atts( array(
        'custom_taxonomy' => '',
    ), $atts ) );
 
// arguments for function wp_list_categories
$args = array( 
'taxonomy' => $custom_taxonomy,
'title_li' => ''
);
//echo '<h2 class="widget-title">All Project Tags</h2>'; 
echo wp_tag_cloud($args);

}
 
// Add a shortcode that executes our function
add_shortcode( 'project-tags', 'list_tags_custom_taxonomy' );
 
//Allow Text widgets to execute shortcodes
 
add_filter('widget_text', 'do_shortcode');  
  
?>