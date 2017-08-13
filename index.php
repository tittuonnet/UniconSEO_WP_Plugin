<?php
/*
Plugin Name: SEO Content Plugin | Unicon.io
Plugin URI: https://unicon.io
Description: Plugin to add custom Description and Title for post or pages.
Author: <a href="https://fb.com/tittuv" target="_blank">Tittu Varghese</a>
Version: 1.0
*/

# Load CSS & JS files for the plugin.
require('plugin_scripts.php');

function unicon_seo_content()
{
  $screens = ['page', 'wporg_cpt'];
  foreach ($screens as $screen) {
    add_meta_box(
      'unicon_seo_1XUNI_CON_71',           // Unique ID
      'Page level SEO - Unicon',  // Box title
      'unicon_seo_html',  // Content callback, must be of type callable
      $screen                   // Post type
    );
  }
}

function unicon_seo_html($post)
{
  ?>
  <div>
    <label class="uniconLabel">Page title</label>
  	<input class="large-text uniconInputbox" type="text" name="post_title" size="30" value="" id="title" spellcheck="true" autocomplete="off">
  </div>
  <?php
}

# Metabox hook
add_action('add_meta_boxes', 'unicon_seo_content');
