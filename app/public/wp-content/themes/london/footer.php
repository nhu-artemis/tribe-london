<?php
$footer_image = get_field('footer-logo');
$footer_title = get_field('footer-title');
$footer_description = get_field('footer-description');
$policy = get_field('newsletter-policy');
$tagline = get_field('credits-tagline');
$credit_menu1 = get_field('privacy-policy');
$credit_menu2 = get_field('terms-of-service');
$credit_menu3 = get_field('cookie-settings');
?>

<section class="footer-navbar">
    <div class="footer-frame">
        <div class="footer-menu-container">
            <div class="footer-logo-container">
                <?php if( $footer_image ): ?>
                    <img src="<?php the_field('footer-logo'); ?>" />
                <?php endif; ?>
            </div>

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
        <div class="footer-newsletter-container">
            <div class="footer-content-container">
                <p class="footer-title"><?php echo $footer_title; ?></p>
                <p class="footer-description"><?php echo nl2br($footer_description); ?></p>            
            </div>
            <div class="newsletter-container">
                <div class="newsletter-action-background">
                    <div class="newsletter-action-container">
                        <div class="newsletter-action-frame">
                            <form id="custom-newsletter-form" class="custom-form-layout">
                                <input type="email" id="newsletter-email" name="email" placeholder="Enter your email" required />
                                <button type="submit" id="newsletter-submit-btn">SUBSCRIBE</button>
                            </form>
                            
                            <div id="form-response-message" style="display:none"></div>
                        </div>
                    </div>
                </div>   
                <p class="newsletter-policy"><?php echo $policy; ?></p> 
            </div>   
        </div>           
    </div>    
</section>

<section class="footer-credits">
    <div class="footer-credits-row">
        <div class="footer-container">
            <div class="tagline"><?php echo $tagline; ?></div>
            <div class="tagline"><?php echo $credit_menu1; ?></div>
            <div class="tagline"><?php echo $credit_menu2; ?></div>
            <div class="tagline"><?php echo $credit_menu3; ?></div>
        </div>
        <div class="social-link">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/Facebook.png' ); ?>" alt="Facebook">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/Instagram.png' ); ?>" alt="Instagram">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/LinkedIn.png' ); ?>" alt="LinkedIn">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/X.png' ); ?>" alt="X">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/Youtube.png' ); ?>" alt="Youtube">
        </div>            
    </div>
    
</section>