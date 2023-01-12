<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/saputraridho/
 * @since      1.0.0
 *
 * @package    Wp_Saputra
 * @subpackage Wp_Saputra/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Saputra
 * @subpackage Wp_Saputra/admin
 * @author     saputra <saputraridh@gmail.com>
 */
use Carbon_Fields\Container;
use Carbon_Fields\Field;
class Wp_Saputra_Admin {

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
	private $functions;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version, $functions ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->functions = $functions;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Saputra_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Saputra_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-saputra-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Saputra_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Saputra_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-saputra-admin.js', array( 'jquery' ), $this->version, false );

	}
	function crb_attach_wp_saputra_options() {
		$basic_options_container = Container::make( 'theme_options', __( 'Wp Saputra Options' ) )
			->set_page_menu_position( 4 )
			->add_fields( array(
				Field::make( 'text', 'crb_wp_saputra_key_public', 'reCAPTCHA key public' )
				->set_help_text('Bisa dilihat di <a href="https://www.google.com/recaptcha/admin/" target="_blank">https://www.google.com/recaptcha/admin/</a>.'),
				Field::make( 'text', 'crb_wp_saputra_key_private', 'reCAPTCHA key private' )
				->set_help_text('Bisa dilihat di <a href="https://www.google.com/recaptcha/admin/" target="_blank">https://www.google.com/recaptcha/admin/</a>.'),
				Field::make( 'text', 'crb_apikey_saputra', 'API KEY' )
				->set_default_value($this->functions->generateRandomString())
				->set_help_text('Wajib diisi. API KEY digunakan untuk integrasi data.')
			) );
	}

}
