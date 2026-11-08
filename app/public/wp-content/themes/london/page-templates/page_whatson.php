<?php
/**
 * Template Name: What's On
 */
$title = get_field('title');
$description = get_field('description');
$sub_title_1 = get_field('sub-title-1');
$sub_title_2 = get_field('sub-title-2');
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
    <h1 class="title"><?php echo $title; ?></h1>
    <h2 class="sub-title-1"><?php echo $sub_title_1; ?></h2>
    <h3 class="sub-title-2"><?php echo $sub_title_2; ?></h3>
    <div class="description">
        <?php echo $description; ?>
    </div>
    <?php the_content(); ?>
    <?php get_template_part( 'template-parts/hero' ); ?>
<?php endwhile; ?>
