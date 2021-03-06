<?php
define('THEME_URL',  get_stylesheet_directory());
/*Khai bao chuc nang trong theme */
if (!function_exists('test_setup')){
	function test_setup(){
		/*Tu dong them link RSS len head()*/
		add_theme_support('actomatic-feed-links');
		add_theme_support( 'post-thumbnail' );
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

		
}
add_action('init', 'test_setup');

/* Add CSS */
function enqueue_styles() {
	wp_enqueue_style( 'bootstrap-css', "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css", array());
	wp_enqueue_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
	wp_enqueue_style('datapicker-css', "http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css");
	wp_enqueue_style( 'mystyle', get_template_directory_uri() . '/css/media_all.css', array());
	wp_enqueue_style( 'styles-css1', get_template_directory_uri() . '/css/slick.css', array());
	wp_enqueue_style( 'styles-css2', get_template_directory_uri() . '/css/slick-theme.css', array());
	wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/style.css', array(), '1.2.13');

	wp_enqueue_style( 'jquery-css', "http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css", array());
	wp_enqueue_style( 'bootstrap-css1', "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css", array());
	wp_enqueue_style( 'bootstrap-css2', "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css", array());	
 }
 add_action( 'wp_enqueue_scripts', 'enqueue_styles', 0);

/* Add JS */
add_action('wp_enqueue_scripts', 'enqueue_script', 1);
function enqueue_script(){
       	
	wp_enqueue_script('jquery-min-js', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js", array('jquery'), true);
	wp_enqueue_script('bootstrap-bundle-min-js', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js", array('jquery'), true);
	wp_enqueue_script('jquery-easing-min-js', "https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js", array('jquery'), true);
	wp_enqueue_script('poper-min-js', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js", time(), true);
	wp_enqueue_script('bootstrap-min-js', "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", time(), true); 
	wp_enqueue_script('font-awesome', "https://kit.fontawesome.com/a076d05399.js", time(), true);
	// wp_enqueue_script('my-script.js', get_template_directory_uri() . '/js/my-script.js', array(),'1.1.1');
	// wp_enqueue_script('tim-chuyen-bay.js', get_template_directory_uri() . '/js/tim-chuyen-bay.js', array(),'1.1.1');
	wp_enqueue_script('jquery_date2', "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js", array('jquery'), true);
	wp_enqueue_script('jquery_date4', "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js", array('jquery'),true);
	// wp_enqueue_script('jquery_date5', "http://code.jquery.com/jquery-1.9.1.js", array('jquery'),true);
	wp_enqueue_script('jquery_date6', "http://code.jquery.com/ui/1.10.3/jquery-ui.js", array('jquery'),true);

	$my_array = array(
		'site_home' => get_template_directory_uri()
	);
	wp_localize_script( 'my_ajax_url', 'myvar', $my_array);
}