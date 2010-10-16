<?php
/**
 * @package Quick Spikes
 * @subpackage quickspikes
 */
?>   	
	</div>  <!-- end of content div -->

	</div> <!-- end of content wrapper -->
	<footer>
		<div class="shadow-left-corner"></div>
		<div id="footer_wrapper">
			<div class="share-bubble">
				<img src="<?= get_bloginfo('template_directory'); ?>/img/sharing-twitter-icon.png" alt="Twitter Icon"/>
				<a href="http://twitter.com/quickspikesgolf" title="Follow Us On Twitter" target="_blank>">FOLLOW US ON TWITTER</a>
			</div>
			<div class="share-bubble">
				<img src="<?= get_bloginfo('template_directory'); ?>/img/sharing-facebook-icon.png" alt="Facebook Icon"/>
				<a href="http://www.facebook.com/pages/Quick-Spikes/114826768579293" title="Fan Us On Facebook" target="_blank>">FAN US ON FACEBOOK</a>
			</div>
			<div id="footer_logo">
				<img src="<?= get_bloginfo('template_directory'); ?>/img/logo/quick_spikes.png" alt="Quick Spikes"/>
				<p>golf.com</p>
			</div>
			<div class="clearfix"></div>
		   	<p>&copy; 2010 Quick Spikes Golf LLC  |  All Rights Reserved  |  Quick Spikes Patents and Trademarks Pending  |  <a href="/privacy_policy">Privacy Policy</a>  |  <a href="/php/wp-login.php">Login</a>  |  <a href="/sitemap">Site Map</a>  </p>

		</div>
		<div class="shadow-right-corner"></div>
		<div class="clearfix"></div>
	</footer>
</div> <!--! end of #container -->


  <!-- Javascript at the bottom for fast page loading -->

  <!--[if lt IE 7 ]>
    <script src="<?= get_bloginfo('template_url'); ?>/js/libs/dd_belatedpng.js?"></script>
    <script>
      DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images
    </script>
  <![endif]-->


  <!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
   var _gaq = [['_setAccount', 'UA-19135050-1'], ['_setDomainName', '.ored.net'], ['_trackPageview']];
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