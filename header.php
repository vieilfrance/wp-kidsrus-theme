<?php
/**
 * The Header for the Kidsrus theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Kidsrus
 * @since Kidsrus 1.0
 */
?>
<!DOCTYPE html>
<html lang="fr"> <!-- TODO langage -->
  <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title><?php bloginfo('name'); ?> | <?php wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> 
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet">

<?php wp_head(); ?>

  </head>
  <body>
  <div class="site">
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 logo">
          <div class="logo">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/kidzrus-320.jpg"></img>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-lg-2">
        </div>
        <div class="col-xs-12 hidden-lg">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
        </div>
        <div class="col-xs-12 col-lg-8">
          <div class="collapse navbar-collapse " id="navbar-collapse">
            <ul class="nav navbar-nav ">
              <li class="nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/pedagogie/">Pédagogie</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo esc_url( home_url( '/' ) ); ?>/category/services/">Services<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <?php
                  $query = new WP_Query(array('category_name' => 'services','order' => 'DESC')); 
                  if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                    // Start the Loop.
                      the_title( '<li><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></li>' );
                    endwhile;
                    endif;
                    wp_reset_postdata();
                  ?>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo esc_url( home_url( '/' ) ); ?>/category/infos/">Infos pratiques<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <?php
                  $query = new WP_Query(array('category_name' => 'infos','order' => 'DESC')); 
                  if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                    // Start the Loop.
                      the_title( '<li><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></li>' );
                    endwhile;
                    endif;
                    wp_reset_postdata();
                  ?>
                </ul>
              </li>
              <li class="nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/l-equipe/">L'équipe</a></li>
        		  <li class="nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact/">Contact</a></li>
        		  <li class="nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/parents/">Espace parents</a></li>
            </ul>
          </div>
        </div>
	     <div class="xs-hidden col-lg-2"></div>
	   </div>
	 </div>
  </nav>
