<?php get_header(); ?>
<!-- this is where page stuff goes -->
<?php if (!is_home()) get_sidebar(); ?>
<div id="body_container">

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
