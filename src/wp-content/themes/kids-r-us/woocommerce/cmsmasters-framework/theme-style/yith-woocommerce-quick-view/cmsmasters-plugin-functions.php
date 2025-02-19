<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * Yith WooCommerce Quick View Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts for Yith WooCommerce Quick View Plugin */
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-quick-view/function/plugin-template-functions.php');

require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-quick-view/function/plugin-colors.php');

require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-quick-view/function/plugin-fonts.php');



/* Register CSS Styles and Scripts for Yith WooCommerce Quick View Plugin */
function kids_r_us_yith_woocommerce_quick_view_register_styles_scripts() {

	wp_enqueue_style('kids-r-us-yith-woocommerce-quick-view-style', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-quick-view/css/plugin-style.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('kids-r-us-yith-woocommerce-quick-view-adaptive', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-quick-view/css/plugin-adaptive.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('kids-r-us-yith-woocommerce-quick-view-rtl', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-quick-view/css/plugin-rtl.css', array(), '1.0.0', 'screen');
	}
}

add_action('wp_enqueue_scripts', 'kids_r_us_yith_woocommerce_quick_view_register_styles_scripts', 20);



/* Yith WooCommerce Quick View Default */
function kids_r_us_quick_view_options_default() {
	if (!get_option('cmsmasters_kids_r_us_quick_view_first_active')) {
		update_option('yith-wcqv-button-label', '');
		update_option('yith-wcqv-background-modal', '');
		update_option('yith-wcqv-close-color', '');
		update_option('yith-wcqv-close-color-hover', '');
		
		add_option('cmsmasters_kids_r_us_quick_view_first_active', 'true');
	}
}

add_action('init', 'kids_r_us_quick_view_options_default');



/* Yith WooCommerce Quick View Premium Default */
if (defined('YITH_WCQV_PREMIUM')) {
	function kids_r_us_quick_view_premium_options_default() {
		if (!get_option('cmsmasters_kids_r_us_quick_view_premium_first_active')) {
			update_option('yith-wcqv-background-modal', '');
			update_option('yith-wcqv-button-quick-view-color', '');
			update_option('yith-wcqv-button-quick-view-text-color', '');
			update_option('yith-wcqv-button-quick-view-color-hover', '');
			update_option('yith-wcqv-button-quick-view-text-color-hover', '');
			update_option('yith-wcqv-main-text-color', '');
			update_option('yith-wcqv-star-color', '');
			update_option('yith-wcqv-button-cart-color', '');
			update_option('yith-wcqv-button-cart-text-color', '');
			update_option('yith-wcqv-button-cart-color-hover', '');
			update_option('yith-wcqv-button-cart-text-color-hover', '');
			update_option('yith-wcqv-button-details-color', '');
			update_option('yith-wcqv-button-details-text-color', '');
			update_option('yith-wcqv-button-details-color-hover', '');
			update_option('yith-wcqv-button-details-text-color-hover', '');
			update_option('yith-wcqv-close-color', '');
			update_option('yith-wcqv-close-color-hover', '');
			
			add_option('cmsmasters_kids_r_us_quick_view_premium_first_active', 'true');
		}
	}
	
	add_action('init', 'kids_r_us_quick_view_premium_options_default');
}