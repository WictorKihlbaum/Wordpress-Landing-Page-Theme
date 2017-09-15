<?php

function loadThemeResources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', loadThemeResources());
register_nav_menu('primary', 'Navigation in the header');
add_filter('show_admin_bar', '__return_false');