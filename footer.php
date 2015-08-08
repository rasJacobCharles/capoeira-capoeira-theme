<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Capoeira Science Theme
 * @since Capoeira Science Theme 0.01
 */
?>
		</div><!-- #main -->

</selection>
		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'capoeiratheme_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'capoeiratheme' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'capoeiratheme' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>