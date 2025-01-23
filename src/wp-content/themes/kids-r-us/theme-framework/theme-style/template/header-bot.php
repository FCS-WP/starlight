<?php 
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version		1.0.0
 * 
 * Header Bottom Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = kids_r_us_get_global_options();


if ($cmsmasters_option['kids-r-us' . '_header_styles'] != 'default') {
	echo '<div class="header_bot" data-height="' . esc_attr($cmsmasters_option['kids-r-us' . '_header_bot_height']) . '">' . 
		'<div class="header_bot_outer">' . 
			'<div class="header_bot_inner">';
				do_action('cmsmasters_before_header_bot', $cmsmasters_option);
				
					
				if ($cmsmasters_option['kids-r-us' . '_header_styles'] == 'c_nav') {
					echo '<div class="wrap_nav_interface">';
					
						
						if (CMSMASTERS_WOOCOMMERCE || CMSMASTERS_WCWL || $cmsmasters_option['kids-r-us' . '_header_search']){
							echo '<div class="header_bot_interface">';
						
						
								if (CMSMASTERS_WCWL) {
									kids_r_us_shop_wishlist_count();
								}
								
								
								if (CMSMASTERS_WOOCOMMERCE) {
									kids_r_us_woocommerce_cart_dropdown($cmsmasters_option); 
								}
								

								if (
									$cmsmasters_option['kids-r-us' . '_header_search']
								) {
									echo '<div class="mid_search_but_wrap">' . 
										'<a href="' . esc_js("javascript:void(0)") . '" class="mid_search_but cmsmasters_header_search_but cmsmasters_theme_icon_search"></a>' . 
									'</div>';
								}

							echo '</div>';
						}
					}
					
					
					if ($cmsmasters_option['kids-r-us' . '_header_styles'] == 'c_nav') {
						echo '<div class="resp_bot_nav_wrap">' . 
							'<div class="resp_bot_nav_outer">' . 
								'<a class="responsive_nav resp_bot_nav" href="' . esc_js("javascript:void(0)") . '">
									<span></span>
								</a>' . 
							'</div>' . 
						'</div>';
					}
						
						
						echo '<!-- Start Navigation -->' . 
						'<div class="bot_nav_wrap">' . 
							'<nav>';
								
								$nav_args = array( 
									'theme_location' => 	'primary', 
									'menu_id' => 			'navigation', 
									'menu_class' => 		'bot_nav navigation', 
									'link_before' => 		'<span class="nav_item_wrap">', 
									'link_after' => 		'</span>', 
									'fallback_cb' =>      false
								);
								
								
								if (class_exists('Walker_Cmsmasters_Nav_Mega_Menu')) {
									$nav_args['walker'] = new Walker_Cmsmasters_Nav_Mega_Menu();
								}
								
								
								wp_nav_menu($nav_args);
								
							echo '</nav>' . 
					'</div>' . 
						'<!-- Finish Navigation -->';
						
						
				if ($cmsmasters_option['kids-r-us' . '_header_styles'] == 'c_nav') {
					echo '</div>';
				}
					
					
				do_action('cmsmasters_after_header_bot', $cmsmasters_option);
			echo '</div>' . 
		'</div>' . 
	'</div>';
}

