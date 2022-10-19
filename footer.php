<!-- Start of foorter section-->

<footer>
    <div class="container-footer">
        <div class="sec aboutus">
            <?php if( is_active_sidebar('footer-sidebar-left')){
                dynamic_sidebar('footer-sidebar-left');
            }?>
        </div>

        <div class="sec quickLinks">
        <?php if( is_active_sidebar('footer-sidebar-middle')){
                dynamic_sidebar('footer-sidebar-middle');
            }?>
        </div>

        <div class="sec contact">
        <?php if( is_active_sidebar('footer-sidebar-right')){
                dynamic_sidebar('footer-sidebar-right');
            }?>
        </div>
    </div>
</footer>

<!-- End of foorter section-->

<!-- start copyright Section-->

<div class="copyrightText">
    <p>Made with <span><i class="fa fa-heart color-heart" aria-hidden="true"></i></span> by Cell & Tech Nicaragua. All rights reserved.</p>
</div>

<!-- end copyright Section-->


<!--Start of Scripts-->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!--End of Scripts-->

<?php wp_footer(); ?>

</body>
</html>