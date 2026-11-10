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
    <?php get_template_part( 'part-templates/hero' ); ?>
    <?php get_template_part( 'part-templates/section' ); ?>
    <?php get_template_part( 'part-templates/event' ); ?>
    <?php get_template_part( 'part-templates/how-to-section' )?>
    <?php get_template_part( 'part-templates/contact' )?>
    <?php get_template_part( 'part-templates/newsletter' )?>
<?php endwhile; ?>
