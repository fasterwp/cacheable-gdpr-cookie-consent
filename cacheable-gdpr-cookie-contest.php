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

function fwp_gdpr_scripts() {
    wp_enqueue_script('fwp_gdpr_plugin','/wp-content/plugins/cacheable-gdpr-cookie-contest/gdpr-plugin.js','','',true);
    wp_enqueue_script('fwp_gdpr','/wp-content/plugins/cacheable-gdpr-cookie-contest/gdpr.js','','',true);
    wp_enqueue_style('fwp_gdpr_style','/wp-content/plugins/cacheable-gdpr-cookie-contest/gdpr-style.css',false, '1.0', 'all');
}
add_action( 'wp_print_scripts', 'fwp_gdpr_scripts' );