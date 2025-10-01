<?php

/**
 * Theme setup.
 */
function tailpress_setup()
{
	add_theme_support('title-tag');

	// Enable translations for theme strings
	load_theme_textdomain('tailpress', get_template_directory() . '/languages');

	register_nav_menus(
		array(
			'primary' => __('Primary Menu', 'tailpress'),
			'footer' => __('Footer Menu', 'tailpress'),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');

	add_theme_support('align-wide');
	add_theme_support('wp-block-styles');

	add_theme_support('responsive-embeds');

	add_theme_support('editor-styles');
	add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'tailpress_setup');

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts()
{
	$theme = wp_get_theme();
	

	wp_enqueue_style('tailpress', tailpress_asset('css/app.css'), array(), $theme->get('Version'));
	wp_enqueue_script('tailpress', tailpress_asset('js/app.js'), array(), $theme->get('Version'));

	wp_enqueue_style('custom', get_template_directory_uri() . '/resources/css/custom-new.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'tailpress_enqueue_scripts');

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset($path)
{
	if (wp_get_environment_type() === 'production') {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg('time', time(),  get_stylesheet_directory_uri() . '/' . $path);
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class($classes, $item, $args, $depth)
{
	if (isset($args->li_class)) {
		$classes[] = $args->li_class;
	}

	if (isset($args->{"li_class_$depth"})) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter('nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4);

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class($classes, $args, $depth)
{
	if (isset($args->submenu_class)) {
		$classes[] = $args->submenu_class;
	}

	if (isset($args->{"submenu_class_$depth"})) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter('nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3);

/**
 * Enqueue scroll animation scripts and styles
 */
function unisved_enqueue_scroll_animation()
{
	// Enqueue with version timestamp for cache busting during development
	$version = time();

	wp_enqueue_style(
		'unisved-scroll-animation',
		get_template_directory_uri() . '/resources/css/scroll-animation.css',
		array(),
		$version
	);

	wp_enqueue_script(
		'unisved-scroll-animation',
		get_template_directory_uri() . '/js/scroll-animation.js',
		array('jquery'),
		$version,
		true
	);
	wp_enqueue_script(
		'page-scroll',
		get_template_directory_uri() . '/js/page-scroll.js',
		array(),
		$version,
		true
	);
}
add_action('wp_enqueue_scripts', 'unisved_enqueue_scroll_animation');
// Add this to your existing function or create a new one
function unisved_enqueue_enhanced_scroll()
{
	$version = wp_get_theme()->get('Version');

	wp_enqueue_script(
		'enhanced-scroll',
		get_template_directory_uri() . '/js/enhanced-scroll.js',
		array(),
		$version,
		true
	);
}
add_action('wp_enqueue_scripts', 'unisved_enqueue_enhanced_scroll');
// Add this to your functions.php file
function unisved_enqueue_drag_scroll() {
    $version = wp_get_theme()->get('Version');

    wp_enqueue_script(
        'drag-scroll',
        get_template_directory_uri() . '/resources/js/drag-scroll.js',
        array(),
        $version,
        true
    );
}
add_action('wp_enqueue_scripts', 'unisved_enqueue_drag_scroll');
