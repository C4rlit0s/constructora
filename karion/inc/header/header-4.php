<?php
/**
 * @name : Default Header
 *
 */
global $opt_theme_options;
?>

<div id="cshero-header-inner" class="header-4">
    <div id="cshero-header-wrapper">
        <?php if(class_exists('EF3_Framework')) { ?>
            <div id="cshero-header-top" class="cshero-topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 col-slogan">
                            <div class="h-top-box h-top-box-mediasocial">
                                <?php construct_top_social();?>    
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 col-text-align">
                            <div class="h-top-box h-top-box-phone">
                            <?php if ($opt_theme_options['top_bar_phone'] || $opt_theme_options['top_bar_phone_link']) { ?>
                                <span class="label-phone"><?php echo esc_html__('Call Now', 'construct'); ?></span>
                                <span class="numberphone"><a href="tel:<?php echo esc_attr($opt_theme_options['top_bar_phone_link']);?>">
                                    <?php echo esc_attr($opt_theme_options['top_bar_phone']);?>
                                </a></span>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div id="cshero-header-holder">
            <div id="cshero-header" class="<?php construct_header_class('cshero-main-header'); ?>">
                <div class="container">
                    <div class="bode-menu">
                        <div class="row">
                            <div id="cshero-header-logo" class="col-xs-6 col-sm-5 col-md-3 col-lg-3">
                                <?php construct_header_logo_light(); ?>
                            </div><!-- #site-logo -->
                            <div id="cshero-header-navigation" class="effect-line col-xs-6 col-sm-7 col-md-9 col-lg-9">
                                <div class="cshero-header-navigation-inner clearfix">
                                    <div id="cshero-header-navigation-primary" class="cshero-header-navigation">
                                        <div class="cshero-navigation-right hidden-xs hidden-sm">
                                            <?php if ($opt_theme_options['show_search_icon']) { ?>
                                                <div class="h-search-wrapper h-icon">
                                                    <i class="search open-search fa fa-search"></i>
                                                </div>
                                            <?php } ?>

                                        </div>

                                        <nav id="site-navigation" class="main-navigation">
                                            <?php construct_header_navigation_primary(); ?>
                                        </nav><!-- #site-navigation -->
                                    </div>
                                </div>
                            </div>
                            <div id="cshero-menu-mobile">
                                <i class="open-menu lnr lnr-menu"></i>
                                <?php if ($opt_theme_options['show_search_icon']) { ?>
                                    <i class="open-search lnr lnr-magnifier"></i>
                                <?php } ?>
                            </div><!-- #menu-mobile -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>