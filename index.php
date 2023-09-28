<?php get_header(); ?>

<header>
    <div class="container">
        <h1><?php bloginfo('title'); ?></h1>
    </div>
</header>

<main>
    <div class="container">

        <?php
        if ( have_posts() ) :
                 while ( have_posts() ) : the_post();
        ?>

        <article>
            <h2><?php the_title(); ?></h2>

            <figure>
                <?php the_post_thumbnail(); ?>
            </figure>

            <?php the_content(); ?>
                    
            </article>
      
        <?php
                endwhile;
        endif;
        ?>

    </div>
</main>

<?php get_footer(); ?>
