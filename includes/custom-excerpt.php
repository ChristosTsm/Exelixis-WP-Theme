<?php 

function ex_custom_excerpt_length( $length ) {
    return 35;
}
add_filter( 'excerpt_length', 'ex_custom_excerpt_length', 999 );