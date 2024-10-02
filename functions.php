<?php
add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('style-less', get_template_directory_uri() . '/assets/less/style.less');
    wp_enqueue_style( 'font-Montserrat', get_template_directory_uri() . '/assets/fonts', array(), false, true);

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'scripts-java-script', get_template_directory_uri() . '/assets/js/scripts.js', array(), false, true );
});

add_action('after_setup_theme', function(){
    add_theme_support('custom-logo', array(
        'height' => 102,
        'width' => 289,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    load_theme_textdomain('hi-tech', get_template_directory() . '/languages');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    register_nav_menus( array(
        'header-menu' => __('Header Menu', 'hi-tech'),
    ) );
});

function get__localize__title($objId) {
    $obj_title = get_the_title($objId);
    return printf(__('%s', 'hi-tech'), $obj_title);
}
function get__localize__content($objId) {
    $obj_content = get_the_content($objId);
    return printf(__('%s', 'hi-tech'), $obj_content);
}

function wp_dump( $data ) {
	echo "<pre>" . print_r( $data, 1 ) . "</pre>";
}

require_once get_template_directory() . '/incs/class-theme-header-menu.php';
require_once get_template_directory() . '/incs/cpt.php';