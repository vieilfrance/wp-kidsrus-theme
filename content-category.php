<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Kidsrus
 * @since Kidsrus 1.0
 */
	?>
	<?php
if ( is_single() ) :
	?>
		<div class="col-xs-12 col-sm-4">
	<?php 
	the_post_thumbnail(array(100, 100)); 
	the_title( '<h1 >', '</h1>' );
	?>
		</div>
	else :
	<?php 
else :
	?>
		<?php printf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ); ?>
		<div class="col-xs-12 col-sm-4">
	<?php 
	the_post_thumbnail("thumbnail"); 
	the_title( '<h1 >', '</h1>' );
	?>
		</div>
		</a>

	<?php 
endif;

?>	
