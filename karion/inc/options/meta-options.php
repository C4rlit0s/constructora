<?php
/**
 * Meta box config file
 */
if (! class_exists('MetaFramework')) {
    return;
}

add_action('admin_head', 'construct_metabox');

function construct_metabox() {
  wp_enqueue_style('metabox', get_template_directory_uri() . '/inc/options/css/metabox.css');
}

/**
 * get list menu.
 * @return array
 */
function construct_get_nav_menu(){

    $menus = array(
        '' => esc_html__('Default', 'construct')
    );

    $obj_menus = wp_get_nav_menus();

    foreach ($obj_menus as $obj_menu){
        $menus[$obj_menu->term_id] = $obj_menu->name;
    }

    return $menus;
}

$args = array(
    // TYPICAL -> Change these values as you need/desire
    'opt_name' => apply_filters('opt_meta', 'opt_meta_options'),
    // Set a different name for your global variable other than the opt_name
    'dev_mode' => false,
    // Allow you to start the panel in an expanded way initially.
    'open_expanded' => false,
    // Disable the save warning when a user changes a field
    'disable_save_warn' => true,
    // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
    'save_defaults' => false,

    'output' => false,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag' => false,
    // Show the time the page took to load, etc
    'update_notice' => false,
    // 'disable_google_fonts_link' => true, // Disable this in case you want to create your own google fonts loader
    'admin_bar' => false,
    // Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu' => false,
    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
    'customizer' => false,
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export' => false,
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
    'use_cdn' => false
);

// -> Set Option To Panel.
MetaFramework::setArgs($args);

