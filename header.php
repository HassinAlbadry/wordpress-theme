
<!DOCTYPE html>
<html lang="en">

  
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="author" content="">

    <title><?php echo get_bloginfo('name') ?></title>

    <?php do_action('styleSheets');?>

    <?php wp_head();?>

  </head>

  <body <?php body_class();?>>

     <!--***** Preloader Start ***** -->
     <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> 
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <h2 class="navbar-brand">

                <?php if ( function_exists( 'the_custom_logo' ) ) {
                           the_custom_logo();
                  } 
                  ?>
                
            </h2>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
            

                <?php wp_nav_menu(
                  array(
                    'theme_location' => 'header-menu',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'=>'navbarResponsive',
                    'menu_class'=>'navbar-nav ml-auto',
                    'menu_item' => 'nav-item',

                    
                  )
                ); ?>
              






             
           <!--<div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

             <li class="nav-item active">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.html">Our product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li> 
            </ul>
            
          </div>
          -->
        </div>
      </nav>
    </header>

     


