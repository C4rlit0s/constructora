<?php
	$params = array(
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__("Image Crop", 'construct'),
            "admin_label" => true,
            "param_name" => "image_crop",
            "value" => array(
                "Full" => "full",
                "Size 337x400" => "construct_team_337x400",
                "Size 400x400" => "construct_team_400x400",
            ),
            "group" => esc_html__("Template", 'construct'),
            "template" => array(
                "cms_carousel--layout-team1.php",
                "cms_carousel--layout-team2.php",
            ),
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__("Show Content", 'construct'),
            "admin_label" => true,
            "param_name" => "show_content",
            "value" => array(
                "Yes" => "yes",
                "No" => "no",
            ),
            "group" => esc_html__("Template", 'construct'),
            "template" => array(
                "cms_carousel--layout-team1.php",
            ),
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__("Nav Background", 'construct'),
            "admin_label" => true,
            "param_name" => "nav_style",
            "value" => array(
                "Dark" => "dark",
                "White" => "white",
                "Gray" => "gray",
                "Bg_575" => "color-575",
                "Bg_686" => "color-686",
                "Bg_0d0" => "color-0d0",
                "Bg_151" => "color-151",
                "Bg_171" => "color-171",
                "Bg_191" => "color-191",
                "Bg_212" => "color-212",
                "Bg_222" => "color-222",
                "Bg_333" => "color-333",
                "Bg_404" => "color-404",
                "Bg_444" => "color-444",
                "Bg_666" => "color-666",
                "Bg_8b8" => "color-8b8",
                "Bg_999" => "color-999",
                "Bg_f5f" => "color-f5f",
                "Bg_f8f" => "color-f8f",
                "Bg_f9f" => "color-f9f",
                "Bg_ebe" => "color-ebe",
                "Bg_e0e" => "color-e0e",
                "Bg_overlay" => "color-overlay",
            ),
            "group" => esc_html__("Template", 'construct'),
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__("Margin Dots", 'construct'),
            "admin_label" => true,
            "param_name" => "margin_dots_style",
            "value" => array(
                "Default" => "top-40",
                "Top_20px" => "top-20",
                "Top_25px" => "top-25",
                "Top_30px" => "top-30",
                "Top_35px" => "top-35",
                "Top_42px" => "top-42",
                "Top_45px" => "top-45",
                "Top_50px" => "top-50",
                "Top_55px" => "top-55",
                "Top_60px" => "top-60",
                "Top_65px" => "top-65",
                "Top_70px" => "top-70",
            ),
            "group" => esc_html__("Template", 'construct'),
        ),

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__("Dots Carousel Style", 'construct'),
            "admin_label" => true,
            "param_name" => "dot_style",
            "value" => array(
                "Dark" => "dark",
                "White" => "white",
                "Gray" => "gray",
                "Color #999" => "color-999",
            ),
            "group" => esc_html__("Template", 'construct'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Item Title Color", 'construct'),
            "param_name" => "title_color",
            "value" => "",
            "group" => esc_html__("Template", 'construct'),
            "template" => array(
                "cms_carousel--layout-teatimonial1.php",
                "cms_carousel--layout-team1.php",
                "cms_carousel--layout-team2.php",
            ),
        ),

        array(
            "type" => "colorpicker",
            "heading" => esc_html__("Background item Color", 'construct'),
            "param_name" => "bg_testimonial_color",
            "value" => "",
            "group" => esc_html__("Template", 'construct'),
            "template" => array(
                "cms_carousel--teatimonial1.php"
            ),
        ),

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__("Box Style", 'construct'),
            "admin_label" => true,
            "param_name" => "box_style",
            "value" => array(
                "Light" => "light",
                "Dark" => "dark",
            ),
            "group" => esc_html__("Template", 'construct'),
            "template" => array(
                "cms_carousel--layout-blog1.php",
            ),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Title","construct"),
            "param_name" => "portfolio_title",
            "value" => "",
            "group" => esc_html__("Template", 'construct'),
            "template" => array(
                "cms_carousel--portfolio4.php",
            ),
        ),
	);
    vc_remove_param('cms_carousel','l_icon_type');
    vc_remove_param('cms_carousel','l_icon_fontawesome');
    vc_remove_param('cms_carousel','l_icon_openiconic');
    vc_remove_param('cms_carousel','l_icon_typicons');
    vc_remove_param('cms_carousel','l_icon_entypo');
    vc_remove_param('cms_carousel','l_icon_glyphicons');
    vc_remove_param('cms_carousel','l_icon_rticon');
    vc_remove_param('cms_carousel','l_icon_pe7stroke');
    vc_remove_param('cms_carousel','l_icon_pixelicons');
    vc_remove_param('cms_carousel','l_icon_linecons');

    vc_remove_param('cms_carousel','r_icon_type');
    vc_remove_param('cms_carousel','r_icon_type');
    vc_remove_param('cms_carousel','r_icon_fontawesome');
    vc_remove_param('cms_carousel','r_icon_openiconic');
    vc_remove_param('cms_carousel','r_icon_typicons');
    vc_remove_param('cms_carousel','r_icon_entypo');
    vc_remove_param('cms_carousel','r_icon_glyphicons');
    vc_remove_param('cms_carousel','r_icon_rticon');
    vc_remove_param('cms_carousel','r_icon_pe7stroke');
    vc_remove_param('cms_carousel','r_icon_pixelicons');
    vc_remove_param('cms_carousel','r_icon_linecons');

	vc_remove_param('cms_carousel','cms_template');
	$cms_template_attribute = array(
		'type' => 'cms_template_img',
	    'param_name' => 'cms_template',
	    "shortcode" => "cms_carousel",
	    "heading" => esc_html__("Shortcode Template", 'construct'),
	    "admin_label" => true,
	    "group" => esc_html__("Template", 'construct'),
		);
	vc_add_param('cms_carousel',$cms_template_attribute);
?>