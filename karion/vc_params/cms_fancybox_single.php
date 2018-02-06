<?php
	$params = array(
		array(
			'type' => 'cms_template_img',
		    'param_name' => 'cms_template',
		    "shortcode" => "cms_fancybox_single",
		    "heading" => esc_html__("Shortcode Template", 'construct'),
		    "admin_label" => true,
		    "group" => esc_html__("Template", 'construct'),
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__("Title Font Size", 'construct'),
			"param_name" => "title_font_size",
			"value" => "",
			"group" => esc_html__("Template", 'construct'),
			"description" => "Enter: ...px"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__("Title Margin", 'construct'),
			"param_name" => "title_margin",
			"value" => "",
			"group" => esc_html__("Template", 'construct'),
			"description" => "Enter: ...px"
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__("Icon Color", 'construct'),
			"param_name" => "icon_color",
			"value" => "",
			"group" => esc_html__("Template", 'construct'),
			"template" => array(
                "cms_fancybox_single--layout1.php",
            ),
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__("Title Color", 'construct'),
			"param_name" => "title_color",
			"value" => "",
			"group" => esc_html__("Template", 'construct'),
		),
		array(
            "type" => "dropdown",
            "heading" => esc_html__("Background Active", 'construct'),
            "param_name" => "bg_fcb_color",
            "value" => array(
            	"Background Default" => "bg-fcb-color-default",
                "Background Active" => "bg-fcb-color-active",
            ),
            "group" => esc_html__("Template", 'construct'),
			"template" => array(
                "cms_fancybox_single--layout3.php",
            ),
        ),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__("Content Color", 'construct'),
			"param_name" => "decs_color",
			"value" => "",
			"group" => esc_html__("Template", 'construct')
		),
	);
    vc_remove_param( "cms_fancybox_single", "title" );
    vc_remove_param( "cms_fancybox_single", "description" );
    vc_remove_param( "cms_fancybox_single", "content_align" );
    vc_remove_param( "cms_fancybox_single", "button_type" );
?>