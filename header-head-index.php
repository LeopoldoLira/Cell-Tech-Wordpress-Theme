<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo IMAGES; ?>/icocyt.svg">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" 
          href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" 
          crossorigin="anonymous"
    >
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title><?php wp_title('-', true, 'right');?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>

    <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
</head>
<body <?php body_class();?>>
<!--Start of NAVBAR -->

<header id="main-header">
    <img src="<?php echo IMAGES; ?>/index/bg-img.jpg" alt="" class = "banner">
        <a href="" class="logo">C&amp;T</a>
        <a href="" class="logo2">Cell&amp;Tech</a>
    <div class="toggle" id="toggleNav"></div>
      <nav id="navMenu">
        <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
      </nav> 
</header>

<!--End of NAVBAR-->


