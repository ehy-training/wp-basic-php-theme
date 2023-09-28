<?php get_header(); ?>

<header>
    <div class="container">
        <h3><?php bloginfo('title'); ?></h3>
    </div>
</header>

<main>
    <div class="container">

        <?php
        if ( have_posts() ) :
                 while ( have_posts() ) : the_post();
        ?>

        <h1><?php the_title(); ?></h1>

        <?php
                    the_content();
      
                endwhile;
        endif;
        ?>

    </div>
    <!--.container-->
</main>

<?php get_footer(); ?>
