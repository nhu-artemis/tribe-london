<?php

// Display the navigation menu for the footer
wp_nav_menu( 
    array( 
        'theme_location' => 'footer-menu',
        'container_class' => 'footer-menu-class'
    ) 
);