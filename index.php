<!DOCTYPE html>
<!--Version: 1.1.1-->
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
                the_content(); 
            endwhile;
        endif;
    ?>

</body>

</html>
