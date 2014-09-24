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
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //The Loop?>
		
<?php
		if (has_post_thumbnail()) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
		}
?>
	
	<div class="row">
	<div class="hidden-xs col-sm-2"></div>
	<div class="header-title col-xs-12 col-sm-8 <?php if (has_post_thumbnail()) {echo "featured-header";}?>">

	<div class="entry-meta">
			<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.' ) ); ?></span>
		</div>
		<div <?php post_class()?>>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<div class="content">
		
			
			<?php the_content()?>
			<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
			
		
	</div>

	</div>
	</div>
	<div class="hidden-xs col-sm-2"></div>
	</div>

<?php endwhile;endif;?>
	</div>

<?php
get_footer();
?>