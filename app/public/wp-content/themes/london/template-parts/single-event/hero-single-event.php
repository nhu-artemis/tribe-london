<?php
/**
 * Template part for displaying the single event content
 */

$icon = get_field('chevron-right');
$event_title = get_field('event-title');
$event_image = get_field('event-image');
?>

<div class="hero-event">
    <div class="hero-event__inner">
        <div class="hero-event__page">What's On</div>
        <?php if( $icon ): ?>
            <img src="<?php the_field('chevron-right'); ?>" />
        <?php endif; ?>
        <div class="hero-event__title"><?php echo $event_title ?></div>
    </div>
</div>
<div class="hero-event__image">
    <?php if( $event_image ): ?>
        <img class="img-placeholder" src="<?php the_field('event-image'); ?>" />
    <?php endif; ?>
</div>