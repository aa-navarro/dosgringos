<?php
/*
  Template Name: Catering
*/

get_header();
?>

<!-- Catering Intro --->

<?php
  $args = array(
  'post_type' => 'cat_intro',
  'post_count' => '',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args);
$num_posts = wp_count_posts('cat_intro');
$sand_posts = $num_posts->publish;
?>

<div class="menu_intro">
  <div class="menu_head">
    <span>&nbsp;</span>
    <h2 class="mn_sec_title">Dos Gringos Catering Menu</h2>
    <span>&nbsp;</span>
  </div>

  <div class="intro_sec">

  <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


  <div>
    <div class="intro_copy"><?php the_content(); ?></div>
  </div>

    <?php endwhile; endif; wp_reset_query(); ?>

  </div>
</div>





<!-- Display Breakfast Catering Options -->

<?php
  $args = array(
  'post_type' => 'cat_brk',
  'post_count' => '',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args);
$num_posts = wp_count_posts('cat_brk');
$sand_posts = $num_posts->publish;
?>

<div class="menu_wrap">
  <div class="menu_head">
    <span>&nbsp;</span>
    <h2 class="mn_sec_title">Breakfast Options</h2>
    <span>&nbsp;</span>
  </div>

  <div class="menu_sec">

  <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


  <div>
    <h3><?php the_title(); ?></h3>
    <span><?php the_content(); ?></span>
  </div>

    <?php endwhile; endif; wp_reset_query(); ?>

  </div>
</div>

<!-- Display Party Food Catering Options -->

<?php
  $args = array(
  'post_type' => 'cat_party',
  'post_count' => '',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args);
$num_posts = wp_count_posts('cat_party');
$sand_posts = $num_posts->publish;
?>

<div class="menu_wrap">
  <div class="menu_head">
    <span>&nbsp;</span>
    <h2 class="mn_sec_title">Party Food</h2>
    <span>&nbsp;</span>
  </div>

  <div class="menu_sec">

  <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


  <div>
    <h3><?php the_title(); ?></h3>
    <span><?php the_content(); ?></span>
  </div>

    <?php endwhile; endif; wp_reset_query(); ?>

  </div>
</div>

<!-- Display Party Food Catering Options -->

<?php
  $args = array(
  'post_type' => 'cat_daily',
  'post_count' => '',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args);
$num_posts = wp_count_posts('cat_daily');
$sand_posts = $num_posts->publish;
?>

<div class="menu_wrap">
  <div class="menu_head">
    <span>&nbsp;</span>
    <h2 class="mn_sec_title">Daily Dose</h2>
    <span>&nbsp;</span>
  </div>

  <div class="menu_sec">

  <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


  <div>
    <h3><?php the_title(); ?></h3>
    <span><?php the_content(); ?></span>
  </div>

    <?php endwhile; endif; wp_reset_query(); ?>

  </div>
</div>

<!-- Display Party Food Catering Options -->

<?php
  $args = array(
  'post_type' => 'cat_square',
  'post_count' => '',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args);
$num_posts = wp_count_posts('cat_square');
$sand_posts = $num_posts->publish;
?>

<div class="menu_wrap">
  <div class="menu_head">
    <span>&nbsp;</span>
    <h2 class="mn_sec_title">Square Meals</h2>
    <span>&nbsp;</span>
  </div>

  <div class="menu_sec">

  <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


  <div>
    <h3><?php the_title(); ?></h3>
    <span><?php the_content(); ?></span>
  </div>

    <?php endwhile; endif; wp_reset_query(); ?>

  </div>
</div>


<?php get_footer(); ?>
