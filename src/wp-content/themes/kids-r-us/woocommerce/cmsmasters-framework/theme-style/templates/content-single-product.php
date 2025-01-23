<?php
/**
 * @cmsmasters_package 	Kids R Us
 * @cmsmasters_version 	1.1.4
 */


global $product;

$attachment_ids = $product->get_gallery_image_ids();
$css_class = '';
$cmsmasters_product_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_product_sharing_box', true);


if($attachment_ids) {
	$css_class .= 'cmsmasters_product_has_galery';
}

list($cmsmasters_layout) = kids_r_us_theme_page_layout_scheme();

if(!function_exists('kids_r_us_related_products_args')) {
	function kids_r_us_related_products_args($args) {
		$args['posts_per_page'] = 3;
		$args['columns'] = 3;
		
		return $args;
	}
}


/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );


if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

$cmsmasters_id = get_the_ID();
$cmsmasters_heading = get_post_meta($cmsmasters_id, 'cmsmasters_heading', true);
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product, $css_class ); ?>>
	<div class="cmsmasters_single_product">
		<div class="cmsmasters_product_left_column">
		<?php
			$availability = $product->get_availability();
			$out_of_stock = esc_attr($availability['class']) == 'out-of-stock';
			$in_stock = esc_attr($availability['class']) == 'in-stock';
			$manage_stock = get_post_meta(get_the_ID(), '_manage_stock', true) === 'yes';
			$onsale = get_post_meta(get_the_ID(), '_sale_price', true);
			
			if ($out_of_stock || $in_stock) {
				echo apply_filters('woocommerce_stock_html', '<span class="' . ($onsale && $manage_stock ? 'bottom' : 'top') . ' ' . ($manage_stock ? 'stock db' : 'dn' ) .' '. esc_attr( $availability['class'] ) . '"><span>' . esc_html( $availability['availability'] ) . '</span></span>', $availability['availability']);
			}
			
			/**
			 * Hook: woocommerce_before_single_product_summary.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			
			echo  '<div class="cmsmasters_product_images_wrap">';
				do_action( 'woocommerce_before_single_product_summary' );
			echo  '</div>';

			if($cmsmasters_product_sharing_box) {
				kids_r_us_sharing_box(esc_html__('Share it:', 'kids-r-us'), 'h4');
			}
			
		?>
		</div>
		<div class="summary entry-summary cmsmasters_product_right_column">
			<div class="cmsmasters_product_title_info_wrap">
				<?php
				
				if ($cmsmasters_heading == 'disabled') {
					echo '<h1 class="product_title entry-title">' . get_the_title() . '</h1>';
				} elseif ($cmsmasters_heading == 'custom') {
					echo '<h2 class="product_title entry-title">' . get_the_title() . '</h2>';
				}
				
				woocommerce_template_single_price();
				
				kids_r_us_woocommerce_rating('cmsmasters_theme_icon_star_empty', 'cmsmasters_theme_icon_star_full');
				?>
			</div>
			<div class="cmsmasters_product_content">
				<?php woocommerce_template_single_excerpt(); ?>
			</div>
			<?php
			woocommerce_template_single_add_to_cart();
			
			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
			
			do_action( 'woocommerce_single_product_summary' );
				
				
			woocommerce_template_single_meta();
			
			woocommerce_template_single_sharing();
		
			?>
		</div>
	</div>
	<?php
		if ($cmsmasters_layout != 'fullwidth') {
			add_filter('woocommerce_output_related_products_args', 'kids_r_us_related_products_args');
		}
		
		/**
		 * Hook: woocommerce_after_single_product_summary.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
