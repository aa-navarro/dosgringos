<?php
/***
Template Name: Basic Page
***/
?>

<?php get_header(); ?>
<div class="about_page_pics">
  <?php
    $args = array(
    'post_type' => 'about_pics',
    'posts_per_page' => 3
    );
    $the_query = new WP_Query( $args);
  ?>

  <?php  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
    // check if the post or page has a Featured Image assigned to it.
    if ( has_post_thumbnail() ) {
    }
  ?>
    <div><?php the_post_thumbnail(); ?></div>
  <?php endwhile; endif; ?>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="hero">
    <div class="hero_copy">
      <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  </div>

  <div class="hero">
    <?php
      $args = array(
      'post_type' => 'about_lg_pic',
      'posts_per_page' => 1
      );
      $the_query = new WP_Query( $args);
    ?>

    <?php  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
      // check if the post or page has a Featured Image assigned to it.
      if ( has_post_thumbnail() ) {
      }
    ?>
      <div><?php the_post_thumbnail(); ?></div>
    <?php endwhile; endif; ?>
  </div>

<?php get_footer(); ?>
