<?php
/**
 * Template part for displaying the section
 * 
 * 
 */
$section_text = get_field('section-text');
?>

<div class="section-wrapper">
    <div class="section-background">
    <div class="section-container">
        <div class="section-text">
            <?php echo $section_text; ?>
        </div>
    </div>
</div>

