<?php 
function load_stylesheets(){

    wp_register_style('fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',array(),1,'all');
    wp_enqueue_style('fontawesome');

    wp_register_style('owlcarousel','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css',array(),1,'all');
    wp_enqueue_style('owlcarousel');

    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',array(),1,'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style',get_template_directory_uri().'/assets/css/style.css',array(),1,'all');
    wp_enqueue_style('style');  
}

add_action('wp_enqueue_scripts','load_stylesheets');

function addjs(){

    wp_register_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',array('jquery'),1,1,1);
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',array('jquery'),1,1,1);
    wp_enqueue_script('bootstrap');

    wp_register_script('OwlCarousel2','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js',array('jquery'),1,1,1);
    wp_enqueue_script('OwlCarousel2');

    wp_register_script('actionjs',get_template_directory_uri().'/assets/js/action.js',array('jquery'),1,1,1);
    wp_enqueue_script('actionjs');

}


add_action('wp_enqueue_scripts','addjs');



