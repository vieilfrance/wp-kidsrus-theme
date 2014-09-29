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


if ( is_single() ) :
	?>
	<div class="row">
		<div class="col-md-12">
	<?php 
	the_post_thumbnail(array(100, 100)); 
	the_title( '<h1 >', '</h1>' );
	?>
		</div>
	</div>
	else :
	<?php 
else :
	?>
	<div class="row">
		<?php printf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ); ?>
		<div class="col-md-12">
	<?php 
	the_post_thumbnail("thumbnail"); 
	the_title( '<h1 >', '</h1>' );
	?>
		</div>
		</a>
	</div>
	<?php 
endif;

?>