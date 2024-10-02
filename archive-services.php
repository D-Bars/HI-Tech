<?php get_header(); ?>


<?php if (have_posts()): ?>
    <div class="archive__services__block">
        <h1 class="h1__other__pages"><?php _e('All Services', 'hi-tech'); ?></h1>
        <?php while (have_posts()):
            the_post(); ?>
            <div class="archive__services__item">
                <div class="archive__services__item__wrapper__img"><img src="<?php the_post_thumbnail_url('full'); ?>"
                        alt="<?php the_title(); ?>"></div>
                <a class="archive__services__item__title"
                    href="<?php the_permalink(); ?>"><?php get__localize__title(get_the_ID()); ?></a>
                <div class="archive__services__item__description">
                    <?php get__localize__content(get_the_ID()); ?>
                </div>
                <div class="services__item__read__more__box">
                    <div class="services__item__read__more"><a
                            href="<?php the_permalink(); ?>"><?php _e('read more', 'hi-tech'); ?></a></div>
                    <div class="services__item__arrow"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_R.png" alt="arrowR"></div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

<?php else: ?>
    <p><?php _e('Services not found', 'hi-tech'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>