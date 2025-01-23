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


function kids_r_us_yith_woocommerce_quick_view_colors($custom_css) {
	$cmsmasters_option = kids_r_us_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Yith WooCommerce Quick View Colors Scheme Rules ******************/
	
	/* Start Main Content Font Color */
	{$rule}html .yith-quick-view .yith-quick-view-content .yith-quick-view-images-slider .es-nav div,
	{$rule}.yith-wcqv-main .product_meta a,
	{$rule}.yith-wcqv-main .product_meta span a {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}html .yith-quick-view .yith-quick-view-content div.summary .summary-content .browse_wishlist, 
	{$rule}#yith-quick-view-modal .single-product .cmsmasters_add_wishlist_button .button {
		background-color:transparent;
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}#yith-quick-view-modal .single-product .product_meta a:hover,
	{$rule}#yith-quick-view-modal .single-product .product_meta > span a:hover,
	{$rule}.cmsmasters_product_category_shortcode.puzzle .cmsmasters_product .button.cmsmasters_quick_view_button,
	{$rule}.cmsmasters_product_category_shortcode.puzzle .products .product .cmsmasters_product_add_inner .cmsmasters_add_wishlist_button a {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}html .yith-quick-view .yith-quick-view-content .yith-quick-view-images-slider .es-nav div:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}html .yith-quick-view .yith-quick-view-content div.summary .summary-content .browse_wishlist:hover, 
	{$rule}html .yith-quick-view .yith-quick-view-content div.summary .summary-content .yith-wcqv-view-details:hover, 
	{$rule}#yith-quick-view-modal .single-product .product_meta > span,
	{$rule}#yith-quick-view-modal .single-product .product_meta > span a, 
	{$rule}#yith-quick-view-modal .single-product .cmsmasters_add_wishlist_button .button:hover, 
	{$rule}.yith-quick-view.yith-modal .yith-wcwl-add-button a.add_to_wishlist:hover,
	{$rule}.yith-wcqv-main .product_meta a:hover,
	{$rule}.yith-wcqv-main .product_meta span a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover']) . "
	}
		
	{$rule}html .yith-quick-view.slide-in .yith-wcqv-head .yith-quick-view-close, 
	{$rule}html .yith-quick-view.fade-in .yith-wcqv-head .yith-quick-view-close, 
	{$rule}html .yith-quick-view.scale-up .yith-wcqv-head .yith-quick-view-close,
	{$rule}html .yith-quick-view.slide-in .yith-wcqv-head .yith-quick-view-close, 
	{$rule}html .yith-quick-view.fade-in .yith-wcqv-head .yith-quick-view-close, 
	{$rule}html .yith-quick-view.scale-up .yith-wcqv-head .yith-quick-view-close,
	{$rule}html #yith-quick-view-modal .yith-wcqv-head #yith-quick-view-close,
	{$rule}body .yith-quick-view-nav.reveal a,
	{$rule}html .yith-quick-view.yith-inline .yith-wcqv-main .yith-wcqv-head .yith-quick-view-close {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}body .yith-quick-view-content div.images .yith-quick-view-thumbs div.active {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}html .yith-quick-view .yith-quick-view-content div.summary .summary-content .browse_wishlist, 
	{$rule}#yith-quick-view-modal .single-product .price,
	{$rule}.yith-quick-view .single-product .price,
	{$rule}#yith-quick-view-modal .single-product .product_meta a,
	{$rule}#yith-quick-view-modal .single-product .product_meta > span .cmsmasters_product_meta_title,
	{$rule}#yith-quick-view-modal .single-product .cart .quantity input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	{$rule}.yith-quick-view.slide-in .single-product .product_meta > span .cmsmasters_product_meta_title,
	{$rule}.yith-quick-view.fade-in .single-product .product_meta > span .cmsmasters_product_meta_title,
	{$rule}.yith-quick-view.scale-in .single-product .product_meta > span .cmsmasters_product_meta_title,
	{$rule}.yith-quick-view.slide-in .single-product .cart .quantity input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	{$rule}.yith-quick-view.fade-in .single-product .cart .quantity input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	{$rule}.yith-quick-view.scale-in .single-product .cart .quantity input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	{$rule}.yith-quick-view.yith-inline .single-product .product_meta > span .cmsmasters_product_meta_title,
	{$rule}.yith-quick-view.yith-inline .single-product .cart .quantity input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]), 
	{$rule}#yith-quick-view-modal .single-product .cmsmasters_add_wishlist_button .button, 
	{$rule}.yith-quick-view.yith-modal .yith-wcwl-add-button a.add_to_wishlist,
	{$rule}.yith-wcqv-main .product_meta span {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}#yith-quick-view-modal .single-product .price del {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['kids-r-us' . '_' . $scheme . '_heading']) . ", .4);
	}
	
	{$rule}.yith-quick-view.yith-modal .yith-wcqv-wrapper, 
	{$rule}.yith-quick-view.slide-in .single-product .yith-wcqv-view-details,
	{$rule}.yith-quick-view.fade-in .single-product .yith-wcqv-view-details,
	{$rule}.yith-quick-view.scale-in .single-product .yith-wcqv-view-details {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}html .yith-quick-view .yith-quick-view-content .yith-quick-view-images-slider .es-nav div:hover, 
	{$rule}.cmsmasters_product_category_shortcode.puzzle .cmsmasters_product .button.cmsmasters_quick_view_button:hover,
	{$rule}.cmsmasters_product_category_shortcode.puzzle .products .product .cmsmasters_product_add_inner .cmsmasters_add_wishlist_button a:hover,
	{$rule}.cmsmasters_product_category_shortcode.puzzle .products .product .cmsmasters_product_add_inner .cmsmasters_add_wishlist_button a.browse_wishlist {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.yith-wcqv-button:not(.button) span,
	{$rule}html .yith-quick-view.slide-in .yith-wcqv-head .yith-wcqv-close:before,
	{$rule}html .yith-quick-view.fade-in .yith-wcqv-head .yith-wcqv-close:before,
	{$rule}html .yith-quick-view.scale-in .yith-wcqv-head .yith-wcqv-close:before,
	{$rule}html .yith-quick-view.slide-in .single-product > .product > .product > div.images .yith_magnifier_zoom_wrap .yith_magnifier_mousetrap .yith_expand,
	{$rule}html .yith-quick-view.fade-in .single-product > .product > .product > div.images .yith_magnifier_zoom_wrap .yith_magnifier_mousetrap .yith_expand,
	{$rule}html .yith-quick-view.scale-in .single-product > .product > .product > div.images .yith_magnifier_zoom_wrap .yith_magnifier_mousetrap .yith_expand,
	{$rule}.yith-quick-view.yith-inline .yith-wcqv-head .yith-wcqv-close,
	{$rule}.yith-quick-view.yith-inline .yith-wcqv-head .yith-wcqv-close:before,
	{$rule}.yith-quick-view.yith-inline .single-product > .product > .product > div.images .yith_magnifier_zoom_wrap .yith_magnifier_mousetrap .yith_expand, 
	{$rule}html .yith-quick-view .yith-quick-view-content .yith-quick-view-images-slider .es-nav div {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	/* Start Alternate Color */
	{$rule}.yith-wcqv-main,
	{$rule}html .yith-quick-view.slide-in .yith-wcqv-head .yith-quick-view-close:before, 
	{$rule}html .yith-quick-view.fade-in .yith-wcqv-head .yith-quick-view-close:before, 
	{$rule}html .yith-quick-view.scale-up .yith-wcqv-head .yith-quick-view-close:before,
	{$rule}html .yith-quick-view.slide-in .yith-wcqv-head .yith-quick-view-close:after, 
	{$rule}html .yith-quick-view.fade-in .yith-wcqv-head .yith-quick-view-close:after, 
	{$rule}html .yith-quick-view.scale-up .yith-wcqv-head .yith-quick-view-close:after,
	{$rule}html #yith-quick-view-modal .yith-wcqv-head #yith-quick-view-close:before,
	{$rule}html #yith-quick-view-modal .yith-wcqv-head #yith-quick-view-close:after,
	{$rule}.yith-wcqv-main button:hover,
	{$rule}.yith-wcqv-main a.button:hover,
	{$rule}html .yith-quick-view.yith-inline .yith-wcqv-main .yith-wcqv-head .yith-quick-view-close:before,
	{$rule}html .yith-quick-view.yith-inline .yith-wcqv-main .yith-wcqv-head .yith-quick-view-close:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.yith-quick-view .stock {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Color */
	
	/* Start Borders Color */
	{$rule}#yith-quick-view-modal .single-product .cmsmasters_product_info_wrap,
	{$rule}#yith-quick-view-modal .single-product .product_meta,
	{$rule}#yith-quick-view-modal .single-product .cmsmasters_product_right_column .share_posts,
	{$rule}.yith-quick-view.slide-in .single-product .cmsmasters_product_info_wrap,
	{$rule}.yith-quick-view.fade-in .single-product .cmsmasters_product_info_wrap,
	{$rule}.yith-quick-view.scale-in .single-product .cmsmasters_product_info_wrap,
	{$rule}.yith-quick-view.slide-in .single-product .product_meta,
	{$rule}.yith-quick-view.fade-in .single-product .product_meta,
	{$rule}.yith-quick-view.scale-in .single-product .product_meta,
	{$rule}html .yith-quick-view.slide-in .single-product > .product > .product > div.images .yith-quick-view-thumbs .yith-quick-view-single-thumb:hover,
	{$rule}html .yith-quick-view.fade-in .single-product > .product > .product > div.images .yith-quick-view-thumbs .yith-quick-view-single-thumb:hover,
	{$rule}html .yith-quick-view.scale-in .single-product > .product > .product > div.images .yith-quick-view-thumbs .yith-quick-view-single-thumb:hover,
	{$rule}html .yith-quick-view.slide-in .single-product > .product > .product > div.images .yith-quick-view-thumbs .yith-quick-view-single-thumb.active,
	{$rule}html .yith-quick-view.fade-in .single-product > .product > .product > div.images .yith-quick-view-thumbs .yith-quick-view-single-thumb.active,
	{$rule}html .yith-quick-view.scale-in .single-product > .product > .product > div.images .yith-quick-view-thumbs .yith-quick-view-single-thumb.active,
	{$rule}.yith-quick-view.yith-inline .single-product .cmsmasters_product_info_wrap,
	{$rule}.yith-quick-view.yith-inline .single-product .product_meta,
	{$rule}.yith-quick-view.yith-inline .single-product > .product > .product > div.images .yith-quick-view-thumbs .yith-quick-view-single-thumb:hover,
	{$rule}.yith-quick-view.yith-inline .single-product > .product > .product > div.images .yith-quick-view-thumbs .yith-quick-view-single-thumb.active, 
	{$rule}html .yith-quick-view .yith-quick-view-content .yith-quick-view-images-slider .es-nav div, 
	{$rule}.yith-quick-view .yith-quick-view-content div.woocommerce-message, 
	{$rule}.yith-quick-view .yith-quick-view-content ul.woocommerce-error,
	{$rule}html .yith-quick-view.yith-inline .yith-wcqv-wrapper,
	{$rule}body .yith-quick-view-content div.images .yith-quick-view-thumbs .yith-quick-view-single-thumb,
	{$rule}.yith-quick-view .single-product,
	{$rule}#yith-quick-view-modal #yith-quick-view-content {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */
	
/***************** Finish {$title} Yith WooCommerce Quick View Colors Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('kids_r_us_theme_colors_secondary_filter', 'kids_r_us_yith_woocommerce_quick_view_colors');

