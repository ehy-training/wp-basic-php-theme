<!DOCTYPE html>
<!--Version: 1.1.0-->
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body>

    <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
    ?>


    <?php the_content(); ?>

    <?php
                endwhile;
            endif;
    ?>

</body>

</html>
