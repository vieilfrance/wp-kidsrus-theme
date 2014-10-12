<?php
/**
 * The Template for displaying category sidebar
 *
 * @package WordPress
 * @subpackage Kidsrus
 * @since Kidsrus 1.0
 * @author: David Beck - @vieilfrance
 */

?>
<?php
                  if(have_posts()) : 
?>
<h2>Articles associés</h2>
<?php
                  	while(have_posts()) : the_post();
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
