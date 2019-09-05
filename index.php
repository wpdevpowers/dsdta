<?php
/**
 * Description: Displays the current screen dimensions to admin users only.
 While this plugin is activated, admin users will see a bar at the bottom of your websites front end that displays the current width &amp; height of your browser window. If you resize your window and refresh the page, the displayed dimensions will update. If you upgrade to the <a href="http://wpdevpowers.com/pro-pricing/display-screen-dimensions-to-admin" target="_blank">Pro Version</a>, the displayed dimensions will update live as you resize the page.
 * Plugin Name: WP Dev Powers - Display Screen Dimensions to Admin Plugin
 * Plugin URI:  http://wpdevpowers.com/pro-pricing/display-screen-dimensions-to-admin/
 *
 * Version:     1.0.1
 * Author:      wpdevpowers
 * Author URI:  http://wpdevpowers.com
 * Text Domain: display-screen-dimensions-to-admin
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * PHP version 7.3.3
 *
 * @category    Screen_Dimensions
 * @package     dsdta
 * @author      WordPress Dev Powers <wpdevpowers@gmail.com>
 * @copyright   2018 WP Dev Powers
 * @license     GPL-2.0+ http://www.gnu.org/licenses/gpl-2.0.txt
 * @link        http://wpdevpowers.com
 *
 */
?>

<?php
// Start -------------------------------- ENCODING -------------------------------------

define('DSDTA_PLUGIN_DIR', dirname(__FILE__).'/');

$dsdta_plugin_folder = plugins_url('', __FILE__);

if (!function_exists('dsdta_fs_init')) {
    // Create a function called "dsdta_fs_init" if it doesn't already exist
    function dsdta_fs_init()
    {
        register_setting('dsdta_fs_settings');
    }
}

if (!defined('ABSPATH')) {
    exit;
}

if (function_exists('dsdta_fs')) {
    dsdta_fs()->set_basename(true, __FILE__);
    return;
}

// Freemius Integration Code
require plugin_dir_path(__FILE__) . '/php/freemius-integration.php';


// START
// START------------------------- Backend Menus/Pages -----------------------------START
// START

// Add Top-Level Admin Menu/Page
function register_dsdta_fs_my_admin_menu()
{
    add_menu_page(
        __('Display Screen Dimensions to Admin', 'textdomain'),
        'DSDTA',
        'manage_options',
        'dsdta_fs_top_level_admin_menu',
        'dsdta_fs_top_level_admin_menu',
        'dashicons-display-screen-dimensions-to-admin',
        101
    );
}
add_action('admin_menu', 'register_dsdta_fs_my_admin_menu');

// Add content to it...
function dsdta_fs_top_level_admin_menu()
{
?>
    <style type="text/css">
        h3 {
            margin: 1em 0 .3em 0;
        }
    </style>
    <div class="display-screen-dimensions-to-admin-backend-page">
<?php
        if (dsdta_fs()->is_not_paying()) {
?>
            <h2 class="free-only">Display Screen Dimensions to Admin</h2>
<?php
    }
?>

<?php
        if (dsdta_fs()->can_use_premium_code()) {
?>
            <div class="pro-only"></div>
            <h2>Display Screen Dimensions to Admin Pro
<?php
if (dsdta_fs()->is_trial()) {
?>
                     (Trial)
<?php
            }
?>
            </h2>
<?php
}
?>

        <span style="font-size: 16px;"><a href="/wp-admin/admin.php?page=dsdta_fs_top_level_admin_menu-account" target="_blank">View Your Account</a> <span class="free-only">|</span> <a class="free-only" href="/wp-admin/admin.php?page=dsdta_fs_top_level_admin_menu-account" target="_blank">Upgrade to Pro!</a></span>

        <h3>Usage Instructions</h3>

        <p>While this plugin is activated, admin users will see a bar at the bottom of the screen when viewing the frontend of your site which displays the current screen dimensions. If you resize your window and refresh the page, the displayed dimensions will update. If you upgrade to the <a href="http://wpdevpowers.com/pro-pricing/display-screen-dimensions-to-admin" target="_blank">Pro Version</a>, the displayed dimensions will update live as you resize the page.</p>


<?php
        if (dsdta_fs()->can_use_premium_code()) {
?>
            <h3>Usage Instructions for Pro Powers</h3>
            While this plugin is activated, admin users will see a bar at the bottom of the screen when viewing the frontend of your site which displays the current screen dimensions. If you resize your window and refresh the page, the displayed dimensions will update live as you resize the page.<br>
<?php
}
?>
    </div>
    <?php
} // function dsdta_fs_top_level_admin_menu()

