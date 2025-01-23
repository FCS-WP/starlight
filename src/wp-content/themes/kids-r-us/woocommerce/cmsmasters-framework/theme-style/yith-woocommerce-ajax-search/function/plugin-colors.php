<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * Yith WooCommerce Ajax Search Colors Rules
 * Created by CMSMasters
 * 
 */


function kids_r_us_yith_woocommerce_ajax_search_colors($custom_css) {
	$cmsmasters_option = kids_r_us_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Yith WooCommerce Ajax Search Colors Scheme Rules ******************/
	
	/* Start Main Content Font Color */
	{$rule}.yith-ajaxsearchform-container form label:before,
	{$rule}html .yith-ajaxsearchform-container .autocomplete-suggestion,
	{$rule}.yith-ajaxsearchform-container .autocomplete-suggestion .yith_wcas_result_content .yith_wcas_result_excerpt {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.yith-ajaxsearchform-container form div input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]) {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}

	{$rule}.yith-ajaxsearchform-container input[type='submit'] {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	/* Start Hover Color */
	{$rule}html .yith-ajaxsearchform-container .autocomplete-suggestion:hover, 
	{$rule}.yith-ajaxsearchform-container .autocomplete-suggestion:hover .yith_wcas_result_content .title, 
	{$rule}.yith-ajaxsearchform-container .autocomplete-suggestion:hover .title strong,
	{$rule}.yith-ajaxsearchform-container .autocomplete-suggestion strong, 
	{$rule}.yith-ajaxsearchform-container .link-result a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.yith-ajaxsearchform-container .link-result a:hover:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.woocommerce .autocomplete-suggestion  span.yith_wcas_result_on_sale, 
	{$rule}.autocomplete-suggestion  span.yith_wcas_result_on_sale,
	{$rule}.yith-ajaxsearchform-container .link-result a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Hover Color */
	
	/* Start Headings Color */
	{$rule}.yith-ajaxsearchform-container form label:hover:before, 
	{$rule}.yith-ajaxsearchform-container input[type='submit'],
	{$rule}.yith-ajaxsearchform-container .autocomplete-suggestion .yith_wcas_result_content .title,
	{$rule}.yith-ajaxsearchform-container .autocomplete-suggestion .yith_wcas_result_content,
	{$rule}.yith-ajaxsearchform-container .autocomplete-suggestion .yith_wcas_result_content .amout {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.woocommerce .autocomplete-suggestion  span.yith_wcas_result_outofstock,
	{$rule}.autocomplete-suggestion  span.yith_wcas_result_outofstock {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.yith-ajaxsearchform-container input[type='submit']:hover,
	{$rule}.yith-ajaxsearchform-container .search_button button:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.woocommerce .autocomplete-suggestion  span.yith_wcas_result_on_sale, 
	{$rule}.autocomplete-suggestion  span.yith_wcas_result_on_sale, 
	{$rule}.woocommerce .autocomplete-suggestion  span.yith_wcas_result_outofstock,
	{$rule}.autocomplete-suggestion  span.yith_wcas_result_outofstock {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	/* Finish Main Background Color */

	/* Start Main Alternate Color */
	{$rule}html .yith-ajaxsearchform-container .autocomplete-suggestions,
	{$rule}html .yith-ajaxsearchform-container .autocomplete-suggestion,
	{$rule}.yith-ajaxsearchform-container .link-result a:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.yith-ajaxsearchform-container .link-result a {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.yith-ajaxsearchform-container .link-result a:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Main Alternate Color */
	
	/* Start Border Color */
	{$rule}html .yith-ajaxsearchform-container .autocomplete-suggestions {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_border']) . "
	}
	/* Finish Border Color */
	
/***************** Finish {$title} Yith WooCommerce Ajax Search Colors Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('kids_r_us_theme_colors_secondary_filter', 'kids_r_us_yith_woocommerce_ajax_search_colors');

