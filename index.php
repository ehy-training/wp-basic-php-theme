<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>
<body>
    
    <header>
    <h3><?php bloginfo('title'); ?></h3>
        </header>
    
    <main>

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
        
        </main>
    
    <footer>
    <p>©2023 Enno Hyttrek</p>
    </footer>

        <?php wp_footer() ?>
</body>
</html>
