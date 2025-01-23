<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * Theme Vars Functions
 * Created by CMSMasters
 * 
 */


/* Register CSS Styles */
function kids_r_us_vars_register_css_styles() {
	wp_enqueue_style('kids-r-us-theme-vars-style', get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/css/vars-style.css', array('kids-r-us-retina'), '1.0.0', 'screen, print');
}

add_action('wp_enqueue_scripts', 'kids_r_us_vars_register_css_styles');

