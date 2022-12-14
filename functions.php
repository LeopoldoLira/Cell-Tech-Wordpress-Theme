<?php

/*
*
* Cell & Tech Nicaragua. Functions and Definitions
*
*/



/*
*
* Defining constant's themes 
*
*/



define ('THEMEROOT', get_stylesheet_directory_uri());

define ('IMAGES', THEMEROOT . '/IMAGES');

define('SCRIPTS', THEMEROOT . '/JS');

define('FILES', THEMEROOT . '/FILES');



// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1110;

if ( ! function_exists('cyt_custom_theme_features') ) {

// Register Theme Features
function cyt_custom_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'video', 'audio' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails');

	// Add theme support for Custom Background
	$background_args = array(
		'default-color'          => 'ffffff',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-background', $background_args );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for Translation
	load_theme_textdomain( 'cyt', get_template_directory() . '/languages' );


    //tamanos de imagenes personalizados

    add_image_size('blog_size_image', 825, 533, true);

}
add_action( 'after_setup_theme', 'cyt_custom_theme_features' );

}

/*
* 
*Registrando y cargando hojas de estilo
*
*/


require_once('includes/scripts-styles.php');



/*
* 
*Registrando zonas de menu
*
*/


require_once('includes/menus.php');




/*
* 
*Registrando zonas de widgets
*
*/


require_once('includes/sidebars.php');