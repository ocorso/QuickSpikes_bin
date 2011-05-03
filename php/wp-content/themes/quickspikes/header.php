<?php
/**
 * @package Quick Spikes
 * @subpackage quickspikes
 */
 
?>
<!DOCTYPE HTML <?= language_attributes(); ?>>  
<!--[if lt IE 7 ]> <html <?= language_attributes(); ?>class="no-js ie6" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if IE 7 ]>    <html <?= language_attributes(); ?>class="no-js ie7" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if IE 8 ]>    <html <?= language_attributes(); ?>class="no-js ie8" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if IE 9 ]>    <html <?= language_attributes(); ?>class="no-js ie9" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?= language_attributes(); ?>class="no-js" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"> <!--<![endif]-->
<head>
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta name="description" content="Quick Spikes are the temporary golf spikes solution. Quick Spikes are superior quality golf products.">
	<meta name="author" content="Owen Corso">
	<meta property="og:title" content="<?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?>"/>
	<meta property="og:type" content="product"/>
	<meta property="og:url" content="http://www.quickspikesgolf.com/"/>
	<meta property="og:image" content="http://quickspikesgolf.com/apple-touch-icon.png"/>
	<meta property="og:site_name" content="Quick Spikes"/>
	<meta property="fb:admins" content="514569323, 1110939581"/>
	<meta property="og:description" content="Quick Spikes is the tempory golf spike solution. The perfect golf gear for any golfer."/>
	<meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- hook the head -->
  <?php wp_head(); ?>
  <script>
  	var pageManager = {};
  	pageManager.isHome	 = <?php echo is_home() ? "true" : "false"; ?>;
  	!window.jQuery && document.write('<script src="<?= get_bloginfo('template_directory'); ?>/js/libs/jquery.js"><\/script>')
  </script>
</head>

<body <?php body_class(); ?>>

  <?php if (is_page("About") || is_page("Story") || is_page("Why To Use") || is_page("Where To Find") || is_page("FAQ")) : ?>
  <img id="sunset_bg" src="<?= get_bloginfo('template_directory'); ?>/img/backgrounds/sunsetBG.jpg" alt="background image" />
  <?php else : ?>
   <img id="bg" src="<?= get_bloginfo('template_directory'); ?>/img/backgrounds/grassBG.jpg" alt="background image" />
   <?php endif; ?>
  <div id="container">
  	<header>
		<div id="logo">
			<a id="logo_big_q" href="<?php bloginfo('url'); ?>/" title="Quick Spikes Home"><?php bloginfo('name'); ?></a>
			<div id="logo_reveal">
				<div id="logo_reveal_inner"><a href="<?php bloginfo('url'); ?>/" title="Quick Spikes Home"><img src="<?= get_bloginfo('template_directory'); ?>/img/logo/quick_spikes.png" alt="Quick Spikes"/>
					<h2>The Temporary Golf Spike Solution.</h2>
				</a></div>
			</div>
			<div id="logo_handle"></div>
			<div class="clearfix"></div>
		</div> <!-- end logo -->	
		<nav>
			<ul>
				<li id="nav_home">		<a class="nav-a <?php if (is_front_page()) 		echo 'selected'; ?>" href="<?php bloginfo('url'); ?>" title="Home">Home								</a></li>
				<li id="nav_about">		<a class="nav-a <?php if (is_page("About")) 	echo 'selected'; ?>" href="<?php bloginfo('url'); ?>/about" title="About">About						</a></li>
				<li id="nav_products">	<a class="nav-a <?php if (is_page("Products")) 	echo 'selected'; ?>" href="<?php bloginfo('url'); ?>/products" title="Products">Products			</a></li>
				<li id="nav_faq">		<a class="nav-a <?php if (is_page("FAQ")) 		echo 'selected'; ?>" href="<?php bloginfo('url'); ?>/faq" title="Frequently Asked Questions">FAQ	</a></li>
				<li id="nav_gallery">	<a class="nav-a <?php if (is_page("Gallery")) 	echo 'selected'; ?>" href="<?php bloginfo('url'); ?>/gallery" title="Gallery">Gallery				</a></li>
				<li id="nav_partners">	<a class="nav-a <?php if (is_page("Partners")) 	echo 'selected'; ?>" href="<?php bloginfo('url'); ?>/partners" title="Partners">Partners			</a></li>
				<li id="nav_contact">	<a class="nav-a <?php if (is_page("Contact")) 	echo 'selected'; ?>" href="<?php bloginfo('url'); ?>/contact" title="Contact">Contact				</a></li>
			</ul>  
		</nav>			
	</header>
	
<!-- end header -->
<div id="content_wrapper"> 

	<div id="content">
