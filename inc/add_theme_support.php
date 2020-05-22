<?php
add_action('after_setup_theme','slider_add_theme_support');
function slider_add_theme_support(){
  add_theme_support( 'post-thumbnails' );
  // add_image_size( 'slider-thumb', 1600, 1200, true );
}
