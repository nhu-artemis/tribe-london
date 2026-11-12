<?php
/**
 * Template part for displaying a single event post from events
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
<?php get_header()?>
    <?php the_content(); ?>
    <?php get_template_part( 'part-templates/hero-single-event' ); ?>
    <?php get_template_part( 'part-templates/info-single-event'); ?>
<?php endwhile; ?>
