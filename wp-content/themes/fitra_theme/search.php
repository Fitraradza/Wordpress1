<?php get_header();?>

<main>
    <?php 
        if ( have_posts() ) {?>

            <p class="sub_judul">
                Halaman Pencari
            </p>

            <?php
                while ( have_posts() ) {
                    the_post();
                    if ($post->post_type == 'page') continue;
                    get_template_part('content');
                }
            ?>

    <?php }
        else{
            echo 'Post Tidak Ada';
        }
    ?>
</main>

<?php get_footer();?>