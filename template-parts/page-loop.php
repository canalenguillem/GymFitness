<?php while (have_posts()):
    the_post(); ?>
    <h1 class="text-center text-primary"><?php the_title(); ?></h1>

    <?php if (has_post_thumbnail()): ?>
        <?php the_post_thumbnail(
            'blog',
            array(
                'class' => 'featured-image'
            )
        ); ?>
    <?php endif;
    //check the current post type
    if (get_post_type() === 'gymfitness_classes'):
        $pod = pods('gymfitness_classes', get_the_id());
        $start_time = $pod->field('start_time');
        $end_time = $pod->field('end_time');
        $class_days = $pod->field('class_days'); ?>
        <p class="content-class"><?= $class_days ?> - <?= $start_time ?> to <?= $end_time ?></p>

        <?php
    endif;
    ?>


    <div class="text-left">
        <p><?php the_content(); ?></p>
    </div>
<?php endwhile; ?>