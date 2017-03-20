<?php
/**
 * EFCA Notes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package EFCA_Notes
 */

if ( ! function_exists( 'efca_notes_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function efca_notes_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on EFCA Notes, use a find and replace
	 * to change 'efca-notes' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'efca-notes', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'efca-notes' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'efca_notes_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'efca_notes_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function efca_notes_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'efca_notes_content_width', 640 );
}
add_action( 'after_setup_theme', 'efca_notes_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function efca_notes_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'efca-notes' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'efca-notes' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'efca_notes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function efca_notes_scripts() {
	wp_enqueue_style( 'efca-notes-style', get_stylesheet_uri() );

	wp_enqueue_script('efca-app-js', get_template_directory_uri() . '/js/min/app-min.js', array('jquery'), true);

}
add_action( 'wp_enqueue_scripts', 'efca_notes_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Change Posts type to Notes
 */

function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Notes';
    $submenu['edit.php'][5][0] = 'Notes';
    $submenu['edit.php'][10][0] = 'Add Note';
    $submenu['edit.php'][16][0] = 'Notes Tags';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Notes';
    $labels->singular_name = 'Notes';
    $labels->add_new = 'Add Note';
    $labels->add_new_item = 'Add Note';
    $labels->edit_item = 'Edit Note';
    $labels->new_item = 'Note';
    $labels->view_item = 'View Note';
    $labels->search_items = 'Search Notes';
    $labels->not_found = 'No Notes found';
    $labels->not_found_in_trash = 'No Notes found in Trash';
    $labels->all_items = 'All Notes';
    $labels->menu_name = 'Notes';
    $labels->name_admin_bar = 'Notes';
}

/**
 * Change archive title on category pages
 */
 
add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );

add_filter( 'get_the_archive_title', function ( $title ) {

    if( is_category() ) {

        $title = single_cat_title( '', false );

    }

    return $title;

});
