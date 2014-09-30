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
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( '%s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>

				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .archive-header -->
			<div class="row">
			<?php
					// Start the Loop.

					while ( have_posts() ) : the_post();

					get_template_part( 'content', 'category' );

					endwhile;
				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
