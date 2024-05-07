<?php

//creates the menus
function gymfitness_menus(){
    //WordPress function
    register_nav_menus(array(
        'main-menu' => 'Main Menu'
    ));
}


//hook
add_action('init', 'gymfitness_menus');

//add stylesheets and js
function gymfitness_scripts(){
    wp_enqueue_style('normalize', get_template_directory().'css/normalize.css', array(), '8.0.1');

    //google font
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Raleway:ital,wght@0,100..900;1,100..900&family=Staatliches&display=swap', array(), '1.0');

    //main style sheet
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize','googlefont'), '1.0');

}
add_action('wp_enqueue_scripts', 'gymfitness_scripts');