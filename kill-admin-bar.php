<?php
/*
Plugin Name: Kill Admin Bar
Plugin URI: https://dsdtech.net/wp-plugins
Description: This tiny plugin removes the admin top bar for non admin users.
Version: 1.0
Author: DSDTech
Author URI: https://dsdtech.net/
License: GPLv2 or later
Text Domain: dsdtech
*/

add_action('after_setup_theme', 'kill_admin_bar');

function kill_admin_bar() {

    if (!current_user_can('administrator') && !is_admin()) {

        show_admin_bar(false);

    }
}