/** Page Options */
MetaFramework::setMetabox(array(
    'id' => '_page_main_options',
    'label' => esc_html__('Page Setting', 'construct'),
    'post_type' => 'page',
    'context' => 'advanced',
    'priority' => 'default',
    'open_expanded' => false,
    'sections' => array(
        array(
            'title' => esc_html__('Header', 'construct'),
            'id' => 'tab-page-header',
            'icon' => 'el el-credit-card',
            'fields' => array(
                array(
                    'id'       => 'custom_header',
                    'type'     => 'button_set',
                    'title'    => esc_html__('Custom', 'construct'),
                    'subtitle' => esc_html__('', 'construct'),
                    'options' => array(
                        '1' => 'Yes', 
                        '' => 'No',
                     ), 
                    'default' => ''
                ),
                array(
                    'id' => 'header_layout',
                    'title' => esc_html__('Layouts', 'construct'),
                    'subtitle' => esc_html__('Select a layout for header', 'construct'),
                    'default' => '1',
                    'type' => 'image_select',
                    'options' => array(
                        '1' => get_template_directory_uri().'/assets/images/header/h1.jpg',
                        '2' => get_template_directory_uri().'/assets/images/header/h2.jpg',
                        '3' => get_template_directory_uri().'/assets/images/header/h3.jpg',
                        '4' => get_template_directory_uri().'/assets/images/header/h4.jpg',
                    ),
                    'required' => array( 'custom_header', '=', '1' )
                ),
            )
        ),
        array(
            'title' => esc_html__('Page Title', 'construct'),
            'id' => 'tab-page-title-bc',
            'icon' => 'el el-map-marker',
            'fields' => array(
                array(
                    'id'       => 'custom_page_title',
                    'type'     => 'button_set',
                    'title'    => esc_html__('Custom Layout', 'construct'),
                    'options' => array(
                        '1' => 'Yes',
                        '' => 'No',
                    ),
                    'default' => ''
                ),
                array(
                    'title' => esc_html__('Page Title', 'construct'),
                    'type'  => 'section',
                    'id' => 'heading_page_title',
                    'indent' => true,
                    'required' => array( 'custom_page_title', '=', '1' )
                ),
                array(
                    'id' => 'page_title_layout',
                    'title' => esc_html__('Layouts', 'construct'),
                    'subtitle' => esc_html__('select a layout for page title', 'construct'),
                    'default' => '1',
                    'type' => 'image_select',
                    'options' => array(
                        '' => get_template_directory_uri().'/assets/images/pagetitle/p0.jpg',
                        '1' => get_template_directory_uri().'/assets/images/pagetitle/p1.jpg',
                        
                    ),
                    'required' => array( 'custom_page_title', '=', '1' )
                ),
                array(
                    'title' => esc_html__('Select Background Image', 'construct'),
                    'id' => 'page_bg_page_title',
                    'type' => 'media',
                    'url' => false,
                    'default' => '',
                    'required' => array( 'custom_page_title', '=', '1' )
                ),
                array(
                    'id' => 'pagetitle_overlay',
                    'type' => 'color_rgba',
                    'title' => __('Overlay Color', 'construct'),
                    'default' => array('color'=>'#1b1a1a','alpha'=>'0.5', 'rgba'=>'rgba(27,26,26,0.5)'),
                    'required' => array( 'custom_page_title', '=', '1' )
                ),
                array(
                    'id' => 'page_title_text',
                    'type' => 'text',
                    'title' => esc_html__('Page Title', 'construct'),
                    'subtitle' => esc_html__('Custom current page title.', 'construct'),
                    'required' => array( 'custom_page_title', '=', '1' )
                ),
                array(
                    'id' => 'page_title_color',
                    'type' => 'color',
                    'title' => esc_html__('Color Title', 'construct'),
                    'default' => '',
                    'required' => array( 'custom_page_title', '=', '1' )
                ),
                array(
                    'id' => 'page_title_font_size',
                    'type' => 'text',
                    'title' => esc_html__('Font Size', 'construct'),
                    'subtitle' => esc_html__('Enter: ...px', 'construct'),
                    'required' => array( 'custom_page_title', '=', '1' )
                ),
                array(
                    'id' => 'page_title_line_height',
                    'type' => 'text',
                    'title' => esc_html__('Line-height', 'construct'),
                    'subtitle' => esc_html__('Enter: ...px', 'construct'),
                    'required' => array( 'custom_page_title', '=', '1' )
                ),
                array(
                    'id'             => 'page_title_padding',
                    'type'           => 'spacing',
                    'right'   => false,
                    'left'    => false,
                    'mode'           => 'padding',
                    'units'          => array('px'),
                    'units_extended' => 'false',
                    'title'          => esc_html__('Title padding', 'construct'),
                    'default'            => array(
                        'padding-top'   => '',  
                        'padding-bottom'   => '',  
                        'units'          => 'px', 
                    ),
                    'required' => array( 'custom_page_title', '=', '1' )
                ),
                array(
                    'title' => esc_html__('Breadcrumb', 'construct'),
                    'type'  => 'section',
                    'id' => 'heading_breadcrumb',
                    'indent' => true,
                    'required' => array( 'custom_page_title', '=', '1' )
                ),
                array(
                    'id'       => 'hidden_breadcrumb',
                    'type'     => 'button_set',
                    'title'    => esc_html__('Hidden Breadcrumb', 'construct'),
                    'options' => array(
                        '' => 'No', 
                        'yes' => 'Yes',
                     ), 
                    'default' => '',
                    'required' => array( 'custom_page_title', '=', '1' )
                ),
                array(
                    'id' => 'breadcrumb_color',
                    'type' => 'color',
                    'title' => esc_html__('Breadcrumb Color', 'construct'),
                    'default' => '',
                    'required' => array( 'custom_page_title', '=', '1' )
                ),
            )
        ),
        array(
            'title' => esc_html__('Footer', 'construct'),
            'id' => 'tab-footer-bc',
            'icon' => 'el el-credit-card',
            'fields' => array(
                array(
                    'id'       => 'custom_footer',
                    'type'     => 'button_set',
                    'title'    => esc_html__('Custom', 'construct'),
                    'subtitle' => esc_html__('', 'construct'),
                    'options' => array(
                        '1' => 'Yes', 
                        '' => 'No',
                     ), 
                    'default' => ''
                ),
                array(
                    'id' => 'footer_layout',
                    'title' => esc_html__('Layouts', 'construct'),
                    'subtitle' => esc_html__('select a layout for page title', 'construct'),
                    'default' => '1',
                    'type' => 'image_select',
                    'options' => array(
                        '0' => get_template_directory_uri().'/assets/images/footer/f0.jpg',
                        '1' => get_template_directory_uri().'/assets/images/footer/f1.jpg',
                    ),
                    'required' => array( 'custom_footer', '=', '1' )
                ),
            )
        ),
        array(
            'title' => esc_html__('Page', 'construct'),
            'id' => 'tab-page-bc',
            'icon' => 'el el-photo',
            'fields' => array(
                array(
                    'id'       => 'enable_sidebar',
                    'type'     => 'button_set',
                    'title'    => esc_html__('Custom Sidebar', 'construct'),
                    'subtitle' => esc_html__('', 'construct'),
                    'options' => array(
                        '1' => 'Yes', 
                        '' => 'No',
                     ), 
                    'default' => ''
                ),
                array(
                    'id'       => 'page_sidebar',
                    'type'     => 'button_set',
                    'title'    => esc_html__('Set sidebar for Page', 'construct'),
                    'options' => array(
                        'left-sidebar' => 'Sidebar Left', 
                        'no-sidebar' => 'No Sidebar', 
                        'right-sidebar' => 'Sidebar Right'
                     ), 
                    'default' => 'no-sidebar',
                    'required' => array( 'enable_sidebar', '=', '1' )
                ),
                array(
                    'id'             => 'page_content_padding',
                    'type'           => 'spacing',
                    'right'   => false,
                    'left'    => false,
                    'mode'           => 'padding',
                    'units'          => array('px'),
                    'units_extended' => 'false',
                    'title'          => esc_html__('Padding', 'construct'),
                    'desc'           => esc_html__('Default: Top-130px, Bottom-130px', 'construct'),
                    'default'            => array(
                        'padding-top'   => '',  
                        'padding-bottom'   => '',  
                        'units'          => 'px', 
                    )
                ),
            )
        ),
    )
));

