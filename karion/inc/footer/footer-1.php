<?php
/**
 * @name : Default Footer
 */
global $opt_theme_options;
?>
<footer id="colophon" class="site-footer cms-footer1" style="background-image: url(<?php echo esc_attr($opt_theme_options['bg_footer']['url']);?>);">
    <div id="cms-footer-section">
        <div class="container">
            <div class="row cms-footer-section1">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="cms-section-footer-top">
                        <div class="cms-social-media">
                            <div class="inner-box-contact-footer">
                                <?php if ($opt_theme_options['footer_contact_us']) { ?>
                                    <span class="title-box"><?php echo esc_attr($opt_theme_options['footer_contact_us']);?></span>
                                <?php }?>
                                <?php construct_footer_social();?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ( is_active_sidebar( 'sidebar-footer-top-1' ) ) : ?>
                <div class="row cms-footer-section2">
                    <?php construct_footer_top();?>
                </div>
                <div class="col-lg-12 borderbottom"></div>
            <?php endif;?>
            <div class="cms-footer-section3">
                <div class="cms-footer-bottom-copyright text-center-xs col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php if(!empty($opt_theme_options['cms_copyright'])) { 
                        echo wp_kses_post($opt_theme_options['cms_copyright']);
                    } else {
                        echo '© '.date("Y").' Karion by <a target="_blank" href="http://farost.net">Farost</a>';
                    } ?>
                </div>
                <?php construct_back_to_top();?>
            </div>
            
        </div>
    </div>
</footer><!-- .site-footer -->