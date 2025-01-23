<?php
/**
 * @cmsmasters_package 	Kids R Us
 * @cmsmasters_version 	1.0.0
 */


$cmsmasters_product_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_product_sharing_box', true);
$title = get_option( 'yith-wcqv-product-show-title') == 'yes' ;
$price = get_option( 'yith-wcqv-product-show-price') == 'yes' ;
$rating = get_option( 'yith-wcqv-product-show-rating') == 'yes';
$excerpt = get_option( 'yith-wcqv-product-show-excerpt') == 'yes';
$button_add =  get_option( 'yith-wcqv-product-show-add-to-cart') == 'yes';
$details_button = get_option( 'yith-wcqv-details-button') == 'yes'; 
$wcwl = get_option( 'yith-wcqv-product-show-wishlist', 'yes' ) == 'yes';
$share = get_option( 'yith-wcqv-enable-share' ) == 'yes';
$meta = get_option( 'yith-wcqv-product-show-meta') == 'yes'; 

while ( have_posts() ) : the_post(); ?>

	<div class="product">
		
		<?php
		if ( defined( 'YITH_WCQV_PREMIUM' ) ) {
			if ( !post_password_required() ) {
				?>
				<div id="product-<?php the_ID(); ?>" <?php post_class( 'product' ); ?>>
					
					<?php do_action( 'yith_wcqv_before_product_summary' ); ?>
					
					<div class="summary entry-summary">
						<?php do_action( 'yith_wcqv_product_image' ); ?>
						<div class="summary-content">
							<div class="cmsmasters_product_title_info_wrap">
								<?php
								if ($title) {
									echo '<div class="cmsmasters_product_title_wrap">';
										woocommerce_template_single_title();
									echo '</div>';
								} 
								?>
								
								
								<?php
								if ($price || $rating) {
									echo ' <div class="cmsmasters_product_info_wrap">';
						
										($price) ? woocommerce_template_single_price() : '';
										
										($rating) ? kids_r_us_woocommerce_rating('cmsmasters_theme_icon_star_empty', 'cmsmasters_theme_icon_star_full') : '';
									
									echo '</div>';	
								}
								?>
							</div>
							
							
							<?php
							if ($excerpt) {
								echo '<div class="cmsmasters_product_content">';
									if( get_option( 'yith-wcqv-product-full-description' ) == 'no' ) {
										woocommerce_template_single_excerpt();
									}
									else {
										kids_r_us_get_full_description();
									}
								echo '</div>';
							}
							?>
							
							
							<?php
							($meta) ? woocommerce_template_single_meta() : '';
							
							($button_add) ? woocommerce_template_single_add_to_cart() : '';
							
							if (CMSMASTERS_WCWL && $wcwl) {
								kids_r_us_add_wishlist_button();
							}
							
							($details_button) ? kids_r_us_yith_add_view_details_button() : ''; 
							
							($share) ? kids_r_us_yith_quick_view_share() : '';
							?>
						</div>
					</div>
					
					<?php do_action( 'yith_wcqv_after_product_summary' ); ?>
					
					<?php 
						remove_action( 'yith_wcqv_product_summary', 'woocommerce_template_single_title', 5 ); 
						remove_action( 'yith_wcqv_product_summary', 'woocommerce_template_single_rating', 10 );
						remove_action( 'yith_wcqv_product_summary', 'woocommerce_template_single_price', 15 );
						remove_action( 'yith_wcqv_product_summary', 'woocommerce_template_single_excerpt', 20 );
						remove_action( 'yith_wcqv_product_summary', 'get_full_description', 20 );
						remove_action( 'yith_wcqv_product_summary', 'woocommerce_template_single_add_to_cart', 25 );
						remove_action( 'yith_wcqv_product_summary', array( $this, 'yith_wishlist_quick_view' ), 27 );
						remove_action( 'yith_wcqv_product_summary',  array( $this, 'yith_add_view_details_button' ), 30 );
						remove_action( 'yith_wcqv_product_summary', 'woocommerce_template_single_meta', 30 );
						remove_action( 'yith_wcqv_product_summary', array( $this, 'yith_quick_view_share' ), 35 );
					?>
					
				</div>
				<?php
			} else {
				echo get_the_password_form();
			}
		} else {
			?>
			<div id="product-<?php the_ID(); ?>" <?php post_class('product'); ?>>
			
				<?php do_action( 'yith_wcqv_product_image' ); ?>
				
				<div class="summary entry-summary">
					<div class="summary-content">
						<div class="cmsmasters_product_title_info_wrap">
							<div class="cmsmasters_product_title_wrap">
								<?php woocommerce_template_single_title(); ?>
							</div>
							<div class="cmsmasters_product_info_wrap">
								<?php 
								woocommerce_template_single_price();
								
								kids_r_us_woocommerce_rating('cmsmasters_theme_icon_star_empty', 'cmsmasters_theme_icon_star_full');
								?>
							</div>
						</div>
						<div class="cmsmasters_product_content">
							<?php woocommerce_template_single_excerpt(); ?>
						</div>
						<?php
						woocommerce_template_single_add_to_cart();
						
						woocommerce_template_single_sharing();
						
						if ($cmsmasters_product_sharing_box == 'true') {
							kids_r_us_sharing_box();
						}
						
						if (CMSMASTERS_WCWL) {
							kids_r_us_add_wishlist_button();
						}
						?>
					</div>
				</div>
				
			</div>
			<?php
		}
		?>
		
	</div>

<?php endwhile; // end of the loop./ end of the loop./ end of the loop./ end of the loop.