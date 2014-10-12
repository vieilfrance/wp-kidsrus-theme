<?php
/**
 * The Template for displaying footer content
 *
 * @package WordPress
 * @subpackage Kidsrus
 * @since Kidsrus 1.0
 * @author: David Beck - @vieilfrance
 */

?>
<?php 
                  $query = new WP_Query(array('tag' => 'footer')); 
                  if($query->have_posts()) :

					 $query->the_post();
                    // Start the Loop.
?>

			<div>
				<?php the_content(); ?>
			</div>
					<?php
                    endif;
                    wp_reset_postdata();

?>	
