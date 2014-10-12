<?php
/**
 * The Template for displaying sidebar
 *
 * @package WordPress
 * @subpackage Kidsrus
 * @since Kidsrus 1.0
 * @author: David Beck - @vieilfrance
 */
	if ( is_active_sidebar( 'sidebar-1' ) ) : 
?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
<?php 
	dynamic_sidebar( 'sidebar-1' ); 
?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>