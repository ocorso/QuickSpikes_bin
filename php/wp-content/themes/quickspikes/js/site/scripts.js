/* Author: Owen Corso

*/

	//**********************************************************
	//						Doc Ready 
	//**********************************************************
	
 jQuery(document).ready(function($){
 	log("dom is ready");
 	
 	$("nav ul li").addClass("nav-link");
 	
 	
 	addHandlers();
 	setupHomepageCarousel();
	cookieMonster();
	
	var swfEmbed = {};
		swfEmbed.flashvars = { baseUrl: "baseURL"};
		swfEmbed.parameters= { salign:"tl", allowfullscreen:true, allowscriptaccess:"always", bgcolor:"#000", wmode:"transparent" };
		swfEmbed.attributes = { name: "site" };
		swfEmbed.minimumVersion = '10.0.0';

	if(swfobject.hasFlashPlayerVersion("6.0.65"))
	{
		if(!swfobject.hasFlashPlayerVersion(swfEmbed.minimumVersion)) swfEmbed.parameters = {};
		swfobject.embedSWF("php/wp-content/themes/quickspikes/swf/logo/logo.swf","logo", "425", "98",swfEmbed.minimumVersion,"../../swf/expressInstall.swf",swfEmbed.flashvars,swfEmbed.parameters,swfEmbed.attributes);
	}
	
	//**********************************************************
	//						Workers
	//**********************************************************
	function setupHomepageCarousel(){

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

	}
	
	function addHandlers(){
	
		$("nav ul li").hover(
  			function () {//over
//log("we're over");
  				$(this).removeClass("nav-link").addClass("nav-hover");
  				$(this).find('.nav-a').css("color", "#ff0");
  			},
  			function () {//main nav out handler
  				$(this).removeClass("nav-hover").addClass("nav-link");
  				$(this).find('.nav-a').css("color", "#fff");
  			}
		).click(function($e){
			var url = $(this).find('.nav-a').attr('href');
			log("clicked on: "+ url);
			document.location.replace(url);
		});//end nav li event handler
		
		//logo handlers
		$("#logo").hover(	expandLogo,
							collapseLogo);
	}//end function

	//**********************************************************
	//						Handlers
	//**********************************************************
	
	function expandLogo($e){
		$("#logo_reveal").animate({width:"318px"},400);
	}
	function collapseLogo($e){//out
		$("#logo_reveal").animate({width:"0px"},400);
	}
	
		
	//**********************************************************
	//						Cookie
	//**********************************************************

	function cookieMonster(){
			//document.cookie =   'quickspikes=yet another test; expires=Mon, 14 Feb 2011 13:50:11 UTC; path=/';
		log(document.cookie);
		log(document.cookie.indexOf("quickspikes"));

		if (document.cookie.indexOf("quickspikes") == -1){
			log("quickspikes cookie NOT present");
			document.cookie = "quickspikes=1";
			log(document.cookie);
			expandLogo();
			setTimeout(collapseLogo, 3000);

		}//end if we don't have a quickspikes cookie
	
	}//end function cookieMonster
	
	
 });//end doc ready

