<?php
/* 
* Template name: Services
*
* Template for services in the navigation menu at the top of the apge
*
* @package cyt
* @subpackage Cell&Tech
* @since 1.0
*/
?>

<?php get_header('head-index'); ?>

<!--Start of Services-->

<!--Start of vid-->

<div class="vid-container">
    <div class="overlay"></div>
    <div class="vid-text-container"><h1 class="rep-h1"><?php the_field('initialtextfield'); ?></h1></div>
    <video onloadstart="this.muted=true" autoplay loop><source src="<?php echo FILES; ?>/VIDS/reparaciones.mp4"></video>
</div>


<!--end of vid-->



<div class="about-section-sec1">
    <div class="inner-container">
        <p><?php the_field('firstservicetitle'); ?></p>
        <p class = "text"><?php the_field('firstservicetext1'); ?></p>
        <br>
        <p class="text"><?php the_field('firstservicetext2'); ?></p>
        <br>
        <p class="text"><?php the_field('firstservicetext3'); ?></p>
    </div>
</div>

<div class="about-section-sec2">
    <div class="inner-container">
    <p><?php the_field('secondservicetitle'); ?></p>
        <p class = "text"><?php the_field('secondservicetext1'); ?></p>
        <br>
        <p class="text"><?php the_field('secondservicetext2'); ?></p>
        <br>
        <p class="text"><?php the_field('secondservicetext3'); ?></p>
    </div>
</div>

<div class="about-section-sec3">
    <div class="inner-container">
    <p><?php the_field('thirdservicetitle'); ?></p>
        <p class = "text"><?php the_field('thirdservicetext1'); ?></p>
        <br>
        <p class="text"><?php the_field('thirdservicetext2'); ?></p>
        <br>
        <p class="text"><?php the_field('thirdservicetext3'); ?></p>
    </div>
</div>


<!--End of Services-->


<!-- Start of foorter section-->
<?php get_footer(); ?>

<!-- end copyright Section-->
<script src="./JS/navbar.js"></script>
</body>
</html>