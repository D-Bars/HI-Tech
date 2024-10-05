<?php get_header('empty'); ?>
<div class="thx__block">
    <div class="wrapper__thx__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/thx-face.png" alt="ThxFace"></div>
    <div class="thx__status"><?php _e('Succefull', 'hi-tech') ?></div>
    <div class="thx__message"><?php _e('Thank you for filling out your details, we will contact you soon!', 'hi-tech') ?></div>
    <div class="back__btn"><a href="<?= $_SERVER['HTTP_REFERER']; ?>"><?php _e('return to previous page', 'hi-tech'); ?></a></div>
</div>

<?php get_footer('empty'); ?>