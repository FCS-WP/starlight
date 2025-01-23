<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * Yith WooCommerce Zoom Magnifier Fonts Rules
 * Created by CMSMasters
 * 
 */


function kids_r_us_yith_woocommerce_zoom_magnifier_fonts($custom_css) {
	$cmsmasters_option = kids_r_us_get_global_options();
	
	
	$custom_css .= "
/***************** Start Yith WooCommerce Zoom Magnifier Font Styles ******************/
	

	
/***************** Finish Yith WooCommerce Zoom Magnifier Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('kids_r_us_theme_fonts_filter', 'kids_r_us_yith_woocommerce_zoom_magnifier_fonts');

