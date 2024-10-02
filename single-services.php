<?php get_header(); ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post(); ?>
        <div class="single__service__item">
            <div class="single__service__item__wrapper__img"><img src="<?php the_post_thumbnail_url('full'); ?>"
                    alt="<?php the_title(); ?>"></div>
            <div class="single__service__item__content__box">
                <div class="single__service__item__title"><?php get__localize__title(get_the_ID()); ?></div>
                <div class="single__service__item__description">
                    <?php get__localize__content(get_the_ID()); ?>
                </div>
                <div class="order__service"><?php _e('Order a service', 'hi-tech') ?></div>
            </div>
        </div>
    <?php endwhile; ?>
<?php else: ?>
    <p><?php _e('Service not found', 'hi-tech'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>