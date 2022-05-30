<?php
/**
 * theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theme
 */

if ( ! function_exists( 'theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function theme_setup() {
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
		'menu-h' => esc_html__( 'Primary', 'theme' ),
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

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'theme_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function theme_scripts() {
    $uri = get_template_directory_uri();

    // Styles
    //wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'theme-main-style', $uri . '/dist/css/bundle.css', null, 'all' );
    // Scripts
    wp_enqueue_script( 'theme-script', $uri . '/dist/js/bundle.js', array("jquery"), null, 'all' );

    //Remove Gutenberg Block Library CSS from loading on the frontend
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' );
    // /Remove Gutenberg Block Library CSS from loading on the frontend

    // Home page
    wp_register_style( 'css-home', $uri . '/dist/css/home.css', array('theme-main-style'), null, 'all' );
    wp_register_script( 'js-home', $uri . '/dist/js/home.js', array('jquery', 'theme-script'), null, true );

    if ( is_page_template('template-home.php') ) {
        wp_enqueue_script( 'js-home' );
        wp_enqueue_style( 'css-home' );
    }

    // Single Team
    wp_register_style( 'css-single-team', $uri . '/dist/css/single-team.css', array('theme-main-style'), null, 'all' );
    wp_register_script( 'js-single-team', $uri . '/dist/js/single-team.js', array('jquery', 'theme-script'), null, 'all' );

    if (is_singular('team')) {
        wp_enqueue_script( 'js-single-team' );
        wp_enqueue_style( 'css-single-team' );
    }
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

/**
 * Clear WP HEAD
 */
require get_template_directory() . '/include/clear-wp-head.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/include/customizer.php';

/**
 * Create custom post types and taxonomy.
 */
require get_template_directory() . '/include/setup.php';
/**
 * Php helpers
 */
require get_template_directory() . "/helpers/index.php";
