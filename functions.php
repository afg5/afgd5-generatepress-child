<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style'),
	wp_get_theme()->get('Version')
    );
}
//
// Your code goes below
//

// override functions in parent theme
// To override, the function function_name must exist somewhere in parent theme inside a conditional
//if ( ! function_exists( 'function_name' ) ) :
//function function_name()
//{
//}
//endif;

function generate_header_items() {
//rearranging to allow for proper float of logo
	// Header widget
	generate_construct_header_widget();

	// Site logo
	generate_construct_logo();
	
	// Site title and tagline
	generate_construct_site_title();
	
}

function my_empty() {
  return false;
}
add_filter('generate_post_date','my_empty');
add_filter('generate_post_author','my_empty');

