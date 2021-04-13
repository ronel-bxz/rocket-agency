<?php get_header(); ?>
<!DOCTYPE html>
<html lang="en" style="margin-top: 0px !important">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Rocket agency</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <?php wp_head(); ?>
   </head>
   <!-- body -->
   <body class="main-layout">
	<!-- header section start -->
		<div class="container" id="header">
			<div class="row">
            <div class="col-md-12">
               <header>
                  <div class="d-flex flex-column flex-md-column flex-md-column flex-lg-column flex-xl-row align-items-center">
                     <div class="logo mr-auto">
                        <a href="">
                           <?php
                              $custom_logo_id = get_theme_mod( 'custom_logo' );
                              $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                           ?>
                           <img src="<?php echo $image[0]; ?>" alt="">
                        </a>
                     </div>
                     <div class="d-block d-sm-block d-md-block d-lg-block d-xl-none">
                        <a id="menu-button" href="javascript:void(0)"><img src="<?php echo get_template_directory_uri().'/images/menu.png' ?>" alt=""></a>
                        <a id="menu-button-cancel" href="javascript:void(0)"><img src="<?php echo get_template_directory_uri().'/images/cancel.png' ?>" alt=""></a>
                     </div>
                     <div id="nav-collapse">
                        <nav>
                           <?php
                              wp_nav_menu( array( 
            							'theme_location' => 'primary', 
            							 ) ); 
            					?>
                           <ul>
                              <li><a href=""><button class="primary">Call 123 4567</button></a></li>
                              <li><a href=""><button class="secondary">CONTACT US</button></a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </header>
            </div>
			</div>
		</div>
	<!-- header section end -->