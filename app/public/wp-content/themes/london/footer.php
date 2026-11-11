<?php
$footer_image = get_field('footer-logo')
?>


<section class="footer-navbar">
    <div class="footer-logo-container">
        <?php if( $footer_image ): ?>
            <img src="<?php the_field('footer-logo'); ?>" />
        <?php endif; ?>
    </div>
    

    <div class="footer-menu-container">
        <div class="footer-menu-item">
            <?php
            // Display the navigation menu for the footer
            wp_nav_menu( 
                array( 
                    'theme_location' => 'footer-menu',
                    'container_class' => 'footer-menu-class'
                ) 
            );
            ?>
        </div>
    </div>
</section>
