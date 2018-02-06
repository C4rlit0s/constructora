<?php
	$params = array(
        array(
            "type" => "textfield",
            "heading" => esc_html__("Item Space","construct"),
            "param_name" => "item_space",
            "value" => "",
            "description" => "Default: 15px",
            "group" => esc_html__("Template", 'construct'),
            "template" => array(
                "cms_grid--portfolio1.php",
                "cms_grid--portfolio2.php",
                "cms_grid--portfolio3.php",
            ),
        ),
	);
	vc_remove_param('cms_grid','cms_template');
	$cms_template_attribute = array(
		'type' => 'cms_template_img',
	    'param_name' => 'cms_template',
	    "shortcode" => "cms_grid",
	    "heading" => esc_html__("Shortcode Template", 'construct'),
	    "admin_label" => true,
	    "group" => esc_html__("Template", 'construct'),
		);
	vc_add_param('cms_grid',$cms_template_attribute);
?>
