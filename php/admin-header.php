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
?>
<style type="text/css">
.dashicons-display-screen-dimensions-to-admin {
background-image: url("<?php echo plugins_url('dashicon.png', __DIR__) ?>") !important;
background-repeat: no-repeat;
background-position: center;
}
</style>
<?php
wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/5.4.0/css/font-awesome.min.css');
wp_enqueue_style( 'dsdta-admin-header.min', $dsdta_plugin_folder . '/css/dsdta-admin-header.min.css', false, '1.1', 'all');
?>
<?php
if (dsdta_fs()->can_use_premium_code()) {
wp_enqueue_style( 'dsdta-admin-header-pro.min', $dsdta_plugin_folder . '/css/dsdta-admin-header-pro.min.css', false, '1.1', 'all');
}
if (dsdta_fs()->is_not_paying()) {
wp_enqueue_style( 'dsdta-admin-header-free.min', $dsdta_plugin_folder . '/css/dsdta-admin-header-free.min.css', false, '1.1', 'all');
}
do_action('dsdta_after_admin_header');
// End -------------------------------- ENCODING -------------------------------------
?>