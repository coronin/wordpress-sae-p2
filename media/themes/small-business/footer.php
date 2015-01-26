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

<div id="creditline">
  <?php echo of_get_option('copyright', '&copy; 2013-' . date("Y"). ' &middot;<b>' . get_bloginfo( 'name' ) . '</b>') ?>
  &middot; <a href="http://cicgd.fudan.edu.cn/">Collaborative Innovation Center of Genetics and Development</a>
  &middot; <a href="http://www.fudan.edu.cn/">Fudan University</a>
  &middot; All Rights Reserved.</div>

</div> <!-- footer-content -->
</div> <!-- footer -->
</div><!-- container -->
<?php wp_footer(); ?>
</body>
</html>