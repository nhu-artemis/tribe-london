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


add_action('init', 'event_custom_taxonomy');

function event_custom_taxonomy() {
    $labels = array(
        'name'          => 'Events',
        'singular_name' => 'Event',
        'menu_name'     => 'Events',
        'all_items'     => 'All Events',
        'edit_item'     => 'Edit Event',
        'view_item'     => 'View Event',
        'update_item'   => 'Update Event',
        'add_new_item'  => 'Add New Event',
        'new_item_name' => 'New Event Name',
    );
    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'event'],
    );

    register_taxonomy('event', array('event'), $args);
}

add_action('wp_enqueue_scripts', 'event_manager_enqueue_scripts');

function event_manager_enqueue_scripts() {
    if ( ! is_singular( 'event' ) ) {
        return;
    }
    wp_enqueue_script(
        'event_manager_script',
        plugins_url() . '/event-manager/event-manager.js',
    );
}
?>
