<?php get_template_part('template-parts/headers/menu_not_landing') ?>

<header class="relative min-h-[120vh] overflow-hidden text-light">
    <div class="absolute inset-0 custom-overlay z-10"></div>
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
            <h1 class="px-auto text-light text-[3.5rem] libre-baskerville-regular">Zobacz w czym<br>możemy Ci pomóc!</h1>
            <h2 class="uppercase text-primary text-[2.3rem] inter-regular tracking-[.5rem] mt-2">Pakiety unisved</h2>
        </div>
        <div class="flex md:w-[80%] w-full items-center justify-center gap-x-[10vh] md:mt-[25vh] mt-[5vh] flex-col md:flex-row">
            <div class="w-1/2 md:h-[20vh] h-[5vh] flex items-start justify-start pt-2">
                <span class="block w-full h-[0.1rem] bg-primary"></span>
            </div>
            <div class="w-1/2 h-[20vh]">
                <p class="text-light text-xl mt-auto inter-regular">Kompleksowe wsparcie dla firm wchodzących i rozwijających działalność na rynku szwedzkim</p>
            </div>
        </div>
    </div>
</header>