<?php

/**
 * Registers menus for the Fundle Donations plugin.
 */
function fundle_register_menus() {
	add_menu_page(
		__('Fundle Donations', 'fundle'),
		__('Fundle Donations', 'fundle'),
		'manage_options',
		'fundle',
		'fundle_dashboard_page',
		'dashicons-money',
		25
	);
	
	add_submenu_page(
		'fundle',
		__('Dashboard', 'fundle'),
		__('Dashboard', 'fundle'),
		'manage_options',
		'fundle',
		'fundle_dashboard_page'
	);
	
	add_submenu_page(
		'fundle',
		__('Fundle Settings', 'fundle'),
		__('Settings', 'fundle'),
		'manage_options',
		'fundle-settings',
		'fundle_settings_page'
	);	
}
add_action( 'admin_menu', 'fundle_register_menus' );
