<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles_scripts');

function theme_enqueue_styles_scripts() {
    wp_enqueue_style(
        'london',
        plugins_url() . '/london/style.css',
    );
}