/** Post Extra Option */
MetaFramework::setMetabox(array(
    'id' => '_post_extra_options',
    'label' => esc_html__('Post Settings', 'construct'),
    'post_type' => 'post',
    'context' => 'advanced',
    'priority' => 'default',
    'open_expanded' => false,
    'sections' => array(
        array(
            'title' => esc_html__('Page Title', 'construct'),
            'id' => 'tab-page-header',
            'icon' => 'el el-credit-card',
            'fields' => array(
                array(
                    'title' => esc_html__('Change Background Images', 'construct'),
                    'id' => 'post_bg_page_title',
                    'type' => 'media',
                    'url' => false,
                    'default' => '',
                ),
                array(
                    'id'       => 'single_sidebar',
                    'type'     => 'button_set',
                    'title'    => esc_html__('Sidebar', 'construct'),
                    'options' => array(
                        '' => 'Default Theme Option', 
                        'left-sidebar' => 'Sidebar Left', 
                        'no-sidebar' => 'No Sidebar', 
                        'right-sidebar' => 'Sidebar Right'
                     ), 
                    'default' => ''
                ),
            )
        ),
    )
));

/** Post Options */
MetaFramework::setMetabox(array(
    'id' => '_page_post_format_options',
    'label' => esc_html__('Post Format', 'construct'),
    'post_type' => 'post',
    'context' => 'advanced',
    'priority' => 'default',
    'open_expanded' => true,
    'sections' => array(
        array(
            'title' => '',
            'id' => 'color-Color',
            'icon' => 'el el-laptop',
            'fields' => array(
                array(
                    'id'       => 'opt-video-type',
                    'type'     => 'select',
                    'title'    => esc_html__( 'Select Video Type', 'construct' ),
                    'subtitle' => esc_html__( 'Local video, Youtube, Vimeo', 'construct' ),
                    'options'  => array(
                        'local' => esc_html__('Upload', 'construct' ),
                        'youtube' => esc_html__('Youtube', 'construct' ),
                        'vimeo' => esc_html__('Vimeo', 'construct' ),
                    )
                ),
                array(
                    'id'       => 'otp-video-local',
                    'type'     => 'media',
                    'url'      => true,
                    'mode'       => false,
                    'title'    => esc_html__( 'Local Video', 'construct' ),
                    'subtitle' => esc_html__( 'Upload video media using the WordPress native uploader', 'construct' ),
                    'required' => array( 'opt-video-type', '=', 'local' )
                ),
                array(
                    'id'       => 'opt-video-youtube',
                    'type'     => 'text',
                    'title'    => esc_html__('Youtube', 'construct'),
                    'subtitle' => esc_html__('Load video from Youtube.', 'construct'),
                    'placeholder' => esc_html__('https://youtu.be/iNJdPyoqt8U', 'construct'),
                    'required' => array( 'opt-video-type', '=', 'youtube' )
                ),
                array(
                    'id'       => 'opt-video-vimeo',
                    'type'     => 'text',
                    'title'    => esc_html__('Vimeo', 'construct'),
                    'subtitle' => esc_html__('Load video from Vimeo.', 'construct'),
                    'placeholder' => esc_html__('https://vimeo.com/155673893', 'construct'),
                    'required' => array( 'opt-video-type', '=', 'vimeo' )
                ),
                array(
                    'id'       => 'otp-video-thumb',
                    'type'     => 'media',
                    'url'      => true,
                    'mode'       => false,
                    'title'    => esc_html__( 'Video Thumb', 'construct' ),
                    'subtitle' => esc_html__( 'Upload thumb media using the WordPress native uploader', 'construct' ),
                    'required' => array( 'opt-video-type', '=', 'local' )
                ),
                array(
                    'id'       => 'otp-audio',
                    'type'     => 'media',
                    'url'      => true,
                    'mode'       => false,
                    'title'    => esc_html__( 'Audio Media', 'construct' ),
                    'subtitle' => esc_html__( 'Upload audio media using the WordPress native uploader', 'construct' ),
                ),
                array(
                    'id'       => 'opt-gallery',
                    'type'     => 'gallery',
                    'title'    => esc_html__( 'Add/Edit Gallery', 'construct' ),
                    'subtitle' => esc_html__( 'Create a new Gallery by selecting existing or uploading new images using the WordPress native uploader', 'construct' ),
                ),
                array(
                    'id'       => 'opt-quote-title',
                    'type'     => 'text',
                    'title'    => esc_html__('Quote Title', 'construct'),
                    'subtitle' => esc_html__('Quote title or quote name...', 'construct'),
                ),
                array(
                    'id'       => 'opt-quote-content',
                    'type'     => 'textarea',
                    'title'    => esc_html__('Quote Content', 'construct'),
                ),
            )
        ),
    )
));

