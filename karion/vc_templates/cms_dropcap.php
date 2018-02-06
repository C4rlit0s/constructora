<?php
extract(shortcode_atts(array(       
    'dropcap_content' => '',                                          
    'dropcap_style' => 'style1',                                          
), $atts));
?>
<div class="cms-dropcap">
	<?php if (!empty($dropcap_content) && $dropcap_content) { ?>
		<div class="cms-dropcap-content <?php echo esc_attr($dropcap_style); ?>">
			<?php echo esc_attr($dropcap_content); ?>
		</div>
	<?php } ?>
</div>