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
	<h1 id="header"><a href="<?php bloginfo('url'); ?>/"><span class="hide"><?php bloginfo('name'); ?></span></a></h1>
	<div id="nav">
			<ul>
				<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
				<li><a href="/about">About</a></li>
				<li><a href="/videos">Products</a></li>
				<li><a href="/tips">FAQ</a></li>
				<li><a href="/gallery">Gallery</a></li>
				<li><a href="/partners">Partners</a></a></li>
				<li><a href="/contact">Contact</a></li>
			</ul>  
	</div>
<!-- end header -->
<div id="content"> 


