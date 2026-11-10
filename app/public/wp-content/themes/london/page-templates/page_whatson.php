<?php
/**
 * Template Name: What's On
 */
// $title = get_field('title');
// $logo_image = get_field('logo'); 
// $description = get_field('description');
// $sub_title = get_field('sub-title');
// $event_gallery_1= get_field('event-gallery-1');
// $event_gallery_2 = get_field('event-gallery-2');
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
    <?php the_content(); ?>
    <?php get_template_part( 'template-parts/hero' ); ?>
    <?php get_template_part( 'template-parts/section' ); ?>
    <?php get_template_part( 'template-parts/event' ); ?>
<?php endwhile; ?>
