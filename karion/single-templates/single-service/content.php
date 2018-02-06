<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @since 1.0.0
 */
global $opt_meta_options;
$image_gallery = !empty($opt_meta_options['single_services_gallery']) ? $opt_meta_options['single_services_gallery'] : '';
$image_ids = explode(',', $image_gallery);
$title_sinlge_service = !empty($opt_meta_options['title_sinlge_service']) ? $opt_meta_options['title_sinlge_service'] : '';
$excerpt_service = !empty($opt_meta_options['excerpt_service']) ? $opt_meta_options['excerpt_service'] : '';

wp_enqueue_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array( 'jquery' ), '1.0.0', true);
wp_enqueue_script('cms-flexslider', get_template_directory_uri() . '/assets/js/cms-flexslider.js', array( 'jquery' ), '1.0.0', true);

$_get_post_sidebar = construct_service_single_sidebar();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="single-services">
		<div class="single-services-main">
			<div class="wp-sidebar-and-carousel <?php echo esc_attr($_get_post_sidebar); ?>">
				<div class="gallery-service-single <?php construct_service_single_class();?>">
					<?php if(!empty($opt_meta_options['single_services_gallery'])) { ?>
						<div id="slider" class="flexslider">
							<ul class="slides">
								<?php foreach ($image_ids as $image_id): ?>
						            <?php
							            $attachment_image = wp_get_attachment_image_src($image_id, 'full', false);
							            if($attachment_image[0] != ''):?>
							            <li data-dot="<img src='<?php echo esc_url($attachment_image[0]);?>'>">
							            	<img src="<?php echo esc_url($attachment_image[0]);?>" alt="" />
							            </li>
						            <?php endif; ?>
						        <?php endforeach; ?>
							</ul>
						</div>
					<?php } else { ?>
						<div id="single-services-image-one" class="single-services-image">
							<?php construct_post_thumbnail(); ?>
						</div>
					<?php } ?>
					<?php if(!empty($opt_meta_options['title_sinlge_service'])) { ?>
						<h2 class="title-excerpt"><?php echo esc_attr($opt_meta_options['title_sinlge_service']);?></h2>
					<?php } ?>
					<?php if(!empty($opt_meta_options['services_excerpt'])) { ?>
					<div class="excerpt-single">
						<?php echo esc_attr($opt_meta_options['services_excerpt']);?>
					</div>
					<?php } ?>

				</div>
		        <?php if($_get_post_sidebar != 'is-no-sidebar'):
		            get_sidebar('service');
		        endif; ?>
			</div>
			<div class="single-services-holder">
				<div class="single-services-content ">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-## -->