<?php 
function mytheme_enqueue_styles(){
    wp_enqueue_style("style",get_template_directory_uri().'/assets/css/style.css');
    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=Assistant:wght@200..800&family=Heebo:wght@100..900&family=Inter:wght@100..900&family=Mona+Sans:wght@200..900&family=Montserrat:wght@100..900&family=Noto+Sans:wght@100..900&family=Open+Sans:wght@300..800&family=Roboto:wght@100..900&display=swap');
    wp_enqueue_style("font-awesome",'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css');
    wp_enqueue_style("bootstrap",'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_style("owl-carousel",'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'); 
}

add_action('wp_enqueue_scripts','mytheme_enqueue_styles');

function mytheme_enqueue_script(){
        wp_enqueue_script("actionjs",get_template_directory_uri().'/assets/js/action.js',array(),'1.0.0',true);
        wp_enqueue_script("jquery",'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js',array(),'1.0.0',true);
        wp_enqueue_script("owl-carousel",'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js',array(),'1.0.0',true);

}

add_action('wp_enqueue_scripts','mytheme_enqueue_script');
