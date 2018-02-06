<?php
extract(shortcode_atts(array(         
    'firsttitle' => '',
    'firsttitle_color' => '',
    'title_first_size' => '',
    'secondtitle' => '',         
    'secondtitle_color' => '',
    'title_second_size' => '',
    'title_line_height' => '',  
    'custom_fonts' => 'false',
    'google_fonts' => '',
    'title_resize' => '',              
    'title_margin' => '',                  
), $atts));
$html_id = cmsHtmlID('cms-heading');
$atts['html_id'] = $html_id;

$inline_style = '';
if($custom_fonts == 'true') {
    // Build the data array
    $googleFontsParam = new Vc_Google_Fonts();      
    $fieldSettings = array();
    $text_font_data = strlen( $google_fonts ) > 0 ? $googleFontsParam->_vc_google_fonts_parse_attributes( $fieldSettings, $google_fonts ) : '';
     
    // Build the inline style
    if(isset($text_font_data['values']['font_family'])) {
        $fontFamily = explode( ':', $text_font_data['values']['font_family'] );
        $styles[] = 'font-family:' . $fontFamily[0];
    }
    if(isset($text_font_data['values']['font_style'])) {
        $fontStyles = explode( ':', $text_font_data['values']['font_style'] );
        $styles[] = 'font-weight:' . $fontStyles[1];
        $styles[] = 'font-style:' . $fontStyles[2];  
    }
    if(isset($text_font_data['values']['font_family']) || isset($text_font_data['values']['font_style'])) {
        foreach( $styles as $attribute ){           
            $inline_style .= $attribute.'; ';       
        } 
    }
             
    // Enqueue the right font   
    $settings = get_option( 'wpb_js_google_fonts_subsets' );
    if ( is_array( $settings ) && ! empty( $settings ) ) {
        $subsets = '&subset=' . implode( ',', $settings );
    } else {
        $subsets = '';
    }
     
    // We also need to enqueue font from googleapis
    if ( isset( $text_font_data['values']['font_family'] ) ) {
        wp_enqueue_style( 
            'vc_google_fonts_' . vc_build_safe_css_class( $text_font_data['values']['font_family'] ), 
            '//fonts.googleapis.com/css?family=' . $text_font_data['values']['font_family'] . $subsets
        );
    }
} else {
    $inline_style = '';
}

?>
<div id="<?php echo esc_attr($atts['html_id']);?>" class="cms-heading-wrapper cms-heading-default ">
    <div class="cms-heading-inner">
        <div class="cms-heading-content">
            <h3 class="title1" style="<?php echo wp_kses_post($inline_style); ?>">
                <span class="firsttitle <?php echo esc_attr($title_resize); ?>" style="color:<?php echo esc_attr($firsttitle_color); ?>;font-size: <?php echo esc_attr($title_first_size); ?>">
                    <?php echo wp_kses_post($firsttitle); ?>
                </span>
                <span class="secondtitle <?php echo esc_attr($title_resize); ?>" style="font-size:<?php echo esc_attr($title_second_size); ?>;color:<?php echo esc_attr($secondtitle_color); ?>;margin:<?php echo esc_attr($title_margin); ?>;line-height:<?php echo esc_attr($title_line_height); ?>;">
                    <?php echo wp_kses_post($secondtitle); ?>
                </span>
            </h3>
        </div>
    </div>
</div>