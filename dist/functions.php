<?php
/**
 * gcc-starterkit functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gcc-starterkit
 */
/**
 * Theme supports.
 */
require get_template_directory() . '/inc/theme-supports.php';
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
/**
 * Theme content width.
 */
require get_template_directory() . '/inc/theme-content-width.php';
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
require get_template_directory() . '/inc/widgets.php';
/**
 * Implement Scripts.
 */
require get_template_directory() . '/inc/enqueue-scripts.php';
/**
 * Menu Walker.
 */
require get_template_directory() . '/inc/main-navigation.php';
/**
 * Get Menus.
 */
require get_template_directory() . '/inc/menus.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/cleanup.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/form-templates/registration-form-template.php';
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Functions that create the Advanced Custom Fields settings in the admin menu.
 */
require get_template_directory() . '/inc/acf-options.php';
/**
 * Functions that pull rif template.
 */
require get_template_directory() . '/inc/request-info-form-template.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';