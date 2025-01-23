<?php 
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version		1.0.0
 * 
 * Admin Panel Post, Project, Profile Settings
 * Created by CMSMasters
 * 
 */


function kids_r_us_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'kids-r-us');
	
	if (CMSMASTERS_PROJECT_COMPATIBLE && class_exists('Cmsmasters_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'kids-r-us');
	}
	
	if (CMSMASTERS_PROFILE_COMPATIBLE && class_exists('Cmsmasters_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'kids-r-us');
	}
	
	
	return apply_filters('cmsmasters_options_single_tabs_filter', $tabs);
}


function kids_r_us_options_single_sections() {
	$tab = kids_r_us_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'kids-r-us');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'kids-r-us');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'kids-r-us');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_sections_filter', $sections, $tab);
} 


function kids_r_us_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = kids_r_us_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = kids_r_us_settings_single_defaults();
	
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'kids-r-us' . '_blog_post_layout', 
			'title' => esc_html__('Layout Type', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['kids-r-us' . '_blog_post_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'kids-r-us') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'kids-r-us') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'kids-r-us') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'kids-r-us' . '_blog_post_title', 
			'title' => esc_html__('Post Title', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_blog_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'kids-r-us' . '_blog_post_date', 
			'title' => esc_html__('Post Date', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_blog_post_date'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'kids-r-us' . '_blog_post_cat', 
			'title' => esc_html__('Post Categories', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_blog_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'kids-r-us' . '_blog_post_author', 
			'title' => esc_html__('Post Author', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_blog_post_author'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'kids-r-us' . '_blog_post_comment', 
			'title' => esc_html__('Post Comments', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_blog_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'kids-r-us' . '_blog_post_tag', 
			'title' => esc_html__('Post Tags', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_blog_post_tag'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'kids-r-us' . '_blog_post_like', 
			'title' => esc_html__('Post Likes', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_blog_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'kids-r-us' . '_blog_post_nav_box', 
			'title' => esc_html__('Posts Navigation Box', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_blog_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'kids-r-us' . '_blog_post_nav_order_cat', 
			'title' => esc_html__('Posts Navigation Order by Category', 'kids-r-us'), 
			'desc' => esc_html__('enable', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_blog_post_nav_order_cat'] 
		);
		
		if (class_exists('Cmsmasters_Content_Composer')) {
			$options[] = array( 
				'section' => 'post_section', 
				'id' => 'kids-r-us' . '_blog_post_share_box', 
				'title' => esc_html__('Sharing Box', 'kids-r-us'), 
				'desc' => esc_html__('show', 'kids-r-us'), 
				'type' => 'checkbox', 
				'std' => $defaults[$tab]['kids-r-us' . '_blog_post_share_box'] 
			);
		}
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'kids-r-us' . '_blog_post_author_box', 
			'title' => esc_html__('About Author Box', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_blog_post_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'kids-r-us' . '_blog_more_posts_box', 
			'title' => esc_html__('More Posts Box', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['kids-r-us' . '_blog_more_posts_box'], 
			'choices' => array( 
				esc_html__('Show Related Posts', 'kids-r-us') . '|related', 
				esc_html__('Show Popular Posts', 'kids-r-us') . '|popular', 
				esc_html__('Show Recent Posts', 'kids-r-us') . '|recent', 
				esc_html__('Hide More Posts Box', 'kids-r-us') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'kids-r-us' . '_blog_more_posts_count', 
			'title' => esc_html__('More Posts Box Items Number', 'kids-r-us'), 
			'desc' => esc_html__('posts', 'kids-r-us'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['kids-r-us' . '_blog_more_posts_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'kids-r-us' . '_blog_more_posts_pause', 
			'title' => esc_html__('More Posts Slider Pause Time', 'kids-r-us'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'kids-r-us'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['kids-r-us' . '_blog_more_posts_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'kids-r-us' . '_portfolio_project_title', 
			'title' => esc_html__('Project Title', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_portfolio_project_title'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'kids-r-us' . '_portfolio_project_details_title', 
			'title' => esc_html__('Project Details Title', 'kids-r-us'), 
			'desc' => esc_html__('Enter a project details block title', 'kids-r-us'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['kids-r-us' . '_portfolio_project_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'kids-r-us' . '_portfolio_project_date', 
			'title' => esc_html__('Project Date', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_portfolio_project_date'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'kids-r-us' . '_portfolio_project_cat', 
			'title' => esc_html__('Project Categories', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_portfolio_project_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'kids-r-us' . '_portfolio_project_author', 
			'title' => esc_html__('Project Author', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_portfolio_project_author'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'kids-r-us' . '_portfolio_project_comment', 
			'title' => esc_html__('Project Comments', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_portfolio_project_comment'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'kids-r-us' . '_portfolio_project_tag', 
			'title' => esc_html__('Project Tags', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_portfolio_project_tag'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'kids-r-us' . '_portfolio_project_like', 
			'title' => esc_html__('Project Likes', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_portfolio_project_like'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'kids-r-us' . '_portfolio_project_link', 
			'title' => esc_html__('Project Link', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_portfolio_project_link'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'kids-r-us' . '_portfolio_project_share_box', 
			'title' => esc_html__('Sharing Box', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_portfolio_project_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'kids-r-us' . '_portfolio_project_nav_box', 
			'title' => esc_html__('Projects Navigation Box', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_portfolio_project_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'kids-r-us' . '_portfolio_project_nav_order_cat', 
			'title' => esc_html__('Projects Navigation Order by Category', 'kids-r-us'), 
			'desc' => esc_html__('enable', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_portfolio_project_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'kids-r-us' . '_portfolio_project_author_box', 
			'title' => esc_html__('About Author Box', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_portfolio_project_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'kids-r-us' . '_portfolio_more_projects_box', 
			'title' => esc_html__('More Projects Box', 'kids-r-us'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['kids-r-us' . '_portfolio_more_projects_box'], 
			'choices' => array( 
				esc_html__('Show Related Projects', 'kids-r-us') . '|related', 
				esc_html__('Show Popular Projects', 'kids-r-us') . '|popular', 
				esc_html__('Show Recent Projects', 'kids-r-us') . '|recent', 
				esc_html__('Hide More Projects Box', 'kids-r-us') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'kids-r-us' . '_portfolio_more_projects_count', 
			'title' => esc_html__('More Projects Box Items Number', 'kids-r-us'), 
			'desc' => esc_html__('projects', 'kids-r-us'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['kids-r-us' . '_portfolio_more_projects_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'kids-r-us' . '_portfolio_more_projects_pause', 
			'title' => esc_html__('More Projects Slider Pause Time', 'kids-r-us'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'kids-r-us'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['kids-r-us' . '_portfolio_more_projects_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'kids-r-us' . '_portfolio_project_slug', 
			'title' => esc_html__('Project Slug', 'kids-r-us'), 
			'desc' => esc_html__('Enter a page slug that should be used for your projects single item', 'kids-r-us'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['kids-r-us' . '_portfolio_project_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'kids-r-us' . '_portfolio_pj_categs_slug', 
			'title' => esc_html__('Project Categories Slug', 'kids-r-us'), 
			'desc' => esc_html__('Enter page slug that should be used on projects categories archive page', 'kids-r-us'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['kids-r-us' . '_portfolio_pj_categs_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'kids-r-us' . '_portfolio_pj_tags_slug', 
			'title' => esc_html__('Project Tags Slug', 'kids-r-us'), 
			'desc' => esc_html__('Enter page slug that should be used on projects tags archive page', 'kids-r-us'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['kids-r-us' . '_portfolio_pj_tags_slug'], 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'kids-r-us' . '_profile_post_title', 
			'title' => esc_html__('Profile Title', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_profile_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'kids-r-us' . '_profile_post_details_title', 
			'title' => esc_html__('Profile Details Title', 'kids-r-us'), 
			'desc' => esc_html__('Enter a profile details block title', 'kids-r-us'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['kids-r-us' . '_profile_post_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'kids-r-us' . '_profile_post_cat', 
			'title' => esc_html__('Profile Categories', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_profile_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'kids-r-us' . '_profile_post_comment', 
			'title' => esc_html__('Profile Comments', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_profile_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'kids-r-us' . '_profile_post_like', 
			'title' => esc_html__('Profile Likes', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_profile_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'kids-r-us' . '_profile_post_nav_box', 
			'title' => esc_html__('Profiles Navigation Box', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_profile_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'kids-r-us' . '_profile_post_nav_order_cat', 
			'title' => esc_html__('Profiles Navigation Order by Category', 'kids-r-us'), 
			'desc' => esc_html__('enable', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_profile_post_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'kids-r-us' . '_profile_post_share_box', 
			'title' => esc_html__('Sharing Box', 'kids-r-us'), 
			'desc' => esc_html__('show', 'kids-r-us'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['kids-r-us' . '_profile_post_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'kids-r-us' . '_profile_post_slug', 
			'title' => esc_html__('Profile Slug', 'kids-r-us'), 
			'desc' => esc_html__('Enter a page slug that should be used for your profiles single item', 'kids-r-us'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['kids-r-us' . '_profile_post_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'kids-r-us' . '_profile_pl_categs_slug', 
			'title' => esc_html__('Profile Categories Slug', 'kids-r-us'), 
			'desc' => esc_html__('Enter page slug that should be used on profiles categories archive page', 'kids-r-us'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['kids-r-us' . '_profile_pl_categs_slug'], 
			'class' => '' 
		);
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_fields_filter', $options, $tab);
}

