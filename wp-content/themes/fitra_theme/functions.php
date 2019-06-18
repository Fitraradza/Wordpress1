<?php
    function load_file(){
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('style', get_stylesheet_uri() . '/style.css', array(), '1.1');
        wp_enqueue_style('style', get_stylesheet_uri() . 'assets/css/style.css', array(), '1.1');
        wp_enqueue_style('bootstrap', get_stylesheet_uri() . 'assets/css/bootstrap.css', array(), '1.1');
        wp_enqueue_style('bootstrap-min', get_stylesheet_uri() . 'assets/css/bootstrap.min.css', array(), '1.1');
        wp_enqueue_style('bootstrap-grid', get_stylesheet_uri() . 'assets/css/bootstrap-grid.css', array(), '1.1');
        wp_enqueue_style('bootstrap-grid-min', get_stylesheet_uri() . 'assets/css/bootstrap-grid.min.css', array(), '1.1');
        wp_enqueue_style('bootstrap-reboot', get_stylesheet_uri() . 'assets/css/bootstrap-reboot.css', array(), '1.1');
        wp_enqueue_style('bootstrap-reboot-min', get_stylesheet_uri() . 'assets/css/bootstrap-reboot-min.css', array(), '1.1');
    }

    add_action('wp_enqueue_scripts', 'load_file');
    
    function get_excerpt_length(){
        return 3;
    }

    function return_excerpt_text(){
        return '';
    }

    add_filter('excerpt_more', 'return_excerpt_text');
    add_filter('excerpt_length', 'get_excerpt_length');

    function init_setup(){
        register_nav_menus(Array(
            'main_menu' => 'Menu Utama',
            'footer_menu' => 'Menu Footer'
        ));

        add_theme_support('post-thumbnails');
        add_image_size('small_thumb', 150, 150, true);
        add_image_size('big_thumb', 450, 250, true);

        add_theme_support('post-formats',array(
            'aside',
            'gallery'
        ));
    }

    add_action('after_setup_theme','init_setup');

    function widget_setup(){
        register_sidebar(array(
            'name' => "Sidebar pertama",
            'id' => "sidebar1"
        ));
    }

    add_action('widgets_init','widget_setup');
?>