<?php
/**
 * The template for displaying featured content
 *
 * @package WordPress
 * @subpackage Kidsrus
 * @since Kidsrus 1.0
 */
?>
<div class=" img-center">
<?php
		$featured_posts = kidsrus_get_featured_posts();
		foreach ( (array) $featured_posts as $order => $post ) :
			setup_postdata( $post );

			 // Include the featured content template.
		the_post_thumbnail('full',array('class' => 'img-responsive img-center')); 
		//	get_template_part( 'content', 'featured-post' );
		endforeach;

		wp_reset_postdata();


		?>
	</div>