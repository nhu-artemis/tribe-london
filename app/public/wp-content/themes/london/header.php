<section class="header-navbar">
    <div class="logo-container">
        <img src="http://tribe-london.local/wp-content/uploads/2026/11/Logo.svg">
    </div>
    <div class="header-menu-container">
        <div class="header-menu-item">
            <?php
            // Display the navigation menu for the header
            wp_nav_menu( 
                array( 
                    'theme_location' => 'header-menu',
                    'container_class' => 'header-menu-class'
                ) 
            );
            ?>
        </div>
    </div>

</section>