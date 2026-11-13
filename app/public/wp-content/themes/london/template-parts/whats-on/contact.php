<?php
/**
 * Template part for displaying the contact section
 * 
 * 
 */

$contact_image = get_field('contact-image');
$contact_title = get_field('contact-title');
$contact_description = get_field('contact-description');
$icon = get_field('chevron-right'); 
?>

<div class="whatson-contact">
    <div class="whatson-contact__inner">
        <?php if( $contact_image ): ?>
            <img class="whatson-contact__image" src="<?php the_field('contact-image'); ?>" />
        <?php endif; ?>
        <div class="whatson-contact__content">
            <div class="contact-title"><?php echo $contact_title; ?></div>
            <div class="contact-description"><?php echo $contact_description; ?></div>
        </div>
        <a class="whatson-contact__button">
            <p class="text">Contact Our Event Team</p>
            <?php if( $icon ): ?>
                <img src="<?php the_field('chevron-right'); ?>" />
            <?php endif; ?>
        </a>
    </div>
</div>