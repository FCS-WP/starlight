<?php 
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version		1.1.2
 * 
 * Theme Settings Defaults
 * Created by CMSMasters
 * 
 */


/* Theme Settings General Default Values */
if (!function_exists('kids_r_us_settings_general_defaults')) {

function kids_r_us_settings_general_defaults($id = false) {
	$settings = array( 
		'general' => array( 
			'kids-r-us' . '_theme_layout' => 				'liquid', 
			'kids-r-us' . '_logo_type' => 					'image', 
			'kids-r-us' . '_logo_url' => 					'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo.png', 
			'kids-r-us' . '_logo_url_retina' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_retina.png', 
			'kids-r-us' . '_logo_title' => 					get_bloginfo('name') ? get_bloginfo('name') : 'Kids R Us', 
			'kids-r-us' . '_logo_subtitle' => 				'', 
			'kids-r-us' . '_logo_custom_color' => 			0, 
			'kids-r-us' . '_logo_title_color' => 			'', 
			'kids-r-us' . '_logo_subtitle_color' =>			'' 
		), 
		'bg' => array( 
			'kids-r-us' . '_bg_col' => 						'#FFFAF7', 
			'kids-r-us' . '_bg_img_enable' =>				0, 
			'kids-r-us' . '_bg_img' => 						'', 
			'kids-r-us' . '_bg_rep' => 						'no-repeat', 
			'kids-r-us' . '_bg_pos' => 						'top center', 
			'kids-r-us' . '_bg_att' => 						'scroll', 
			'kids-r-us' . '_bg_size' => 					'cover' 
		), 
		'header' => array( 
			'kids-r-us' . '_fixed_header' => 				1, 
			'kids-r-us' . '_header_overlaps' => 			0, 
			'kids-r-us' . '_header_top_line' => 			0, 
			'kids-r-us' . '_header_top_height' => 			'40', 
			'kids-r-us' . '_header_top_line_short_info' => 	'', 
			'kids-r-us' . '_header_top_line_add_cont' => 	'social', 
			'kids-r-us' . '_header_styles' => 				'default', 
			'kids-r-us' . '_header_mid_height' => 			'146', 
			'kids-r-us' . '_header_bot_height' => 			'68', 
			'kids-r-us' . '_header_search' => 				1, 
			'kids-r-us' . '_header_add_cont' => 			'social', 
			'kids-r-us' . '_header_add_cont_cust_html' => 	'',
			'kids-r-us' . '_woocommerce_cart_dropdown' => 	0
 
		), 
		'content' => array( 
			'kids-r-us' . '_layout' => 						'r_sidebar', 
			'kids-r-us' . '_archives_layout' => 			'r_sidebar', 
			'kids-r-us' . '_search_layout' => 				'r_sidebar', 
			'kids-r-us' . '_other_layout' => 				'r_sidebar', 
			'kids-r-us' . '_heading_alignment' => 			'center', 
			'kids-r-us' . '_heading_scheme' => 				'default', 
			'kids-r-us' . '_heading_bg_image_enable' => 	0, 
			'kids-r-us' . '_heading_bg_image' => 			'', 
			'kids-r-us' . '_heading_bg_repeat' => 			'no-repeat', 
			'kids-r-us' . '_heading_bg_attachment' => 		'scroll', 
			'kids-r-us' . '_heading_bg_size' => 			'cover', 
			'kids-r-us' . '_heading_bg_color' => 			'', 
			'kids-r-us' . '_heading_height' => 				'210', 
			'kids-r-us' . '_breadcrumbs' => 				1, 
			'kids-r-us' . '_bottom_scheme' => 				'footer', 
			'kids-r-us' . '_bottom_sidebar' => 				0, 
			'kids-r-us' . '_bottom_sidebar_layout' => 		'14141414' 
		), 
		'footer' => array( 
			'kids-r-us' . '_footer_scheme' => 				'footer', 
			'kids-r-us' . '_footer_type' => 				'default', 
			'kids-r-us' . '_footer_additional_content' => 	'nav', 
			'kids-r-us' . '_footer_logo' => 				1, 
			'kids-r-us' . '_footer_logo_url' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer.png', 
			'kids-r-us' . '_footer_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer_retina.png', 
			'kids-r-us' . '_footer_nav' => 					1, 
			'kids-r-us' . '_footer_social' => 				1, 
			'kids-r-us' . '_footer_html' => 					'', 
			'kids-r-us' . '_footer_copyright' => 			'Kids R Us' . ' &copy; ' . date('Y') . ' / ' . esc_html__('All Rights Reserved', 'kids-r-us') 
		) 
	);
	
	
	$settings = apply_filters('kids_r_us_settings_general_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Theme Settings Fonts Default Values */
if (!function_exists('kids_r_us_settings_font_defaults')) {

function kids_r_us_settings_font_defaults($id = false) {
	$settings = array( 
		'content' => array( 
			'kids-r-us' . '_content_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Quicksand:400,500,700', 
				'font_size' => 			'16', 
				'line_height' => 		'26', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal' 
			) 
		), 
		'link' => array( 
			'kids-r-us' . '_link_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Quicksand:400,500,700', 
				'font_size' => 			'16', 
				'line_height' => 		'26', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'kids-r-us' . '_link_hover_decoration' => 	'none' 
		), 
		'nav' => array( 
			'kids-r-us' . '_nav_title_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Francois+One:400', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'kids-r-us' . '_nav_dropdown_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Quicksand:400,500,700',  
				'font_size' => 			'14', 
				'line_height' => 		'18', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			) 
		), 
		'heading' => array( 
			'kids-r-us' . '_h1_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Gilda+Display:400', 
				'font_size' => 			'42', 
				'line_height' => 		'50', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'kids-r-us' . '_h2_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Gilda+Display:400', 
				'font_size' => 			'34', 
				'line_height' => 		'42', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'kids-r-us' . '_h3_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Francois+One:400', 
				'font_size' => 			'22', 
				'line_height' => 		'28', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'kids-r-us' . '_h4_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Gilda+Display:400', 
				'font_size' => 			'20', 
				'line_height' => 		'28', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'kids-r-us' . '_h5_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Francois+One:400', 
				'font_size' => 			'15', 
				'line_height' => 		'22', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'kids-r-us' . '_h6_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Quicksand:400,500,700', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			) 
		), 
		'other' => array( 
			'kids-r-us' . '_button_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Francois+One:400', 
				'font_size' => 			'14', 
				'line_height' => 		'52', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'kids-r-us' . '_small_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Quicksand:400,500,700', 
				'font_size' => 			'14', 
				'line_height' => 		'18', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'kids-r-us' . '_input_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Quicksand:400,500,700', 
				'font_size' => 			'16', 
				'line_height' => 		'20', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal' 
			), 
			'kids-r-us' . '_quote_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Gilda+Display:400', 
				'font_size' => 			'24', 
				'line_height' => 		'38', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal' 
			) 
		),
		'google' => array( 
			'kids-r-us' . '_google_web_fonts' => array( 
				'Quicksand:400,500,700|Quicksand',
				'Francois+One:400|Francois One',
				'Gilda+Display:400|Gilda Display'
			) 
		)  
	);
	
		
	$settings = apply_filters('kids_r_us_settings_font_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {

function cmsmasters_color_picker_palettes() {
	$palettes = array( 
		'#747475', 
		'#3A6084', 
		'#F1755C', 
		'#486683', 
		'#FFFAF7', 
		'#FFFFFF', 
		'#D6D6D6'  
	);
	
	
	return apply_filters('cmsmasters_color_picker_palettes_filter', $palettes);
}

}



