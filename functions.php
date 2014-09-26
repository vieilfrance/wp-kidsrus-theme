<?php

if ( ! function_exists( 'kidsrus_setup' ) ) :

	function kidsrus_setup() {

	    if ( function_exists( 'add_theme_support' ) ) 
	      add_theme_support( 'post-thumbnails' );

		// Add RSS feed links to <head> for posts and comments.
		add_theme_support( 'automatic-feed-links' );

		// Add support for featured content.
		add_theme_support( 'featured-content', array(
			'featured_content_filter' => 'kidsrus_get_featured_posts',
			'max_posts' => 6,
		) );

		add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
		function baw_hack_wp_title_for_home( $title )
		{
		  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
		    return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
		  }
		  return $title;
		}
	}
endif;

add_action( 'after_setup_theme', 'kidsrus_setup' );


function kidsrus_get_featured_posts() {
	/**
	 * Filter the featured posts to return in Twenty Fourteen.
	 *
	 * @since Twenty Fourteen 1.0
	 *
	 * @param array|bool $posts Array of featured posts, otherwise false.
	 */
	return apply_filters( 'kidsrus_get_featured_posts', array() );
}

/**
 * A helper conditional function that returns a boolean value.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return bool Whether there are featured posts.
 */
function kidsrus_has_featured_posts() {
	return ! is_paged() && (bool) kidsrus_get_featured_posts();
}

if ( ! class_exists( 'Featured_Content' ) && 'plugins.php' !== $GLOBALS['pagenow'] ) {
	require get_template_directory() . '/inc/featured-content.php';
}
?>