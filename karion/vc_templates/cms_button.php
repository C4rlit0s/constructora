<?php
extract(shortcode_atts(array(
    'icon_type' => 'fontawesome',
    'button_text'  => 'Button',
    'button_align'  => 'button-left',
    'link_button'  => '#',
    'button_style'  => 'btn-default',
    'button_size'  => 'size-default',
    'icon_align'  => 'left',
    'btn_radius'  => '0px',     
), $atts));
 
    $icon_name = "icon_" . $icon_type;
    $iconClass = isset($atts[$icon_name])?$atts[$icon_name]:'';
    $link = vc_build_link($link_button);
    $a_href = '';
    if ( strlen( $link['url'] ) > 0 ) {
        $a_href = $link['url'];
        $a_target = strlen( $link['target'] ) > 0 ? $link['target'] : '_self';
    }

?>
<div class="cms-button-wrapper <?php echo esc_attr($button_align); ?> style-<?php echo esc_attr($button_style); ?>">

    <a href="<?php echo esc_url($a_href);?>" target="<?php  echo esc_attr($a_target); ?>" class="<?php echo esc_attr($button_style); ?> <?php echo esc_attr($button_size); ?>" style="-webkit-border-radius: <?php echo esc_attr($btn_radius); ?>; -moz-border-radius: <?php echo esc_attr($btn_radius); ?>">
        <span class="btn-text">
            <?php switch ($icon_align) {
                case 'right':
                    ?>
                        <span><?php echo esc_attr($button_text); ?></span>
                        <i class="<?php echo esc_attr($iconClass);?>"></i>
                    <?php
                    break;
                case 'left':
                default:
                    ?>
                        <i class="<?php echo esc_attr($iconClass);?>"></i>
                        <span><?php echo esc_attr($button_text); ?></span>
                    <?php
                    break;
            }?>
        </span>
    </a>
</div>
