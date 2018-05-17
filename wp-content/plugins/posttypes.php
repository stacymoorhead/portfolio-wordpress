<?php
/**
 * Plugin Name: Custom Post Types and Taxonomies
 * Description: A plugin that adds custom post types and taxonomies
 * Version: 0.1
 * Author: Stacy Moorhead
 * License: GPL2
 */
 
 /* Copyright 2018 Stacy Moorhead
Custom Post Types and Taxonomies is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with this program. If not, write to the Free Software Foundation, Inc.,
51 Franklin St., Fifth Floor, Boston, MA 02110-1301 USA
*/

function custom_posttypes() {
    
    //Portfolio 
    $labels = array(
		'name'               => 'Projects',
		'singular_name'      => 'Project',
		'menu_name'          => 'Projects' ,
		'name_admin_bar'     => 'Project',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Project' ,
		'new_item'           => 'New Project',
		'edit_item'          => 'Edit Project' ,
		'view_item'          => 'View Project' ,
		'all_items'          => 'All Projects',
		'search_items'       => 'Search Project',
		'parent_item_colon'  => 'Parent Projects',
		'not_found'          => 'No projects found.',
		'not_found_in_trash' => 'No projects found in Trash.' 
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-images-alt2',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'projects' ),
		'capability_type'    => 'post',
		'has_archive'        => 'projects',
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
		'taxonomies'		 => array( 'post_tag' )

	);
    register_post_type('projects', $args);
    
}


add_action('init', 'custom_posttypes');

function my_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry, 
    // when you add a post of this CPT.
    custom_posttypes();

    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );

//Set order posts appear on home page
function set_custom_post_types_admin_order($wp_query) {
  if (is_admin()) {

    // Get the post type from the query
    $post_type = $wp_query->query['post_type'];

    if ( $post_type == 'POST_TYPE') {

      // 'order' value can be ASC or DESC
      $wp_query->set('order', 'ASC');
    }
  }
}
/*add_filter('pre_get_posts', 'set_custom_post_types_admin_order');

function custom_post_type_cat_filter($query) {
  if ( !is_admin() && $query->is_main_query() ) {
    if ($query->is_term()) {
      $query->set( 'post_type', array( 'post', 'Projects' ) );
    }
  }
}

add_action('pre_get_posts','custom_post_type_cat_filter');*/

function custom_taxonomies() {
		register_taxonomy( "project-categories", 
		array( 	"projects" ), 
		array( 	"hierarchical" => true,
				"labels" => array('name'=>"Project Categories",'add_new_item'=>"Add New category"), 
				"singular_label" => __( "Project Category" ), 
				"rewrite" => array( 'slug' => 'project-categories', // This controls the base slug that will display before each term 
				                    'with_front' => false),
			 ) 
	);  
}

add_action('init', 'custom_taxonomies');