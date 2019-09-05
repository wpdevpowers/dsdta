<?php

/**
* PHP version 7.3.3
*
* @category    Screen_Dimensions
* @package     dsdta
* @author      WP Dev Powers <info@wpdevpowers.com>
* @copyright   2018 WP Dev Powers
* @license     GPL-2.0+ http://www.gnu.org/licenses/gpl-2.0.txt
* @link        http://wpdevpowers.com
*/
// Start -------------------------------- ENCODING -------------------------------------
?>
<style type="text/css">
#onload-viewport-dimensions-bar {display: none;}
.admin_user #onload-viewport-dimensions-bar {display: block;}
</style>
<?php 
add_action( 'wp_head', 'display_screen_dimensions_to_admin_users_footer_free' );
function display_screen_dimensions_to_admin_users_footer_free()
{
    ?>
<script type="text/javascript">
var width = window.innerWidth,
height = window.innerHeight;
</script>
<div id="onload-viewport-dimensions-bar" class="onload-viewport-dimensions" style="color: white !important; font-size: 18px; line-height: 18px; background: rgba(221,152,33,1); padding: 12.5px; text-align: center; color: white; width: 100%; position: fixed; bottom: 0; height: 40px; z-index: 999999999999;">
<div id="onload-viewport" class="onload-viewport-dimensions-text">
Width: <span id="onload-width"></span>  Height: <span id="onload-height"></span>
</div>
</div>
<script type="text/javascript">
window.onload = function(){
var width = window.innerWidth,
height = window.innerHeight;
document.getElementById('onload-width').innerHTML = width;
document.getElementById('onload-height').innerHTML = height;
};
</script>
<?php 
}

add_action( 'wp_head', 'display_screen_dimensions_to_admin_users_head_free' );
function display_screen_dimensions_to_admin_users_head_free()
{
    $user = wp_get_current_user();
    
    if ( in_array( 'administrator', (array) $user->roles ) ) {
        //The user has the "administrator" role
        ?>
<script type="text/javascript">
//If jQuery is loaded do something, else do something else
if (window.jQuery) {
} else {
}
//To test...
if (window.jQuery) {
console.log("Yes there's jQuery!");
} else {
console.log("Nope, no jQuery on this site...");
};
//add class "not-admin" to body
jQuery(document).ready(function(){
jQuery('body').addClass('admin_user');
});
</script>
<?php 
    } else {
        ?>
<script type="text/javascript">
//add class "not-admin" to body
jQuery(document).ready(function(){
jQuery('body').addClass('not_admin');
});
</script>
<?php 
    }

}

// End -------------------------------- ENCODING -------------------------------------
?>
<style type="text/css">
#live-viewport-dimensions-bar {display: none !important;}
</style>
