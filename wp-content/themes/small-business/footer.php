<?php
/* 	Small Business Theme's Footer
	Copyright: 2012-2014, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Small Business 1.0
*/
?>





<div id="footer">

<div id="footer-content">


<?php
   	get_sidebar( 'footer' );
?>
<div id="creditline"><?php echo of_get_option('copyright', '&copy; ' . date("Y"). ': ' . get_bloginfo( 'name' ) . ', All Rights Reserved'); ?> <span class="credit">| Small Business Theme by: <a href="http://d5creation.com" target="_blank"><img  src="<?php echo get_template_directory_uri(); ?>/images/d5logofooter.png" /> D5 Creation</a> | Powered by: <a href="http://wordpress.org" target="_blank">WordPress</a></span></div>
</div> <!-- footer-content -->
</div> <!-- footer -->
</div><!-- container -->
<?php wp_footer(); ?>
</body>
</html>