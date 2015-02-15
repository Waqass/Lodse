<?php
/*
Author: Waqass Khalid
URL: http://lodse.com
*/

///Excerpt Text
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('...Read More', 'FoundationPress') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

if ( ! isset( $content_width ) ) {
	$content_width = 900;
}
if ( is_singular() ) wp_enqueue_script( "comment-reply" );


function lodse_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'lodse_wp_title', 10, 2 );
