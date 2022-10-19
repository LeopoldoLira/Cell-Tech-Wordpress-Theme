<?php 


/*
* 
*Registro de sidebars
*
*/

function cyt_sidebars(){

        register_sidebar(array(

    'name'          => __( 'Barra lateral', 'cyt' ),
	'id'            => 'main-sidebar',
	'description'   => __( 'Widgets en barra lateral', 'cyt' ),
    'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>'
        ));


        register_sidebar(array(

            'name'          => __( 'Pie de pagina zona izquierda', 'cyt' ),
            'id'            => 'footer-sidebar-left',
            'description'   => '',
            'class'         => '',
            'before_widget' => '<p id="%1$s" class="widget %2$s">',
            'after_widget'  => '</p>',
            'before_title'  => '<h2 class="widget">',
            'after_title'   => '</h2>'
                ));

                register_sidebar(array(

                    'name'          => __( 'Pie de pagina zona central', 'cyt' ),
                    'id'            => 'footer-sidebar-middle',
                    'description'   => '',
                    'class'         => '',
                    'before_widget' => '<ul id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</ul>',
                    'before_title'  => '<h2 class="widget">',
                    'after_title'   => '</h2>'
                        ));

                        register_sidebar(array(

                            'name'          => __( 'Pie de pagina zona derecha', 'cyt' ),
                            'id'            => 'footer-sidebar-right',
                            'description'   => '',
                            'class'         => '',
                            'before_widget' => '<ul id="%1$s" class="widget %2$s">',
                            'after_widget'  => '</ul>',
                            'before_title'  => '<h2 class="widget">',
                            'after_title'   => '</h2>'
                                ));

}

add_action('widgets_init','cyt_sidebars');