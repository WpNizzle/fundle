<?php

require_once plugin_dir_path( __FILE__ ) . './shortcode.php';
require_once plugin_dir_path( __FILE__ ) . './dashboard.php';
require_once plugin_dir_path( __FILE__ ) . './settings.php';
/**
 * Registers menus for the Fundle Donations plugin.
 */
function fundle_register_menus() {
	add_menu_page(
		'Fundle Donations',
		'Fundle Donations',
		'manage_options',
		'fundle',
		'fundle_dashboard_page',
		'dashicons-money',
		25
	);

	add_submenu_page(
		'fundle',
		'Dashboard',
		'Dashboard',
		'manage_options',
		'fundle',
		'fundle_dashboard_page'
	);

	add_submenu_page(
		'fundle',
		'Fundle Settings',
		'Settings',
		'manage_options',
		'fundle-settings',
		'fundle_settings_page'
	);
}

add_action( 'admin_menu', 'fundle_register_menus' );
