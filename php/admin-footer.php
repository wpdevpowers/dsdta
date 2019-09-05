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
<script type="text/javascript">
jQuery('.post-type-acf-field-group #submitdiv').append('<div class="dsdta-leave-a-review-message" style="font-weight: 900; padding: 10px 10px 13px 13px; color: black; background: rgba(103, 103, 191, 0.5);">If you like the color coded fields, please <a href="https://wordpress.org/support/plugin/wp-dev-powers-display-screen-dimensions-to-admin/reviews/#new-post" target="_blank">click here</a> to leave a review.</div>');
<?php
$dsdta_pro_folder = DSDTA_PLUGIN_DIR . '/pro';
if (file_exists($dsdta_pro_folder)) {
?>
<?php
}
?>
</script>
<?php
wp_enqueue_script( 'dsdta-admin-footer.min', $dsdta_plugin_folder . '/js/dsdta-admin-footer.min.js', false, '1.1', 'all');
if (dsdta_fs()->can_use_premium_code()) {
wp_enqueue_script( 'dsdta-admin-footer-pro.min', $dsdta_plugin_folder . '/js/dsdta-admin-footer-pro.min.js', false, '1.1', 'all');
}
if (dsdta_fs()->can_use_premium_code()) {
$dsdta_fs_pro_folder = DSDTA_PLUGIN_DIR . '/pro';
if (!file_exists($dsdta_fs_pro_folder) && class_exists('acf_pro')) {
?>
<script type="text/javascript">
jQuery('.pro-only').html('<h2 class="submitdivh2">You still have the free version installed and activated...</h2><p>To start using the pro features, all you need to do is deactivate the free version and then install & activate the pro version.</p><p><a href="/wp-admin/plugins.php" target="_blank">Click here to open your plugins page in a new tab</a>.</p>');
jQuery('html').addClass('dsdta-pro-activated-but-using-free-version')
</script>
<style type="text/css">
.display-screen-dimensions-to-admin-backend-page > div.pro-only {
background: linear-gradient(to top, rgba(103, 103, 191, .4), rgba(145, 98, 178, .5));
padding: 25px;
position: relative;
left: -20px;
width: calc(100% + 20px);
bottom: 20px;
}
.display-screen-dimensions-to-admin-backend-page > div.pro-only h2 {
color: white;
text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6);
}
.display-screen-dimensions-to-admin-backend-page > div.pro-only p {
font-weight: bold;
}
.display-screen-dimensions-to-admin-backend-page > div.pro-only a {
color: white;
text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6);
}
.display-screen-dimensions-to-admin-backend-page > div.pro-only a:hover {
text-shadow: 2px 1px 2.5px rgba(0, 0, 0, 0.9);
}
</style>
<?php
}
}
if (dsdta_fs()->is_not_paying()) {
wp_enqueue_script( 'dsdta-admin-footer-free.min', $dsdta_plugin_folder . '/js/dsdta-admin-footer-free.min.js', false, '1.1', 'all');
}
if (dsdta_fs()->is_trial()) {
?>
<script type="text/javascript">
jQuery( "body" ).addClass("display-screen-dimensions-to-admin-trial");
jQuery(".display-screen-dimensions-to-admin-trial").closest('html').addClass('dsdta_fs-trial-user');
</script>
<?php
}
do_action('dsdta_after_admin_footer');
// End -------------------------------- ENCODING -------------------------------------
?>