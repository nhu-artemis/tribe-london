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
      'credits-menu' => __( 'Credits Menu' ),
      )
   );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles_scripts' );

function theme_enqueue_styles_scripts() {
    wp_enqueue_style(
      'london-global',
      get_template_directory_uri() . '/assets/css/global.css',
    );

    wp_enqueue_style(
      'london-whatson',
      get_template_directory_uri() . '/assets/css/whatson.css',
    );

    wp_enqueue_style(
      'london-single',
      get_template_directory_uri() . '/assets/css/single-event.css',
    );

    wp_enqueue_style(
      'london-style',
      get_template_directory_uri() . '/style.css',
    );

    wp_enqueue_script(
        'london-script',
        get_template_directory_uri() . '/assets/event-filter.js',
    );
    wp_enqueue_script(
        'email-script',
        get_template_directory_uri() . '/assets/newsletter.js',
    );
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'custom/v1', '/newsletter', array(
        'methods'             => 'POST',
        'callback'            => 'handle_forminator_submission',
        'permission_callback' => '__return_true'
    ) );
} );

function handle_forminator_submission( WP_REST_Request $request ) {
  $form_id = 210;
  $email = $request->get_param('email');

  // if no email is input or email is invalid
  if ( empty( $email ) || ! is_email( $email ) ) {
        return new WP_REST_Response( array( 'success' => false, 'message' => 'Invalid email address.' ), 400 );
  }

  // entry to a form
  $entry_data = array(
    array(
      'name' => 'email-1',
      'value' => $email,
    )
  );
  $entry_id = Forminator_API::add_form_entry( $form_id, $entry_data );

  if ( is_wp_error( $entry_id ) ) {
      return new WP_REST_Response( array( 'success' => false, 'message' => $entry_id->get_error_message() ), 400 );
  }

  return new WP_REST_Response( array( 'success' => true, 'message' => 'Successfully subscribed!' ), 200 );
}