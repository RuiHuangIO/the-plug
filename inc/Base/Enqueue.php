<?php
/** 
* @package G76Scheduler
*/
namespace Inc\Base;

class Enqueue{

  public function register(){
    add_action('admin_enqueue_scripts', array ($this, 'enqueue'));
  }
  function enqueue(){
    //enqueue assets
    wp_enqueue_style('g76s-main-style', PLUGIN_URL.'assets/css/style.css');
    wp_enqueue_script('g76s-main-script', PLUGIN_URL.'assets/script/main.js');
  }
}