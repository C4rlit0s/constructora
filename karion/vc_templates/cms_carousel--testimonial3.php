<?php 
$dot_style = isset($atts['dot_style']) ? $atts['dot_style'] : 'dark'; 
?>
<?php $nav_style = isset($atts['nav_style']) ? $atts['nav_style'] : 'dark'; ?>
<?php $margin_dots_style = isset($atts['margin_dots_style']) ? $atts['margin_dots_style'] : 'top-40'; ?>

<div class="cms-carousel cms-testimonial cms-testimonial-layout3 <?php echo esc_attr($atts['template']);?> nav-style-<?php echo esc_attr($nav_style); ?> dot-style-<?php echo esc_attr($dot_style); ?> margin-<?php echo esc_attr($margin_dots_style); ?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php
    $posts = $atts['posts'];
    $size = 'construct_testimonial_150x150';
    while($posts->have_posts()){
        $posts->the_post();
        global $opt_meta_options;
        $testimonial_meta = construct_get_post_meta();
        $bg_item_color = isset($atts['bg_testimonial_color']) ? $atts['bg_testimonial_color'] : '#f8f8f8';
        $title_color = isset($atts['title_color']) ? $atts['title_color'] : '#333';
        ?>
        <div class="cms-carousel-item cms-testimonial-item">
            <div class="cms-testimonial-wrapper clearfix" style="background-color: <?php echo esc_attr($bg_item_color);?>">
                <div class="cms-testimonial-image">
                    <?php 
                        if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), $size, false)):
                            $class = ' has-thumbnail';
                            $thumbnail = get_the_post_thumbnail(get_the_ID(),$size);
                        else:
                            $class = ' no-image';
                            $thumbnail = '<img src="'.esc_url(get_template_directory_uri(). '/assets/images/no-image.jpg').'" alt="'.get_the_title().'" />';
                        endif;
                        echo ''.$thumbnail.'';
                    ?>
                </div>
                
                <div class="cms-testimonial-content">
                    <h3 class="cms-testimonial-title" style="color: <?php echo esc_attr($title_color);?>">
                        <span class="title">
                            <?php the_title();?>
                        </span>
                        <?php if(!empty($testimonial_meta['testimonial_position'])):?>
                            <span class="cms-testimonial-position">
                                <?php echo esc_attr($testimonial_meta['testimonial_position']); ?>
                            </span>
                        <?php endif;?>
                    </h3>
                    <div class="entry-content custom-font1">
                        <?php echo get_the_content(); ?>
                    </div>
                    <?php if(!empty($opt_meta_options['testimonial_stars'])):?>
                        <div class="cms-testimonial-meta">
                            <span class="cms-testimonial-star <?php echo esc_attr($opt_meta_options['testimonial_stars']);?>"></span>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>