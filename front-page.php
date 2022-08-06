<?php get_header(); ?>

  <div class="hero">
    <?php
      $args = array(
      'post_type' => 'gringo'
      );
      $the_query = new WP_Query( $args);
    ?>
    <?php  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
      // check if the post or page has a Featured Image assigned to it.
      if ( has_post_thumbnail() ) {
      }
    ?>
      <div class=""><?php the_post_thumbnail(); ?></div>

      <!--<div class="hero_copy">-->
      <!-- </div> -->
      <!-- <div class="order_btn"><a  href="#">Order</a></div> -->
    <?php endwhile; endif;  ?>
  </div>
  <div class="sub_hero_pics">
    <?php
      $args = array(
      'post_type' => 'pics'
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
