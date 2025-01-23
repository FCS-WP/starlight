<?php 
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.1.2
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function kids_r_us_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'kids-r-us');
	
	if (class_exists('Cmsmasters_Content_Composer')) {
		$tabs['icon'] = esc_attr__('Social Icons', 'kids-r-us');
	}
	
	$tabs['lightbox'] = esc_attr__('Lightbox', 'kids-r-us');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'kids-r-us');
	$tabs['error'] = esc_attr__('404', 'kids-r-us');
	$tabs['code'] = esc_attr__('Custom Codes', 'kids-r-us');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'kids-r-us');
	}
	
	return apply_filters('cmsmasters_options_element_tabs_filter', $tabs);
}


function kids_r_us_options_element_sections() {
	$tab = kids_r_us_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'kids-r-us');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'kids-r-us');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'kids-r-us');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'kids-r-us');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'kids-r-us');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'kids-r-us');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'kids-r-us');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_sections_filter', $sections, $tab);	
} 


function kids_r_us_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = kids_r_us_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = kids_r_us_settings_element_defaults();
	
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'kids-r-us' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => $defaults[$tab]['kids-r-us' . '_sidebar'] 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'kids-r-us' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => $defaults[$tab]['kids-r-us' . '_social_icons'] 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'kids-r-us' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['kids-r-us' . '_ilightbox_skin'], 
			'choices' => array( 
				esc_html__('Dark', 'kids-r-us') . '|dark', 
				esc_html__('Light', 'kids-r-us') . '|light', 
				esc_html__('Mac', 'kids-r-us') . '|mac', 
				esc_html__('Metro Black', 'kids-r-us') . '|metro-black', 
				esc_html__('Metro White', 'kids-r-us') . '|metro-white', 
				esc_html__('Parade', 'kids-r-us') . '|parade', 
				esc_html__('Smooth', 'kids-r-us') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'kids-r-us' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'kids-r-us'), 
			'desc' => esc_html__('Sets path for switching windows', 'kids-r-us'), 
			'type' => 'radio', 
			'std' => $defaults[$tab]['kids-r-us' . '_ilightbox_path'], 
			'choices' => array( 
				esc_html__('Vertical', 'kids-r-us') . '|vertical', 
				esc_html__('Horizontal', 'kids-r-us') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'kids-r-us' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'kids-r-us'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_ilightbox_infinite'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'kids-r-us' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'kids-r-us'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_ilightbox_aspect_ratio'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'kids-r-us' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'kids-r-us'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_ilightbox_mobile_optimizer'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'kids-r-us' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'kids-r-us'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'kids-r-us'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['kids-r-us' . '_ilightbox_max_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'kids-r-us' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'kids-r-us'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'kids-r-us'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['kids-r-us' . '_ilightbox_min_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'kids-r-us' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'kids-r-us'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_ilightbox_inner_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'kids-r-us' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'kids-r-us'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_ilightbox_smart_recognition'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'kids-r-us' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'kids-r-us'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_ilightbox_fullscreen_one_slide'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'kids-r-us' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'kids-r-us'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'kids-r-us'), 
			'type' => 'select', 
			'std' => $defaults[$tab]['kids-r-us' . '_ilightbox_fullscreen_viewport'], 
			'choices' => array( 
				esc_html__('Center', 'kids-r-us') . '|center', 
				esc_html__('Fit', 'kids-r-us') . '|fit', 
				esc_html__('Fill', 'kids-r-us') . '|fill', 
				esc_html__('Stretch', 'kids-r-us') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'kids-r-us' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'kids-r-us'), 
			'desc' => esc_html__('Sets buttons be available or not', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_ilightbox_controls_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'kids-r-us' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'kids-r-us'), 
			'desc' => esc_html__('Enable the arrow buttons', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_ilightbox_controls_arrows'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'kids-r-us' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'kids-r-us'), 
			'desc' => esc_html__('Sets the fullscreen button', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_ilightbox_controls_fullscreen'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'kids-r-us' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'kids-r-us'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_ilightbox_controls_thumbnail'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'kids-r-us' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'kids-r-us'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_ilightbox_controls_keyboard'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'kids-r-us' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'kids-r-us'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_ilightbox_controls_mousewheel'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'kids-r-us' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'kids-r-us'), 
			'desc' => esc_html__('Sets the swipe navigation', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_ilightbox_controls_swipe'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'kids-r-us' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'kids-r-us'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_ilightbox_controls_slideshow'] 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'kids-r-us' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_sitemap_nav'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'kids-r-us' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_sitemap_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'kids-r-us' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_sitemap_tags'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'kids-r-us' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_sitemap_month'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'kids-r-us' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_sitemap_pj_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'kids-r-us' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_sitemap_pj_tags'] 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'kids-r-us' . '_error_color', 
			'title' => esc_html__('Text Color', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['kids-r-us' . '_error_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'kids-r-us' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['kids-r-us' . '_error_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'kids-r-us' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_error_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'kids-r-us' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'kids-r-us'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'kids-r-us'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['kids-r-us' . '_error_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'kids-r-us' . '_error_bg_rep', 
			'title' => esc_html__('Background Repeat', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['kids-r-us' . '_error_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'kids-r-us') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'kids-r-us') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'kids-r-us') . '|repeat-y', 
				esc_html__('Repeat', 'kids-r-us') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'kids-r-us' . '_error_bg_pos', 
			'title' => esc_html__('Background Position', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['kids-r-us' . '_error_bg_pos'], 
			'choices' => array( 
				esc_html__('Top Left', 'kids-r-us') . '|top left', 
				esc_html__('Top Center', 'kids-r-us') . '|top center', 
				esc_html__('Top Right', 'kids-r-us') . '|top right', 
				esc_html__('Center Left', 'kids-r-us') . '|center left', 
				esc_html__('Center Center', 'kids-r-us') . '|center center', 
				esc_html__('Center Right', 'kids-r-us') . '|center right', 
				esc_html__('Bottom Left', 'kids-r-us') . '|bottom left', 
				esc_html__('Bottom Center', 'kids-r-us') . '|bottom center', 
				esc_html__('Bottom Right', 'kids-r-us') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'kids-r-us' . '_error_bg_att', 
			'title' => esc_html__('Background Attachment', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['kids-r-us' . '_error_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'kids-r-us') . '|scroll', 
				esc_html__('Fixed', 'kids-r-us') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'kids-r-us' . '_error_bg_size', 
			'title' => esc_html__('Background Size', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['kids-r-us' . '_error_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'kids-r-us') . '|auto', 
				esc_html__('Cover', 'kids-r-us') . '|cover', 
				esc_html__('Contain', 'kids-r-us') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'kids-r-us' . '_error_search', 
			'title' => esc_html__('Search Line', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_error_search'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'kids-r-us' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_error_sitemap_button'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'kids-r-us' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['kids-r-us' . '_error_sitemap_link'], 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'kids-r-us' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['kids-r-us' . '_custom_css'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'kids-r-us' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['kids-r-us' . '_custom_js'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'kids-r-us' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['kids-r-us' . '_gmap_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'kids-r-us' . '_twitter_access_data', 
			'title' => esc_html__('Twitter Access Data', 'kids-r-us'), 
			'desc' => sprintf(
				/* translators: Twitter access data. %s: Link to twitter access data generator */
				esc_html__( 'Generate %s and paste access data to fields.', 'kids-r-us' ),
				'<a href="' . esc_url( 'https://api.cmsmasters.net/wp-json/cmsmasters-api/v1/twitter-request-token' ) . '" target="_blank">' .
					esc_html__( 'twitter access data', 'kids-r-us' ) .
				'</a>'
			), 
			'type' => 'multi-text', 
			'std' => $defaults[$tab]['kids-r-us' . '_twitter_access_data'], 
			'class' => 'regular-text', 
			'choices' => array( 
				esc_html__('Consumer Key', 'kids-r-us') . '|consumer_key', 
				esc_html__('Consumer Secret', 'kids-r-us') . '|consumer_secret', 
				esc_html__('Access Token', 'kids-r-us') . '|access_token', 
				esc_html__('Access Token Secret', 'kids-r-us') . '|access_token_secret' 
			) 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'kids-r-us' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['kids-r-us' . '_recaptcha_public_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'kids-r-us' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['kids-r-us' . '_recaptcha_private_key'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_fields_filter', $options, $tab);	
}

