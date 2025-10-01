<?php get_template_part('template-parts/headers/menu_not_landing') ?>

<header class="relative min-h-[120vh] 2xl:min-h-[133vh] overflow-hidden text-light">
    <div class="absolute inset-0 custom-overlay z-10"></div>
    <?php
    // ACF-driven texts for the Offer header
    // Fallbacks mirror current hardcoded copy to keep the design unchanged when fields are empty.
    $oferta_title_l1 = trim((string) get_field('oferta_header_title_line1')) ?: 'Zobacz w czym';
    $oferta_title_l2 = trim((string) get_field('oferta_header_title_line2')) ?: 'możemy Ci pomóc!';
    $oferta_kicker   = trim((string) get_field('oferta_header_kicker')) ?: 'Pakiety unisved';
    $oferta_desc_raw = get_field('oferta_header_description');
    $oferta_desc     = is_string($oferta_desc_raw) && trim($oferta_desc_raw) !== ''
        ? $oferta_desc_raw
        : 'Kompleksowe wsparcie dla firm wchodzących i rozwijających działalność na rynku szwedzkim';
    ?>
    <?php
    $other_page_header_bg = get_field("other_page_header_bg_image");
    $other_page_header_bg_url = '';
    if (is_array($other_page_header_bg) && isset($other_page_header_bg['url'])) {
        $other_page_header_bg_url = $other_page_header_bg['url'];
    } elseif (is_string($other_page_header_bg)) {
        $other_page_header_bg_url = $other_page_header_bg;
    }
    if ($other_page_header_bg_url) : ?>
        <div class="fixed inset-0 z-0">
            <img src="<?php echo esc_url($other_page_header_bg_url); ?>" alt="<?php echo esc_attr(is_array($other_page_header_bg) && isset($other_page_header_bg['alt']) ? $other_page_header_bg['alt'] : ''); ?>" class="w-full h-full object-cover ">
        </div>
    <?php endif; ?>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/header.svg" alt="brandowy element dekoracyjny 1" class="absolute z-10 top-[55vh] right-0 w-[8vw] h-auto object-cover">

    <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/o_nas_svg2.svg" alt="brandowy element dekoracyjny 2" class="absolute z-10 top-[20vh] left-0 w-[7vw] h-auto object-cover rotate-180"> -->

    <div class="absolute top-[17vh] md:top-[35vh] left-[0vw] md:left-[22vw] inset-0 flex flex-col items-center md:items-start justify-start z-20 text-center md:text-left px-4 md:w-3/4">
        <div class="flex flex-col items-start justify-start">
            <h1 class="px-auto text-light text-[8vw] md:text-[4.4vw] libre-baskerville-regular"><?php echo esc_html($oferta_title_l1); ?><br><?php echo esc_html($oferta_title_l2); ?></h1>
            <h2 class="uppercase text-primary text-[6vw] md:text-[3vw] inter-thin tracking-[.5rem] mt-2"><?php echo esc_html($oferta_kicker); ?></h2>
        </div>
        <div class="flex md:w-[90%] w-full items-center justify-center gap-x-[10vh] md:mt-[25vh] mt-[5vh] flex-col md:flex-row">
            <div class="w-11/12 md:h-[20vh] h-[5vh] flex items-start justify-start pt-2">
                <span class="block w-full h-[0.2rem] bg-primary"></span>
            </div>
            <div class="h-[20vh] px-12 md:px-0 py-2 md:py-0">
                <p class="text-light text-[7vw] md:text-[1.7vw] mt-auto inter-thin tracking-[0.1em]"><?php echo nl2br(esc_html($oferta_desc)); ?></p>
            </div>
        </div>
    </div>
</header>