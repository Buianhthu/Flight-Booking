<?php
/*
Khai báo hằng giá trị
	@ THEME_URL = lấy đường dẫn thư mục theme
*/

define('THEME_URL',  get_stylesheet_directory());
define('CORE', THEME_URL . "/core");

/*
	Nhung file /core/init.php
*/
require_once(CORE . "/init.php");

/* Thiet lap chieu rong noi dung */
if ( !isset($content_width) ){
	$content_width = 620;
}

/*Khai bao chuc nang trong theme */
if (!function_exists('vemaybay_theme_setup')){
	function vemaybay_theme_setup(){
		/*Tu dong them link RSS len head()*/
		add_theme_support('actomatic-feed-links');

		/* Theme post thumbnail */
		add_theme_support ('post_thumbnails');

		/* Post Format */
		add_theme_support( 'post-formats',
		    array(
		       'image',
		       'video',
		       'gallery',
		       'quote',
		       'link'
		    )
		 );

		/* Them title tag */
		add_theme_support ('title-tag');	

		/* Them custom background */
		add_theme_support ('custom-background');

		
}
/* Sidebar */
		$sidebarleft = array(
		   'name' => __('Sidebar_Left', 'vemaybay'),
		   'id' => 'sidebar-left',
		   'description' => 'Sidebar left for theme vemaybay',
		   'class' => 'sidebar-left',
		   'before_title' => '<h3 class="widgettitle">',
		   'after_title' => '</h3>'
		);

		$sidebarright = array(
		   'name' => __('Sidebar_Right', 'vemaybay'),
		   'id' => 'sidebar-right',
		   'description' => 'Sidebar right for theme vemaybay',
		   'class' => 'sidebar-right',
		   'before_title' => '<h3 class="widgettitle">',
		   'after_title' => '</h3>'
		);
		register_sidebar( $sidebarleft );
		register_sidebar( $sidebarright );

	}
	add_action('init', 'vemaybay_theme_setup');

/* Them Menu */
		add_theme_support('nav-menus');
		function register_my_menus() {
		    register_nav_menus(
		        array(
		            'top-menu' => __( 'Top Menu', 'vemaybay'),
		            'foot-menu' => __( 'Footer Menu', 'vemaybay')
		        )
		    );
		}
		add_action( 'init', 'register_my_menus' );

/* ADD style */
function enqueue_styles() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . 'assets/css/bootstrap.min.css', array());
	wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/css/font-awesome.min.css', array() );
	wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/css/icomoon.css', array());
	wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/css/jquery-ui-1.9.2.custom.min.css', array() );
	//wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array() );
	wp_enqueue_style( 'sprites', get_template_directory_uri() . '/css/sprites.css', array() );
	wp_enqueue_style( 'go-font', get_template_directory_uri() . '/css/go-font.css', array() );
	wp_enqueue_style( 'datepicker', get_template_directory_uri() . '/css/datepicker.css', array() );
	wp_enqueue_style( 'mystyle', get_template_directory_uri() . '/style.css', array(), '1.2.13');
 }
add_action( 'wp_enqueue_scripts', 'enqueue_styles', 0);

/* Tao HOTLINE */
function create_hotline_shortcode() { 
	$str = stripcslashes(get_option('opt_phone'));
	return $str;
} 
add_shortcode('HOTLINE', 'create_hotline_shortcode');

?>