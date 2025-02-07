/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version		1.0.0
 * 
 * Theme Content Composer Schortcodes Extend
 * Created by CMSMasters
 * 
 */



/**
 * Blog Extend
 */

var cmsmasters_blog_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_blog.fields) {
	if (id === 'layout') {
		delete cmsmastersShortcodes.cmsmasters_blog.fields[id]['choises']['timeline'];
		
		
		cmsmasters_blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
	} else {
		cmsmasters_blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_blog.fields = cmsmasters_blog_new_fields;


/**
 * Portfolio Extend
 */

var portfolio_new_fields = {};

for (var id in cmsmastersShortcodes.cmsmasters_portfolio.fields) {
	if (id === 'filter_text') {
		delete cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'metadata_grid') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['choises'] = {
			'title' : 		cmsmasters_shortcodes.choice_title, 
			'categories' : 	cmsmasters_shortcodes.choice_categories, 
			'comments' : 	cmsmasters_shortcodes.choice_comments, 
			'likes' : 		cmsmasters_shortcodes.choice_likes 
		};
		
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'metadata_puzzle') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['choises'] = {
			'title' : 		cmsmasters_shortcodes.choice_title, 
			'categories' : 	cmsmasters_shortcodes.choice_categories, 
			'comments' : 	cmsmasters_shortcodes.choice_comments, 
			'likes' : 		cmsmasters_shortcodes.choice_likes 
		};
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else {
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_portfolio.fields = portfolio_new_fields;


/**
 * Post Slider Extend
 */
 
 var cmsmasters_posts_slider_new_fields = {};
 
 for (var id in cmsmastersShortcodes.cmsmasters_posts_slider.fields) {
 	if (id === 'portfolio_type') {
 		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
 	} else if (id === 'portfolio_metadata') {
			cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['choises'] = {
				'title' : 		cmsmasters_shortcodes.choice_title, 
				'categories' : 	cmsmasters_shortcodes.choice_categories, 
				'comments' : 	cmsmasters_shortcodes.choice_comments, 
				'likes' : 		cmsmasters_shortcodes.choice_likes 
			};
			
			cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
		} else {
			cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
		}
}
 

cmsmastersShortcodes.cmsmasters_posts_slider.fields = cmsmasters_posts_slider_new_fields; 


/**
 * Pricing Table Extend
 */

var cmsmasters_pricing_table_item_new_fields = {};


for (var id in cmsmastersMultipleShortcodes.cmsmasters_pricing_table_item.fields) {
	if (id === 'best_bg_color') {
		cmsmastersMultipleShortcodes.cmsmasters_pricing_table_item.fields[id]['title'] = cmsmasters_theme_shortcodes.pricing_offer_field_best_offer_bd_title;
		cmsmastersMultipleShortcodes.cmsmasters_pricing_table_item.fields[id]['descr'] = cmsmasters_theme_shortcodes.pricing_offer_field_best_offer_bd_descr;
		
		cmsmasters_pricing_table_item_new_fields[id] = cmsmastersMultipleShortcodes.cmsmasters_pricing_table_item.fields[id];
	} else {
		cmsmasters_pricing_table_item_new_fields[id] = cmsmastersMultipleShortcodes.cmsmasters_pricing_table_item.fields[id];
	}
}


cmsmastersMultipleShortcodes.cmsmasters_pricing_table_item.fields = cmsmasters_pricing_table_item_new_fields;


/**
 * Stats Extend
 */

var cmsmasters_stats_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_stats.fields) {
	if (id === 'type') {
		delete cmsmastersShortcodes.cmsmasters_stats.fields[id];
	} else if (id === 'count') {
		cmsmastersShortcodes.cmsmasters_stats.fields[id]['depend'] = 'mode:circles';
		
		
		cmsmasters_stats_new_fields[id] = cmsmastersShortcodes.cmsmasters_stats.fields[id];
	} else {
		cmsmasters_stats_new_fields[id] = cmsmastersShortcodes.cmsmasters_stats.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_stats.fields = cmsmasters_stats_new_fields;
