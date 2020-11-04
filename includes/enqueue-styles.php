<?php 

function ex_theme_enqueue_styles() {

	// Get the theme data
    $the_theme = wp_get_theme();

    // Enqueue CSS 
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );

    wp_enqueue_style( 'aos-styles', get_stylesheet_directory_uri() . '/css/aos.css', array() );


    // Enqueue JS
    wp_enqueue_script( 'jquery');

    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {

        wp_enqueue_script( 'comment-reply' );

    }

    wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/0e69954788.js', array(), false );

    wp_enqueue_script( 'aos-js', get_stylesheet_directory_uri() . '/js/aos.js',array(), true );

    wp_enqueue_script( 'exelixis-custom', get_stylesheet_directory_uri() . '/js/exelixis-custom.js', array(), $the_theme->get( 'Version' ), true );

}

add_action( 'wp_enqueue_scripts', 'ex_theme_enqueue_styles' );