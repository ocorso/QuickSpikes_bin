<?php get_header(); ?>
<!-- this is where page stuff goes -->
<div id="body_container">

	  <?php if(have_posts()): ?>
	  <?php while(have_posts()):the_post(); ?>
	  <div class="post">

	    <div class="entry">
	      <?php the_content("[Read more &rarr;]"); ?>
	      <p class="postmetadata">
	        <?php the_tags( 'Tags: ', ', '); ?>//
	           Category <?php the_category(', ') ?>
	        <?php edit_post_link('Edit', ' &#124; ', ''); ?>
	        // <strong>
	        <?php comments_popup_link('Add Comment &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
	        </strong> </p>
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

</div>


<?php get_footer(); ?>
