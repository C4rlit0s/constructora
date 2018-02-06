<?php
vc_map(array(
    "name" => 'CMS Heading',
    "base" => "cms_heading",
    "icon" => "cs_icon_for_vc",
    "category" => esc_html__('CmsSuperheroes Shortcodes', 'construct'),
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => __ ( 'Title 1', 'construct' ),
            "param_name" => "title1",
            "value" => '',
            "group" => esc_html__("Heading Settings", 'construct'),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "cms_heading.php",
                    "cms_heading--layout3.php",
                )
            ),
        ),
        array(
            "type" => "textfield",
            "heading" => __ ( 'Title layout 4', 'construct' ),
            "param_name" => "title4",
            "value" => '',
            "group" => esc_html__("Heading Settings", 'construct'),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "cms_heading--layout4.php",
                )
            ),
        ),

        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Color title1", 'construct'),
            "param_name" => "color_title1",
            "value" => "",
            "group" => esc_html__("Heading Settings", 'construct'),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "cms_heading.php",
                    "cms_heading--layout3.php",
                )
            ),
        ),

        array(
            "type" => "textfield",
            "heading" => __ ( 'Title 2', 'construct' ),
            "param_name" => "title2",
            "value" => '',
            "group" => esc_html__("Heading Settings", 'construct'),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "cms_heading.php",
                    "cms_heading--layout3.php",
                )
            ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Title color2", 'construct'),
            "param_name" => "color_title2",
            "value" => "",
            "group" => esc_html__("Heading Settings", 'construct'),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "cms_heading.php",
                    "cms_heading--layout3.php",
                )
            ),
        ),
        array(
            "type" => "textfield",
            "heading" => __ ( "Title size", 'construct' ),
            "param_name" => "title_size",
            "value" => '',
            "group" => esc_html__("Heading Settings", 'construct'),
            "description" => "Enter: ..px",
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "cms_heading.php",
                    "cms_heading--layout3.php",
                    "cms_heading--layout4.php",
                )
            ),
        ),
         array(
            "type" => "dropdown",
            "heading" => esc_html__('Font style', 'construct'),
            "param_name" => "cms_font_weight",
            "value" => array(
                "Default" => "normal",
                "Normal 400 " => "400",
                "Bold 500" => "500",
                "Bold 600" => "600",
                "Bold 700" => "700",
                "Bold 800" => "800",
            ),
            "group" => esc_html__("Heading Settings", 'construct'),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "cms_heading.php",
                    "cms_heading--layout3.php",
                )
            ),
        ),

        array(
            "type" => "textarea",
            "heading" => __ ( 'Description', 'construct' ),
            "param_name" => "description",
            "value" => '',
            "group" => esc_html__("Heading Settings", 'construct'),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "cms_heading.php",
                    "cms_heading--layout4.php",
                )
            ),
        ), 

        array(
            "type" => "textfield",
            "heading" => __ ( 'Description Font Size', 'construct' ),
            "param_name" => "description_size",
            "value" => '',
            "group" => esc_html__("Heading Settings", 'construct'),
            "description" => "Enter: ..px",
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "cms_heading.php",
                    "cms_heading--layout4.php",
                )
            ),
        ),

        array(
            "type" => "textfield",
            "heading" => __ ( 'Title', 'construct' ),
            "param_name" => "title",
            "value" => '',
            "group" => esc_html__("Heading Settings", 'construct'),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "cms_heading--layout1.php",
                    "cms_heading--layout2.php",
                )
            ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Title Color", 'construct'),
            "param_name" => "title_color",
            "value" => "",
            "group" => esc_html__("Heading Settings", 'construct'),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "cms_heading--layout1.php",
                    "cms_heading--layout2.php",
                    "cms_heading--layout4.php",
                )
            ),
        ),
        array(
            "type" => "textfield",
            "heading" => __ ( 'Title Font Size', 'construct' ),
            "param_name" => "title_font_size",
            "value" => '',
            "group" => esc_html__("Heading Settings", 'construct'),
            "description" => "Enter: ..px",
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "cms_heading--layout1.php",
                    "cms_heading--layout2.php",
                )
            ),
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__("Letter Spacing", 'construct'),
            "admin_label" => true,
            "param_name" => "letter_spacing",
            "value" => array(
                '0' => '0em',
                '0.05em' => '0.05em',
                '0.06em' => '0.06em',
                '0.07em' => '0.07em',
                '0.08em' => '0.08em',
                '0.09em' => '0.09em',
                '0.1em' => '0.1em',
                '0.2em' => '0.2em',
                '0.3em' => '0.3em',
                '0.4em' => '0.4em',
                '0.5em' => '0.5em',
                '0.6em' => '0.6em',
                '0.7em' => '0.7em',
                '0.8em' => '0.8em',
                '0.9em' => '0.9em',
            ),
            "group" => esc_html__("Heading Settings", 'construct'),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "cms_heading--layout1.php",
                    "cms_heading--layout2.php",
                    "cms_heading--layout3.php",
                    "cms_heading--layout4.php",
                )
            ),
        ),

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__("Text Align", 'construct'),
            "admin_label" => true,
            "param_name" => "text_align",
            "value" => array(
                "Default" => "left",
                "Center" => "center",
                "Right" => "right",
            ),
            "group" => esc_html__("Heading Settings", 'construct'),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "cms_heading--layout1.php",
                    "cms_heading--layout3.php",
                )
            ),
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__("Text Transform", 'construct'),
            "admin_label" => true,
            "param_name" => "text_transform",
            "value" => array(
                "Normal" => "normal",
                "Uppercase" => "uppercase",
                "Capitalize" => "capitalize",
                "Lowercase" => "lowercase",
            ),
            "group" => esc_html__("Heading Settings", 'construct'),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "cms_heading--layout1.php",
                    "cms_heading--layout2.php",
                    "cms_heading--layout3.php",
                    "cms_heading--layout4.php",
                )
            ),
        ), 
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__("Icon", 'construct'),
            "admin_label" => true,
            "param_name" => "icon",
            "value" => array(
                "Hide" => "hide",
                "Show" => "show",
            ),
            "group" => esc_html__("Heading Settings", 'construct'),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "cms_heading.php",
                )
            ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Icon Background Color", 'construct'),
            "param_name" => "icon_bg_color",
            "value" => "",
            "group" => esc_html__("Heading Settings", 'construct'),
            "dependency" => array(
                "element"=>"cms_template",
                "value"=>array(
                    "cms_heading.php",
                )
            ),
        ),
        array(
            'type' => 'cms_template_img',
            'param_name' => 'cms_template',
            "shortcode" => "cms_heading",
            "heading" => esc_html__("Heading Template", 'construct'),
            "admin_label" => true,
            "group" => esc_html__("Template", 'construct'),
        ),

        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Custom Google Fonts", 'construct'),
            'param_name' => 'custom_fonts',
            'value' => array(
                'No' => 'false',       
                'Yes' => 'true',       
            ),
            "group" => esc_html__("Title", 'construct'),
        ),  
        array(
            'type' => 'google_fonts',
            'param_name' => 'google_fonts',
            'value' => 'font_family:Abril%20Fatface%3Aregular|font_style:400%20regular%3A400%3Anormal',
            'settings' => array(
                'fields' => array(
                    'font_family_description' => esc_html__( 'Select font family.', 'construct' ),
                    'font_style_description' => esc_html__( 'Select font styling.', 'construct' ),
                ),
            ),
            "group" => esc_html__("Title", 'construct'),
            "dependency" => array(
                "element"=>"custom_fonts",
                "value"=>array(
                    "true",
                )
            ),
        ),
    )
));

class WPBakeryShortCode_cms_heading extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>