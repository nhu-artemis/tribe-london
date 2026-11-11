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
               <div class="input-field"><?php echo do_shortcode( '[forminator_form id="210"]' ); ?></div>
            </div>
        </div>
    </div>
</div>