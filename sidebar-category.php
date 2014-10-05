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
<h2>Articles associés</h2>
<?php
                  if(have_posts()) : while(have_posts()) : the_post();
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


?>	
