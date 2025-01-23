<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * Yith WooCommerce Wishlist Colors Rules
 * Created by CMSMasters
 * 
 */


function kids_r_us_yith_woocommerce_wishlist_colors($custom_css) {
	$cmsmasters_option = kids_r_us_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Yith WooCommerce Wishlist Colors Scheme Rules ******************/
	
	/* Start Main Content Font Color */
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-price, 
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-stock-status .wishlist-in-stock,
	{$rule}.shop_table .dateadded,
	{$rule}#yith-wcwl-form .wishlist_manage_table tbody .wishlist-privacy,
	{$rule}#yith-wcwl-form .wishlist_manage_table .selectBox span {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table tbody td.product-add-to-cart > a {
		background-color:transparent;
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table tbody td.product-add-to-cart > a, 
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table tfoot td ul li a:hover,
	{$rule}.yith-wcwl-add-to-wishlist a:not(.button):after,
	{$rule}.products .product .cmsmasters_product_add_inner .cmsmasters_add_wishlist_button a.browse_wishlist {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}#page .widget.widget_yith-wcwl-lists ul li > a:hover, 
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-stock-status .wishlist-out-of-stock,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table tfoot td ul li a,
	{$rule}.single_product .yith-wcwl-add-button a:hover,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-name a:hover,
	{$rule}#yith-wcwl-form .wishlist_manage_table tbody .wishlist-name a:hover, 
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table tbody td.product-add-to-cart > a:hover,
	{$rule}.yith-wcwl-add-to-wishlist .yith-wcwl-add-button a.add_to_wishlist.button:hover,
	{$rule}#yith-wcwl-form .yith-wcwl-wishlist-new button:hover,
	{$rule}.wishlist_manage_table tr td a.button:hover,
	{$rule}.wishlist_manage_table tr td button:hover,
	{$rule}#yith-wcwl-form .yith-wcwl-wishlist-search-form .wishlist-search-button:hover,
	{$rule}.yith-wcwl-popup-button > .popup_button:hover,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-add-to-cart > a.button {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}div.pp_woocommerce .pp_close {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover'] . '!important') . "
	}
	
	{$rule}.woocommerce a.selectBox:focus,
	{$rule}html .woocommerce .yith-wcwl-wishlist-search-form #wishlist_search:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover'] . '!important') . "
	}
	
	{$rule}#yith-wcwl-form .yith-wcwl-wishlist-new button:hover,
	{$rule}.wishlist_manage_table tr td a.button:hover,
	{$rule}.wishlist_manage_table tr td button:hover,
	{$rule}#yith-wcwl-form .yith-wcwl-wishlist-search-form .wishlist-search-button:hover,
	{$rule}.yith-wcwl-popup-button > .popup_button:hover {
		" . cmsmasters_color_css('outline-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.wishlist_manage_table tr td a.button,
	{$rule}.wishlist_manage_table tr td button,
	{$rule}#yith-wcwl-form .yith-wcwl-wishlist-search-form .wishlist-search-button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Main Background Color */
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-name a.yith-wcqv-button,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-name a.yith-wcqv-button:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.button_to_cart_wrap .yith-wcwl-wishlistaddedbrowse a {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . ", .6);
	}
	
	{$rule}#yith-wcwl-form .yith-wcwl-wishlist-new button {
	" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}#yith-wcwl-form .yith-wcwl-wishlist-new button {
	" . cmsmasters_color_css('outline-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "	
	}
	/* Finish Main Background Color */
	
	
	/* Start Headings Color */
	{$rule}#page .widget.widget_yith-wcwl-lists ul li > a, 
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-price ins,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table thead th,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-name a,
	{$rule}.single_product .yith-wcwl-add-button a,
	{$rule}#yith-wcwl-form .wishlist_manage_table thead th,
	{$rule}#yith-wcwl-form .wishlist_manage_table tbody .wishlist-name,
	{$rule}#yith-wcwl-form .wishlist_manage_table tbody .wishlist-name a, 
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table tbody td.product-add-to-cart > a,
	{$rule}.yith-wcwl-add-to-wishlist .yith-wcwl-add-button a.add_to_wishlist.button,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-add-to-cart > a.button:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Alternate Background Color */
	{$rule}#yith-wcwl-form .wishlist_manage_table thead th,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table tfoot td .ask-an-estimate-button-container .button:hover,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table #custom_add_to_cart:hover,
	{$rule}.wishlist_manage_table tr td a.button:hover,
	{$rule}.wishlist_manage_table tr td button:hover,
	{$rule}div.pp_woocommerce .pp_close:before,
	{$rule}.yith-wcwl-popup-button > .popup_button:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.wishlist_manage_table tr td a.button,
	{$rule}.wishlist_manage_table tr td button,
	{$rule}#yith-wcwl-form .yith-wcwl-wishlist-search-form .wishlist-search-button,
	{$rule}.yith-wcwl-popup-button > .popup_button {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.wishlist_manage_table tr td a.button,
	{$rule}.wishlist_manage_table tr td button,
	{$rule}#yith-wcwl-form .yith-wcwl-wishlist-search-form .wishlist-search-button,
	{$rule}.yith-wcwl-popup-button > .popup_button {
		" . cmsmasters_color_css('outline-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}#yith-wcwl-form .yith-wcwl-wishlist-new button:hover, 
	{$rule}#yith-wcwl-form .yith-wcwl-wishlist-search-form .wishlist-search-button:hover, 
	{$rule}#yith-wcwl-form .yith-wcwl-wishlist-new, 
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table, 
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table tr,
	{$rule}html #yith-wcwl-form.woocommerce table.wishlist_table tfoot tr:first-child td,
	{$rule}#yith-wcwl-form .yith-wcwl-wishlist-new select,
	{$rule}.selectBox-dropdown-menu,
	{$rule}#yith-wcwl-form .wishlist_manage_table,
	{$rule}#yith-wcwl-form .wishlist_manage_table .selectBox,
	{$rule}.woocommerce table.wishlist_table thead th, 
	{$rule}.woocommerce table.wishlist_table tbody td,
	{$rule}html .woocommerce .yith-wcwl-wishlist-search-form #wishlist_search {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}div.pp_woocommerce .pp_content_container {
		" . cmsmasters_color_css('outline-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.woocommerce a.selectBox {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_border'] . '!important') . "
	}
	/* Finish Borders Color */
	
/***************** Finish {$title} Yith WooCommerce Wishlist Colors Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('kids_r_us_theme_colors_secondary_filter', 'kids_r_us_yith_woocommerce_wishlist_colors');

