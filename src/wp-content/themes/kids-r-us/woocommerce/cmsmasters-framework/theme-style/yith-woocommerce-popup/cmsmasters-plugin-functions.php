<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * Yith WooCommerce Popup Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts for Yith WooCommerce Popup Plugin */
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-popup/function/plugin-template-functions.php');
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-popup/function/plugin-colors.php');
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-popup/function/plugin-fonts.php');



/* Register CSS Styles and Scripts for Yith WooCommerce Popup Plugin */
function kids_r_us_yith_woocommerce_popup_register_styles_scripts() {

	wp_enqueue_style('kids-r-us-yith-woocommerce-popup-style', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-popup/css/plugin-style.css', array('ypop_theme1'), '1.0.0', 'screen');
	
	wp_enqueue_style('kids-r-us-yith-woocommerce-popup-adaptive', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-popup/css/plugin-adaptive.css', array('ypop_theme1'), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('kids-r-us-yith-woocommerce-popup-rtl', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-popup/css/plugin-rtl.css', array('ypop_theme1'), '1.0.0', 'screen');
	}
	
}

add_action('wp_enqueue_scripts', 'kids_r_us_yith_woocommerce_popup_register_styles_scripts');

