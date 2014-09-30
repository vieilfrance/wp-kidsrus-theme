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
<html lang="fr" class="kidsrus"> <!-- TODO langage -->
  <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title><?php bloginfo('name'); ?> | <?php wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> 
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,700' rel='stylesheet' type='text/css'>


<?php wp_head(); ?>

  </head>
  <body>
  <div class="site">
  <nav class="navbar navbar-kidsrus" role="navigation">
    <div class="container no-padding">
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
        <div class="col-xs-12 col-lg-8 col-lg-offset-2">
          <div class="collapse navbar-collapse " id="navbar-collapse">
            <ul class="nav navbar-nav ">
              <li class="nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/pedagogie/">Pédagogie</a></li>
              <li class="nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/services/">Services</a></li>
              <li class="nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/infos/">Infos pratiques</a></li>
              <li class="nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/l-equipe/">L'équipe</a></li>
        		  <li class="nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact/">Contact</a></li>
        		  <li class="nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/parents/">Espace parents</a></li>
            </ul>
          </div>
        </div>
	 </div>
  </nav>
