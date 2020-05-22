<?php
add_action('wp_enqueue_scripts', 'slider_add_css');
function slider_add_css()
{
  wp_register_style('maincss',CSS_URL.'/main.css' );
  wp_enqueue_style('maincss');
}

add_action('wp_enqueue_scripts', 'slider_add_js');
function slider_add_js()
{
  wp_register_script('main', JS_URL.'/main.js',array('jquery'),1.0,true );
  wp_enqueue_script('main');
}
