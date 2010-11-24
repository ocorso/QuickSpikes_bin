<?php
/**
 * @package Quick Spikes
 * @subpackage quickspikes
 */
?>
<!doctype html <?= language_attributes(); ?>>  
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html <?= language_attributes(); ?>class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?= language_attributes(); ?>class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?= language_attributes(); ?>class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?= language_attributes(); ?>class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?= language_attributes(); ?>class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <!-- configure title -->
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <meta name="description" content="Quick Spikes are the temporary golf spikes solution. Quick Spikes are superior quality golf products.">
  <meta name="author" content="Owen Corso">

  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- hook the head -->
  <?php wp_head(); ?>
    <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <script>!window.jQuery && document.write('<script src="<?= get_bloginfo('template_directory'); ?>/js/libs/jquery.js"><\/script>')</script>
</head>

<body <?php body_class(); ?>>

  <?php if (is_page("About") || is_page("FAQ")) : ?>
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
				<li id="nav_home">		<a <?php if (is_front_page()) echo 'class="selected"'; ?> href="<?php bloginfo('url'); ?>">Home</a></li>
				<li id="nav_about">		<a <?php if (is_page("About")) echo 'class="selected"'; ?> href="<?php bloginfo('url'); ?>/about">About		</a></li>
				<li id="nav_products">	<a <?php if (is_page("Products")) echo 'class="selected"'; ?> href="<?php bloginfo('url'); ?>/products">Products</a></li>
				<li id="nav_faq">		<a <?php if (is_page("FAQ")) echo 'class="selected"'; ?> href="<?php bloginfo('url'); ?>/faq">FAQ			</a></li>
				<li id="nav_gallery">	<a <?php if (is_page("Gallery")) echo 'class="selected"'; ?> href="<?php bloginfo('url'); ?>/gallery">Gallery	</a></li>
				<li id="nav_partners">	<a <?php if (is_page("Partners")) echo 'class="selected"'; ?> href="<?php bloginfo('url'); ?>/partners">Partners</a></li>
				<li id="nav_contact">	<a <?php if (is_page("Contact")) echo 'class="selected"'; ?> href="<?php bloginfo('url'); ?>/contact">Contact	</a></li>
			</ul>  
		</nav>			
	</header>
	
<!-- end header -->
<div id="content_wrapper"> 

	<div id="content">
