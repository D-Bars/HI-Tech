<?php get_header(); ?>
<?php 
global $wp_query;
?>

<?php if (have_posts()): ?>
    <div class="archive__photo__gallery__block">
        <h1 class="h1__archive__pages"><?php _e('Photo Gallery', 'hi-tech'); ?></h1>
        <div class="photo__gallery__main__block" id="gallery1">
            <div class="photo__gallery__main__box">
                <?php $i = 1;
                while (have_posts()):
                    the_post(); ?>
                    <div class="photo__gallery__main__wrapper__img" img_pointer="<?php echo $i; ?>">
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                    </div>
                    <?php $i += 1; endwhile; ?>
                <div class="photo__gallery__mask__box">
                    <div class="photo__gallery__closer__wrapper"></div>
                    <div class="photo__gallery__mask__main">
                        <div class="photo__gallery__mask__wrapper__img photo__gallery__last">
                            <img src="" alt="">
                        </div>
                    </div>
                    <div class="photo__gallery__mask__scroll__line__block">
                        <div class="photo__gallery__mask__scroll__line__box">
                            <?php $i = 1;?>
                            <?php while (have_posts()): the_post(); ?>
                                <div class="photo__gallery__main__wrapper__img" img_pointer="<?php echo $i; ?>">
                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="FullWidth<?php the_title(); ?>">
                                </div>
                                <?php $i += 1; endwhile; ?>
                        </div>
                        <div class="photo__gallery__quantity__block">
                            <div class="photo__gallery__quantity__box">
                                <div class="photo__gallery__actuall__img"></div>
                                <span>/</span>
                                <div class="photo__gallery__all__img">
                                    <?php echo $wp_query->found_posts; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- ./photo__gallery__main__box -->
        </div> <!-- ./для photo__gallery__main__block -->
    </div> <!-- ./archive__photo__gallery__block -->
<?php else: ?>
    <p><?php _e('Photos not found', 'hi-tech'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
