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
		<div class="col-md-12">
			<div id="content" class="site-content" role="main">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //The Loop
					get_template_part( 'content', 'page' );
				endwhile;endif;?>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
?>