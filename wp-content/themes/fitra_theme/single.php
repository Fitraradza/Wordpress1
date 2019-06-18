<?php get_header();?>

<main>
    <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {the_post();
                    get_template_part('content');
                }
            }
            else{
                echo 'Post Tidak Ada';
            }
            ?>
</main>

<?php get_footer();?>