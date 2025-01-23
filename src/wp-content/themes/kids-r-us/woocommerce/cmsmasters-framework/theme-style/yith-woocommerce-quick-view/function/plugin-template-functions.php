<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.5
 * 
 * Yith WooCommerce Quick View Plugin Functions
 * Created by CMSMasters
 * 
 */


/* Yith WooCommerce Quick View Add to Cart Button */
function kids_r_us_quick_view_button($product_id = 0, $label = '', $type = '', $use = '', $show = true) {
	global $woocommerce, 
		$product;
	
	$out = '';
	
	/* Start Yith WooCommerce Quick View Free */
	$quick_view_enable = get_option('yith-wcqv-enable') == 'yes' ? true : false;
	
	$label = esc_html(get_option('yith-wcqv-button-label'));
	/* Finish Yith WooCommerce Quick View Free */
	
	
	if (!$product_id) {
		$product_id = $product->get_id();
	}
	
	
	// enqueue scripts and product content
	if (defined('YITH_WCQV_PREMIUM')) {
		
		$position = get_option('yith-wcqv-button-position');
		
		$content = '';
		
		! $type && $type = get_option('yith-wcqv-button-type');
		
		if (
			($position == 'add-cart') || 
			($position == 'image') 
		) {
			add_action('wp_footer', 'kids_r_us_quick_view_modal_window');
		}
	}
	
	
	if ($type === 'icon') {
		$icon = get_option('yith-wcqv-button-icon');
		$content = '<img src="' . esc_url($icon) . '" class="yith-wcqv-icon"/>';
	} else {
		! $label && $label = get_option('yith-wcqv-button-label');
		$content = ($label) ? '<span>' . esc_html($label) . '</span>' : '';
	}
	/* Finish Yith WooCommerce Quick View Premium */
	
	
	if ($quick_view_enable) {
		if (defined('YITH_WCQV_PREMIUM')) {
			if ($position == 'image') {
				$out .= '<div class="button cmsmasters_quick_view_button yith-wcqv-button cmsmasters-inside-thumb' . (($label) ? '' : ' empty cmsmasters_theme_icon_quick_view') . '" title="' . $label . '" data-product_id="' . $product_id . '">'. $content . '</div>';
			} else {
				$class = ($type === 'button') ? ' button' : '';
				
				$out .= '<a href="#" class="cmsmasters_quick_view_button yith-wcqv-button' . (($label) ? '' : ' empty cmsmasters_theme_icon_quick_view') . $class . '" data-product_id="' . $product_id . '" title="' . esc_attr__('Quick View', 'kids-r-us') . '">' . $content . '</a>';
			}
		} else {
			$out .= '<a href="#" class="button cmsmasters_quick_view_button yith-wcqv-button inside-thumb' . (($label) ? '' : ' empty cmsmasters_theme_icon_quick_view') . '" title="' . $label . '" data-product_id="' . $product_id . '">' . $label . '</a>';
		}
	}
	
	
	if ($show) {
		echo kids_r_us_return_content($out);
	} else {
		return $out;
	}
}


/* Yith WooCommerce Quick View Enqueue Styles */
function kids_r_us_quick_view_enqueue_styles() {
	
	$main_text_color = get_option('yith-wcqv-main-text-color');
	$cart_color = get_option('yith-wcqv-button-cart-color');
	$cart_color_hover = get_option('yith-wcqv-button-cart-color-hover');
	$details_color = get_option('yith-wcqv-button-details-color');
	$details_color_hover = get_option('yith-wcqv-button-details-color-hover');
	
	
	$quick_view_css = "
		.yith-quick-view.yith-modal .cmsmasters_star_rating .cmsmasters_star_color_wrap,
		.yith-quick-view.yith-modal .share_posts_inner > span {
			color: {$main_text_color};
		}
		
		.yith-quick-view-content.woocommerce div.summary button.button.alt {
			border-color: {$cart_color};
		}
		
		.yith-quick-view-content.woocommerce div.summary button.button.alt:hover {
			border-color: {$cart_color_hover};
		}
		
		.yith-quick-view-content.woocommerce div.summary .yith-wcqv-view-details {
			border-color: {$details_color};
		}
		
		.yith-quick-view-content.woocommerce div.summary .yith-wcqv-view-details:hover {
			border-color: {$details_color_hover};
		}
	";
	
	
	wp_add_inline_style('plugin-style', $quick_view_css);
	
}

add_action('wp_enqueue_scripts', 'kids_r_us_quick_view_enqueue_styles');


function kids_r_us_quick_view_modal_window() {
	/* enqueue script */
	wp_enqueue_script('jquery-blockui');
	
	wp_enqueue_script('yith-wcqv-frontend');
	
	wp_enqueue_script('external-plugin');
}

function kids_r_us_yith_add_view_details_button() {
	global $product;

	$label = esc_html( get_option( 'yith-wcqv-details-button-label' ) );
	$link  = $product->get_permalink();

	echo '<a href="' . $link . '" class="yith-wcqv-view-details button">' . $label . '</a>';
}

function kids_r_us_yith_quick_view_share() {
	wc_get_template( 'yith-quick-view-share.php', array(), '', YITH_WCQV_DIR . 'templates/' );
}

function kids_r_us_get_full_description(){
	global $post;

	ob_start();
	?>

	<div itemprop="description">
		<?php the_content(); ?>
	</div>

	<?php
	echo ob_get_clean();
}