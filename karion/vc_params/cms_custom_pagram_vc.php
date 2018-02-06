<?php
/*
 * VC
 */
vc_add_param("vc_row", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__("CMS Custom Style", 'construct'),
    "param_name" => "el_class",
    "value" => array(
        'None' => '',
        'Row Box Shadow' => 'row-has-boxshadow', 
        'Row Box Shadow Top' => 'row-has-boxshadow-top', 
        'Row Box Shadow Bottom' => 'row-has-boxshadow-bottom', 
        'Row BG Color Primary' => 'bg-primary', 
        'Row Overlay1' => 'row-overlay',
        'Row Overlay2' => 'row-overlay2',
        'Row Overlay3' => 'row-overlay3',
        'Row Overlay4' => 'row-overlay4',
        'Row Overlay5' => 'row-overlay5',
    ),  
));

vc_add_param("vc_row", array(
    "type" => "textfield",
    "heading" => esc_html__("CMS Custom Class","construct"),
    "param_name" => "el_class_row",
    "value" => array(
        'None' => '',
        'Box Shadow' => 'row-boxshadow-fancybox', 
    ), 
));

vc_add_param("vc_column", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__("CMS Custom Style", 'construct'),
    "param_name" => "el_class",
    "value" => array(
        'None' => '',
        'Column Overlay' => 'col-overlay', 
        'Column Offset Left' => 'section-offset-left',
        'Column Offset Right' => 'section-offset-right',
        'Column Offset Left - Overlay' => 'section-offset-left col-overlay',
        'Column Offset Right - Overlay' => 'section-offset-right col-overlay',
        'Remove Padding Tablet ( < 992 )' => 'rm-padding-sm',
        'Remove Padding Mobile ( < 767 )' => 'rm-padding-xs',
        'Text Align Center' => 'text-center',
        'Text Align Left' => 'text-left',
        'Text Align Right' => 'text-right',
        'Column Height 100%' => 'col-h100',
        'Box Shadow' => 'box-shadaw-fancybox', 
        'Padding Contact' => 'padding-contact', 
    ),  
));

vc_add_param("vc_column", array(
    "type" => "textfield",
    "heading" => esc_html__("CMS Custom Class","construct"),
    "param_name" => "el_class_col",
    "value" => "",
));