<?php
/* 
* Index.php
*
* Contains the home view of the page
*
* @package cyt
* @subpackage Cell&Tech
* @since 1.0
*/
?>


<?php get_header('head-index'); ?>


<div style="display:flex; align-items:center; justify-content:center; width: 100vw; padding-top:30vh"> 
<?php get_search_form(); ?>


</div>

<!--Start of  main body-->
<section id="post-<?php the_ID(); ?>" <?php post_class('section-class'); ?> style="padding-top: 10px;">
    <div class="main-wrapper-body">
        <?php if ( have_posts() ): while( have_posts() ): the_post();  ?>
            <h2><?php the_title(); ?></h2>
            <?php if (! has_post_format('video') ):  ?>
                <?php if (has_post_thumbnail() ): ?>
                    <picture class="imgBx">
                <?php the_post_thumbnail('blog_size_image'); ?>
                    </picture>
                    <?php endif; ?>
            <?php else: ?>  
                <div class="imgBx">
                    <?php the_content(); ?>
                </div>        
            <?php endif; ?>

            <div style="padding-top: 100px;">
                <div class="content">
                    <?php the_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?>" style="background-color: crimson; border-radius: 5px; text-decoration:none; color: white; padding: .5em"><?php _e('See More...', 'cyt'); ?></a>
            </div>
        <?php endwhile; else: ?>

        <?php get_template_part('template-parts/content','nopost'); ?>

        <?php endif;?>
    </div>
</section>

<?php if ( get_next_posts_link() || get_previous_post_links()): ?>

    <div style="width: 70%; padding-left: 30vw; padding-top:10vh; ">
    <div style="width: 100%; display: flex; justify-content: space-between; font-size: 2em;">
        <?php next_posts_link(__('<p style=" text-decoration: none; color: #fff">Previous Articles</p>','cyt')) ?>
        <?php previous_posts_link(__('<p style=" text-decoration: none; color: #fff">Next Articles</p>','cyt')) ?>
    </div>
</div>

<?php endif ?>



<!--End of  main body-->


<div class="ourteam">    
    <div class="meet-team">
        <p>Meet our Team</p>
    </div>
    <div class="wrapper-img">
        <div class="team-img">
        <img src="<?php echo IMAGES; ?>/index/group-photo.jpeg">
        </div>
    </div>
</div>




<div class="container-swiper">
        <div class="text-one">
            <p>Las Delicias's Store</p>
            <p>Monday to Friday - 8:00AM a 5:30PM</p>
            <p>Saturdays - 9:00AM a 1:00PM</p>
        </div>
        <div class="swiper-main-one">
            <div class="swiper">
                <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?php echo IMAGES; ?>/index/mer-slide1.jpeg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo IMAGES; ?>/index/mer-slide2.jpeg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo IMAGES; ?>/index/mer-slide3.jpeg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo IMAGES; ?>/index/mer-slide4.jpeg" alt=""></div>
                </div>
            </div>
        </div>
        <div class="text-two">
            <p>Managua Central Mall's Store</p>
            <p>Monday to Friday - 9:00AM a 5:30PM</p>
            <p>Saturdays - 9:00AM a 2:00PM</p>
        </div>
        <div class="swiper-main-two">
            <div class="swiper">
                <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?php echo IMAGES; ?>/index/ccm-slide1.jpeg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo IMAGES; ?>/index/ccm-slide2.jpeg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo IMAGES; ?>/index/ccm-slide3.jpeg" alt=""></div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>