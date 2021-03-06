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
				<img src="<?= get_bloginfo('template_directory'); ?>/img/icons/sharing-twitter-icon.png" alt="Twitter Icon"/>
				<a href="http://twitter.com/quickspikesgolf" title="Follow Us On Twitter" target="_blank>">FOLLOW US ON TWITTER</a>
			</div>
			<div class="share-bubble">
				<img src="<?= get_bloginfo('template_directory'); ?>/img/icons/sharing-facebook-icon.png" alt="Facebook Icon"/>
				<a href="http://www.facebook.com/quickspikes" title="Fan Us On Facebook" target="_blank>">FAN US ON FACEBOOK</a>
			</div>
			<div id="footer_logo">
				<a href="<?php bloginfo('url'); ?>/" title="Quick Spikes Home"><img src="<?= get_bloginfo('template_directory'); ?>/img/logo/quick_spikes.png" alt="Quick Spikes"/>
				<p>golf.com</p></a>
			</div>
			<div class="clearfix"></div>
		   	<p>&copy; 2011 Quick Spikes Golf LLC  |  All Rights Reserved  |  <a href="/shipping-policy" title="Quick Spikes Shipping Policy">Shipping Policy</a>  |  <a href="/return-policy" title="Quick Spikes Return Policy">Return Policy</a>  |  <a href="/privacy_policy" title="Quick Spikes Privacy Policy">Privacy Policy</a>  |  <a href="/sitemap" title="View the Quick Spikes Site Map">Site Map</a>   |  <?php wp_loginout( $redirect ); ?>  </p>
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
   var _gaq = [['_setAccount', 'UA-19135050-7'], ['_trackPageview']];
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