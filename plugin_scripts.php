<?php
function unicon_seo_plugin_scripts() {
    wp_register_style( 'unicon_seo_styles',  plugin_dir_url( __FILE__ ) . 'assets/style.css' );
    wp_register_script( 'unicon_seo_script',  plugin_dir_url( __FILE__ ) . 'assets/main.js' );
    wp_enqueue_style( 'unicon_seo_styles' );
    wp_enqueue_script( 'unicon_seo_script' );
}
add_action( 'admin_enqueue_scripts', 'unicon_seo_plugin_scripts' );
?>
