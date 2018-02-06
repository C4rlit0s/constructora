<?php 
    /* get categories */
        $taxo = 'team_categories';
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
<div class="cms-grid-wraper cms-layout-team <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <div class="row cms-grid <?php echo esc_attr($atts['grid_class']);?>">
        <?php
        $posts = $atts['posts'];
        $size = 'construct_team_120x120';
        while($posts->have_posts()){
            $posts->the_post();
            $groups = array();
            $groups[] = '"all"';
            $team_meta = construct_get_post_meta();
            $show_content = isset($atts['show_content']) ? $atts['show_content'] : 'yes';
            foreach(cmsGetCategoriesByPostID(get_the_ID(),$taxo) as $category){
                $groups[] = '"category-'.$category->slug.'"';
            }
            ?>
            <div class="cms-grid-item <?php echo esc_attr($atts['item_class']);?>" data-groups='[<?php echo implode(',', $groups);?>]'>
                <div class="cms-team-wrapper">
                    <div class="cms-team-header">
                        <?php 
                            if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), $size, false)):
                                $class = ' has-thumbnail';
                                $thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), $size, false);
                                $thumbnail = get_the_post_thumbnail(get_the_ID(),$size);
                            else:
                                $class = ' no-image';
                                $thumbnail_url[0] = get_template_directory_uri(). '/assets/images/no-image-540.jpg';
                                $thumbnail = '<img src="'.esc_url(get_template_directory_uri(). '/assets/images/no-image.jpg').'" alt="'.get_the_title().'" />';
                            endif;
                            echo '<div class="cms-team-image '.esc_attr($class).'">'.$thumbnail.'</div>';
                        ?>
                    </div>
                    <div class="cms-team-body">
                        <h3 class="cms-team-title"><?php the_title();?></h3>
                        <?php if(!empty($team_meta['team_position'])) { ?>
                            <div class="cms-team-position"><?php echo esc_attr($team_meta['team_position']); ?></div>
                        <?php } ?>
                        <?php if($show_content == 'yes') { ?>
                            <div class="cms-team-content">
                                <?php the_content(); ?>
                            </div>
                        <?php } ?>
                        <?php construct_team_social();?>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>