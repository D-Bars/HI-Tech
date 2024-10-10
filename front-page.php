<?php get_header(); ?>

<div class="advantages__block">
  <div class="advantages__item">
    <div class="advantages__wrapper__img"><img
        src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages1.jpg" alt="advantages1"></div>
    <div class="advantages__title"><?php _e('Art Of Coding', 'hi-tech') ?></div>
    <div class="advantages__description">
      <?php _e('Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quo, numquam velit sunt, obcaecati recusandae corporis dolor quod dolore iusto nihil, quidem magnam quas iure perspiciatis eveniet, veniam reiciendis nisi.', 'hi-tech') ?>
    </div>
  </div>
  <div class="advantages__item">
    <div class="advantages__wrapper__img"><img
        src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages2.jpg" alt="advantages1"></div>
    <div class="advantages__title"><?php _e('Responsive Design', 'hi-tech') ?></div>
    <div class="advantages__description">
      <?php _e('Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quo, numquam velit sunt, obcaecati recusandae corporis dolor quod dolore iusto nihil, quidem magnam quas iure perspiciatis eveniet, veniam reiciendis nisi.', 'hi-tech') ?>
    </div>
  </div>
  <div class="advantages__item">
    <div class="advantages__wrapper__img"><img
        src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages3.jpg" alt="advantages1"></div>
    <div class="advantages__title"><?php _e('Feature Rich', 'hi-tech') ?></div>
    <div class="advantages__description">
      <?php _e('Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quo, numquam velit sunt, obcaecati recusandae corporis dolor quod dolore iusto nihil, quidem magnam quas iure perspiciatis eveniet, veniam reiciendis nisi.', 'hi-tech') ?>
    </div>
  </div>
  <div class="advantages__item">
    <div class="advantages__wrapper__img"><img
        src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages4.jpg" alt="advantages1"></div>
    <div class="advantages__title"><?php _e('Useful Documentation', 'hi-tech') ?></div>
    <div class="advantages__description">
      <?php _e('Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quo, numquam velit sunt, obcaecati recusandae corporis dolor quod dolore iusto nihil, quidem magnam quas iure perspiciatis eveniet, veniam reiciendis nisi.', 'hi-tech') ?>
    </div>
  </div>
  <div class="advantages__item">
    <div class="advantages__wrapper__img"><img
        src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages5.jpg" alt="advantages1"></div>
    <div class="advantages__title"><?php _e('Fast Delivery', 'hi-tech') ?></div>
    <div class="advantages__description">
      <?php _e('Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quo, numquam velit sunt, obcaecati recusandae corporis dolor quod dolore iusto nihil, quidem magnam quas iure perspiciatis eveniet, veniam reiciendis nisi.', 'hi-tech') ?>
    </div>
  </div>
  <div class="advantages__item">
    <div class="advantages__wrapper__img"><img
        src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages6.jpg" alt="advantages1"></div>
    <div class="advantages__title"><?php _e('Free Plugins', 'hi-tech') ?></div>
    <div class="advantages__description">
      <?php _e('Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quo, numquam velit sunt, obcaecati recusandae corporis dolor quod dolore iusto nihil, quidem magnam quas iure perspiciatis eveniet, veniam reiciendis nisi.', 'hi-tech') ?>
    </div>
  </div>
</div>

<?php
global $post;
$services = get_posts(array(
  'post_type' => 'services',
  'numberposts' => -1
));
$services_count = count($services);
?>

<?php if ($services): ?>
  <div class="services__block">
    <div class="services__box">
      <div class="services__title__subtitle__box">
        <h2 class="services__title"><?php _e('Services', 'hi-tech') ?></h2>
        <?php if ($theme__options['services_description']): ?>
          <div class="services__subtitle"><?php echo esc_html($theme__options['services_description']); ?></div>
        <?php endif; ?>
      </div>
      <?php if ($services_count > 3): ?>
        <div><a class="all__services__link"
            href="<?php echo get_post_type_archive_link('services'); ?>"><?php _e('All services', 'hi-tech'); ?></a></div>
      <?php endif; ?>
    </div>
    <div class="services__items__box">
      <?php
      foreach ($services as $post):
        setup_postdata($post);
        $trimmed_content = wp_trim_words(get_the_content(), 20, '...');
        ?>
        <div class="services__item">
          <div class="services__item__wrapper__img"><img src="<?php the_post_thumbnail_url('full') ?>"
              alt="<?php the_title(); ?>"></div>
          <a class="services__item__title" href="<?php the_permalink(); ?>"><?php get__localize__title(get_the_ID()) ?></a>
          <div class="services__item__description"><?php printf(__('%s', 'hi-tech'), $trimmed_content); ?></div>
          <div class="services__item__read__more__box">
            <div class="services__item__read__more"><a
                href="<?php the_permalink(); ?>"><?php _e('read more', 'hi-tech'); ?></a></div>
            <div class="services__item__arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_R.png"
                alt="arrowR"></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>

