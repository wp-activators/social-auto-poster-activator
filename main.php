<?php
/**
 * @wordpress-plugin
 * Plugin Name:       Social Auto Poster Activ@tor
 * Plugin URI:        https://bit.ly/sap-act
 * Description:       Social Auto Poster Plugin Activ@tor
 * Version:           1.1.0
 * Requires at least: 5.9.0
 * Requires PHP:      7.2
 * Author:            moh@medhk2
 * Author URI:        https://bit.ly/medhk2
 **/

defined( 'ABSPATH' ) || exit;
$PLUGIN_NAME   = 'Social Auto Poster Activ@tor';
$PLUGIN_DOMAIN = 'social-auto-poster-activ@tor';
extract( require_once __DIR__ . DIRECTORY_SEPARATOR . 'functions.php' );
if (
	$admin_notice_ignored()
	|| $admin_notice_plugin_install( 'social-auto-poster/social-auto-poster.php', null, 'Social Auto Poster', $PLUGIN_NAME, $PLUGIN_DOMAIN )
	|| $admin_notice_plugin_activate( 'social-auto-poster/social-auto-poster.php', $PLUGIN_NAME, $PLUGIN_DOMAIN )
) {
	return;
}
define( 'WPW_AUTO_POSTER_LICENSE_VALIDATOR', plugins_url( 'response.json', __FILE__ ) );
update_option( 'wpw_auto_poster_activation_code', $license_key = 'free4allfree4all' );
update_option( 'wpw_auto_poster_email_address', $email = 'free4all@wp-activ-ators.github' );
update_option( 'wpw_auto_poster_activated', base64_encode( "{$license_key}%{$email}" ) );
