<?php
/*
Basic PHP Theme
Enno Hyttrek
Version: 1.1.1
*/

function myCustomTheme_stylesheets() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'inter-font', get_template_directory_uri() . '/assets/fonts/inter/font-style.css' );
}
add_action( 'wp_enqueue_scripts', 'myCustomTheme_stylesheets' );

function register_my_menus() {
  register_nav_menus(
    array(
        'main-menu' => __( 'Hauptmenü' ),
        'mobile-menu' => __( 'Mobilmenü' ),
        'secondary-menu' => __( 'Footermenü' )
        )
   );
 }
 add_action( 'init', 'register_my_menus' );

add_theme_support( 'disable-layout-styles' );
add_theme_support( 'post-thumbnails' );

//Experimental!
//https://fullsiteediting.com/lessons/how-to-remove-default-block-styles/

function prefix_remove_core_block_styles() {
	wp_dequeue_style( 'wp-block-group' );
}
add_action( 'wp_enqueue_scripts', 'prefix_remove_core_block_styles' );

function prefix_remove_global_styles() {
	wp_dequeue_style( 'global-styles' );
} 
add_action( 'wp_enqueue_scripts', 'prefix_remove_global_styles', 100 );