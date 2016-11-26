<?php

function theme_name_scripts () {
    wp_enqueue_style('jquery.fancybox', get_template_directory_uri() . '/fancybox/jquery.fancybox.css');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('mobile', get_template_directory_uri() . '/css/mobile.css');
    wp_enqueue_script('device.js', get_template_directory_uri() . '/device.js-master/lib/device.js');
    wp_enqueue_script('html5shiv', get_template_directory_uri() . '/js/html5shiv.js');
    wp_enqueue_script('jquery-1.8.0.min', get_template_directory_uri() . '/js/lib/jquery-1.8.0.min.js');
    wp_enqueue_script('jquery.fancybox.pack.js', get_template_directory_uri() . '/fancybox/jquery.fancybox.pack.js');
    wp_enqueue_script('jquery.cookie', get_template_directory_uri() . '/js/lib/jquery.cookie.js');
    wp_enqueue_script('jquery.maskedinput.min', get_template_directory_uri() . '/js/jquery.maskedinput.min.js');
    wp_enqueue_script('form-val', get_template_directory_uri() . '/js/form-val.js');
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js');
    wp_enqueue_script('multi', get_template_directory_uri() . '/js/multi.js');
}

add_action('wp_enqueue_scripts', 'theme_name_scripts');
//miniature
add_theme_support( 'post-thumbnails' );

// header_menu
register_nav_menu('menu', 'Меню в шапке');

?>

