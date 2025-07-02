<header class="relative h-[180vh] md:h-[200vh] 2xl:h-[180vh] overflow-hidden bg-secondary overflow-x-hidden ">
    <div class="absolute inset-0 custom-overlay z-10"></div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/header.svg" class="absolute inset-0 z-10 top-[75vh] right-0 left-auto w-[10vw] h-auto object-cover">
    <?php
    $bg_img = get_field("bg_img", 24);
    $placeholder = get_field("placeholder", 24);
    $video = get_field("video", 24);
    $bool_video = get_field("bool_video", 24);
    ?>
    <?php if (!$bool_video) { ?>
        <img id="image" src="<?php echo esc_url($bg_img); ?>" class="absolute inset-0 w-full h-full object-cover z-0"></img>
    <?php } else { ?>
        <img id="placeholder" class="fixed inset-0 w-full h-screen object-cover overflow-hidden z-0" src="<?php echo esc_url($placeholder); ?>" alt="Video placeholder">
        <video id="background-video" style="display:none" class="fixed inset-0 w-full h-screen object-cover z-0" autoplay muted loop playsinline>
            <source src="<?php echo esc_url($video); ?>" type="video/mp4" />
        </video>
    <?php } ?>

    <?php
    $image_header = get_field("logo_header", 24);
    if ($image_header) {
        echo '<img src="' . esc_url($image_header) . '" alt="Header Logo" class="absolute inset-0 z-10 top-[40vh] md:top-[45vh] left-[15vw] md:left-[34vw] lg:w-[30vw] md:w-[45vw] w-[70vw]">';
    }
    ?>
    <div class="absolute top-[100vh] left-[5vw] md:left-[17vw] inset-0 flex flex-col items-start justify-start z-20 text-left px-4 md:w-2/3">
        <h1 class="text-light text-[4vw] libre-baskerville-regular mb-[5vh] md:mb-[15vh]">Budujemy mosty biznesowe <br> między Polską a Skandynawią.</h1>
        <div class="flex flex-col md:flex-row w-[80%] items-start justify-start mt-4">
            <div class="w-full md:w-1/2 md:h-[12vh] 2xl:h-[20vh] flex items-start justify-start pt-2">
                <span class="block w-full h-[0.2rem] md:h-[0.1rem] bg-primary"></span>
            </div>
            <div class="w-full md:w-1/2 md:h-[20vh] pt-5 md:pt-0">
                <p class="text-light 2xl:text-[1.9rem] text-[1.2rem] mt-auto inter-regular ml-[20vh] w-[max-content]">Wprowadzamy firmy na nowe rynki i <br>wspieramy ich rozwój w obu kierunkach.<br><br>Skontaktuj się z nami i razem <br> przekroczmy granice biznesu.</p>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/headers/menu'); ?>
</header>