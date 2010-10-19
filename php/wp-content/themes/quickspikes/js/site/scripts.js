/* Author: Owen Corso

*/

 jQuery(document).ready(function($){
 	log("jquery ready");
 	$("nav ul li").addClass("nav-link");
 	addHandlers();
	function addHandlers(){
	
		$("nav ul li").hover(
  			function () {//over
  				$(this).removeClass("nav-link").addClass("nav-hover");
  				$(".nav-hover a").addClass("nav-link-hover");
  			},
  			function () {//out
  				$(this).removeClass("nav-hover").addClass("nav-link");
  				$(this).children("a").removeClass("nav-link-hover");
  			}
		);
		$("#logo").hover(
			function (){//over
				log('logo over');
				$("#logo_reveal").animate({width:"318px"},400);
			},
			function (){//out
				log('logo out');
				$("#logo_reveal").animate({width:"0px"},400);
			}
		);
		
	switch(pageName){
		case "home":
			jQuery("#slideshow").click(function(jQueryevt){	
					$(this).addClass('.pointer');
   					parent.location='/products';
   			});//end slideshow click	
	 		jQuery("body.home").children(".content-border").hide();
		break;
		case "about":
			//about specific progressive enhancement
		break;
		case "products":
			//product
			
		break;
		
	}//end switch

}//end function
 });//end doc ready

