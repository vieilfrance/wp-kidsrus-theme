<?php
/**
 * The Template for displaying homepagee sidebar
 *
 * @package WordPress
 * @subpackage Kidsrus
 * @since Kidsrus 1.0
 * @author: David Beck - @vieilfrance
 */

?>

<?php 
                  $query = new WP_Query(array('tag' => 'side')); 
                  if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                    // Start the Loop.
?>
			<div>
				<?php the_content(); ?>
			</div>
<?php 
                    endwhile;
                    endif;
                    wp_reset_postdata();

?>	
