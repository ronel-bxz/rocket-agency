<?php 
	add_action( 'after_setup_theme', 'register_my_menu' );
	function register_my_menu() {
	  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
	}

	add_action( 'plugins_loaded', 'add_my_options_page' );

	function roneldelavictoria_scripts() {
	wp_enqueue_style( 'bootsrapcss', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style( 'ronel-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/query.min.js', array(), '1.0.0',true);
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0',true);
	wp_enqueue_script( 'bootstrapminjs', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '1.0.0',true);
	}
	add_action( 'wp_enqueue_scripts', 'roneldelavictoria_scripts' );


	     /**
	 * Register support for Gutenberg wide images in your theme
	 */
	function mytheme_setup() {
	  add_theme_support( 'align-wide' );
	}
	add_action( 'after_setup_theme', 'mytheme_setup' );
   
 ?>
