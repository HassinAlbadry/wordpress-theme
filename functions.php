<?php

// Import scripts and style sheets

function themeStyle(){

	//styles
  wp_enqueue_style( 'bootstrap', '//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap' );
	wp_enqueue_style ('h-style1', get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style ('h-style2', get_template_directory_uri().'/assets/css/fontawesome.css');
	wp_enqueue_style ('h-style3', get_template_directory_uri().'/assets/css/templatemo-sixteen.css');
	wp_enqueue_style ('h-style4', get_template_directory_uri().'/assets/css/owl.css');

	



}

add_action('styleSheets','themeStyle');

//load scripts


function loadScripts(){
//scripts
  wp_enqueue_script( 'script1', get_template_directory_uri() . '/vendor/jquery/jquery.min.js');

  wp_enqueue_script( 'script2', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js');

  wp_enqueue_script( 'script3', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ));

  wp_enqueue_script( 'script4', get_template_directory_uri() . '/assets/js/owl.js');

  //wp_enqueue_script( 'script5', get_template_directory_uri() . '/assets/js/slick.js', array('jquery'));

  wp_enqueue_script( 'script6', get_template_directory_uri() . '/assets/js/isotope.js');

 wp_enqueue_script( 'script7', get_template_directory_uri() . '/assets/js/accordions.js');


}

add_action('wp_footer','loadScripts');

//woocommerce
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support');


  

  
//Nav menu 

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

// add class to a href in nav menu 

 function add_specific_menu_location_atts( $atts, $item, $args ) {
    // check if the item is in the primary menu
    if( $args->theme_location == 'header-menu' ) {
      // add the desired attributes:
      $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );




// Theme logo


function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 250,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


 ?>

    

