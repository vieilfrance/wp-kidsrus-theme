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

				<div class="avatar-block">
				<div class="avatar-wrap">
					<img class="avatar " src="<?php echo get_template_directory_uri(); ?>/assets/avatar.jpg"></img>
				</div>

<?php 
                  $query = new WP_Query(array('pagename' => 'ego')); 
                  if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                    // Start the Loop.
?>

				<div class="avatar-title"><h3><?php the_title(); ?></h3>
				</div>

			</div>
				<?php the_content(); ?>
			</div>
<?php 
                    endwhile;
                    endif;
                    wp_reset_postdata();

?>	
