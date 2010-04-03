<?php
/*
Template Name: New Sitemap
*/
?>
<?php get_header(); ?>

<div id="container">
  <?php if(have_posts()): ?>
  <?php while(have_posts()):the_post(); ?>
  <h2><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
    <?php bloginfo('name'); ?>
    </a></h2>
  <h2>
    <?php the_title(); ?>
  </h2>
  <h3>All internal pages:</h3>
  <ul>
    <?php wp_list_pages('title_li='); ?>
  </ul>
  <h3>All internal blog posts:</h3>
  <ul>
    <?php $archive_query = new WP_Query('showposts=1000');
		while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
    <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
      <?php the_title(); ?>
      </a> <strong>
      <?php comments_number('0', '1', '%'); ?>
      </strong></li>
    <?php endwhile; ?>
  </ul>
  <h3>Monthly archive pages:</h3>
  <ul>
    <?php wp_get_archives('type=monthly'); ?>
  </ul>
  <h3>Topical archive pages:</h3>
  <ul>
    <?php wp_list_categories('title_li=0'); ?>
  </ul>
  <h3>Available RSS Feeds:</h3>
  <ul>
    <li><a href="<?php bloginfo('rdf_url'); ?>" title="RDF/RSS 1.0 feed"><acronym title="Resource Description Framework">RDF</acronym>/<acronym title="Really Simple Syndication">RSS</acronym> 1.0 feed</a></li>
    <li><a href="<?php bloginfo('rss_url'); ?>" title="RSS 0.92 feed"><acronym title="Really Simple Syndication">RSS</acronym> 0.92 feed</a></li>
    <li><a href="<?php bloginfo('rss2_url'); ?>" title="RSS 2.0 feed"><acronym title="Really Simple Syndication">RSS</acronym> 2.0 feed</a></li>
    <li><a href="<?php bloginfo('atom_url'); ?>" title="Atom feed">Atom feed</a></li>
  </ul>
  <?php endwhile; ?>
  <?php else: ?>
  <div class="post" id="post-<?php the_ID(); ?>">
    <h2>
      <?php _e('Not Found'); ?>
    </h2>
  </div>
  <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php include (TEMPLATEPATH . '/left_sidebar.php'); ?>
</div>
<?php get_footer() ?>
</body>
</html>