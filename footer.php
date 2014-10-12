<?php
/**
 * The template for displaying the footer of each page.
 *
 * Contains footer content and the closing of
 * various div elements.
 *
 * @package WordPress
 * @subpackage kidsrus
 * @since Kidsrus 1.0
 * @author David Beck - @vieilfrance
 */
?>
	<footer class="">
		<div class="container invert-footer">
			<div class="row footer-center">
				<div class="col-xs-12 col-sm-5 footer-block">
						<?php get_template_part( 'footer', 'content' ); ?>
				</div>
				<div class="col-xs-12 col-sm-5 footer-block">
					<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>/terms-conditions/">Terms &amp; Conditions</a></div>
					<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>/credits/">Crédits</a></div>
					<div><a href="mail-to:contact@kidzrus.be">contact@kidzrus.be</a></div>
				</div>
				<div class="col-xs-12 col-sm-2 footer-block">
				  <a href="http://www.facebook.com/#" title="facebook"><i class="fa fa-facebook-square fa-2x"></i></a>&nbsp;
				  <a href="<?php bloginfo('rss2_url'); ?>" title="RSS"><i class="fa fa-rss fa-2x"></i></a>
	   		    </div>
			</div>
		</div>
	</footer>

	<footer>
		<div class="container grey-footer">
			<div class="row footer-center">
	   		    <div class="col-xs-12 col-sm-4">
	   		    </div>
	   		    <div class="col-xs-12 col-sm-4">
				<div>Copyright &copy;2014 Dupe Akinniyi</div>
				<div>Site by <a href="#">David BECK</a></div>
	   		    </div>
	   		    <div class="col-xs-12 col-sm-4">
	   		    </div>
			</div>
		</div>
	</footer>
</div>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</body>
</html>