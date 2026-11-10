<?php
/**
 * Template part for displaying the how-to section
 * 
 * 
 */
$section_title = get_field('how-to-title');
$section_direction = get_field('how-to-direction');
?>

<div class="how-to-frame">
    <div class="how-to-title-container">
        <div class="how-to-title"><?php echo $section_title; ?></div>
        <div class="how-to-direction"><?php echo nl2br( $section_direction ); ?></div>
    </div>
</div>