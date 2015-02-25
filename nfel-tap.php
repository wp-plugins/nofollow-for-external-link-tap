<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that
 * also follow WordPress Coding Standards and PHP best practices.
 *
 * @package   NFEL_TAP
 * @author    Alain Sanchez <asanchezg@inetzwerk.com>
 * @license   GPL-2.0+
 * @link      http://www.inetzwerk.com
 * @copyright 2014 Alain Sanchez
 *
 * @wordpress-plugin
 * Plugin Name:       Nofollow for External Link TAP
 * Plugin URI:       http://www.todoapuestas.org
 * Description:       Automatically insert `rel=nofollow` and `target=_blank` to all the external links into your website posts or pages.
 * Version:           1.0.0
 * Author:       Alain Sanchez
 * Author URI:       http://www.inetzwerk.com
 * Text Domain:       nfel-tap
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/<owner>/<repo>
 * WordPress-Plugin-Boilerplate: v2.6.1
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-nfel-tap.php` with the name of the plugin's class file
 *
 */
require_once( plugin_dir_path( __FILE__ ) . 'public/class-nfel-tap.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 * @TODO:
 *
 * - replace NFEL_TAP with the name of the class defined in
 *   `class-nfel-tap.php`
 */
register_activation_hook( __FILE__, array( 'NFEL_TAP', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'NFEL_TAP', 'deactivate' ) );

/*
 * @TODO:
 *
 * - replace NFEL_TAP with the name of the class defined in
 *   `class-nfel-tap.php`
 */
add_action( 'plugins_loaded', array( 'NFEL_TAP', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-nfel-tap-admin.php` with the name of the plugin's admin file
 * - replace NFEL_TAP_Admin with the name of the class defined in
 *   `class-nfel-tap-admin.php`
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

//	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-nfel-tap-admin.php' );
//	add_action( 'plugins_loaded', array( 'NFEL_TAP_Admin', 'get_instance' ) );

}
