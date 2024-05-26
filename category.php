<?php get_header();?>

<main class="container page section">
    <?php
       $category=get_queried_object();
       $category_desc=category_description($category->ID);
    ?>
    <h2 class="text-center text-primary">
        Category: <?=$category->name?>
    </h2>
    <?php
        if($category_desc){
            ?>
            <div class="text-center"><?=$category_desc?></div>
            <?php
        }
    ?>

    <?php
      get_template_part('template-parts/blog', 'loop');
    ?>
</main>


<?php get_footer(); ?>