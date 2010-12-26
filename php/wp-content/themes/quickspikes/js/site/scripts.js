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

	}//end function


	$('#slider').nivoSlider({
		effect:'fade', //Specify sets like: 'random,fold,fade,sliceDown'
		slices:15,
		animSpeed:500, //Slide transition speed
		pauseTime:6000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false, //Next & Prev
		directionNavHide:true, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
      	controlNavThumbsFromRel:false, //Use image rel for thumbs
		controlNavThumbsSearch: '.jpg', //Replace this with...
		controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
		keyboardNav:true, //Use left & right arrows
		pauseOnHover:false, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.0, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
 });//end doc ready

