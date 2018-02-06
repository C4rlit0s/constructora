<?php 
    $font_family_custom = isset($atts['font_family_custom']) ? $atts['font_family_custom'] : 'Arial';
    $decs_color = isset($atts['decs_color']) ? $atts['decs_color'] : '#777';
?>
<div class="cms-fancybox-wraper cms-fancybox-layout4 <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <div class="cms-fancybox-item">
        <div class="cms-fancybox-content">
            <?php if($atts['description_item']): ?>
                <div class="cms-fancybox-description" style="color: <?php echo esc_attr($decs_color); ?>;">
                    <?php echo apply_filters('the_content',$atts['description_item']);?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>