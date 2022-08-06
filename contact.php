<?php
/***
Template Name: Simple Page
***/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="hero">
    <div class="hero_copy">
      <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  </div>

<?php get_footer(); ?>
