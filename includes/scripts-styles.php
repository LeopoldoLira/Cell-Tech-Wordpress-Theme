<?php 


/*
* 
*Archivo de registro y carga de scripts y estilos
*
*/

/*

REgistrando y cargando estilos

*/


function cyt_themes_styles(){

    //registrar los estilos

    wp_register_style('cyt-styles', get_stylesheet_uri(), '', '1.0', 'all');
    
    //cargar los estilos

    wp_enqueue_style('cyt-styles');

}

add_action('wp_enqueue_scripts','cyt_themes_styles');


/*
REgistrando y cargando scripts
*/


function cyt_theme_scripts(){
      //registrar scripts
      
      wp_register_script('cyt-index-slider', THEMEROOT . '/JS/index-sliders.js', '','1.0','all');
      wp_register_script('cyt-navbar-index', THEMEROOT . '/JS/navbar-index.js', '','1.0','all');
      wp_register_script('cyt-navbar', THEMEROOT . '/JS/navbar.js', '','1.0','all');

      //cargar scripts

      
      wp_enqueue_script(array('cyt-index-slider','cyt-navbar-index','cyt-navbar'));
}

add_action('wp_enqueue_scripts','cyt_theme_scripts');