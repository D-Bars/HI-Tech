<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <?php
        global $post;
        $slider = get_posts(array(
            'post_type' => 'slider',
            'numberposts' => -1
        ));
        ?>

        <?php if ($slider): ?>
            <div class="header__slider" id="SliderDot">
                <div class="header__slider__body">
                    <?php $i = 1;
                    foreach ($slider as $post):
                        setup_postdata($post); ?>
                        <div class="header__slider__item__wrapper">
                            <div class="header__slider__mask"></div><img src="<?php the_post_thumbnail_url('full'); ?>" data-id="<?php echo $i; ?>"
                                alt="HeaderSlide<?php echo $i ?>">
                        </div>
                        <?php $i += 1; endforeach; ?>
                </div>
                <div class="header__slider__nav">
                    <?php $i = 1;
                    foreach ($slider as $post):
                        setup_postdata($post); ?>
                        <div class="header__slider__nav__dot <?php echo ($i == 1) ? 'active__slider__dot' : '' ?> " data-id="<?php echo $i; ?>"></div>
                        <?php $i += 1; endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="header__line">
            <div class="header__logo__wrapper"><a href="<?php echo home_url(); ?>">
                <?php if(function_exists( 'the_custom_logo' ) && has_custom_logo()): 
                     the_custom_logo(); ?>
                <?php else: ?>
                    <div class="logo__text"><?php bloginfo('name'); ?></div>
                <?php endif ?>
            </a></div>
            <?php wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'container' => 'nav',
                'container_class' => 'header__menu__wrapper',
                'menu_class' => 'header__menu',
                'walker' => new Theme_Header_Menu(),
            )); ?>
        </div>
        <div class="header__center">
            <h1 class="header__center__h1"></h1>
            <div class="header__center__description"></div>
            <div class="header__center__btn"></div>
        </div>
    </header>