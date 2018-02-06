<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		
		<div class="comment-list-wrap box-blog">
			<h3 class="wg-title">
		    	<?php comments_number(__('Comments', "construct"),__('1 Comment', "construct"),__('Comments <span>%</span>', 'construct')); ?>
		   </h3>

			<?php construct_comment_nav(); ?>

			<ol class="comment-list">
				<?php
					wp_list_comments( array(
						'avatar_size' => 100,
						'style'       => 'ol',
						'short_ping'  => true,
						'callback'   => 'construct_custom_list_comment'
					) );
				?>
			</ol><!-- .comment-list -->

			<?php construct_comment_nav(); ?>
		</div>

	<?php endif; // have_comments() ?>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'construct' ); ?></p>
	<?php endif; ?>

	<?php 
		$args = array(
				'id_form'           => 'commentform',
				'id_submit'         => 'submit',
				'title_reply'       => esc_html__( 'Comment on this post*', 'construct'),
				'title_reply_to'    => esc_html__( 'Your Comment To ', 'construct') . '%s',
				'cancel_reply_link' => esc_html__( 'Cancel Comment', 'construct'),
				'label_submit'      => esc_html__( 'Post Comment', 'construct'),
				'comment_notes_before' => '',
				'fields' => apply_filters( 'comment_form_default_fields', array(
						'author' =>
						'<div class="row row-input-comment-form">'.
						'<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-inputs-comment  comment-form-author">'.'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
						'" size="30" placeholder="'.esc_html__('Name*', 'construct').'"/>
						</div>',

						'email' =>
						'<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-inputs-comment comment-form-email">'.'<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
						'" size="30" placeholder="'.esc_html__('Email*', 'construct').'"/></div>
						</div>',
						'otification' => '<p class="otification-comment"><span>'.esc_html__('Your email address will not be published.', 'construct').'</span></p>',
				)
				),
				'comment_field' =>
						'<div class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" placeholder="'.esc_html__('Comment', 'construct').'" aria-required="true">' .
						'</textarea></div>',
		);
		comment_form($args); 
	?>

</div><!-- .comments-area -->
