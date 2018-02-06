<?php
vc_map(array(
    "name" => 'CMS Google Map',
    "base" => "cms_googlemap",
    "icon" => "cs_icon_for_vc",
    "category" => esc_html__('CmsSuperheroes Shortcodes', 'construct'),
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => esc_html__('API Key', 'construct'),
            "param_name" => "api",
            "value" => '',
            "description" => esc_html__('Enter you api key of map, get key from (https://console.developers.google.com)', 'construct')
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__('Address', 'construct'),
            "param_name" => "address",
            "value" => 'New York, United States',
            "description" => esc_html__('Enter address of Map', 'construct')
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__('Coordinate', 'construct'),
            "param_name" => "coordinate",
            "value" => '',
            "description" => esc_html__('Enter coordinate of Map, format input (latitude, longitude)', 'construct')
        ),
        array(
            "type" => "checkbox",
            "heading" => esc_html__('Click Show Info window', 'construct'),
            "param_name" => "infoclick",
            "value" => array(
                esc_html__("Yes, please", 'construct') => true
            ),
            "description" => esc_html__('Click a marker and show info window (Default Show).', 'construct')
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__('Marker Coordinate', 'construct'),
            "param_name" => "markercoordinate",
            "value" => '',
            "description" => esc_html__('Enter marker coordinate of Map, format input (latitude, longitude)', 'construct')
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__('Marker Title', 'construct'),
            "param_name" => "markertitle",
            "value" => '',
            "description" => esc_html__('Enter Title Info windows for marker', 'construct')
        ),
        array(
            "type" => "textarea",
            "heading" => esc_html__('Marker Description', 'construct'),
            "param_name" => "markerdesc",
            "value" => '',
            "description" => esc_html__('Enter Description Info windows for marker', 'construct')
        ),
        array(
            "type" => "attach_image",
            "heading" => esc_html__('Marker Icon', 'construct'),
            "param_name" => "markericon",
            "value" => '',
            "description" => esc_html__('Select image icon for marker', 'construct')
        ),
        array(
            "type" => "textarea_raw_html",
            "heading" => esc_html__('Marker List', 'construct'),
            "param_name" => "markerlist",
            "value" => '',
            "description" => esc_html__('[{"coordinate":"41.058846,-73.539423","icon":"","title":"title demo 1","desc":"desc demo 1"},{"coordinate":"40.975699,-73.717636","icon":"","title":"title demo 2","desc":"desc demo 2"},{"coordinate":"41.082606,-73.469718","icon":"","title":"title demo 3","desc":"desc demo 3"}]', 'construct')
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__('Info Window Max Width', 'construct'),
            "param_name" => "infowidth",
            "value" => '200',
            "description" => esc_html__('Set max width for info window', 'construct')
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__("Map Type", 'construct'),
            "param_name" => "type",
            "value" => array(
                "ROADMAP" => "ROADMAP",
                "HYBRID" => "HYBRID",
                "SATELLITE" => "SATELLITE",
                "TERRAIN" => "TERRAIN"
            ),
            "description" => esc_html__('Select the map type.', 'construct')
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__("Style Template", 'construct'),
            "param_name" => "style",
            "value" => array(
                "Default" => "",
                "Custom" => "custom",
                "Light Monochrome" => "light-monochrome",
                "Blue water" => "blue-water",
                "Midnight Commander" => "midnight-commander",
                "Paper" => "paper",
                "Red Hues" => "red-hues",
                "Hot Pink" => "hot-pink"
            ),
            "description" => 'Select your heading size for title.'
        ),
        array(
            "type" => "textarea_raw_html",
            "heading" => esc_html__('Custom Template', 'construct'),
            "param_name" => "content",
            "value" => '',
            "description" => esc_html__('Get template from http://snazzymaps.com', 'construct')
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__('Zoom', 'construct'),
            "param_name" => "zoom",
            "value" => '13',
            "description" => esc_html__('zoom level of map, default is 13', 'construct')
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__('Width', 'construct'),
            "param_name" => "width",
            "value" => 'auto',
            "description" => esc_html__('Width of map without pixel, default is auto', 'construct')
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__('Height', 'construct'),
            "param_name" => "height",
            "value" => '350px',
            "description" => esc_html__('Height of map without pixel, default is 350px', 'construct')
        ),
        array(
            "type" => "checkbox",
            "heading" => esc_html__('Scroll Wheel', 'construct'),
            "param_name" => "scrollwheel",
            "value" => array(
                esc_html__("Yes, please", 'construct') => true
            ),
            "description" => esc_html__('If false, disables scrollwheel zooming on the map. The scrollwheel is disable by default.', 'construct')
        ),
        array(
            "type" => "checkbox",
            "heading" => esc_html__('Pan Control', 'construct'),
            "param_name" => "pancontrol",
            "value" => array(
                esc_html__("Yes, please", 'construct') => true
            ),
            "description" => esc_html__('Show or hide Pan control.', 'construct')
        ),
        array(
            "type" => "checkbox",
            "heading" => esc_html__('Zoom Control', 'construct'),
            "param_name" => "zoomcontrol",
            "value" => array(
                esc_html__("Yes, please", 'construct') => true
            ),
            "description" => esc_html__('Show or hide Zoom Control.', 'construct')
        ),
        array(
            "type" => "checkbox",
            "heading" => esc_html__('Scale Control', 'construct'),
            "param_name" => "scalecontrol",
            "value" => array(
                esc_html__("Yes, please", 'construct') => true
            ),
            "description" => esc_html__('Show or hide Scale Control.', 'construct')
        ),
        array(
            "type" => "checkbox",
            "heading" => esc_html__('Map Type Control', 'construct'),
            "param_name" => "maptypecontrol",
            "value" => array(
                esc_html__("Yes, please", 'construct') => true
            ),
            "description" => esc_html__('Show or hide Map Type Control.', 'construct')
        ),
        array(
            "type" => "checkbox",
            "heading" => esc_html__('Street View Control', 'construct'),
            "param_name" => "streetviewcontrol",
            "value" => array(
                esc_html__("Yes, please", 'construct') => true
            ),
            "description" => esc_html__('Show or hide Street View Control.', 'construct')
        ),
        array(
            "type" => "checkbox",
            "heading" => esc_html__('Over View Map Control', 'construct'),
            "param_name" => "overviewmapcontrol",
            "value" => array(
                esc_html__("Yes, please", 'construct') => true
            ),
            "description" => esc_html__('Show or hide Over View Map Control.', 'construct')
        )
    )
));

class WPBakeryShortCode_cms_googlemap extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>