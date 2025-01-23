<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.1.7
 * 
 * TGM-Plugin-Activation 2.6.1
 * Created by CMSMasters
 * 
 */


require_once(get_template_directory() . '/framework/class/class-tgm-plugin-activation.php');


if (!function_exists('kids_r_us_register_theme_plugins')) {

function kids_r_us_register_theme_plugins() { 
	$plugins = array( 
		array( 
			'name'					=> esc_html__('CMSMasters Content Composer', 'kids-r-us'), 
			'slug'					=> 'cmsmasters-content-composer', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-content-composer.zip', 
			'required'				=> true, 
			'version'				=> '2.5.5', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Mega Menu', 'kids-r-us'), 
			'slug'					=> 'cmsmasters-mega-menu', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-mega-menu.zip', 
			'required'				=> true, 
			'version'				=> '1.2.9', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Importer', 'kids-r-us'), 
			'slug'					=> 'cmsmasters-importer', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-importer.zip', 
			'required'				=> true, 
			'version'				=> '1.0.8', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		),
		array( 
			'name'					=> esc_html__('CMSMasters Custom Fonts', 'kids-r-us'), 
			'slug'					=> 'cmsmasters-custom-fonts', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-custom-fonts.zip', 
			'required'				=> true, 
			'version'				=> '1.0.1', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		),  
		array( 
			'name' 					=> esc_html__('LayerSlider WP', 'kids-r-us'), 
			'slug' 					=> 'LayerSlider', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/LayerSlider.zip', 
			'required'				=> false, 
			'version'				=> '7.14.0', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('Revolution Slider', 'kids-r-us'), 
			'slug' 					=> 'revslider', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/revslider.zip', 
			'required'				=> false, 
			'version'				=> '6.7.23', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('Envato Market', 'kids-r-us'), 
			'slug'					=> 'envato-market', 
			'source'				=> 'https://envato.github.io/wp-envato-market/dist/envato-market.zip', 
			'required'				=> false 
		), 
		array( 
			'name'					=> esc_html__('GDPR Cookie Consent', 'kids-r-us'), 
			'slug'					=> 'cookie-law-info', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WooCommerce', 'kids-r-us'), 
			'slug' 					=> 'woocommerce', 
			'required'				=> false 
		), 
		array( 
			'name'					=> esc_html__('Instagram Feed', 'kids-r-us'), 
			'slug'					=> 'instagram-feed', 
			'required'				=> false 
 		), 
		array( 
			'name' 					=> esc_html__('Contact Form 7', 'kids-r-us'), 
			'slug' 					=> 'contact-form-7', 
			'required' 				=> false 
		), 
		array( 
			'name'					=> esc_html__('MailPoet 3', 'kids-r-us'), 
			'slug'					=> 'mailpoet', 
			'required'				=> false 
		) 
	);
	
	if( ! class_exists('YITH_WCAS') ) {
		$plugins[]  = array( 
			'name'					=> esc_html__('YITH WooCommerce Ajax Search', 'kids-r-us'), 
			'slug'					=> 'yith-woocommerce-ajax-search', 
			'required'				=> false 
		);
	}

	if( ! class_exists('YITH_WCQV') ) {
		$plugins[]  = array( 
			'name'					=> esc_html__('YITH WooCommerce Quick View', 'kids-r-us'), 
			'slug'					=> 'yith-woocommerce-quick-view', 
			'required'				=> false 
		);
	}

	if( ! class_exists('YITH_WCWL') ) {
		$plugins[]  = array( 
			'name'					=> esc_html__('YITH WooCommerce Wishlist', 'kids-r-us'), 
			'slug'					=> 'yith-woocommerce-wishlist', 
			'required'				=> false 
		);
	}

	if( ! class_exists('YITH_WooCommerce_Zoom_Magnifier') ) {
		$plugins[]  = array( 
			'name'					=> esc_html__('YITH WooCommerce Zoom Magnifier', 'kids-r-us'), 
			'slug'					=> 'yith-woocommerce-zoom-magnifier', 
			'required'				=> false 
		);
	}

	if( ! class_exists('YITH_Popup') ) {
		$plugins[]  = array( 
			'name'					=> esc_html__('YITH WooCommerce Popup', 'kids-r-us'), 
			'slug'					=> 'yith-woocommerce-popup', 
			'required'				=> false 
		);
	}

	
	$config = array( 
		'id' => 			'kids-r-us', 
		'menu' => 			'theme-required-plugins', 
		'strings' => array( 
			'page_title' => 	esc_html__('Theme Required & Recommended Plugins', 'kids-r-us'), 
			'menu_title' => 	esc_html__('Theme Plugins', 'kids-r-us'), 
			'return' => 		esc_html__('Return to Theme Required & Recommended Plugins', 'kids-r-us') 
		) 
	);
	
	
	tgmpa($plugins, $config);
}

}

add_action('tgmpa_register', 'kids_r_us_register_theme_plugins');

