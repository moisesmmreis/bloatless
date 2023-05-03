<?php
/*
Plugin Name: Bloatless
Plugin URI: https://moisesmmreis.vercel.app
Description: Remove all the bloat code from the standart installation
Version: 0.1.0
Author: Moisés Moreira Reis
Author URI: https://moisesmmreis.vercel.app
Text Domain: bloatless
*/

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );