<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 *
 * CMSMasters WooCommerce Admin Settings
 * Created by CMSMasters
 *
 */


/* Single Settings */
function kids_r_us_woocommerce_options_general_fields($options, $tab) {
	if ($tab == 'header') {
		$options[] = array(
			'section' => 'header_section',
			'id' => 'kids-r-us' . '_woocommerce_cart_dropdown',
			'title' => esc_html__('Header WooCommerce Cart', 'kids-r-us'),
			'desc' => esc_html__('show', 'kids-r-us'),
			'type' => 'checkbox',
			'std' => 0
		);
	}

	return $options;
}

add_filter('cmsmasters_options_general_fields_filter', 'kids_r_us_woocommerce_options_general_fields', 10, 2);

