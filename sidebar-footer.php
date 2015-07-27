<?php
/**
 * The Footer Sidebar
 *
 * @package WordPress
 * @subpackage Capoeira Science Theme
 * @since Capoeira Science Theme 0.0
 */

if ( ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
?>

<div id="supplementary">
	<div id="footer-sidebar" class="footer-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div><!-- #footer-sidebar -->
</div><!-- #supplementary -->
