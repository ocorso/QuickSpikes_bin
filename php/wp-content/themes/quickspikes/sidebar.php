<?php 
//config the sidebar 
if($post->post_parent){
	$isSub 			= true;
	$parent_title = get_the_title($post->post_parent);
	$anchor	= '<a href="' . get_permalink($post->post_parent)
    . '" title="' . $parent_title . '">' . $parent_title
    . '</a>';
}else {
	$isSub = false;
	$anchor = '<a href="' . get_permalink()
    . '\" title="' . get_the_title() . '">' . get_the_title()
    . '</a>';
}
?>

<section>
	<h1><?= $anchor; ?></h1>
<?php
	
  if($isSub)
  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
  else
  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
  if ($children) { ?>
  <ul>
  <?php echo $children; ?>
  </ul>
  <?php } ?>

	<h1><a href="/products/your-account" title="Access Your Account"> Account</a></h1>
	<div id="sidebar_account_body">
		<?php 
			if ( !is_user_logged_in() ) {
				wp_register(); 
	  			echo "|  "; 
	  		}
	  		wp_loginout(); 
	  	?> 
	</div>
</section>