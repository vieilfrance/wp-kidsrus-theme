<?php
/**
 * The Template for displaying all pages
 *
 * @package WordPress
 * @subpackage Kidsrus
 * @since Kidsrus 1.0
 * @author: David Beck - @vieilfrance
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
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //The Loop
					get_template_part( 'content', 'page' );
				endwhile;endif;?>
			</div>
		</div>
		<div class="col-xs-12 col-md-3">
			<div class="side ">
				<?php get_template_part( 'sidebar', 'home' ); ?>

			</div>
		</div>
	</div>
</div>

<?php
get_footer();
?>