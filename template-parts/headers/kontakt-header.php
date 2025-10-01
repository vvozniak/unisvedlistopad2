<?php get_template_part('template-parts/headers/menu_not_landing') ?>

<header class="relative min-h-[105vh] overflow-hidden text-light">
    <div class="absolute inset-0 custom-overlay-kontakt z-10"></div>
    <?php
    // ACF-driven title for Contact header with safe fallbacks
    $kontakt_title_l1 = trim((string) get_field('kontakt_header_title_line1')) ?: 'Masz pytania?';
    $kontakt_title_l2 = trim((string) get_field('kontakt_header_title_line2')) ?: 'Jesteśmy tu, by pomóc!';
    $other_page_header_bg = get_field("other_page_header_bg_image");
    $other_page_header_bg_url = '';
    if (is_array($other_page_header_bg) && isset($other_page_header_bg['url'])) {
        $other_page_header_bg_url = $other_page_header_bg['url'];
    } elseif (is_string($other_page_header_bg)) {
        $other_page_header_bg_url = $other_page_header_bg;
    }
    if ($other_page_header_bg_url) : ?>
        <div class="fixed inset-0 z-0">
            <img id='background-image' src="<?php echo esc_url($other_page_header_bg_url); ?>" alt="<?php echo esc_attr(is_array($other_page_header_bg) && isset($other_page_header_bg['alt']) ? $other_page_header_bg['alt'] : ''); ?>" class="w-full h-screen object-cover ">
        </div>
    <?php endif; ?>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/header.svg" alt="brandowy element dekoracyjny 1" class="absolute z-10 top-[45vh] right-0 w-[8vw] h-auto object-cover">

    <img src="<?php echo get_template_directory_uri(); ?>/assets/o_nas_svg2.svg" alt="brandowy element dekoracyjny 2" class="absolute z-10 top-[20vh] left-0 w-[7vw] h-auto object-cover rotate-180">

    <div class="absolute left-0 top-[25vh] md:top-[40vh] md:left-[17vw] inset-0 flex flex-col items-center justify-start z-20 text-center md:text-left px-4 md:w-2/3">
        <h1 class="px-auto text-light text-[3rem] md:text-[4vw] libre-baskerville-regular mb-[15vh] mt-[10vh] md:mt-0"><?php echo esc_html($kontakt_title_l1); ?><br><?php echo esc_html($kontakt_title_l2); ?></h1>
    </div>
</header>
