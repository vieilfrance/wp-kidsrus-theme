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

$category = get_the_category();
$cat_name = $category[0]->cat_name;

?>
<h2>Articles associés</h2>
<?php

				$query = new WP_Query(array('category_name' => $cat_name,'order' => 'DESC')); 
                if($query->have_posts()) : while($query->have_posts()) : $query->the_post();

                    // Start the Loop.
?>
			<div>
				<?php
				the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				?>
			</div>
<?php 
                    endwhile;
                    endif;
                    wp_reset_postdata();

?>	
