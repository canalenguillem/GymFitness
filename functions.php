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