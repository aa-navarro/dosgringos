    </div><!-- class main-->
    <footer>
      <div class="footer_wrap wrapper">
        <div class="footer_address f-div">        
          <?php
            $args = array(
              'post_type' => 'footer_address'
            );
            $the_query = new WP_Query( $args);
          ?>

          <?php  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );          
            if ( has_custom_logo() ) {
                echo '<h1><a href="/dos"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a></h1>';
            } else {
                echo '<h2><a href="'. home_url().'">Dos Gringos<div>A Mt Pleasant Cafe</div></a></h2>';
            }
          ?>

          <div><?php the_content(); ?></div>
          <?php endwhile; endif; ?>
          <nav class="social" aria-label="Social Media Links">
            <?php
              function theme_image( $image ) {
              return get_template_directory_uri() . '/images/' . $image;
            }              
            ?>            
            <ul>
              <li><a href="https://www.facebook.com/DosGringosDC"><img src="<?php echo theme_image('fb-icon_bw.png') ?>" alt="facebook icon"></a></li>
              <li><a href="https://www.youtube.com/watch?v=MiMdIDGYzMY&t=0s"><img src="<?php echo theme_image('yt-logo_bw.png') ?>" alt="youtube icon"></a></li>
            </ul>
          </nav>
        </div>
      
        <div class="hours f-div">
          <?php
            $args = array(
              'post_type' => 'footer_hours'
            );
            $the_query = new WP_Query( $args);
          ?>

          <?php  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <h2><?php the_title(); ?></h2>
          <div><?php the_content(); ?></div>
          <?php endwhile; endif; ?>
        </div><!-- footer section-->
        <div class="map f-div">
          <h2></h2>
          <iframe
            title="Dos Gringos location in Mount Pleasant, DC"
            width="220"
            height="180"
            <!-- Removed iframe source from git repo to avoid exposing api key -->
          ></iframe>
        </div>
      </div><!--footer wrap-->
      <p class="ph_credit">&copy; Dos Gringos <?php $copyDate = date('Y'); echo $copyDate; ?> | Photos by <a aria-label="link to photgrapher website" href="https://lestalusan.com/">Les Talusan</a> </p>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
