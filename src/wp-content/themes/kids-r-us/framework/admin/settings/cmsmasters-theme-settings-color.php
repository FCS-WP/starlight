<?php 
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version		1.0.0
 * 
 * Admin Panel Colors Options
 * Created by CMSMasters
 * 
 */


function kids_r_us_options_color_tabs() {
	$tabs = array();
	
	
	foreach (kids_r_us_all_color_schemes_list() as $key => $value) {
		$tabs[$key] = $value;
	}
	
	
	return $tabs;
}



function kids_r_us_options_color_sections() {
	$tab = kids_r_us_get_the_tab();
	
	
	$schemes = kids_r_us_all_color_schemes_list();
	
	
	$sections = array();
	
	
	$sections[$tab . '_section'] = $schemes[$tab] . ' ' . esc_html__('Color Scheme Options', 'kids-r-us');
	
	
	return $sections;
} 



function kids_r_us_options_color_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = kids_r_us_get_the_tab();
	}
	
	
	$defaults = kids_r_us_color_schemes_defaults();
	
	
	$options = array();
	
	
	if ($tab == 'header') { // Header & Header Bottom
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_mid_color', 
			'title' => esc_html__('Header Middle Text Font Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['mid_color'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_mid_link', 
			'title' => esc_html__('Header Middle Links Font Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['mid_link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_mid_hover', 
			'title' => esc_html__('Header Middle Links Font Color on Hover', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['mid_hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_mid_bg', 
			'title' => esc_html__('Header Middle Background Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['mid_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_mid_bg_scroll', 
			'title' => esc_html__('Header Middle Background Color on Scroll', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['mid_bg_scroll'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_mid_border', 
			'title' => esc_html__('Header Middle Border Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['mid_border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_bot_color', 
			'title' => esc_html__('Header Bottom Text Font Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['bot_color'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_bot_link', 
			'title' => esc_html__('Header Bottom Links Font Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['bot_link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_bot_hover', 
			'title' => esc_html__('Header Bottom Links Font Color on Hover', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['bot_hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_bot_bg', 
			'title' => esc_html__('Header Bottom Background Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['bot_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_bot_bg_scroll', 
			'title' => esc_html__('Header Bottom Background Color on Scroll', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['bot_bg_scroll'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_bot_border', 
			'title' => esc_html__('Header Bottom Border Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['bot_border'] 
		);
	} elseif ($tab == 'navigation') { // Navigation
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_title_link', 
			'title' => esc_html__('Main Elements Font Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['title_link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_title_link_hover', 
			'title' => esc_html__('Main Elements Font Color on Hover', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['title_link_hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_title_link_current', 
			'title' => esc_html__('Main Elements Font Color for Current Position', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['title_link_current'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_title_link_subtitle', 
			'title' => esc_html__('Main Elements Subtitle Font Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['title_link_subtitle'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_title_link_bg', 
			'title' => esc_html__('Main Elements Background Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['title_link_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_title_link_bg_hover', 
			'title' => esc_html__('Main Elements Background Color on Hover', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['title_link_bg_hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_title_link_bg_current', 
			'title' => esc_html__('Main Elements Background Color for Current Position', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['title_link_bg_current'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_title_link_border', 
			'title' => esc_html__('Main Elements Border Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['title_link_border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_dropdown_text', 
			'title' => esc_html__('Dropdown Description Text Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_text'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_dropdown_bg', 
			'title' => esc_html__('Dropdown Background Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_dropdown_border', 
			'title' => esc_html__('Dropdown Border Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_dropdown_link', 
			'title' => esc_html__('Dropdown Elements Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_dropdown_link_hover', 
			'title' => esc_html__('Dropdown Elements Color on Hover', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_link_hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_dropdown_link_subtitle', 
			'title' => esc_html__('Dropdown Elements Subtitle Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_link_subtitle'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_dropdown_link_highlight', 
			'title' => esc_html__('Dropdown Elements Highlight Color on Hover', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_link_highlight'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_dropdown_link_border', 
			'title' => esc_html__('Dropdown Elements Border Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_link_border'] 
		);
	} elseif ($tab == 'header_top') { // Header Top
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_color', 
			'title' => esc_html__('Text Font Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['color'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_link', 
			'title' => esc_html__('Links Font Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_hover', 
			'title' => esc_html__('Links Font Color on Hover', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_bg', 
			'title' => esc_html__('Background Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_border', 
			'title' => esc_html__('Border Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_title_link', 
			'title' => esc_html__('Top Menu Elements Font Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['title_link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_title_link_hover', 
			'title' => esc_html__('Top Menu Main Elements Font Color on Hover', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['title_link_hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_title_link_bg', 
			'title' => esc_html__('Top Menu Main Elements Background Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['title_link_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_title_link_bg_hover', 
			'title' => esc_html__('Top Menu Main Elements Background Color on Hover', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['title_link_bg_hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_title_link_border', 
			'title' => esc_html__('Top Menu Main Elements Border Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['title_link_border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_dropdown_bg', 
			'title' => esc_html__('Top Menu Dropdown Background Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_dropdown_border', 
			'title' => esc_html__('Top Menu Dropdown Border Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_dropdown_link', 
			'title' => esc_html__('Top Menu Dropdown Elements Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_dropdown_link_hover', 
			'title' => esc_html__('Top Menu Dropdown Elements Color on Hover', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_link_hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_dropdown_link_highlight', 
			'title' => esc_html__('Top Menu Dropdown Elements Highlight Color on Hover', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_link_highlight'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_dropdown_link_border', 
			'title' => esc_html__('Top Menu Dropdown Elements Border Color', 'kids-r-us'), 
			'desc' => esc_html__('(may apply to some other elements too)', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_link_border'] 
		);
	} else { // Other
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_color', 
			'title' => esc_html__('Main Content Font Color', 'kids-r-us'), 
			'desc' => esc_html__('Font color for main content', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['color'] : $defaults['default']['color'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_link', 
			'title' => esc_html__('Primary Color', 'kids-r-us'), 
			'desc' => esc_html__('First color for links and some other elements', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['link'] : $defaults['default']['link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_hover', 
			'title' => esc_html__('Highlight Color', 'kids-r-us'), 
			'desc' => esc_html__('Color for links rollovers, etc', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['hover'] : $defaults['default']['hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_heading', 
			'title' => esc_html__('Headings Color', 'kids-r-us'), 
			'desc' => esc_html__('Color for headings and some other elements', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['heading'] : $defaults['default']['heading'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_bg', 
			'title' => esc_html__('Main Background Color', 'kids-r-us'), 
			'desc' => esc_html__('Main background color for some elements', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['bg'] : $defaults['default']['bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_alternate', 
			'title' => esc_html__('Alternate Background Color', 'kids-r-us'), 
			'desc' => esc_html__('Alternate background color for some elements', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['alternate'] : $defaults['default']['alternate'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'kids-r-us' . '_' . $tab . '_border', 
			'title' => esc_html__('Borders Color', 'kids-r-us'), 
			'desc' => esc_html__('Color for borders', 'kids-r-us'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['border'] : $defaults['default']['border'] 
		);
	}
	
	
	return apply_filters('cmsmasters_options_color_fields_filter', $options, $tab);	
}

