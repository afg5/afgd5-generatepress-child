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
        array('parent-style')
    );

}
//
// Your code goes below
//
//add_action('wp_enqueue_scripts','afgd5_scripts' );
//function afgd5_scripts() {
//  wp_enqueue_script('afgd5_print',get_stylesheet_directory_uri() . '/print_mode.js');
//}

// use below snippet to override functions in parent theme
// the function function_name must exist somewhere in parent theme inside an identical conditional
//if ( ! function_exists( 'function_name' ) ) :
//function function_name()
//{
//}
//endif;

function my_google_map_key() {
  return 'AIzaSyAh_mcKF3EmCkYagHvvu1k6Rqy0kHsDeHc';
}
function my_acf_google_map_api( $api ){
	$api['key'] = my_google_map_key();
	return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// Use to remove some post formats if desired
//add_action( 'after_setup_theme', 'afgd5_setup',20);
//function afgd5_setup(){
//  add_theme_support( 'post-formats', array( 'aside', 'gallery', 'meeting' ) );
//}
//end Use to remove some post formats if desired

//add_action( 'wp_enqueue_scripts', 'override_acf_styles', 100 );
//add_action( 'admin_enqueue_scripts', 'override_acf_styles', 100 );
//function override_acf_styles() {
//	$file=get_stylesheet_directory()."/acf-input.css";
//	echo( "<div>Registering</div>" );
//	if(file_exists($file)){
//	echo( "<div>Registering</div>" );
//	$css=get_stylesheet_directory_uri()."/acf-input.css";
//	wp_deregister_style('acf-input');
//	//$dep=array('acf-global', 'wp-color-picker', 'select2', 'acf-datepicker');
//	$dep=array('jquery', 'jquery-ui-core', 'jquery-ui-datepicker');
//	wp_register_style('acf-input',"$css",$dep,null);
//	}
//}
add_action( 'admin_enqueue_scripts', 'change_acf_styles', 100 );
function change_acf_styles(){
  if( wp_style_is( 'acf-input' , "enqueued" ) ){
    $file=get_stylesheet_directory()."/acf-input.css";
    if(file_exists($file)){
      $css=get_stylesheet_directory_uri()."/acf-input.css";
      $dep=array('acf-input');
      if( ! wp_style_is('acf-input-mods','registered') ) wp_register_style('acf-input-mods',"$css",$dep,null);
      if( ! wp_style_is('acf-input-mods','enqueued') ) wp_enqueue_style('acf-input-mods');
    }
  }
}


add_action( 'template_redirect', 'print_csv' );
function print_csv() {
  //takes request to /downloads/data.csv and returns meeting list in csv format
  if ( ! current_user_can( 'export' ) )
      return;

  if( preg_match( '/\/downloads\/data.csv$/', $_SERVER['REQUEST_URI'] ) > 0 ) {
    header('Content-Type: application/csv',true,200);
    header('Content-Disposition: attachment; filename=example.csv');
    header('Pragma: no-cache');
    header("Expires: 0");

    $args = array(
	'posts_per_page'   => 9999,
	'offset'           => 0,
	'category'         => '',
	'category_name'    => 'meeting',
	'orderby'          => 'date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'author'	   => '',
	'author_name'	   => '',
	'post_status'      => 'publish',
	'suppress_filters' => true
);
$posts_array = get_posts( $args );
    global $post;
    //$post = get_post( 50686 ); //for debugging
    if( $posts_array ){
      echo( "Title,Location\n" );
      foreach( $posts_array as $post ){
        setup_postdata( $post );
        get_template_part( 'meeting', 'csv' );
      }
      exit();
    }
  }
  //die("DEAD");
}
