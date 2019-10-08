<?php function gcc_starter_kit_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'gcc_starter_kit_content_width', 640 );
}
add_action( 'after_setup_theme', 'gcc_starter_kit_content_width', 0 );
