<?php
/**
 * Template Name: What's On
 */
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
    <?php get_template_part( 'template-parts/whats-on/hero' ); ?>
    <?php get_template_part( 'template-parts/whats-on/motto-section' ); ?>
    <?php get_template_part( 'template-parts/whats-on/event' ); ?>
    <?php get_template_part( 'template-parts/whats-on/how-to-section' )?>
    <?php get_template_part( 'template-parts/whats-on/contact' )?>
    <?php get_template_part( 'template-parts/global/newsletter' )?>
<?php get_footer() ?>
<?php endwhile; ?>
