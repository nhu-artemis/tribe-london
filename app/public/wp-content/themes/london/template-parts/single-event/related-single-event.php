<?php
/**
 * Template part for displaying the related events of single event content
 */
$icon = get_field('chevron-right'); 
$current_id = get_the_ID();

$related = new WP_Query([
    'post_type'      => 'event',       
    'posts_per_page' => 3,
    'post__not_in'   => [ $current_id ],  
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
]);
?>

<div class="related-events">
    <div class="related-events__inner">
        <p class="related-events__title">YOU MIGHT ALSO LIKE</p>
            <div class="related-events__list">
                <?php if ( $related->have_posts() ) : ?>
                <?php while ( $related->have_posts() ) : $related->the_post();
                    $event_start       = get_field('event-start');
                    $event_end         = get_field('event-end');
                    $event_time        = get_field('event-time');
                    $event_title       = get_field('event-title');
                    $event_description = get_field('event-description');
                    $event_image       = get_field('event-image');
                ?>

                <div class="related-events__card">
                    <div class="related-events__media">
                        <div class="card-image">
                            <?php if( $event_image ): ?>
                                <img src="<?php the_field('event-image'); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="calendar-position">           
                            <div class="event-row__date"><?php echo $event_start?>-<?php echo $event_end?></div>
                            <div class="event-row__time"><?php echo $event_time?></div>
                        </div> 
                    </div>
                    <div class="related-events__content">
                        <p class="whatson-featured__title"><?php echo $event_title?></p>
                        <p class="whatson-featured__description"><?php echo $event_description ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        
        <a class="related-events__button">
            <p class="text">See all events</p>
            <?php if( $icon ): ?>
                <img src="<?php the_field('chevron-right'); ?>" />
            <?php endif; ?>
        </a>
    </div>
</div>