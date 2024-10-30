<?php
/**
 * Plugin Name: Linkam Share Button
 * Plugin URI: http://linkam.ir/page/wordpress/
 * Description: افزونه اشتراک مطالب در سرویس اشتراک لینک لینکام
 * Version: 1.0
 * Author: Ali Farmad
 * Author URI: http://farmad.me
 */
function post_share_to_linkam($content) {
	$PluginDir = plugins_url( 'images/linkam_share_btn.png', __FILE__ );
    global $post;
	if (is_single()) {
		$content .= '<div style="text-align:justify; width:100%; margin: 7px 0;">'."\n".'<a href="http://linkam.ir/links/add?url='. get_permalink($post->ID) . '" target="_blank" rel="nofollow" title="اشتراک گذاری در لینکام" ><img src="'. $PluginDir .'" border="0" alt="لینکام" style="margin:15px 0; max-width:130px; max-height:28px; width:130px; height:28px;" /></a>'."\n".'</div>';
			  
    }				  
	
	return $content;
}
add_filter('the_content', 'post_share_to_linkam');
?>