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
