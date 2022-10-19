<?php get_header('head-index'); ?>


<section id="post-<?php the_ID(); ?>" <?php post_class('section-class'); ?> style="padding-top: 10px;">
    <div class="main-wrapper-body">
        <?php if ( have_posts() ): while( have_posts() ): the_post();  ?>
        <span><?php the_category(', '); ?></span>
        <p><?php the_time( get_option('date_format') ); ?></p>
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
                <div class="content" style="padding: 5%">
                    <?php the_content(); ?>
                </div>
            </div>

            <p>Written by <a href="#"><?php the_author_posts_link(); ?></a></p>
            <span><?php the_author_meta('nickname') ?></span>
                
        <?php endwhile; else: ?>

        <?php get_template_part('template-parts/content','nopost'); ?>

        <?php endif;?>
    </div>
</section>


<?php get_footer(); ?>