<?php

/**
 * Enqueue scripts and styles for the theme.
 */
function drogon_load_styles() {

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/libraries/bootstrap/js/bootstrap.min.js', array('jquery'), '4.3.1');
    wp_enqueue_script('drogon-js', get_template_directory_uri() . '/main.js', array('jquery'), null);
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/libraries/bootstrap/css/bootstrap.min.css', array(), '4.3.1');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,700', array(), null);
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/libraries/font-awesome/css/all.css', array(), '5.8.1');
    wp_enqueue_style('drogon-style', get_stylesheet_uri(), array(), null);

}
add_action('wp_enqueue_scripts', 'drogon_load_styles');

/**
 * Sets up theme defaults and registers support for various WordPress features 
 */
function drogon_setup(){
    // Enable support for menus, featured images
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag' );
    
    // Adding supported image sizes
    add_image_size('drogon-thumbnail-small', 300, 160, false);
    add_image_size('drogon-thumbnail-medium', 400, 260, false);

    // This theme uses wp_nav_menu() in two locations
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'drogon' ),
		'footer' => esc_html__( 'Footer Menu', 'drogon' )
	) );
}
add_action('after_setup_theme', 'drogon_setup');

/**
 * Sets up Sidebar function support
 */
function drogon_sidebar_setup(){
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'drogon' ),
            'id'            => 'drogon-sidebar',
            'class'         => 'drogon',
            'description'   => 'Standard Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		    'after_widget'  => '</aside>',
		    'before_title'  => '<h1 class="widget-title">',
		    'after_title'   => '</h1>'
        )
    );
}
add_action('widgets_init', 'drogon_sidebar_setup');

/**
 * Hooks to inject bootstrap classes to Wordpress generated elements.
 */
function add_additional_class_on_nav_li($classes, $item, $args) {
    if($args->add_nav_li_class) {
        $classes[] = $args->add_nav_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_nav_li', 1, 3);

function add_additional_class_on_nav_a($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
 }
add_filter('wp_nav_menu','add_additional_class_on_nav_a');

function add_tag_class($links) {
	return str_replace('<a href="', '<a class="badge badge-success" href="', $links);
}
add_filter( "term_links-post_tag", 'add_tag_class');

function add_custom_table_class( $content ) {
    return str_replace( '<table class="', '<table class="table ', $content );
}
add_filter( 'the_content', 'add_custom_table_class' );

function add_table_wrapper($content) {
  return preg_replace_callback('~<table.*?</table>~is', function($match) {
    return '<div class="table-responsive">' . $match[0] . '</div>';
  }, $content);
}
add_filter('the_content', 'add_table_wrapper');
