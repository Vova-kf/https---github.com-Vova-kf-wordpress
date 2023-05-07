<?php

/**
 * ecoverde functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ecoverde
 */



// function ecoverde_enqueue_style()
// {
// 	wp_enqueue_style('ecoverde-style', get_template_directory_uri() . '/assets/css/style.css');
// 	wp_enqueue_style('ecoverde-animate', get_template_directory_uri() . '/assets/css/animate.css');
// 	wp_enqueue_style('ecoverde-owl.carousel.min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
// 	wp_enqueue_style('ecoverde-owl.theme.default.min', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
// 	wp_enqueue_style('ecoverde-magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
// 	wp_enqueue_style('ecoverde-flaticon', get_template_directory_uri() . '/assets/css/flaticon.css');
// 	wp_enqueue_style('ecoverde-bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
// }
// add_action('wp_enqueue_scripts', 'ecoverde_enqueue_style');

// function ecoverde_enqueue_script()
// {
// 	wp_enqueue_style('ecoverde-bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min');
// 	wp_enqueue_style('ecoverde-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
// 	wp_enqueue_style('ecoverde-jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js');
// 	wp_enqueue_style('ecoverde-popper', get_template_directory_uri() . '/assets/js/popper.min.js');
// 	wp_enqueue_style('ecoverde-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
// 	wp_enqueue_style('ecoverde-jquery.easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js');
// 	wp_enqueue_style('ecoverde-waypoint', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js.js');
// 	wp_enqueue_style('ecoverde-stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js');
// 	wp_enqueue_style('ecoverde-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js');
// 	wp_enqueue_style('ecoverde-jquery.magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js');
// 	wp_enqueue_style('ecoverde-jquery.animateNumbey', get_template_directory_uri() . '/assets/js/jquery.animateNumber.min.js');
// 	wp_enqueue_style('ecoverde-scrollax', get_template_directory_uri() . '/assets/js/scrollax.min.js');


// 	wp_enqueue_style('ecoverde-google-map', get_template_directory_uri() . '/assets/js/google-map.js');
// 	wp_enqueue_style('ecoverde-main', get_template_directory_uri() . '/assets/js/main.js');
// }
// add_action('wp_enqueue_scripts', 'ecoverde_enqueue_script');

function ecoverde_register_nav_menus()
{
	register_nav_menus(array(
		'header_nav' => 'header',
		'footer_nav' => 'Footer',
	));
}
add_action('after_setup_theme', 'ecoverde_register_nav_menus');

// function create_post_type() {
// 	register_post_type( 'product',
// 			array(
// 					'labels' => array(
// 							'name' => __( 'Товари' ),
// 							'singular_name' => __( 'Товар' )
// 					),
// 					'public' => true,
// 					'has_archive' => true,
// 					'supports' => array(  'custom-fields' )
// 			)
// 	);
// }
// add_action( 'init', 'create_post_type' );







if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ecoverde_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ecoverde, use a find and replace
		* to change 'ecoverde' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('ecoverde', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');



	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'ecoverde_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'ecoverde_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ecoverde_content_width()
{
	$GLOBALS['content_width'] = apply_filters('ecoverde_content_width', 640);
}
add_action('after_setup_theme', 'ecoverde_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ecoverde_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'ecoverde'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'ecoverde'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'ecoverde_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function ecoverde_scripts()
{
	wp_enqueue_style('ecoverde-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('ecoverde-style', 'rtl', 'replace');

	wp_enqueue_script('ecoverde-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'ecoverde_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
