<?php
/**
 * @cmsmasters_package 	Kids R Us
 * @cmsmasters_version 	1.0.0
 */


global $post, $product;

$cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );

?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<span class="sku_wrapper"><span class="meta_name"><?php esc_html_e( 'SKU:', 'kids-r-us' ); ?></span> <span class="sku"><?php echo kids_r_us_return_content($sku = $product->get_sku()) ? $sku : esc_html__( 'N/A', 'kids-r-us' ); ?></span></span>

	<?php endif; ?>

	<?php
	if (get_the_terms($product->get_id(), 'product_cat')) {
		echo '<span class="posted_in">' . 
			'<span class="meta_name">' . esc_html(_n('Category:', 'Categories:', $cat_count, 'kids-r-us')) . '</span> ' . 
			kids_r_us_get_the_category_list($product->get_id(), 'product_cat', ', ') . 
		'</span>';
	}
	?>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . '<span class="meta_name">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'kids-r-us' ) . '</span> ', '</span>' ); ?>
	
	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
