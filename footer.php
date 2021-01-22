<footer class="footer">
    <?php
    wp_nav_menu(

        array(
            'theme_location' => 'footer-menu', //グローバルメニューをここに表示すると指定
        )
    );
    ?>
    <p class="footer-copyright">© 2021 Shohei Shimizu</p>
</footer>

<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<?php wp_footer(); ?>
<script>
    new WOW().init();
</script>
</body>

</html>