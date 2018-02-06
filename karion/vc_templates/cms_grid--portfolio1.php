<?php 
    /* get categories */
    $taxo = 'portfolio_categories';
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

    $item_space = isset($atts['item_space']) ? $atts['item_space'] : '15px';

?>
<div class="cms-grid-wraper cms-grid-portfolio cms-grid-portfolio1 <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php if($atts['filter']=="true" and $atts['layout']=='masonry'):?>
        <div class="cms-grid-filter">
            <ul class="cms-filter-category list-unstyled list-inline cms-filter-style1">
                <li><a class="active" href="#" data-group="all">All</a></li>
                <?php foreach($atts['categories'] as $category):?>
                    <?php $term = get_term( $category, $taxo );?>
                    <li><a href="#" data-group="<?php echo esc_attr('category-'.$term->slug);?>">
                            <?php echo esc_html($term->name);?>
                        </a>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
    <?php endif;?>
    <div class="row <?php echo esc_attr($atts['grid_class']);?>" style="margin: 0 -<?php echo esc_attr($item_space); ?>;">
        <?php
        $posts = $atts['posts'];
        $size = 'construct_portfolio_680x496';
        while($posts->have_posts()){
            $posts->the_post();
            $groups = array();
            $groups[] = '"all"';
            global $opt_meta_options;
            $image_crop_masonry = isset($atts['image_crop_masonry']) ? $atts['image_crop_masonry'] : 'normal';
            $size = '';
            if(isset($opt_meta_options['image_crop']) && $image_crop_masonry == 'masonry') {
                $size = $opt_meta_options['image_crop'];
            } else {
                $size = 'full';
            }
            
            foreach(cmsGetCategoriesByPostID(get_the_ID(),$taxo) as $category){
                $groups[] = '"category-'.$category->slug.'"';
            }
            ?>
            <div class="<?php echo esc_attr($atts['item_class']);?>" style="padding: <?php echo esc_attr($item_space); ?>;" data-groups='[<?php echo implode(',', $groups);?>]'>
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
                <div class="cms-portfolio-wrapper">
                    <div class="cms-portfolio-image">
                        <?php
                            if (!empty($portfolio_featured_image) && $item_space != '0px') { ?>
                                <img src="<?php echo esc_url($portfolio_featured_image); ?>" />
                            <?php } else {
                                echo wp_kses_post($thumbnail); 
                            } 
                        ?>
                        <div class="mask"></div>
                        <div class="cms-portfolio-overlay">
                            <div class="cms-portfolio-holder">
                                <h3 class="cms-portfolio-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>