<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body>

    <header>
        <h1>404</h1>
    </header>

    <nav id="main-nav" class="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </nav>

    <main>

        <p>Diese Seite existiert leider nicht.</p>

    </main>

    <footer>
        <p>©2023 Enno Hyttrek</p>
        <p>Das ist die 404.php</p>
    </footer>

    <?php wp_footer() ?>
</body>

</html>
