<!DOCTYPE html>
<html lang="en">
<head>
  <link href='http://fonts.googleapis.com/css?family=Noto+Sans|Cabin|Muli|Josefin+Sans|Karla|Questrial' rel='stylesheet' type='text/css'>
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
  <!--<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />-->
  <title>
    <?php wp_title( '|', true, 'right' ); ?>
    <?php bloginfo('name'); ?>
  </title>
<?php wp_head(); ?>
</head>
<body>
  <!-- <div class="bg_top"></div> -->
  <div class="main">
    <header id="" class="main_header fixed-top">      
      <?php 
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        
        if ( has_custom_logo() ) {
            echo '<h1><a href="/dos"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a></h1>';
        } else {
            echo '<h1><a href="'. home_url().'"><span>Dos</span>&nbsp;<span>Gringos</span><div>A Mount Pleasant Cafe</div></a></h1>';
        }
      ?>
      <nav class="main_nav">
        <nav><?php wp_nav_menu(); ?></nav>
      </nav>
    </header>
