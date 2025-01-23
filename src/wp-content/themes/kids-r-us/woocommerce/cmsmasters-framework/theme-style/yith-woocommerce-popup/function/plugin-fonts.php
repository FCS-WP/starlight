<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * Yith WooCommerce Popup Fonts Rules
 * Created by CMSMasters
 * 
 */


function kids_r_us_yith_woocommerce_popup_fonts($custom_css) {
	$cmsmasters_option = kids_r_us_get_global_options();
	
	
	$custom_css .= "
/***************** Start Yith WooCommerce Popup Font Styles ******************/
	
	/* Start H4 Font */
	body .ypop-wrapper .price ins, 
	body .ypop-wrapper .price del {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_h4_font_google_font']) . $cmsmasters_option['kids-r-us' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_h4_font_text_decoration'] . ";
	}
	
	
	body .ypop-wrapper .price del {
		font-size:" . ((int) $cmsmasters_option['kids-r-us' . '_h4_font_font_size'] - 4) . "px;
	}
	/* Finish H4 Font */
	
	
	/* Start H6 Font */
	body .ypop-wrapper .add_to_cart {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_h4_font_google_font']) . $cmsmasters_option['kids-r-us' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_h4_font_text_decoration'] . ";
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */	
	/* Finish Button Font */
	
/***************** Finish Yith WooCommerce Popup Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('kids_r_us_theme_fonts_filter', 'kids_r_us_yith_woocommerce_popup_fonts');

