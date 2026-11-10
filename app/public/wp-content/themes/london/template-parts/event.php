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

        <div class="menu-tabs">
            <div class="menu-tabs-container">
                <?php
                $taxonomy = 'event'; 
                $terms = get_terms( array(
                    'taxonomy'   => $taxonomy,
                ) );

                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : 
                    
                    echo '<a href="#" class="all-menu-tab">All</a>';
                    
                    foreach ( $terms as $term ) : ?>
                        <a href="#<?php echo esc_attr( $term->slug ); ?>" class="menu-tab">
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
                    'posts_per_page' => 10,
                    'tax_query' => array (
                        array(
                            'taxonomy' => 'event',
                            'field' => 'slug',
                            'terms' => array('fb-programming')
                        )
                    )
                );
                $loop = new WP_Query($args);
                while ( $loop->have_posts() ) {
                    $loop->the_post();
                    ?>
                    <div class="content-card">
                        <div class="event-frame">
                            <div class="calendar-frame">
                                <div class="event-year"><?php echo esc_html(get_field('event-year'))?></div>
                                <div class="event-date"><?php echo esc_html(get_field('event-start'))?>-<?php echo esc_html(get_field('event-end'))?></div>
                                <div class="event-time"><?php echo esc_html(get_field('event-time'))?></div>
                            </div>
                            <div class="content-card">
                                <div class="event-title-frame">
                                    <div class="event-title"><?php the_title(); ?></div>
                                    <div class="event-subtitle"><?php echo($event_subtitle) ?></div>
                                    
                                </div>
                                <div class="event-description"><?php echo($event_description) ?></div>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
</div>