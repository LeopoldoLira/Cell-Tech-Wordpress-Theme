<?php
/* 
* Template name: Products
*
* Template for services in the navigation menu at the top of the page
*
* @package cyt
* @subpackage Cell&Tech
* @since 1.0
*/
?>
<?php get_header('head-index'); ?>


<!--Start of vid-->

<div class="vid-container">
    <div class="overlay"></div>
    <div class="vid-text-container"><h1 class="rep-h1"><?php the_field('headertext'); ?></h1></div>
    <video onloadstart="this.muted=true" autoplay loop><source src="<?php echo FILES; ?>/VIDS/products3.mp4"></video>
</div>


<!--end of vid-->



<!--Start of the products catalogue-->

<div class="catalogue"><h1><?php the_field('firsttextproduct'); ?></h1></div>

<!--Start of products catalogue-->
<div style="display: flex; align-items: center; justify-content: center;">
<picture>
    <?php 
        $image = get_field('firstimageproduct');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
    <!--<img src="<?php echo IMAGES; ?>/catalogue/screens.jpeg" alt="">-->
</picture>
</div>
  
<!--end of products catalogue-->       



<div class="catalogue"><h1><?php the_field('secondtextproduct'); ?></h1></div>


<!--Start of products catalogue-->

<div style="display: flex; align-items: center; justify-content: center;">
    <picture>
    <?php 
        $image = get_field('secondimageproduct');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
     <!--   <img src="<?php echo IMAGES; ?>/catalogue/batteries.jpeg" alt=""> -->
    </picture>
    </div>

  
<!--end of products catalogue-->  


<div class="catalogue"><h1><?php the_field('thirdtextproduct'); ?></h1></div>



<!--Start of products catalogue-->

<div style="display: flex; align-items: center; justify-content: center;">
    <picture>
    <?php 
        $image = get_field('thirdimageproduct');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        <!-- <img src="<?php echo IMAGES; ?>/catalogue/charge-ports.jpeg" alt=""> -->
    </picture>
    </div>

<!--end of products catalogue-->  



<div class="catalogue"><h1><?php the_field('fourthtextproduct'); ?></h1></div>


<!--Start of products catalogue-->

<div style="display: flex; align-items: center; justify-content: center;">
    <picture>
    <?php 
        $image = get_field('fourthimageproduct');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        <!-- <img src="<?php echo IMAGES; ?>/catalogue/workshop.jpeg" alt=""> -->
    </picture>
    </div>
  
<!--end of products catalogue-->  




<!--end of the products catalogue-->




<?php get_footer(); ?>