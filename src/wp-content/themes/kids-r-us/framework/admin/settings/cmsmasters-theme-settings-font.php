<?php 
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version		1.0.0
 * 
 * Admin Panel Fonts Options
 * Created by CMSMasters
 * 
 */


function kids_r_us_options_font_tabs() {
	$tabs = array();
	
	$tabs['content'] = esc_attr__('Content', 'kids-r-us');
	$tabs['link'] = esc_attr__('Links', 'kids-r-us');
	$tabs['nav'] = esc_attr__('Navigation', 'kids-r-us');
	$tabs['heading'] = esc_attr__('Heading', 'kids-r-us');
	$tabs['other'] = esc_attr__('Other', 'kids-r-us');
	$tabs['google'] = esc_attr__('Google Fonts', 'kids-r-us');
	
	return apply_filters('cmsmasters_options_font_tabs_filter', $tabs);
}


function kids_r_us_options_font_sections() {
	$tab = kids_r_us_get_the_tab();
	
	switch ($tab) {
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_html__('Content Font Options', 'kids-r-us');
		
		break;
	case 'link':
		$sections = array();
		
		$sections['link_section'] = esc_html__('Links Font Options', 'kids-r-us');
		
		break;
	case 'nav':
		$sections = array();
		
		$sections['nav_section'] = esc_html__('Navigation Font Options', 'kids-r-us');
		
		break;
	case 'heading':
		$sections = array();
		
		$sections['heading_section'] = esc_html__('Headings Font Options', 'kids-r-us');
		
		break;
	case 'other':
		$sections = array();
		
		$sections['other_section'] = esc_html__('Other Fonts Options', 'kids-r-us');
		
		break;
	case 'google':
		$sections = array();
		
		$sections['google_section'] = esc_html__('Serving Google Fonts from CDN', 'kids-r-us');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_sections_filter', $sections, $tab);
} 


function kids_r_us_options_font_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = kids_r_us_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = kids_r_us_settings_font_defaults();
	
	
	switch ($tab) {
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'kids-r-us' . '_content_font', 
			'title' => esc_html__('Main Content Font', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['kids-r-us' . '_content_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'link':
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'kids-r-us' . '_link_font', 
			'title' => esc_html__('Links Font', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['kids-r-us' . '_link_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'kids-r-us' . '_link_hover_decoration', 
			'title' => esc_html__('Links Hover Text Decoration', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['kids-r-us' . '_link_hover_decoration'], 
			'choices' => kids_r_us_text_decoration_list() 
		);
		
		break;
	case 'nav':
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'kids-r-us' . '_nav_title_font', 
			'title' => esc_html__('Navigation Title Font', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['kids-r-us' . '_nav_title_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'kids-r-us' . '_nav_dropdown_font', 
			'title' => esc_html__('Navigation Dropdown Font', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['kids-r-us' . '_nav_dropdown_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		break;
	case 'heading':
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'kids-r-us' . '_h1_font', 
			'title' => esc_html__('H1 Tag Font', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['kids-r-us' . '_h1_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'kids-r-us' . '_h2_font', 
			'title' => esc_html__('H2 Tag Font', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['kids-r-us' . '_h2_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'kids-r-us' . '_h3_font', 
			'title' => esc_html__('H3 Tag Font', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['kids-r-us' . '_h3_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'kids-r-us' . '_h4_font', 
			'title' => esc_html__('H4 Tag Font', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['kids-r-us' . '_h4_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'kids-r-us' . '_h5_font', 
			'title' => esc_html__('H5 Tag Font', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['kids-r-us' . '_h5_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'kids-r-us' . '_h6_font', 
			'title' => esc_html__('H6 Tag Font', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['kids-r-us' . '_h6_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		break;
	case 'other':
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'kids-r-us' . '_button_font', 
			'title' => esc_html__('Button Font', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['kids-r-us' . '_button_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'kids-r-us' . '_small_font', 
			'title' => esc_html__('Small Tag Font', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['kids-r-us' . '_small_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'kids-r-us' . '_input_font', 
			'title' => esc_html__('Text Fields Font', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['kids-r-us' . '_input_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'kids-r-us' . '_quote_font', 
			'title' => esc_html__('Blockquote Font', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['kids-r-us' . '_quote_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'google':
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'kids-r-us' . '_google_web_fonts', 
			'title' => esc_html__('Google Fonts', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'google_web_fonts', 
			'std' => $defaults[$tab]['kids-r-us' . '_google_web_fonts'] 
		);
		
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'kids-r-us' . '_google_web_fonts_subset', 
			'title' => esc_html__('Google Fonts Subset', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'select_multiple', 
			'std' => '', 
			'choices' => array( 
				esc_html__('Latin Extended', 'kids-r-us') . '|' . 'latin-ext', 
				esc_html__('Arabic', 'kids-r-us') . '|' . 'arabic', 
				esc_html__('Cyrillic', 'kids-r-us') . '|' . 'cyrillic', 
				esc_html__('Cyrillic Extended', 'kids-r-us') . '|' . 'cyrillic-ext', 
				esc_html__('Greek', 'kids-r-us') . '|' . 'greek', 
				esc_html__('Greek Extended', 'kids-r-us') . '|' . 'greek-ext', 
				esc_html__('Vietnamese', 'kids-r-us') . '|' . 'vietnamese', 
				esc_html__('Japanese', 'kids-r-us') . '|' . 'japanese', 
				esc_html__('Korean', 'kids-r-us') . '|' . 'korean', 
				esc_html__('Thai', 'kids-r-us') . '|' . 'thai', 
				esc_html__('Bengali', 'kids-r-us') . '|' . 'bengali', 
				esc_html__('Devanagari', 'kids-r-us') . '|' . 'devanagari', 
				esc_html__('Gujarati', 'kids-r-us') . '|' . 'gujarati', 
				esc_html__('Gurmukhi', 'kids-r-us') . '|' . 'gurmukhi', 
				esc_html__('Hebrew', 'kids-r-us') . '|' . 'hebrew', 
				esc_html__('Kannada', 'kids-r-us') . '|' . 'kannada', 
				esc_html__('Khmer', 'kids-r-us') . '|' . 'khmer', 
				esc_html__('Malayalam', 'kids-r-us') . '|' . 'malayalam', 
				esc_html__('Myanmar', 'kids-r-us') . '|' . 'myanmar', 
				esc_html__('Oriya', 'kids-r-us') . '|' . 'oriya', 
				esc_html__('Sinhala', 'kids-r-us') . '|' . 'sinhala', 
				esc_html__('Tamil', 'kids-r-us') . '|' . 'tamil', 
				esc_html__('Telugu', 'kids-r-us') . '|' . 'telugu' 
			) 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_fields_filter', $options, $tab);	
}

