<?php
/**
 * Function for London Theme
 */

// Register the custom menus
add_action( 'init', 'register_the_menus' );
function register_the_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
     )
   );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles_scripts' );

function theme_enqueue_styles_scripts() {

    wp_enqueue_script(
        'london-script',
        get_template_directory_uri() . '/assets/event-filter.js',
    );
}
