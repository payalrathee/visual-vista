<?php

/*
* Plugin Name: Visual Vista
* Description: Displays filtered images with given prefix from media gallery in different templates(grid, slider)
* Version: 0.0.1
* Author: Payal Rathee
*/

// Exit if accessed directly
if ( ! defined('ABSPATH') ) {
	exit;
}

add_action('init', 'vsvt_init_plugin');
function vsvt_init_plugin() {

    // Define global varaibles
    global $vsvt_plugin_path;
    $vsvt_plugin_path = plugin_dir_path(__FILE__);
    global $vsvt_plugin_url;
    $vsvt_plugin_url= plugin_dir_url(__FILE__);

    // Enqueue style and scripts
    add_action('wp_enqueue_scripts', 'vsvt_enqueue_style_script');

    // Include other files
    include($vsvt_plugin_path . 'inc/shortcode.php');
    include($vsvt_plugin_path . 'inc/class-media-gallery.php');

}

function vsvt_enqueue_style_script() {
    global $vsvt_plugin_url;

    // Register styles
    wp_register_style(
        'vsvt-style',
        $vsvt_plugin_url . 'css/style.css'
    );

    wp_register_style(
        'vsvt-grid-style',
        $vsvt_plugin_url . 'css/grid.css'
    );

    wp_register_style(
        'vsvt-slider-style',
        $vsvt_plugin_url . 'css/slider.css'
    );

    // Register scripts
    wp_register_script(
        'vsvt-slider-script',
        $vsvt_plugin_url . 'scripts/slider.js'
    );
}