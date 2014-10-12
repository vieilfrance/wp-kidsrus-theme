<?php
/**
 * The Header for the Kidsrus theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Kidsrus
 * @since Kidsrus 1.0
 * @author David Beck - @vieilfrance
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