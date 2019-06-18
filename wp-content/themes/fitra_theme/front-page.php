<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css" type="text/css">
</head>
<body>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="header-front-page">
            <?php echo get_post_meta($post->ID, 'field1', true); ?>
        </div>
    <?php endwhile; else: ?>
    <?php endif; ?>
    
    <div id="front-page">
        <h1>Selamat Datang</h1>
        <a href="<?php echo home_url('/blog');?>">Menuju Blog</a>
    </div>

    
</body>
</html>
