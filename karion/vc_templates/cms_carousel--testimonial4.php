<?php $dot_style = isset($atts['dot_style']) ? $atts['dot_style'] : 'dark'; ?>
<?php $nav_style = isset($atts['nav_style']) ? $atts['nav_style'] : 'dark'; ?>
<?php $margin_dots_style = isset($atts['margin_dots_style']) ? $atts['margin_dots_style'] : 'top-40'; ?>
<div class="cms-carousel cms-testimonial cms-testimonial-layout4 nav-style-<?php echo esc_attr($nav_style); ?> <?php echo esc_attr($atts['template']);?> dot-style-<?php echo esc_attr($dot_style); ?> margin-<?php echo esc_attr($margin_dots_style); ?>" id="<?php echo esc_attr($atts['html_id']);?>" data-center="true">
    <?php
    $posts = $atts['posts'];
    while($posts->have_posts()){
        global $opt_meta_options;
        $posts->the_post();
        $title_color = isset($atts['title_color']) ? $atts['title_color'] : '#333';

        ?>
        <div class="cms-carousel-item cms-testimonial-item">
            <div class="cms-testimonial-wrapper text-center clearfix">
                <div class="cms-testimonial-content">
                    <?php the_content(); ?>
                </div>
                <div class="cms-testimonial-sig">
                    <?php if(!empty($opt_meta_options['testimonial_sig'])):?>
                    <img src="<?php echo esc_url($opt_meta_options['testimonial_sig']['url']); ?>" alt="<?php the_title();?>" />
                    <?php endif; ?>
                </div>

                <h3 class="cms-testimonial-title" style="color: <?php echo esc_attr($title_color);?>">
                    <span class="title">
                        <?php the_title();?>
                    </span>
                    <?php if (!empty($opt_meta_options['testimonial_position']) && $opt_meta_options['testimonial_position']) { ?>
                        <span class="cms-testimonial-position">
                             - <?php echo esc_attr($opt_meta_options['testimonial_position']); ?>
                        </span>
                    <?php } ?>
                </h3>
            </div>
        </div>
        <?php
    }
    ?>
</div>