<?php
function double_c_pill_mobile($heading = '', $subtext = '', $left_c_image = 'assets/big_c.svg', $right_c_image = 'assets/big_c_right.svg') {
    $theme_uri = get_template_directory_uri();
    $left_c_src = $theme_uri . '/' . ltrim($left_c_image, '/');
    $right_c_src = $theme_uri . '/' . ltrim($right_c_image, '/');

    echo '
    <div class="double-c-pill-mobile relative flex flex-col items-center justify-center w-full max-w-[500px] mx-auto my-10 overflow-hidden">

        <!-- LEFT C SHAPE -->
        <div class="absolute left-0 top-0 h-full flex items-stretch z-10 pointer-events-none">
            <img src="' . $left_c_src . '" alt="" class="object-contain h-full">
        </div>

        <!-- RIGHT C SHAPE -->
        <div class="absolute right-0 top-0 h-full flex items-stretch z-10 pointer-events-none">
            <img src="' . $right_c_src . '" alt="" class="object-contain h-full -scale-x-100">
        </div>

        <!-- PLACEHOLDER FOR SIZE (to match oneside pill) -->
        <div class="w-full h-80 md:h-[406px] rounded-full"></div>

        <!-- TEXT -->
        <div class="mt-4 text-center px-4">
            <h4 class="text-xl font-semibold leading-snug">' . $heading . '</h4>
            <p class="text-base mt-2">' . $subtext . '</p>
        </div>
    </div>';
}
?>
