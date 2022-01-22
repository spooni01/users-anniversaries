<?php
/**
 * Plugin Name: Users anniversaries
 * Plugin URI: https://github.com/spooni01/users-anniversaries
 * Description: Save the anniversaries of Wordpress users.
 * Version: 2.0
 * Author: Adam Ližičiar
 * Author URI: http://www.adam.liziciar.sk
 */

// Functions
include(plugin_dir_path( __FILE__ )."functions.php");

// Taxonomy
include(plugin_dir_path( __FILE__ )."custom_types/custom_taxonomy_users_anniversaries.php");

// User profile
include(plugin_dir_path( __FILE__ )."user_profile.php");

// Admin menu
include(plugin_dir_path( __FILE__ )."admin_menu.php");

?>