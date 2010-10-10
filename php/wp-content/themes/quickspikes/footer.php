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
		<div class="share-bubble">Follow us on Twitter</div>
		<div class="share-bubble">Fan us on Facebook</div>
		<div id="footer_logo">
			<img src="<?= get_bloginfo('template_directory'); ?>/img/logo/quick_spikes.png" alt="Quick Spikes"/>
			<p>golf.com</p>
		</div>
		<div class="clearfix"></div>
	   		<p>&copy; 2010 Quick Spikes Golf LLC  |  All Rights Reserved  |  Quick Spikes Patents and Trademarks Pending  |  <a href="/privacy_policy">Privacy Policy</a>  |  <a href="/php/wp-login.php">Login</a>  |  <a href="/sitemap">Site Map</a>  </p>
		

<!-- put footer stuff here -->
	</footer>
</div> <!--! end of #container -->


  <!-- Javascript at the bottom for fast page loading -->

  <!--[if lt IE 7 ]>
    <script src="<?= get_bloginfo('template_url'); ?>/js/libs/dd_belatedpng.js?"></script>
    <script>
      DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images
    </script>
  <![endif]-->


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