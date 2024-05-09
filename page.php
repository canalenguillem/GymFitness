
<?php get_header();?>

<main class="container page section no-sidebar">
    <?php while(have_posts()):the_post(); ?>
        <h1 class="text-center text-primary"><?php the_title();?></h1>

        <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('blog',array(
                'class'=> 'featured-image'
            ));?>

        

        <?php endif;?>

        <div class="text-left">
            <p><?php the_content();?></p>
        </div>
    <?php endwhile;?>
</main>


<?php get_footer();?>
