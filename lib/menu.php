<?php
/* Register Admin Menu */
add_action('admin_menu', 'unicon_seo_menu');

function unicon_seo_menu() {
  // add_menu_page(Page Title, Menu Title, Capabilities, slug, call back function,icon);
	add_menu_page('Unicon SEO Settings', 'Page Level SEO', 'administrator', 'unicon-seo-dashboard', 'unicon_seo_dashboard_page','dashicons-search');
  // add_submenu_page(Parent slug, Page title, Menu Title, Capabilities, slug, call back function);
  add_submenu_page( 'unicon-seo-dashboard', 'Unicon SEO Settings', "Dashboard", "administrator", "unicon-seo-dashboard", 'unicon_seo_dashboard_page');
  add_submenu_page( 'unicon-seo-dashboard', 'Unicon SEO Settings', "Settings", "administrator", "unicon-seo-settings", 'unicon_seo_dashboard_settings');
}
