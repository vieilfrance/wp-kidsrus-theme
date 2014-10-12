<?php
/**
 * The default template for displaying category content.
 *
 * @package WordPress
 * @subpackage Kidsrus
 * @since Kidsrus 1.0
 * @author David Beck - @vieilfrance
 */
	?>
	<?php
if ( is_single() ) :
	?>
		<div class="col-lg-12 col-sm-4">
	<?php 
	the_post_thumbnail(array(100, 100)); 
	the_title( '<h1 >', '</h1>' );
	?>
		</div>
	else :
	<?php 
else :
	?>
		<?php printf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ); ?>
		<div class="col-lg-12">
			<div class="content">
				<div class="content-thumbnail">
					<?php 
					the_post_thumbnail("thumbnail"); 
					?>
				</div>
				<?php 
				the_title( '<h2 >', '</h2>' );
				?>
				<?php
				the_excerpt();
				?>
			</div>
		</div>
		</a>

	<?php 
endif;

?>	
