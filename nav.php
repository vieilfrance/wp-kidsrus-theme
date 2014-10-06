  			<nav class="navbar navbar-kidsrus" role="navigation">
			<div class="">
	            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
	            <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.jpg"></img>
	            </a>
          	</div>
		    <div class="">
		      <div class="row white">
		        <div class="col-xs-12">
		          <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
		              <span class="sr-only">Toggle navigation</span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		            </button>
		          </div>
		        </div>

		        <div class="col-xs-12">
		              <?php wp_nav_menu( array(
		                'menu'              => 'primary',
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse',
		                'container_id'      => 'navbar-collapse',
		                'menu_class'        => 'nav navbar-nav',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            ); ?>
		        </div>

			   </div>
		    </div>
		   	</nav>