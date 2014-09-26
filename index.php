<?php 
/**
 * Template for displaying the home page.
 *
 * @package WordPress
 * @subpackage Kidsrus
 * @since Kidsrus 1.0
 */
get_header(); ?>
  <div class="container white">
<?php

	if ( is_front_page() && kidsrus_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
  </div>
<?php get_footer(); ?>