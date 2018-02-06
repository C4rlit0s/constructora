<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @since 1.0.0
 */
global $opt_theme_options;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-blog">
		<div class="entry-body">
			<div class="entry-meta">
				<?php construct_post_detail(); ?>
			</div>
			<div class="entry-content">
				<?php the_content(); ?>
				<?php
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'construct' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
				?>
			</div>
		</div>
		<div class="wp-social-post">
			<ul class="entry-social-shared clearfix">
				<?php construct_get_socials_share(); ?>
			</ul>
		</div>
	</div>
	
	<?php if(isset($opt_theme_options['post_author']) && $opt_theme_options['post_author'] == 'show') { ?>
		<div class="entry-author box-blog">
			<h3 class="wg-title">
				<?php esc_html_e('About Author', 'construct'); ?>
			</h3> 
			<div class="blog-admin-post clearfix">
				<div class="admin-avt">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 'full' ); ?>
				</div>
				<div class="admin-info">
					<div class="admin-des">
						<?php the_author_meta( 'description' ); ?>
						<?php construct_get_user_social(); ?>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
</article><!-- #post-## -->
