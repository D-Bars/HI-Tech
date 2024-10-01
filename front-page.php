<?php get_header(); ?>

<?php
global $post;
$services = get_posts(array(
    'post_type' => 'services',
    'numberposts' => 3
));
?>

<?php if ($services): ?>
    <div class="services__block">
        <h2 class="services__title"><?php _e('Services', 'hi-tech') ?></h2>
        <div class="services__subtitle"><?php _e('Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat porro sunt deleniti
            consectetur cupiditate veritatis magni est omnis amet esse explicabo aliquam adipisci impedit unde dolores sed
            nulla, obcaecati nobis.', 'hi-tech') ?></div>
        <div class="services__box">
        <?php 
        foreach($services as $post) : 
            setup_postdata($post);
            $service_title = get_the_title();
            $service_content = get_the_content();
        ?>
            <div class="services__item">
                <div class="services__item__wrapper__img"><img src="<?php the_post_thumbnail_url( 'full' ) ?>" alt="<?php the_title(); ?>"></div>
                <div class="services__item__title"><?php printf(__('%s', 'hi-tech'), $service_title); ?></div>
                <div class="services__item__description"><?php printf(__('%s', 'hi-tech'), $service_content); ?></div>
                <div class="services__item__read__more"><a href="<?php the_permalink(); ?>"><?php _e('read more', 'hi-tech'); ?></a></div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>