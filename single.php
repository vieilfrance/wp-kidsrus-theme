<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Kidsrus
 * @since Kidsrus 1.0
 */
get_header(); ?>

<div class="container">
	<div class="row white">
		<div class="col-xs-12 col-md-8">
			<div id="content" class="site-content" role="main">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
					{
					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					}
				endwhile;
			?>
		</div><!-- #content -->

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