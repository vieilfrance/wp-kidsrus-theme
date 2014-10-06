<?php 
/**
 * Template for displaying the home page.
 *
 * @package WordPress
 * @subpackage Kidsrus
 * @since Kidsrus 1.0
 */
get_header(); ?>

  <div class="site">
  <div class="container top-space">
  	<div class="row white">
  		<div class="col-xs-12 col-md-3">
  			<?php get_template_part('nav'); ?>
  		</div>
  		<div class="col-xs-12 col-md-6 main">
			<?php
			if ( is_front_page() && kidsrus_has_featured_posts() ) {
				// Include the featured content template.
				get_template_part( 'featured-content' );
			}
			get_template_part( 'content', 'home' );
			?>
		</div>
		<div class="col-xs-12 col-md-3">
			<div class="side ">
				<?php get_template_part( 'sidebar', 'home' ); ?>
			</div>
		</div>
	</div>
  </div>
<?php get_footer(); ?>