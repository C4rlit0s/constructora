<?php
get_header(); 
?>
<div id="page-portfolio-categories">
    <div class="container">
            <?php
            	$term = get_term_by( 'slug', get_query_var( 'portfolio_categories' ), get_query_var( 'taxonomy' ) );
                echo apply_filters('the_content','[cms_grid layout="masonry" col_xs="1" col_sm="2" col_md="3" col_lg="3" filter="false" item_space="0px" source="size:12|order_by:date|post_type:portfolio|tax_query:'.$term->term_id.'" cms_template="cms_grid--portfolio2.php"]');
            ?>
    </div>
</div>
<?php get_footer(); ?>


