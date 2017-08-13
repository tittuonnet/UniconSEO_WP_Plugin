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
<main class="uniconMain">
  <input id="PageSEO" class="uniconHidden uniconTab" type="radio" name="tabs" checked>
  <label for="PageSEO" class="uniconTab">Page SEO</label>

  <input id="FacebookOG" type="radio" class="uniconHidden uniconTab" name="tabs">
  <label for="FacebookOG" class="uniconTab">Facebook Open Graph</label>

  <input id="TwitterCard" type="radio" class="uniconHidden uniconTab" name="tabs">
  <label for="TwitterCard" class="uniconTab">Twitter Card</label>

  <section id="PageSEOContent" class="unicon">
    <div class="row uniconRow">
      <label class="uniconLabel">Focus Keyword</label>
    	<input class="large-text uniconInputbox" type="text" name="page_keyword" placeholder="Focus Keyword for the page" id="page_keyword" spellcheck="true" autocomplete="off">
    </div>
    <div class="row uniconRow">
      <label class="uniconLabel">Page Title</label>
    	<input class="large-text uniconInputbox" type="text" name="page_title" placeholder="Page Title" id="page_title" spellcheck="true" autocomplete="off">
    </div>
    <div class="row uniconRow">
      <label class="uniconLabel">Page Description</label>
      <textarea class="large-text uniconTextArea" placeholder="Page Description"></textarea>
    </div>
  </section>

  <section id="FacebookOGContent" class="unicon">
    <p>
      Bacon ipsum dolor sit amet beef venison beef ribs kielbasa. Sausage pig leberkas, t-bone sirloin shoulder bresaola. Frankfurter rump porchetta ham. Pork belly prosciutto brisket meatloaf short ribs.
    </p>
    <p>
      Brisket meatball turkey short loin boudin leberkas meatloaf chuck andouille pork loin pastrami spare ribs pancetta rump. Frankfurter corned beef beef tenderloin short loin meatloaf swine ground round venison.
    </p>
  </section>

  <section id="TwitterCardContent" class="unicon">
    <p>
      Bacon ipsum dolor sit amet beef venison beef ribs kielbasa. Sausage pig leberkas, t-bone sirloin shoulder bresaola. Frankfurter rump porchetta ham. Pork belly prosciutto brisket meatloaf short ribs.
    </p>
    <p>
      Brisket meatball turkey short loin boudin leberkas meatloaf chuck andouille pork loin pastrami spare ribs pancetta rump. Frankfurter corned beef beef tenderloin short loin meatloaf swine ground round venison.
    </p>
  </section>

</main>
  <?php
}

# Metabox hook
add_action('add_meta_boxes', 'unicon_seo_content');
