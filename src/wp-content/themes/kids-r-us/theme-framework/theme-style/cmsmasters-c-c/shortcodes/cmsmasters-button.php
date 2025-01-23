<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * Content Composer Button Shortcode
 * Created by CMSMasters
 * 
 */

$shortcode_atts = shortcode_atts($new_atts, $atts);
	
	extract($shortcode_atts);
	
	
	$unique_id = $shortcode_id;
	
	
	$local_fonts = '';
	
	if ($button_font_family != '') {
		$font_family_array = str_replace('+', ' ', explode(':', $button_font_family));
		
		
		if (is_numeric($font_family_array[0])) {
			$font_family_name = "'" . $font_family_array[1] . "'";
			
			if (is_admin()) {
				$local_fonts .= 'cmsmasters_local_font_start=' . $button_font_family . '=cmsmasters_local_font_end';
			}
		} else {
			$font_family_name = "'" . $font_family_array[0] . "'";
			
			cmsmasters_theme_font($button_font_family, $button_font_family);
		}
	}
	
	
	if (
		$button_style != '' || 
		$button_font_family != '' || 
		$button_font_size != '' || 
		$button_line_height != '' || 
		$button_font_weight != '' || 
		$button_font_style != '' || 
		$button_text_transform != '' || 
		$button_padding_hor != '' || 
		$button_border_width != '' || 
		$button_border_style != '' || 
		$button_border_radius != '' || 
		$button_bg_color != '' || 
		$button_text_color != '' || 
		$button_border_color != '' || 
		$button_bg_color_h != '' || 
		$button_text_color_h != '' || 
		$button_border_color_h != '' 
	) {
		$button_custom_styles = 'true';
	} else {
		$button_custom_styles = 'false';
	}
	
	
	$shortcode_styles = "\n" . 
		'#cmsmasters_button_' . esc_attr($unique_id) . ' { ' . 
			"\n\t" . (($button_text_align == 'center') ? '' : 'float:' . esc_attr($button_text_align) . '; ') . 
			"\n\t" . 'text-align:' . esc_attr($button_text_align) . '; ' . 
		"\n" . '} ' . "\n\n" . 
		'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button:before { ' . 
			"\n\t" . 'margin-right:' . (($content != null) ? '.5em; ' : '0;') . 
			"\n\t" . 'margin-left:0; ' . 
			"\n\t" . 'vertical-align:baseline; ' . 
		"\n" . '} ' . "\n\n";
		
		
		if ($button_custom_styles == 'true') {
			$shortcode_styles .= '#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button { ' . 
				(($button_font_family != '') ? "\n\t" . 'font-family:' . str_replace('+', ' ', $font_family_name) . '; ' : '') . 
				(($button_font_size != '') ? "\n\t" . 'font-size:' . esc_attr($button_font_size) . 'px; ' : '') . 
				(($button_line_height != '') ? "\n\t" . 'line-height:' . esc_attr($button_line_height) . 'px; ' : '') . 
				(($button_font_weight != '' && $button_font_weight != 'default') ? "\n\t" . 'font-weight:' . esc_attr($button_font_weight) . '; ' : '') . 
				(($button_font_style != '' && $button_font_style != 'default') ? "\n\t" . 'font-style:' . esc_attr($button_font_style) . '; ' : '') . 
				(($button_text_transform != '' && $button_text_transform != 'default') ? "\n\t" . 'text-transform:' . esc_attr($button_text_transform) . '; ' : '') . 
				(($button_padding_hor != '') ? "\n\t" . 'padding-right:' . esc_attr($button_padding_hor) . 'px; ' : '') . 
				(($button_padding_hor != '') ? "\n\t" . 'padding-left:' . esc_attr($button_padding_hor) . 'px; ' : '') . 
				(($button_border_width != '' && $button_style !='') ? "\n\t" . 'border-' . (($button_style == 'cmsmasters_but_bd_underline') ? 'bottom-' : '') . 'width:' . esc_attr($button_border_width) . 'px; ' : '') . 
				(($button_border_style != '' && $button_border_style != 'default' && $button_style !='') ? "\n\t" . 'border-style:' . esc_attr($button_border_style) . '; ' : '') . 
				(($button_border_radius != '') ? "\n\t" . '-webkit-border-radius:' . esc_attr($button_border_radius) . '; ' . "\n\t" . 'border-radius:' . esc_attr($button_border_radius) . '; ' : '') . 
				(($button_bg_color != '') ? "\n\t" . cmsmasters_color_css('background-color', $button_bg_color) : '') . 
				(($button_text_color != '') ? "\n\t" . cmsmasters_color_css('color', $button_text_color) : '') . 
				(($button_border_color != '' && $button_style !='') ? "\n\t" . cmsmasters_color_css('border-color', $button_border_color) : '') . 
			"\n" . '} ' . "\n";
			
			$shortcode_styles .= '#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button:hover { ' . 
				(($button_bg_color_h != '') ? "\n\t" . cmsmasters_color_css('background-color', $button_bg_color_h) : '') . 
				(($button_text_color_h != '') ? "\n\t" . cmsmasters_color_css('color', $button_text_color_h) : '') . 
				(($button_border_color_h != '' && $button_style !='') ? "\n\t" . cmsmasters_color_css('border-color', $button_border_color_h) : '') . 
			"\n" . '} ' . "\n";
		}
		
		
			if ($button_custom_styles = 'true' && $button_style === '') {
				$shortcode_styles .= '#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button:after { ' .
					(($button_border_width != '') ? "\n\t" . 'border-' . (($button_style == 'cmsmasters_but_bd_underline') ? 'bottom-' : '') . 'width:' . esc_attr($button_border_width) . 'px; ' : '') . 
					(($button_border_style != '' && $button_border_style != 'default') ? "\n\t" . 'border-style:' . esc_attr($button_border_style) . '; ' : '') . 
					(($button_border_color != '') ? "\n\t" . cmsmasters_color_css('border-color', $button_border_color) : '') .
					(($button_border_radius != '') ? "\n\t" . '-webkit-border-radius:' . esc_attr($button_border_radius) . '; ' . "\n\t" . 'border-radius:' . esc_attr($button_border_radius) . '; ' : '') .
				"\n" . '} ' . "\n";
					
				$shortcode_styles .= '#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button:hover:after { ' .  
				(($button_border_color_h != '') ? "\n\t" . cmsmasters_color_css('border-color', $button_border_color_h) : '') . 
			"\n" . '} ' . "\n";
			}	
		
		
		
		if ($button_style != '') {
			if (
				$button_style == 'cmsmasters_but_bg_slide_left' || 
				$button_style == 'cmsmasters_but_bg_slide_right' || 
				$button_style == 'cmsmasters_but_bg_slide_top' || 
				$button_style == 'cmsmasters_but_bg_slide_bottom' || 
				$button_style == 'cmsmasters_but_bg_expand_vert' || 
				$button_style == 'cmsmasters_but_bg_expand_hor' || 
				$button_style == 'cmsmasters_but_bg_expand_diag' 
			) {
				
					
				if ($button_bg_color != '') {
					$shortcode_styles .= '#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_slide_left:hover, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_slide_right:hover, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_slide_top:hover, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_slide_bottom:hover, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_expand_vert:hover, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_expand_hor:hover, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_expand_diag:hover { ' . 
						"\n\t" . cmsmasters_color_css('background-color', $button_bg_color) . 
					"\n" . '} ' . "\n";
				}
				
				if ($button_bg_color_h != '') {
					$shortcode_styles .= '#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_slide_left:after, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_slide_right:after, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_slide_top:after, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_slide_bottom:after, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_expand_vert:after, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_expand_hor:after, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_expand_diag:after { ' . 
						"\n\t" . cmsmasters_color_css('background-color', $button_bg_color_h) . 
					"\n" . '} ' . "\n";
				}
			}
			
			
			if (
				$button_style == 'cmsmasters_but_icon_dark_bg' || 
				$button_style == 'cmsmasters_but_icon_light_bg' || 
				$button_style == 'cmsmasters_but_icon_divider' || 
				$button_style == 'cmsmasters_but_icon_inverse' 
			) {
				$but_icon_pad = ($button_padding_hor != '' ? $button_padding_hor : '20') + ($button_line_height != '' ? $button_line_height : '40');
				
				if ($button_padding_hor != '' || $button_line_height != '') {
					$shortcode_styles .= '#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_dark_bg, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_light_bg, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_divider, ' .  
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_inverse { ' . 
						"\n\t" . 'padding-left:' . esc_attr($but_icon_pad) . 'px; ' . 
					"\n" . '} ' . "\n";
					
					$shortcode_styles .= '#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_dark_bg:before, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_light_bg:before, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_divider:before, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_inverse:before, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_dark_bg:after, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_light_bg:after, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_divider:after, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_inverse:after { ' . 
						"\n\t" . 'width:' . esc_attr($button_line_height) . 'px; ' . 
					"\n" . '} ' . "\n";
				}
				
				
				if ($button_border_color != '' || $button_border_color_h != '') {
					$shortcode_styles .= '#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_divider:after { ' . 
						"\n\t" . cmsmasters_color_css('border-color', $button_border_color) . 
					"\n" . '} ' . "\n";
					
					$shortcode_styles .= '#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_divider:hover:after { ' . 
						"\n\t" . cmsmasters_color_css('border-color', $button_border_color_h) . 
					"\n" . '} ' . "\n";
				}
				
				
				if ($button_style == 'cmsmasters_but_icon_inverse') {
					$shortcode_styles .= '#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_inverse:before { ' . 
						(($button_text_color_h != '') ? "\n\t" . cmsmasters_color_css('color', $button_text_color_h) : '') . 
					"\n" . '} ' . "\n";
				
					$shortcode_styles .= '#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_inverse:after { ' . 
						(($button_bg_color_h != '') ? "\n\t" . cmsmasters_color_css('background-color', $button_bg_color_h) : '') . 
					"\n" . '} ' . "\n";
					
					$shortcode_styles .= '#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_inverse:hover:before { ' . 
						(($button_text_color != '') ? "\n\t" . cmsmasters_color_css('color', $button_text_color) : '') . 
					"\n" . '} ' . "\n";
					
					$shortcode_styles .= '#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_inverse:hover:after { ' . 
						(($button_bg_color != '') ? "\n\t" . cmsmasters_color_css('background-color', $button_bg_color) : '') . 
					"\n" . '} ' . "\n";
				}
			}
			
			
			if (
				$button_style == 'cmsmasters_but_icon_slide_left' || 
				$button_style == 'cmsmasters_but_icon_slide_right' 
			) {
				if ($button_padding_hor != '') {
					$shortcode_styles .= '#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_slide_left, ' . 
					'#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_slide_right { ' . 
						"\n\t" . 'padding-left:' . esc_attr(($button_padding_hor * 2)) . 'px; ' . 
						"\n\t" . 'padding-right:' . esc_attr(($button_padding_hor * 2)) . 'px; ' . 
					"\n" . '} ' . "\n";
					
					$shortcode_styles .= '#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_slide_left:before { ' . 
						"\n\t" . 'width:' . esc_attr(($button_padding_hor * 2)) . 'px; ' . 
						"\n\t" . 'left:-' . esc_attr(($button_padding_hor * 2)) . 'px; ' . 
					"\n" . '} ' . "\n";
					
					$shortcode_styles .= '#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_slide_left:hover:before { ' . 
						"\n\t" . 'left:0; ' . 
					"\n" . '} ' . "\n";
					
					$shortcode_styles .= '#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_slide_right:before { ' . 
						"\n\t" . 'width:' . esc_attr(($button_padding_hor * 2)) . 'px; ' . 
						"\n\t" . 'right:-' . esc_attr(($button_padding_hor * 2)) . 'px; ' . 
					"\n" . '} ' . "\n";
					
					$shortcode_styles .= '#cmsmasters_button_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_slide_right:hover:before { ' . 
						"\n\t" . 'right:0; ' . 
					"\n" . '} ' . "\n";
				}
			}
		}
		
	$shortcode_styles .= "\n";
	
	
	$out = $this->cmsmasters_generate_front_css($shortcode_styles);
	
	$out .= $local_fonts;
	
	$link = apply_filters('cmsmasters_button_link_filter', $button_link, $shortcode_atts);
	
	
	$out .= '<div id="cmsmasters_button_' . esc_attr($unique_id) . '" class="button_wrap">' . 
		'<a href="' . esc_url($link) . '" class="cmsmasters_button' . 
		(($button_style != '') ? ' cmsmasters_but_clear_styles ' . esc_attr($button_style) : '') . 
		(($button_icon != '') ? ' ' . esc_attr($button_icon) : '') . 
		(($classes != '') ? ' ' . esc_attr($classes) : '') . 
		'"' . 
		(($animation != '') ? ' data-animation="' . esc_attr($animation) . '"' : '') . 
		(($animation != '' && $animation_delay != '') ? ' data-delay="' . esc_attr($animation_delay) . '"' : '') . 
		(($button_target == 'blank') ? ' target="_blank"' : '') . 
		'><span>' . esc_html($content) . '</span></a>' . 
	'</div>' . "\n";
	
	
	echo kids_r_us_return_content($out);




