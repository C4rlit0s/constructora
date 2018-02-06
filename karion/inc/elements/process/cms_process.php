<?php
vc_map(array(
    "name" => 'CMS Process',
    "base" => "cms_process",
    "icon" => "cs_icon_for_vc",
    "category" => esc_html__('CmsSuperheroes Shortcodes', 'construct'),
    "params" => array(

        array(
            "type" => "textfield",
            "heading" => esc_html__("Title", 'construct'),
            "param_name" => "process_title1",
            "group" => esc_html__("Item 1", 'construct'),
        ),
        array(
            "type" => "textarea",
            "heading" => esc_html__("Description", 'construct'),
            "param_name" => "process_description1",
            "group" => esc_html__("Item 1", 'construct'),
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Title", 'construct'),
            "param_name" => "process_title2",
            "group" => esc_html__("Item 2", 'construct'),
        ),

        array(
            "type" => "textarea",
            "heading" => esc_html__("Description", 'construct'),
            "param_name" => "process_description2",
            "group" => esc_html__("Item 2", 'construct'),
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Title", 'construct'),
            "param_name" => "process_title3",
            "group" => esc_html__("Item 3", 'construct'),
        ),
        array(
            "type" => "textarea",
            "heading" => esc_html__("Description", 'construct'),
            "param_name" => "process_description3",
            "group" => esc_html__("Item 3", 'construct'),
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Title", 'construct'),
            "param_name" => "process_title4",
            "group" => esc_html__("Item 4", 'construct'),
        ),
        array(
            "type" => "textarea",
            "heading" => esc_html__("Description", 'construct'),
            "param_name" => "process_description4",
            "group" => esc_html__("Item 4", 'construct'),
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__("Choose item active", 'construct'),
            "admin_label" => true,
            "param_name" => "process_active",
            "value" => array(
                "Item 1 active" => "item1",
                "Item 2 active" => "item2",
                "Item 3 active" => "item3",
                "Item 4 active" => "item4",
            ),
            "group" => esc_html__("Icon Settings", 'construct'),
        ),
    )
));

class WPBakeryShortCode_cms_process extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>