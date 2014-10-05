<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Kidsrus
 * @since Kidsrus 1.0
 */

get_header(); ?>

<div class="container white">
	<div class="row">
		<div class="col-xs-12 col-md-8">
			<div id="content" class="site-content" role="main">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //The Loop
					get_template_part( 'content', 'page' );
				endwhile;endif;?>
			</div>
		</div>
		<div class="col-xs-12 col-md-4">
			<div class="side ">
				<?php get_template_part( 'sidebar', 'home' ); ?>

			</div>
		</div>
	</div>
</div>

<?php
get_footer();
?>