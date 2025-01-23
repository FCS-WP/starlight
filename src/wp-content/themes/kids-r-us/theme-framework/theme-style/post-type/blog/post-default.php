<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version		1.0.0
 * 
 * Post Default Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_post_metadata = !is_home() ? explode(',', $cmsmasters_metadata) : array();


$date = (in_array('date', $cmsmasters_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || (is_home() && CMSMASTERS_CONTENT_COMPOSER)) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home()) ? true : false;


$cmsmasters_post_format = get_post_format();

?>
<!-- Start Post Default Article -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_post_default');?>>

	<div class="cmsmasters_post_cont">
		<?php
		if ($cmsmasters_post_format == 'image') {
			$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);
			
			kids_r_us_post_type_image(get_the_ID(), $cmsmasters_post_image_link);
		} elseif ($cmsmasters_post_format == 'gallery') {
			$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));
			
			kids_r_us_post_type_slider(get_the_ID(), $cmsmasters_post_images, 'post-thumbnail');
		} elseif ($cmsmasters_post_format == '' && !post_password_required() && has_post_thumbnail()) {
			kids_r_us_thumb(get_the_ID(), 'post-thumbnail', true, false, false, false, false, true, false);
		}
		
		if ($cmsmasters_post_format == 'audio') {
			$cmsmasters_post_audio_links = get_post_meta(get_the_ID(), 'cmsmasters_post_audio_links', true);
			
			kids_r_us_post_type_audio($cmsmasters_post_audio_links);
			
		} 
		
		
		if ($cmsmasters_post_format == 'video') {
			
			$cmsmasters_post_video_type = get_post_meta(get_the_ID(), 'cmsmasters_post_video_type', true);
			$cmsmasters_post_video_link = get_post_meta(get_the_ID(), 'cmsmasters_post_video_link', true);
			$cmsmasters_post_video_links = get_post_meta(get_the_ID(), 'cmsmasters_post_video_links', true);
			
			kids_r_us_post_type_video(get_the_ID(), $cmsmasters_post_video_type, $cmsmasters_post_video_link, $cmsmasters_post_video_links);
				
		}
			
		?>
	</div>
	
<?php
	echo '<div class="cmsmasters_wrap_post_cont_info">'; 
		
			kids_r_us_post_heading(get_the_ID(), 'h2');
			
			
			if ($author || $categories || $date || $likes || $comments) {
				echo '<div class="cmsmasters_post_cont_info entry-meta">';
				
					$date ? kids_r_us_get_post_date('page', 'default') : '';
					
					
					if ($author || $categories) {
						echo '<span class="wrap_autor">';
							$author ? kids_r_us_get_post_author('page') : '';		
									
							$categories ? kids_r_us_get_post_category(get_the_ID(), 'category', 'page') : '';
						echo '</span>';
					}
				
										
					$likes ? kids_r_us_get_post_likes('page') : '';			
						
					$comments ? kids_r_us_get_post_comments('page') : '';
					
				echo '</div>';
			}
			
			
			if (is_sticky() && !has_post_thumbnail() && !is_single() && is_home() && $cmsmasters_post_format != 'video' && $cmsmasters_post_format != 'audio' && $cmsmasters_post_format != 'gallery') {
				
				echo '<span class="cmsmasters_theme_icon_pin_post"></span>';
			}
		
			kids_r_us_post_exc_cont(100);
		
		echo '</div>';
		
		
		if ($more) {
			echo '<footer class="cmsmasters_post_footer entry-meta">';
				
				$more ? kids_r_us_post_more(get_the_ID()) : '';
				
			echo '</footer>';
		}
?>
</article>
<!-- Finish Post Default Article -->

