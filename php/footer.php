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
?>
<?php
// Start -------------------------------- ENCODING -------------------------------------
$dsdta_plugin_folder = plugins_url('', __DIR__);
if (dsdta_fs()->can_use_premium_code()) {
?>
<script type="text/javascript">
jQuery( "body" ).addClass("display-screen-dimensions-to-admin-pro");
jQuery( "body.display-screen-dimensions-to-admin-pro" ).removeClass("display-screen-dimensions-to-admin-free");
</script>
<?php
//
}
if (dsdta_fs()->is_not_paying()) {
?>
<script type="text/javascript">
jQuery( "body" ).addClass("display-screen-dimensions-to-admin-free");
jQuery( "body.display-screen-dimensions-to-admin-free" ).removeClass("display-screen-dimensions-to-admin-pro");
</script>
<?php
}
if (dsdta_fs()->is_trial()) {
}
do_action('dsdta_after_footer');
// End -------------------------------- ENCODING -------------------------------------
?>
