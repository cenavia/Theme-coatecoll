<?php
add_theme_support('post-thumbnails');
add_image_size('my-size', 200, 180, true);
add_image_size('my-link', 100, 100, true);

function register_my_menus() {
    register_nav_menus(
            array(
                'menu-header' => __('Menú del encabezado'),
                'menu-footer' => __('Menú del footer')
                )
        );
}
add_action('init', 'register_my_menus');