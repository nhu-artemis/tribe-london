<?php
/**
 * Template part for displaying the hero section
 * 
 * 
 */
$page_title = get_field('page-title');
$icon_image = get_field('icon'); 
$description = get_field('description');
$title = get_field('title');
$event_gallery_1= get_field('event-gallery-1');
$event_gallery_2 = get_field('event-gallery-2');
?>

<section>
    <div class="whatson-hero">
        <div class="whatson-hero__inner">
            <div class="whatson-hero__content">
                <div class="whatson-hero__content">
                    <div class="whatson-hero__heading">
                        <div class="whatson-hero__star">
                            <?php if( $icon_image ): ?>
                                <img src="<?php the_field('icon'); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="whatson-hero__title"><?php echo $page_title; ?></div>
                    </div>            
                </div>
                <div class="whatson-hero__subtitle"><?php echo nl2br( $title ); ?></div>
                <div class="whatson-hero__description">
                    <?php echo $description; ?>
                </div>
            </div>
        </div>

        <div class="whatson-hero__gallery">
            <div class="event-gallery-1">
                <?php           
                    if ( $event_gallery_1 ) : foreach ( $event_gallery_1 as $image ) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" class="whatson-hero__photo" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endforeach; 
                    endif; 
                ?>
            </div>
            
            <div class="event-gallery-2">
                <?php 
                    if ( $event_gallery_2 ) : foreach ( $event_gallery_2 as $image ) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" class="whatson-hero__photo" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endforeach; 
                    endif; 
                ?>
            </div>
        </div>
    </div>
</section>

