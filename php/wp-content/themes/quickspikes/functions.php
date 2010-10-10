<?php
function my_init_method() {
	$ver = 1.0;

    //scripts
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js' );
	//wp_register_script( 'jquery', get_bloginfo('template_url').'/js/libs/jquery.js' );
    wp_enqueue_script('swfaddress',get_bloginfo('template_url').'/js/libs/swfaddress.js');
 	wp_enqueue_script('modernizr', get_bloginfo('template_url').'/js/libs/modernizr-1.5.min.js');
    wp_enqueue_script('qs_plugins',get_bloginfo('template_url').'/js/site/plugins.js', array('swfobject', 'jquery'), $ver, true);    
    wp_enqueue_script('qs_scripts',get_bloginfo('template_url').'/js/site/scripts.js', array('swfobject', 'jquery'), $ver, true);
  	
  	//yui profiler and profileviewer - remove for production
  	wp_enqueue_script('yahoo_profiling', get_bloginfo('template_url').'/js/libs/profiling/yahoo-profiling.min.js', null, $ver, true);
  	wp_enqueue_script('config_profiling', get_bloginfo('template_url').'/js/libs/profiling/config.js?v='.$ver, null, $ver, true);
 	
    //styles
    wp_enqueue_style( 'qs-theme-css', get_bloginfo('template_url').'/style.css', false, $ver, 'all');
    wp_enqueue_style( 'handheld-css', get_bloginfo('template_url').'/css/handheld.css', false, $ver, 'handheld');
} //end my init methond function   
 
add_action('init', "my_init_method");
?>