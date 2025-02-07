<?php 
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version		1.0.0
 * 
 * Header Middle Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = kids_r_us_get_global_options();


echo '<div class="header_mid" data-height="' . esc_attr($cmsmasters_option['kids-r-us' . '_header_mid_height']) . '">' . 
	'<div class="header_mid_outer">' . 
		'<div class="header_mid_inner">';
			do_action('cmsmasters_before_header_mid', $cmsmasters_option);
			
			do_action('cmsmasters_before_logo', $cmsmasters_option);
			
			
			if (
				$cmsmasters_option['kids-r-us' . '_header_styles'] != 'default' && 
				$cmsmasters_option['kids-r-us' . '_header_styles'] != 'c_nav'
			) { 
				if (
					$cmsmasters_option['kids-r-us' . '_header_add_cont'] == 'cust_html' && 
					$cmsmasters_option['kids-r-us' . '_header_add_cont_cust_html'] !== ''
				) {
					echo '<div class="slogan_wrap">' . 
						'<div class="slogan_wrap_inner">' . 
							'<div class="slogan_wrap_text">' . 
								stripslashes($cmsmasters_option['kids-r-us' . '_header_add_cont_cust_html']) . 
							'</div>' . 
						'</div>' . 
					'</div>';
				} elseif (
					$cmsmasters_option['kids-r-us' . '_header_add_cont'] == 'social' && 
					isset($cmsmasters_option['kids-r-us' . '_social_icons'])
				) {
					kids_r_us_social_icons();
				}
			}
			
			
			echo '<div class="logo_wrap">';
				
				kids_r_us_logo();
				
			echo '</div>';
			do_action('cmsmasters_after_logo', $cmsmasters_option);
			
			if ($cmsmasters_option['kids-r-us' . '_header_styles'] != 'c_nav') {
				echo '<div class="header_mid_interface">';
				
				
					if ($cmsmasters_option['kids-r-us' . '_header_styles'] == 'default' || 
							$cmsmasters_option['kids-r-us' . '_header_styles'] == 'l_nav' ||
							$cmsmasters_option['kids-r-us' . '_header_styles'] == 'r_nav') {
						echo '<div class="resp_mid_nav_wrap">' . 
							'<div class="resp_mid_nav_outer">' . 
								'<a class="responsive_nav resp_mid_nav" href="' . esc_js("javascript:void(0)") . '">
									<span></span>
								</a>' . 
							'</div>' . 
						'</div>';
					}
					
					
					if (CMSMASTERS_WOOCOMMERCE) {
						kids_r_us_woocommerce_cart_dropdown($cmsmasters_option); 
					}
					
					
					if (CMSMASTERS_WCWL) {
						kids_r_us_shop_wishlist_count();
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
			
			
			if ($cmsmasters_option['kids-r-us' . '_header_styles'] == 'default') {
				echo '<!-- Start Navigation -->' . 
				'<div class="mid_nav_wrap">' . 
					'<nav>';
						
						$nav_args = array( 
							'theme_location' => 	'primary', 
							'menu_id' => 			'navigation', 
							'menu_class' => 		'mid_nav navigation', 
							'link_before' => 		'<span class="nav_item_wrap">', 
							'link_after' => 		'</span>', 
							'fallback_cb' =>         false
						);
						
						
						if (class_exists('Walker_Cmsmasters_Nav_Mega_Menu')) {
							$nav_args['walker'] = new Walker_Cmsmasters_Nav_Mega_Menu();
						}
						
						
						wp_nav_menu($nav_args);
						
					echo '</nav>' . 
				'</div>' . 
				'<!-- Finish Navigation -->';
			}
			
			
			do_action('cmsmasters_after_header_mid', $cmsmasters_option);
		echo '</div>' . 
	'</div>' . 
'</div>';

