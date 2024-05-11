<?php get_header();?>

<main class="container page section">
    <ul class="blog-entries">
        <?php while (have_posts()) : the_post(); ?>
        <li class="card gradient">
            <?=the_post_thumbnail("mediumSize")?>
            <div class="card-content">
                <a href="<?=the_permalink()?>">
                    <h3 class="text-primary"><?=the_title();?></h3>
                </a>
                <p class="meta"><span>By:
                    <a href="<?=get_author_posts_url(get_the_author_meta('ID'))?>">
                        <?=get_the_author_meta('display_name')?>
                    </a>
                </span></p>
                <p class="date-published meta">
                    <span>Date:</span>
                    <?=the_time(get_option('date_format'))?>
                </p>
            </div>
        </li>
        <?php endwhile; ?>
    </ul>
</main>


<?php get_footer(); ?>