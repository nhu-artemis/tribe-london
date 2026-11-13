<?php
/**
 * Template part for displaying the single event content
 */

$icon = get_field('chevron-right');
$event_title = get_field('event-title');
$event_image = get_field('event-image');
?>

<div class="hero-single-event-frame">
    <div class="hero-single-event-container">
        <div class="parent-page">What's On</div>
        <?php if( $icon ): ?>
            <img src="<?php the_field('chevron-right'); ?>" />
        <?php endif; ?>
        <div class="event-title"><?php echo $event_title ?></div>
    </div>
</div>
<div class="event-image">
    <?php if( $event_image ): ?>
        <img class="img-placeholder" src="<?php the_field('event-image'); ?>" />
    <?php endif; ?>
</div>