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

<div class="info-single-event-frame">
    <div class="info-frame">
        <div class="time-location-container">
            <div class="calendar-frame">
                <div class="event-year"><?php echo $event_year?></div>
                <div class="event-date"><?php echo $event_start?>-<?php echo $event_end?></div>
                <div class="event-time"><?php echo $event_time?></div>
            </div>
            <div class="event-subtitle">Location: <br> <?php echo $event_subtitle?></div>
        </div>
        <div class="title-container">
            <div class="event-title"><?php echo $event_title ?></div>
        </div>
        <div class="event-content"><?php echo $event_content?></div>
    </div>
    <div class="booking-frame">
        <div class="booking-background">
            <div class="cta-background">
                <div class="booking-info-text">Booking Information</div>
                <div class="event-ad-frame">
                    <div class="big-text"><?php echo nl2br($event_ad) ?> </div>
                    <div class="small-text"><?php echo $event_tagline ?> </div>
                </div>
                <button class="rsvp-button">
                    <p class="text">RSVP now</p>
                    <?php if( $icon ): ?>
                        <img src="<?php the_field('chevron-right'); ?>" />
                    <?php endif; ?>
                </button>
            </div>
        </div>
    </div>
</div>
