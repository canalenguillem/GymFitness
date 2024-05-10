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
                <?php 
                    $pod=pods('gymfitness_classes',get_the_id() );
                    $start_time = $pod->field( 'start_time' );
                    $end_time=$pod->field( 'end_time' );
                    $class_days = $pod->field( 'class_days');
                    ?>
                <p><?=$class_days?></p>
                <p><?=$start_time?> to <?=$end_time?></p>
            </div>
        </li>
    <?php
    endwhile;
    ?>
    </ul>
    <?php
}

