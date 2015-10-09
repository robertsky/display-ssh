<?php

/**
 * Fired during plugin deactivation
 *
 * @link       http://robertsky.com
 * @since      1.0.0
 *
 * @package    Display_Ssh
 * @subpackage Display_Ssh/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Display_Ssh
 * @subpackage Display_Ssh/includes
 * @author     Robert Sim <contact@robertsky.com>
 */
class Display_Ssh_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
        flush_rewrite_rules();
	}

}
