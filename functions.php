<?php

// 注册 Css 文件
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'tailwind-css',
        get_stylesheet_directory_uri() . '/assets/css/tailwind.css',
        [],
        filemtime(get_stylesheet_directory() . '/assets/css/tailwind.css')
    );
});

// 注册 Javascript 文件
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script(
        'theme-js',
        get_stylesheet_directory_uri() . '/assets/js/theme.js',
        [],
        filemtime(get_stylesheet_directory() . '/assets/js/theme.js'),
        true
    );
});