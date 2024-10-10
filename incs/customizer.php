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
        'section' => 'hi-tech__theme__options',
        'type' => 'textarea'
    ));

    //PHOTO GALLERY 
    $wp_customize->add_setting('hi-tech_photo_gallery');
    $wp_customize->add_control('hi-tech_photo_gallery', array(
        'label' => __('Photo Gallery Description', 'hi-tech'),
        'section' => 'hi-tech__theme__options',
        'type' => 'textarea'
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

    //CONTACTS

    //Phone
    $wp_customize->add_setting('hi-tech_phone');
    $wp_customize->add_control('hi-tech_phone', array(
        'label' => __('Phone', 'hi-tech'),
        'section' => 'hi-tech__theme__options'
    ));

    //Email
    $wp_customize->add_setting('hi-tech_email');
    $wp_customize->add_control('hi-tech_email', array(
        'label' => __('Email', 'hi-tech'),
        'section' => 'hi-tech__theme__options'
    ));

    //NIP
    $wp_customize->add_setting('hi-tech_nip');
    $wp_customize->add_control('hi-tech_nip', array(
        'label' => __('NIP', 'hi-tech'),
        'section' => 'hi-tech__theme__options'
    ));

    //Adress
    $wp_customize->add_setting('hi-tech_adress');
    $wp_customize->add_control('hi-tech_adress', array(
        'label' => __('Adress', 'hi-tech'),
        'section' => 'hi-tech__theme__options'
    ));

    //Iframe
    $wp_customize->add_setting('hi-tech_map');
    $wp_customize->add_control('hi-tech_map', array(
        'label' => __('Map(iframe)', 'hi-tech'),
        'section' => 'hi-tech__theme__options'
    ));
});

function hi_tech_theme_options()
{
    global $theme__options;
    $theme__options = array(
        'services_description' => get_theme_mod('hi-tech_service'),

        'photo_gallery_description' => get_theme_mod('hi-tech_photo_gallery'),

        'twitter' => get_theme_mod('hi-tech_twiter'),
        'facebook' => get_theme_mod('hi-tech_facebook'),
        'instagram' => get_theme_mod('hi-tech_instagram'),
        'youtube' => get_theme_mod('hi-tech_youtube'),

        'phone' => get_theme_mod('hi-tech_phone'),
        'email' => get_theme_mod('hi-tech_email'),
        'nip' => get_theme_mod('hi-tech_nip'),
        'adress' => get_theme_mod('hi-tech_adress'),
        'map' => get_theme_mod('hi-tech_map'),
    );
}
add_action('wp', 'hi_tech_theme_options');

?>