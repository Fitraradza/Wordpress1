<?php get_header();?>

<main>
    <?php 
        if ( have_posts() ) {
            while ( have_posts() ) {the_post();
                get_template_part('content', get_post_format());
            }
        }
        else{
            echo 'Post Tidak Ada';
        }
    ?>
</main>

<aside>
    <?php dynamic_sidebar('sidebar1');?>
    
</aside>

<?php get_footer();?>