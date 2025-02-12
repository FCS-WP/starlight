<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version		1.1.6
 * 
 * CMSMasters Importer Init File
 * Created by CMSMasters
 * 
 */


if (!class_exists('Cmsmasters_Demo_Content_Importer') && class_exists( 'Cmsmasters_Theme_Importer' )) {

class Cmsmasters_Demo_Content_Importer extends Cmsmasters_Theme_Importer {
	private static $instance;
	
	
	public $demo_files_path = CMSMASTERS_DEMO_FILES_PATH;
	
	
	public $content_demo_file_name  = 'content.xml';
	
	public $theme_settings_file_name = 'theme-settings.txt';
	
	public $widgets_file_name = 'widgets.json';
	
	
	public $sliders_folder_name = 'sliders/';
	
	
	public $thumbnails = array( 
		'thumbnail_crop' => 	'1', // '' - empty if not checked
		'thumbnail_size_w' => 	'150', 
		'thumbnail_size_h' => 	'150', 
		'medium_size_w' => 		'300', 
		'medium_size_h' => 		'300', 
		'large_size_w' => 		'1024', 
		'large_size_h' => 		'1024' 
	);
	
	
	public $pages = array( 
		'show_on_front' => 		'page', // 'post' if on set
		'page_on_front' => 		'Home', 
		'page_for_posts' => 	'' 
	);
	
	
	public function __construct() {
		self::$instance = $this;
		
		
		parent::__construct();
	}
	
	
	public function set_demo_menus() {
		$menus = array( 
			'top' => 		'Top Line Navigation', 
			'primary' => 	'Primary Navigation', 
			'footer' => 	'Footer Navigation'

		);
		
		
		$primary = get_term_by('name', $menus['primary'], 'nav_menu');
		$top = get_term_by('name', $menus['top'], 'nav_menu');
		$footer = get_term_by('name', $menus['footer'], 'nav_menu');
		
		
		set_theme_mod('nav_menu_locations', array( 
			'primary' => 	$primary->term_id, 
			'footer' => 	$footer->term_id 
		));
		
		
		$this->flag_as_imported['menus'] = true;
	}
}

}


function kids_r_us_run_importer() {
	new Cmsmasters_Demo_Content_Importer();
}

add_action('init', 'kids_r_us_run_importer');

