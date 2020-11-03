<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'aos-styles', get_stylesheet_directory_uri() . '/css/aos.css', array() );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/0e69954788.js', array(), false );
    wp_enqueue_script( 'aos-js', get_stylesheet_directory_uri() . '/js/aos.js',array(), true );
    wp_enqueue_script( 'exelixis-custom', get_stylesheet_directory_uri() . '/js/exelixis-custom.js', array(), $the_theme->get( 'Version' ), true );
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'exelixis-circus', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );



function ex_services_custom_post_type() {

    $args = array(

        'labels' => array(
            'name' => 'Υπηρεσίες',
            'singular_name' => 'Υπηρεσία'
        ),
        'menu_icon' => 'dashicons-portfolio',
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => array('title','editor', 'thumbnail')
    );

    register_post_type( 'services', $args );

}

add_action( 'init', 'ex_services_custom_post_type' );


function ex_custom_excerpt_length( $length ) {
    return 35;
}
add_filter( 'excerpt_length', 'ex_custom_excerpt_length', 999 );


// Menus

register_nav_menus( 

    array(
        'links-menu' => 'Links Menu',
        'services-menu' => 'Services Menu',
        'mobile-menu' => 'Mobile Menu',
        'lang-menu' => 'Lang Menu'
    )

);