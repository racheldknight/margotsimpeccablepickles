<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}


function blank_widgets_init() {

    /*--- Distribution Form Widget --- */
    register_sidebar( array(
        'name' => ('Distribution Form Widget'),
        'id' => 'distribution-widget',
        'description' => 'First widget for our distribution', 
        'before_widget' => '<div class="widget-distribution">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'                        
        ));

}        
        

add_action('widgets_init', 'blank_widgets_init');

?>