<?php
/**
 * The template for displaying featured content
 *
 * @package WordPress
 * @subpackage Kidsrus
 * @since Kidsrus 1.0
 */
?>
<div class="featured-thumbnail img-center">
<?php
		the_post_thumbnail('full',array('class' => 'img-responsive img-center')); 
		?>
	</div>