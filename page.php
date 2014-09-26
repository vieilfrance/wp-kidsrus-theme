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
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //The Loop?>
		
	<div class="row">

	<div class="header-title col-md-12">
	<div <?php post_class()?>>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

<?php
		if (has_post_thumbnail()) {
		// Include the featured content template.
		get_template_part( 'content', 'featured-post' );
		}
?>

		<div class="content">
	
			
			<?php the_content()?>
			<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
			
		
	</div>

	</div>
	</div>
	</div>

<?php endwhile;endif;?>
	</div>

<?php
get_footer();
?>