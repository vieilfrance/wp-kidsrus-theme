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
                  $query = new WP_Query(array('category_name' => 'accueil','order' => 'DESC')); 
                  if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                    // Start the Loop.
                  ?>
					<header class="entry-header"><h2 class="entry-title"></h2></header><!-- .entry-header -->
                  <?php
                      //the_title( '<header class="entry-header"><h2 class="entry-title">', '</h2></header><!-- .entry-header -->' );
                      the_content();
                    endwhile;
                    endif;
                    wp_reset_postdata();

?>	
