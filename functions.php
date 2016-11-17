<?php
function whitehouserolls_enqueue_styles() {

    $parent_style = 'parent-style'; // This is for general Ukrops theme styling

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.min.css' );
  	wp_enqueue_style( 'ukrops-style', get_stylesheet_directory_uri() . '/style.min.css');
}

add_action( 'wp_enqueue_scripts', 'whitehouserolls_enqueue_styles' );


function remove_page_templates( $pages_templates ) {

    unset($pages_templates['templates/blog.php']);
    unset($pages_templates['templates/careers.php']);
    unset($pages_templates['templates/community.php']);
    unset($pages_templates['templates/food-team.php']);
    unset($pages_templates['templates/order-online.php']);
    unset($pages_templates['templates/our-story.php']);
    unset($pages_templates['templates/product.php']);

    return $pages_templates;
}
add_filter( 'theme_page_templates', 'remove_page_templates' );

?>
