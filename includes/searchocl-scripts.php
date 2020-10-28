<?php
  // Add scripts
  function so_add_scripts(){
    // Add Main CSS
    wp_enqueue_style('so-main-style', plugins_url(). '/searchocl/css/style.css');
    // Add Main JS
    wp_enqueue_script('so-main-script', plugins_url(). '/searchocl/js/main.js');
  }
  add_action('wp_enqueue_scripts', 'so_add_scripts');
