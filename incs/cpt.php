<?php
add_action( 'init', function () {
    register_post_type( 
        'slider',
         array(
            'labels' => array(
                'name'                     => '1Слайдер', // основное название во множественном числе
                'singular_name'            => '2Слайд', // название единичной записи
                'add_new'                  => '3Добавить слайд',
                'add_new_item'             => '4Добавить новый слайд', // на странице добавления записи
                'edit_item'                => '5Изменить слайд',
                'new_item'                 => '6Новый слайд',
                'view_item'                => '7Просмотр слайда', // текст кнопки просмотра записи на сайте (если поддерживается типом)
                'search_items'             => '8Найти слайд',
                'not_found'                => '9Слайдов не найдено',
                'not_found_in_trash'       => '10В корзине нет слайдов',
                'parent_item_colon'        => '11Родительский слайд', // только для древовидных типов постов
                'all_items'                => '12Все слайды', // По умолчанию: menu_name
                'archives'                 => '13Архивы слайдов', // По умолчанию: all_items
                'menu_name'                => '14Слайды', // Название в меню. По умолчанию: name.
                'name_admin_bar'           => '15Слайд', // Название в админ баре при наведении на "Добавить". По умолчанию: singular_name.
                'view_items'               => '16Просмотр слайдов', // Текст ссылки перехода на архивы типа записй в админ баре. WordPress 4.7+
                'attributes'               => '17Свойства слайда', // Название для метабокса атрибутов записи. WordPress 4.7+
        
                // лейблы загрузчика медиафайлов
                'insert_into_item'         => '18Вставить в слайд',
                'uploaded_to_this_item'    => '19Загружено для этого слайда',
                'featured_image'           => '20Изображение слайда',
                'set_featured_image'       => '21Установить изображение слайда',
                'remove_featured_image'    => '22Удалить изображение слайда',
                'use_featured_image'       => '23Использовать как изображение слайда',
        
                // Gutenberg, WordPress 5.0+
                'item_updated'             => '24Слайд обновлён.',
                'item_published'           => '25Слайд добавлен.',
                'item_published_privately' => '26Слайд добавлен приватно.',
                'item_reverted_to_draft'   => '27Слайд сохранён как черновик.',
                'item_scheduled'           => '28Публикация слайда запланирована.',
            ),
            'public'       => true,
            'supports'     => array( 'title', 'editor', 'thumbnail' ),
            'menu_icon'    => 'dashicons-format-gallery',
            'show_in_rest' => true,
    ));

    register_post_type( 
        'services',
         array(
            'labels' => array(
                'name'                     => '1Услуги', // основное название во множественном числе
                'singular_name'            => '2Услуга', // название единичной записи
                'add_new'                  => '3Добавить услугу',
                'add_new_item'             => '4Добавить новую услугу', // на странице добавления записи
                'edit_item'                => '5Изменить услугу',
                'new_item'                 => '6Новая услуга',
                'view_item'                => '7Просмотр услуги', // текст кнопки просмотра записи на сайте (если поддерживается типом)
                'search_items'             => '8Найти услугу',
                'not_found'                => '9Услуг не найдено',
                'not_found_in_trash'       => '10В корзине нет услуг',
                'parent_item_colon'        => '11Родительская услуга', // только для древовидных типов постов
                'all_items'                => '12Все услуги', // По умолчанию: menu_name
                'archives'                 => '13Архивы услуг', // По умолчанию: all_items
                'menu_name'                => '14Услуги', // Название в меню. По умолчанию: name.
                'name_admin_bar'           => '15услуга', // Название в админ баре при наведении на "Добавить". По умолчанию: singular_name.
                'view_items'               => '16Просмотр услуг', // Текст ссылки перехода на архивы типа записй в админ баре. WordPress 4.7+
                'attributes'               => '17Свойства услуги', // Название для метабокса атрибутов записи. WordPress 4.7+
        
                // лейблы загрузчика медиафайлов
                'insert_into_item'         => '18Вставить в услугу',
                'uploaded_to_this_item'    => '19Загружено для этой услуги',
                'featured_image'           => '20Изображение услуги',
                'set_featured_image'       => '21Установить изображение услуги',
                'remove_featured_image'    => '22Удалить изображение услуги',
                'use_featured_image'       => '23Использовать как изображение услуги',
        
                // Gutenberg, WordPress 5.0+
                'item_updated'             => '24услуга обновлёна.',
                'item_published'           => '25услуга добавлена.',
                'item_published_privately' => '26услуга добавлена приватно.',
                'item_reverted_to_draft'   => '27услуга сохранёна как черновик.',
                'item_scheduled'           => '28Публикация услуги запланирована.',
            ),
            'public'       => true,
            'supports'     => array( 'title', 'editor', 'thumbnail' ),
            'menu_icon'    => 'dashicons-hammer',
            'show_in_rest' => true,
            'has_archive' => true
    ));

    register_post_type( 
        'photo-gallery',
         array(
            'labels' => array(
                'name'                     => '1Фотографии', // основное название во множественном числе
                'singular_name'            => '2Фото галерея', // название единичной записи
                'add_new'                  => '3Добавить фотографию',
                'add_new_item'             => '4Добавить новую фотографию', // на странице добавления записи
                'edit_item'                => '5Изменить фотографию',
                'new_item'                 => '6Новая фотография',
                'view_item'                => '7Просмотр фотографий', // текст кнопки просмотра записи на сайте (если поддерживается типом)
                'search_items'             => '8Найти фотографию',
                'not_found'                => 'фотографий не найдено',
                'not_found_in_trash'       => '10В корзине нет фотографий',
                'parent_item_colon'        => '11Родительская фотография', // только для древовидных типов постов
                'all_items'                => '12Все фотографии', // По умолчанию: menu_name
                'archives'                 => '13Архивы фотографий', // По умолчанию: all_items
                'menu_name'                => '14Фото галереи', // Название в меню. По умолчанию: name.
                'name_admin_bar'           => '15Фотография', // Название в админ баре при наведении на "Добавить". По умолчанию: singular_name.
                'view_items'               => '16Просмотр фотографий', // Текст ссылки перехода на архивы типа записй в админ баре. WordPress 4.7+
                'attributes'               => '17Свойства фотографий', // Название для метабокса атрибутов записи. WordPress 4.7+
        
                // лейблы загрузчика медиафайлов
                'insert_into_item'         => '18Вставить в фотографию',
                'uploaded_to_this_item'    => '19Загружено для этой фотографии',
                'featured_image'           => '20Изображение фотографий',
                'set_featured_image'       => '21Установить изображение фотографии',
                'remove_featured_image'    => '22Удалить изображение фотографии',
                'use_featured_image'       => '23Использовать как изображение фотографии',
        
                // Gutenberg, WordPress 5.0+
                'item_updated'             => '24Фотография обновлёна.',
                'item_published'           => '25Фотография добавлена.',
                'item_published_privately' => '26Фотография добавлена приватно.',
                'item_reverted_to_draft'   => '27Фотография сохранёна как черновик.',
                'item_scheduled'           => '28Публикация фотографии запланирована.',
            ),
            'public'       => true,
            'supports'     => array( 'title', 'editor', 'thumbnail' ),
            'menu_icon'    => 'dashicons-embed-photo',
            'show_in_rest' => true,
            'has_archive' => true
    ));
});

