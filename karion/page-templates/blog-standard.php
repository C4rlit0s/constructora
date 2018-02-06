<?php
/**
 * Template Name: Blog Standard
 */
$_get_sidebar = construct_blog_sidebar();
get_header(); ?>

<div id="primary" class="container <?php echo esc_attr($_get_sidebar); ?>">
    <div class="row">
        <div id="content" class="<?php construct_blog_class(); ?>">
            <main id="main" class="site-main">
                    <?php global $wp_query, $paged;
                
                    $wp_query->query('post_type=post&showposts='.get_option('posts_per_page').'&paged='.$paged);
                    
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();

                            get_template_part( 'single-templates/content/content', get_post_format() );

                        endwhile; // end of the loop.

                        /* blog nav. */
                        construct_paging_nav();

                        /* reset custom postdata. */
                        wp_reset_postdata();
                        
                    else :
                        /* content none. */
                        get_template_part( 'single-templates/content', 'none' );

                    endif; ?>
                
            </main><!-- #content -->
        </div>
        <?php if($_get_sidebar != 'is-no-sidebar'):
            get_sidebar();
        endif; ?>
        <!-- #sidebar -->
    </div>
</div><!-- #primary -->

<?php get_footer(); ?>