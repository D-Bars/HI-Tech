<?php

add_action('customize_register', function (WP_Customize_Manager $wp_customize) {
    $wp_customize->add_section('hi-tech__theme__options', array(
        'title' => __('theme custom options', 'hi-tech'),
        'priority' => 10
    ));

    //SERVICES
    $wp_customize->add_setting('hi-tech_service');
    $wp_customize->add_control('hi-tech_service', array(
        'label' => __('Services Description', 'hi-tech'),
        'section' => 'hi-tech__theme__options'
    ));

    //SOCIAL MEDIA

    //Twiter
    $wp_customize->add_setting('hi-tech_twiter');
    $wp_customize->add_control('hi-tech_twiter', array(
        'label' => __('Twiter', 'hi-tech'),
        'section' => 'hi-tech__theme__options'
    ));

    //Facebook
    $wp_customize->add_setting('hi-tech_facebook');
    $wp_customize->add_control('hi-tech_facebook', array(
        'label' => __('Facebook', 'hi-tech'),
        'section' => 'hi-tech__theme__options'
    ));

    //Instagram
    $wp_customize->add_setting('hi-tech_instagram');
    $wp_customize->add_control('hi-tech_instagram', array(
        'label' => __('Instagram', 'hi-tech'),
        'section' => 'hi-tech__theme__options'
    ));

    //Youtube
    $wp_customize->add_setting('hi-tech_youtube');
    $wp_customize->add_control('hi-tech_youtube', array(
        'label' => __('Youtube', 'hi-tech'),
        'section' => 'hi-tech__theme__options'
    ));
});

function hi_tech_theme_options()
{
    global $theme__options;
    $theme__options = array(
        'services_description' => get_theme_mod('hi-tech_service'),
        'twitter' => get_theme_mod('hi-tech_twiter'),
        'facebook' => get_theme_mod('hi-tech_facebook'),
        'instagram' => get_theme_mod('hi-tech_instagram'),
        'youtube' => get_theme_mod('hi-tech_youtube'),
    );
}
add_action('wp', 'hi_tech_theme_options');

?>