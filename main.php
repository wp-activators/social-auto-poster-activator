<?php
/**
 * @wordpress-plugin
 * Plugin Name:       Social Auto Poster Activator
 * Plugin URI:        https://github.com/wp-activators/social-auto-poster-activator
 * Description:       Social Auto Poster Plugin Activator
 * Version:           1.0.0
 * Requires at least: 5.9.0
 * Requires PHP:      7.2
 * Author:            mohamedhk2
 * Author URI:        https://github.com/mohamedhk2
 **/

defined( 'ABSPATH' ) || exit;
$SOCIAL_AUTO_POSTER_ACTIVATOR_NAME   = 'Social Auto Poster Activator';
$SOCIAL_AUTO_POSTER_ACTIVATOR_DOMAIN = 'social-auto-poster-activator';
$functions                           = require_once __DIR__ . DIRECTORY_SEPARATOR . 'functions.php';
extract( $functions );
if (
	$activator_admin_notice_ignored()
	|| $activator_admin_notice_plugin_install( 'social-auto-poster/social-auto-poster.php', null, 'Social Auto Poster', $SOCIAL_AUTO_POSTER_ACTIVATOR_NAME, $SOCIAL_AUTO_POSTER_ACTIVATOR_DOMAIN )
	|| $activator_admin_notice_plugin_activate( 'social-auto-poster/social-auto-poster.php', $SOCIAL_AUTO_POSTER_ACTIVATOR_NAME, $SOCIAL_AUTO_POSTER_ACTIVATOR_DOMAIN )
) {
	return;
}
define( 'WPW_AUTO_POSTER_LICENSE_VALIDATOR', plugins_url( 'response.json', __FILE__ ) );
update_option( 'wpw_auto_poster_activation_code', $license_key = 'free4allfree4all' );
update_option( 'wpw_auto_poster_email_address', $email = 'free4all@wp-activators.github' );
update_option( 'wpw_auto_poster_activated', base64_encode( "{$license_key}%{$email}" ) );
