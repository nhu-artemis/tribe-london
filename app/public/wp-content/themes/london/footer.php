<?php
$footer_image = get_field('footer-logo');
$footer_title = get_field('footer-title');
$footer_description = get_field('footer-description');
$policy = get_field('newsletter-policy');
$tagline = get_field('credits-tagline');
?>

<section class="footer-navbar">
    <div class="footer-frame">
        <div class="footer__menu-container">
            <div class="footer__logo-container">
                <?php if( $footer_image ): ?>
                    <img src="<?php the_field('footer-logo'); ?>" />
                <?php endif; ?>
            </div>

            <div class="footer__menu-item">
                <?php
                    // Display the navigation menu for the footer
                    wp_nav_menu( 
                        array( 
                            'theme_location' => 'header-menu',
                            'container_class' => 'header-menu-class'
                        ) 
                    );
                ?>
            </div>
        </div> 
        <div class="footer__newsletter-container">
            <div class="footer__content">
                <p class="footer__title"><?php echo $footer_title; ?></p>
                <p class="footer__description"><?php echo nl2br($footer_description); ?></p>            
            </div>
            <div class="newsletter__container">
                <div class="newsletter-action__background">
                    <div class="newsletter-action__container">
                        <div class="newsletter-action__frame">
                                <form class="custom-newsletter-form">
                                    <input type="email" class="newsletter-email" name="email" placeholder="Enter your email" required />
                                    <button type="submit" class="newsletter-submit-btn">SUBSCRIBE</button>
                                </form> 
                                <div class="form-response-message" style="display:none"></div>
                        </div>
                    </div>
                </div>  
                <p class="newsletter__policy">By subscribing you agree with our <a href="<?php echo esc_url( get_privacy_policy_url() ); ?>">Privacy Policy</a>
            </div>    
</section>

<section class="footer__credits">
    <div class="footer__credits-row">
        <div class="footer__credits-inner">
            <div class="tagline"><?php echo $tagline; ?></div>
            <?php
                wp_nav_menu( 
                    array(
                        'theme_location' => 'credits-menu', 
                        'container_class' => 'credit-menu-class'
                    ) 
                );
            ?>
        </div>
        <div class="footer__social-links">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/Facebook.png' ); ?>" alt="Facebook">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/Instagram.png' ); ?>" alt="Instagram">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/LinkedIn.png' ); ?>" alt="LinkedIn">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/X.png' ); ?>" alt="X">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/Youtube.png' ); ?>" alt="Youtube">
        </div>            
    </div>
    
</section>