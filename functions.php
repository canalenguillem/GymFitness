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

}
add_action('wp_enqueue_scripts', 'gymfitness_scripts');