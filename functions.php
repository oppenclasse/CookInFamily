<?php
function cookinfamily_add_admin_pages() {
add_menu_page(__('Paramètres du thème CookInFamily', 'cookinfamily'), __('CookInFamily', 'cookinfamily'), 'manage_options', 'cookinfamily-settings', 'cookinfamily_theme_settings', 'dashicons-admin-settings', 60);
}

function cookinfamily_theme_settings() {
echo '<h1>'.get_admin_page_title().'</h1>';
}

add_action('admin_menu', 'cookinfamily_add_admin_pages', 10);