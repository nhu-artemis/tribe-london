<?php
/**
 * Template part for displaying the section
 * 
 * 
 */
$motto = get_field('section-text');
?>

<div class="whatson-motto__wrapper">
    <div class="whatson-motto__background">
        <div class="whatson-motto__inner">
            <div class="whatson-motto__text">
                <?php echo $motto; ?>
            </div>
        </div>
    </div>
</div>

