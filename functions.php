<?php
function theme_styles(){
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css' );
}

add_action(  'wp_enqueue_scripts', 'theme_styles' );

add_theme_support( 'post-thumbnails' );
function theme_js(){

	global $wp_scripts;

	wp_register_script('html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false);
	wp_register_script('respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false);

	$wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9');
	$wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9');
} //end theme_js();

	/*wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );*/

	add_filter( 'show_admin_bar', '__return_false');

	add_theme_support( 'menus' );

	function bagel_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
    );

    add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'bagel_custom_logo_setup' );

function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu')
		)
	);
}//end register_theme_menus();

add_action ('init', 'register_theme_menus');

//Walker class

 // Register custom navigation walker
    // require_once('wp_bootstrap_navwalker.php');

//Create custom posts

// Hero copy - Little inset in Hero image of Home Page

function hero_copy_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Hero Copy',
			'supports' => array('title','editor','thumbnail')
    );
    register_post_type( 'hero_copy', $args );
}
add_action( 'init', 'hero_copy_custom_init' );

// Posts for Dos Gringos Is About Box [Left] in Home Page

function gringo_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Gringo',
			'supports' => array('title','editor','thumbnail')
    );
    register_post_type( 'gringo', $args );
}
add_action( 'init', 'gringo_custom_init' );

function hero_pics_init() {
    $args = array(
      'public' => true,
      'label'  => 'Pics',
			'supports' => array('title','editor','thumbnail')
    );
    register_post_type( 'pics', $args );
}

add_action( 'init', 'hero_pics_init' );

function about_pics_init() {
    $args = array(
      'public' => true,
      'label'  => 'Pics About',
			'supports' => array('title','editor','thumbnail')
    );
    register_post_type( 'about_pics', $args );
}

add_action( 'init', 'about_pics_init' );

function about_lg_pic_init() {
    $args = array(
      'public' => true,
      'label'  => 'LG Pic About',
			'supports' => array('title','editor','thumbnail')
    );
    register_post_type( 'about_lg_pic', $args );
}

add_action( 'init', 'about_lg_pic_init' );



// Post for Copy on Collage section under Gringo Boxes

function menu_pics_init() {
    $args = array(
      'public' => true,
      'label'  => 'MN Pics',
			'supports' => array('title','editor','thumbnail')
    );
    register_post_type( 'menu_pics', $args );
}
add_action( 'init', 'menu_pics_init' );

// Post for Address in Footer

function footer_address_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Address',
			'supports' => array('title','editor','thumbnail')
    );
    register_post_type( 'footer_address', $args );
}
add_action( 'init', 'footer_address_custom_init' );

function footer_hours_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Hours'
    );
    register_post_type( 'footer_hours', $args );
}
add_action( 'init', 'footer_hours_custom_init' );


//Breakfast - dashboard

function breakfast_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Breakfast'
    );
    register_post_type( 'breakfast', $args );
}//end breakfast_custom_init();

add_action( 'init', 'breakfast_custom_init' );

//Breakfast sides - dashboard

function breakfast_side_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Breakfast Sides'
    );
    register_post_type( 'breakfast_side', $args );
}//end breakfast_custom_init();

add_action( 'init', 'breakfast_side_custom_init' );

//Hot Drinks - dashboard

function hot_drinks_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Hot Drinks'
    );
    register_post_type( 'hot_drinks', $args );
}//end breakfast_custom_init();

add_action( 'init', 'hot_drinks_custom_init' );

//Cold Drinks - dashboard

function cold_drinks_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Cold Drinks'
    );
    register_post_type( 'cold_drinks', $args );
}//end breakfast_custom_init();

add_action( 'init', 'cold_drinks_custom_init' );


//Good Stuff - dashboard

function small_things_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Small'
    );
    register_post_type( 'small_things', $args );
}//end breakfast_custom_init();

add_action( 'init', 'small_things_custom_init' );

//Sandwiches - dashboard

function sandwiches_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Sandwiches'
    );
    register_post_type( 'sandwiches', $args );
}//end breakfast_custom_init();

add_action( 'init', 'sandwiches_custom_init' );

//Salads - dashboard

function salads_plates_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'SPB'
    );
    register_post_type( 'salads_plates', $args );
}//end salads_plates_custom_init();

add_action( 'init', 'salads_plates_custom_init' );

function soup_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Soups'
    );
    register_post_type( 'soup', $args );
}//end breakfast_custom_init();

add_action( 'init', 'soup_custom_init' );


//Toppings

function toppings_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Toppings'
    );
    register_post_type( 'toppings', $args );
}//end breakfast_custom_init();

add_action( 'init', 'toppings_custom_init' );

//Catering

function catering_brk_init() {
    $args = array(
      'public' => true,
      'label'  => 'Cater Breakfast'
    );
    register_post_type( 'cat_brk', $args );
}//end breakfast_custom_init();

add_action( 'init', 'catering_brk_init' );

//Catering

function catering_party_init() {
    $args = array(
      'public' => true,
      'label'  => 'Cater Party'
    );
    register_post_type( 'cat_party', $args );
}//end breakfast_custom_init();

add_action( 'init', 'catering_party_init' );

function catering_daily_init() {
    $args = array(
      'public' => true,
      'label'  => 'Cater Daily'
    );
    register_post_type( 'cat_daily', $args );
}//end breakfast_custom_init();

add_action( 'init', 'catering_daily_init' );

function catering_square_init() {
    $args = array(
      'public' => true,
      'label'  => 'Cater Square'
    );
    register_post_type( 'cat_square', $args );
}//end breakfast_custom_init();

add_action( 'init', 'catering_square_init' );

function catering_intro_init() {
    $args = array(
      'public' => true,
      'label'  => 'Cater Intro'
    );
    register_post_type( 'cat_intro', $args );
}//end breakfast_custom_init();

add_action( 'init', 'catering_intro_init' );


function create_widget($name, $id, $description){

	register_sidebar(array(
		'name' => __( $name ),
		'id'   => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div><!--close .widget-->',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
		));
}

create_widget('Front Page Left', 'front-left', 'Displays on the left of the homepage');

create_widget('Front Page Center', 'front-center', 'Displays on the center of the homepage');

create_widget('Front Page Right', 'front-right', 'Displays on the right of the homepage');
?>