// END
// END------------------------- Backend Menus/Pages -----------------------------END
// END
?>


<?php
// Start ---------------------------------------- START OF FILE FRAMEWORK --------------------------------------------- START//
// Start OF FILE FRAMEWORK ------------------------------ START ----------------------------------- START OF FILE FRAMEWORK//
// Start ---------------------------------------- START OF FILE FRAMEWORK --------------------------------------------- START//
?>

<?php
// Start -------------------------------------admin_head--------------------------------------------------//
add_action('admin_head', 'display_screen_dimensions_to_admin_admin_header');
// admin Header
function display_screen_dimensions_to_admin_admin_header()
{
    include plugin_dir_path(__FILE__) . '/php/admin-header.php';
}

// End ---------------------------------------admin_head--------------------------------------------------//
// Start -------------------------------------admin_footer--------------------------------------------------//
add_action('admin_footer', 'display_screen_dimensions_to_admin_admin_footer');
// admin Footer
function display_screen_dimensions_to_admin_admin_footer()
{
    include plugin_dir_path(__FILE__) . '/php/admin-footer.php';
}

// End ---------------------------------------admin_footer--------------------------------------------------//
// Start -------------------------------------wp_head--------------------------------------------------//
add_action('wp_head', 'display_screen_dimensions_to_admin_wp_header');
//Header
function display_screen_dimensions_to_admin_wp_header()
{
    include plugin_dir_path(__FILE__) . '/php/header.php';
}

// End ---------------------------------------wp_head--------------------------------------------------//
// Start -------------------------------------wp_footer--------------------------------------------------//
add_action('wp_footer', 'display_screen_dimensions_to_admin_wp_footer');
// Footer
function display_screen_dimensions_to_admin_wp_footer()
{
    include plugin_dir_path(__FILE__) . '/php/footer.php';
}

// End ---------------------------------------wp_footer--------------------------------------------------//
?>


<?php
// End ---------------------------------------- END OF FILE FRAMEWORK --------------------------------------------- END//
// End OF FILE FRAMEWORK ------------------------------ END ----------------------------------- END OF FILE FRAMEWORK//
// End ---------------------------------------- END OF FILE FRAMEWORK --------------------------------------------- END//
?>






<?php
// Start ---------------------------------------- START OF FUNCTIONS --------------------------------------------- START//
// Start OF FUNCTIONS ------------------------------ START ----------------------------------- START OF FUNCTIONS//
// Start ---------------------------------------- START OF FUNCTIONS --------------------------------------------- START//
?>

<?php
// START
// START------------------------- PLUGIN FUNCTIONALITY -----------------------------START
// START
?>

<?php
require plugin_dir_path(__FILE__) . '/php/core.php';
?>


<?php
// END
// END--------------------------- PLUGIN FUNCTIONALITY -----------------------------END
// END
?>


<?php
// End --------------------------------------------- END OF FUNCTIONS --------------------------------------------- END//
// End OF FUNCTIONS ------------------------------------- END ----------------------------------- END OF FUNCTIONS//
// End --------------------------------------------- END OF FUNCTIONS --------------------------------------------- END//


// End -------------------------------- ENCODING -------------------------------------
?>