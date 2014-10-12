<?php
/**
 * The Template for displaying 404 page
 *
 * @package WordPress
 * @subpackage Kidsrus
 * @since Kidsrus 1.0
 * @author David Beck - @vieilfrance
 */

get_header(); ?>

<div class="site">
	<div class="container top-space">
		<div class="row white">
  			<div class="col-xs-12 col-md-3">
  				<?php get_template_part('nav'); ?>
  			</div>
			<div class="col-xs-12 col-md-6 main">
				<div id="content" class="site-content" role="main">
					<header class="entry-header"><h2 class="entry-title">404</h2></header>
				It's look like there is a problem ...
				</div><!-- #content -->
			</div>
			<div class="col-xs-12 col-md-3">
					<?php get_template_part( 'sidebar', 'home' ); ?>
			</div>
		</div>
	</div>

<?php
get_footer();
?>