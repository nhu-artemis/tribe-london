<?php
/**
 * Template part for displaying the event section
 * 
 * 
 */
$event_image = get_field('event-image');
$event_title = get_field('event-title');
$event_subtitle = get_field('event-subtitle');
$event_description = get_field('event-description');
$event_year = get_field('event-year');
$event_start = get_field('event-start');
$event_end = get_field('event-end');
$event_time = get_field('event-time');
?>

<div class="event-wrapper">
    <div class="event-container">
        <div class="event-card">
            <?php if( $event_image ): ?>
                <img class="image-placeholder" src="<?php the_field('event-image'); ?>" />
            <?php endif; ?>
            <div class="content-card">
                <div class="event-title-frame">
                    <div class="event-title"><?php echo ($event_title) ?></div>
                    <div class="event-subtitle"><?php echo ($event_subtitle) ?></div>
                </div>
                <div class="event-description"><?php echo ($event_description) ?></div>
            </div>
        </div>

        <div class="menu-tabs-frame">
            <div class="menu-tabs-container">
                <?php
                    $taxonomy = 'event'; 
                    $terms = get_terms( array(
                        'taxonomy'   => $taxonomy,
                    ) );

                    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : 
                        
                        echo '<a href="#" class="menu-tab" data-filter="all">All</a>';
                        
                        foreach ( $terms as $term ) : ?>
                            <a href="#" class="menu-tab" data-filter="<?php echo esc_attr( $term->slug ); ?>" >
                                <?php echo esc_html( $term->name ); ?>
                            </a>
                        <?php endforeach; 
                        
                    endif; 
                ?>
            </div>
        </div>
        
        <div class="event-card-details">
            <?php
                $args = array(
                    'post_type'      => 'event',
                    'posts_per_page' => -1,
                    // 'tax_query' => array (
                    //     array(
                    //         'taxonomy' => 'event',
                    //         'field' => 'slug',
                    //         'terms' => array('fb-programming')
                    //     )
                    // )
                );
                $loop = new WP_Query($args);
                while ( $loop->have_posts() ) {
                    $loop->the_post();

                    $post_terms = wp_get_post_terms(get_the_ID(), 'event');
                    $term_slugs = array();
                    foreach ($post_terms as $pt) {
                        $term_slugs[] = $pt -> slug;
                    }
                    $slug_string = implode(' ', $term_slugs);
                    ?>
                    <div class="content-tab-card event-item" data-category="<?php echo esc_attr( $slug_string ); ?>">
                        <div class="event-frame">
                            <div class="calendar-frame">
                                <div class="event-year"><?php echo $event_year?></div>
                                <div class="event-date"><?php echo $event_start?>-<?php echo $event_end?></div>
                                <div class="event-time"><?php echo $event_time?></div>
                            </div>
                            <div class="content-tab-card">
                                <div class="event-title-frame">
                                    <div class="event-title"><?php the_title(); ?></div>
                                    <div class="event-subtitle"><?php echo esc_html( get_field('event-subtitle') ); ?></div>
                                </div>
                                <div class="event-tab-description"><?php echo wp_kses_post( get_field('event-description') ); ?></div>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="learn-more-button"><p class="button-text">Learn More</p></a>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata()
            ?>
        </div>
    </div>
</div>

