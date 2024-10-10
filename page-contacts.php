<?php get_header(); ?>

<div class="contacts__block">
    <div class="contacts__box">
        <?php if ($theme__options['phone']): ?>
            <div class="contacts__item">
                <div class="contacts__wrapper__img"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.png" alt="ContactPhone"></div>
                <div class="contacts__title__subtitle__box">
                    <div class="contacts__box__title"><?php _e('Telephone', 'hi-tech'); ?></div>
                    <div class="contacts__box__subtitle"><a
                            href="tel:+<?php echo str_replace(array('+', '-', ' '), array('', '', ''), $theme__options['phone']); ?>"><?php echo $theme__options['phone']; ?></a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($theme__options['email']): ?>
            <div class="contacts__item">
                <div class="contacts__wrapper__img"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.png" alt="ContactMail"></div>
                <div class="contacts__title__subtitle__box">
                    <div class="contacts__box__title"><?php _e('Email', 'hi-tech'); ?></div>
                    <div class="contacts__box__subtitle"><?php echo $theme__options['email']; ?></div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($theme__options['nip']): ?>
            <div class="contacts__item">
                <div class="contacts__wrapper__img"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/nip.png" alt="ContactNip"></div>
                <div class="contacts__title__subtitle__box">
                    <div class="contacts__box__title"><?php _e('NIP', 'hi-tech'); ?></div>
                    <div class="contacts__box__subtitle"><?php echo $theme__options['nip']; ?></div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($theme__options['adress']): ?>
            <div class="contacts__item">
                <div class="contacts__wrapper__img"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/location.png" alt="ContactLocation">
                </div>
                <div class="contacts__title__subtitle__box">
                    <div class="contacts__box__title"><?php _e('Adress', 'hi-tech'); ?></div>
                    <div class="contacts__box__subtitle"><?php echo $theme__options['adress']; ?></div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <?php if ($theme__options['map'] && strpos($theme__options['map'], '<iframe') !== false):
        $theme__options['map'] = preg_replace('/(width|height)="\d+(px|%)?"/i', '$1="100%"', $theme__options['map']);
        ?>
        <div class="map__wrapper"><?php echo $theme__options['map']; ?></div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>