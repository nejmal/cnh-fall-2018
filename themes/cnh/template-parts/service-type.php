<?php 
  /**
   * Template part for displaying the service type entry.
   * 
   * Start the loop 
   */ 
  while ( have_posts() ) : the_post(); ?>
<div class="service-info">
  <h2 class="entry-title">
    <?php the_title(); ?>
  </h2>
  <div class="entry-content">
  <?php the_content(); ?>  
  </div><!-- .entry-content -->
</div><!-- .service-info -->
<?php endwhile; // end of the loop. ?>