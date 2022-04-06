<?php

/***********************************************************************
 * Integrate ACF directy in Theme
 *  https://support.advancedcustomfields.com/forums/topic/include-acf-to-my-plugin/
 ***********************************************************************/
if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( !class_exists('acf') ) {
    add_filter('acf/settings/path', 'cysp_acf_settings_path');
    function cysp_acf_settings_path( $path ) {
        $path = get_stylesheet_directory_uri() . '/includes/acf/' ;
        return $path;
    }
    add_filter('acf/settings/dir', 'cysp_acf_settings_dir');
    function cysp_acf_settings_dir( $path ) {
        $dir = get_stylesheet_directory_uri() . '/includes/acf/' ;
        return $dir;
    }
    add_filter('acf/settings/show_admin', '__return_true');
    // include_once( get_stylesheet_directory() . '/includes/acf/acf.php' );
    get_template_part( 'includes/acf/acf' );
    add_filter('acf/settings/save_json', 'cysp_acf_json_save_point');
    function cysp_acf_json_save_point( $path ) {
        $path = get_stylesheet_directory() . '/acf-json' ;
        return $path;
    }
    add_filter('acf/settings/load_json', 'cysp_acf_json_load_point');
    add_filter( 'site_transient_update_plugins', 'cysp_stop_acf_update_notifications', 11 );
    function cysp_stop_acf_update_notifications( $value ) {
        unset( $value->response[ get_stylesheet_directory_uri() . '/includes/acf/acf.php' ] );
        return $value;
    }
} else {
    add_filter('acf/settings/load_json', 'cysp_acf_json_load_point');
}

function cysp_acf_json_load_point( $paths ) {
    $paths[] = get_stylesheet_directory_uri() . 'acf-json-load';
    return $paths;
}

/***********************************************************************
 * Options Fields
 ***********************************************************************/

// CREDITS
if ( function_exists( 'acf_add_options_page' ) ) {

    acf_add_options_page( array(
        'page_title'	=> 'Page d\'accueil',
        'menu_title'	=> 'Page d\'accueil',
        'menu_slug' 	=> 'acf-home',
        'capability'	=> 'edit_posts',
        'redirect'		=> false,
    ));

}



/***********************************************************************
 * Login redirect for editors
 ***********************************************************************/

function _themename_redirect_to_administration_page( $url, $request, $user ) {
    if ( $user && is_object( $user ) && is_a( $user, 'WP_User' ) ) {
        if ( $user->has_cap( 'administrator' ) ) {
            $url =  admin_url();
        } else {
            $url = home_url('/administration/');
        }
    }
    return $url;
}
add_filter( 'login_redirect', '_themename_redirect_to_administration_page', 10, 3 );

/***********************************************************************
 * Hide Dashboard for Editors
 ***********************************************************************/
! defined( 'ABSPATH' ) AND exit;

/*
 * Remove admin bar for every user except admin
 * https://www.wpbeginner.com/wp-tutorials/how-to-disable-wordpress-admin-bar-for-all-users-except-administrators/
 */

function _themename_remove_admin_bar_for_everyone() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', '_themename_remove_admin_bar_for_everyone');



// Remove access to back-office to usrs
// https://wordpress.stackexchange.com/questions/66093/how-to-prevent-access-to-wp-admin-for-certain-user-roles
function _themename_disable_admin_access_to_editors() {
    // Do not run if the user is logged in and trying to log out
    // This might need one or two more checks.
    // Especially if you have custom login/logout/reset password/etc rules and routes set up.
    if ( ! is_admin() || ( is_user_logged_in() && isset( $GLOBALS['pagenow'] ) AND 'wp-login.php' === $GLOBALS['pagenow'] ) ) {
        return;
    }

    $redirect = isset( $_SERVER['HTTP_REFERER'] ) ? $_SERVER['HTTP_REFERER'] : home_url( '/' );

    if ( current_user_can( 'editor' ) OR current_user_can( 'editor' ) )
    exit( wp_redirect( $redirect ) );
}
add_action( 'admin_init', '_themename_disable_admin_access_to_editors', 100 );
