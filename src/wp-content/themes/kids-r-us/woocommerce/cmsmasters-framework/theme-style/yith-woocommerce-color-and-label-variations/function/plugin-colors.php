<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.1
 * 
 * Yith WooCommerce Color and Label Variations Colors Rules
 * Created by CMSMasters
 * 
 */


function kids_r_us_yith_woocommerce_color_and_label_variations_colors($custom_css) {
	$cmsmasters_option = kids_r_us_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Yith WooCommerce Color and Label Variations Colors Scheme Rules ******************/

	/* Start Primary Color */
	{$rule}.select_option .yith_wccl_value {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}

	{$rule}html body .variations .select_box .select_option.select_option_colorpicker:hover,
	{$rule}html body .variations .select_box .select_option.select_option_colorpicker.selected {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}

	{$rule}html body .select_option_colorpicker {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */

	/* Start Highlight Color */
	{$rule}html body .select_option:hover, 
	{$rule}html body .select_option.selected {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}html body .select_option,
	{$rule}.select_option.selected .yith_wccl_value,
	{$rule}.select_option .yith_wccl_value:hover{
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}html body .select_option:hover, 
	{$rule}html body .select_option.selected, 
	{$rule}html body .select_option {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Borders Color */
	{$rule}html body .variations .select_option.selected, 
	{$rule}html body .variations .select_box .select_option.select_option_colorpicker {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */
	
/***************** Finish {$title} Yith WooCommerce Color and Label Variations Colors Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('kids_r_us_theme_colors_secondary_filter', 'kids_r_us_yith_woocommerce_color_and_label_variations_colors');

