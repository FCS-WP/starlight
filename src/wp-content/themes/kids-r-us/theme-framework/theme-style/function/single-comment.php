<?php 
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version 	1.0.0
 * 
 * Custom Single Comment Template
 * Created by CMSMasters
 * 
 */


function kids_r_us_mytheme_comment($comment, $args, $depth) {
    ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div id="comment-<?php comment_ID(); ?>" class="comment-body cmsmasters_comment_item">
			<figure class="cmsmasters_comment_item_avatar">
				<?php echo get_avatar($comment->comment_author_email, 70, get_option('avatar_default')) . "\n"; ?>
			</figure>
			<div class="comment-content cmsmasters_comment_item_cont">
				<div class="cmsmasters_comment_item_cont_info">
					<h4 class="fn cmsmasters_comment_item_title"><?php echo get_comment_author_link(); ?></h4>
				</div>
				<?php 
					echo '<abbr class="published cmsmasters_comment_item_date" title="' . get_comment_date() . '">' . 
						get_comment_date() . 
					'</abbr>';
					?>
				<div class="cmsmasters_comment_item_content">
					<?php 
					comment_text();
				
					comment_reply_link(array_merge($args, array( 
						'depth' => $depth, 
						'max_depth' => $args['max_depth'], 
						'reply_text' => esc_attr__('Reply', 'kids-r-us') 
					)));
					
					
					edit_comment_link(esc_attr__('Edit', 'kids-r-us'), '', '');
				
					if ($comment->comment_approved == '0') {
						echo '<p>' . 
							'<em>' . esc_html__('Your comment is awaiting moderation.', 'kids-r-us') . '</em>' . 
						'</p>';
					}
					?>
				</div>
			</div>
    </div>
    <?php 
}

