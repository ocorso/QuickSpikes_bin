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
</head>

<body <?php body_class(); ?>>
  <script type="text/javascript"> var pageName = "home";</script>
  <img src="<?= get_bloginfo('template_directory'); ?>/img/backgrounds/course1.jpg" alt="background image" id="bg" />
  <div id="container">
  	<header>
		<div id="logo"><h1><a id="logo_big_q" href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1></div>
	
			<div id="nav">
				<ul>
					<li id="nav_home">		<a href="<?php bloginfo('url'); ?>">Home</a></li>
					<li id="nav_about">		<a href="/about">About		</a></li>
					<li id="nav_products">	<a href="/products">Products</a></li>
					<li id="nav_faq">		<a href="/faq">FAQ			</a></li>
					<li id="nav_gallery">	<a href="/gallery">Gallery	</a></li>
					<li id="nav_partners">	<a href="/partners">Partners</a></li>
					<li id="nav_contact">	<a href="/contact">Contact	</a></li>
				</ul>  
			</div>			
		
	</header>
	
<!-- end header -->
<div id="content_wrapper"> 
	<div id="content_top" class="content-border"></div>
	<div id="content">
