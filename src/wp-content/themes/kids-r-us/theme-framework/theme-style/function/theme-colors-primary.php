<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function kids_r_us_theme_colors_primary() {
	$cmsmasters_option = kids_r_us_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	" . (($scheme == 'default') ? "body," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}.check_parent label,
	{$rule}.project_details_item a,
	{$rule}.project_features_item a,
	{$rule}.profile_details_item a,
	{$rule}.profile_features_item a,
	{$rule}.cmsmasters_price_wrap .cmsmasters_period,
	{$rule}.pricing_title,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title,
	{$rule}.headline_inner .headline_text .entry-subtitle,
	{$rule}.widget_custom_posts_tabs_entries .tab_comments li p,
	{$rule}.breadcrumbs_sep {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_color']) . "
	}
	
	input:-internal-autofill-previewed, 
	input:-internal-autofill-selected, 
	textarea:-internal-autofill-previewed, 
	textarea:-internal-autofill-selected, 
	select:-internal-autofill-previewed, 
	select:-internal-autofill-selected,
	input:-webkit-autofill {
		" . cmsmasters_color_css('-webkit-text-fill-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}a,
	{$rule}.color_2,
	{$rule}.cmsmasters_icon_wrap a .cmsmasters_simple_icon,
	{$rule}.cmsmasters_header_search_form button:hover,  
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_heading_left .icon_box_heading:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:before, 
	{$rule}.bypostauthor > .comment-body .alignleft:before,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_edit a, 
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_meta a,
	{$rule}.cmsmasters_price_wrap,
	{$rule}.cmsmasters_wrap_more_items.cmsmasters_loading:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_top:before,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap,
	{$rule}.widget_calendar #today,
	{$rule}.widget_calendar td a:hover,
	{$rule}.cmsmasters_post_default .cmsmasters_post_cont_info a .cmsmasters_post_date abbr:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}
	
	" . (($scheme == 'default') ? "mark," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme} mark," : '') . "
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.widget_search .search_bar_wrap button:hover,
	{$rule}.cmsmasters_toggle_plus span {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}
	
	  
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]):focus,
	{$rule}textarea:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	{$rule}h1 a:hover,
	{$rule}h2 a:hover,
	{$rule}h3 a:hover,
	{$rule}h4 a:hover,
	{$rule}h5 a:hover,
	{$rule}h6 a:hover,
	{$rule}a:hover,
	{$rule}a.cmsmasters_cat_color:hover,
	{$rule}.cmsmasters_header_search_form button, 
	{$rule}.cmsmasters_icon_wrap a:hover .cmsmasters_simple_icon,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_edit a:hover, 
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_meta a:hover,
	{$rule}.subpage_nav > span,
	{$rule}.cmsmasters_button:hover,
	{$rule}.button:hover, 
	{$rule}input[type=submit]:hover,
	{$rule}input[type=button]:hover,
	{$rule}button:hover,
	{$rule}.post .cmsmasters_post_read_more,
	{$rule}.post .cmsmasters_cat_color,
	{$rule}.post .author,
	{$rule}.cmsmasters_theme_icon_like:hover,
	{$rule}.cmsmasters_theme_icon_comment:hover,
	{$rule}.cmsmasters_wrap_pagination .next:hover,
	{$rule}.cmsmasters_wrap_pagination .prev:hover,
	{$rule}.cmsmasters_prev_post:hover .cmsmasters_prev_arrow,
	{$rule}.cmsmasters_next_post:hover .cmsmasters_next_arrow,
	{$rule}.about_author_title:before,
	{$rule}.cmsmasters_single_slider_title:before,
	{$rule}.comment-reply-title:before,
	{$rule}.post_comments_title:before,
	{$rule}.project_features_title:before,
	{$rule}.project_details_title:before,
	{$rule}.profile_features_title:before,
	{$rule}.profile_details_title:before,
	{$rule}.comments_nav a:hover:before,
	{$rule}.owl-buttons .cmsmasters_next_arrow,
	{$rule}.owl-buttons .cmsmasters_prev_arrow,
	{$rule}.cmsmasters_post_tags a:hover,
	{$rule}.comment-reply-title small a:hover,
	{$rule}.cmsmasters_items_filter_list a,
	{$rule}.cmsmasters_project_cont_info span a,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but,
	{$rule}.cmsmasters_likes a.active, 
	{$rule}.cmsmasters_comments a.active,
	{$rule}.project_details_item a:hover,
	{$rule}.project_features_item a:hover,
	{$rule}.profile_details_item a:hover,
	{$rule}.profile_features_item a:hover,
	{$rule}.cmsmasters_profile_subtitle,
	{$rule}.profile_social_icons_list .cmsmasters_social_icon,
	{$rule}.cmsmasters_open_profile .profile_social_icons_list a:hover,
	{$rule}.cmsmasters_clients_slider .owl-prev:hover .cmsmasters_prev_arrow,
	{$rule}.cmsmasters_clients_slider .owl-next:hover .cmsmasters_next_arrow,
	{$rule}.cmsmasters_slider_post_read_more,
	{$rule}.cmsmasters_slider_project_category a,
	{$rule}.cmsmasters_slider_project_category,
	{$rule}.cmsmasters_pricing_item_inner .cmsmasters_button,
	{$rule}.cmsmasters_pricing_item_inner .feature_icon:before,
	{$rule}.pricing_best .cmsmasters_pricing_item_inner .cmsmasters_button:hover,
	{$rule}.cmsmasters_content_slider .owl-buttons .cmsmasters_prev_arrow:hover,
	{$rule}.cmsmasters_content_slider .owl-buttons .cmsmasters_next_arrow:hover,
	{$rule}.cmsmasters_quote_site a,
	{$rule}.cmsmasters_quotes_slider .owl-buttons .cmsmasters_prev_arrow:hover,
	{$rule}.cmsmasters_quotes_slider .owl-buttons .cmsmasters_next_arrow:hover,
	{$rule}.cmsmasters_toggle_title a:hover,
	{$rule}.cmsmasters_toggles .current_filter,
	{$rule}.cmsmasters_tabs_list_item a:hover,
	{$rule}.cmsmasters_tabs_list_item a:after,
	{$rule}.cmsmasters_tabs_list_item a:before,
	{$rule}.tabs_mode_tour .current_tab a,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_twitter_wrap .owl-buttons .cmsmasters_prev_arrow:hover,
	{$rule}.cmsmasters_twitter_wrap .owl-buttons .cmsmasters_next_arrow:hover,
	{$rule}.cmsmasters_theme_icon_user_twitter,
	{$rule}.cmsmasters_stat_inner:before,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before, 
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before,
	{$rule}.cmsmasters_breadcrumbs_inner span:not([class]),
	{$rule}.widget_recent_entries li a:hover,
	{$rule}.widget_custom_posts_tabs_entries .current_tab a,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_lpr_tabs_cont a:hover,
	{$rule}.widget_custom_posts_tabs_entries .tab_comments li a:hover,
	{$rule}.widget_custom_contact_info_entries > span:before, 
	{$rule}.widget_custom_contact_info_entries .adress_wrap:before,
	{$rule}.widget_nav_menu ul li a:hover,
	{$rule}.widget_custom_twitter_entries .tweet_time:before,
	{$rule}.widget_pages a:hover,
	{$rule}.widget_archive a:hover,
	{$rule}.widget_meta a:hover,
	{$rule}.widget_recent_comments a:hover,
	{$rule}.widget_calendar td a,
	{$rule}.cmsmasters_post_cont_info a .published:hover,
	{$rule}.cmsmasters_archive_item_user_name a,
	{$rule}.cmsmasters_archive_item_category a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a:hover,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a:hover,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a:hover,
	{$rule}.current_toggle .cmsmasters_toggle_title a,
	{$rule}.cmsmasters_search .cmsmasters_search_zero .search_bar_wrap .search_button button:hover,
	{$rule}.cmsmasters_wrap_pagination .page-numbers.current,
	{$rule}.cmsmasters_post_default .cmsmasters_post_cont_info a .cmsmasters_post_date abbr,
	{$rule}.widget_mailpoet_form .mailpoet_submit,
	{$rule}.cmsmasters_pings_list h2:before, 
	{$rule}.cmsmasters_pings_list h3:before, 
	{$rule}.cmsmasters_pings_list h4:before, 
	{$rule}.cmsmasters_pings_list h5:before, 
	{$rule}.cmsmasters_pings_list h6:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover']) . "
	}
	
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	{$rule}.owl-pagination .owl-page.active,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:after, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:after, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:after, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:after,
	{$rule}.cmsmasters_button,
	{$rule}.button, 
	{$rule}input[type=submit],
	{$rule}input[type=button],
	{$rule}button,
	{$rule}table thead,
	{$rule}.post .cmsmasters_post_read_more:hover,
	{$rule}.post .cmsmasters_theme_icon_pin_post,
	{$rule}.cmsmasters_wrap_pagination .next,
	{$rule}.cmsmasters_wrap_pagination .prev,
	{$rule}.cmsmasters_prev_arrow,
	{$rule}.cmsmasters_next_arrow,
	{$rule}.comments_nav a:before,
	{$rule}.owl-buttons .cmsmasters_next_arrow:hover,
	{$rule}.owl-buttons .cmsmasters_prev_arrow:hover,
	{$rule}.cmsmasters_clients_slider_wrap .cmsmasters_clients_slider .cmsmasters_prev_arrow,
	{$rule}.cmsmasters_clients_slider_wrap .cmsmasters_clients_slider .cmsmasters_next_arrow,
	{$rule}.cmsmasters_pricing_item_inner .cmsmasters_button:hover,
	{$rule}.pricing_best .cmsmasters_pricing_item_inner,
	{$rule}.pricing_best .cmsmasters_pricing_item_inner .cmsmasters_button,
	{$rule}.cmsmasters_content_slider .owl-buttons .cmsmasters_prev_arrow,
	{$rule}.cmsmasters_content_slider .owl-buttons .cmsmasters_next_arrow,
	{$rule}.cmsmasters_quotes_slider .owl-buttons .cmsmasters_prev_arrow,
	{$rule}.cmsmasters_quotes_slider .owl-buttons .cmsmasters_next_arrow,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_item:hover .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_icon_list_items .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_twitter_wrap .owl-buttons .cmsmasters_prev_arrow,
	{$rule}.cmsmasters_twitter_wrap .owl-buttons .cmsmasters_next_arrow,
	{$rule}.widget_search .search_bar_wrap button,
	{$rule}.error_cont .search_button button,
	{$rule}.cmsmasters_header_search_form,
	{$rule}.cmsmasters_header_search_form button,
	{$rule}.cmsmasters_search .cmsmasters_search_zero .search_bar_wrap .search_button button,
	{$rule}.widget_mailpoet_form {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover']) . "
	}
	
	" . (($scheme == 'default') ? "#slide_top:hover:after," : '') . "
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]):focus,
	{$rule}textarea:focus,
	{$rule}select:focus,
	{$rule}option:focus,
	{$rule}table thead th,
	{$rule}blockquote,
	{$rule}.cmsmasters_dropcap.type2,
	{$rule}.cmsmasters_quote_icon:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_item:hover .cmsmasters_icon_list_icon,
	{$rule}.widget_tag_cloud a:hover,
	{$rule}.button:hover:after, 
	{$rule}button:hover:after,
	{$rule}.cmsmasters_prev_arrow:hover:after,
	{$rule}.cmsmasters_next_arrow:hover:after,
	{$rule}.owl-buttons .cmsmasters_next_arrow:after,
	{$rule}.owl-buttons .cmsmasters_prev_arrow:after,
	{$rule}.cmsmasters_wrap_pagination .next:hover:after,
	{$rule}.cmsmasters_wrap_pagination .prev:hover:after,
	{$rule}.post .cmsmasters_post_read_more:after,
	{$rule}.cmsmasters_prev_post:hover .cmsmasters_prev_arrow:after,
	{$rule}.cmsmasters_next_post:hover .cmsmasters_next_arrow:after,
	{$rule}.comments_nav a:hover:before,
	{$rule}.cmsmasters_button:hover:after,
	{$rule}.cmsmasters_clients_slider .owl-prev:hover .cmsmasters_prev_arrow:after,
	{$rule}.cmsmasters_clients_slider .owl-next:hover .cmsmasters_next_arrow:after,
	{$rule}.cmsmasters_pricing_item_inner .cmsmasters_button:after,
	{$rule}.pricing_best .cmsmasters_pricing_item_inner:after,
	{$rule}.pricing_best .cmsmasters_pricing_item_inner .cmsmasters_button:hover:after,
	{$rule}.cmsmasters_content_slider .owl-buttons .cmsmasters_prev_arrow:hover:after,
	{$rule}.cmsmasters_content_slider .owl-buttons .cmsmasters_next_arrow:hover:after,
	{$rule}.cmsmasters_quotes_slider .owl-buttons .cmsmasters_prev_arrow:hover:after,
	{$rule}.cmsmasters_quotes_slider .owl-buttons .cmsmasters_next_arrow:hover:after,
	{$rule}.cmsmasters_twitter_wrap .owl-buttons .cmsmasters_prev_arrow:hover:after,
	{$rule}.cmsmasters_twitter_wrap .owl-buttons .cmsmasters_next_arrow:hover:after,
	{$rule}.cmsmasters_search .cmsmasters_search_zero .search_bar_wrap .search_button button:hover:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}input[type=submit]:hover,
	{$rule}input[type=button]:hover,
	{$rule}.widget_mailpoet_form .mailpoet_submit {
		" . cmsmasters_color_css('outline-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	" . (($scheme == 'default') ? ".headline_outer," : '') . "
	" . (($scheme == 'default') ? ".headline_outer a:hover," : '') . "
	{$rule}h1,
	{$rule}h2,
	{$rule}h3,
	{$rule}h4,
	{$rule}h5,
	{$rule}h6,
	{$rule}h1 a,
	{$rule}h2 a,
	{$rule}h3 a,
	{$rule}h4 a,
	{$rule}h5 a,
	{$rule}h6 a,
	{$rule}label,
	{$rule}blockquote,
	{$rule}table tfoot,
	{$rule}fieldset legend,
	{$rule}blockquote footer,
	{$rule}table caption,
	{$rule}.cmsmasters_dropcap.type1,
	{$rule}.cmsmasters_dropcap.type2,
	{$rule}.img_placeholder_small,
	{$rule}.cmsmasters_project_cont_info span a:hover,
	{$rule}.cmsmasters_project_cont_info span:before, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_title,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_title_counter_wrap, 
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap, 
	{$rule}.project_details .project_details_item_title,
	{$rule}.project_features .project_features_item_title,
	{$rule}.profile_details .profile_details_item_title,
	{$rule}.profile_features .profile_features_item_title, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > ul li a:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > ul li a:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive > li a:before,
	{$rule}.post .cmsmasters_post_cont_info,
	{$rule}.cmsmasters_post_date,
	{$rule}.cmsmasters_slider_post_date,
	{$rule}.cmsmasters_theme_icon_like,
	{$rule}.cmsmasters_theme_icon_comment,
	{$rule}.post .cmsmasters_cat_color:hover,
	{$rule}.post .author:hover,
	{$rule}.cmsmasters_project_category a:before,
	{$rule}.cmsmasters_comment_item_date,
	{$rule}.cmsmasters_post_tags:before,
	{$rule}.cmsmasters_post_tags a,
	{$rule}.cmsmasters_items_filter_list a:hover,
	{$rule}.cmsmasters_items_filter_list .current a,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:hover,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but.current,
	{$rule}.profile_social_icons_list .cmsmasters_social_icon:hover,
	{$rule}.cmsmasters_open_profile .profile_social_icons_list a,
	{$rule}.cmsmasters_slider_post_read_more:hover,
	{$rule}.cmsmasters_slider_project_category a:hover,
	{$rule}.cmsmasters_slider_project_category a:before,
	{$rule}.cmsmasters_quote_icon:before,
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_content,
	{$rule}.cmsmasters_quote_site a:hover,
	{$rule}.cmsmasters_toggle_title a,
	{$rule}.cmsmasters_tabs_list_item a,
	{$rule}.cmsmasters_stat_counter_wrap,
	{$rule}.widget_recent_entries li *,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_lpr_tabs_cont a,
	{$rule}.widget_custom_posts_tabs_entries .tab_comments li *,
	{$rule}.widget_custom_posts_tabs_entries .tab_comments li,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_lpr_tabs_cont .published,
	{$rule}#wp-calendar thead,
	{$rule}.widget_nav_menu ul li a,
	{$rule}.widget_tag_cloud a,
	{$rule}.widget_custom_twitter_entries .tweet_time,
	{$rule}.widget_pages a,
	{$rule}.widget_archive a,
	{$rule}.widget_meta a,
	{$rule}.widget_recent_comments a,
	{$rule}.cmsmasters_archive_item_user_name,
	{$rule}.cmsmasters_archive_item_user_name a:hover,
	{$rule}.cmsmasters_archive_item_category,
	{$rule}.cmsmasters_archive_item_category a:hover,
	{$rule}.cmsmasters_archive_item_date_wrap,
	{$rule}.cmsmasters_post_cont_info a {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}form .formError .formErrorContent,
	{$rule}.cmsmasters_video_wrap .mejs-container .mejs-controls,
	{$rule}body .cmsmasters_audio .mejs-container .mejs-controls,
	{$rule}body .mejs-container, 
	{$rule}body .mejs-container .mejs-controls, 
	{$rule}body .mejs-embed, 
	{$rule}body .mejs-embed body,
	{$rule}.error_cont .search_button button:hover,
	{$rule}.widget_mailpoet_form .mailpoet_submit:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}mark,
	{$rule}form .formError .formErrorContent,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.post .cmsmasters_post_read_more:hover,
	{$rule}.cmsmasters_prev_arrow,
	{$rule}.cmsmasters_next_arrow,
	{$rule}.comments_nav a:before,
	{$rule}.owl-buttons .cmsmasters_next_arrow:hover,
	{$rule}.owl-buttons .cmsmasters_prev_arrow:hover,
	{$rule}.cmsmasters_button,
	{$rule}.button, 
	{$rule}input[type=submit],
	{$rule}input[type=button],
	{$rule}button,
	{$rule}.cmsmasters_clients_slider .cmsmasters_prev_arrow,
	{$rule}.cmsmasters_clients_slider .cmsmasters_next_arrow,
	{$rule}.pricing_best .cmsmasters_pricing_item_inner,
	{$rule}.pricing_best .cmsmasters_price_wrap,
	{$rule}.pricing_best .pricing_title,
	{$rule}.pricing_best li a,
	{$rule}.pricing_best .cmsmasters_button,
	{$rule}.cmsmasters_content_slider .cmsmasters_prev_arrow,
	{$rule}.cmsmasters_content_slider .cmsmasters_next_arrow,
	{$rule}.cmsmasters_quotes_slider .owl-buttons .cmsmasters_prev_arrow,
	{$rule}.cmsmasters_quotes_slider .owl-buttons .cmsmasters_next_arrow,
	{$rule}.cmsmasters_twitter_wrap .owl-buttons .cmsmasters_prev_arrow,
	{$rule}.cmsmasters_twitter_wrap .owl-buttons .cmsmasters_next_arrow,
	{$rule}.cmsmasters_header_search_form, 
	{$rule}.cmsmasters_header_search_form button,
	{$rule}.cmsmasters_header_search_form .cmsmasters_header_search_form_close,
	{$rule}.widget_search .search_bar_wrap button,
	{$rule}.error_cont .search_button button {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_header_search_form input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_header_search_form  input:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_header_search_form  input::placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.pricing_best .cmsmasters_period,
	{$rule}.pricing_best li a:hover,
	{$rule}.cmsmasters_header_search_form button:hover,
	{$rule}.cmsmasters_header_search_form .cmsmasters_header_search_form_close:hover {
	color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . ", .7);
	}
	
	{$rule}input[type=submit],
	{$rule}input[type=button] {
		" . cmsmasters_color_css('outline-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	" . (($scheme == 'default') ? "body," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	" . (($scheme == 'default') ? ".middle_inner," : '') . "
	" . (($scheme == 'default') ? ".headline_outer," : '') . "
	{$rule}.cmsmasters_featured_block,
	{$rule}.cmsmasters_prev_post:hover .cmsmasters_prev_arrow,
	{$rule}.cmsmasters_next_post:hover .cmsmasters_next_arrow,
	{$rule}.comments_nav a:hover:before,
	{$rule}.owl-buttons .cmsmasters_next_arrow,
	{$rule}.owl-buttons .cmsmasters_prev_arrow,
	{$rule}.cmsmasters_button:hover,
	{$rule}.button:hover, 
	{$rule}input[type=submit]:hover,
	{$rule}input[type=button]:hover,
	{$rule}button:hover,
	{$rule}.cmsmasters_clients_slider .owl-prev:hover .cmsmasters_prev_arrow,
	{$rule}.cmsmasters_clients_slider .owl-next:hover .cmsmasters_next_arrow,
	{$rule}.cmsmasters_pricing_item_inner .cmsmasters_button,
	{$rule}.cmsmasters_content_slider .cmsmasters_prev_arrow:hover,
	{$rule}.cmsmasters_content_slider .cmsmasters_next_arrow:hover,
	{$rule}.cmsmasters_quotes_slider .owl-buttons .cmsmasters_prev_arrow:hover,
	{$rule}.cmsmasters_quotes_slider .owl-buttons .cmsmasters_next_arrow:hover,
	{$rule}.cmsmasters_twitter_wrap .owl-buttons .cmsmasters_prev_arrow:hover,
	{$rule}.cmsmasters_twitter_wrap .owl-buttons .cmsmasters_next_arrow:hover,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before,
	{$rule}.cmsmasters_header_search_form_close span:before,
	{$rule}.cmsmasters_header_search_form_close span:after,
	{$rule}.cmsmasters_img.with_caption {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.button:after,
	{$rule}button:after,
	{$rule}.cmsmasters_prev_arrow:after,
	{$rule}.cmsmasters_next_arrow:after,
	{$rule}.owl-buttons .cmsmasters_next_arrow:hover:after,
	{$rule}.owl-buttons .cmsmasters_prev_arrow:hover:after,
	{$rule}.cmsmasters_wrap_pagination .next:after,
	{$rule}.cmsmasters_wrap_pagination .prev:after,
	{$rule}.cmsmasters_button:after,
	{$rule}.post .cmsmasters_post_read_more:hover:after,
	{$rule}.comments_nav a:before,
	{$rule}.cmsmasters_clients_slider .cmsmasters_prev_arrow:after,
	{$rule}.cmsmasters_clients_slider .cmsmasters_next_arrow:after,
	{$rule}.pricing_best .cmsmasters_button:after,
	{$rule}.cmsmasters_content_slider .cmsmasters_prev_arrow:after,
	{$rule}.cmsmasters_content_slider .cmsmasters_next_arrow:after,
	{$rule}.cmsmasters_quotes_slider .owl-buttons .cmsmasters_prev_arrow:after,
	{$rule}.cmsmasters_quotes_slider .owl-buttons .cmsmasters_next_arrow:after,
	{$rule}.cmsmasters_twitter_wrap .owl-buttons .cmsmasters_prev_arrow:after,
	{$rule}.cmsmasters_twitter_wrap .owl-buttons .cmsmasters_next_arrow:after,
	{$rule}.widget_search .search_bar_wrap button:after,
	{$rule}.error_cont .search_button button:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon_wrap, 
	{$rule}table thead,
	{$rule}.post .cmsmasters_theme_icon_pin_post,
	{$rule}.cmsmasters_wrap_pagination .next,
	{$rule}.cmsmasters_wrap_pagination .prev,
	{$rule}.cmsmasters_pricing_item_inner .cmsmasters_button:hover,
	{$rule}.cmsmasters_search .cmsmasters_search_zero .search_bar_wrap .search_button button,
	{$rule}.cmsmasters_header_search_form select,
	{$rule}.widget_mailpoet_form input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}.widget_mailpoet_form select,
	{$rule}.widget_mailpoet_form textarea,
	{$rule}.widget_mailpoet_form .widgettitle,
	{$rule}.widget_mailpoet_form .mailpoet_submit:hover,
	{$rule}.cmsmasters_header_search_form input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]) {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.widget_mailpoet_form input::placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.widget_mailpoet_form input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.widget_mailpoet_form input::-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsmasters_header_search_form input::placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsmasters_header_search_form -webkit-input::placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsmasters_header_search_form -moz-input::placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
	
	" . (($scheme == 'default') ? "#slide_top:after," : '') . "
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:after,
	{$rule}.cmsmasters_hover_slider_thumbs li a:after,
	{$rule}.cmsmasters_pricing_item_inner .cmsmasters_button:hover:after,
	{$rule}.cmsmasters_search .cmsmasters_search_zero .search_bar_wrap .search_button button:after,
	{$rule}.widget_mailpoet_form select,
	{$rule}.widget_mailpoet_form textarea,
	{$rule}.widget_mailpoet_form input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]):focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.widget_mailpoet_form input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]) {
		border-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . ", .6);
	}
	
	{$rule}.widget_mailpoet_form .mailpoet_submit:hover {
		" . cmsmasters_color_css('outline-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
	
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	{$rule}select,
	{$rule}fieldset,
	{$rule}fieldset legend,
	{$rule}.img_placeholder_small,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon,
	{$rule}.gallery-item .gallery-icon,
	{$rule}.gallery-item .gallery-caption,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:before,
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}textarea,
	{$rule}option,
	{$rule}select,
	{$rule}.cmsmasters_wrap_pagination .next:hover,
	{$rule}.cmsmasters_wrap_pagination .prev:hover,
	{$rule}.portfolio .project_inner,
	{$rule}.cmsmasters_slider_project_inner ,
	{$rule}.cmsmasters_pricing_item_inner,
	{$rule}.cmsmasters_pricing_item_inner .cmsmasters_button,
	{$rule}.pricing_best .cmsmasters_pricing_item_inner .cmsmasters_button:hover,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}.widget_mailpoet_form .mailpoet_submit {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
	
	input:-internal-autofill-previewed, 
	input:-internal-autofill-selected, 
	textarea:-internal-autofill-previewed, 
	textarea:-internal-autofill-selected, 
	select:-internal-autofill-previewed, 
	select:-internal-autofill-selected,
	input:-webkit-autofill {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate'] . '!important') . "
		-webkit-box-shadow: inset 0 0 0 1000px " . $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate'] . ";
	}
	
	
	.cmsmasters_header_search_form input:-internal-autofill-previewed, 
	.cmsmasters_header_search_form input:-internal-autofill-selected, 
	.cmsmasters_header_search_form textarea:-internal-autofill-previewed, 
	.cmsmasters_header_search_form textarea:-internal-autofill-selected, 
	.cmsmasters_header_search_form select:-internal-autofill-previewed, 
	.cmsmasters_header_search_form select:-internal-autofill-selected,
	.cmsmasters_header_search_form input:-webkit-autofill {
		" . cmsmasters_color_css('-webkit-text-fill-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_alternate']) . "
	}
		
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.widget_custom_popular_projects_entries .owl-buttons .cmsmasters_prev_arrow:hover,
	{$rule}.widget_custom_popular_projects_entries .owl-buttons .cmsmasters_next_arrow:hover,
	{$rule}.widget_custom_latest_projects_entries .owl-buttons .cmsmasters_prev_arrow:hover,
	{$rule}.widget_custom_latest_projects_entries .owl-buttons .cmsmasters_next_arrow:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_border']) . " 
	}
	
	{$rule}.owl-pagination .owl-page,
	{$rule}.cmsmasters_icon_list_type_block .cmsmasters_icon_list_item:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}ul > li:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_border']) . "
	}
	
	" . (($scheme == 'default') ? ".headline_outer," : '') . "
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_info, 
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}textarea,
	{$rule}option,
	{$rule}select,
	{$rule}hr,
	{$rule}table td,
	{$rule}table th,
	{$rule}table:not([class]):not([id]),
	{$rule}.headline .headline_inner,
	{$rule}.cmsmasters_divider,
	{$rule}.cmsmasters_widget_divider,
	{$rule}.cmsmasters_img.with_caption,
	{$rule}.cmsmasters_icon_wrap .cmsmasters_simple_icon, 
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_icon_list_type_block .cmsmasters_icon_list_item,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_icon:after,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:after, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:before,
	{$rule}.cmsmasters_wrap_post_cont_info,
	{$rule}.about_author_inner,
	{$rule}.cmsmasters_wrap_items_loader,
	{$rule}.project_features_wrap,
	{$rule}.project_details_wrap,
	{$rule}.project_details_item,
	{$rule}.project_features_item,
	{$rule}.profile_features_wrap,
	{$rule}.profile_details_wrap,
	{$rule}.profile_details_item,
	{$rule}.profile_features_item,
	{$rule}.profile_outer,
	{$rule}.cmsmasters_quote_inner,
	{$rule}.cmsmasters_tabs_list_item,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat:before,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before,
	{$rule}.wp-caption,
	{$rule}.widget ul,
	{$rule}.widget ul li,
	{$rule}.widget ul li a,
	{$rule}.widget_tag_cloud a,
	{$rule}.widget_custom_twitter_entries .tweet_text,
	{$rule}.cmsmasters_archive_type,
	{$rule}.shop_table thead th,
	{$rule}.portfolio .project_inner_bd,
	{$rule}.cmsmasters_slider_project_inner_bd,
	{$rule}.cmsmasters_pricing_item_inner:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap:before {
		background-image: -webkit-linear-gradient(to right, " . $cmsmasters_option['kids-r-us' . '_' . $scheme . '_border'] . " 80%, rgba(0,0,0,0) 80%, rgba(0,0,0,0) 100%);
		background-image: -moz-linear-gradient(to right, " . $cmsmasters_option['kids-r-us' . '_' . $scheme . '_border'] . " 80%, rgba(0,0,0,0) 80%, rgba(0,0,0,0) 100%);
		background-image: -ms-linear-gradient(to right, " . $cmsmasters_option['kids-r-us' . '_' . $scheme . '_border'] . " 80%, rgba(0,0,0,0) 80%, rgba(0,0,0,0) 100%);
		background-image: -o-linear-gradient(to right, " . $cmsmasters_option['kids-r-us' . '_' . $scheme . '_border'] . " 80%, rgba(0,0,0,0) 80%, rgba(0,0,0,0) 100%);
		background-image: linear-gradient(to right, " . $cmsmasters_option['kids-r-us' . '_' . $scheme . '_border'] . " 80%, rgba(0,0,0,0) 80%, rgba(0,0,0,0) 100%);
	}	
	
	{$rule}.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_inner {
		background-image: -webkit-linear-gradient(to right, " . $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover'] . " 80%,  rgba(0,0,0,0) 80%, rgba(0,0,0,0) 100%);
		background-image: -moz-linear-gradient(to right, " . $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover'] . " 80%,  rgba(0,0,0,0) 80%, rgba(0,0,0,0) 100%);
		background-image: -ms-linear-gradient(to right, " . $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover'] . " 80%,  rgba(0,0,0,0) 80%, rgba(0,0,0,0) 100%);
		background-image: -o-linear-gradient(to right, " . $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover'] . " 80%,  rgba(0,0,0,0) 80%, rgba(0,0,0,0) 100%);
		background-image: linear-gradient(to right, " . $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover'] . " 80%,  rgba(0,0,0,0) 80%, rgba(0,0,0,0) 100%);
	}	
	/* Finish Borders Color */
	
	
	/* Start Custom Rules */
	{$rule}::selection {                 
		" . cmsmasters_color_css('background', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . ";
	}
	
	{$rule}::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	/*Wave Footer*/
	{$rule}.cmsmasters_footer_default:before {
		background-image: -webkit-radial-gradient(circle at 50% -13px, transparent 44px, rgb(" . cmsmasters_color2rgb($cmsmasters_option['kids-r-us' . '_footer_bg']) . ") 40px);
		background-image: -moz-radial-gradient(circle at 50% -13px, transparent 44px, rgb(" . cmsmasters_color2rgb($cmsmasters_option['kids-r-us' . '_footer_bg']) . ") 40px);
		background-image: -ms-radial-gradient(circle at 50% -13px, transparent 44px, rgb(" . cmsmasters_color2rgb($cmsmasters_option['kids-r-us' . '_footer_bg']) . ") 40px);
		background-image: -o-radial-gradient(circle at 50% -13px, transparent 44px, rgb(" . cmsmasters_color2rgb($cmsmasters_option['kids-r-us' . '_footer_bg']) . ") 40px);
		background-image: radial-gradient(circle at 50% -13px, transparent 44px, rgb(" . cmsmasters_color2rgb($cmsmasters_option['kids-r-us' . '_footer_bg']) . ") 40px);
	}	
	
	{$rule}.cmsmasters_footer_default:after {
		background-image: -webkit-radial-gradient(circle at 50% 102px, rgb(" . cmsmasters_color2rgb($cmsmasters_option['kids-r-us' . '_footer_bg']) . ") 52px, transparent 50px);
		background-image: -moz-radial-gradient(circle at 50% 102px, rgb(" . cmsmasters_color2rgb($cmsmasters_option['kids-r-us' . '_footer_bg']) . ") 52px, transparent 50px);
		background-image: -ms-radial-gradient(circle at 50% 102px, rgb(" . cmsmasters_color2rgb($cmsmasters_option['kids-r-us' . '_footer_bg']) . ") 52px, transparent 50px);
		background-image: -o-radial-gradient(circle at 50% 102px, rgb(" . cmsmasters_color2rgb($cmsmasters_option['kids-r-us' . '_footer_bg']) . ") 52px, transparent 50px);
		background-image: radial-gradient(circle at 50% 102px, rgb(" . cmsmasters_color2rgb($cmsmasters_option['kids-r-us' . '_footer_bg']) . ") 52px, transparent 50px);
	}
	
	@media only screen and (max-width: 950px) {
		{$rule}.tabs_mode_tab .current_tab a {
			" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover']) . "
		}
	}
	
	@media only screen and (max-width: 540px) {
		{$rule}.cmsmasters_wrap_pagination .prev:hover,
		{$rule}.cmsmasters_wrap_pagination .next:hover {
			" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_heading']) . "
		}
		
		{$rule}.cmsmasters_wrap_pagination .prev,
		{$rule}.cmsmasters_wrap_pagination .next {
			" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_hover']) . "
		}
	}	
	";
	
	
	if ($scheme != 'default') {
		$custom_css .= "
		.cmsmasters_color_scheme_{$scheme}.cmsmasters_row_top_zigzag:before, 
		.cmsmasters_color_scheme_{$scheme}.cmsmasters_row_bot_zigzag:after {
			background-image: -webkit-linear-gradient(135deg, " . $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-webkit-linear-gradient(45deg, " . $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -moz-linear-gradient(135deg, " . $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-moz-linear-gradient(45deg, " . $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -ms-linear-gradient(135deg, " . $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-ms-linear-gradient(45deg, " . $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -o-linear-gradient(135deg, " . $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-o-linear-gradient(45deg, " . $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: linear-gradient(315deg, " . $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					linear-gradient(45deg, " . $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
		}
		";
	}
	
	$custom_css .= "
	/* Finish Custom Rules */

/***************** Finish {$title} Color Scheme Rules ******************/


/***************** Start {$title} Button Color Scheme Rules ******************/
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bd_underline {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bd_underline:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:hover, 
	{$rule}.cmsmasters_button.cm.sms_but_bg_expand_hor:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:after {
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['kids-r-us' . '_' . $scheme . '_bg']) . "
	}

/***************** Finish {$title} Button Color Scheme Rules ******************/

";
	}
	
	
	return apply_filters('kids_r_us_theme_colors_primary_filter', $custom_css);
}

