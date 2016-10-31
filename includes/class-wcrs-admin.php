<?php
namespace WCRS;

/**
* Woocommerce Reset Stock admin
*/
class WCRS_Admin
{
	
	public static function add_settings_tab( $settings_tabs ) {

		$settings_tabs['wcrs_settings'] = __( 'Verb Brands Reset Stock' );
		return $settings_tabs;
	}
}