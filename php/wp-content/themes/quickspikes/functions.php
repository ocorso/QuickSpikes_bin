<?php
function my_init_method() {
	wp_deregister_script( 'jquery' );
	wp_register_script(   'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js');
    wp_enqueue_script('swfaddress',get_bloginfo('template_url').'/js/swfaddress.js');
    wp_enqueue_script('qs_scripts',get_bloginfo('template_url').'/js/scripts.js', array('swfobject', 'jquery'));            
} //end my init methond function   
 
add_action('init', "my_init_method");
?>