<?php
/**
 * Template part for displaying the contact section
 * 
 * 
 */

$contact_image = get_field('contact-image');
$contact_title = get_field('contact-title');
$contact_description = get_field('contact-description');
?>

<div class="contact-frame">
    <div class="contact-container">
        <?php if( $contact_image ): ?>
            <img class="contact-image" src="<?php the_field('contact-image'); ?>" />
        <?php endif; ?>
        <div class="contact-title-container">
            <div class="contact-title"><?php echo $contact_title; ?></div>
            <div class="contact-description"><?php echo $contact_description; ?></div>
        </div>
    </div>
</div>