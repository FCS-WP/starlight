<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * 404 Error Page Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = kids_r_us_get_global_options();

?>

</div>

<!-- Start Content -->
<div class="entry">
	<div class="error">
		<div class="error_bg">
			<div class="error_inner">
				<h1 class="error_title"><?php echo esc_html__('404', 'kids-r-us'); ?></h1>
				<h3 class="error_subtitle"><?php echo esc_html__("Page not found", 'kids-r-us'); ?></h3>
			</div>
		</div>
	</div>
</div>
<div class="content_wrap fullwidth">
	<div class="error_cont">
		<?php 
		if ($cmsmasters_option['kids-r-us' . '_error_search']) { 
			get_search_form(); 
		}
		
		
		if ($cmsmasters_option['kids-r-us' . '_error_sitemap_button'] && $cmsmasters_option['kids-r-us' . '_error_sitemap_link'] != '') {
			echo '<div class="error_button_wrap"><a href="' . esc_url($cmsmasters_option['kids-r-us' . '_error_sitemap_link']) . '" class="button">' . esc_html__('Sitemap', 'kids-r-us') . '</a></div>';
		}
		?>
	</div>
<!-- Finish Content -->