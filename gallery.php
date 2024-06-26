<?php
/*
* Template Name: Gallery
1*/

get_header();
?>

<main class="container page section">
<?php while (have_posts()):
    the_post(); ?>
    <h1 class="text-center text-primary"><?php the_title(); ?></h1>
    <?php
        $gallery=get_post_gallery(get_the_ID(), false);
        $gallery_image_ids=explode(",",$gallery['ids']);
        
    
    ?>
    <ul class="gallery-images">
        <?php
            $i=1;
            foreach($gallery_image_ids as $id):
                $size=($i===3 || $i=== 6) ?'portrait':'square';
                $imageThumb=wp_get_attachment_image_src($id, $size);
                $image=wp_get_attachment_image_src($id, 'large');
                ?>
                <li>
                    <a href="<?=$image[0]?>" data-lightbox="gallery">
                        <img src="<?=$imageThumb[0]?>" alt="" srcset="">
                    </a>
                </li>
            <?php
            $i++;endforeach;
        ?>
    </ul>
<?php endwhile; ?>
</main>


<?php get_footer(); ?>