<?php 
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version		1.0.5
 * 
 * WooCommerce Template Functions
 * Created by CMSMasters
 * 
 */


/* Dynamic Cart */
function kids_r_us_woocommerce_cart_dropdown($cmsmasters_option) {
	global $woocommerce;
	
	
	$cart_link = wc_get_cart_url();
	
	
	$cart_count = $woocommerce->cart->get_cart_contents_count();
	
	$cart_subtotal = $woocommerce->cart->get_cart_subtotal();
	
	
	$cart_currency_symbol = get_woocommerce_currency_symbol();
	
	$cart_currency_symbol_pos = get_option('woocommerce_currency_pos');
	
	$cart_currency = $cart_currency_symbol;
	
	
	if ($cart_currency_symbol_pos == 'left_space') {
		$cart_currency = $cart_currency_symbol . ' ';
	} elseif ($cart_currency_symbol_pos == 'right_space') {
		$cart_currency = ' ' . $cart_currency_symbol;
	}
	
	
	$cart_price = str_replace($cart_currency, '', $cart_subtotal);
	
	
	$cart_subtotal_html = '';
	
	
	if ($cart_currency_symbol_pos == 'left') {
		$cart_subtotal_html .= '<span class="currency">' . esc_html($cart_currency_symbol) . '</span>' . esc_html($cart_price);
	} elseif ($cart_currency_symbol_pos == 'right') {
		$cart_subtotal_html .= esc_html($cart_price) . '<span class="currency">' . esc_html($cart_currency_symbol) . '</span>';
	} elseif ($cart_currency_symbol_pos == 'left_space') {
		$cart_subtotal_html .= '<span class="currency">' . esc_html($cart_currency_symbol) . '</span> ' . esc_html($cart_price);
	} elseif ($cart_currency_symbol_pos == 'right_space') {
		$cart_subtotal_html .= esc_html($cart_price) . ' <span class="currency">' . esc_html($cart_currency_symbol) . '</span>';
	}
	
	if (isset($cmsmasters_option['kids-r-us' . '_woocommerce_cart_dropdown']) &&
		$cmsmasters_option['kids-r-us' . '_woocommerce_cart_dropdown']
	) {
		echo '<div class="cmsmasters_dynamic_cart_wrap">' . 
			'<div class="cmsmasters_dynamic_cart">' .  
				'<a href="' . esc_url(wc_get_cart_url()) . '" class="cmsmasters_dynamic_cart_button cmsmasters_theme_icon_basket"><span>' . esc_html($cart_count) . '</span></a>' . 
				'<div class="widget_shopping_cart_content"></div>' . 
			'</div>' . 
		'</div>';
	}
}


/* Add to Cart Button */
function kids_r_us_woocommerce_add_to_cart_button($args = array()) {
	global $product;
	
	if ( $product ) {
		$defaults = array(
			'quantity' => 1,
			'class'    => implode( ' ', array_filter( array(
					'button',
					'product_type_' . $product->get_type(),
					$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button button_to_cart cmsmasters_add_to_cart_button' : '',
					$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : ''
			) ) )
		);

		$args = apply_filters( 'woocommerce_loop_add_to_cart_args', wp_parse_args( $args, $defaults ), $product );
		
		extract($args);
		
		echo '<div class="cmsmasters_cart_button_wrap">' . 
		sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s button_to_cart">%s</a>',
			esc_url( $product->add_to_cart_url() ),
			esc_attr( isset( $quantity ) ? $quantity : 1 ),
			esc_attr( $product->get_id() ),
			esc_attr( $product->get_sku() ),
			esc_attr( isset( $class ) ? $class : 'button' ),
			'<span>' . esc_html( $product->add_to_cart_text() ) . '</span>'
		) . 
		'</div>';
	}
}


function kids_r_us_woocommerce_yith_button(){
	global $product;
	
	$is_in_stock = $product->is_in_stock();
	
	if ( CMSMASTERS_WCWL || $is_in_stock ) {
		echo '<div class="button_to_cart_wrap">' . 
		'<div class="bd_inner">';
		/* WooCommerce Wishlist add to button */
		if (CMSMASTERS_WCWL) {
			kids_r_us_add_wishlist_button();
		}
		
		
		if ($is_in_stock) {
			kids_r_us_woocommerce_add_to_cart_button();
		}
			
		
		if (CMSMASTERS_WCQV && $is_in_stock) {
			kids_r_us_quick_view_button();
		}
			
		echo '</div>' . 
  '</div>';
	}
}


