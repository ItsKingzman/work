<?php
  if ( !defined('WP_DEBUG') ) {
      die( 'Direct access forbidden.' );
  }

  add_action( 'wp_enqueue_scripts', function () {
      wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  });

  // Reduce WordPress Heartbeat to 2 minutes (120 seconds)
  add_filter( 'heartbeat_settings', function( $settings ) {
      $settings['interval'] = 120;
      return $settings;
  });