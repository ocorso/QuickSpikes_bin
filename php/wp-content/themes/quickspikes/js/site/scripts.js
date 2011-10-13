/* Author: Owen Corso

*/
//log 
window.log=function(){log.history=log.history||[];log.history.push(arguments);arguments.callee=arguments.callee.caller;if(this.console){console.log(Array.prototype.slice.call(arguments))}};(function(e){function h(){}for(var g="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),f;f=g.pop();){e[f]=e[f]||h}})(window.console=window.console||{});


var pageManager = {};
  	pageManager.isHome	 = false;
var FlashManager = {};
	FlashManager.swfEmbed = {};
var jsReady = false;
  	
  	function isReady() { return jsReady; }
 	
	function thisMovie($movieName) {
	
         if (navigator.appName.indexOf("Microsoft") != -1) {
             return window[$movieName];
         } else {
             return document[$movieName];
         }
    
     }
	
	//**********************************************************
	//						Doc Ready 
	//**********************************************************
	
 jQuery(document).ready(function($){
 	log("dom is ready");
 	jsReady = true;
 	
 	$("nav ul li").addClass("nav-link");
 	
 	
 	addHandlers();
 	setupHomepageCarousel();
 	embedFlash();
	cookieMonster();
	
/*
	$.fn.clearForm = function() {
      // iterate each matching form
      return this.each(function() {
        // iterate the elements within the form
        $(':input', this).each(function() {
          var type = this.type, tag = this.tagName.toLowerCase();
          if (type == 'text' || type == 'password' || tag == 'textarea')
            this.value = '';
          else if (type == 'checkbox' || type == 'radio')
            this.checked = false;
          else if (tag == 'select')
            this.selectedIndex = -1;
        });
      });
    };
	$(".wpsc_checkout_forms").clearForm();
	
*/
	//oc: add CVV what's this?
	if ($('.wpsc_CC_details:contains("CVV")').length == 1) {
		var whatsThis 		= $('.wpsc_CC_details:contains("CVV")');
		var whatsThisDiv	= document.createElement('div');
		whatsThisDiv.setAttribute('id', 'whats_this_div');
		whatsThisDiv.style.display = "none";
		var img				= document.createElement('img');
		img.src				= baseUrl+"/img/cvv.gif";
		whatsThisDiv.appendChild(img);
		$('body').append(whatsThisDiv);
		
		var newContent = "<span class='whats-this'> What's This?</span>";
		whatsThis.append(newContent).hover(
			function ($e) {
    		//todo: show whats_this_div where the mouse is
    		
    		offset	= $('.whats-this').offset();
    		
    		log("over, x: "+offset.top+" y: "+offset.left);
    		
    		$('#whats_this_div').css('top', offset.top).css('left', offset.left+70).show();
    					},
  			function () {
    		//hide div
    		log("out");
    		$('#whats_this_div').hide();
  			});
	}
	//**********************************************************
	//						Workers
	//**********************************************************

function findMouseCoords(e) {
	var posx = 0;
	var posy = 0;
	if (!e) var e = window.event;
	if (e.pageX || e.pageY) 	{
		posx = e.pageX;
		posy = e.pageY;
	}
	else if (e.clientX || e.clientY) 	{
		posx = e.clientX + document.body.scrollLeft
			+ document.documentElement.scrollLeft;
		posy = e.clientY + document.body.scrollTop
			+ document.documentElement.scrollTop;
	}
	// posx and posy contain the mouse position relative to the document
	return {x:posx, y:posy};
}


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

	function embedFlash(){

		FlashManager.swfEmbed.flashvars = { baseUrl: "baseURL"};
		FlashManager.swfEmbed.parameters= { salign:"tl", allowfullscreen:true, allowscriptaccess:"always", bgcolor:"#000", wmode:"transparent" };
		FlashManager.swfEmbed.attributes = { name: "logo" };
		FlashManager.swfEmbed.minimumVersion = '10.0.0';

		if(swfobject.hasFlashPlayerVersion("6.0.65"))
		{
			if(!swfobject.hasFlashPlayerVersion(FlashManager.swfEmbed.minimumVersion)) FlashManager.swfEmbed.parameters = {};
			if (pageManager.isHome) { 
				log("we think we're home"); 
				swfobject.embedSWF("php/wp-content/themes/quickspikes/swf/logo/logo.swf","logo", "425", "98",FlashManager.swfEmbed.minimumVersion,"../../swf/expressInstall.swf",FlashManager.swfEmbed.flashvars,FlashManager.swfEmbed.parameters,FlashManager.swfEmbed.attributes);
			}//end if we think we're home.
		}//end if we have a good enough player
	}//end function 

	//**********************************************************
	//						Handlers
	//**********************************************************
	
	function expandLogo($e){
		log("expand");
		
		if(swfobject.hasFlashPlayerVersion("6.0.65") && pageManager.isHome){
			if(thisMovie("logo")){
				var m = thisMovie("logo");
				log(m);
				//m.jsSaysAnimateIn();
			} else { 
				log ("flash not ready yet");
				setTimeout(expandLogo, 500);
			}
		}
		else{
			log("not flash");
			$("#logo_reveal").animate({width:"318px"},400);
	
		} 
	}
	function collapseLogo($e){//out
		log("js says collapse");
		$("#logo_reveal").animate({width:"0px"},400);
	}
	
	function goIdle($e){
		log("go idle");
		thisMovie("logo").jsSaysAnimateIn();
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
		//oc: forget the cookie after all that.
	
		
	}//end function cookieMonster
	
	
 });//end doc ready

