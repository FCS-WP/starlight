<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * Yith WooCommerce Wishlist Fonts Rules
 * Created by CMSMasters
 * 
 */


function kids_r_us_yith_woocommerce_wishlist_fonts($custom_css) {
	$cmsmasters_option = kids_r_us_get_global_options();
	
	
	$custom_css .= "
/***************** Start Yith WooCommerce Wishlist Font Styles ******************/
	
	/* Start Content Font */
	#yith-wcwl-form.woocommerce table.wishlist_table td.product-price,
	html body .cmsmasters_add_wishlist_button .button_to_cart,
	#yith-wcwl-form.woocommerce table.wishlist_table td.product-add-to-cart > a,
	#yith-wcwl-form .wishlist_manage_table tbody .wishlist-name,
	#yith-wcwl-form .wishlist_manage_table tbody .wishlist-name a,
	#yith-wcwl-form .wishlist_manage_table tbody .wishlist-privacy {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_content_font_google_font']) . $cmsmasters_option['kids-r-us' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_content_font_font_style'] . ";
	}

	html body .cmsmasters_add_wishlist_button .button_to_cart,
	#yith-wcwl-form.woocommerce table.wishlist_table td.product-add-to-cart > a {
		font-size:" . ((int) $cmsmasters_option['kids-r-us' . '_content_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['kids-r-us' . '_content_font_line_height'] - 2) . "px;
	}

	.cmsmasters_wishlist_wrap > a > span {
		font-size:" . ((int) $cmsmasters_option['kids-r-us' . '_content_font_font_size'] - 3) . "px;
	}

	html body .cmsmasters_add_wishlist_button .button_to_cart {
		text-transform: none;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	#yith-wcwl-form .wishlist_manage_table .selectBox span {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_link_font_google_font']) . $cmsmasters_option['kids-r-us' . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_link_font_text_decoration'] . ";
	}
	/* Finish Link Font */
	
	
	/* Start H3 Font */
	.wishlist-page-links a {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_h3_font_google_font']) . $cmsmasters_option['kids-r-us' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_h3_font_text_decoration'] . ";
	}
	/* Finish H3 Font */
	
	
	/* Start H5 Font */
	.woocommerce table.wishlist_table thead th,
	#yith-wcwl-form .wishlist_manage_table thead th {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_h5_font_google_font']) . $cmsmasters_option['kids-r-us' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_h5_font_text_decoration'] . ";
	}
	
	#yith-wcwl-form.woocommerce table.wishlist_table td.product-name a.yith-wcqv-button {
		height:" . ((int) $cmsmasters_option['kids-r-us' . '_h5_font_line_height'] - 2) . "px;
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	#page .widget.widget_yith-wcwl-lists ul li > a,
	.yith-wcwl-add-to-wishlist a:not(.button),
	.yith-wcwl-add-to-wishlist .yith-wcwl-add-button a.add_to_wishlist.button
	.yith-wcwl-add-to-wishlist .add_to_wishlist,
		#yith-wcwl-form.woocommerce table.wishlist_table td.product-add-to-cart > a, 
	html body .cmsmasters_add_wishlist_button .button_to_cart {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_h6_font_google_font']) . $cmsmasters_option['kids-r-us' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_h6_font_font_style'] . ";
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_h6_font_text_decoration'] . ";
	}
	/* Finish H6 Font */


	/* Start Button Font */
	.yith-wcwl-add-to-wishlist .yith-wcwl-add-button a.add_to_wishlist.button i,
	#yith-wcwl-form .wishlist_manage_table tfoot .button,
	#yith-wcwl-form .wishlist_manage_table tfoot button,
	#yith-wcwl-form .yith-wcwl-wishlist-new button,
	#yith-wcwl-form .yith-wcwl-wishlist-search-form button,
	#yith-wcwl-form.woocommerce table.wishlist_table tfoot td .ask-an-estimate-button-container .button,
	#yith-wcwl-form.woocommerce table.wishlist_table #custom_add_to_cart,
	.wishlist_manage_table a.button,
	#yith-wcwl-form.woocommerce table.wishlist_table td.product-add-to-cart > a.button {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_button_font_google_font']) . $cmsmasters_option['kids-r-us' . '_button_font_system_font'] . ";
		line-height:" . $cmsmasters_option['kids-r-us' . '_button_font_line_height'] . "px;
		font-size:" . $cmsmasters_option['kids-r-us' . '_button_font_font_size'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_button_font_text_transform'] . ";
	}
	
	#yith-wcwl-form.woocommerce table.wishlist_table td.product-add-to-cart > a.button {
		line-height:1.5em;
	}
	/* Finish Button Font */
	
	
	/* Start Text Fields Font */
	.yith-wcwl-wishlist-search-form #wishlist_search {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_input_font_google_font']) . $cmsmasters_option['kids-r-us' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_input_font_font_style'] . ";
	}
	/* Finish Text Fields Font */
/***************** Finish Yith WooCommerce Wishlist Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('kids_r_us_theme_fonts_filter', 'kids_r_us_yith_woocommerce_wishlist_fonts');

