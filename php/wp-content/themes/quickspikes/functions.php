<?php
// =================================================
// ================ @Add
// =================================================
add_action('init', "my_init_method");

add_shortcode('form-shortcode', 'form_shortcode_handler');    
add_shortcode('sitemap_link', 'sitemap_link_handler');
add_shortcode('image','image_shortcode');
add_shortcode('flash', 'flash_shortcode_handler');
    
// =================================================
// ================ @Remove
// =================================================
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'feed_links_extra');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');
remove_action('wp_head', 'locale_stylesheet');
remove_action('wp_head', 'noindex');
remove_action('wp_head', 'wp_print_styles');
remove_action('wp_head', 'wp_print_head_scripts');

// =================================================
// ================ @Enqueue
// =================================================
function my_init_method() {
	$ver = 1.0;

    //scripts
    //wp_deregister_script( 'jquery' );
	//wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js' );
	wp_register_script( 'jquery', get_bloginfo('template_url').'/js/libs/jquery.js' );
    wp_enqueue_script('swfaddress',get_bloginfo('template_url').'/js/libs/swfaddress.js');
 	wp_enqueue_script('modernizr', get_bloginfo('template_url').'/js/libs/modernizr-1.5.min.js');  
    wp_enqueue_script('qs_scripts',get_bloginfo('template_url').'/js/site/scripts.js', array('swfobject', 'jquery'), $ver, false);
  	wp_enqueue_script('niv_slider',get_bloginfo('template_url').'/js/libs/jquery.nivo.slider.pack.js', array('jquery'), $ver, true);

    //styles
    wp_enqueue_style( 'qs-theme-css', get_bloginfo('template_url').'/style.css', false, $ver, 'all');
    wp_enqueue_style( 'nivo-css', get_bloginfo('template_url').'/css/nivo-slider.css', false, $ver, 'all');
    wp_enqueue_style( 'handheld-css', get_bloginfo('template_url').'/css/handheld.css', false, $ver, 'handheld');
} //end my init methond function   
 
// =================================================
// ================ @External
// =================================================
function parse_subheadings($theTitle){

	switch ($theTitle){
		case "Story":
		case "Why To Use":
		case "Where To Find":
			break;
		case "Submit New" :	
			return "faq_heading";
			break;
		case "Affiliates" :
		case "Wholesalers" :
		case "Submit Inquiry" :	
			return "partners_heading";
			break;
		case "Checkout" :
			return "checkout_heading";
			break;
		case "Your Account" :
			return "your_account_heading";
			break;
		case "Transactions" :
			return "transactions_heading";
			break;
		case "Shipping Policy" :
			return "shipping_heading";
			break;
		case "Return Policy" :
			return "return_heading";
			break;
		default : return strtolower(str_replace(" ", "_",$theTitle)."_heading");
	}//end switch

}//end function parse_subheadings

