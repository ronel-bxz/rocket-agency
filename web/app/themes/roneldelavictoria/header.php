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
      <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
      <?php wp_head(); ?>
   </head>
   <!-- body -->
   <body class="main-layout">
	<!-- header section start -->
		<div class="container">
			<div class="row">
            <div class="col-md-12">
               <header>
                  <div class="d-flex align-items-center">
                     <div class="logo mr-auto">
                        <a href=""><img src="<?php echo get_template_directory_uri().'/images/logo.png' ?>" alt=""></a>
                     </div>
                     <div>
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