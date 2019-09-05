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
$dsdta_plugin_folder = plugins_url( '', __DIR__ );

if ( !function_exists( 'dsdta_fs' ) ) {
    function dsdta_fs()
    {
        global  $dsdta_fs ;
        
        if ( !isset( $dsdta_fs ) ) {
            require_once DSDTA_PLUGIN_DIR . '/freemius/start.php';
            $dsdta_fs = fs_dynamic_init( array(
                'id'              => '4487',
                'slug'            => 'wp-dev-powers-display-screen-dimensions-to-admin',
                'premium_slug'    => 'wp-dev-powers-display-screen-dimensions-to-admin-pro',
                'type'            => 'plugin',
                'public_key'      => 'pk_621702a5688c61ee57f92c7cd830d',
                'is_premium'      => false,
                'premium_suffix'  => 'Pro',
                'has_addons'      => false,
                'has_paid_plans'  => true,
                'has_affiliation' => 'customers',
                'menu'            => array(
                'slug' => 'dsdta_fs_top_level_admin_menu',
            ),
                'is_live'         => true,
            ) );
        }
        
        return $dsdta_fs;
    }
    
    dsdta_fs();
    do_action( 'dsdta_fs_loaded' );
}

function dsdta_fs_custom_connect_message_on_update(
    $user_first_name,
    $plugin_title,
    $user_login,
    $site_link,
    $freemius_link
)
{
    return sprintf(
        __( 'Hey %1$s' ) . ',<br>' . __( 'Please help us improve %2$s! If you opt-in, some data about your usage of %2$s will be sent to %5$s. If you skip this, that\'s okay! %2$s will still work just fine.', 'display-screen-dimensions-to-admin' ),
        $user_first_name,
        '<b>' . $plugin_title . '</b>',
        '<b>' . $user_login . '</b>',
        $site_link,
        $freemius_link
    );
}

dsdta_fs()->add_filter(
    'connect_message_on_update',
    'dsdta_fs_custom_connect_message_on_update',
    10,
    6
);

if ( dsdta_fs()->is_not_paying() ) {
    add_action( 'admin_notices', 'dsdta_fs_Marketing_Content' );
    function dsdta_fs_Marketing_Content()
    {
        $dsdta_fs_pro_folder = DSDTA_PLUGIN_DIR . '/pro';
        if ( !file_exists( $dsdta_fs_pro_folder ) ) {
            echo  '<div data-id="premium_activated" data-manager-id="display-screen-dimensions-to-admin" class="updated success fs-notice fs-sticky fs-has-title"><label class="fs-plugin-title">Display Screen Dimensions to Admin</label><div class="fs-close"><i class="dashicons dashicons-no" title="Dismiss"></i> <span>Dismiss</span></div><div class="fs-notice-body"><b style="color: black;">Gain More Powers!</b>: <a href="http://wpdevpowers.com/pro-pricing/display-screen-dimensions-to-admin/">Click here to upgrade to Pro</a>.</div></div>' ;
        }
    }

}


if ( dsdta_fs()->is_not_paying() ) {
    add_action( 'admin_notices', 'dsdta_fs_Activate_License_Notice' );
    function dsdta_fs_Activate_License_Notice()
    {
        $dsdta_fs_pro_folder = DSDTA_PLUGIN_DIR . '/pro';
        if ( file_exists( $dsdta_fs_pro_folder ) ) {
            echo  '<div data-id="Activate_License_Notice" data-manager-id="display-screen-dimensions-to-admin" class="updated success fs-notice fs-sticky fs-has-title"><label class="fs-plugin-title">Display Screen Dimensions to Admin Pro</label><div class="fs-close"><i class="dashicons dashicons-no" title="Dismiss"></i> <span>Dismiss</span></div><div class="fs-notice-body"><b style="color: black;">Pro Version Successfully Installed!</b> All you need to do now is <a href="/wp-admin/admin.php?page=dsdta_fs_top_level_admin_menu-account">activate it here</a>.</div></div>' ;
        }
    }

}

// End -------------------------------- ENCODING -------------------------------------