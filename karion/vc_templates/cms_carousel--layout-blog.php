<?php 
    $dot_style = isset($atts['dot_style']) ? $atts['dot_style'] : 'dark'; 
    $box_style = isset($atts['box_style']) ? $atts['box_style'] : 'light'; 
?>
<?php 
    $nav_style = isset($atts['nav_style']) ? $atts['nav_style'] : 'dark'; 
    $margin_dots_style = isset($atts['margin_dots_style']) ? $atts['margin_dots_style'] : 'top-40'; 
?>

<div class="cms-carousel cms-carousel-blog-layout <?php echo esc_attr($atts['template']);?> nav-style-<?php echo esc_attr($nav_style); ?> margin-<?php echo esc_attr($margin_dots_style); ?> dot-style-<?php echo esc_attr($dot_style); ?> box-style-<?php echo esc_attr($box_style); ?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php
    $posts = $atts['posts'];
    $size = 'construct_blog_350x250';
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
                <div class="entry-blog <?php echo esc_attr($class); ?>">
                    <header class="entry-header">
                        <a href="<?php the_permalink(); ?>"><?php echo ''.$thumbnail.''; ?></a>
                        <div class="entry-meta">
                            <?php construct_crs_blog1(); ?>
                        </div>
                    </header>
                    <div class="entry-body">
                        <h5 class="entry-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php echo substr(strip_tags(strip_shortcodes(get_the_title())), 0,40).'...'; ?>
                            </a>
                        </h5>
                        <div class="entry-content">
                            <?php echo wp_trim_words(strip_tags(strip_shortcodes(get_the_content())),20); ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php
    }
    ?>
</div>