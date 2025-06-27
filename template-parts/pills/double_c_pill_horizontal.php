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
  <div class="pill-container-with-content relative overflow-hidden md:overflow-visible h-200 md:h-auto md:mx-auto rounded-full">
    <!-- Text content in the middle -->
    <div class="relative z-20 flex flex-col md:flex-row items-center justify-center text-center md:text-left ' . $text_color . ' h-full">
      <h2 class="text-[2rem] lg:text-[3rem] font-bold mb-1 libre-baskerville-regular min-w-[180px] lg:min-w-[500px] lg:whitespace-normal break-words">' .$heading . '</h2>
      <p class="text-[0.6rem] lg:text-sm tracking-wider max-w-40 md:max-w-100 inter-regular min-w-[180px] lg:min-w-[400px]">' . $subtext . '</p>
    </div>
    
    <!-- Left C shape -->
    <div class="absolute left-0 md:-left-28 lg:-left-55 md:top-0 top-[40%] md:h-full h-50 z-10">
      <img src="' . $theme_uri . '/' . $left_c_image . '" alt="" class="h-full">
    </div>
    
    <!-- Right C shape -->
    <div class="absolute right-0 md:-right-28 lg:-right-55 md:top-0 top-[40%] md:h-full h-50 z-10">
      <img src="' . $theme_uri . '/' . $right_c_image . '" alt="" class="h-full">
    </div>
  </div>';
}

?>