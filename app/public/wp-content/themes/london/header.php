<?php
/**
 * Template part for displaying the header section
 */
$header_image = get_field('header-logo');
?>

<section class="header-navbar">
    <div class="logo-container">
        <?php if( $header_image ): ?>
            <img src="<?php the_field('header-logo'); ?>" />
        <?php endif; ?>
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