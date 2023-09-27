<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <h1><?php bloginfo('title'); ?></h1>
    </header>

    <nav id="main-nav" class="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </nav>

    <main>

        <?php
        if ( have_posts() ) :
                 while ( have_posts() ) : the_post();
        ?>

        <h2><?php the_title(); ?></h2>
        
        <figure>
        <?php the_post_thumbnail(); ?>
        </figure>

        <?php
                    the_content();
      
                endwhile;
        endif;
        ?>

    </main>

    <footer>
        <p>©2023 Enno Hyttrek</p>
        <p>Das ist die index.php</p>
    </footer>

    <?php wp_footer() ?>
</body>

</html>
