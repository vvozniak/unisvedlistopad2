<?php get_template_part('template-parts/headers/menu_not_landing') ?>

<header class="relative h-[180vh] md:h-[160vh] overflow-hidden text-light">
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
            <img src="<?php echo esc_url($other_page_header_bg_url); ?>" alt="<?php echo esc_attr(is_array($other_page_header_bg) && isset($other_page_header_bg['alt']) ? $other_page_header_bg['alt'] : ''); ?>" class="w-full h-screen object-cover">
        </div>
    <?php endif; ?>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/o_nas_svg1.svg" alt="brandowy element dekoracyjny 1" class="absolute z-10 top-[15vh] left-0 w-[16vw] md:w-[8vw] h-auto object-cover">

    <img src="<?php echo get_template_directory_uri(); ?>/assets/o_nas_svg2.svg" alt="brandowy element dekoracyjny 2" class="absolute z-10 top-[50vh] right-0 w-[10vw] md:w-[5vw] h-auto object-cover">

    <div class="absolute top-[45vh] md:top-[40vh] left-0 md:left-[17vw] inset-0 flex flex-col items-start justify-start z-20 text-left md:px-4 w-screen md:w-2/3">
        <h1 class="ps-10 md:ps-10 text-light text-[1.8rem] md:text-[3rem] libre-baskerville-regular mb-[15vh]">Hej! Nazywam się Aleksandra<br>i jestem założycielką Unisved</h1>
        <div class="flex flex-col md:flex-row w-[80%] items-start justify-start mt-4 gap-x-[10vh]">
            <div class="ps-10 md:ps-10 w-full md:w-1/2 md:h-[20vh] flex items-start justify-start pt-2">
                <span class="block w-full h-[0.2rem] md:h-[0.1rem] bg-primary"></span>
            </div>
            <div class="w-full md:h-[20vh] pt-5 md:pt-0">
                <p class="text-light text-xl mt-auto inter-regular">Firmy, która powstała, aby wspierać przedsiębiorstwa w rozwoju na rynkach skandynawskich i międzynarodowych.</p>
                <p class="text-light text-base mt-8 inter-regular">Moja historia ze Skandynawią rozpoczęła się w 2006 roku, kiedy zamieszkałam w Szwecji. Dzięki wieloletniemu doświadczeniu w różnych branżach poznałam zarówno skandynawską kulturę i społeczeństwo, jak i unikalny sposób prowadzenia biznesu, który stał się fundamentem mojej obecnej pracy.</p>
                <p class="text-light text-base mt-4 inter-regular">W 2018 roku postanowiłam wykorzystać tę wiedzę, tworząc Unisved – most łączący międzynarodowe firmy z rynkiem skandynawskim. Moim celem jest wspieranie klientów w czerpaniu korzyści z dynamicznego rozwoju Skandynawii oraz pomaganie im w osiąganiu sukcesów na arenie międzynarodowej.</p>
            </div>
        </div>
    </div>
</header>