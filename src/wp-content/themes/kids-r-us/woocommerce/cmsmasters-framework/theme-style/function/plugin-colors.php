<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * WooCommerce Colors Rules
 * Created by CMSMasters
 * 
 */


function kids_r_us_woocommerce_colors($custom_css) {
	$cmsmasters_option = kids_r_us_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} WooCommerce Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active,
	{$rule}.select2-container .select2-selection--single .select2-selection__rendered,
	body .select2-container .select2-selection--single,
	{$rule}.cmsmasters_woo_wrap_result .woocommerce-result-count,
	{$rule}.cmsmasters_single_product .product_meta, 
	{$rule}.cmsmasters_single_product .product_meta a,
	{$rule}.widget_layered_nav ul li,
	{$rule}.widget_rating_filter ul li,
	{$rule}.widget_product_categories ul li,
	{$rule}.widget_price_filter .price_slider_amount .price_label,
	{$rule}.widget_shopping_cart .total,
	{$rule}.woocommerce-info,
	{$rule}.shop_table td.product-name,
	{$rule}.shop_table td.product-total,
	{$rule}.woocommerce-checkout-payment label,
	{$rule}ul.order_details strong,
	{$rule}.woocommerce-table--order-details td.product-name a,
	{$rule}.shop_table.cart td.product-price,
	{$rule}.shop_table.cart td.product-subtotal,
	{$rule}.woocommerce-error,
	{$rule}.cart_totals table th,
	{$rule}.cart_totals table td,
	{$rule}.breadcrumbs_sep_woo {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_color']) . "
	}
	
	#page .remove:before,
	#page .remove:after {
	" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.required, 
	{$rule}.comment-form-rating .stars > span a:hover, 
	{$rule}.comment-form-rating .stars > span a.active, 
	{$rule}#page .remove:hover,
	{$rule}.shop_table thead th, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table .order-total th, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table .order-total td, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table .cart-subtotal th, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table .cart-subtotal td, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table .product-name strong, 
	{$rule}.shop_table.order_details tfoot tr:last-child th, 
	{$rule}.shop_table.order_details tfoot tr:last-child td, 
	{$rule}.shop_table.order_details .product-name strong, 
	{$rule}.shop_table.order_details tfoot tr:first-child th, 
	{$rule}.shop_table.order_details tfoot tr:first-child td, 
	{$rule}.widget_layered_nav ul li.chosen a, 
	{$rule}.widget_layered_nav_filters ul li a:hover, 
	{$rule}.widget_layered_nav_filters ul li.chosen a,  
	{$rule}.widget_product_categories ul li.current-cat a,  
	{$rule}.widget > .product_list_widget ins .amount,  
	{$rule}.widget_shopping_cart .cart_list .quantity, 
	{$rule}.woocommerce-store-notice .woocommerce-store-notice__dismiss-link,
	{$rule}.woocommerce-MyAccount-content a:hover,
	{$rule}.cart_totals .shop_table td a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.input-checkbox + label:after, 
	{$rule}.input-radio + label:after, 
	{$rule}input.shipping_method + label:after, 
	{$rule}.onsale,  
	{$rule}.woocommerce-store-notice {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.cmsmasters_product .cmsmasters_product_cat,
	{$rule}.cmsmasters_product .cmsmasters_product_cat a,
	{$rule}.cmsmasters_star_rating .cmsmasters_star_color_wrap,
	{$rule}.woocommerce-breadcrumb,
	{$rule}.cmsmasters_single_product .product_meta a:hover,
	{$rule}section.products > h2:before,
	{$rule}.widget_layered_nav ul li a:hover ,
	{$rule}.widget_rating_filter ul li a:hover,
	{$rule}.widget > .product_list_widget a:hover,
	{$rule}.widget_product_search .search_button button:hover,
	{$rule}.widget_product_categories ul li a:hover,
	{$rule}.widget_shopping_cart .cart_list a:hover,
	{$rule}.widget_price_filter .price_slider_amount .button,
	{$rule}.shop_table a:not(.button):hover,
	{$rule}.widget_shopping_cart_content .buttons .button,
	{$rule}.woocommerce-MyAccount-content a,
	{$rule}.cart_totals .shop_table td a,
	{$rule}.variations .selected.select_option span,
	{$rule}.variations .select_option span:hover,
	{$rule}body div.pp_woocommerce .pp_close,
	{$rule}.woocommerce-MyAccount-content a.button:hover,
	{$rule}.woocommerce-MyAccount-navigation ul > li.is-active a,
	{$rule}.cmsmasters_single_product .group_table ins > * ,
	{$rule}.cmsmasters_single_product .group_table ins .woocommerce-Price-amount,
	{$rule}.cmsmasters_single_product .group_table .woocommerce-Price-amount {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}body div.pp_woocommerce .pp_close {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover'] . '!important') . "
	}
	
	{$rule}.widget_product_search .search_button button:hover:after,
	{$rule}.widget_price_filter .price_slider_amount .button:after,
	{$rule}.widget_shopping_cart_content .buttons .button:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.link_hover_color,
	{$rule}.widget_price_filter .ui-slider-handle,
	{$rule}.widget_product_tag_cloud a:hover,
	{$rule}.woocommerce-checkout .select2-container .select2-selection--single:focus,
	{$rule}.select2-container.select2-container--open .select2-selection--single,
	{$rule}.select2-container.select2-container--focus .select2-selection--single {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.onsale,
	{$rule}.button_to_cart_wrap,
	{$rule}.widget_product_search .search_button button,
	{$rule}#page .remove:hover:before,
	{$rule}#page .remove:hover:after,
	{$rule}.widget_price_filter .price_slider_amount .button:hover,
	{$rule}.woocommerce-checkout-payment label:after,
	{$rule}.widget_shopping_cart .widget_shopping_cart_content .buttons .button:hover,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button:hover,
	{$rule}.shop_table.woocommerce-checkout-review-order-table thead th {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.woocommerce-message, 
	{$rule}.woocommerce-error li,   
	{$rule}.cmsmasters_product .price, 
	{$rule}.cmsmasters_product .cmsmasters_product_add_inner .button:hover, 
	{$rule}.cmsmasters_single_product .price, 
	{$rule}.cmsmasters_single_product .product_meta .meta_name, 
	{$rule}.shop_attributes th, 
	{$rule}.shop_table, 
	{$rule}.shop_table a:not(.button), 
	{$rule}.cart_totals table, 
	{$rule}.widget_layered_nav ul li a, 
	{$rule}.widget_layered_nav_filters ul li, 
	{$rule}.widget_layered_nav_filters ul li a, 
	{$rule}.widget_product_categories ul li a, 
	{$rule}.widget > .product_list_widget a, 
	{$rule}.widget > .product_list_widget .amount, 
	{$rule}.widget_shopping_cart .cart_list a, 
	{$rule}.widget_shopping_cart .cart_list .quantity .amount, 
	{$rule}.out-of-stock,
	{$rule}.cmsmasters_product .price,
	{$rule}.cmsmasters_product .cmsmasters_product_cat a:hover,
	{$rule}.woocommerce-breadcrumb a,
	{$rule}.widget_rating_filter ul li a,
	{$rule}.widget_product_tag_cloud a,
	{$rule}ul.order_details li,
	{$rule}.shop_table.cart thead th,
	{$rule}.widget_shopping_cart_content .cart_list .quantity,
	{$rule}.single_variation .woocommerce-variation-price,
	{$rule}.stock.out-of-stock,
	{$rule}.cmsmasters_single_product .group_table del > *,
	{$rule}.cmsmasters_single_product .group_table .stock,
	{$rule}.cmsmasters_single_product .group_table del .woocommerce-Price-amount {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.cmsmasters_product .price del,
	{$rule}.cmsmasters_single_product .price del,
	{$rule}.widget > .product_list_widget del,
	{$rule}.widget > .product_list_widget del .amount {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['kids-r-us' . '_' . $scheme . '_heading']) . ", .4);
	}
	 
	{$rule}.stock,
	{$rule}.single_variation .stock,
	{$rule}.summary .stock  {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.woocommerce-store-notice, 
	{$rule}.woocommerce-store-notice p a, 
	{$rule}.woocommerce-store-notice p a:hover,
	{$rule}.onsale,
	{$rule}.button_to_cart_wrap a,
	{$rule}.widget_price_filter .price_slider_amount .button:hover,
	{$rule}.woocommerce-MyAccount-content a.button {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.button_to_cart_wrap a:hover {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . ", .7);
	}
	
	{$rule}.button_to_cart_wrap:after,
	{$rule}.widget_price_filter .price_slider_amount .button:hover:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.widget_price_filter .price_slider,
	{$rule}.woocommerce-store-notice .woocommerce-store-notice__dismiss-link,
	{$rule}.cmsmasters_product,
	{$rule}.widget_price_filter .price_slider_amount .button,
	{$rule}.woocommerce-MyAccount-content fieldset,
	{$rule}.woocommerce-MyAccount-content fieldset legend {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */ 
	{$rule}.stock.in-stock, 
	{$rule}ul.order_details,
	{$rule}.widget_product_search .search_button button,
	{$rule}.widget_shopping_cart_content .buttons .button:hover,
	{$rule}.shop_table.woocommerce-checkout-review-order-table thead th {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.widget_product_search .search_button button:after,
	{$rule}.widget_shopping_cart_content .buttons .button:hover:after,
	{$rule}.button_to_cart_wrap .bd_inner {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.woocommerce-info, 
	{$rule}.woocommerce-message, 
	{$rule}.woocommerce-error, 
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active, 
	{$rule}.input-checkbox + label:before, 
	{$rule}.input-radio + label:before, 
	{$rule}input.shipping_method + label:before, 
	{$rule}.cmsmasters_product .cmsmasters_product_add_inner .button:hover, 
	{$rule}.shop_table.order_details tfoot tr:last-child th, 
	{$rule}.shop_table.order_details tfoot tr:last-child td, 
	{$rule}.woocommerce-checkout-payment, 
	{$rule}.out-of-stock,
	{$rule}.widget_price_filter .ui-slider-handle,
	{$rule}.select2-container,
	{$rule}.select2-container select,
	{$rule}.woocommerce-checkout .select2-container .select2-selection--single,
	{$rule}.shop_table,
	{$rule}.shop_table td,
	{$rule}.shop_table th,
	{$rule}.order_details,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content,
	{$rule}.cmsmasters_added_product_info,
	{$rule}.shop_table input[type=submit]:hover,
	{$rule}.shop_table button:hover,
	{$rule}.woocommerce-checkout-review-order button:hover,
	{$rule}.woocommerce-MyAccount-content a.button:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.widget_product_search .search_button button:hover {
		background-color:transparent;
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsmasters_star_rating .cmsmasters_star_trans_wrap, 
	{$rule}.comment-form-rating .stars > span {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsmasters_woo_tabs:before, 
	{$rule}div.products:before,
	{$rule}.widget_price_filter .ui-slider-range {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.input-checkbox + label:before, 
	{$rule}.input-radio + label:before, 
	{$rule}input.shipping_method + label:before, 
	{$rule}.shop_table th, 
	{$rule}.shop_table td, 
	{$rule}.cart_totals table th, 
	{$rule}.cart_totals table td, 
	{$rule}.widget_price_filter .price_slider, 
	{$rule}.shop_table .cart_item,
	{$rule}.select2-dropdown,
	{$rule}body .select2-container .select2-selection--single,
	{$rule}.cmsmasters_single_product .product_meta,
	{$rule}.cmsmasters_single_product .product_meta span,
	{$rule}.shop_attributes,
	{$rule}.shop_attributes tr,
	{$rule}.cmsmasters_woo_comments .comment_container,
	{$rule}.cmsmasters_woo_comments .comment-respond form,
	{$rule}.widget_shopping_cart .widget_shopping_cart_content,
	{$rule}.widget_shopping_cart .widget_shopping_cart_content .total,
	{$rule}.widget_product_tag_cloud a,
	{$rule}.woocommerce-info,
	{$rule}.woocommerce-checkout-payment,
	{$rule}.woocommerce-checkout-payment .payment_methods .payment_box,
	{$rule}ul.order_details:after,
	{$rule}.order_details,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .total,
	{$rule}.cmsmasters_added_product_info,
	{$rule}.woocommerce-error,
	{$rule}.woocommerce-info, 
	{$rule}.woocommerce-message,
	{$rule}.woocommerce-privacy-policy-text, 
	{$rule}.woocommerce-terms-and-conditions,
	{$rule}.shop_table.cart .cart_item,
	{$rule}.shop_table.shop_table_responsive tbody tr,
	{$rule}.shop_table.shop_table_responsive,
	{$rule}.shop_table,
	{$rule}body div.pp_woocommerce .pp_content {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */


	{$rule}.cmsmasters_dynamic_cart_button span {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_header_mid_hover']) . "
			" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_header_mid_bg']) . "
	}
/***************** Finish {$title} WooCommerce Color Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('kids_r_us_theme_colors_secondary_filter', 'kids_r_us_woocommerce_colors');

