<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    <title>Document</title>
</head>
<body>
    <header class="site-header">
        <div class="container header-grid">
            <div class="navigation-bar">
                <div class="logo">
                    <a href="<?php echo home_url();?>">
                        <img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="logo ">
                    </a>
                </div><!--logo-->
                <?php
                    $args = array(
                        'theme-location'=>'main-menu',
                        'container' => 'nav',
                        'container_class' => 'main-menu'
                    );
                    wp_nav_menu($args);
                ?>
                
            </div><!--navigation bar-->
        </div><!--container-->
    </header>
    
