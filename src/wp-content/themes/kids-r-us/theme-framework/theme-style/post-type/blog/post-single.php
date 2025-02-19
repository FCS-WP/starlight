<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version		1.0.8
 * 
 * Post Single Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = kids_r_us_get_global_options();

$cmsmasters_post_title = get_post_meta(get_the_ID(), 'cmsmasters_post_title', true);


list($cmsmasters_layout) = kids_r_us_theme_page_layout_scheme();

if ($cmsmasters_layout == 'fullwidth') {
	$cmsmasters_image_thumb_size = 'cmsmasters-full-masonry-thumb';
} else {
	$cmsmasters_image_thumb_size = 'cmsmasters-masonry-thumb';
}


$cmsmasters_post_format = get_post_format();


$cmsmasters_post_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_post_sharing_box', true);

$cmsmasters_post_author_box = get_post_meta(get_the_ID(), 'cmsmasters_post_author_box', true);

$cmsmasters_post_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_post_more_posts', true);

$cmsmasters_heading = get_post_meta(get_the_ID(), 'cmsmasters_heading', true);

?>

<!-- Start Post Single Article -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_post');?>>
	<?php
	 
	if (has_post_thumbnail() || $cmsmasters_post_format == 'video' || $cmsmasters_post_format == 'audio' || $cmsmasters_post_format == 'gallery') {
		
		echo '<div class="cmsmasters_post_head">';
		
			if ($cmsmasters_post_format == 'image') {
				$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);
				
				kids_r_us_post_type_image(get_the_ID(), $cmsmasters_post_image_link, $cmsmasters_image_thumb_size);
			} elseif ($cmsmasters_post_format == 'gallery') {
				$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));
				
				kids_r_us_post_type_slider(get_the_ID(), $cmsmasters_post_images, $cmsmasters_image_thumb_size);
			} elseif ($cmsmasters_post_format == 'video') {
				$cmsmasters_post_video_type = get_post_meta(get_the_ID(), 'cmsmasters_post_video_type', true);
				$cmsmasters_post_video_link = get_post_meta(get_the_ID(), 'cmsmasters_post_video_link', true);
				$cmsmasters_post_video_links = get_post_meta(get_the_ID(), 'cmsmasters_post_video_links', true);
				
				kids_r_us_post_type_video(get_the_ID(), $cmsmasters_post_video_type, $cmsmasters_post_video_link, $cmsmasters_post_video_links, $cmsmasters_image_thumb_size);
			} elseif ($cmsmasters_post_format == '' && !post_password_required() && has_post_thumbnail()) {
				$cmsmasters_post_image_show = get_post_meta(get_the_ID(), 'cmsmasters_post_image_show', true);
				
				if ($cmsmasters_post_image_show != 'true') {
					kids_r_us_thumb(get_the_ID(), $cmsmasters_image_thumb_size, false, 'cmsmasters_open_post_img', false, false, false, true, false);
				}
			}
			
			if ($cmsmasters_post_format == 'audio') {
			$cmsmasters_post_audio_links = get_post_meta(get_the_ID(), 'cmsmasters_post_audio_links', true);
			
			kids_r_us_post_type_audio($cmsmasters_post_audio_links);
			} 
		
		echo '</div>';
		
	}
	 
	?>
	
	<div class="cmsmasters_wrap_post_cont_info"> 
		<?php 
		if ($cmsmasters_post_title == 'true') {
			kids_r_us_post_title_nolink(get_the_ID(), ($cmsmasters_heading == 'disabled' ? 'h1' : 'h2'));
		}
		
		echo '<div class="cmsmasters_post_cont_info entry-meta">';
		
				if (
			$cmsmasters_option['kids-r-us' . '_blog_post_date'] || 
			$cmsmasters_option['kids-r-us' . '_blog_post_author'] || 
			$cmsmasters_option['kids-r-us' . '_blog_post_cat']
		) {
				echo '<div class="wrap_date_autor_cat">';
				
					kids_r_us_get_post_date('post');
				
					kids_r_us_get_post_author('post');
					
					kids_r_us_get_post_category(get_the_ID(), 'category', 'post');
					
				echo '</div>';
			}	
			
			
			echo '<div class="wrap_likes_comment">';
	
				kids_r_us_get_post_likes('post');
					
				kids_r_us_get_post_comments('post');
				
			echo '</div>';
								
		echo '</div>';
	
	
		if (get_the_content() != '') {
			echo '<div class="cmsmasters_post_content entry-content">';
				
				the_content();
				
				
				wp_link_pages(array( 
					'before' => '<div class="subpage_nav">' . '<strong>' . esc_html__('Pages', 'kids-r-us') . ':</strong>', 
					'after' => '</div>', 
					'link_before' => '<span>', 
					'link_after' => '</span>' 
				));
				
			echo '</div>';
		}
		
		
		if ($cmsmasters_option['kids-r-us' . '_blog_post_tag']) {
			
			
			echo '<footer class="cmsmasters_post_footer entry-meta">';
				
				kids_r_us_get_post_tags();
				
			echo '</footer>';
			
		}
		?>
	</div>
</article>
<!-- Finish Post Single Article -->
<?php 

if ($cmsmasters_post_sharing_box == 'true') {
	kids_r_us_sharing_box(esc_html__('Share This Post:', 'kids-r-us'), 'h4');
}


if ($cmsmasters_option['kids-r-us' . '_blog_post_nav_box']) {
	$order_cat = (isset($cmsmasters_option['kids-r-us' . '_blog_post_nav_order_cat']) ? $cmsmasters_option['kids-r-us' . '_blog_post_nav_order_cat'] : false);
	
	kids_r_us_prev_next_posts($order_cat, 'category');
}


if ($cmsmasters_post_author_box == 'true') {
	kids_r_us_author_box(esc_html__('About author', 'kids-r-us'), 'h3', 'h4');
}


if (get_the_tags()) {
	$tgsarray = array();
	
	foreach (get_the_tags() as $tagone) {
		$tgsarray[] = $tagone->term_id;
	}
} else {
	$tgsarray = '';
}


if ($cmsmasters_post_more_posts != 'hide') {
	kids_r_us_related( 
		'h3', 
		esc_html__('You Might Also Like', 'kids-r-us'), 
		esc_html__('No posts found', 'kids-r-us'), 
		$cmsmasters_post_more_posts, 
		$tgsarray, 
		$cmsmasters_option['kids-r-us' . '_blog_more_posts_count'], 
		$cmsmasters_option['kids-r-us' . '_blog_more_posts_pause'], 
		'post' 
	);
}


$get_post = get_post( get_the_ID() );
$show_ping = ( 'open' === $get_post->ping_status );

if ( $show_ping ) {
	echo kids_r_us_get_pings( get_the_ID(), 'h2' );
}


comments_template();

