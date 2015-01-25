<?php
/* 	Small Business Theme's Functions
	Copyright: 2012-2014, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Small Business 1.0
*/
  

// Load the D5 Framework Optios Page and Meta Page
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
	function smallbusiness_ppp() { return array( 'post_type'=> 'post', 'ignore_sticky_posts' => 1, 'posts_per_page'  => 2 ); }
	require_once get_template_directory() . '/inc/options-framework.php';

// 	Tell WordPress for wp_title in order to modify document title content
	function smallbusiness_filter_wp_title( $title ) {
    $site_name = get_bloginfo( 'name' );
    $filtered_title = $site_name . $title;
    return $filtered_title;
	}
	add_filter( 'wp_title', 'smallbusiness_filter_wp_title' );
	
	function smallbusiness_setup() {
	add_theme_support( 'automatic-feed-links' );
  	register_nav_menus( array( 'main-menu' => "Main Menu", 'top-menu' => "Top Menu" ) );

//	Set the content width based on the theme's design and stylesheet.
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 650;
	
	add_editor_style('editor-style.css');

// 	This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

	// additional image sizes
	// delete the next line if you do not need additional image sizes
	add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
	add_image_size( 'slide-thumb', 930, 354 ); //for featured sliders
	
		
// 	WordPress 3.4 Custom Background Support	
	$smallbusiness_custom_background = array(
	'default-color'          => 'AAAAAA',
	'default-image'          => '',
	);
	add_theme_support( 'custom-background', $smallbusiness_custom_background );
	
// 	WordPress 3.4 Custom Header Support				
	$smallbusiness_custom_header = array(
	'default-image'          => get_template_directory_uri() . '/images/logo.png',
	'random-default'         => false,
	'width'                  => 300,
	'height'                 => 90,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => 'B81005',
	'header-text'            => false,
	'uploads'                => true,
	'wp-head-callback' 		 => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-header', $smallbusiness_custom_header ); }
	add_action( 'after_setup_theme', 'smallbusiness_setup' );

// 	Functions for adding script
	function smallbusiness_enqueue_scripts() {
	wp_enqueue_style('smallbusiness-style', get_stylesheet_uri(), false, '1.7');
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { 
		wp_enqueue_script( 'comment-reply' ); 
	}
	
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'smallbusiness-menu-style', get_template_directory_uri(). '/js/menu.js' );
	wp_enqueue_style('smallbusiness-gfonts', '//fonts.googleapis.com/css?family=Coda:400', false );
	}
	add_action( 'wp_enqueue_scripts', 'smallbusiness_enqueue_scripts' );

// 	Functions for adding some custom code within the head tag of site
	function smallbusiness_custom_code() {
	
?>
	
	<style type="text/css">
	.site-title a, 
	.site-title a:active, 
	.site-title a:hover {
	
	color: #<?php echo get_header_textcolor(); ?>;
	}
	
	.entrytext {
    background: <?php if (is_page()): echo 'transparent;'; endif; ?>
    padding: 10px 0;
	}
	
	</style>
	
	<?php 
	
}
	
	add_action('wp_head', 'smallbusiness_custom_code');
	

//	function tied to the excerpt_more filter hook.
	function smallbusiness_excerpt_length( $length ) {
	global $sbExcerptLength;
	if ($sbExcerptLength) {
    return $sbExcerptLength;
	} else {
    return 50; //default value
    } }
	add_filter( 'excerpt_length', 'smallbusiness_excerpt_length', 999 );
	
	function smallbusiness_excerpt_more($more) {
       global $post;
	return '<a href="'. get_permalink($post->ID) . '" class="read-more">Read the Rest...</a>';
	}
	add_filter('excerpt_more', 'smallbusiness_excerpt_more');

//	Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link
	function smallbusiness_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
	}
	add_filter( 'wp_page_menu_args', 'smallbusiness_page_menu_args' );


//	Registers the Widgets and Sidebars for the site
	function smallbusiness_widgets_init() {

	
	register_sidebar( array(
		'name' => 'Front Page Sidebar',
		'id' => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	
	register_sidebar( array(
		'name' => 'Main Sidebar',
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	
	register_sidebar( array(
		'name' => 'Footer Area One',
		'id' => 'sidebar-3',
		'description' => 'An optional widget area for your site footer',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => 'Footer Area Two',
		'id' => 'sidebar-4',
		'description' => 'An optional widget area for your site footer',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => 'Footer Area Three',
		'id' => 'sidebar-5',
		'description' => 'An optional widget area for your site footer',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
		
	}
	add_action( 'widgets_init', 'smallbusiness_widgets_init' );
	
	
	
	show_admin_bar(false);
		
	// 	When the post has no post title, but is required to link to the single-page post view.

	add_filter('the_title', 'smallbusiness_title');
	function smallbusiness_title($title) {
        if ( '' == $title ) {
            return '(Untitled)';
        } else { return $title; } 
    }

//	Remove WordPress Custom Header Support for the theme smallbusiness
//	remove_theme_support('custom-header');