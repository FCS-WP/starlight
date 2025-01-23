<?php
/**
 * @package 	WordPress
 * @subpackage 	Kids R Us
 * @version		1.0.0
 * 
 * Comments Template
 * Created by CMSMasters
 * 
 */


if (post_password_required()) { 
	echo '<p class="nocomments">' . esc_html__('This post is password protected. Enter the password to view comments.', 'kids-r-us') . '</p>';
	
	
    return;
}


if (have_comments()) {
	echo '<aside id="comments" class="post_comments">' . "\n" . 
		'<h3 class="post_comments_title">';
	
	
	comments_number(esc_attr__('No Comments', 'kids-r-us'), esc_attr__('Comment', 'kids-r-us') . ' (1)', esc_attr__('Comments', 'kids-r-us') . ' (%)');
	
	
	echo '</h3>' . "\n";
	
	
	if (get_previous_comments_link() || get_next_comments_link()) {
		echo '<aside class="comments_nav">';
			
			if (get_previous_comments_link()) {
				echo '<span class="comments_nav_prev cmsmasters_theme_icon_comments_nav_prev">';
					
					previous_comments_link(esc_attr__('Previous Comments', 'kids-r-us'));
					
				echo '</span>';
			}
			
			
			if (get_next_comments_link()) {
				echo '<span class="comments_nav_next cmsmasters_theme_icon_comments_nav_next">';
					
					next_comments_link(esc_attr__('Next Comments', 'kids-r-us'));
					
				echo '</span>';
			}
			
		echo '</aside>';
	}
	
	
	echo '<ol class="commentlist">' . "\n";
	
	
	wp_list_comments(array( 
		'type' => 'comment', 
		'callback' => 'kids_r_us_mytheme_comment' 
	));
	
	
	echo '</ol>' . "\n";
	
	
	if (get_previous_comments_link() || get_next_comments_link()) {
		echo '<aside class="comments_nav">';
			
			if (get_previous_comments_link()) {
				echo '<span class="comments_nav_prev cmsmasters_theme_icon_comments_nav_prev">';
					
					previous_comments_link(esc_attr__('Previous Comments', 'kids-r-us'));
					
				echo '</span>';
			}
			
			
			if (get_next_comments_link()) {
				echo '<span class="comments_nav_next cmsmasters_theme_icon_comments_nav_next">';
					
					next_comments_link(esc_attr__('Next Comments', 'kids-r-us'));
					
				echo '</span>';
			}
			
		echo '</aside>';
	}
	
	
	echo '</aside>';
}


if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) {
	echo '<h5 class="no-comments cmsmasters_comments_closed">' . esc_html__('Comments are closed.', 'kids-r-us') . '</h5>';
}


$form_fields =  array( 
	'author' => '<p class="comment-form-author">' . "\n" .
		'<label>' . esc_html__('Your name', 'kids-r-us') . (($req) ? ' *' : '') . '</label>' . "\n" .  
		'<input type="text" id="author" name="author" value="' . esc_attr($commenter['comment_author']) . '" size="35"' . ((isset($aria_req)) ? $aria_req : '') . ' />' . "\n" . 
	'</p>' . "\n", 
	'email' => '<p class="comment-form-email">' . "\n" .
		'<label>' . esc_html__('Your email', 'kids-r-us') . (($req) ? ' *' : '') . '</label>' . "\n" . 
		'<input type="text" id="email" name="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="35"' . ((isset($aria_req)) ? $aria_req : '') . ' />' . "\n" . 
	'</p>' . "\n" 
);


if (get_option('show_comments_cookies_opt_in') == '1') {
	$form_fields['cookies'] = '<p class="comment-form-cookies-consent">' . "\n" . 
		'<input type="checkbox" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" value="yes"' . (empty($commenter['comment_author_email']) ? '' : ' checked="checked"') . ' />' . "\n" . 
		'<label for="wp-comment-cookies-consent">' . esc_html__('Save my name, email, and website in this browser for the next time I comment.', 'kids-r-us') . '</label>' . "\n" . 
	'</p>' . "\n";
}


comment_form(array( 
	'fields' => 			apply_filters('comment_form_default_fields', $form_fields),  
	'comment_field' => 		'<p class="comment-form-comment">' . 
								'<label>' . esc_html__('Comment', 'kids-r-us') . '</label>' . "\n" .
								'<textarea name="comment" id="comment" cols="67" rows="2"></textarea>' . 
							'</p>',
	'must_log_in' => 		'<p class="must-log-in">' . 
								esc_html__('You must be', 'kids-r-us') . 
								' <a href="' . esc_url(wp_login_url(apply_filters('the_permalink', get_permalink()))) . '">' 
									. esc_html__('logged in', 'kids-r-us') . 
								'</a> ' 
								. esc_html__('to post a comment', 'kids-r-us') . 
							'.</p>' . "\n", 
	'logged_in_as' => 		'<p class="logged-in-as">' . 
								esc_html__('Logged in as', 'kids-r-us') . 
								' <a href="' . esc_url(admin_url('profile.php')) . '">' . 
									$user_identity . 
								'</a>. ' . 
								'<a class="all" href="' . esc_url(wp_logout_url(apply_filters('the_permalink', get_permalink()))) . '" title="' . esc_attr__('Log out of this account', 'kids-r-us') . '">' . 
									esc_html__('Log out?', 'kids-r-us') . 
								'</a>' . 
							'</p>' . "\n",
	'comment_notes_before' => 	'<p class="comment-notes">' . 
									esc_html__('Your email address will not be published.', 'kids-r-us') . 
								'</p>' . "\n",  
	'comment_notes_after' => 	'', 
	'id_form' => 				'commentform', 
	'id_submit' => 				'submit', 
	'title_reply' => 			esc_html__('Leave a Reply', 'kids-r-us'), 
	'title_reply_to' => 		esc_html__('Leave your comment to', 'kids-r-us'), 
	'cancel_reply_link' => 		esc_html__('Cancel Reply', 'kids-r-us'), 
	'label_submit' => 			esc_html__('Add Comment', 'kids-r-us') 
));

