<?php 
/**
 * Enqueue scripts and styles.
 */
function gcc_starter_kit_scripts() {
	
	wp_enqueue_style( 'gcc-recruiter-style', get_stylesheet_directory_uri() . '/dist/assets/css/main.min.css');

	wp_enqueue_style( 'gcc-recruiter-icons', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	
	wp_enqueue_script( 'gcc-recruiter-navigation', get_template_directory_uri() . '/dist/assets/js/main.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gcc_starter_kit_scripts' );
