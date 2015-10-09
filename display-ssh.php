<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://robertsky.com
 * @since             1.0.0
 * @package           Display_Ssh
 *
 * @wordpress-plugin
 * Plugin Name:       Display SSH Keys
 * Plugin URI:        http://robertsky.com/display-ssh
 * Description:       A simple plugin to show public keys of the authors.
 * Version:           1.0.0
 * Author:            Robert Sim
 * Author URI:        http://robertsky.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       display-ssh
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-display-ssh-activator.php
 */
function activate_display_ssh() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-display-ssh-activator.php';
	Display_Ssh_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-display-ssh-deactivator.php
 */
function deactivate_display_ssh() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-display-ssh-deactivator.php';
	Display_Ssh_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_display_ssh' );
register_deactivation_hook( __FILE__, 'deactivate_display_ssh' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-display-ssh.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_display_ssh() {

	$plugin = new Display_Ssh();
	$plugin->run();

}
run_display_ssh();
