<?php
/**
 * Template part for displaying the how-to section
 * 
 * 
 */
$section_title = get_field('how-to-title');
$section_direction = get_field('how-to-direction');
?>

<div class="how-to">
    <div class="how-to__content">
        <div class="how-to__title"><?php echo $section_title; ?></div>
        <div class="how-to__direction"><?php echo nl2br( $section_direction ); ?></div>
    </div>
</div>