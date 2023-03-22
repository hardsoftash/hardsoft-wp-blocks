<?php 
/*
 * Plugin Name:       Hardsoft Blocks
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Blocks and Block Patterns for the Gutenberg editor
 * Version:           0.1
 */

//LOAD CUSTOM BLOCKS



//LOAD PATTERNS

 include( plugin_dir_path( __FILE__ ) . 'patterns/block-patterns.php');




//LOAD PLUGIN STYLES

function wpse_load_plugin_css() {
    $plugin_url = plugin_dir_url( __FILE__ );

    wp_enqueue_style( 'style1', $plugin_url . 'css/hs-blocks.css' );
}

add_action( 'wp_enqueue_scripts', 'wpse_load_plugin_css' );