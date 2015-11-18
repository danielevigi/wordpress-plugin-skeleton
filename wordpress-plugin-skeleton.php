<?php
/*
 * Plugin Name: Wordpress Plugin Skeleton
 * Plugin URI: http://www.example.com/
 * Description: Plugin Description
 * Version: 1.0
 * Author: Plugin author
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	return;
}


// File caricati
require(plugin_dir_path(__FILE__).'/classes/Wordpress_Plugin_Skeleton.php');


// Associa le funzioni di attivazione/disattivazione plugin e crea l'oggetto globale che rappresenta il plugin
if (class_exists('Wordpress_Plugin_Skeleton')) {
	register_activation_hook(__FILE__, array('Wordpress_Plugin_Skeleton', 'activate'));
	register_deactivation_hook(__FILE__, array('Wordpress_Plugin_Skeleton', 'deactivate'));
	global $wordpress_plugin_skeleton;
	$wordpress_plugin_skeleton = new Wordpress_Plugin_Skeleton(plugin_dir_path(__FILE__), plugin_dir_url(__FILE__));
}