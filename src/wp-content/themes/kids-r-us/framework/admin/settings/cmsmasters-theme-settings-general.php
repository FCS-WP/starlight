<?php 
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.1
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function kids_r_us_options_general_tabs() {
	$cmsmasters_option = kids_r_us_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'kids-r-us');
	
	if ($cmsmasters_option['kids-r-us' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'kids-r-us');
	}
	
	if (CMSMASTERS_THEME_STYLE_COMPATIBILITY) {
		$tabs['theme_style'] = esc_attr__('Theme Style', 'kids-r-us');
	}
	
	$tabs['header'] = esc_attr__('Header', 'kids-r-us');
	$tabs['content'] = esc_attr__('Content', 'kids-r-us');
	$tabs['footer'] = esc_attr__('Footer', 'kids-r-us');
	
	return apply_filters('cmsmasters_options_general_tabs_filter', $tabs);
}


function kids_r_us_options_general_sections() {
	$tab = kids_r_us_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'kids-r-us');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'kids-r-us');
		
		break;
	case 'theme_style':
		$sections = array();
		
		$sections['theme_style_section'] = esc_attr__('Theme Design Style', 'kids-r-us');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'kids-r-us');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'kids-r-us');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'kids-r-us');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_sections_filter', $sections, $tab);
} 


