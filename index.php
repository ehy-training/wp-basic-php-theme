<!DOCTYPE html>
<!--Version: 1.2.0-->
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

    <header>
       <div class="container">
        <h1 class="site-title"><?php bloginfo('title'); ?></h1>
        </div>
    </header>

    <main>
       <div class="container">
        <article>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </article>
        </div>
    </main>
    
    <footer>
       <div class="container">
       <p>© 2024 Enno Hyttrek</p>
        </div>
    </footer>


    <?php
            endwhile;
        endif;
    ?>
    <?php wp_footer() ?>
</body>

</html>
