<?php 
    /* get categories */
    $taxo = 'category';
    $_category = array();
    if(!isset($atts['cat']) || $atts['cat']==''){
        $terms = get_terms($taxo);
        foreach ($terms as $cat){
            $_category[] = $cat->term_id;
        }
    } else {
        $_category  = explode(',', $atts['cat']);
    }
    $atts['categories'] = $_category;
?>
<div class="cms-grid-wraper cms-grid-service <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <div class="row <?php echo esc_attr($atts['grid_class']);?>">
        <?php
        $posts = $atts['posts'];
        $size = 'construct_services_680x496';
        while($posts->have_posts()){
            $posts->the_post();
            $groups = array();
            global $opt_meta_options;
            $groups[] = '"all"';
            $hide_feature_image = isset( $atts['hide_feature_image'] ) ? $atts['hide_feature_image'] : '';
            foreach(cmsGetCategoriesByPostID(get_the_ID(),$taxo) as $category){
                $groups[] = '"category-'.$category->slug.'"';
            }
            ?>
            <div class="<?php echo esc_attr($atts['item_class']);?>" data-groups='[<?php echo implode(',', $groups);?>]'>
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
                <div class="entry-service <?php echo esc_attr($class); ?> <?php if($hide_feature_image == 'yes') { echo 'hidden-feature-image'; } ?>">
                    
                    <header class="entry-header">
                        <div class="cms-images-zoom" data-dot="<img src='<?php echo esc_url($thumbnail_url[0]); ?>' />">
                            <a href="<?php echo esc_url($thumbnail_url[0]); ?>" class="z-view"><?php echo ''.$thumbnail.''; ?>
                        </div>
                    </header>
                    <div class="entry-body">
                        <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php if(!empty($opt_meta_options['services_excerpt'])):?>
                            <div class="entry-content-excerpt">
                                <?php echo substr(strip_shortcodes($opt_meta_options['services_excerpt']), 0, 120); ?>
                            </div>
                        <?php endif;?>
                        <div class="cms-btn">
                            <a class="read-more" href="<?php the_permalink(); ?>"><?php esc_html_e('view detail', 'construct') ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>