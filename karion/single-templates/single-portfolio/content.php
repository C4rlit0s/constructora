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
$image_gallery = !empty($opt_meta_options['single_portfolio_gallery']) ? $opt_meta_options['single_portfolio_gallery'] : '';
$image_ids = explode(',', $image_gallery);

wp_enqueue_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array( 'jquery' ), '1.0.0', true);
wp_enqueue_script('cms-flexslider', get_template_directory_uri() . '/assets/js/cms-flexslider.js', array( 'jquery' ), '1.0.0', true);

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="sg-portfolio-layout1">
		<div class="single-portfolio-main">
			<?php if(!empty($opt_meta_options['single_portfolio_gallery'])) { ?>
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
				<div id="carousel" class="flexslider">
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
				<div id="single-portfolio-image-one" class="single-portfolio-image">
					<?php construct_post_thumbnail(); ?>
				</div>
			<?php } ?>
			<div class="row single-portfolio-holder">
				<div class="col-lg-6 col-md-4 col-sm-5 col-xs-12 col-sidebar">	                
					<h3 class="title-portfolio-info">
                    	<?php echo esc_html__('PROJECT DETAILS', 'construct'); ?>
                	</h3>
					<ul class="portfolio-info">
		                <?php if ($opt_meta_options['model_text']) { ?>
		                	<li class="item-portfolio-info">
		                    	<span class="label-port-info"><?php echo esc_html__('Model: ', 'construct'); ?></span>
		                    	<span class="valu-info"><?php echo esc_attr($opt_meta_options['model_text']);?></span>
		                	</li>
		                <?php } ?>
	                
		                <?php if ($opt_meta_options['client_text']) { ?>
		                	<li class="item-portfolio-info">
		                    	<span class="label-port-info"><?php echo esc_html__('Client: ', 'construct'); ?></span>
		                    	<span class="valu-info"><?php echo esc_attr($opt_meta_options['client_text']);?></span>
		                	</li>
		                <?php } ?>
	                
		                <?php if ($opt_meta_options['location_text']) { ?>
		                	<li class="item-portfolio-info">
		                    	<span class="label-port-info"><?php echo esc_html__('Location: ', 'construct'); ?></span>
		                    	<span class="valu-info"><?php echo esc_attr($opt_meta_options['location_text']);?></span>
		                	</li>
		                <?php } ?>
	                
		                <?php if ($opt_meta_options['completed_text']) { ?>
		                	<li class="item-portfolio-info">
		                    	<span class="label-port-info"><?php echo esc_html__('Model: ', 'construct'); ?></span>
		                    	<span class="valu-info"><?php echo esc_attr($opt_meta_options['completed_text']);?></span>
		                	</li>
		                <?php } ?>
	                
		                <?php if ($opt_meta_options['value_text']) { ?>
		                	<li class="item-portfolio-info">
		                    	<span class="label-port-info"><?php echo esc_html__('Value: ', 'construct'); ?></span>
		                    	<span class="valu-info"><?php echo esc_attr($opt_meta_options['value_text']);?></span>
		                	</li>
		                <?php } ?>
	                
		                <?php if ($opt_meta_options['architects_text']) { ?>
		                	<li class="item-portfolio-info">
		                    	<span class="label-port-info"><?php echo esc_html__('Architects: ', 'construct'); ?></span>
		                    	<span class="valu-info"><?php echo esc_attr($opt_meta_options['architects_text']);?></span>
		                	</li>
		                <?php } ?>
					</ul>
				</div>
				<div class="col-lg-6 col-md-8 col-sm-7 col-xs-12 col-content">
					<h3 class="title-portfolio-info">
                    	<?php echo esc_html__('DESCRIPTIONS', 'construct'); ?>
                	</h3>
					<div class="single-portfolio-content ">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-## -->