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
  	wp_enqueue_script('niv_slider',get_bloginfo('template_url').'/js/libs/jquery.nivo.slider.pack.js', array('jquery'), $ver, true);
  	
  	//yui profiler and profileviewer - remove for production
  	wp_enqueue_script('yahoo_profiling', get_bloginfo('template_url').'/js/libs/profiling/yahoo-profiling.min.js', null, $ver, true);
  	wp_enqueue_script('config_profiling', get_bloginfo('template_url').'/js/libs/profiling/config.js?v='.$ver, null, $ver, true);
 	
    //styles
    wp_enqueue_style( 'qs-theme-css', get_bloginfo('template_url').'/style.css', false, $ver, 'all');
    wp_enqueue_style( 'nivo-css', get_bloginfo('template_url').'/css/nivo-slider.css', false, $ver, 'all');
    wp_enqueue_style( 'handheld-css', get_bloginfo('template_url').'/css/handheld.css', false, $ver, 'handheld');
} //end my init methond function   
 
add_action('init', "my_init_method");
add_shortcode('form-shortcode', 'form_shortcode_handler');

function form_shortcode_handler($atts, $content=null, $code="") {
	
	$faqArr			= array('first_name', 'last_name', 'email', 'question', 'telephone');
	$partnerArr 	= array('first_name', 'last_name', 'email', 'telephone', 'fax', 'comment');
	
	$form 			= "";
	$labels			= "";
	$inputs			= "<ul id='inputs'>";
	
	switch($atts['type']){
		case "faq" 		: 
			$form 	= "<form method='post' action='/php/form/submit.php'>";
			$inputs.= "<li><input name='form_email' type='email' ></li>";
			break;		
		
		case "partner" 	: $labels = _make_labels($partnerArr);
			$form 	= "<form method='post' action='/php/form/submit.php'>";
			$inputs.= "<li><input name='form_fname' type='text' ></li>";
			$inputs.= "<li><input name='form_lname' type='text' ></li>";
			$inputs.= "<li><input name='form_email' type='email' ></li>";
			$inputs.= "<li><input name='form_phone' type='telephone' ></li>";
			$inputs.= "<li><input name='form_fax'	type='telephone' ></li>";
			$inputs.= "<li><input name='form_comment' type='text' ></li>";
			$inputs.= _get_state_select();	
			break;
		
		case "contact" 	: 
			$form 	= "<form method='post' action='/php/form/submit.php'>";
			$inputs.= "<li><input name='form_email' type='email' ></li>";
			break;		
	
		default : "error: bad shortcode form type";
		
	}//end switch
	
	$form 		   .= $labels . $inputs;	
	$form 		   .= "<input type='submit' /><div class='clearfix'></div></form>";
	
	return $form;
    
   
   //fields for faq 
   			//first name
   			//last name 
   			//email
   			//question
   			//phone number
   //add'l fields for partner
   			//company
   			//address 1
   			//address 2
   			//city 
   			//state
   			//zip
   			//country
   			//fax
   			//comments instead of
   			//

}//end function

function parse_subheadings($theTitle){
//	switch ($theTitle){
//		case "p" :	
			
//	}
	//products
	//checkout
	//transactions
	//your account
	
	//faq
	//submit new
	
	//gallery
	
	//partner
return strtolower($theTitle."_heading");
}//end function parse_subheadings

function we_need_sidebar($isHome, $theTitle){
	if ($isHome) return false;
	else {
		switch ($theTitle){
			case "Privacy Policy" : return false;
				break;
			case "Sitemap" : return false;
				break;
			default : return true;
		}//end switch
	}//end else
}//end function
function _make_labels($a){
	$ul = "<ul id='form_labels'>";
	foreach($a as $l){ $ul .= "<li>".ucwords(str_replace("_"," ", $l))."</li>";}
	$ul.="</ul>";
	return $ul;
}
function _get_state_select(){
	$state_list = array('AL'=>"Alabama",  
				'AK'=>"Alaska",  
				'AZ'=>"Arizona",  
				'AR'=>"Arkansas",  
				'CA'=>"California",  
				'CO'=>"Colorado",  
				'CT'=>"Connecticut",  
				'DE'=>"Delaware",  
				'DC'=>"District Of Columbia",  
				'FL'=>"Florida",  
				'GA'=>"Georgia",  
				'HI'=>"Hawaii",  
				'ID'=>"Idaho",  
				'IL'=>"Illinois",  
				'IN'=>"Indiana",  
				'IA'=>"Iowa",  
				'KS'=>"Kansas",  
				'KY'=>"Kentucky",  
				'LA'=>"Louisiana",  
				'ME'=>"Maine",  
				'MD'=>"Maryland",  
				'MA'=>"Massachusetts",  
				'MI'=>"Michigan",  
				'MN'=>"Minnesota",  
				'MS'=>"Mississippi",  
				'MO'=>"Missouri",  
				'MT'=>"Montana",
				'NE'=>"Nebraska",
				'NV'=>"Nevada",
				'NH'=>"New Hampshire",
				'NJ'=>"New Jersey",
				'NM'=>"New Mexico",
				'NY'=>"New York",
				'NC'=>"North Carolina",
				'ND'=>"North Dakota",
				'OH'=>"Ohio",  
				'OK'=>"Oklahoma",  
				'OR'=>"Oregon",  
				'PA'=>"Pennsylvania",  
				'RI'=>"Rhode Island",  
				'SC'=>"South Carolina",  
				'SD'=>"South Dakota",
				'TN'=>"Tennessee",  
				'TX'=>"Texas",  
				'UT'=>"Utah",  
				'VT'=>"Vermont",  
				'VA'=>"Virginia",  
				'WA'=>"Washington",  
				'WV'=>"West Virginia",  
				'WI'=>"Wisconsin",  
				'WY'=>"Wyoming");
	$select = "<select name='state_names'>";
	foreach ($state_list as $key => $value) {
		$select.="<option value='$key'>$value</option>";
	}//end foreach
	$select.="</select>";
	return $select;
}//end function 
?>