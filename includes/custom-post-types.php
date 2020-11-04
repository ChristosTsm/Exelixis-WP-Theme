<?php 
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