// Theme Settings Color Schemes Default Colors
if (!function_exists('kids_r_us_color_schemes_defaults')) {

function kids_r_us_color_schemes_defaults($id = false) {
	$settings = array( 
		'default' => array( // content default color scheme
			'color' => 		'#747475', 
			'link' => 		'#3A6084', 
			'hover' => 		'#F1755C', 
			'heading' => 	'#486683', 
			'bg' => 		'#FFFAF7', 
			'alternate' => 	'#ffffff', 
			'border' => 	'#D6D6D6' 
		), 
		'header' => array( // Header color scheme
			'mid_color' => 		'#747475', 
			'mid_link' => 		'#3A6084', 
			'mid_hover' => 		'#F1755C', 
			'mid_bg' => 		'#FFFAF7', 
			'mid_bg_scroll' => 	'#FFFFFF', 
			'mid_border' => 	'#D6D6D6', 
			'bot_color' => 		'#747475', 
			'bot_link' => 		'#3A6084', 
			'bot_hover' => 		'#F1755C', 
			'bot_bg' => 		'#FFFAF7', 
			'bot_bg_scroll' => 	'#FFFFFF', 
			'bot_border' => 	'#D6D6D6' 
		), 
		'navigation' => array( // Navigation color scheme
			'title_link' => 			'#486683', 
			'title_link_hover' => 		'#F1755C', 
			'title_link_current' => 	'#F1755C', 
			'title_link_subtitle' => 	'#C4B5B0', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_bg_current' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_text' => 			'#747475', 
			'dropdown_bg' => 			'#FFFFFF', 
			'dropdown_border' => 		'#E1E1E1', 
			'dropdown_link' => 			'#3F6F9E', 
			'dropdown_link_hover' => 	'#F1755C', 
			'dropdown_link_subtitle' => '#C4B5B0', 
			'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
			'dropdown_link_border' => 	'#e1e1e1' 
		), 
		'header_top' => array( // Header Top color scheme
			'color' => 					'rgba(255,255,255,0.9)', 
			'link' => 					'#ffffff', 
			'hover' => 					'rgba(255,255,255,0.6)', 
			'bg' => 					'#E5745D', 
			'border' => 				'rgba(255,255,255,0)', 
			'title_link' => 			'#ffffff', 
			'title_link_hover' => 		'rgba(255,255,255,0.6)', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0.2)', 
			'dropdown_bg' => 			'#D66A54', 
			'dropdown_border' => 		'rgba(255,255,255,0)', 
			'dropdown_link' => 			'#ffffff', 
			'dropdown_link_hover' => 	'rgba(255,255,255,0.6)', 
			'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
			'dropdown_link_border' => 	'rgba(255,255,255,0)' 
		), 
		'footer' => array( // Footer color scheme
			'color' => 		'#747475', 
			'link' => 		'#3A6084', 
			'hover' => 		'#F1755C', 
			'heading' => 	'#486683', 
			'bg' => 		'#F2E7DE', 
			'alternate' => 	'#FFFFFF', 
			'border' => 	'rgba(255,255,255,0)' 
		), 
		'first' => array( // custom color scheme 1
			'color' => 		'#595959', 
			'link' => 		'#ff6c2f', 
			'hover' => 		'#3b3b3b', 
			'heading' => 	'#292929', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#ffffff', 
			'border' => 	'#e4e4e4' 
		), 
		'second' => array( // custom color scheme 2
			'color' => 		'#878787', 
			'link' => 		'#ff6c2f', 
			'hover' => 		'#3b3b3b', 
			'heading' => 	'#292929', 
			'bg' => 		'#fbfbfb', 
			'alternate' => 	'#ffffff', 
			'border' => 	'#e4e4e4' 
		), 
		'third' => array( // custom color scheme 3
			'color' => 		'#878787', 
			'link' => 		'#ff6c2f', 
			'hover' => 		'#3b3b3b', 
			'heading' => 	'#292929', 
			'bg' => 		'#fbfbfb', 
			'alternate' => 	'#ffffff', 
			'border' => 	'#e4e4e4' 
		) 
	);
	
	
	$settings = apply_filters('kids_r_us_color_schemes_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Elements Default Values
if (!function_exists('kids_r_us_settings_element_defaults')) {

function kids_r_us_settings_element_defaults($id = false) {
	$settings = array( 
		'sidebar' => array( 
			'kids-r-us' . '_sidebar' => 	'' 
		), 
		'icon' => array( 
			'kids-r-us' . '_social_icons' => array( 
				'cmsmasters-icon-facebook-1|#|' . esc_html__('Facebook', 'kids-r-us') . '|false||',  
				'cmsmasters-icon-instagram|#|' . esc_html__('Instagram', 'kids-r-us') . '|false||', 
				'cmsmasters-icon-twitter|#|' . esc_html__('Twitter', 'kids-r-us') . '|false||'
			) 
		), 
		'lightbox' => array( 
			'kids-r-us' . '_ilightbox_skin' => 					'dark', 
			'kids-r-us' . '_ilightbox_path' => 					'vertical', 
			'kids-r-us' . '_ilightbox_infinite' => 				0, 
			'kids-r-us' . '_ilightbox_aspect_ratio' => 			1, 
			'kids-r-us' . '_ilightbox_mobile_optimizer' => 		1, 
			'kids-r-us' . '_ilightbox_max_scale' => 			1, 
			'kids-r-us' . '_ilightbox_min_scale' => 			0.2, 
			'kids-r-us' . '_ilightbox_inner_toolbar' => 		0, 
			'kids-r-us' . '_ilightbox_smart_recognition' => 	0, 
			'kids-r-us' . '_ilightbox_fullscreen_one_slide' => 	0, 
			'kids-r-us' . '_ilightbox_fullscreen_viewport' => 	'center', 
			'kids-r-us' . '_ilightbox_controls_toolbar' => 		1, 
			'kids-r-us' . '_ilightbox_controls_arrows' => 		0, 
			'kids-r-us' . '_ilightbox_controls_fullscreen' => 	1, 
			'kids-r-us' . '_ilightbox_controls_thumbnail' => 	1, 
			'kids-r-us' . '_ilightbox_controls_keyboard' => 	1, 
			'kids-r-us' . '_ilightbox_controls_mousewheel' => 	1, 
			'kids-r-us' . '_ilightbox_controls_swipe' => 		1, 
			'kids-r-us' . '_ilightbox_controls_slideshow' => 	0 
		), 
		'sitemap' => array( 
			'kids-r-us' . '_sitemap_nav' => 		1, 
			'kids-r-us' . '_sitemap_categs' => 		1, 
			'kids-r-us' . '_sitemap_tags' => 		1, 
			'kids-r-us' . '_sitemap_month' => 		1, 
			'kids-r-us' . '_sitemap_pj_categs' => 	1, 
			'kids-r-us' . '_sitemap_pj_tags' => 	1 
		), 
		'error' => array( 
			'kids-r-us' . '_error_color' => 			'#ffff', 
			'kids-r-us' . '_error_bg_color' => 			'#FFFAF7', 
			'kids-r-us' . '_error_bg_img_enable' => 	1, 
			'kids-r-us' . '_error_bg_image' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/404.jpg', 
			'kids-r-us' . '_error_bg_rep' => 			'no-repeat', 
			'kids-r-us' . '_error_bg_pos' => 			'top center', 
			'kids-r-us' . '_error_bg_att' => 			'scroll', 
			'kids-r-us' . '_error_bg_size' => 			'cover', 
			'kids-r-us' . '_error_search' => 			1, 
			'kids-r-us' . '_error_sitemap_button' => 	1, 
			'kids-r-us' . '_error_sitemap_link' => 		'' 
		), 
		'code' => array( 
			'kids-r-us' . '_custom_css' => 				'', 
			'kids-r-us' . '_custom_js' => 				'', 
			'kids-r-us' . '_gmap_api_key' => 			'', 
			'kids-r-us' . '_twitter_access_data' => 	array(), 
		), 
		'recaptcha' => array( 
			'kids-r-us' . '_recaptcha_public_key' => 	'', 
			'kids-r-us' . '_recaptcha_private_key' => 	'' 
		) 
	);
	
	
	$settings = apply_filters('kids_r_us_settings_element_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Single Posts Default Values
if (!function_exists('kids_r_us_settings_single_defaults')) {

function kids_r_us_settings_single_defaults($id = false) {
	$settings = array( 
		'post' => array( 
			'kids-r-us' . '_blog_post_layout' => 		'fullwidth', 
			'kids-r-us' . '_blog_post_title' => 			1, 
			'kids-r-us' . '_blog_post_date' => 				1, 
			'kids-r-us' . '_blog_post_cat' => 				1, 
			'kids-r-us' . '_blog_post_author' => 			1, 
			'kids-r-us' . '_blog_post_comment' => 			1, 
			'kids-r-us' . '_blog_post_tag' => 				1, 
			'kids-r-us' . '_blog_post_like' => 				1, 
			'kids-r-us' . '_blog_post_nav_box' => 			1, 
			'kids-r-us' . '_blog_post_nav_order_cat' => 	0, 
			'kids-r-us' . '_blog_post_share_box' => 		1, 
			'kids-r-us' . '_blog_post_author_box' => 		1, 
			'kids-r-us' . '_blog_more_posts_box' => 		'popular', 
			'kids-r-us' . '_blog_more_posts_count' => 		'3', 
			'kids-r-us' . '_blog_more_posts_pause' => 		'5' 
		), 
		'project' => array( 
			'kids-r-us' . '_portfolio_project_title' => 			1, 
			'kids-r-us' . '_portfolio_project_details_title' => 	esc_html__('Project details', 'kids-r-us'), 
			'kids-r-us' . '_portfolio_project_date' => 				1, 
			'kids-r-us' . '_portfolio_project_cat' => 				1, 
			'kids-r-us' . '_portfolio_project_author' => 			1, 
			'kids-r-us' . '_portfolio_project_comment' => 			0, 
			'kids-r-us' . '_portfolio_project_tag' => 				0, 
			'kids-r-us' . '_portfolio_project_like' => 				1, 
			'kids-r-us' . '_portfolio_project_link' => 				0, 
			'kids-r-us' . '_portfolio_project_share_box' => 		1, 
			'kids-r-us' . '_portfolio_project_nav_box' => 			1, 
			'kids-r-us' . '_portfolio_project_nav_order_cat' => 	0, 
			'kids-r-us' . '_portfolio_project_author_box' => 		1, 
			'kids-r-us' . '_portfolio_more_projects_box' => 		'popular', 
			'kids-r-us' . '_portfolio_more_projects_count' => 		'4', 
			'kids-r-us' . '_portfolio_more_projects_pause' => 		'5', 
			'kids-r-us' . '_portfolio_project_slug' => 				'project', 
			'kids-r-us' . '_portfolio_pj_categs_slug' => 			'pj-categs', 
			'kids-r-us' . '_portfolio_pj_tags_slug' => 				'pj-tags' 
		), 
		'profile' => array( 
			'kids-r-us' . '_profile_post_title' => 			1, 
			'kids-r-us' . '_profile_post_details_title' => 	esc_html__('Profile details', 'kids-r-us'), 
			'kids-r-us' . '_profile_post_cat' => 			1, 
			'kids-r-us' . '_profile_post_comment' => 		1, 
			'kids-r-us' . '_profile_post_like' => 			1, 
			'kids-r-us' . '_profile_post_nav_box' => 		1, 
			'kids-r-us' . '_profile_post_nav_order_cat' => 	0, 
			'kids-r-us' . '_profile_post_share_box' => 		1, 
			'kids-r-us' . '_profile_post_slug' => 			'profile', 
			'kids-r-us' . '_profile_pl_categs_slug' => 		'pl-categs' 
		) 
	);
	
	
	$settings = apply_filters('kids_r_us_settings_single_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Project Puzzle Proportion */
if (!function_exists('kids_r_us_project_puzzle_proportion')) {

function kids_r_us_project_puzzle_proportion() {
	return 1;
}

}



/* Project Puzzle Proportion */
if (!function_exists('kids_r_us_project_puzzle_large_gar_parameters')) {

function kids_r_us_project_puzzle_large_gar_parameters() {
	$parameter = array ( 
		'container_width' 		=> 1160, 
		'bottomStaticPadding' 	=> 3.4 
	);
	
	
	return $parameter;
}

}


/* Theme Image Thumbnails Size */
if (!function_exists('kids_r_us_get_image_thumbnail_list')) {

function kids_r_us_get_image_thumbnail_list() {
	$list = array( 
		'cmsmasters-small-thumb' => array( 
			'width' => 		140, 
			'height' => 	140, 
			'crop' => 		true 
		), 
		'cmsmasters-square-thumb' => array( 
			'width' => 		580, 
			'height' => 	580, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Square', 'kids-r-us') 
		), 
		'cmsmasters-blog-masonry-thumb' => array( 
			'width' => 		960, 
			'height' => 	672, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Masonry Blog', 'kids-r-us') 
		), 
		'cmsmasters-project-thumb' => array( 
			'width' => 		580, 
			'height' => 	444, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project', 'kids-r-us') 
		), 
		'cmsmasters-project-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Project', 'kids-r-us') 
		), 
		'post-thumbnail' => array( 
			'width' => 		830, 
			'height' => 	500, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Featured', 'kids-r-us') 
		), 
		'cmsmasters-masonry-thumb' => array( 
			'width' => 		860, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry', 'kids-r-us') 
		), 
		'cmsmasters-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	696, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Full', 'kids-r-us') 
		), 
		'cmsmasters-project-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	696, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project Full', 'kids-r-us') 
		), 
		'cmsmasters-full-masonry-thumb' => array( 
			'width' => 		1160, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Full', 'kids-r-us') 
		) 
	);
	
	
	return $list;
}

}



/* Project Post Type Registration Rename */
if (!function_exists('kids_r_us_project_labels')) {

function kids_r_us_project_labels() {
	return array( 
		'name' => 					esc_html__('Projects', 'kids-r-us'), 
		'singular_name' => 			esc_html__('Project', 'kids-r-us'), 
		'menu_name' => 				esc_html__('Projects', 'kids-r-us'), 
		'all_items' => 				esc_html__('All Projects', 'kids-r-us'), 
		'add_new' => 				esc_html__('Add New', 'kids-r-us'), 
		'add_new_item' => 			esc_html__('Add New Project', 'kids-r-us'), 
		'edit_item' => 				esc_html__('Edit Project', 'kids-r-us'), 
		'new_item' => 				esc_html__('New Project', 'kids-r-us'), 
		'view_item' => 				esc_html__('View Project', 'kids-r-us'), 
		'search_items' => 			esc_html__('Search Projects', 'kids-r-us'), 
		'not_found' => 				esc_html__('No projects found', 'kids-r-us'), 
		'not_found_in_trash' => 	esc_html__('No projects found in Trash', 'kids-r-us') 
	);
}

}

// add_filter('cmsmasters_project_labels_filter', 'kids_r_us_project_labels');


if (!function_exists('kids_r_us_pj_categs_labels')) {

function kids_r_us_pj_categs_labels() {
	return array( 
		'name' => 					esc_html__('Project Categories', 'kids-r-us'), 
		'singular_name' => 			esc_html__('Project Category', 'kids-r-us') 
	);
}

}

// add_filter('cmsmasters_pj_categs_labels_filter', 'kids_r_us_pj_categs_labels');


if (!function_exists('kids_r_us_pj_tags_labels')) {

function kids_r_us_pj_tags_labels() {
	return array( 
		'name' => 					esc_html__('Project Tags', 'kids-r-us'), 
		'singular_name' => 			esc_html__('Project Tag', 'kids-r-us') 
	);
}

}

// add_filter('cmsmasters_pj_tags_labels_filter', 'kids_r_us_pj_tags_labels');



/* Profile Post Type Registration Rename */
if (!function_exists('kids_r_us_profile_labels')) {

function kids_r_us_profile_labels() {
	return array( 
		'name' => 					esc_html__('Profiles', 'kids-r-us'), 
		'singular_name' => 			esc_html__('Profiles', 'kids-r-us'), 
		'menu_name' => 				esc_html__('Profiles', 'kids-r-us'), 
		'all_items' => 				esc_html__('All Profiles', 'kids-r-us'), 
		'add_new' => 				esc_html__('Add New', 'kids-r-us'), 
		'add_new_item' => 			esc_html__('Add New Profile', 'kids-r-us'), 
		'edit_item' => 				esc_html__('Edit Profile', 'kids-r-us'), 
		'new_item' => 				esc_html__('New Profile', 'kids-r-us'), 
		'view_item' => 				esc_html__('View Profile', 'kids-r-us'), 
		'search_items' => 			esc_html__('Search Profiles', 'kids-r-us'), 
		'not_found' => 				esc_html__('No Profiles found', 'kids-r-us'), 
		'not_found_in_trash' => 	esc_html__('No Profiles found in Trash', 'kids-r-us') 
	);
}

}

// add_filter('cmsmasters_profile_labels_filter', 'kids_r_us_profile_labels');


if (!function_exists('kids_r_us_pl_categs_labels')) {

function kids_r_us_pl_categs_labels() {
	return array( 
		'name' => 					esc_html__('Profile Categories', 'kids-r-us'), 
		'singular_name' => 			esc_html__('Profile Category', 'kids-r-us') 
	);
}

}

// add_filter('cmsmasters_pl_categs_labels_filter', 'kids_r_us_pl_categs_labels');

