<?php
/**
 * Stacy Lauren functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Stacy_Lauren
 */

if ( ! function_exists( 'stacylauren_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function stacylauren_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Stacy Lauren, use a find and replace
		 * to change 'stacylauren' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'stacylauren', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'stacylauren' ),
			'footer' => esc_html__( 'Footer', 'stacylauren' ),
			'social' => esc_html__( 'Social', 'stacylauren' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*// Set up the WordPress core custom background feature. 
		add_theme_support( 'custom-background', apply_filters( 'stacylauren_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );*/

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'stacylauren_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function stacylauren_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'stacylauren_content_width', 640 );
}
add_action( 'after_setup_theme', 'stacylauren_content_width', 0 );

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function stacylauren_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'stacylauren-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'stacylauren_resource_hints', 10, 2 );	

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function stacylauren_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'stacylauren' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'stacylauren' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Homepage Buttons', 'stacylauren' ),
		'id'            => 'homepage-buttons',
		'description'   => esc_html__( 'Add homepage buttons here.', 'stacylauren' ),
		'before_widget' => '<div id="%1$s" class="button fadein700 %2$s">',
		'after_widget'  => '</div>',
	) );	
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Project Button', 'stacylauren' ),
		'id'            => 'footer-button',
		'description'   => esc_html__( 'Add link to projects to footer button.', 'stacylauren' ),
		'before_widget' => '<div id="%1$s" class="button %2$s">',
		'after_widget'  => '</div>',
	) );	
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Projects', 'stacylauren' ),
		'id'            => 'sidebar-projects',
		'description'   => esc_html__( 'Add widgets here.', 'stacylauren' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	
}
add_action( 'widgets_init', 'stacylauren_widgets_init' );


 

/**
 * Add buttons shortcode 
 */
 function button_shortcode( $atts, $content = null ) {
	
	// Extract shortcode attributes
	extract( shortcode_atts( array(
		'url'    => '',
		'title'  => '',
		'target' => '',
		'text'   => '',
		/*'color'  => 'green',*/
	), $atts ) );

	// Use text value for items without content
	$content = $text ? $text : $content;

	// Return button with link
	if ( $url ) {
		$link_attr = array(
			'href'   => esc_url( $url ),
			'title'  => esc_attr( $title ),
			'target' => ( 'blank' == $target ) ? '_blank' : '',
		);
		$link_attrs_str = '';
		foreach ( $link_attr as $key => $val ) {
			if ( $val ) {
				$link_attrs_str .= ' '. $key .'="'. $val .'"';
			}
		}
		return '<a'. $link_attrs_str .'><button>'. do_shortcode( $content ) .'</button></a>';
	}
	// No link defined so return button as a span
	else {
		return '<button>'. do_shortcode( $content ) .'</button>';
	}
}
add_shortcode( 'button', 'button_shortcode' );

/**
 * Enqueue scripts and styles.
 */
function stacylauren_scripts() {
	//Load Bootstrap
	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css' );
	wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js', array('jquery'),'1.12.4');	
	
	//Enqueue Google Fonts: Montserrat, Open Sans, Covered by your Grace
	wp_enqueue_style( 'stacylauren-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:300,400,700|Covered+By+Your+Grace');
	
	wp_enqueue_style( 'stacylauren-style', get_stylesheet_uri() );

	// Load Global JS
	wp_enqueue_script( 'stacylauren-global', get_template_directory_uri() . '/js/global.js', array('jquery'),'1.11.3', true );
	
	// Load Modernizr
	//wp_enqueue_script( 'stacylauren-modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', array(), '2.6.2', false );
	
	// Load Touch Effects
	//wp_register_script('stacylauren-toucheffects', get_theme_file_uri('/js/toucheffects.js'), array(), '1.0.0', true);
	//wp_enqueue_script('stacylauren-toucheffects');

	wp_enqueue_script( 'stacylauren-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	// Load the html5 shiv.
	wp_enqueue_script( 'html5', get_theme_file_uri( '/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );
	
	
}

add_action( 'wp_enqueue_scripts', 'stacylauren_scripts' );
	// Load Font Awesome
	add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
	function enqueue_font_awesome() {
		wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' );
	}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}





