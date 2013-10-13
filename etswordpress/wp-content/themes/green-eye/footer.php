<?php
/* 	GREEN EYE Theme's Footer
	Copyright: 2013, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since GREEN 1.0
*/
?>


</div><!-- container -->

<div class="content-ver-sep"></div>
<div id="footer">

<div id="footer-content">

<?php
   	get_sidebar( 'footer' );
?>
</div> <!-- footer-content -->
</div> <!-- footer -->
<div class="content-ver-sep"></div>
<div id="creditline"><?php echo '&copy; ' . date("Y"). ': ' . get_bloginfo( 'name' ) . '  '; green_creditline(); ?></div>
<?php wp_footer(); ?>
</body>

</html>