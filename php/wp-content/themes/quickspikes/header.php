<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<!-- configure title -->
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<!-- load css -->
	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>
<!-- hook the head -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="container">
	<div id="header"><
		<h1 id="logo"><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
	
			<div id="nav">
				<ul>
					<li id="nav_home" >		<a href="<?php bloginfo('url'); ?>">Home</a></li>
					<li id="nav_about">		<a href="/about">About</a></li>
					<li id="nav_products">	<a href="/products">Products</a></li>
					<li id="nav_faq">		<a href="/faq">FAQ</a></li>
					<li id="nav_gallery">	<a href="/gallery">Gallery</a></li>
					<li id="nav_partners">	<a href="/partners">Partners</a></a></li>
					<li id="nav_contact">	<a href="/contact">Contact</a></li>
				</ul>  
			</div>			
		
	</div>
	
<!-- end header -->
<div id="content"> 