/* Rating */
function kids_r_us_woocommerce_rating($icon_trans = '', $icon_color = '', $in_review = false, $comment_id = '', $show = true) {
	global $product;
	
	
	if (get_option( 'woocommerce_enable_review_rating') === 'no') {
		return;
	}
	
	
	$rating = (($in_review) ? intval(get_comment_meta($comment_id, 'rating', true)) : ($product->get_average_rating() ? $product->get_average_rating() : '0'));
	
	$itemtype = $in_review ? 'Rating' : 'AggregateRating';
	
	
	$out = "
<div class=\"cmsmasters_star_rating_wrap\">
	<div class=\"cmsmasters_star_rating_text\">" . esc_html__('Rating', 'kids-r-us') . "</div>
	<div class=\"cmsmasters_star_rating\" itemscope itemtype=\"//schema.org/{$itemtype}\" title=\"" . sprintf(esc_html__('Rated %s out of 5', 'kids-r-us'), $rating) . "\">
	<div class=\"cmsmasters_star_trans_wrap\">
		<span class=\"{$icon_trans} cmsmasters_star\"></span>
		<span class=\"{$icon_trans} cmsmasters_star\"></span>
		<span class=\"{$icon_trans} cmsmasters_star\"></span>
		<span class=\"{$icon_trans} cmsmasters_star\"></span>
		<span class=\"{$icon_trans} cmsmasters_star\"></span>
	</div>
	<div class=\"cmsmasters_star_color_wrap\" data-width=\"width:" . (($rating / 5) * 100) . "%\">
		<div class=\"cmsmasters_star_color_inner\">
			<span class=\"{$icon_color} cmsmasters_star\"></span>
			<span class=\"{$icon_color} cmsmasters_star\"></span>
			<span class=\"{$icon_color} cmsmasters_star\"></span>
			<span class=\"{$icon_color} cmsmasters_star\"></span>
			<span class=\"{$icon_color} cmsmasters_star\"></span>
		</div>
	</div>
	<span class=\"rating dn\"><strong itemprop=\"ratingValue\">" . esc_html($rating) . "</strong> " . esc_html__('out of 5', 'kids-r-us') . "</span>
	</div>
</div>
";
	
	
	if ($show) {
		echo kids_r_us_return_content($out);
	} else {
		return $out;
	}
}


/* Price Format */
function kids_r_us_woocommerce_price_format($format, $currency_pos) {
	$format = '%2$s<span>%1$s</span>';

	switch ( $currency_pos ) {
		case 'left' :
			$format = '<span>%1$s</span>%2$s';
		break;
		case 'right' :
			$format = '%2$s<span>%1$s</span>';
		break;
		case 'left_space' :
			$format = '<span>%1$s&nbsp;</span>%2$s';
		break;
		case 'right_space' :
			$format = '%2$s<span>&nbsp;%1$s</span>';
		break;
	}
	
	return $format;
}
 
add_action('woocommerce_price_format', 'kids_r_us_woocommerce_price_format', 1, 2);


/* Woocommerce Onsale Filter */
add_filter('woocommerce_sale_flash', 'kids_r_us_woocommerce_change_on_sale');

function kids_r_us_woocommerce_change_on_sale() {
	return '<span class="onsale"><span>' . esc_html__('Sale', 'kids-r-us') . '</span></span>';
}


/* Woocommerce Dynamic cart count update after ajax */
function kids_r_us_woocommerce_header_add_to_cart_count($dynamic_count) {
	global $woocommerce;
	
	ob_start();
	
	?>
	<span><?php echo kids_r_us_return_content($woocommerce->cart->cart_contents_count); ?></span>
	<?php
	
	$dynamic_count['.cmsmasters_dynamic_cart_button span'] = ob_get_clean();
	
	return $dynamic_count;
}

add_filter('woocommerce_add_to_cart_fragments', 'kids_r_us_woocommerce_header_add_to_cart_count');


/* Woocommerce Header Cart */
function kids_r_us_company_woocommerce_header_cart_link() {
	global $woocommerce;
	
	
	$cart_count = $woocommerce->cart->get_cart_contents_count();
	
	
	echo '<a href="' . esc_url(wc_get_cart_url()) . '" class="cmsmasters_header_cart_link">' . 
		'<span class="count_wrap cmsmasters_icon_custom_basket">' . 
			'<span class="count cmsmasters_dynamic_cart_count">' . esc_html($cart_count) . '</span>' . 
		'</span>' . 
	'</a>';
}
