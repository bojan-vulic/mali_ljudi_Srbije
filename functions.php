<?php

/**************
  Theme support
***************/

function lpstema_setup_theme(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );


    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'lpstema' ),
    ) );

}
add_action( 'after_setup_theme', 'lpstema_setup_theme' );


/**********************************
  Register Custom Navigation Walker
***********************************/

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/***************
  Excerpt length
****************/

function lpstema_excerpt_length() {
        
    return 20;
}
add_filter('excerpt_length','lpstema_excerpt_length');

/**********************************
  Register Sidebar
***********************************/

function lpstema_widget_setup() {
    
    register_sidebar(array(
    
        'name' => 'Footer-1',
        'id' => 'footer-1',
        'before_widget' => '<div class="col-md-4 text-center">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
    
        'name' => 'Footer-2',
        'id' => 'footer-2',
        'before_widget' => '<div class="col-md-4 text-center">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
    
        'name' => 'Footer-3',
        'id' => 'footer-3',
        'before_widget' => '<div class="col-md-4">',
        'after_widget' => '</div>'
    ));
    
}
    
    add_action('widgets_init','lpstema_widget_setup');




