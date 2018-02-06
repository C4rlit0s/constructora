<?php 
    $dot_style = isset($atts['dot_style']) ? $atts['dot_style'] : 'dark'; 
    $box_style = isset($atts['box_style']) ? $atts['box_style'] : 'light'; 
?>
<?php $nav_style = isset($atts['nav_style']) ? $atts['nav_style'] : 'dark'; ?>
<?php $margin_dots_style = isset($atts['margin_dots_style']) ? $atts['margin_dots_style'] : 'top-40'; ?>

<div class="cms-carousel cms-carousel-service <?php echo esc_attr($atts['template']);?> nav-style-<?php echo esc_attr($nav_style); ?> dot-style-<?php echo esc_attr($dot_style); ?> margin-<?php echo esc_attr($margin_dots_style); ?> box-style-<?php echo esc_attr($box_style); ?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php
    $posts = $atts['posts'];
    $size = 'construct_portfolio_680x496';
    while($posts->have_posts()){
        $posts->the_post();
        ?>
            <div class="cms-carousel-item">
                <?php 
                    if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), $size, false)):
                        $class = ' has-feature-img';
                        $thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), $size, false);
                        $thumbnail = get_the_post_thumbnail(get_the_ID(), $size);
                    else:
                        $class = ' no-feature-img';
                        $thumbnail_url[0] = get_template_directory_uri(). '/assets/images/no-image.jpg';
                        $thumbnail = '<img src="'.get_template_directory_uri(). '/assets/images/no-image.jpg" alt="'.get_the_title().'" />';
                    endif;
                ?>
                <div class="entry-blog-crs-service <?php echo esc_attr($class); ?>">
                    <div class="entry-header cms-image-zoom">
                        <a href="<?php echo esc_url($thumbnail_url[0]); ?>" class="z-view"><?php echo ''.$thumbnail.''; ?></a>
                        <a href="<?php echo esc_url($thumbnail_url[0]); ?>" class="mask z-view">
                           <i class="fa fa-eye" aria-hidden="true"></i> 
                        </a>
                    </div>
                    <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
            </div>
        <?php
    }
    ?>
</div>