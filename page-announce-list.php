<?php
/**
 * The template for displaying page of anouncement titles.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package GeneratePress
 */
 
// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;

if( ! function_exists(__NAMESPACE__.'afgd5me_remove_sidebars') ){
  function afgd5me_remove_sidebars($layout){
    return 'no-sidebar';
  }
}
add_filter( 'generate_sidebar_layout',__NAMESPACE__.'afgd5me_remove_sidebars'); #take off sidebar before calling header
#function remove_shortcode_from_index( $content ) {
#  $content = strip_shortcodes( $content );
#  return $content;
#}
#add_filter( 'the_content', __NAMESPACE__.'remove_shortcode_from_index' );
add_filter('afgd5sh_open',__NAMESPACE__.'empty_string');
add_filter('afgd5sh_closed',__NAMESPACE__.'empty_string');
function empty_string(){
  return '';
}

//get_header(); 
//generate_scripts();
#$suffix = generate_get_min_suffix();
#	
#	
#	// Enqueue our CSS.
#	wp_enqueue_style( 'generate-style-grid', get_template_directory_uri() . "/css/unsemantic-grid{$suffix}.css", false, GENERATE_VERSION, 'all' );
#	wp_enqueue_style( 'generate-style', get_template_directory_uri() . '/style.css', array( 'generate-style-grid' ), GENERATE_VERSION, 'all' );
#	wp_enqueue_style( 'generate-mobile-style', get_template_directory_uri() . "/css/mobile{$suffix}.css", array( 'generate-style' ), GENERATE_VERSION, 'all' );
#	
#	// Add the child theme CSS if child theme is active.
#	if ( is_child_theme() ) {
#		wp_enqueue_style( 'generate-child', get_stylesheet_uri(), array( 'generate-style' ), filemtime( get_stylesheet_directory() . '/style.css' ), 'all' );
#	}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php //wp_head(); ?>
</head>

<body <?php generate_body_schema();?> <?php body_class(); ?>>
<div id="outerdiv" style="width:100%">

