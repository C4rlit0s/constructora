<?php
get_header(); 
?>
<div id="page-service-categories">
    <div class="container">
            <?php
            	$term = get_term_by( 'slug', get_query_var( 'service_categories' ), get_query_var( 'taxonomy' ) );
                echo apply_filters('the_content','[cms_grid col_xs="1" col_sm="2" col_md="3" col_lg="3" item_space="0px" source="size:12|order_by:date|post_type:service|tax_query:'.$term->term_id.'" cms_template="cms_grid--service.php"]');
            ?>
    </div>
</div>
<?php get_footer(); ?>