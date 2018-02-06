<?php
/**
 * The template for displaying a "No posts found" message
 */
?>
<article id="post-0" class="post no-results not-found">
	<div class="entry-header">
		<h2 class="entry-title"><?php esc_html_e( 'Nothing Found', 'construct' ); ?></h2>
	</div>
	<div class="entry-content">
		<p><?php esc_html_e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'construct' ); ?></p>

		<?php // get_search_form(); ?>

	</div><!-- .entry-content -->
</article><!-- #post-0 -->
