 $(document).ready(function(){
 
	$(".nav-link").hover(
	  function () {
	    $(this).addClass('pointer');
	  }, 
	  function () {
	    $(this).removeClass('pointer');
	  }
	);

   $(".nav-link").click(function($evt){
   		$evt.preventDefault();
   		$(this).addClass('.pointer');
   		alert("Thanks for clicking!");

   });//end nav click handler
 });
