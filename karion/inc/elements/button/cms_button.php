<?php
vc_map(array(
    "name" => 'CMS Button',
    "base" => "cms_button",
    "icon" => "cs_icon_for_vc",
    "category" => esc_html__('CmsSuperheroes Shortcodes', 'construct'),
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => __ ( 'Text on the button', 'construct' ),
            "param_name" => "button_text",
            "value" => '',
            "group" => esc_html__("Button Settings", 'construct')
        ),
        array(
            "type" => "vc_link",
            "class" => "",
            "heading" => esc_html__("Link button", 'construct'),
            "param_name" => "link_button",
            "value" => '',
            "group" => esc_html__("Button Settings", 'construct')
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Button Style", 'construct'),
            'param_name' => 'button_style',
            'value' => array(
                'Default' => 'btn-default',   
                'Default Alt' => 'btn-default-alt',   
                'Default Radius' => 'btn-default-radius',   
                'Default Alt Radius' => 'btn-default-alt-radius',
                'Default White' => 'btn-default-white',
                'Primary' => 'btn-primary',   
                'Primary Alt' => 'btn-primary-alt',   
                'Primary Radius' => 'btn-primary-radius',   
                'Primary Alt Radius' => 'btn-primary-alt-radius',  
                'Primary White' => 'btn-primary-white',  
                'Primary White Alt' => 'btn-primary-white-alt',  
            ),
            "group" => esc_html__("Button Settings", 'construct'),
        ),
        array(    
            'type' => 'dropdown',
            'heading' => esc_html__("Button Size", 'construct'),
            'param_name' => 'button_size',
            'value' => array(
                'Default' => 'size-default',                
                'Large' => 'btn-lg',        
                'Small' => 'btn-sm',        
                'Tiny' => 'btn-tiny',        
            ),
            "group" => esc_html__("Button Settings", 'construct'),
        ),   
        /* Start Icon */
        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Icon library', 'construct' ),
            'value' => array(
                esc_html__( 'Font Awesome', 'construct' ) => 'fontawesome',
                esc_html__( 'Open Iconic', 'construct' ) => 'openiconic',
                esc_html__( 'Typicons', 'construct' ) => 'typicons',
                esc_html__( 'Entypo', 'construct' ) => 'entypo',
                esc_html__( 'Linecons', 'construct' ) => 'linecons',
                esc_html__( 'Pixel', 'construct' ) => 'pixelicons',
                esc_html__( 'P7 Stroke', 'construct' ) => 'pe7stroke',
                esc_html__( 'RT Icon', 'construct' ) => 'rticon',
            ),
            'param_name' => 'icon_type',
            'description' => esc_html__( 'Select icon library.', 'construct' ),
            "group" => esc_html__("Button Settings", 'construct'),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon Item', 'construct' ),
            'param_name' => 'icon_fontawesome',
            'value' => '',
            'settings' => array(
                'emptyIcon' => true, // default true, display an "EMPTY" icon?
                'type' => 'fontawesome',
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon_type',
                'value' => 'fontawesome',
            ),
            'description' => esc_html__( 'Select icon from library.', 'construct' ),
            "group" => esc_html__("Button Settings", 'construct'),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon Item', 'construct' ),
            'param_name' => 'icon_openiconic',
            'value' => '',
            'settings' => array(
                'emptyIcon' => true, // default true, display an "EMPTY" icon?
                'type' => 'openiconic',
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon_type',
                'value' => 'openiconic',
            ),
            'description' => esc_html__( 'Select icon from library.', 'construct' ),
            "group" => esc_html__("Button Settings", 'construct'),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon Item', 'construct' ),
            'param_name' => 'icon_typicons',
            'value' => '',
            'settings' => array(
                'emptyIcon' => true, // default true, display an "EMPTY" icon?
                'type' => 'typicons',
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon_type',
                'value' => 'typicons',
            ),
            'description' => esc_html__( 'Select icon from library.', 'construct' ),
            "group" => esc_html__("Button Settings", 'construct'),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon Item', 'construct' ),
            'param_name' => 'icon_entypo',
            'value' => '',
            'settings' => array(
                'emptyIcon' => true, // default true, display an "EMPTY" icon?
                'type' => 'entypo',
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon_type',
                'value' => 'entypo',
            ),
            'description' => esc_html__( 'Select icon from library.', 'construct' ),
            "group" => esc_html__("Button Settings", 'construct'),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon Item', 'construct' ),
            'param_name' => 'icon_linecons',
            'value' => '',
            'settings' => array(
                'emptyIcon' => true, // default true, display an "EMPTY" icon?
                'type' => 'linecons',
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon_type',
                'value' => 'linecons',
            ),
            'description' => esc_html__( 'Select icon from library.', 'construct' ),
            "group" => esc_html__("Button Settings", 'construct'),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon Item', 'construct' ),
            'param_name' => 'icon_pixelicons',
            'value' => '',
            'settings' => array(
                'emptyIcon' => true, // default true, display an "EMPTY" icon?
                'type' => 'pixelicons',
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon_type',
                'value' => 'pixelicons',
            ),
            'description' => esc_html__( 'Select icon from library.', 'construct' ),
            "group" => esc_html__("Button Settings", 'construct'),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon Item', 'construct' ),
            'param_name' => 'icon_pe7stroke',
            'value' => '',
            'settings' => array(
                'emptyIcon' => true, // default true, display an "EMPTY" icon?
                'type' => 'pe7stroke',
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon_type',
                'value' => 'pe7stroke',
            ),
            'description' => esc_html__( 'Select icon from library.', 'construct' ),
            "group" => esc_html__("Button Settings", 'construct'),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__( 'Icon Item', 'construct' ),
            'param_name' => 'icon_rticon',
            'value' => '',
            'settings' => array(
                'emptyIcon' => true, // default true, display an "EMPTY" icon?
                'type' => 'rticon',
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon_type',
                'value' => 'rticon',
            ),
            'description' => esc_html__( 'Select icon from library.', 'construct' ),
            "group" => esc_html__("Button Settings", 'construct'),
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__("Button Align", 'construct'),
            "admin_label" => true,
            "param_name" => "button_align",
            "value" => array(
                "Left" => "button-left",
                "Center"=> "button-center",
                "Right" => "button-right"
            ),
            "group" => esc_html__("Button Settings", 'construct'),
        ),

        /* End Icon */
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__("Icon Align", 'construct'),
            "admin_label" => true,
            "param_name" => "icon_align",
            "value" => array(
                "Left" => "left",
                "Center"=> "center",
                "Right" => "right"
            ),
            "group" => esc_html__("Button Settings", 'construct'),
        ),    
        array(
            "type" => "textfield",
            "heading" => esc_html__("Button Border Radius", 'construct'),
            "param_name" => "btn_radius",
            "value" => "",
            "description" => "Enter: ...px",
            "group" => esc_html__("Button Settings", 'construct'),
        ),
    )
));

class WPBakeryShortCode_cms_button extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}
?>