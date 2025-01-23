<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * Theme Content Composer Functions
 * Created by CMSMasters
 * 
 */


/* Register JS Scripts */
function kids_r_us_theme_register_c_c_scripts() {
	global $pagenow;
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('kids-r-us-composer-shortcodes-extend', get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/js/cmsmasters-c-c-theme-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('kids-r-us-composer-shortcodes-extend', 'cmsmasters_theme_shortcodes', array( 
			'pricing_offer_field_best_offer_bd_title' => 	esc_attr__('Best Offer Background Color', 'kids-r-us'), 
			'pricing_offer_field_best_offer_bd_descr' => 	esc_attr__('Choose Background color for this pricing table best offer', 'kids-r-us'),
		));
	}
}

add_action('admin_enqueue_scripts', 'kids_r_us_theme_register_c_c_scripts');
