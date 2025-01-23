<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


function kids_r_us_theme_fonts() {
	$cmsmasters_option = kids_r_us_get_global_options();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


/***************** Start Theme Font Styles ******************/

	/* Start Content Font */
	body,
	.project_details_item, 
	.project_features_item,
	.project_details_item a, 
	.project_features_item a,
	.profile_details_item, 
	.profile_features_item,
	.profile_details_item a, 
	.profile_features_item a,
	.footer_copyright .privacy-policy-link
	.cmsmasters_quotes_grid .cmsmasters_quote_content,
	th,
	td,
	caption {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_content_font_google_font']) . $cmsmasters_option['kids-r-us' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_content_font_font_style'] . ";
	}
	
	.project_details_item, 
	.project_features_item,
	.project_details_item a, 
	.project_features_item a,
	.profile_details_item, 
	.profile_features_item,
	.profile_details_item a, 
	.profile_features_item a,
	.footer_copyright.copyright,
	.footer_copyright .privacy-policy-link {
		line-height:" . ((int) $cmsmasters_option['kids-r-us' . '_content_font_line_height'] - 6) . "px;
		font-size:" . ((int) $cmsmasters_option['kids-r-us' . '_content_font_font_size'] - 2) . "px;
	}
	
	ul > li,
	ol > li {
		line-height:" . ((int) $cmsmasters_option['kids-r-us' . '_content_font_line_height']) . "px;
	}
	
	.cmsmasters_icon_list_items li:before {
		line-height:" . $cmsmasters_option['kids-r-us' . '_content_font_line_height'] . "px;
	}
	/* Finish Content Font */


	/* Start Link Font */
	a,
	.subpage_nav > strong,
	.subpage_nav > span,
	.subpage_nav > a,
	.subpage_nav > span:not([class]),
	.widget_custom_posts_tabs_entries ul .cmsmasters_tabs_list_item a {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_link_font_google_font']) . $cmsmasters_option['kids-r-us' . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_link_font_text_decoration'] . ";
	}
	
	a:hover {
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_link_hover_decoration'] . ";
	}
	
	.about_author_cont a {
		line-height:" . ((int) $cmsmasters_option['kids-r-us' . '_link_font_line_height'] - 6) . "px;
		font-size:" . ((int) $cmsmasters_option['kids-r-us' . '_link_font_font_size'] - 2) . "px;
	}
	/* Finish Link Font */


	/* Start Navigation Title Font */
	.navigation > li > a,  
	.footer_nav > li > a,
	.nav_item_wrap .nav_tag,
	.cmsmasters_slider_post_read_more,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a,
	.cmsmasters_sitemap_wrap a,
	.menu-item-mega-container .menu-item-type-custom > a {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_nav_title_font_google_font']) . $cmsmasters_option['kids-r-us' . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_nav_title_font_text_transform'] . ";
	}
	
	.footer_nav > li > a {
		line-height:" . ((int) $cmsmasters_option['kids-r-us' . '_nav_title_font_line_height'] + 2) . "px;
		font-size:" . ((int) $cmsmasters_option['kids-r-us' . '_nav_title_font_font_size'] + 2) . "px;
	}
	
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a,
	.cmsmasters_sitemap_wrap a {
		line-height:" . ((int) $cmsmasters_option['kids-r-us' . '_nav_title_font_line_height'] + 4) . "px;
		font-size:" . ((int) $cmsmasters_option['kids-r-us' . '_nav_title_font_font_size'] + 4) . "px;
	}
	
	.nav_item_wrap .nav_tag {
		line-height:" . ((int) $cmsmasters_option['kids-r-us' . '_nav_title_font_line_height'] - 4) . "px;
		font-size:" . ((int) $cmsmasters_option['kids-r-us' . '_nav_title_font_font_size'] - 4) . "px;
	}
	/* Finish Navigation Title Font */


	/* Start Navigation Dropdown Font */
	.navigation ul li a,
	.top_line_nav ul li a,
	.top_line_nav > li > a,
	.top_line_nav > li > ul li,
	.nav_item_wrap .nav_subtitle,
	.header_top_meta .meta_wrap,
	.widget_recent_entries li span,
	.widget_custom_posts_tabs_entries .cmsmasters_lpr_tabs_cont .published,
	.tab_comments .published,
	.cmsmasters_archive_item_date {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_nav_dropdown_font_google_font']) . $cmsmasters_option['kids-r-us' . '_nav_dropdown_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_nav_dropdown_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_nav_dropdown_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_nav_dropdown_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_nav_dropdown_font_text_transform'] . ";
	}
	
	.top_line_nav > li > ul li a {
		font-size:" . ((int) $cmsmasters_option['kids-r-us' . '_nav_dropdown_font_font_size'] - 1) . "px;
	}
	
	/* Finish Navigation Dropdown Font */


	/* Start H1 Font */
	h1,
	h1 a,
	.logo .title, 
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	.cmsmasters_price_wrap .cmsmasters_price,
	.cmsmasters_price_wrap .cmsmasters_coins,
	.cmsmasters_price_wrap .cmsmasters_currency {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_h1_font_google_font']) . $cmsmasters_option['kids-r-us' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_price_wrap .cmsmasters_currency {
		font-size:28px;
	}
	
	.cmsmasters_dropcap {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_h1_font_google_font']) . $cmsmasters_option['kids-r-us' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['kids-r-us' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_icon_list_items.cmsmasters_icon_list_icon_type_number .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	.cmsmasters_icon_box.box_icon_type_number:before,
	.cmsmasters_icon_box.cmsmasters_icon_heading_left.box_icon_type_number .icon_box_heading:before {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_h1_font_google_font']) . $cmsmasters_option['kids-r-us' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['kids-r-us' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_h1_font_font_style'] . ";
	}
	
	.cmsmasters_dropcap.type1 {
		font-size:41px; /* static */
	}
	
	.cmsmasters_dropcap.type2 {
		font-size:41px; /* static */ 
	}
	
	.headline_outer .headline_inner .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['kids-r-us' . '_h1_font_font_size'] - 7) . "px;
		padding-bottom:" . ((int) $cmsmasters_option['kids-r-us' . '_h1_font_line_height'] - 27) . "px;
		
	}
	
	.headline_outer .headline_inner.align_left .headline_text_wrap {
		padding-left:15%
	}
	
	.headline_outer .headline_inner.align_right .headline_text_wrap {
		padding-right:15%
	}
	/* Finish H1 Font */


	/* Start H2 Font */
	h2,
	h2 a,
	.widget_mailpoet_form .widgettitle,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a,
	.cmsmasters_header_search_form input {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_h2_font_google_font']) . $cmsmasters_option['kids-r-us' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_h2_font_text_decoration'] . ";
	}
	
	h2.cmsmasters_profile_title a {
		font-size:" . ((int) $cmsmasters_option['kids-r-us' . '_h2_font_font_size'] - 2) . "px;
	}
	
	.one_fourth h2.cmsmasters_profile_title a {
		font-size:" . ((int) $cmsmasters_option['kids-r-us' . '_h2_font_font_size'] - 12) . "px;
		line-height:" . ((int) $cmsmasters_option['kids-r-us' . '_h2_font_line_height'] - 14) . "px;
	}
	/* Finish H2 Font */


	/* Start H3 Font */
	h3,
	h3 a,
	.error .error_title.h1,
	.error .error_title,
	.cmsmasters_toggle_title a,
	.tabs_mode_tab .cmsmasters_tabs_list_item a,
	.tabs_mode_tour .cmsmasters_tabs_list_item a {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_h3_font_google_font']) . $cmsmasters_option['kids-r-us' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_h3_font_text_decoration'] . ";
	}
	
	.tabs_mode_tour .cmsmasters_tabs_list_item a {
		font-size:" . ((int) $cmsmasters_option['kids-r-us' . '_h3_font_font_size'] - 4) . "px;
	}
	/* Finish H3 Font */


	/* Start H4 Font */
	h4, 
	h4 a, 
	.cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.post_nav a,
	.cmsmasters_slider_post_title a,
	.widget_recent_entries a,
	.widget_custom_posts_tabs_entries .cmsmasters_lpr_tabs_cont a,
	.widget_custom_posts_tabs_entries .tab_comments li a,
	#wp-calendar thead th,
	#wp-calendar caption  {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_h4_font_google_font']) . $cmsmasters_option['kids-r-us' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_h4_font_text_decoration'] . ";
	}
	
	.cmsmasters_slider_post_title a {
		font-size:" . ((int) $cmsmasters_option['kids-r-us' . '_h4_font_font_size'] + 5) . "px;
		line-height:" . ((int) $cmsmasters_option['kids-r-us' . '_h4_font_line_height'] + 4) . "px;
	}
	
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat {
		padding-top:" . ((int) $cmsmasters_option['kids-r-us' . '_h4_font_line_height'] * 2 + 13) . "px;
	}
	
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat_container {
		height:" . ((int) $cmsmasters_option['kids-r-us' . '_h4_font_line_height'] * 2 + 220 + 13) . "px;
	}
	/* Finish H4 Font */


	/* Start H5 Font */
	h5,
	h5 a,
	table tfoot td,
	table thead th,
	table:not([class]):not([id]) th,
	.cmsmasters_wrap_pagination .page-numbers,
	.comments_nav_next a,
	.comments_nav_prev a,
	.comment-reply-link,
	.comment-edit-link,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title,
	.widget_tag_cloud .tagcloud a {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_h5_font_google_font']) . $cmsmasters_option['kids-r-us' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_h5_font_text_decoration'] . ";
	}
	
	.cmsmasters_wrap_pagination .page-numbers {
		font-size:15px;
		text-transform:none;
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	h6,
	h6 a,
	label,
	.project_details_item_title, 
	.project_features_item_title,
	.profile_details_item_title, 
	.profile_features_item_title,
	.cmsmasters_items_filter_list a,
	.cmsmasters_post_tags a,
	.post .cmsmasters_post_cont_info,
	.post .cmsmasters_post_cont_info *,
	.portfolio .cmsmasters_project_cont_info span,
	.portfolio .cmsmasters_project_cont_info span *,
	.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but,
	.cmsmasters_slider_project_cont_info:before,
	.cmsmasters_slider_post_cont_info a,
	.cmsmasters_slider_post_cont_info *,
	.cmsmasters_slider_project_category *,
	.cmsmasters_slider_project_category a,
	.cmsmasters_price_wrap .cmsmasters_period,
	.cmsmasters_quote_site,
	.cmsmasters_quote_subtitle_wrap,
	.cmsmasters_twitter_wrap .published,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title,
	.widget_categories a,
	.widget_pages a,
	.widget_archive a,
	.widget_meta a,
	.widget_recent_comments a,
	.widget_recent_comments li,
	#wp-calendar,
	#wp-calendar th, 
	#wp-calendar td,
	.widget_nav_menu ul li a {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_h6_font_google_font']) . $cmsmasters_option['kids-r-us' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['kids-r-us' . '_h6_font_text_decoration'] . ";
	}
	
	/* Finish H6 Font */


	/* Start Button Font */
	.cmsmasters_button, 
	.button, 
	input[type=submit], 
	input[type=button], 
	button,
	.cmsmasters_post_read_more {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_button_font_google_font']) . $cmsmasters_option['kids-r-us' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_button_font_text_transform'] . ";
		letter-spacing:1px;
	}
	
	.gform_wrapper .gform_footer input.button, 
	.gform_wrapper .gform_footer input[type=submit] {
		font-size:" . $cmsmasters_option['kids-r-us' . '_button_font_font_size'] . "px !important;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	.cmsmasters_button.cmsmasters_but_icon_divider, 
	.cmsmasters_button.cmsmasters_but_icon_inverse {
		padding-left:" . ((int) $cmsmasters_option['kids-r-us' . '_button_font_line_height'] + 20) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_divider:before, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:before, 
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_divider:after, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		width:" . $cmsmasters_option['kids-r-us' . '_button_font_line_height'] . "px;
	}
	/* Finish Button Font */


	/* Start Small Text Font */
	small,
	.comment-reply-title small a, 
	form .formError .formErrorContent,
	.cmsmasters_comment_item_date {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_small_font_google_font']) . $cmsmasters_option['kids-r-us' . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['kids-r-us' . '_small_font_text_transform'] . ";
	}
	
	.cmsmasters_comment_item_date {
		font-weight:700
	}
	
	.gform_wrapper .description, 
	.gform_wrapper .gfield_description, 
	.gform_wrapper .gsection_description, 
	.gform_wrapper .instruction {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_small_font_google_font']) . $cmsmasters_option['kids-r-us' . '_small_font_system_font'] . " !important;
		font-size:" . $cmsmasters_option['kids-r-us' . '_small_font_font_size'] . "px !important;
		line-height:" . $cmsmasters_option['kids-r-us' . '_small_font_line_height'] . "px !important;
	}
	/* Finish Small Text Font */


	/* Start Text Fields Font */
	input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	textarea,
	select,
	option,
	.check_parent label {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_input_font_google_font']) . $cmsmasters_option['kids-r-us' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_input_font_font_style'] . ";
	}
	
	.gform_wrapper input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	.gform_wrapper textarea, 
	.gform_wrapper select {
		font-size:" . $cmsmasters_option['kids-r-us' . '_input_font_font_size'] . "px !important;
	}
	/* Finish Text Fields Font */


	/* Start Blockquote Font */
	blockquote,
	.cmsmasters_quote_inner {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_quote_font_google_font']) . $cmsmasters_option['kids-r-us' . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option['kids-r-us' . '_quote_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['kids-r-us' . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['kids-r-us' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_quote_font_font_style'] . ";
	}
	
	.cmsmasters_quote_inner .cmsmasters_quote_icon:before {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_quote_font_google_font']) . $cmsmasters_option['kids-r-us' . '_quote_font_system_font'] . ";
	}
	
	q {
		font-family:" . kids_r_us_get_google_font($cmsmasters_option['kids-r-us' . '_quote_font_google_font']) . $cmsmasters_option['kids-r-us' . '_quote_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['kids-r-us' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['kids-r-us' . '_quote_font_font_style'] . ";
	}
	/* Finish Blockquote Font */

/***************** Finish Theme Font Styles ******************/


";
	
	
	return apply_filters('kids_r_us_theme_fonts_filter', $custom_css);
}

