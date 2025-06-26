<?php

/**
 * Renders a pill component with "C" shapes on both sides and text in the middle.
 *
 * @param string $heading      Heading text to display
 * @param string $subtext      Subtext to display below heading
 * @param string $left_c_image Path to left C-shaped image (relative to theme, default: 'assets/big_c.svg')
 * @param string $right_c_image Path to right C-shaped image (relative to theme, default: 'assets/big_c.svg')
 * @param string $text_color   Text color class (default: 'text-white')
 */
function double_c_pill_horizontal($heading = '5 rynków europejskich', $subtext = 'NA KTÓRE SKUTECZNIE WPROWADZAMY FIRMY', $left_c_image = 'assets/big_c.svg', $right_c_image = 'assets/big_c.svg', $text_color = 'text-white') {
  // Get the theme URI for image paths
$theme_uri = get_template_directory_uri();

echo '
<div class="pill-container-with-content relative mx-auto rounded-full w-full max-w-4xl">
    <!-- Text content in the middle -->
    <div class="relative z-20 flex flex-col sm:flex-row items-center justify-center text-center ' . $text_color . ' h-full gap-2 sm:gap-4 px-4 py-8 sm:py-12">
            <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold libre-baskerville-regular">' .$heading . '</h2>
            <p class="text-xs sm:text-sm md:text-base lg:text-lg tracking-wider uppercase inter-regular">' . $subtext . '</p>
    </div>
    
    <!-- Left C shape -->
    <div class="absolute -left-8 sm:-left-12 md:-left-16 lg:-left-20 xl:-left-24 top-0 h-full z-10">
        <img src="' . $theme_uri . '/' . $left_c_image . '" alt="" class="h-full w-auto object-contain">
    </div>
    
    <!-- Right C shape -->
    <div class="absolute -right-8 sm:-right-12 md:-right-16 lg:-right-20 xl:-right-24 top-0 h-full z-10">
        <img src="' . $theme_uri . '/' . $right_c_image . '" alt="" class="h-full w-auto object-contain">
    </div>
</div>';
}

?>