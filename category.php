<?php
/**
 * The template for displaying Category pages
 *
 * @package WordPress
 * @subpackage Kidsrus
 * @since Kidsrus 1.0
 */

get_header(); ?>

<div class="container white">
	<div class="row">
		<div class="col-md-12">

			<?php if ( have_posts() ) : ?>

				<h1 class="archive-title"><?php printf( __( '%s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>

			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

			if ( is_single() ) :
				the_title( '<h1 >', '</h1>' );
			else :
				the_title( '<h1 ><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;

					endwhile;

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
		</div>
	</div>
</div>
<?php
get_footer();
