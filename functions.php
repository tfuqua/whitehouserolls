<?php
function whitehouserolls_enqueue_styles() {

    $parent_style = 'parent-style'; // This is for general Ukrops theme styling

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.min.css' );
  	wp_enqueue_style( 'ukrops-style', get_stylesheet_directory_uri() . '/style.min.css');
}

add_action( 'wp_enqueue_scripts', 'whitehouserolls_enqueue_styles' );

//This method helps keep get_excerpt() to 5 lines
function custom_excerpt_length( $length ) {
	return 22;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


?>
