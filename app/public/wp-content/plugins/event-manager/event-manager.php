<?php
/* 
Plugin Name: Custom Event Post Type
Description: A custom post type for events.
Version: 1.0
Author: Miki
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action('init', 'event_custom_post_type');
function event_custom_post_type() {
    register_post_type('event',
        array(
            'labels' => array(
                'name' => __('Events Category', 'textdomain'),
                'singular_name' => __('Event', 'textdomain')
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}


