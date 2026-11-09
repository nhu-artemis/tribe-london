<?php
/**
 * Template Name: What's On
 */
$title = get_field('title');
$logo_image = get_field('logo'); 
$description = get_field('description');
$sub_title = get_field('sub-title');
$event_gallery_1= get_field('event-gallery-1');
$event_gallery_2 = get_field('event-gallery-2');
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<?php wp_head(); ?>
</head>
<body>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_header() ?>
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
    <?php the_content(); ?>
    <?php get_template_part( 'template-parts/hero' ); ?>
<?php endwhile; ?>
