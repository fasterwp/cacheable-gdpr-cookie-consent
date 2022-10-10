<?php
/**
 * Plugin Name:       Cacheable GDPR Cookie
 * Plugin URI:        https://github.com/fasterwp/cacheable-gdpr-cookie-contest
 * Description:       This is a functionality plugin to implementat required code for the GDPR cookie plugin
 * Version:           1.0.0
 * Author:            Simplenet Hosting
 * Author URI:        https://www.simplenet.io/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 */

function simplenet_gdpr_scripts() {
    wp_enqueue_script('simplenet_gdpr_plugin','/wp-content/plugins/simplenet-gdpr/gdpr-plugin.js','','',true);
    wp_enqueue_script('simplenet_gdpr','/wp-content/plugins/simplenet-gdpr/gdpr.js','','',true);
    wp_enqueue_style('simplenet_gdpr_style','/wp-content/plugins/simplenet-gdpr/gdpr-style.css',false, '1.0', 'all');
}
add_action( 'wp_print_scripts', 'simplenet_gdpr_scripts' );