<?php
/**
 * The Template for displaying all single posts
 *
 */
$_get_post_sidebar = construct_single_post_sidebar();
get_header(); ?>

<div id="primary" class="container <?php echo esc_attr($_get_post_sidebar); ?>">
    <div class="row">
        <div id="content" class="<?php construct_single_post_class(); ?>">
            <main id="main" class="site-main">
                <?php
                while ( have_posts() ) : the_post();
                    ?>
                     <div class="single-post-inner">
                        <?php 
                            get_template_part( 'single-templates/single/content', get_post_format() );
                            construct_post_comment();
                        ?>
                    </div>
                    <?php 
                endwhile;
                ?>
            </main>
        </div>
        <?php if($_get_post_sidebar != 'is-no-sidebar'):
            get_sidebar('post');
        endif; ?>

    </div>
</div><!-- #primary -->
<?php get_footer(); ?>