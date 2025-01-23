<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * Yith WooCommerce Popup Colors Rules
 * Created by CMSMasters
 * 
 */


function kids_r_us_yith_woocommerce_popup_colors($custom_css) {
	$cmsmasters_option = kids_r_us_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Yith WooCommerce Popup Colors Scheme Rules ******************/
	
	/* Start Main Content Font Color */
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */	
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}body .ypop-wrapper a.close:hover, 
	{$rule}body .ypop-wrapper .price del {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}body .ypop-wrapper a.close, 
	{$rule}body .ypop-wrapper .price ins {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}body .ypop-wrapper .ypop-container-inner {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	/* Start Border Color */
	{$rule}body .ypop-wrapper .ypop-content {
		" . cmsmasters_color_css('outline-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_border']) . "
	}
	/* Finish Border Color */
	
/***************** Finish {$title} Yith WooCommerce Popup Colors Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('kids_r_us_theme_colors_secondary_filter', 'kids_r_us_yith_woocommerce_popup_colors');

