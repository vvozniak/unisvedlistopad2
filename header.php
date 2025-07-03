<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Atma:wght@300;400;500;600;700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-light text-gray-900 antialiased overflow-x-hidden w-[101.2vw]'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('tailpress_header'); ?>

		<?php if (is_front_page()) : ?>
			<?php get_template_part('template-parts/headers/landing-header'); ?>
		<?php elseif (is_page_template('template-parts/custom-page.php')) : ?>
			<?php get_template_part('template-parts/headers/menu_not_landing'); ?>
		<?php elseif (is_page(8)) : ?>
			<?php get_template_part('template-parts/headers/oferta-header'); ?>
		<?php elseif (is_page(7)) : ?>
			<?php get_template_part('template-parts/headers/o-nas-header'); ?>
		<?php elseif (is_page(9)) : ?>
			<?php get_template_part('template-parts/headers/projekty-header'); ?>
		<?php elseif (is_page(10)) : ?>
			<?php get_template_part('template-parts/headers/kontakt-header'); ?>
		<?php else : ?>
			<header class="relative h-[120vh] overflow-hidden text-light">
				<div class="absolute inset-0 -inset-y-9  custom-overlay z-10"></div>
				<?php
				$other_page_header_bg = get_field("other_page_header_bg_image");
				$other_page_header_bg_url = '';
				if (is_array($other_page_header_bg) && isset($other_page_header_bg['url'])) {
					$other_page_header_bg_url = $other_page_header_bg['url'];
				} elseif (is_string($other_page_header_bg)) {
					$other_page_header_bg_url = $other_page_header_bg;
				}
				if ($other_page_header_bg_url) : ?>
					<div class="absolute inset-0 z-0">
						<img src="<?php echo esc_url($other_page_header_bg_url); ?>" alt="<?php echo esc_attr(is_array($other_page_header_bg) && isset($other_page_header_bg['alt']) ? $other_page_header_bg['alt'] : ''); ?>" class="w-full h-full object-cover ">
					</div>
				<?php endif; ?>

				<?php get_template_part('template-parts/headers/menu_not_landing') ?>
			</header>
		<?php endif; ?>

		<div id="content" class="site-content grow">
			<?php do_action('tailpress_content_start'); ?>

			<main class="bg-secondary">