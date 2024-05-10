<?php
function gymfitness_classes_list(){?>
    <ul class="classes-list">
    <?php
    
    $args=array(
        'post_type' => 'gymfitness_classes',
    );
    $classes= new WP_Query( $args );?>

    <?php
    while($classes->have_posts()) : $classes->the_post();?>
        <li class="gym-class card gradient">
            <?php the_post_thumbnail('mediumSize');?>
            <div class="card-content">
                <a href="<?php the_permalink()?>">
                    <h3><?php the_title() ?></h3>
                </a>
                <p>Monday<?php the_field('class_days'); ?></p>
                <?php 
                    $start_time=get_field('start-time');
                    $end_time=get_field('end_time');
                ?>
                <p>8<?=$start_time?> to 9<?=$end_time?></p>
            </div>
        </li>
    <?php
    endwhile;
    ?>
    </ul>
    <?php
}

