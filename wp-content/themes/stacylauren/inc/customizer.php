<?php
/**
 * Stacy Lauren Theme Customizer
 *
 * @package Stacy_Lauren
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function stacylauren_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'stacylauren_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'stacylauren_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'stacylauren_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function stacylauren_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function stacylauren_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function stacylauren_customize_preview_js() {
	wp_enqueue_script( 'stacylauren-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'stacylauren_customize_preview_js' );


/**
* Create Logo Setting and Upload Control
*/
function stacylauren_new_customizer_settings($wp_customize) {
// add a setting for the site logo
$wp_customize->add_setting('stacylauren_homepage_logo');
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'stacylauren_homepage_logo',
array(
'label' => 'Upload Homepage Logo',
'section' => 'title_tagline',
'settings' => 'stacylauren_homepage_logo',
) ) );
}
add_action('customize_register', 'stacylauren_new_customizer_settings');