function kids_r_us_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = kids_r_us_get_the_tab();
	}
	
	$options = array();
	
	
	$defaults = kids_r_us_settings_general_defaults();
	
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'kids-r-us' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['kids-r-us' . '_theme_layout'], 
			'choices' => array( 
				esc_html__('Liquid', 'kids-r-us') . '|liquid', 
				esc_html__('Boxed', 'kids-r-us') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'kids-r-us' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['kids-r-us' . '_logo_type'], 
			'choices' => array( 
				esc_html__('Image', 'kids-r-us') . '|image', 
				esc_html__('Text', 'kids-r-us') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'kids-r-us' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'kids-r-us'), 
			'desc' => esc_html__('Choose your website logo image.', 'kids-r-us'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['kids-r-us' . '_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'kids-r-us' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'kids-r-us'), 
			'desc' => esc_html__('Choose logo image for retina displays. Logo for Retina displays should be twice the size of the default one.', 'kids-r-us'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['kids-r-us' . '_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'kids-r-us' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['kids-r-us' . '_logo_title'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'kids-r-us' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['kids-r-us' . '_logo_subtitle'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'kids-r-us' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'kids-r-us'), 
			'desc' => esc_html__('enable', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_logo_custom_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'kids-r-us' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['kids-r-us' . '_logo_title_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'kids-r-us' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['kids-r-us' . '_logo_subtitle_color'] 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'kids-r-us' . '_bg_col', 
			'title' => esc_html__('Background Color', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => $defaults[$tab]['kids-r-us' . '_bg_col'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'kids-r-us' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'kids-r-us' . '_bg_img', 
			'title' => esc_html__('Background Image', 'kids-r-us'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'kids-r-us'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['kids-r-us' . '_bg_img'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'kids-r-us' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['kids-r-us' . '_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'kids-r-us') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'kids-r-us') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'kids-r-us') . '|repeat-y', 
				esc_html__('Repeat', 'kids-r-us') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'kids-r-us' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['kids-r-us' . '_bg_pos'], 
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
			'section' => 'bg_section', 
			'id' => 'kids-r-us' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['kids-r-us' . '_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'kids-r-us') . '|scroll', 
				esc_html__('Fixed', 'kids-r-us') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'kids-r-us' . '_bg_size', 
			'title' => esc_html__('Background Size', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['kids-r-us' . '_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'kids-r-us') . '|auto', 
				esc_html__('Cover', 'kids-r-us') . '|cover', 
				esc_html__('Contain', 'kids-r-us') . '|contain' 
			) 
		);
		
		break;
	case 'theme_style':
		$options[] = array( 
			'section' => 'theme_style_section', 
			'id' => 'kids-r-us' . '_theme_style', 
			'title' => esc_html__('Choose Theme Style', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'select_theme_style', 
			'std' => '', 
			'choices' => kids_r_us_all_theme_styles() 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'kids-r-us' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'kids-r-us'), 
			'desc' => esc_html__('enable', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_fixed_header'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'kids-r-us' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content by Default', 'kids-r-us'), 
			'desc' => esc_html__('enable', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_header_overlaps'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'kids-r-us' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_header_top_line'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'kids-r-us' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'kids-r-us'), 
			'desc' => esc_html__('pixels', 'kids-r-us'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['kids-r-us' . '_header_top_height'], 
			'min' => '10' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'kids-r-us' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'kids-r-us'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'kids-r-us') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['kids-r-us' . '_header_top_line_short_info'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'kids-r-us' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['kids-r-us' . '_header_top_line_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'kids-r-us') . '|none', 
				esc_html__('Top Line Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'kids-r-us') . '|social', 
				esc_html__('Top Line Navigation (will be shown if set in Appearance - Menus tab)', 'kids-r-us') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'kids-r-us' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['kids-r-us' . '_header_styles'], 
			'choices' => array( 
				esc_html__('Default Style', 'kids-r-us') . '|default', 
				esc_html__('Compact Style Left Navigation', 'kids-r-us') . '|l_nav', 
				esc_html__('Compact Style Right Navigation', 'kids-r-us') . '|r_nav', 
				esc_html__('Compact Style Center Navigation', 'kids-r-us') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'kids-r-us' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'kids-r-us'), 
			'desc' => esc_html__('pixels', 'kids-r-us'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['kids-r-us' . '_header_mid_height'], 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'kids-r-us' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'kids-r-us'), 
			'desc' => esc_html__('pixels', 'kids-r-us'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['kids-r-us' . '_header_bot_height'], 
			'min' => '20' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'kids-r-us' . '_header_search', 
			'title' => esc_html__('Header Search', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_header_search'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'kids-r-us' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['kids-r-us' . '_header_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'kids-r-us') . '|none', 
				esc_html__('Header Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'kids-r-us') . '|social', 
				esc_html__('Header Custom HTML', 'kids-r-us') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'kids-r-us' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'kids-r-us'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'kids-r-us') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['kids-r-us' . '_header_add_cont_cust_html'], 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'kids-r-us' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'kids-r-us'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'kids-r-us'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['kids-r-us' . '_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'kids-r-us') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'kids-r-us') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'kids-r-us') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'kids-r-us' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'kids-r-us'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Archive Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'kids-r-us'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['kids-r-us' . '_archives_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'kids-r-us') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'kids-r-us') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'kids-r-us') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'kids-r-us' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'kids-r-us'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Search Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'kids-r-us'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['kids-r-us' . '_search_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'kids-r-us') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'kids-r-us') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'kids-r-us') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'kids-r-us' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'kids-r-us'), 
			'desc' => esc_html__('Layout for pages of non-listed types. Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'kids-r-us'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['kids-r-us' . '_other_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'kids-r-us') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'kids-r-us') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'kids-r-us') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'kids-r-us' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['kids-r-us' . '_heading_alignment'], 
			'choices' => array( 
				esc_html__('Left', 'kids-r-us') . '|left', 
				esc_html__('Right', 'kids-r-us') . '|right', 
				esc_html__('Center', 'kids-r-us') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'kids-r-us' . '_heading_scheme', 
			'title' => esc_html__('Heading Color Scheme by Default', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['kids-r-us' . '_heading_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'kids-r-us' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_heading_bg_image_enable'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'kids-r-us' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'kids-r-us'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'kids-r-us'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['kids-r-us' . '_heading_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'kids-r-us' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['kids-r-us' . '_heading_bg_repeat'], 
			'choices' => array( 
				esc_html__('No Repeat', 'kids-r-us') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'kids-r-us') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'kids-r-us') . '|repeat-y', 
				esc_html__('Repeat', 'kids-r-us') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'kids-r-us' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['kids-r-us' . '_heading_bg_attachment'], 
			'choices' => array( 
				esc_html__('Scroll', 'kids-r-us') . '|scroll', 
				esc_html__('Fixed', 'kids-r-us') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'kids-r-us' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['kids-r-us' . '_heading_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'kids-r-us') . '|auto', 
				esc_html__('Cover', 'kids-r-us') . '|cover', 
				esc_html__('Contain', 'kids-r-us') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'kids-r-us' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'kids-r-us'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => $defaults[$tab]['kids-r-us' . '_heading_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'kids-r-us' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'kids-r-us'), 
			'desc' => esc_html__('pixels', 'kids-r-us'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['kids-r-us' . '_heading_height'], 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'kids-r-us' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_breadcrumbs'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'kids-r-us' . '_bottom_scheme', 
			'title' => esc_html__('Bottom Color Scheme', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['kids-r-us' . '_bottom_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'kids-r-us' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us') . '<br><br>' . esc_html__('Please make sure to add widgets in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_bottom_sidebar'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'kids-r-us' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['kids-r-us' . '_bottom_sidebar_layout'], 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'kids-r-us' . '_footer_scheme', 
			'title' => esc_html__('Footer Color Scheme', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['kids-r-us' . '_footer_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'kids-r-us' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['kids-r-us' . '_footer_type'], 
			'choices' => array( 
				esc_html__('Default', 'kids-r-us') . '|default', 
				esc_html__('Small', 'kids-r-us') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'kids-r-us' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['kids-r-us' . '_footer_additional_content'], 
			'choices' => array( 
				esc_html__('None', 'kids-r-us') . '|none', 
				esc_html__('Footer Navigation (will be shown if set in Appearance - Menus tab)', 'kids-r-us') . '|nav', 
				esc_html__('Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'kids-r-us') . '|social', 
				esc_html__('Custom HTML', 'kids-r-us') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'kids-r-us' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_footer_logo'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'kids-r-us' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'kids-r-us'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'kids-r-us'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['kids-r-us' . '_footer_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'kids-r-us' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'kids-r-us'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'kids-r-us'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['kids-r-us' . '_footer_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'kids-r-us' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_footer_nav'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'kids-r-us' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_footer_social'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'kids-r-us' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'kids-r-us'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'kids-r-us') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['kids-r-us' . '_footer_html'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'kids-r-us' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['kids-r-us' . '_footer_copyright'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_fields_filter', $options, $tab);
}

