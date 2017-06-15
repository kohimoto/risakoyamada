<?php
//2017.06.15 kohinata
//preview意外,art配下にアクセスされたら直下にリダイレクト
$access_url = $_SERVER["REQUEST_URI"];
if(!preg_match("/2017/", $access_url)){
  header('location: /');
  exit();
}
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */

//header('location: /index.html');
//exit();

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
