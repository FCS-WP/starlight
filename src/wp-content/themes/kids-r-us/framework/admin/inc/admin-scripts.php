<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.1.7
 * 
 * Admin Panel Scripts & Styles
 * Created by CMSMasters
 * 
 */


function kids_r_us_admin_register($hook) {
	global $pagenow;
	
	$screen = get_current_screen();
	
	
	wp_enqueue_style('wp-color-picker');
	
	wp_enqueue_script('wp-color-picker');

	wp_localize_script( 'wp-color-picker', 'wpColorPickerL10n', array(
		'clear' => 				esc_attr__('Clear', 'kids-r-us'),
		'clearAriaLabel' => 	esc_attr__('Clear color', 'kids-r-us'),
		'defaultLabel' => 		esc_attr__('Color value', 'kids-r-us'),
		'defaultString' => 		esc_attr__('Default', 'kids-r-us'),
		'defaultAriaLabel' => 	esc_attr__('Select default color', 'kids-r-us'),
		'pick' => 				esc_attr__('Select Color', 'kids-r-us'),
	) ); 
	
	wp_enqueue_script('wp-color-picker-alpha', get_template_directory_uri() . '/framework/admin/inc/js/wp-color-picker-alpha.js', array('jquery', 'wp-color-picker'), '3.0.4', true);
	
	
	wp_enqueue_style('kids-r-us-admin-icons-font', get_template_directory_uri() . '/framework/admin/inc/css/admin-icons-font.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('kids-r-us-lightbox', get_template_directory_uri() . '/framework/admin/inc/css/jquery.cmsmastersLightbox.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('kids-r-us-lightbox-rtl', get_template_directory_uri() . '/framework/admin/inc/css/jquery.cmsmastersLightbox-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	wp_enqueue_script('kids-r-us-uploader-js', get_template_directory_uri() . '/framework/admin/inc/js/jquery.cmsmastersUploader.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('kids-r-us-uploader-js', 'cmsmasters_admin_uploader', array( 
		'choose' => 				esc_attr__('Choose image', 'kids-r-us'), 
		'insert' => 				esc_attr__('Insert image', 'kids-r-us'), 
		'remove' => 				esc_attr__('Remove', 'kids-r-us'), 
		'edit_gallery' => 			esc_attr__('Edit gallery', 'kids-r-us') 
	));
	
	
	wp_enqueue_script('kids-r-us-lightbox-js', get_template_directory_uri() . '/framework/admin/inc/js/jquery.cmsmastersLightbox.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('kids-r-us-lightbox-js', 'cmsmasters_admin_lightbox', array( 
		'cancel' => 				esc_attr__('Cancel', 'kids-r-us'), 
		'insert' => 				esc_attr__('Insert', 'kids-r-us'), 
		'deselect' => 				esc_attr__('Deselect', 'kids-r-us'), 
		'choose_icon' => 			esc_attr__('Choose Icon', 'kids-r-us'), 
		'find_icons' => 			esc_attr__('Find icons', 'kids-r-us'), 
		'min_length' => 			esc_attr__('min 2 symbols', 'kids-r-us'), 
		'choose_font' => 			esc_attr__('Choose icons font', 'kids-r-us'), 
		'error_on_page' => 			esc_attr__("Error on page!\nReload page and try again.", 'kids-r-us') 
	));
	
	
	if ( 
		$hook == 'post.php' || 
		$hook == 'post-new.php' || 
		$hook == 'widgets.php' || 
		$hook == 'term.php' || 
		$hook == 'edit-tags.php' || 
		$hook == 'nav-menus.php' || 
		str_replace('cmsmasters-settings-element', '', $screen->id) != $screen->id 
	) {
		wp_enqueue_style('kids-r-us-icons', get_template_directory_uri() . '/css/fontello.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('kids-r-us-icons-custom', get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/css/fontello-custom.css', array(), '1.0.0', 'screen');
	}
	
	
	if ( 
		$hook == 'widgets.php' || 
		$hook == 'nav-menus.php' 
	) {
		wp_enqueue_media();
	}
	
	
	wp_enqueue_style('kids-r-us-admin-styles', get_template_directory_uri() . '/framework/admin/inc/css/admin-theme-styles.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('kids-r-us-admin-styles-rtl', get_template_directory_uri() . '/framework/admin/inc/css/admin-theme-styles-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	wp_enqueue_script('kids-r-us-admin-scripts', get_template_directory_uri() . '/framework/admin/inc/js/admin-theme-scripts.js', array('jquery'), '1.0.0', true);
	
	
	if ($hook == 'widgets.php') {
		wp_enqueue_style('kids-r-us-widgets-styles', get_template_directory_uri() . '/framework/admin/inc/css/widgets-styles.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_script('kids-r-us-widgets-scripts', get_template_directory_uri() . '/framework/admin/inc/js/widgets-scripts.js', array('jquery'), '1.0.0', true);
	}
}

add_action('admin_enqueue_scripts', 'kids_r_us_admin_register');

add_action('admin_enqueue_scripts', 'cmsmasters_composer_icons');

