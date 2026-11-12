<?php
/**
 * Template part for displaying the newsletter section
 * 
 * 
 */
$title = get_field('newsletter-title');
$description = get_field('newsletter-description')
?>

<div class="newsletter-frame">
    <div class="newsletter-section">
        <div class="newsletter-title-container">
            <div class="newsletter-title"><?php echo $title; ?></div>
            <div class="newsletter-description"><?php echo nl2br($description); ?></div>
        </div>
        
        <div class="newsletter-action-background">
            <div class="newsletter-action-container">
               <div class="newsletter-action-frame">
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