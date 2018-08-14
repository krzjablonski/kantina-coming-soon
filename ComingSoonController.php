<?php
/*
 * Plugin Name: Kantina.pl coming soon
 * Plugin URI: kantina.pl
 * Description: Coming Soon plugin for kantina.pl
 * Version: 1.0
 * Author: Krzysztof Jabłoński
 * Author URI: https://www.linkedin.com/in/krzysztof-jab%C5%82o%C5%84ski/
 * License: GPL2
*/

add_action('wp_loaded', 'show_coming_soon');

function show_coming_soon(){

  // Get global variable
  global $pagenow;

  // Check if user want's to acces admin area, login page or is admin. If so do not show coming soon page.
  if(!is_admin() && $pagenow !== 'wp-login.php' && !current_user_can('manage_options')){

    if( file_exists(plugin_dir_path(__FILE__).'views/coming-soon.php') ){
    // If view exists show it to user;
      require_once( plugin_dir_path( __FILE__ ) . 'views/coming-soon.php' );
    }else{
    // If view do not exists output 404 error and die;
      header("HTTP/1.0 404 Not Found");
      die();
    }
    die();
  }
}
