<?php
/**
 * envirotek functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package envirotek
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function envirotek_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'envirotek', get_template_directory() . '/languages' );

	// Add theme supports
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}
add_action( 'after_setup_theme', 'envirotek_setup' );

/**
* Remove emoji support
*/
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/**
 * Enqueue scripts and styles.
 */
function envirotek_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(),  '4.3.1' );
	wp_enqueue_style( 'font-poiret-one', 'https://fonts.googleapis.com/css?family=Poiret+One&display=swap' );
	wp_enqueue_style( 'envirotek-style', get_template_directory_uri() . '/css/envirotek.css', array( 'bootstrap', 'font-poiret-one' ),  wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'envirotek_scripts' );

/**
 * For testing purposes: print an array cleanly
 */
function print_array( $array ) { ?>
	<pre><?php print_r( $array ); ?></pre>
<?php }
