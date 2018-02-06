<?php
/**
 * The Template for displaying all single services
 */

$_get_post_sidebar = construct_service_single_sidebar();
get_header(); ?>
<div id="primary" class="container">
    <div class="row">
        <div id="content">
            <main id="main" class="site-main">
                <?php
                // Start the loop.
                while ( have_posts() ) : the_post();
                    ?>
                     <div class="single-services-wrap">
                        <?php 
                            // Include the single content template.
                            get_template_part( 'single-templates/single-service/content', get_post_format());
                        ?>
                    </div>
                    <?php 
                endwhile;
                ?>
            </main>        
        </div><!-- #main -->
    </div>
</div><!-- #primary -->
<?php get_footer(); ?>