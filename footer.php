<footer class="main-footer">
    <div class="container">
        <nav id="footer-nav" class="footer-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
        </nav>
        <p>©2023 Enno Hyttrek</p>
    </div>
</footer>

<nav id="mobile-nav" class="mobile-nav">
    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
</nav>

<?php wp_footer() ?>
</body>

</html>
