<?php 
/**
 * Template for displaying single event
 */

$auto_location = get_field('event_location');
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php $auto_title = get_field('title'); ?>
    
    <article id="event-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="event-title"><?php the_title(); ?></h1>
            
            <div class="event-meta">
                <?php if ( $auto_location ) : ?>
                    <span class="event-location"><?php echo $auto_location; ?></span>
                <?php endif; ?>
            </div>

        <div class="event-content">
            <?php the_content(); ?>
        </div>
    </article>
<?php endwhile; ?>
