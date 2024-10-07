<?php 
global $theme__options;
?>
<footer>
    <div class="footer__wrapper__img"><div class="footer__mask__img"></div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_img.jpg"
            alt="FooterImg"></div>
    <div class="footer__menu__media__box">
        <?php wp_nav_menu(array(
            'theme_location' => 'header-footer-menu',
            'container' => '',
            'container_class' => '',
            'menu_class' => 'footer__menu',
            'walker' => new Theme_Header_Menu(),
        )); ?>
        <ul class="footer__media__block">
            <li>
            <?php echo !empty($theme__options['twitter']) ? '<a href="' . esc_url($theme__options['twitter']) . '">Twitter</a>' : ''; ?>
            </li>
            <li>
                <?php echo !empty($theme__options['facebook']) ? '<a href="' . esc_url($theme__options['facebook']) . '">Facebook</a>' : ''; ?></li>
            <li>
                <?php echo !empty($theme__options['instagram']) ? '<a href="' . esc_url($theme__options['instagram']) . '">Instagram</a>' : ''; ?></li>
            <li>
                <?php echo !empty($theme__options['youtube']) ? '<a href="' . esc_url($theme__options['youtube']) . '">Youtube</a>' : ''; ?></li>
        </ul>
    </div>
    <div class="footer__form__wrapper">
        <div class="footer__form__title"><?php _e('Send Us A Note','hi-tech') ?></div>
        <?php echo do_shortcode('[wpforms id="69" title="false"]'); ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>