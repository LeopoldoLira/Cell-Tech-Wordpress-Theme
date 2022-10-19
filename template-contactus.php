<?php
/* 
* Template name: Contact Page
*
* Template for services in the navigation menu at the top of the apge
*
* @package cyt
* @subpackage Cell&Tech
* @since 1.0
*/
?>

<?php get_header('head-index'); ?>

<!--Contact section start-->
<div class="flex-contact" style="padding-top: 50vh">

    <!--Card-->
    <div class="card card-one-img">
        <div class="card-content">
        <h2 class="card-tittle"><?php the_field('firstpersonname'); ?></h2>
        <p class="card-body">
        <?php the_field('firstdescriptioncontact'); ?>
        </p>                
        <a href="tel:50582572330" class="button">Ll&aacute;mame</a>
        </div>
    </div>
    <!--Card-->

    <!--Card-->
    <div class="card card-two-img">
        <div class="card-content">
        <h2 class="card-tittle"><?php the_field('secondcontactname'); ?></h2>
        <p class="card-body">
        <?php the_field('seconddescriptioncontact'); ?>
        </p>                
        <a href="tel:50557040974" class="button">Ll&aacute;mame</a>
        </div>
    </div>
    <!--Card-->

    <!--Card-->
    <div class="card card-three-img">
        <div class="card-content">
        <h2 class="card-tittle"><?php the_field('thirdcontactname'); ?></h2>
        <p class="card-body">
        <?php the_field('thirddescriptioncontact'); ?>
        </p>                
        <a href="tel:50585747789" class="button">Ll&aacute;mame</a>
        </div>
    </div>
    <!--Card-->

</div>
<!--Contact section end-->

    

<!-- Start of foorter section-->
<?php get_footer(); ?>

<!-- end copyright Section-->

<!-- End of foorter section-->

<script src="./JS/navbar.js"></script>
</body>
</html>