/** Testimonial Options */
MetaFramework::setMetabox(array(
    'id' => '_testimonial_options',
    'label' => esc_html__('Testimonial Setting', 'construct'),
    'post_type' => 'testimonial',
    'context' => 'advanced',
    'priority' => 'default',
    'open_expanded' => false,
    'sections' => array(
        array(
            'title' => esc_html__('General', 'construct'),
            'id' => 'tab-page-header',
            'icon' => 'el el-credit-card',
            'fields' => array(
                array(
                    'id' => 'testimonial_position',
                    'type' => 'text',
                    'title' => esc_html__('Position', 'construct'),
                    'default' => '',
                ),
                array(
                    'title' => esc_html__('Select Signature Image', 'construct'),
                    'id' => 'testimonial_sig',
                    'type' => 'media',
                    'url' => false,
                    'default' => '',
                ),
                array(
                    'id' => 'testimonial_stars',
                    'type' => 'select',
                    'title' => esc_html__('Star Rating', 'construct'),
                    'default' => '0',
                    'options' => array(
                        'no-star' => 'no-star',
                        'star1' => 'star1',
                        'star2' => 'star2',
                        'star3' => 'star3',
                        'star4' => 'star4',
                        'star5' => 'star5',
                    ),
                ),
            )
        ),
    )
));

