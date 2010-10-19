<?php get_header(); ?>
<!-- this is where page stuff goes -->

<div id="body_container">
<?php
//wp_page_menu();

  if($post->post_parent)
  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
  else
  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
  if ($children) { ?>
  <ul>
  <?php echo $children; ?>
  </ul>
  <?php } ?>

	<?php if(have_posts()): ?>
		  <?php while(have_posts()):the_post(); ?>
		  <?php 	$data = get_post_custom(); ?>
		  <?php		$pg_name = $data['pg_name'][0] ?>
		  <script type="text/javascript"> 
		  	pageName = "<?=$pg_name;?>";
		  </script>
			
		  		
		  
		  <div class="post">
				<div id="<?= $pg_name?>_heading" class="headings">"<?= strtoupper($pg_name); ?></div> 
		    <div class="entry" id="post-<?php the_ID(); ?>">
		
		      <?php the_content("[Read more &rarr;]"); ?>
		    </div>
		  </div>
		  <?php endwhile; ?>
			  <?php else: ?>
		  <div class="post" id="post-<?php the_ID(); ?>">
		    <h2>
		      <?php _e('Not Found'); ?>
		    </h2>
		
		  </div>
	<?php endif; ?>
		<div class="clear-both"></div>
</div>

<?php get_footer(); ?>
