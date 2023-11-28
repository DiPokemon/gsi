<?php
/**
 * gsi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gsi
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gsi_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on gsi, use a find and replace
		* to change 'gsi' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'gsi', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'main_menu' => 'Main menu',
    		'footer_menu' => 'Footer menu'
		)
	);

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

	// добавление класса к логотипу
	add_filter( 'get_custom_logo', 'change_logo_class' );
	function change_logo_class( $html ) {
		$html = str_replace( 'custom-logo-link', 'header__logo_img', $html );
		return $html;
	};

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'gsi_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'gsi_setup' );


require_once( get_template_directory().'/functions-parts/breadcrumbs.php' );
require_once( get_template_directory().'/functions-parts/navmenu.php' );
require_once( get_template_directory().'/functions-parts/crb_init.php' );
require_once( get_template_directory().'/functions-parts/widget-areas.php' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gsi_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gsi_content_width', 640 );
}
add_action( 'after_setup_theme', 'gsi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gsi_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'gsi' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'gsi' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gsi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gsi_scripts() {
	wp_enqueue_style( 'gsi-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'gsi-style', 'rtl', 'replace' );

	wp_enqueue_script( 'gsi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gsi_scripts' );

//правильное подключение CSS
function gsi_load_styles()
{
  wp_enqueue_style('custom-style', get_template_directory_uri().'/static/css/style.min.css');
  wp_enqueue_style('slick', get_template_directory_uri().'/static/libs/slick/slick.css');
  wp_enqueue_style('slick-theme', get_template_directory_uri().'/static/libs/slick/slick-theme.css');
  wp_enqueue_style('fontawesome', get_template_directory_uri().'/static/css/fontawesome.all.min.css');
}; 
add_action('wp_enqueue_scripts', 'gsi_load_styles', 10);

//правильное подключение JS
function gsi_load_scripts()
{  
  wp_enqueue_script('script', get_template_directory_uri() . '/static/js/script.js', array(), NULL, true);
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.1.min.js');
  wp_enqueue_script( 'jquery' , array(), NULL, true);
  wp_enqueue_script('slick', get_template_directory_uri() . '/static/libs/slick/slick.min.js', array('jquery'), NULL, true);
  wp_enqueue_script('init_main_slider', get_template_directory_uri().'/static/js/init_sliders.js', array('slick','blazy'), NULL, true);
  wp_enqueue_script('masonry', get_template_directory_uri() . '/static/libs/masonry.min.js', array('jquery'), NULL, true);
  wp_enqueue_script('init_masonry', get_template_directory_uri().'/static/js/init_masonry.js', array('masonry'), NULL, true);
  wp_enqueue_script('lazyload_map', get_template_directory_uri().'/static/js/lazyload_map.js', array(), NULL, true);
  wp_enqueue_script('mask_input', get_template_directory_uri().'/static/js/mask_input.js', array(), NULL, true);
  wp_enqueue_script('blazy', get_template_directory_uri().'/static/js/blazy.min.js', array(), NULL, true);
} 
add_action('wp_enqueue_scripts', 'gsi_load_scripts', 10);

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

add_action('wp_head', 'phone_front', 1); 
function phone_front($phone) {
    $phone = trim($phone);  
    $res = preg_replace(
      array(
        '/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{3})[-|\s]?\)[-|\s]?(\d{3})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
        '/[\+]?([7|8])[-|\s]?(\d{3})[-|\s]?(\d{3})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
        '/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{4})[-|\s]?\)[-|\s]?(\d{2})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
        '/[\+]?([7|8])[-|\s]?(\d{4})[-|\s]?(\d{2})[-|\s]?(\d{2})[-|\s]?(\d{2})/',	
        '/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{4})[-|\s]?\)[-|\s]?(\d{3})[-|\s]?(\d{3})/',
        '/[\+]?([7|8])[-|\s]?(\d{4})[-|\s]?(\d{3})[-|\s]?(\d{3})/',					
      ), 
      array(
        '+7 ($2) $3-$4-$5', 
        '+7 ($2) $3-$4-$5', 
        '+7 ($2) $3-$4-$5', 
        '+7 ($2) $3-$4-$5', 	
        '+7 ($2) $3-$4', 
        '+7 ($2) $3-$4', 
      ), 
      $phone
    );  
    return $res;
}

add_action('wp_head', 'phone_href', 1); 
function phone_href($phone) {
    $phone = trim($phone); 
	$res = preg_replace(
		array(
			'/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{3})[-|\s]?\)[-|\s]?(\d{3})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
			'/[\+]?([7|8])[-|\s]?(\d{3})[-|\s]?(\d{3})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
			'/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{4})[-|\s]?\)[-|\s]?(\d{2})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
			'/[\+]?([7|8])[-|\s]?(\d{4})[-|\s]?(\d{2})[-|\s]?(\d{2})[-|\s]?(\d{2})/',	
			'/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{4})[-|\s]?\)[-|\s]?(\d{3})[-|\s]?(\d{3})/',
			'/[\+]?([7|8])[-|\s]?(\d{4})[-|\s]?(\d{3})[-|\s]?(\d{3})/',					
		), 
		array(
			'+7$2$3$4$5', 
			'+7$2$3$4$5', 
			'+7$2$3$4$5', 
			'+7$2$3$4$5', 	
			'+7$2$3$4', 
			'+7$2$3$4', 
		), 
		$phone
	); 
	return $res;
}

add_action('wp_head', 'phone_wa', 1); 
function phone_wa($phone) {
    $phone = trim($phone); 
	$res = preg_replace(
		array(
			'/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{3})[-|\s]?\)[-|\s]?(\d{3})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
			'/[\+]?([7|8])[-|\s]?(\d{3})[-|\s]?(\d{3})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
			'/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{4})[-|\s]?\)[-|\s]?(\d{2})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
			'/[\+]?([7|8])[-|\s]?(\d{4})[-|\s]?(\d{2})[-|\s]?(\d{2})[-|\s]?(\d{2})/',	
			'/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{4})[-|\s]?\)[-|\s]?(\d{3})[-|\s]?(\d{3})/',
			'/[\+]?([7|8])[-|\s]?(\d{4})[-|\s]?(\d{3})[-|\s]?(\d{3})/',					
		), 
		array(
			'7$2$3$4$5', 
			'7$2$3$4$5', 
			'7$2$3$4$5', 
			'7$2$3$4$5', 	
			'7$2$3$4', 
			'7$2$3$4', 
		), 
		$phone
	); 
	return $res;
}