/** Team Options */
MetaFramework::setMetabox(array(
    'id' => '_team_options',
    'label' => esc_html__('Team Setting', 'construct'),
    'post_type' => 'team',
    'context' => 'advanced',
    'priority' => 'default',
    'open_expanded' => false,
    'sections' => array(
        array(
            'title' => esc_html__('Major', 'construct'),
            'id' => 'tab-page-position',
            'icon' => 'el el-credit-card',
            'fields' => array(
                array(
                    'id' => 'team_position',
                    'type' => 'text',
                    'title' => esc_html__('Major', 'construct'),
                    'default' => '',
                ),
            )
        ),
        array(
            'title' => esc_html__('Social', 'construct'),
            'id' => 'tab-page-position-social',
            'icon' => 'el el-credit-card',
            'fields' => array(
                array(
                    'id'      => 'team_social',
                    'type'    => 'sorter',
                    'title'   => 'Social',
                    'desc'    => 'Choose which social networks are displayed and edit where they link to.',
                    'options' => array(
                        'enabled'  => array(
                            'facebook'  => 'Facebook', 
                            'twitter'   => 'Twitter', 
                            'email'     => 'Email',
                        ),
                        'disabled' => array(
                            'linkedin'  => 'inkedin',
                            'skype'     => 'Skype',
                            'youtube'   => 'Youtube', 
                            'vimeo'     => 'Vimeo', 
                            'tumblr'    => 'Tumblr', 
                            'rss'       => 'RSS', 
                            'pinterest' => 'Pinterest',
                            'instagram' => 'Instagram',
                            'yelp'      => 'Yelp'
                        )
                    ),
                ),
                array(
                    'id' => 'social_facebook_url',
                    'type' => 'text',
                    'title' => esc_html__('Facebook URL', 'construct'),
                    'default' => '',
                ),
                array(
                    'id' => 'social_twitter_url',
                    'type' => 'text',
                    'title' => esc_html__('Twitter URL', 'construct'),
                    'default' => '',
                ),
                array(
                    'id' => 'social_email_url',
                    'type' => 'text',
                    'title' => esc_html__('Email URL', 'construct'),
                    'default' => '',
                ),
                array(
                    'id' => 'social_inkedin_url',
                    'type' => 'text',
                    'title' => esc_html__('Inkedin URL', 'construct'),
                    'default' => '',
                ),
                array(
                    'id' => 'social_rss_url',
                    'type' => 'text',
                    'title' => esc_html__('Rss URL', 'construct'),
                    'default' => '',
                ),
                array(
                    'id' => 'social_instagram_url',
                    'type' => 'text',
                    'title' => esc_html__('Instagram URL', 'construct'),
                    'default' => '',
                ),
                array(
                    'id' => 'social_google_url',
                    'type' => 'text',
                    'title' => esc_html__('Google URL', 'construct'),
                    'default' => '',
                ),
                array(
                    'id' => 'social_skype_url',
                    'type' => 'text',
                    'title' => esc_html__('Skype URL', 'construct'),
                    'default' => '',
                ),
                array(
                    'id' => 'social_pinterest_url',
                    'type' => 'text',
                    'title' => esc_html__('Pinterest URL', 'construct'),
                    'default' => '',
                ),
                array(
                    'id' => 'social_vimeo_url',
                    'type' => 'text',
                    'title' => esc_html__('Vimeo URL', 'construct'),
                    'default' => '',
                ),
                array(
                    'id' => 'social_youtube_url',
                    'type' => 'text',
                    'title' => esc_html__('Youtube URL', 'construct'),
                    'default' => '',
                ),
                array(
                    'id' => 'social_yelp_url',
                    'type' => 'text',
                    'title' => esc_html__('Yelp URL', 'construct'),
                    'default' => '',
                ),
                array(
                    'id' => 'social_tumblr_url',
                    'type' => 'text',
                    'title' => esc_html__('Tumblr URL', 'construct'),
                    'default' => '',
                ),

            )
        ),
    )
));

