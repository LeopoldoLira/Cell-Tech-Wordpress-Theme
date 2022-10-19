<?php

/*
*
* Cell & Tech Nicaragua. Functions and Definitions
*
*/



/*
*
* Registrando zona de menus 
*
*/


function cyt_menus(){

    register_nav_menus(array(
        'main-menu' => __('Menu Principal', 'cyt'),
        'secondary-menu' => __('Menu Secundario', 'cyt')
    ));
}

add_action('init', 'cyt_menus');