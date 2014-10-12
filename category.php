<?php
/**
 * The template for displaying Category pages
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

			<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( '%s', 'kidsrus' ), single_cat_title( '', false ) ); ?></h1>
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
		<div class="col-xs-12 col-md-3">
			<div class="side ">
				<?php get_template_part( 'sidebar', 'home' ); ?>
			</div>
				<?php get_template_part( 'sidebar', 'category' ); ?>

		</div>
	</div>
</div>
<?php
get_footer();
