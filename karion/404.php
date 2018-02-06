<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div id="primary" class="container">
	<main id="main" class="site-main">

		<div class="error-404 text-center">
			<h2 class="title404 ft-pl"><span><?php esc_html_e('404', 'construct'); ?></span></h2>
			<h3 class="title404-sub"><?php esc_html_e('OOPS! THE PAGE NOT FOUND', 'construct'); ?></h3>
			<a class="btn btn-primary" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('BACK TO HOME', 'construct'); ?></a>
		</div><!-- .error-404 -->

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
