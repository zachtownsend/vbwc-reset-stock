<?php
namespace WCRS;
use \WCRS\WCRS_Admin;
/**
* Woocommerce Reset Stock main class
*/
class WCRS
{
	
	function __construct()
	{
		
		$this->load_dependencies();
		$this->admin = new WCRS_Admin();
		$this->define_admin_hooks();
	}

	public function load_dependencies() {
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-wcrs-admin.php';
	}

	public function define_admin_hooks() {
		add_filter('woocommerce_settings_tabs_array', [$this->admin, 'add_settings_tab'], 10 );
	}

	public function test( $settings_tabs ) {
		$settings_tabs['wcrs_settings'] = __( 'Verb Brands Reset Stock' );
		return $settings_tabs;
	}
}