<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 // Enqueue AOS CSS //
  wp_enqueue_style( 'aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1' );
   // Enqueue Swiper CSS //
   wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '6.0.0' );
}

// Enqueue AOS JavaScript //
function enqueue_aos_script() {
    wp_enqueue_script( 'aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true );
   
    wp_add_inline_script( 'aos-js', 'AOS.init();', 'after' ); // Ajout du script d'initialisation d'AOS//
}
add_action( 'wp_enqueue_scripts', 'enqueue_aos_script' );

// Enqueue Swiper JavaScript //
function enqueue_swiper_script() {
    wp_enqueue_script( 'swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '6.0.0', true );
    wp_add_inline_script( 'swiper-script', 'new Swiper(".swiper-container");', 'after' ); // Initialisation de Swiper//
}
add_action( 'wp_enqueue_scripts', 'enqueue_swiper_script' );

//add my script.js//
function enqueue_custom_scripts() {
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/script.js', array('swiper-script'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');



// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

// enqueue le fichier style css 
function enqueue_custom_styles() {
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');