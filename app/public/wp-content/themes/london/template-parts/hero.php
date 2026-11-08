<?php
/**
 * Template part for displaying the hero section
 * 
 * 
 */
$hero_text = get_field('hero-text');
?>

<section>
    <p class="hero-text"><?php echo $hero_text; ?></p>
</section>