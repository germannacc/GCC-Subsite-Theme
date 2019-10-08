<?php 
function gcc_starter_kit_widgets_init() {
	register_sidebar( array(
		'id'            => 'sidebar-1',
		'name'          => esc_html__( 'Sidebar', 'gcc-starter-kit' ),
		'class'   => '',
		'description'   => esc_html__( 'Add widgets here.', 'gcc-starter-kit' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'gcc_starter_kit_widgets_init' );
?>