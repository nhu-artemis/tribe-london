<?php
/**
 * Template part for displaying the hero section
 * 
 * 
 */
$title = get_field('title');
$logo_image = get_field('logo'); 
$description = get_field('description');
$sub_title = get_field('sub-title');
$event_gallery_1= get_field('event-gallery-1');
$event_gallery_2 = get_field('event-gallery-2');
$hero_text = get_field('hero-text');
?>

<section>
    <div class="hero-container">
        <div class="sub-hero-container">
            <div class="text-wrapper">
                <div class="title-wrapper">
                    <div class="logo">
                        <img src="http://tribe-london.local/wp-content/uploads/2026/11/Group-4551.svg"/>
                    </div>
                    <div class="title"><?php echo $title; ?></div>
                </div>
                <div class="sub-title"><?php echo nl2br( $sub_title ); ?></div>
                <div class="description">
                    <?php echo $description; ?>
                </div>
            </div>
        </div>

        <div class="gallery-wrapper">
            <div class="event-gallery-1">
                <?php           
                    if ( $event_gallery_1 ) : 
                foreach ( $event_gallery_1 as $image ) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" class="gallery-photo" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endforeach; 
            endif; ?>
            </div>
            
            <div class="event-gallery-2">
                <?php 
                    if ( $event_gallery_2 ) : 
                foreach ( $event_gallery_2 as $image ) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" class="gallery-photo" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endforeach; 
            endif; ?>
            </div>
        </div>
    </div>
</section>

