<?php get_header();?>

<main>
    <?php 
        if ( have_posts() ) {?>

        <p class="sub_judul">
            <?php
                if (is_category()) {
                    echo 'Halaman Kategori - '; single_cat_title();
                }
                elseif (is_author()) {
                    echo 'Halaman Author - ' . get_the_author();
                }
                else{
                    echo 'Halaman Arsip';
                }
            ?>
        </p>

            <?php
                while ( have_posts() ) {
                    the_post();
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