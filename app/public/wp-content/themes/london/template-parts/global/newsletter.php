<?php
/**
 * Template part for displaying the newsletter section
 * 
 * 
 */
$title = get_field('newsletter-title');
$description = get_field('newsletter-description')
?>

<div class="newsletter">
    <div class="newsletter-section">
        <div class="newsletter__content">
            <div class="newsletter__title"><?php echo $title; ?></div>
            <div class="newsletter__description"><?php echo nl2br($description); ?></div>
        </div>
        
        <div class="newsletter-action__background">
            <div class="newsletter-action__inner">
                <div class="newsletter-action__frame">
                        <form class="custom-newsletter-form ">
                            <input type="email" class="newsletter-email" name="email" placeholder="Enter your email" required />
                            <button type="submit" class="newsletter-submit-btn">SUBSCRIBE</button>
                        </form>
                        
                        <div class="form-response-message" style="display:none"></div>
                </div>
            </div>
        </div>
    </div>
</div>