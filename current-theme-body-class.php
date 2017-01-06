<?php
/*
 * Plugin Name: Current Theme Body Class
 * Plugin URI: https://sparanoid.com/work/current-theme-body-class/
 * Description: Add you current theme slug to your HTML body class for easy customization
 * Author: Tunghsiao Liu
 * Version: 1.0.0
 * Author URI: https://sparanoid.com
 * License: GPL2+
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function current_theme_body_class( $classes ) {
  $classes[] = 'current-theme--' . wp_get_theme()->get( 'TextDomain' );
  return $classes;
}
add_filter( 'body_class', 'current_theme_body_class' );
