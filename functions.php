<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}


function blank_widgets_init() {

    /*--- Home Widget 1 --- */
    register_sidebar( array(
        'name' => ('Home Widget'),
        'id' => 'home-widget',
        'description' => 'First widget for our home', 
        'before_widget' => '<div class="widget-home">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'                        
        ));
    /*--- Home Widget 2 --- */
    register_sidebar( array(
        'name' => ('Home Form Widget'),
        'id' => 'distribution-widget2',
        'description' => 'First widget for our home', 
        'before_widget' => '<div class="widget-home">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'                        
        ));
    /*--- Home Widget 3 --- */
    register_sidebar( array(
        'name' => ('Home Form Widget'),
        'id' => 'home-widget3',
        'description' => 'First widget for our home', 
        'before_widget' => '<div class="widget-home">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'                        
        ));
    /*--- Home Widget 4 --- */
    register_sidebar( array(
        'name' => ('Home Form Widget'),
        'id' => 'home-widget4',
        'description' => 'First widget for our home', 
        'before_widget' => '<div class="widget-home">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'                        
        ));

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

       

      /*--- Testimonial Widget --- */
    register_sidebar( array(
        'name' => ('Testimonial Widget'),
        'id' => 'testimonial-widget',
        'description' => 'First widget for our testimonial', 
        'before_widget' => '<div class="widget-testimonial">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'                        
        ));
		
		
      /*--- Product Widget --- */
    register_sidebar( array(
        'name' => ('Product Widget'),
        'id' => 'product-widget',
        'description' => 'First widget for our products', 
        'before_widget' => '<div class="widget-product">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'                        
        ));

}        
        

add_action('widgets_init', 'blank_widgets_init');

?>