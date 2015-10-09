<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://robertsky.com
 * @since      1.0.0
 *
 * @package    Display_Ssh
 * @subpackage Display_Ssh/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Display_Ssh
 * @subpackage Display_Ssh/admin
 * @author     Robert Sim <contact@robertsky.com>
 */
class Display_Ssh_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	public function show_author_ssh_field( $user ) {
		include_once('partials/display-ssh-admin-display.php');
	}

	public function save_author_ssh_field( $user_id ) {
		if ( !current_user_can( 'edit_user' ) ) {
			return false;
		}
		update_user_meta( $user_id, 'ssh_key', sanitize_text_field( $_POST['ssh_key'] ) );
	}

}
