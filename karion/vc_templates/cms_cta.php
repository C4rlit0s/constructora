<?php
extract(shortcode_atts(array(
    'button_text'  => '',
    'link_button'  => '',
    'cta_title'  => '',
    'cta_title_color'  => '',      
), $atts));
 
    $html_id = cmsHtmlID('cms-cta');
    $atts['html_id'] = $html_id;

    $link = vc_build_link($link_button);
    $a_href = '';
    if ( strlen( $link['url'] ) > 0 ) {
        $a_href = $link['url'];
    }
?>
<?php 
    $font_weight_cta = isset($atts['font_style_cta_title']) ? $atts['font_style_cta_title'] : '';
?>
<div id="<?php echo esc_attr($atts['html_id']);?>" class="cms-cta-wrapper cms-style-default clearfix">
    <div class="cms-cta-inner row">
        <div class="cms-cta-content col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <?php if (!empty($cta_title) && $cta_title) { ?>
            <h3 class="title" style="color: <?php echo esc_attr($cta_title_color); ?>;font-weight: <?php echo esc_attr($font_weight_cta);?>">
                <?php echo esc_attr($cta_title); ?>
            </h3>
        <?php } ?>
        </div>

        <?php if (!empty($button_text) && $button_text) { ?>
            <div class="cms-cta-button col-xs-12 col-sm-12 col-md-3 col-lg-3 text-right">
                <a href="<?php echo esc_url($a_href);?>" class="btn-call">
                    <?php echo esc_attr($button_text); ?>
                </a>
            </div>
        <?php } ?>
    </div>
</div>