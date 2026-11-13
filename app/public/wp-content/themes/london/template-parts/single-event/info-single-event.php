<?php
/**
 * Template part for displaying the info of single event content
 */
$event_year = get_field('event-year');
$event_start = get_field('event-start');
$event_end = get_field('event-end');
$event_time = get_field('event-time');
$event_title = get_field('event-title');
$event_subtitle = get_field('event-subtitle');
$event_content = get_field('event-content');
$event_ad = get_field('event-ad');
$event_tagline = get_field('event-tagline');
$icon = get_field('chevron-right');
?>

<div class="info-event">
    <div class="info-event__frame">
        <div class="info-event__media">
            <div class="event-row__badge">
                <div class="event-row__year"><?php echo $event_year?></div>
                <div class="event-row__date"><?php echo $event_start?>-<?php echo $event_end?></div>
                <div class="event-row__time"><?php echo $event_time?></div>
            </div>
            <div class="info-event__subtitle">Location: <br> <?php echo $event_subtitle?></div>
        </div>
        <div class="info-event__content">
            <div class="info-event__title"><?php echo $event_title ?></div>
        </div>
        <div class="info-event__text"><?php echo $event_content?></div>
    </div>
    <div class="info-event__booking-frame">
        <div class="info-event__booking-background">
            <div class="info-event__cta-background">
                <div class="info-event__booking-title">Booking Information</div>
                <div class="info-event__event-ad">
                    <div class="big-text"><?php echo nl2br($event_ad) ?> </div>
                    <div class="tagline"><?php echo $event_tagline ?> </div>
                </div>
                <button class="info-event__rsvp-button">
                    <p class="text">RSVP now</p>
                    <?php if( $icon ): ?>
                        <img src="<?php the_field('chevron-right'); ?>" />
                    <?php endif; ?>
                </button>
            </div>
        </div>
    </div>
</div>
