<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RBCMNDZ
 */

?>


	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-container">
		<div class="site-info">
			<p>Todos los derechos reservados. &copy; <a href="#">Rebeca Menéndez 2019</p></a>
			<p class="f-right">Powered by Neon Garden CS / <a href="http://www.neongardencs.com">www.neongardencs.com</a></p>
		</div><!-- .site-info -->
		</div><!-- footer-container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

			<?php
			wp_nav_menu( array(
				'theme_location' => 'footer_menu',
				'menu_id'        => 'Footer menu',
			) );
			?>

<?php wp_footer(); ?>

<?php wp_register_script( $handle, $src, $deps, $ver, $in_footer ); ?>



</body>
</html>
