<?php

/**
 *
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.openconceptlab.org
 * @since             1.0.0
 * @package           searchocl
 *
 * @wordpress-plugin
 * Plugin Name:       Search OCL
 * Plugin URI:        www.openconceptlab.org
 * Description:       Redirect to OCL with the search term
 * Version:           1.0.0
 * Author:            Maurya
 * Author URI:        www.github.com/maurya
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Reference : https://semver.org
 */
define( 'SEARCHOCL_VERSION', '1.0.0' );


/**
*echo '<div class="search-container">
*<form action="/searchocl_scripts.php">
*<input type="text" placeholder="Search OCL.." name="search">
*<button type="submit"><i class="fa fa-search"></i></button>
*</form>
*</div>';
 */

// Load Scripts
require_once(plugin_dir_path(__FILE__).'includes/searchocl-scripts.php');

// Load Class
require_once(plugin_dir_path(__FILE__).'includes/searchocl-class.php');


//Register widget_title
function register_searchocl(){
  register_widget('Searchocl_Widget');
}

// Hook in functions
add_action('widgets_init', 'register_searchocl');
