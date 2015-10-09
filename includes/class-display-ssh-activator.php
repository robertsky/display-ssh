<?php

/**
 * Fired during plugin activation
 *
 * @link       http://robertsky.com
 * @since      1.0.0
 *
 * @package    Display_Ssh
 * @subpackage Display_Ssh/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Display_Ssh
 * @subpackage Display_Ssh/includes
 * @author     Robert Sim <contact@robertsky.com>
 */
class Display_Ssh_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
        flush_rewrite_rules();
        delete_option('rewrite_rules');
	}

}
