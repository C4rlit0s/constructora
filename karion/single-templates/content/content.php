<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-blog entry-blog-items">
		<header class="entry-header">
			<?php construct_post_thumbnail('medium_large');?>
		</header>
		<div class="entry-body">
			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>">
					<?php if(is_sticky()){ echo "<i class='fa fa-thumb-tack'></i>"; } ?>
					<?php the_title(); ?>
				</a>
			</h2>
			<div class="entry-meta">
				<?php construct_post_detail(); ?>
			</div>
			<div class="entry-content">
				<?php echo wp_trim_words(strip_tags(strip_shortcodes(get_the_content())),50); ?>
			</div>
			<a class="btn-readmore-post" href="<?php the_permalink();?>"><?php echo esc_html('Read More', 'construct');?></a>
		</div>
	</div>
</article>
