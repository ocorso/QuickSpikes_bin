<?php
/**
 * @package Quick Spikes
 * @subpackage quickspikes
 */
?>   	
	</div>  <!-- end of content div -->
	<div id="content_bottom" class="content-border"></div>
	</div> <!-- end of content wrapper -->
	<footer>
	   		<p>&copy; 2010 Quick Spikes Golf LLC  |  All Rights Reserved  |  Quick Spikes Patents and Trademarks Pending  |  <a href="/privacy_policy">Privacy Policy</a>  |  <a href="/php/wp-login.php">Login</a>  |  <a href="/sitemap">Site Map</a>  </p>
		

<!-- put footer stuff here -->
	</footer>
</div> <!--! end of #container -->


  <!-- Javascript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <script>!window.jQuery && document.write('<script src="js/jquery-1.4.2.min.js"><\/script>')</script>

  <!--[if lt IE 7 ]>
    <script src="js/dd_belatedpng.js?"></script>
    <script>
      DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images
    </script>
  <![endif]-->


  <!-- yui profiler and profileviewer - remove for production -->
  <script src="js/profiling/yahoo-profiling.min.js"></script>
  <script src="js/profiling/config.js?v=1"></script>
  <!-- end profiling code -->


  <!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet 
       change the UA-XXXXX-X to be your site's ID -->
  <script>
   var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
   (function(d, t) {
    var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
    g.async = true;
    g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g, s);
   })(document, 'script');
  </script>
  <?php wp_footer(); ?>
</body>
</html>