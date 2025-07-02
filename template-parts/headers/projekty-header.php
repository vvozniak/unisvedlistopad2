<?php get_template_part('template-parts/headers/menu_not_landing') ?>

<header class="relative min-h-[120vh] 2xl:min-h-[100vh] overflow-hidden text-light">
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

    <img src="<?php echo get_template_directory_uri(); ?>/assets/o_nas_svg1.svg" alt="brandowy element dekoracyjny 1" class="absolute z-10 top-[55vh] left-0 w-[8vw] h-auto object-cover">

    <img src="<?php echo get_template_directory_uri(); ?>/assets/o_nas_svg2.svg" alt="brandowy element dekoracyjny 2" class="absolute z-10 top-[25vh] right-0 w-[7vw] h-auto object-cover">

    <div class="absolute top-[30vh] md:top-[35vh] left-[0vw] md:left-[17vw] inset-0 flex flex-col items-center justify-start z-20 text-center md:text-left px-4 md:w-2/3">
        <h1 class="px-auto text-light text-[3rem] 2xl:text-[5rem] libre-baskerville-regular mb-[15vh]">Wspólnie przekroczymy<br>granice</h1>
    </div>
</header>