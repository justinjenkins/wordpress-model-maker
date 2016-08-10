<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://justinjenkins.net
 * @since             1.0.0
 * @package           Model_Maker
 *
 * @wordpress-plugin
 * Plugin Name:       Model Maker
 * Plugin URI:        https://github.com/justinjenkins/wordpress-model-maker
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Justin Jenkins
 * Author URI:        http://justinjenkins.net
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       model-maker
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-model-maker-activator.php
 */
function activate_model_maker() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-model-maker-activator.php';
	Model_Maker_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-model-maker-deactivator.php
 */
function deactivate_model_maker() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-model-maker-deactivator.php';
	Model_Maker_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_model_maker' );
register_deactivation_hook( __FILE__, 'deactivate_model_maker' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-model-maker.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_model_maker() {

	$plugin = new Model_Maker();
	$plugin->run();

}
run_model_maker();
