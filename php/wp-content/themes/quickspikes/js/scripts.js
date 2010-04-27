var pageName;

 jQuery(document).ready(function(){
 		
 		addHandlers();
		
		
		
		
 

 });//end doc ready

function addHandlers(){
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