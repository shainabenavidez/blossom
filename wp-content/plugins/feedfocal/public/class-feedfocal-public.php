<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       feedfocal.com
 * @since      1.0.0
 *
 * @package    FeedFocal
 * @subpackage FeedFocal/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    FeedFocal
 * @subpackage FeedFocal/public
 * @author     FeedFocal <wordpress@feedfocal.com>
 */
class FeedFocal_Public {

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
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in FeedFocal_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The FeedFocal_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		// Add tracking code to database
		$feedfocal_survey_code = html_entity_decode( trim( get_option( 'feedfocal_survey_code' ) ) );

		// Add plugin scripts
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/feedfocal-public.js', array( 'jquery' ), $this->version, false );

		// Output tracking code is provided
		if( ! empty( $feedfocal_survey_code ) ) {
			wp_add_inline_script( $this->plugin_name, $feedfocal_survey_code );
		}

	}

}
