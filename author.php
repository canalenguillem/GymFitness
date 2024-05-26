<?php get_header();?>

<main class="container page section">
    <?php
     $author=get_queried_object();
     $author_id=$author->data->ID;
     $display_name=$author->data->display_name;
     $author_meta=get_the_author_meta('description', $author_id);
     echo "<pre>";
     //var_dump($author);
     echo "</pre>"
    ?>
    <h2 class="text-center primary-text" >Author: <?=$display_name?></h2>
    <p class="text-center">
        <?=$author_meta?>
    </p>
    <?php
      get_template_part('template-parts/blog', 'loop');
    ?>
</main>


<?php get_footer(); ?>