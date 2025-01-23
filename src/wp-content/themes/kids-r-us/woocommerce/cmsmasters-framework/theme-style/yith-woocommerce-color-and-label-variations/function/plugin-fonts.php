<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * Yith WooCommerce Color and Label Variations Fonts Rules
 * Created by CMSMasters
 * 
 */


function kids_r_us_yith_woocommerce_color_and_label_variations_fonts($custom_css) {
	$cmsmasters_option = kids_r_us_get_global_options();
	
	
	$custom_css .= "
/***************** Start Yith WooCommerce Color and Label Variations Font Styles ******************/
	
	/* Start Content Font */
	/* Finish Content Font */

	/* Start H6 Font */ 
	/* Finish H6 Font */
	
	
/***************** Finish Yith WooCommerce Color and Label Variations Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('kids_r_us_theme_fonts_filter', 'kids_r_us_yith_woocommerce_color_and_label_variations_fonts');

