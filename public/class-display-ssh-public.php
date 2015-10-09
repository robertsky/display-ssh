<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://robertsky.com
 * @since      1.0.0
 *
 * @package    Display_Ssh
 * @subpackage Display_Ssh/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Display_Ssh
 * @subpackage Display_Ssh/public
 * @author     Robert Sim <contact@robertsky.com>
 */
class Display_Ssh_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Display_Ssh_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Display_Ssh_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/display-ssh-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Display_Ssh_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Display_Ssh_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/display-ssh-public.js', array( 'jquery' ), $this->version, false );

	}

	public function add_query_vars_ssh( $a_vars ) {
		$a_vars[] = 'ssh';

		return $a_vars;
	}

	public function add_rewrite_rule_author_ssh() {
		add_rewrite_rule( 'author/([^/]*)/ssh/?$', 'index.php?author_name=$matches[1]&ssh=true', 'top' );
	}

	public function display_author_ssh() {
		global $wp_query;
		$ssh = get_query_var( 'ssh', '' );
		$author = get_query_var( 'author_name', '');
		if( !empty( $author ) ) {
			$author = get_user_by( 'slug', $author );
			if( !empty( $ssh ) ) {
				$ssh_key = get_the_author_meta( 'ssh_key', $author->ID );
				if( $ssh_key ) {
					echo $ssh_key;
					exit();
				}
			}
		}
	}

}
