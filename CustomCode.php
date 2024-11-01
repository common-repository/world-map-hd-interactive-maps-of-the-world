<?php 



function worldmaphd() {
	 
wp_register_script('my_amazing_script', plugins_url('d3.v4.min.js', __FILE__), array('jquery'),false, true);
wp_enqueue_script('my_amazing_script');

wp_register_script('worldmap_emb', plugins_url('worldmap.js', __FILE__), array('jquery'),false, true);
wp_enqueue_script('worldmap_emb');


}
add_action('wp_footer', 'worldmaphd');

?>

<div id="map-container" style="width:100%" ></div>


	
