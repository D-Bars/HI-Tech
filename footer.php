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
            <li><a href="">Twitter</a></li>
            <li><a href="">Facebook</a></li>
            <li><a href="">Instagram</a></li>
            <li><a href="">Youtube</a></li>
        </ul>
    </div>
    <div class="footer__form__wrapper">
        <div class="footer__form__title"><?php _e('Send Us A Note','hi-tech') ?></div>
        <?php echo do_shortcode('[contact-form-7 id="a2e8553" title="Footer_form"]'); ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>