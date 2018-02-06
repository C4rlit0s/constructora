<?php
vc_map(array(
    "name" => 'CMS Call To Action',
    "base" => "cms_cta",
    "icon" => "cs_icon_for_vc",
    "category" => esc_html__('CmsSuperheroes Shortcodes', 'construct'),
    "params" => array(
        array(
            "type" => "textarea",
            "heading" => __ ( 'Title', 'construct' ),
            "param_name" => "cta_title",
            "value" => '',
            "group" => esc_html__("Settings", 'construct')
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Title Color", 'construct'),
            "param_name" => "cta_title_color",
            "value" => "",
            "group" => esc_html__("Settings", 'construct')
        ),
        array(
            "type" => "textfield",
            "heading" => __ ( 'Text Button', 'construct' ),
            "param_name" => "button_text",
            "value" => '',
            "group" => esc_html__("Settings", 'construct')
        ),
        array(
            "type" => "vc_link",
            "class" => "",
            "heading" => esc_html__("Link Button", 'construct'),
            "param_name" => "link_button",
            "value" => '',
            "group" => esc_html__("Settings", 'construct')
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Button Style", 'construct'),
            'param_name' => 'button_style',
            'value' => array(      
                'Primary Alt' => 'btn-primary-alt',   
                'Primary White' => 'btn-primary-white',         
                'Default White' => 'btn-default-white',         
            ),
            "group" => esc_html__("Settings", 'construct'),
        ),  
        array(    
            "type" => "dropdown",
            "heading" => esc_html__("Font style", 'construct'),
            "param_name" => "font_style_cta_title",
            "value" => array(
                "Default"  => "400",
                "Bold 500" => "500",
                "Bold 600" => "600",
                "Bold 700" => "700",
                "Bold 800" => "800",
            ),
            "group" => esc_html__("Settings", 'construct'),
            "template" => array(
                "cms_cta.php",
            ),
        ),  
    )
));

class WPBakeryShortCode_cms_cta extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>
