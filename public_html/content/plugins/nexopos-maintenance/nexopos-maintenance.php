<?php
/*
Plugin Name: Maintenance
Plugin URI: https://nexopos.com
Description: Redirect unloged users
Version: 0.1.0
Author: Blair Jersyer
Author URI: http://nexopos.com
Text Domain: nexopos-maintenaance
Domain Path: /languages
*/

if( ! defined( 'ABSPATH' ) ): die( 'No kiddies' );endif;

add_action( 'admin_init', 'redirect_non_logged_users_to_specific_page' );

function redirect_non_logged_users_to_specific_page() {

if ( !is_user_logged_in() && ! is_page('maintenance') && $_SERVER['PHP_SELF'] != '/wp-admin/admin-ajax.php' ) {
    wp_redirect( 'http://nexopos.com/maintenance' ); 
    exit;
}