function we_need_sidebar($isHome, $theTitle){
  	//$firephp = FirePHP::getInstance(true);
  	//$firephp->log("is home: ".($isHome)? "yes":"no");
	if ($isHome) { return false; }		
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
 
function handle_form_results($postData){
	//todo: send email with form results to brendan
	//todo: send email to the submitter.
	$to     	= 'info@quickspikesgolf.com';
	$subject 	= 'Quick Spikes '.$postData['type'].'Form Submission';

	$headers 	= 'From: info@quickspikes.com' . "\r\n";
   	$headers .=  'Reply-To: info@quickspikes.com' . "\r\n";
    $headers .=  'X-Mailer: PHP/' . phpversion()."\r\n";
    $headers .=  "MIME-Version: 1.0\r\n";
    $headers .= "CC: owen@strattonimaging.com\r\n";
	$headers .=  "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$message = '<html><body bgcolor="#DCEEFC"> <h1>Hello There! </h1><h2>A Form was submitted on quickspikesgolf.com</h2>';
	
	//make a table
	$in			= "<tr><td>";
	$out		= "</td></tr>";
	$table		= "<table style='padding: 10px; width: 400px; border: black 1px solid; text-align:left;'><tr><th>Form Field</th><th>Value</th></tr>";
	
	//name
	if (isset($postData['form_fname']) && isset($postData['form_lname']) ) {
		$name 	= $postData['form_fname']. " ".$postData['form_lname'];
		$table 	.= $in."Name:</td><td>".$name.$out; 
	}//end if name
	
	//phone
	if (isset($postData['form_phone'])){
		$table 	.= $in."Phone:</td><td>".$postData['form_phone'].$out; 
	}
	//fax
	if (isset($postData['form_fax'])){
		$table 	.= $in."Fax:</td><td>".$postData['form_fax'].$out; 
	}
	//email
	if (isset($postData['form_email'])){
		$table 	.= $in."Email:</td><td>".$postData['form_email'].$out; 
	}
	//address1
	if (isset($postData['form_address1'])){
		$table 	.= $in."Address 1:</td><td>".$postData['form_address1'].$out; 
	}
	//address2
	if (isset($postData['form_address2'])){
		$table 	.= $in."Address 2:</td><td>".$postData['form_address2'].$out; 
	}
	//city
	if (isset($postData['form_city'])){
		$table 	.= $in."City:</td><td>".$postData['form_city'].$out; 
	}
	//state
	if (isset($postData['form_state'])){
		$table 	.= $in."State:</td><td>".$postData['form_state'].$out; 
	}
	//zip
	if (isset($postData['form_zip'])){
		$table 	.= $in."Zip:</td><td>".$postData['form_zip'].$out; 
	}
	//comment
	if (isset($postData['form_comment'])){
		$table 	.= $in."Comment/Question:</td><td>".$postData['form_comment'].$out; 
	}
	

	$table 		.= "</table>";
	$message	.= $table.'</body></html>';
	mail($to, $subject, $message, $headers);
	
}//end function handle_form_results
        
// =================================================
// ================ @Shortcodes
// =================================================
function form_shortcode_handler($atts, $content=null, $code="") {
	
	$faqArr			= array('first_name', 'last_name', 'email', 'telephone');
	$partnerArr 	= array('first_name', 'last_name', 'email', 'telephone', 'fax', 'address 1', 'address 2', 'city', 'state', 'zip code');
	$contactArr		= array('first_name', 'last_name', 'email', 'telephone', 'comment');
	
	$form 			= "";
	$labels			= "";
	$inputs			= "<input class='hide' name='form_type' value=".$atts['type']." /><ul id='form_inputs'>";
	
	switch($atts['type']){
		case "faq" 		: $labels = _make_labels($faqArr);
			$form 	= "<form id='qs_form' method='post' action='/thank-you'>";
			$inputs.= "<li><input name='form_fname' type='text' required /></li>";
			$inputs.= "<li><input name='form_lname' type='text' required /></li>";
			$inputs.= "<li><input name='form_email' type='email' required /></li>";
			$inputs.= "<li><input name='form_phone' type='telephone' required /></li>";
			$inputs.= "</ul><ul id='faq_question_list'>";
			$inputs.= "<li><h4>Question:</h4></li>";
			$inputs.= "<li><textarea name='form_comment' class='comment'></textarea></li>";
			$inputs.= "<li><input type='submit' value='Submit' /></li></ul><div class='clearboth'></div>";
			break;	
		
		case "partner" 	: $labels = _make_labels($partnerArr);
			$form 	= "<form id='qs_form' method='post' action='/thank-you'>";
			$inputs.= "<li><input name='form_fname' type='text' required /></li>";
			$inputs.= "<li><input name='form_lname' type='text' required /></li>";
			$inputs.= "<li><input name='form_email' type='email' required /></li>";
			$inputs.= "<li><input name='form_phone' type='telephone' required /></li>";
			$inputs.= "<li><input name='form_fax'	type='telephone' /></li>";
			$inputs.= "<li><input name='form_address1' type='text' /></li>";
			$inputs.= "<li><input name='form_address2' type='text' /></li>";
			$inputs.= "<li><input name='form_city' type='text' /></li>";
			$inputs.= _get_state_select();
			$inputs.= "<li><input name='form_zip' type='number' size='5' minlength='5' maxlength='5' /></li>";
			$inputs.= "</ul><h4>Comment:</h4><textarea rows='6' col='20' name='form_comment' class='comment' ></textarea>";
			$inputs.= "<input type='submit' value='Submit' />";
			break;
		
		case "contact" 	: $labels = _make_labels($contactArr);
			$form 	= "<form id='contact_form' method='post' action='/thank-you'>";
			$inputs.= "<li><input name='form_fname' class='required' type='text' required /></li>";
			$inputs.= "<li><input name='form_lname' class='required' type='text' required /></li>";
			$inputs.= "<li><input name='form_email' class='required' type='email' required /></li>";
			$inputs.= "<li><input name='form_phone' class='required' type='telephone' required /></li>";
			$inputs.= "<li><textarea rows='6' col='40' name='form_comment' class='contact-comment' type='text'> </textarea></li>";
			$inputs.= "<li><input type='submit' value='Submit' /></li></ul>";
			break;	
	
		default : "error: bad shortcode form type";
		
	}//end switch
	
	$form 		   .= $labels . $inputs;	
	$form 		   .= "<div class='clearfix'></div></form>";
	
	return $form;

}//end function
        
//image insertion shortcode
function image_shortcode($atts, $content = null) {
    extract( shortcode_atts( array(
    'name' => '',
    'align' => 'right',
    'ext' => 'png',
    'path' => '/wp-content/themes/quickspikes/img/',
    'url' => ''
    ), $atts ) );
    $file=ABSPATH."$path$name.$ext";
    if (file_exists($file)) {
        $size=getimagesize($file);
        if ($size!==false) $size=$size[3];
        $output = "<img src='".get_option('siteurl')."$path$name.$ext' alt='$name' $size class='align$align' />";
        if ($url) $output = "<a href='$url' title='$name'>".$output.'</a>';
        return $output;
    }
    else {
        trigger_error("'$path$name.$ext' image not found", E_USER_WARNING);
        return '';
    }
}//end function

function flash_shortcode_handler($atts, $content=null, $code=""){
		return '<script type="text/javascript">

		  	var flashvars = {baseUrl: "/swf/site/", themeUrl: "/", configPath: "php/wp-content/themes/quickspikes/"};
			var params = {};
			params.wmode = "transparent";
		  	swfobject.embedSWF("php/wp-content/themes/quickspikes/swf/gallery/gallery.swf", "flash_container", "713", "410", "9.0.0", null, flashvars, params);
		</script>';
}//end function 

function sitemap_link_handler($atts, $content, $code=""){
	$href 	= "/".$atts['route'];
	$title	= ucwords($atts['route']);
	return '<a href="'.$href.'" title="'.$title.'">'.$title.'</a>';
}

// =================================================
// ================ @Utility
// =================================================
function _make_labels($a){
	$ul = "<ul id='form_labels'>";
	foreach($a as $l){ $ul .= "<li>".ucwords(str_replace("_"," ", $l)).": </li>";}
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
	$select = "<select name='form_state'>";
	foreach ($state_list as $key => $value) {
		$select.="<option value='$key'>$value</option>";
	}//end foreach
	$select.="</select>";
	return $select;
}//end function 
?>