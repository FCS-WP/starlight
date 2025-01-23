<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * Yith WooCommerce Ajax Search Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts */
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-search/function/plugin-template-functions.php');
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-search/function/plugin-colors.php');
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-search/function/plugin-fonts.php');


/* Register CSS Styles and Scripts */
function kids_r_us_yith_woocommerce_ajax_search_register_styles_scripts() {
	// Dequeue default plugin styles
	wp_dequeue_style('yith_wcas_frontend');
	
	
	// Styles
	wp_enqueue_style('kids-r-us-yith-woocommerce-ajax-search-style', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-search/css/plugin-style.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('kids-r-us-yith-woocommerce-ajax-search-adaptive', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-search/css/plugin-adaptive.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('kids-r-us-yith-woocommerce-ajax-search-rtl', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-search/css/plugin-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	$thumb_size               = get_option('yith_wcas_search_show_thumbnail_dim');
	$custom_css = "
		.autocomplete-suggestion img {
			width: {$thumb_size}px;
		}
		";
	
	
	wp_add_inline_style('kids-r-us-yith-woocommerce-ajax-search-style', $custom_css);
}

add_action('wp_enqueue_scripts', 'kids_r_us_yith_woocommerce_ajax_search_register_styles_scripts');


/* Register Admin CSS Styles and Scripts */
function kids_r_us_yith_woocommerce_ajax_search_admin_styles_scripts() {
	// Remove colors settings from premium version
	$custom_js = "
		jQuery('#yith_wcas_sale_badge_bgcolor').closest('tr').hide();
		jQuery('#yith_wcas_sale_badge_color').closest('tr').hide();
		jQuery('#yith_wcas_featured_badge_bgcolor').closest('tr').hide();
		jQuery('#yith_wcas_featured_badge_color').closest('tr').hide();
		jQuery('#yith_wcas_outofstock_badge_bgcolor').closest('tr').hide();
		jQuery('#yith_wcas_outofstock_badge_color').closest('tr').hide();
		jQuery('#yith_wcas_search_title_color').closest('tr').hide();
		";
	
	
	wp_add_inline_script('kids-r-us-admin-scripts', $custom_js);
}

add_action('admin_enqueue_scripts', 'kids_r_us_yith_woocommerce_ajax_search_admin_styles_scripts');

