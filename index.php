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
  <h4>Snippet Preview</h4>
  <div class="uniconSnippetPreview">
    <p class="uniconPreviewTitle"><a href="#">Home - Parcx.io</a></p>
    <p class="uniconPreviewLink">https://parcx.io</p>
    <p class="uniconPreviewDescription">Lorem ipsum dollar get nu lorem started in ipsum dollar unbiased lorem ipsum generated in 1987 founded by Lorem group of companies from ipsum town.</p>
  </div>
</main>
<main class="uniconMain">
  <h4>Snippet Editor</h4>
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
      <textarea class="large-text uniconTextArea" name="page_description" placeholder="Page Description"></textarea>
    </div>
  </section>

  <section id="FacebookOGContent" class="unicon">
    <div class="row uniconRow">
      <label class="uniconLabel">Facebook OG Title</label>
    	<input class="large-text uniconInputbox" type="text" name="facebook_og_title" placeholder="Facebook Opengraph Title" id="facebook_og_title" spellcheck="true" autocomplete="off">
    </div>
    <div class="row uniconRow">
      <label class="uniconLabel">Facebook OG Image</label>
      <div class="row">
        <div class="uniconW80">
          <input id="uniconSEO-Facebook-OG-IMG" class="large-text uniconInputbox" type="text" name="facebook_og_image" placeholder="Facebook Opengraph Image URL" id="facebook_og_image" spellcheck="true" autocomplete="off">
        </div>
        <div class="uniconW20">
          <input id="uniconSEO-image_button" class="uniconUploadButton button" type="button" value="Upload Image">
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="row uniconRow">
      <label class="uniconLabel">Facebook OG Description</label>
      <textarea class="large-text uniconTextArea" name="facebook_og_description" placeholder="Facebook OG Description"></textarea>
    </div>
  </section>

  <section id="TwitterCardContent" class="unicon">
    <div class="row uniconRow">
      <label class="uniconLabel">Twitter card Title</label>
    	<input class="large-text uniconInputbox" type="text" name="twitter_card_title" placeholder="Twitter card Title" id="facebook_og_title" spellcheck="true" autocomplete="off">
    </div>
    <div class="row uniconRow">
      <label class="uniconLabel">Twitter card Image</label>
    	<input class="large-text uniconInputbox" type="text" name="twitter_card_image" placeholder="Twitter card Image URL" id="facebook_og_image" spellcheck="true" autocomplete="off">
    </div>
    <div class="row uniconRow">
      <label class="uniconLabel">Twitter card Description</label>
      <textarea class="large-text uniconTextArea" name="twitter_card_description" placeholder="Twitter card Description"></textarea>
    </div>
  </section>

</main>
  <?php
}

# Metabox hook
add_action('add_meta_boxes', 'unicon_seo_content');
