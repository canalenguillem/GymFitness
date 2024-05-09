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
    $myury=get_template_directory_uri();
    wp_enqueue_style('normalize', $myury.'/css/normalize.css', array(), '8.0.1');

    //google font
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Raleway:ital,wght@0,100..900;1,100..900&family=Staatliches&display=swap', array(), '1.0');

    //slicknav
    wp_enqueue_style('slicknav', $myury.'/css/slicknav.css', array(),'1.0.10');

    //main style sheet
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize','googlefont'), '1.0');


    //load js files
    wp_enqueue_script('slicknavjs', $myury.'/js/jquery.slicknav.js', array('jquery'), '1.0.10', true);

    wp_enqueue_script('scripts', $myury.'/js/scripts.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'gymfitness_scripts');

//enable feature images and other stuff
function gymfitness_setup(){

    //register new image sizes
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('box', 400, 375, true);
    add_image_size('mediumSize', 700, 400, true);
    add_image_size('blog', 966, 644, true);

    //add feature images
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'gymfitness_setup');

//creates a new Widget Zone
function gymfitness_widgets(){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id'   => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init', 'gymfitness_widgets');