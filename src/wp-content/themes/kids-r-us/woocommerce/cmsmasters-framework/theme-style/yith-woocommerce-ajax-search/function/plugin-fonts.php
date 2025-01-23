<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * Yith WooCommerce Ajax Search Fonts Rules
 * Created by CMSMasters
 * 
 */


function kids_r_us_yith_woocommerce_ajax_search_fonts($custom_css) {
	$cmsmasters_option = kids_r_us_get_global_options();
	
	
	$custom_css .= "
/***************** Start Yith WooCommerce Ajax Search Font Styles ******************/
	
	/* Start Content Font */
	#page .yith-ajaxsearchform-container .autocomplete-suggestion  div.badges,
	.yith-ajaxsearchform-container .search_button button,
	.yith-ajaxsearchform-container form div input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.widget.yith_woocommerce_ajax_search .yith-ajaxsearchform-container .screen-reader-text {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_content_font_google_font']) . $cmsmasters_option['kids-r-us' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_content_font_font_style'] . ";
	}

	.yith-ajaxsearchform-container .search_button button,
	.yith-ajaxsearchform-container form div input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.widget.yith_woocommerce_ajax_search .yith-ajaxsearchform-container .screen-reader-text {
		font-size:" . ((int)$cmsmasters_option['kids-r-us' . '_content_font_font_size'] - 2) . "px;
		line-height:" . ((int)$cmsmasters_option['kids-r-us' . '_content_font_line_height'] - 2) . "px;
	}

	/* Finish Content Font */
	
	
	/* Start H6 Font */
	html .yith-ajaxsearchform-container .autocomplete-suggestion,
	html .yith-ajaxsearchform-container .autocomplete-suggestion * {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_h6_font_google_font']) . $cmsmasters_option['kids-r-us' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_h6_font_text_decoration'] . ";
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	.yith-ajaxsearchform-container .search_button button,
	.yith-ajaxsearchform-container .link-result a {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_button_font_google_font']) . $cmsmasters_option['kids-r-us' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_button_font_text_transform'] . ";
	}
	/* Finish Button Font */
	
/***************** Finish Yith WooCommerce Ajax Search Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('kids_r_us_theme_fonts_filter', 'kids_r_us_yith_woocommerce_ajax_search_fonts');

