<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * WooCommerce Fonts Rules
 * Created by CMSMasters
 * 
 */


function kids_r_us_woocommerce_fonts($custom_css) {
	$cmsmasters_option = kids_r_us_get_global_options();
	
	
	$custom_css .= "
/***************** Start WooCommerce Font Styles ******************/

	/* Start Content Font */
	.cart_totals table .cart-subtotal .amount, 
	.cart_totals table .order-total .amount,
	.shipping-calculator-button,
	.widget_shopping_cart_content .total,
	.widget_shopping_cart_content .total strong,
	.widget_shopping_cart .total,
	.widget_shopping_cart .total strong,
	.shop_table.woocommerce-checkout-review-order-table tr.cart_item td,
	.shop_table.woocommerce-checkout-review-order-table tr.cart_item th,
	.shop_table.cart,
	.shop_table.cart a,
	.shop_table.cart td,
	.shop_table.cart th,
	.shop_table.order_details tbody a,
	.cart_totals table th,
	.cart_totals table td,
	.cart_totals table td strong,
	table .yith_wccl_value,
	.cmsmasters_woo_wrap_result .woocommerce-result-count {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_content_font_google_font']) . $cmsmasters_option['kids-r-us' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_content_font_font_style'] . ";
		text-transform:none;
	}
	
	.cart_totals table td strong,
	.widget_shopping_cart_content .total,
	.widget_shopping_cart_content .total strong,
	.widget_shopping_cart .total,
	.widget_shopping_cart .total strong {
		font-size:" . ((int) $cmsmasters_option['kids-r-us' . '_content_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['kids-r-us' . '_content_font_line_height'] - 2) . "px;
	}
	
	.shop_table.woocommerce-checkout-review-order-table .product-name dl, 
	.shop_table.order_details .product-name dl {
		text-transform:none;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	.shop_table.woocommerce-checkout-review-order-table td a,
	.shop_table.woocommerce-checkout-review-order-table thead td,
	.shop_table.woocommerce-checkout-review-order-table tfoot td,
	.shop_table.order_details thead th,
	.shop_table.order_details tfoot td,
	.shop_table.order_details tfoot th {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_link_font_google_font']) . $cmsmasters_option['kids-r-us' . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_link_font_text_decoration'] . ";
	}
	/* Finish Link Font */
	
	
	/* Start Navigation Title Font */
	.onsale, 
	.out-of-stock, 
	.stock {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_nav_title_font_google_font']) . $cmsmasters_option['kids-r-us' . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_nav_title_font_text_transform'] . ";
		letter-spacing:1px;
	}
	/* Finish Navigation Title Font */
	
	
	/* Start H2 Font */
	.cmsmasters_single_product .cmsmasters_product_title_info_wrap .product_title,
	.woocommerce-checkout h3:not(.widgettitle) {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_h2_font_google_font']) . $cmsmasters_option['kids-r-us' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_h2_font_text_decoration'] . ";
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	section.products > h2 {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_h3_font_google_font']) . $cmsmasters_option['kids-r-us' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_h3_font_text_decoration'] . ";
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.cmsmasters_woo_comments .comment-reply-title {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_h4_font_google_font']) . $cmsmasters_option['kids-r-us' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_h4_font_text_decoration'] . ";
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.cmsmasters_product .price,
	.cmsmasters_single_product .price,  
	.widget_layered_nav_filters ul li, 
	.widget_layered_nav_filters ul li a,   
	.widget_shopping_cart .cart_list .quantity,  
	.widget_price_filter .price_slider_amount .price_label,
	.widget_product_tag_cloud a, 
	.button_to_cart_wrap a,
	.shop_table.cart thead th,
	.shop_table.cart thead td,
	.shop_table.woocommerce-checkout-review-order-table thead th,
	.shop_table.woocommerce-checkout-review-order-table tfoot th {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_h5_font_google_font']) . $cmsmasters_option['kids-r-us' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_h5_font_text_decoration'] . ";
	}
	
	.button_to_cart_wrap a {
		font-size:" . ((int) $cmsmasters_option['kids-r-us' . '_h5_font_font_size'] - 1) . "px;
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.widget_layered_nav ul li, 
	.widget_layered_nav ul li a,
	.widget_rating_filter a, 
	.cmsmasters_product .cmsmasters_product_cat, 
	.cmsmasters_product .cmsmasters_product_cat a, 
	.cmsmasters_single_product .product_meta, 
	.cmsmasters_single_product .product_meta a, 
	.widget > .product_list_widget a, 
	.widget_shopping_cart .cart_list a,
	.shop_attributes th,
	.widget_shopping_cart_content .cart_list .quantity, 
	.widget_shopping_cart_content .cart_list a,
	.cmsmasters_added_product_info .cmsmasters_added_product_info_text,
	.widget_product_categories ul li, 
	.widget_product_categories ul li a,
	.widget > .product_list_widget .amount,
	.shop_table.woocommerce-checkout-review-order-table .product-name dl, 
	.shop_table.order_details .product-name dl,
	.shop_attributes td,
	ul.order_details strong {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_h6_font_google_font']) . $cmsmasters_option['kids-r-us' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_h6_font_text_decoration'] . ";
	}
	/* Finish H6 Font */
	
	
	/* Start Text Fields Font */
	.select2-dropdown {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_input_font_google_font']) . $cmsmasters_option['kids-r-us' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_input_font_font_style'] . ";
	}
	/* Finish Text Fields Font */
	
	
	/* Start Small Text Font */
	/* Finish Small Text Font */

/***************** Finish WooCommerce Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('kids_r_us_theme_fonts_filter', 'kids_r_us_woocommerce_fonts');

