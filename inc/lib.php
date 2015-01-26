<?php
/**
 * Various library functions that aren't specific to any theme, but general utility usage.
 *
 * @package rdmgumby
 */

/**
 * Function to add a separator to the admin menu
 *
 * @param $position (int) menu position for the separator
 */
function create_admin_menu_separator( $position )
{
	global $menu;

	$menu[$position] = array(
			0 => '',
			1 => 'read',
			2 => 'separator' . $position,
			3 => '',
			4 => 'wp-menu-separator'
		);
}

/**
 * Automatically add alt tags to images in content
 *
 * @param $content (string) the_content
 */
function rdmgumby_add_alt_tags( $content )
{
	global $post;

    preg_match_all( '/<img (.*?)\/>/', $content, $images );

    if( !is_null( $images ) ) {
        foreach( $images[1] as $index => $value ) {
            if( !preg_match( '/alt=/', $value ) ) {
                $new_img = str_replace( '<img', '<img alt="'.$post->post_title.'"', $images[0][$index] );
                $content = str_replace( $images[0][$index], $new_img, $content );
            }
        }
    }

    return $content;
}

/**
 * Trims the excerpt almost exactly like the built in wp_trim_excerpt,
 * except we are allowing the <p> html tags
 *
 * @param $excerpt (string) the text to be trimmed
 */
function rdmgumby_trim_excerpt( $excerpt )
{
	global $post;

	if ( '' == $excerpt ) {
		$excerpt = get_the_content( '' );
		$excerpt = apply_filters( 'the_content', $excerpt );

		$excerpt = str_replace( '\]\]\>', ']]&gt;', $excerpt );
		$excerpt = strip_tags( $excerpt, '<p>' );
		$excerpt_length = 60;

		$words = explode( ' ', $excerpt, $excerpt_length + 1 );
		if ( count( $words ) > $excerpt_length ) {
			  array_pop( $words );
			  array_push( $words, '[...]' );
			  $excerpt = implode( ' ', $words );
		}
	}

	return $excerpt;
}