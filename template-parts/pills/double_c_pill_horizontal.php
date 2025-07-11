<?php

/**
 * Renders a pill component with "C" shapes on both sides and text in the middle.
 *
 * @param string $heading      Heading text to display
 * @param string $subtext      Subtext to display below heading
 * @param string $left_c_image Path to left C-shaped image (relative to theme, default: 'assets/big_c.svg')
 * @param string $right_c_image Path to right C-shaped image (relative to theme, default: 'assets/big_c_right.svg')
 * @param string $text_color   Text color class (default: 'text-white')
 */
function double_c_pill_horizontal($heading = '5 rynków europejskich', $subtext = 'NA KTÓRE SKUTECZNIE WPROWADZAMY FIRMY', $left_c_image = 'assets/big_c.svg', $right_c_image = 'assets/big_c_right.svg', $text_color = 'text-white')
{
  // Get the theme URI for image paths
  $theme_uri = get_template_directory_uri();

  echo '
  <div class="relative w-full my-16 px-12 md:px-24 lg:px-32">
    <div class="relative flex flex-col md:flex-row items-center justify-center gap-8 ' . $text_color . ' h-[250px] md:h-[350px] lg:h-[450px]">
      
      <!-- Left C shape -->
      <div class="absolute -left-4 sm:-left-8 md:-left-24 lg:-left-32 top-1/2 -translate-y-1/2 z-10 h-full">
        <img src="' . $theme_uri . '/' . $left_c_image . '" alt="" class="hidden md:block h-full w-auto object-contain">
      </div>

      <!-- Text content -->
      <div class="w-full md:w-1/2 lg:w-2/5 text-center md:text-left">
        <h2 class="text-[1.3rem] md:text-[40px] 2xl:text-[3.4rem] libre-baskerville-regular leading-tight">' . $heading . '</h2>
      </div>
      <div class="w-7/8 md:w-1/2 lg:w-3/5 text-center md:text-left">
        <p class="text-[0.7rem] md:text-[20px] 2xl:text-[20px] inter-thin">' . $subtext . '</p>
      </div>

      <!-- Right C shape -->
      <div class="absolute -right-4 sm:-right-8 md:-right-24 lg:-right-32 top-1/2 -translate-y-1/2 z-10 h-full">
        <img src="' . $theme_uri . '/' . $right_c_image . '" alt="" class="hidden md:block h-full w-auto object-contain">
      </div>
    </div>
  </div>';
}
