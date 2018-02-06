<?php
$default = shortcode_atts(array(                                  
    'process_title1' => '',              
    'process_title2' => '',              
    'process_title3' => '',              
    'process_title4' => '',               
    'process_description1' => '',              
    'process_description2' => '',       
    'process_description3' => '',       
    'process_description4' => '',                   
    'process_active' => 'item1',
), $atts);
$atts = array_merge($atts,$default);
extract($atts);
$item_active = !empty($atts['process_active'])? str_replace('item', '', $atts['process_active']):'';
?>
<div class="cms-process cms-process-layout">
	<ul class="cms-process-list clearfix">
		<?php
	        for($i=1;$i<5;$i++){
	            $title = ${"process_title".$i};
	            $description = ${"process_description".$i};

	            if(!empty($title) && !empty($description)): ?>
		            <li class="cms-process-item clearfix <?php echo $i===intval($item_active)? 'cms-item-active':''?>">
		            	<h3 class="cms-process-icon">
		            		<span class="cms-process-title"><?php echo esc_attr($title); ?></span>
		            	</h3>
		            	<div class="cms-process-content-inner">
			            	<div class="cms-process-content">
			                	<div class="cms-process-desc"><?php echo apply_filters('the_content', $description); ?></div>
			            	</div>
			            </div>
		            </li>
	            <?php endif;
	        }
	    ?>
	</ul>
</div>