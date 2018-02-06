<?php 
    $icon_name = "icon_" . $atts['icon_type'];
    $iconClass = isset($atts[$icon_name])?$atts[$icon_name]:'';
    $icon_custom = isset($atts['icon_custom']) ? $atts['icon_custom'] : '';
    $icon_color = isset($atts['icon_color']) ? $atts['icon_color'] : '#fab702';
    $title_font_size = isset($atts['title_font_size']) ? $atts['title_font_size'] : '25px';
    $title_color = isset($atts['title_color']) ? $atts['title_color'] : '#333333';
    $decs_color = isset($atts['decs_color']) ? $atts['decs_color'] : '#666';
    $bg_fcb_active = isset($atts['bg_fcb_color']) ? $atts['bg_fcb_color'] : '#333';

    $fancybox_content_align = isset($atts['fancybox_content_align']) ? $atts['fancybox_content_align'] : 'center';
?>
<div class="cms-fancybox-wraper cms-fancybox-layout3 <?php echo esc_attr($bg_fcb_active);?> <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <div class="cms-fancybox-item">
        <?php 
            $image_url = '';
            if (!empty($atts['image'])) {
                $attachment_image = wp_get_attachment_image_src($atts['image'], 'full');
                $image_url = $attachment_image[0];
            }
        ?>
        
        <?php if($image_url):?>
            <div class="cms-fancybox-icon">
                <img src="<?php echo esc_attr($image_url);?>" />
            </div>
        <?php else:?>
            <div class="cms-fancybox-icon">
                <?php if( $icon_custom ): ?>
                    <i class="<?php echo esc_attr($icon_custom); ?>" style="color: <?php echo esc_attr($icon_color); ?>;"></i>
                    <?php else: if( $iconClass ): ?>
                        <i class="<?php echo esc_attr($iconClass); ?>" style="color: <?php echo esc_attr($icon_color); ?>;"></i>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        <?php endif;?>
        
        <div class="cms-fancybox-content">
            <?php if($atts['title_item']):?>
                <h3 class="cms-fancybox-title" style="font-size: <?php echo esc_attr($title_font_size); ?>">
                    <a href="<?php echo esc_url($atts['button_link']);?>" style="color:<?php echo esc_attr($title_color); ?>">
                        <span><?php echo apply_filters('the_title',$atts['title_item']);?></span>
                    </a>
                </h3>
            <?php endif;?>

            <?php if($atts['button_text']!=''):?>
                <div class="cms-button-wrapper">
                    <a href="<?php echo esc_url($atts['button_link']);?>"><span class="btn-text"><?php echo esc_attr($atts['button_text']);?></span></a>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>