<?php

require __DIR__ . '/inc/BulmaNavWalker.php';

add_action('init', 'register_menus');
function register_menus() {
  register_nav_menu('primary', 'Primary');
}

add_action('init', 'theme_setup');
function theme_setup() {
  add_theme_support('post-thumbnails');
}

add_action('wp_enqueue_scripts', 'my_scripts');
function my_scripts() {
  wp_enqueue_style('bulma', 'https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css', array());
  wp_enqueue_style('app-css', get_stylesheet_directory_uri() . '/style.css', array('bulma'));
  // If we add JS to our template, activate this line and fill in appropiate link.
  // wp_enqueue_scripts('app-js', get_stylesheet_directory_uri() . '/js/app.js', array(), null, true);
}
