<?php
/**
* Start cleanup functions
* ----------------------------------------------------------------------------
*/
if ( ! function_exists( 'gcc_starter_kit_start_cleanup' ) ) :
function gcc_starter_kit_start_cleanup() {
// launching operation cleanup
add_action( 'init', 'gcc_starter_kit_cleanup_head' );
}
add_action( 'after_setup_theme','gcc_starter_kit_start_cleanup' );
endif;
/**
* Clean up head
* ----------------------------------------------------------------------------
*/
if ( ! function_exists( 'gcc_starter_kit_cleanup_head' ) ) :
function gcc_starter_kit_cleanup_head() {
// remove WP 4.9+ dns-prefetch nonsense
remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
add_filter( 'login_errors',create_function( '$a', 'return null;' ) );
remove_action ('wp_head', 'oa_social_login_add_javascripts');
}
endif;
//remove plugin scripts
if ( ! function_exists( 'gcc_starter_kit_deregister_style' ) ) :
function gcc_starter_kit_deregister_style() {
	
	wp_deregister_style( 'wp-block-library' );

}
add_action( 'wp_enqueue_scripts','gcc_starter_kit_deregister_style' );
endif;
if ( ! function_exists( 'gcc_starter_kit_clean_shortcodes' ) ) :
function gcc_starter_kit_clean_shortcodes( $content ) {
$array = array (
'<p>[' => '[',
']</p>' => ']',
']<br />' => ']'
);
$content = strtr( $content, $array );
return $content;
}
add_filter('the_content', 'gcc_starter_kit_clean_shortcodes');
endif;
/**
* Remove [All in One SEO Pack] HTML Comments
* @link //gist.github.com/llgruff/a7ab776167aa0ed307ec445df54e5fdb
*/
if (defined('AIOSEOP_VERSION')) {
add_action('get_header', function() {
	ob_start(
		function($o) {
return preg_replace('/\n?<.*?One SEO Pack.*?>/mi','',$o);
}
);
});
add_action('wp_head', function() {
ob_end_flush();
}, 999);
}