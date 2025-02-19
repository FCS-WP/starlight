<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * Yith WooCommerce Quick View Colors Rules
 * Created by CMSMasters
 * 
 */


function kids_r_us_yith_woocommerce_zoom_magnifier_colors($custom_css) {
	$cmsmasters_option = kids_r_us_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Yith WooCommerce Zoom Magnifier Colors Scheme Rules ******************/
	
	/* Start Primary Color */
	{$rule}.single-product.woocommerce .cmsmasters_single_product .thumbnails #slider-prev:hover,
	{$rule}.single-product.woocommerce .cmsmasters_single_product .thumbnails #slider-next:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Headings Color */
	{$rule}.single-product.woocommerce .cmsmasters_single_product .thumbnails #slider-prev,
	{$rule}.single-product.woocommerce .cmsmasters_single_product .thumbnails #slider-next {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.single-product.woocommerce .cmsmasters_single_product .thumbnails #slider-prev,
	{$rule}.single-product.woocommerce .cmsmasters_single_product .thumbnails #slider-next {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Borders Color */
	{$rule}.single-product.woocommerce .cmsmasters_single_product .thumbnails #slider-prev,
	{$rule}.single-product.woocommerce .cmsmasters_single_product .thumbnails #slider-next {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */
	
/***************** Finish {$title} Yith WooCommerce Zoom Magnifier Colors Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('kids_r_us_theme_colors_secondary_filter', 'kids_r_us_yith_woocommerce_zoom_magnifier_colors');