<div class="brends__block">
  <div class="brend__item__wrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/discord.png"
      alt="BrandImg"></div>
  <div class="brend__item__wrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/netflix.png"
      alt="BrandImg"></div>
  <div class="brend__item__wrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/broadcom.png"
      alt="BrandImg"></div>
  <div class="brend__item__wrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/airbnb.png"
      alt="BrandImg"></div>
</div>

<div class="our__clients__block">
  <div class="our__clients__content">
    <h2 class="our__clients__title"><?php _e('Our Clients', 'hi-tech') ?></h2>
    <div class="our__clients__description">
      <?php _e('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus recusandae et suscipit fuga repellendus facere optio amet tempore. Velit reiciendis possimus harum nesciunt exercitationem corporis obcaecati ipsa, iure minus illum.', 'hi-tech'); ?>
    </div>
  </div>
  <div class="our__clients__wrapper__img"><img
      src="<?php echo get_template_directory_uri(); ?>/assets/img/our_clients.jpg" alt="OurClients"></div>
</div>

<?php
global $post;
$photo_gallery = get_posts(array(
  'post_type' => 'photo gallery',
  'numberposts' => -1
));
$count__photos__gallery = count($photo_gallery);
$limited__photos = 8;
?>
<?php if ($photo_gallery): ?>
  <div class="photo__gallery__main__block" id="gallery1">
    <div class="photo__gallery__title__btn__box">
      <div class="photo__gallery__title__description__box">
        <h2><?php _e('Showcase', 'hi-tech') ?><?php echo $count__photos__gallery; ?></h2>
        <div class="photo__gallery__description"></div>
      </div>
      <?php if($count__photos__gallery > $limited__photos): ?>
        <div><a class="photo__gallery__link" href="<?php //echo get_post_type_archive_link('photo-gallery'); ?>"> <?php _e('All Photos', 'hi-tech'); ?></a></div>
      <?php endif; ?>
    </div>
    <div class="photo__gallery__main__box">
      <?php $i = 1; foreach (array_slice($photo_gallery, 0, $limited__photos) as $post):
        setup_postdata($post);
        ?>
        <div class="photo__gallery__main__wrapper__img" img_pointer="<?php echo $i; ?>"><img
            src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>"></div>
        <?php $i += 1; endforeach; ?>
    </div>
    <div class="photo__gallery__mask__box">
      <div class="photo__gallery__closer__wrapper"></div>
      <div class="photo__gallery__mask__main">
        <div class="photo__gallery__mask__wrapper__img photo__gallery__last"><img src="" alt=""></div>
      </div>
      <div class="photo__gallery__mask__scroll__line__block">
        <div class="photo__gallery__mask__scroll__line__box">
          <?php $i = 1; foreach ($photo_gallery as $post):
            setup_postdata($post);
            ?>
            <div class="photo__gallery__main__wrapper__img" img_pointer="<?php echo $i; ?>"><img src="<?php the_post_thumbnail_url('full'); ?>" alt="FullWidth<?php the_title(); ?>"></div>
            <?php $i += 1; endforeach; ?>
        </div>
      </div>
      <div class="photo__gallery__quantity__block">
        <div class="photo__gallery__quantity__box">
          <div class="photo__gallery__actuall__img"></div>
          <span>/</span>
          <div class="photo__gallery__all__img"><?php echo ($count__photos__gallery > $limited__photos) ? $limited__photos : $count__photos__gallery; ?></div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php get_footer(); ?>