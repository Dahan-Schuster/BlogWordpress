<footer>
    <div class="row">
        <div class="copyright col-sm-7 col-4">
            Copyright
        </div>
        <nav class="footer-menu col-sm-5 col-8 text-right">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'footer_menu'
                )
            ); ?>
        </nav>
    </div>
</footer>
<?php wp_footer(); ?>
</div>
</body>

</html>