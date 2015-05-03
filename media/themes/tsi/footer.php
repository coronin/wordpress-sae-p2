<?php
/*
  Theme's Footer
 */
?>

    <div id="footer">
    <div id="footer-content">
    <?php get_sidebar( 'footer' ); ?>

    <div id="creditline">
        <?php echo of_get_option('copyright', '&copy; 2013-' . date("Y"). ' TSI') ?>
        &middot; Collaborative Innovation Center of Genetics and Development
        <!-- Fudan University -->
        &middot; All Rights Reserved.</div>

    </div> <!-- #footer-content -->
    </div> <!-- #footer -->

</div><!-- #container -->
<?php wp_footer(); ?>
</body>
</html>