<?php


show_admin_bar(false);
function theme_styles(){
  wp_enqueue_style('styles', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('main', get_bloginfo('stylesheet_directory') . '/app/build/main.css');
  wp_enqueue_script('carousel', get_bloginfo('stylesheet_directory') . '/app/build/carousel.js', array('jquery'));

   wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/18dba6049a.js');
  
   wp_enqueue_script('masonry_blog_posts_config', get_bloginfo('stylesheet_directory') . '/app/build/masonry_blog_posts_config.js', array('jquery','masonry'));
   
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );


// Filters Hooks
include dirname(__FILE__) . '/filters.php';

// Load widget
include dirname(__FILE__) . '/widgets/display_clients.php';

// load shortcodes
include dirname(__FILE__) . '/shortcodes/carousel_services.php';
include dirname(__FILE__) . '/shortcodes/carousel_logo.php';
include dirname(__FILE__) . '/shortcodes/carousel_portfolio.php';
include dirname(__FILE__) . '/shortcodes/masonry_blog_posts.php';
include dirname(__FILE__) . '/shortcodes/works_list.php';

function pr($c){
	echo "<pre>";
	echo print_r($c);
	echo "</pre>";
}

add_theme_support('post-thumbnails'); 
