<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version		1.0.0
 * 
 * Profile Single Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = kids_r_us_get_global_options();


$cmsmasters_profile_title = get_post_meta(get_the_ID(), 'cmsmasters_profile_title', true);

$cmsmasters_profile_subtitle = get_post_meta(get_the_ID(), 'cmsmasters_profile_subtitle', true);

$cmsmasters_profile_features = get_post_meta(get_the_ID(), 'cmsmasters_profile_features', true);

$cmsmasters_profile_social = get_post_meta(get_the_ID(), 'cmsmasters_profile_social', true);


$cmsmasters_profile_details_title = get_post_meta(get_the_ID(), 'cmsmasters_profile_details_title', true);


$cmsmasters_profile_features_one_title = get_post_meta(get_the_ID(), 'cmsmasters_profile_features_one_title', true);
$cmsmasters_profile_features_one = get_post_meta(get_the_ID(), 'cmsmasters_profile_features_one', true);

$cmsmasters_profile_features_two_title = get_post_meta(get_the_ID(), 'cmsmasters_profile_features_two_title', true);
$cmsmasters_profile_features_two = get_post_meta(get_the_ID(), 'cmsmasters_profile_features_two', true);

$cmsmasters_profile_features_three_title = get_post_meta(get_the_ID(), 'cmsmasters_profile_features_three_title', true);
$cmsmasters_profile_features_three = get_post_meta(get_the_ID(), 'cmsmasters_profile_features_three', true);


$profile_details = '';

if (
	$cmsmasters_option['kids-r-us' . '_profile_post_cat'] || 
	$cmsmasters_option['kids-r-us' . '_profile_post_comment'] || 
	(
		!empty($cmsmasters_profile_features[0][0]) || 
		!empty($cmsmasters_profile_features[0][1])
	) || (
		!empty($cmsmasters_profile_features[1][0]) || 
		!empty($cmsmasters_profile_features[1][1])
	)
) {
	$profile_details = 'true';
}


$profile_sidebar = '';

if (
	$profile_details == 'true' || 
	$cmsmasters_profile_social != '' || 
	(
		!empty($cmsmasters_profile_features_one[0][0]) || 
		!empty($cmsmasters_profile_features_one[0][1])
	) || (
		!empty($cmsmasters_profile_features_one[1][0]) || 
		!empty($cmsmasters_profile_features_one[1][1])
	) || (
		!empty($cmsmasters_profile_features_two[0][0]) || 
		!empty($cmsmasters_profile_features_two[0][1])
	) || (
		!empty($cmsmasters_profile_features_two[1][0]) || 
		!empty($cmsmasters_profile_features_two[1][1])
	) || (
		!empty($cmsmasters_profile_features_three[0][0]) || 
		!empty($cmsmasters_profile_features_three[0][1])
	) || (
		!empty($cmsmasters_profile_features_three[1][0]) || 
		!empty($cmsmasters_profile_features_three[1][1])
	)
) {
	$profile_sidebar = 'true';
}


$cmsmasters_profile_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_profile_sharing_box', true);
$cmsmasters_heading = get_post_meta(get_the_ID(), 'cmsmasters_heading', true);

?>
<!-- Start Profile Single Article -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_profile'); ?>>
	<?php
	if ($cmsmasters_profile_title == 'true') {
		echo '<header class="cmsmasters_profile_header entry-header">';
			kids_r_us_profile_title_nolink(get_the_ID(), ($cmsmasters_heading == 'disabled' ? 'h1' : 'h2'), $cmsmasters_profile_subtitle, 'h6');
		echo '</header>';
	}
	
	
	echo '<div class="profile_content' . (($profile_sidebar == 'true') ? ' with_sidebar' : '') . '">';
		
		if (get_the_content() != '') {
			echo '<div class="cmsmasters_profile_content entry-content">' . "\n";
				
				the_content();
				
				
				wp_link_pages(array( 
					'before' => '<div class="subpage_nav">' . '<strong>' . esc_html__('Pages', 'kids-r-us') . ':</strong>', 
					'after' => '</div>', 
					'link_before' => '<span>', 
					'link_after' => '</span>' 
				));
				
			echo '</div>';
		}
		
	echo '</div>';
	
	
	if ($profile_sidebar == 'true') {
		echo '<div class="profile_sidebar">';
		
			if ($profile_details == 'true') {
				echo '<div class="profile_details entry-meta">' . 
					'<h3 class="profile_details_title">' . esc_html($cmsmasters_profile_details_title) . '</h3>';
					
					echo '<div class="profile_details_wrap">';
					
						kids_r_us_get_profile_likes('post');
						
						kids_r_us_get_profile_comments('post');
						
						kids_r_us_get_profile_features('details', $cmsmasters_profile_features, false, 'h3', true);
						
						kids_r_us_get_profile_category(get_the_ID(), 'pl-categs', 'post');
					
					echo '</div>';
				echo '</div>';
			}
			
			
			kids_r_us_get_profile_features('features', $cmsmasters_profile_features_one, $cmsmasters_profile_features_one_title, 'h3', true);
			
			kids_r_us_get_profile_features('features', $cmsmasters_profile_features_two, $cmsmasters_profile_features_two_title, 'h3', true);
			
			kids_r_us_get_profile_features('features', $cmsmasters_profile_features_three, $cmsmasters_profile_features_three_title, 'h3', true);
			
			
			kids_r_us_profile_open_social_icons($cmsmasters_profile_social, get_the_ID(), esc_html__('Socials', 'kids-r-us'), 'h4');
		
		echo '</div>';
	}
	?>
</article>
<!-- Finish Profile Single Article -->
<?php 

if ($cmsmasters_profile_sharing_box == 'true') {
	kids_r_us_sharing_box(esc_html__('Like this profile?', 'kids-r-us'), 'h4');
}


if ($cmsmasters_option['kids-r-us' . '_profile_post_nav_box']) {
	$order_cat = (isset($cmsmasters_option['kids-r-us' . '_profile_post_nav_order_cat']) ? $cmsmasters_option['kids-r-us' . '_profile_post_nav_order_cat'] : false);
	
	kids_r_us_prev_next_posts($order_cat, 'pl-categs');
}


comments_template();

