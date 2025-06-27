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
function double_c_pill($heading = '5 rynków europejskich', $subtext = 'NA KTÓRE SKUTECZNIE WPROWADZAMY FIRMY', $left_c_image = 'assets/big_c.svg', $right_c_image = 'assets/big_c.svg', $text_color = 'text-white') {
  // Get the theme URI for image paths
  $theme_uri = get_template_directory_uri();

  echo '
  <div class="pill-container-with-content relative overflow-hidden rounded-full" style="margin-bottom: 7rem;">
    <!-- Text content in the middle -->
    <div class="relative z-20 flex flex-col items-center justify-center text-center ' . $text_color . ' h-full">
      <h2 class="text-[2rem] md:text-[3rem]/12 font-bold mb-3  libre-baskerville-regular">' .$heading . '</h2>
      <p class="text-[0.6rem] md:text-sm tracking-wider uppercase inter-regular ">' . $subtext . '</p>
    </div>
    
    <!-- Left C shape -->
    <div class="absolute left-0 top-0 h-full z-10">
      <img src="' . $theme_uri . '/' . $left_c_image . '" alt="" class="h-full">
    </div>
    
    <!-- Right C shape -->
    <div class="absolute right-0 top-0 h-full z-10">
      <img src="' . $theme_uri . '/' . $right_c_image . '" alt="" class="h-full">
    </div>
  </div>';
}

?>