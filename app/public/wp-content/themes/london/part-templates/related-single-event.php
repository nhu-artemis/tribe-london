<?php
/**
 * Template part for displaying the related events of single event content
 */
$event_year = get_field('event-year');
$event_start = get_field('event-start');
$event_end = get_field('event-end');
$event_time = get_field('event-time');
$event_title = get_field('event-title');
$event_subtitle = get_field('event-subtitle');
$event_description = get_field('event-description');
$event_ad = get_field('event-ad');
$event_tagline = get_field('event-tagline');
$icon = get_field('chevron-right');
$event_image = get_field('event-image')
?>

<section class="related-single-event-frame">
    <div class="related-single-event-container">
        <p class="title">YOU MIGHT ALSO LIKE</p>
            <div class="card-frame-container">
                <div class="card-frame">
                    <div class="image-time-container">
                        <div class="card-image">
                            <?php if( $event_image ): ?>
                                <img class="card-image" src="<?php the_field('event-image'); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="calendar-position">           
                            <div class="event-date"><?php echo $event_start?>-<?php echo $event_end?></div>
                            <div class="event-time"><?php echo $event_time?></div>
                        </div> 
                    </div>
                    <div class="content-wrapper">
                        <p class="event-title"><?php echo $event_title?></p>
                        <p class="event-description"><?php echo $event_description ?></p>
                    </div>
                </div>
                <div class="card-frame">
                    <div class="image-time-container">
                        <div class="card-image">
                            <?php if( $event_image ): ?>
                                <img class="card-image" src="<?php the_field('event-image'); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="calendar-position">           
                            <div class="event-date"><?php echo $event_start?>-<?php echo $event_end?></div>
                            <div class="event-time"><?php echo $event_time?></div>
                        </div> 
                    </div>
                    <div class="content-wrapper">
                        <p class="event-title"><?php echo $event_title?></p>
                        <p class="event-description"><?php echo $event_description ?></p>
                    </div>
                </div>
                <div class="card-frame">
                    <div class="image-time-container">
                        <div class="card-image">
                            <?php if( $event_image ): ?>
                                <img class="card-image" src="<?php the_field('event-image'); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="calendar-position">           
                            <div class="event-date"><?php echo $event_start?>-<?php echo $event_end?></div>
                            <div class="event-time"><?php echo $event_time?></div>
                        </div> 
                    </div>
                    <div class="content-wrapper">
                        <p class="event-title"><?php echo $event_title?></p>
                        <p class="event-description"><?php echo $event_description ?></p>
                    </div>
                </div>
            </div>
        <button class="see-all-button">
            <p class="text">See all events</p>
            <?php if( $icon ): ?>
                <img src="<?php the_field('chevron-right'); ?>" />
            <?php endif; ?>
        </button>
    </div>
</section>