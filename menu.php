<?php
/*
  Template Name: Menu
*/

get_header();
?>

<div class="about_page_pics">

<?php
$args = array(
  'post_type' => 'menu_pics',
  'order' => 'DESC',
  // 'offset' => '3',
  'posts_per_page' => '3'
  );

$the_query = new WP_Query( $args);

if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
    // check if the post or page has a Featured Image assigned to it.
    if ( has_post_thumbnail() ) {
    }
    echo '<div>'.get_the_post_thumbnail().'</div>';
?>

<?php endwhile; endif; wp_reset_query(); ?>

</div>




<!-- Display Sandwiches -->

<?php
  $args = array(
  'post_type' => 'sandwiches',
  'post_count' => '',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args);
$num_posts = wp_count_posts('sandwiches');
$sand_posts = $num_posts->publish;
?>

<div class="menu_wrap">
  <div class="menu_head">
    <span>&nbsp;</span>
    <h2 class="mn_sec_title">Sandwiches</h2>
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
<!-- Display Bowls, Salads -->

<?php
  $args = array(
  'post_type' => 'salads_plates',
  'post_count' => '',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args);
$num_posts = wp_count_posts('sandwiches');
$sand_posts = $num_posts->publish;
?>

<div class="menu_wrap">
  <div class="menu_head">
    <span>&nbsp;</span>
    <h2 class="mn_sec_title">Salads, Plates &amp; Bowls</h2>
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

<!-- Display Breakfast -->

<?php
  $args = array(
  'post_type' => 'breakfast',
  'post_count' => '',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args);
$num_posts = wp_count_posts('sandwiches');
$sand_posts = $num_posts->publish;
?>

<div class="menu_wrap">
  <div class="menu_head">
    <span>&nbsp;</span>
    <h2 class="mn_sec_title">Breakfast</h2>
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


<div class="about_page_pics">

<?php
$args = array(
  'post_type' => 'menu_pics',
  'order' => 'DESC',
  'offset' => '3',
  'posts_per_page' => '3'
  );

$the_query = new WP_Query( $args);

if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
    // check if the post or page has a Featured Image assigned to it.
    if ( has_post_thumbnail() ) {
    }
    echo '<div>'.get_the_post_thumbnail().'</div>';
?>

<?php endwhile; endif; wp_reset_query(); ?>

</div>

<!-- Display Coffee & Tea -->

<?php
  $args = array(
  'post_type' => 'hot_drinks',
  'post_count' => '',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args);
$num_posts = wp_count_posts('sandwiches');
$sand_posts = $num_posts->publish;
?>

<div class="menu_wrap">
  <div class="menu_head">
    <span>&nbsp;</span>
    <h2 class="mn_sec_title">Coffee &amp; Tea<span>Coffee Sizes: 12, 16, 20 oz</span></h2>
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
<!-- Display Cold Drinks -->

<?php
  $args = array(
  'post_type' => 'cold_drinks',
  'post_count' => '',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args);
$num_posts = wp_count_posts('sandwiches');
$sand_posts = $num_posts->publish;
?>

<div class="menu_wrap">
  <div class="menu_head">
    <span>&nbsp;</span>
    <h2 class="mn_sec_title">Smoothies &amp; Juice</h2>
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
<!-- Display Cold Drinks -->

<?php
  $args = array(
  'post_type' => 'small_things',
  'post_count' => '',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args);
$num_posts = wp_count_posts('sandwiches');
$sand_posts = $num_posts->publish;
?>

<div class="menu_wrap">
  <div class="menu_head">
    <span>&nbsp;</span>
    <h2 class="mn_sec_title">small things</h2>
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
