<section>
	<h1><?php strtoupper(the_title()); ?></h1>
<?php
	
  if($post->post_parent)
  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
  else
  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
  if ($children) { ?>
  <ul>
  <?php echo $children; ?>
  </ul>
  <?php } ?>

	<h1>Account</h1>
	<div id="sidebar_account_body">
		<?php wp_register(); 
	  			 echo "|  "; 
	  			 wp_loginout(); ?> 
	</div>
</section>