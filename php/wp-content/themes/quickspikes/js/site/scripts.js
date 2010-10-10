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
  			},
  			function () {//out
  				$(this).removeClass("nav-hover").addClass("nav-link");
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
					jQuery(this).addClass('.pointer');
   					parent.location='/products';
   			});//end slideshow click	
	 		jQuery("body.home").children(".content-border").hide();
		break;
		case "about":
			jQuery(".why-to-use").hide();
			jQuery(".side-nav-1").click(function(){
				jQuery(".section").hide();
				jQuery(".story").show();
			});
				
			jQuery(".side-nav-2").click(function(){
				jQuery(".section").hide();
				jQuery(".why-to-use").show();
			});
		break;
		case "products":
			jQuery(".side-nav-1").click(function(){parent.location='/products/checkout';});
			jQuery(".side-nav-2").click(function(){parent.location='/products/transaction-results';});
			jQuery(".side-nav-3").click(function(){parent.location='/products/your-account';});
		break;
		
	}//end switch

}//end function
 });//end doc ready

