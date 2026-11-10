<?php
/**
 * Template part for displaying the contact section
 * 
 * 
 */

$contact_image = get_field('contact-image');
?>

<div class="contact-frame">
    <div class="contact-container">
        <?php if( $contact_image ): ?>
            <img class="contact-image" src="<?php the_field('contact-image'); ?>" />
        <?php endif; ?>
    </div>
</div>