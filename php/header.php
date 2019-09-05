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
if (dsdta_fs()->can_use_premium_code()) {
?>
<style type="text/css">
</style>
<?php
}
if (dsdta_fs()->can_use_premium_code()) {
}
if (dsdta_fs()->is_not_paying()) {
}
if (dsdta_fs()->is_trial()) {
}
do_action('dsdta_after_header');
// End -------------------------------- ENCODING -------------------------------------
?>
