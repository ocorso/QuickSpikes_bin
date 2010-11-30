<?php 
/*
Template Name: Thank You      
*/

get_header(); ?>
<!-- this is where page stuff goes -->
<?php if (we_need_sidebar(is_home(), get_the_title())) get_sidebar(); ?>
<div id="body_container">

	<?php if(have_posts()): ?>
		<?php while(have_posts()):the_post(); ?>	
		<div class="post">
			<div id="heading">
				<div class="holding-line"></div>			
				<div id="<?= parse_subheadings(get_the_title())	;?>" class="headings"><h1><?php the_title(); ?></h1></div> 
				<div class="holding-line"></div>			
				<div class="clearfix"></div>
			</div>
		    <div class="entry" id="post-<?php the_ID(); ?>">	
			      <?php the_content("[Read more &rarr;]"); 
			      print_r($_POST);?>
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
