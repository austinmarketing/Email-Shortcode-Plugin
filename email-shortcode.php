<?php
/*
* Plugin Name: Wordpress Email ShortCode 
* Description: Create your WordPress shortcode for ZED Theme email. Set in Appearance > Customise > Display Options.
* Version: 1.0
* Author: David Verne
* Author URI: https://davidverne.com
*/

//Add custom shortcode to display a set telephone number on page or post.
function wp_email_shortcode(){
	return get_theme_mod( 'tcx_email_text', 'You need to set a number in Wordpress Appearance > Customise > Display Options' );
}
add_shortcode('email', 'wp_email_shortcode');

?>


<?php //Prevents any unwanted plugin updates
	
	add_filter('site_transient_update_plugins', 'dd_remove_update_nag');
function dd_remove_update_nag($value) {
 unset($value->response[ plugin_basename(__FILE__) ]);
 return $value;
}
	
?>