<style id="generate-style-inline-css" type="text/css">
#pseudo-body {background-color:#55acd1;color:#3a3a3a;}a, a:visited{color:#009e39;text-decoration:none;}a:visited{color:#009e39;}a:hover, a:focus, a:active{color:#0041b2;text-decoration:none;}body .grid-container{max-width:1100px;}
body, button, input, select, textarea{font-family:"Open Sans", sans-serif;}.main-navigation .main-nav ul ul li a{font-size:14px;}@media (max-width:768px){.main-title{font-size:30px;}h1{font-size:30px;}h2{font-size:25px;}}
.site-header{background-color:#ffffff;color:#3a3a3a;}.site-header a,.site-header a:visited{color:#3a3a3a;}.main-title a,.main-title a:hover,.main-title a:visited{color:#222222;}.site-description{color:#999999;}.main-navigation,.main-navigation ul ul{background-color:#222222;}.main-navigation .main-nav ul li a,.menu-toggle{color:#ffffff;}.main-navigation .main-nav ul li > a:hover,.main-navigation .main-nav ul li > a:focus, .main-navigation .main-nav ul li.sfHover > a{color:#ffffff;background-color:#3f3f3f;}button.menu-toggle:hover,button.menu-toggle:focus,.main-navigation .mobile-bar-items a,.main-navigation .mobile-bar-items a:hover,.main-navigation .mobile-bar-items a:focus{color:#ffffff;}.main-navigation .main-nav ul li[class*="current-menu-"] > a{color:#ffffff;background-color:#3f3f3f;}.main-navigation .main-nav ul li[class*="current-menu-"] > a:hover,.main-navigation .main-nav ul li[class*="current-menu-"].sfHover > a{color:#ffffff;background-color:#3f3f3f;}.navigation-search input[type="search"],.navigation-search input[type="search"]:active{color:#3f3f3f;background-color:#3f3f3f;}.navigation-search input[type="search"]:focus{color:#ffffff;background-color:#3f3f3f;}.main-navigation ul ul{background-color:#3f3f3f;}.main-navigation .main-nav ul ul li a{color:#ffffff;}.main-navigation .main-nav ul ul li > a:hover,.main-navigation .main-nav ul ul li > a:focus,.main-navigation .main-nav ul ul li.sfHover > a{color:#ffffff;background-color:#4f4f4f;}.main-navigation .main-nav ul ul li[class*="current-menu-"] > a{color:#ffffff;background-color:#4f4f4f;}.main-navigation .main-nav ul ul li[class*="current-menu-"] > a:hover,.main-navigation .main-nav ul ul li[class*="current-menu-"].sfHover > a{color:#ffffff;background-color:#4f4f4f;}.separate-containers .inside-article, .separate-containers .comments-area, .separate-containers .page-header, .one-container .container, .separate-containers .paging-navigation, .inside-page-header{background-color:#ffffff;}.entry-meta{color:#888888;}.entry-meta a,.entry-meta a:visited{color:#666666;}.entry-meta a:hover{color:#1e73be;}.sidebar .widget{background-color:#ffffff;}.sidebar .widget .widget-title{color:#000000;}.site-info{color:#ffffff;background-color:#222222;}.site-info a,.site-info a:visited{color:#ffffff;}.site-info a:hover{color:#606060;}.footer-bar .widget_nav_menu .current-menu-item a{color:#606060;}input[type="text"],input[type="email"],input[type="url"],input[type="password"],input[type="search"],textarea{color:#666666;background-color:#fafafa;border-color:#cccccc;}input[type="text"]:focus,input[type="email"]:focus,input[type="url"]:focus,input[type="password"]:focus,input[type="search"]:focus,textarea:focus{color:#666666;background-color:#ffffff;border-color:#bfbfbf;}button,html input[type="button"],input[type="reset"],input[type="submit"],.button,.button:visited{color:#ffffff;background-color:#666666;}button:hover,html input[type="button"]:hover,input[type="reset"]:hover,input[type="submit"]:hover,.button:hover,button:focus,html input[type="button"]:focus,input[type="reset"]:focus,input[type="submit"]:focus,.button:focus{color:#ffffff;background-color:#3f3f3f;}
@media (max-width:768px){.separate-containers .inside-article, .separate-containers .comments-area, .separate-containers .page-header, .separate-containers .paging-navigation, .one-container .site-content, .inside-page-header{padding:30px;}}.main-navigation ul ul{top:auto;}.navigation-search, .navigation-search input{height:100%;}
</style>

	<style type="text/css">
	  <?php include( plugin_dir_path( __FILE__ ).'../generatepress/style.css' ); ?>
	  <?php include( plugin_dir_path( __FILE__ ). '/style.css' ); ?>
	  <?php include( plugin_dir_path( __FILE__ ).'../generatepress/css/unsemantic-grid.min.css' ); ?>
  	<?php include( plugin_dir_path( __FILE__ ).'../generatepress/css/font-awesome.min.css' ); ?>
	  #wpadminbar { display:none; }
	  .site-footer { display:none; }
	</style>
<!--<style type="text/css">
  .welcome-closed, .welcome-open {
    display:none;
  }
</style>-->
<div id="pseudo-body" style="width:100%" <?php body_class(); ?>> <!-- pseudo-body -->
	<?php //do_action( 'generate_before_header' ); ?>
	<?php //do_action( 'generate_header' ); ?>
	<?php //do_action( 'generate_after_header' ); ?>
	
	<div id="page" class="hfeed site grid-container container grid-parent">
		<div id="content" class="site-content">
			<?php do_action( 'generate_inside_container' ); ?>

<?php 
$date_now = strtotime(date('Y-m-d H:i:s'));
//$date_now = strtotime('2017-08-01 00:00:00');
$date_cut = $date_now+60*60*24*150;

$args = array(
  'posts_per_page'    => 9999,
  'offset'            => 0,
  'category'          => '',
  'category_name'     => 'announcement',
  'orderby'           => 'meta_value_num',
  'meta_key'          => 'start_date',
  'order'             => 'ASC',
  'include'           => '',
  'exclude'           => '',
  'meta_value'        => '',
  'meta_query'        => array(
    'relation'  => 'AND',
    array(
      'key'     => 'end_date',
      'compare' => '>=',
      'type'    => 'NUMERIC',
      'value'   => $date_now,
    ),
    array(
      'key'     => 'end_date',
      'compare' => '<=',
      'type'    => 'NUMERIC',
      'value'   => $date_cut,
    ),
  ),
  'post_type'         => 'post',
  'post_mime_type'    => '',
  'post_parent'       => '',
  'author'            => '',
  'author_name'       => '',
  'post_status'       => 'publish',
  'suppress_filters'  => true,
);
$posts_array = get_posts( $args );
?>

  <section id="primary" <?php generate_content_class(); ?>>
    <main id="main" <?php generate_main_class(); ?>>
    <?php do_action('generate_before_main_content'); ?>
    <?php if ( $posts_array ) : ?>
      <header class="page-header<?php if ( is_author() ) echo ' clearfix';?>">
		    <?php do_action( 'generate_before_archive_title' ); ?>
		    <h2><!-- class="page-title"-->
			    <?php echo(date('Y F')); ?> Announcements		    
		    </h2>
		    <?php do_action( 'generate_after_archive_title' ); ?>
	
      <ul>
        <?php /* Start the Loop */
        foreach( $posts_array as $post ){
          setup_postdata( $post ); ?>
          <?php the_title( '<li><h3 class="entry-title" itemprop="headline"><a href="#apost-'.get_the_ID().'">', '</a></h3></li>' ); ?>
        <?php } ?>
      </ul>
	    </header><!-- .page-header -->
      <?php /* Start the Loop again with details */
      foreach( $posts_array as $post ){
        setup_postdata( $post ); ?>
        <?php
          /* Include the Post-Format-specific template for the content.
           * If you want to override this in a child theme, then include a file
           * called content-___.php (where ___ is the Post Format name) and that will be used instead.
           */
          //get_template_part( 'content', get_post_format() );
          //below from content-single.php from generatepress theme?>
          <a name="apost-<?php the_ID(); ?>"></a>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php generate_article_schema( 'CreativeWork' ); ?>>
  <div class="inside-article">
    <?php do_action( 'generate_before_content'); ?>
    
    <header class="entry-header">
      <?php do_action( 'generate_before_entry_title'); ?>
      <?php if ( generate_show_title() ) : ?>
        <?php the_title( '<h2 class="entry-title" itemprop="headline">', '</h2>' ); ?>
      <?php endif; ?>
      <?php //do_action( 'generate_after_entry_title'); ?>
    </header><!-- .entry-header -->
    
    <?php do_action( 'generate_after_entry_header'); ?>
    <div class="entry-content" itemprop="text">
      <?php the_content(); ?>
      <?php
      wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'generatepress' ),
        'after'  => '</div>',
      ) );
      ?>
    </div><!-- .entry-content -->
    
    <?php //do_action( 'generate_after_entry_content' ); ?>
    <?php do_action( 'generate_after_content' ); ?>
  </div><!-- .inside-article -->
</article><!-- #post-## -->


      <?php } ?>

      <?php //generate_content_nav( 'nav-below' ); ?>

    <?php else : ?>

      <?php get_template_part( 'no-results', 'archive' ); ?>

    <?php endif; ?>
    <?php //do_action('generate_after_main_content'); ?>
    </main><!-- #main -->
  </section><!-- #primary -->

<?php 
do_action('generate_sidebars');?>
	</div><!-- #content -->
</div><!-- #page -->

</div><!-- pseudo-body -->
</div><!-- #outerdiv -->
<?php do_action('generate_before_footer'); ?>
<div <?php generate_footer_class(); ?>>
	<?php 
	do_action( 'generate_before_footer_content' );
	do_action( 'generate_footer' );
	do_action( 'generate_after_footer_content' ); 
	?>
</div><!-- .site-footer -->

<?php wp_footer(); ?>

</body>
</html>
