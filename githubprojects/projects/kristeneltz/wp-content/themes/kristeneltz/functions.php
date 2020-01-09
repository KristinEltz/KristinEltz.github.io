<?php


/**
 * Update CSS within in Admin
 */

function admin_style() {
    wp_enqueue_style('admin-styles', get_stylesheet_directory_uri() . '/adminpanel.css');
}
add_action('admin_enqueue_scripts', 'admin_style');


//Отключить админ панель
add_filter('show_admin_bar', '__return_false');

?>