<?php
function whitehouserolls_enqueue_styles() {

    $parent_style = 'parent-style'; // This is for general Ukrops theme styling

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.min.css' );
  	wp_enqueue_style( 'ukrops-style', get_stylesheet_directory_uri() . '/style.min.css');
}

add_action( 'wp_enqueue_scripts', 'whitehouserolls_enqueue_styles' );


add_filter( 'theme_page_templates', 'my_remove_page_template' );
function my_remove_page_template( $pages_templates ) {

    unset( $pages_templates['templates/page-products.php'] );

    return $pages_templates;
}


?>