/** Portfolio Options */
MetaFramework::setMetabox(array(
    'id' => '_portfolio_options',
    'label' => esc_html__('Portfolio Setting', 'construct'),
    'post_type' => 'portfolio',
    'context' => 'advanced',
    'priority' => 'default',
    'open_expanded' => false,
    'sections' => array(
        array(
            'title' => esc_html__('General', 'construct'),
            'id' => 'tab-page-header',
            'icon' => 'el el-credit-card',
            'fields' => array(
                array(
                    'id'       => 'image_crop',
                    'type'     => 'button_set',
                    'title'    => esc_html__('Set sidebar for Portfolio', 'construct'),
                    'options' => array(
                        'full' => 'Full',
                        'construct_portfolio_750x207' => 'Image Size 2/3',
                     ), 
                    'default' => 'full'
                ),
                array(
                    'id'       => 'single_portfolio_gallery',
                    'type'     => 'gallery',
                    'title'    => esc_html__( 'Gallery', 'construct' ),
                ),
            )
        ),
        array(
            'title' => esc_html__('Contact info', 'construct'),
            'id' => 'tab-page-header',
            'icon' => 'el el-credit-card',
            'fields' => array(
                array(
                    'id' => 'model_text',
                    'type' => 'text',
                    'title' => esc_html__('Model', 'construct'),
                    'default' => 'Vila',
                ),
                array(
                    'id' => 'client_text',
                    'type' => 'text',
                    'title' => esc_html__('Client', 'construct'),
                    'default' => 'Richard Owen - CEO Coco corp',
                ),
                array(
                    'id' => 'location_text',
                    'type' => 'text',
                    'title' => esc_html__('Location', 'construct'),
                    'default' => '1369 King st, North Wales',
                ),
                array(
                    'id' => 'completed_text',
                    'type' => 'text',
                    'title' => esc_html__('Completed', 'construct'),
                    'default' => '2015',
                ),
                array(
                    'id' => 'value_text',
                    'type' => 'text',
                    'title' => esc_html__('Value', 'construct'),
                    'default' => '$350.000',
                ),
                array(
                    'id' => 'architects_text',
                    'type' => 'text',
                    'title' => esc_html__('Architects', 'construct'),
                    'default' => 'Mark & Jaden',
                ),
                
            )
        ),
    )
));

/** Services Options */
MetaFramework::setMetabox(array(
    'id' => '_services_options',
    'label' => esc_html__('Services Setting', 'construct'),
    'post_type' => 'service',
    'context' => 'advanced',
    'priority' => 'default',
    'open_expanded' => false,
    'sections' => array(
        array(
            'title' => esc_html__('General', 'construct'),
            'id' => 'tab-page-header',
            'icon' => 'el el-credit-card',
            'fields' => array(
                array(
                    'id'       => 'single_services_gallery',
                    'type'     => 'gallery',
                    'title'    => esc_html__( 'Gallery', 'construct' ),
                ),
                array(

                    'id'       => 'title_sinlge_service',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Title', 'construct' ),
                ),
                array(
                    'id' => 'service_icon',
                    'type' => 'text',
                    'title' => esc_html__('Icon', 'construct'),
                    'default' => '',
                    'desc' => 'Please add class icon. Use the library <a href="http://zavoloklom.github.io/material-design-iconic-font/icons.html" target="_blank">Material Design Icons</a>, <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">FontAwesome</a>',
                ),
                array(
                    'id' => 'services_excerpt',
                    'type' => 'textarea',
                    'title' => esc_html__('Excerpt', 'construct'),
                ),
            )
        ),
    )
));
MetaFramework::init();