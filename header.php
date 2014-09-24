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
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" rel="stylesheet">

<?php wp_head(); ?>

  </head>
  <body>

  <nav class=" navbar navbar-inverse" role="navigation">
    <div class="container">
	<div class="row">
	<div class="col-xs-12 col-sm-3">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('description'); ?></a>
      </div>
	</div>
	<div class="col-xs-12 col-sm-8">
      <div class="collapse navbar-collapse " id="navbar-collapse">
        <ul class=" nav navbar-nav ">
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/pedagogie/">Pédagogie</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/services/">Services</a></li>
		  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/infos/">Infos pratiques</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/l-equipe/">L'équipe</a></li>
		  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact/">Contact</a></li>
		  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/parents/">Espace parents</a></li>
        </ul>
      </div>
	</div>
	<div class="xs-hidden col-sm-1"></div>
	</div>
	</div>
  </nav>
