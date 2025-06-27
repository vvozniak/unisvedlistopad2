<?php

/**
 * Renders a text component with a "C" shape on one side.
 *
 * @param string $side         'left' or 'right' (default: 'right') - side where the text appears
 * @param string $heading      Heading text to display
 * @param string $subtext      Subtext to display below heading
 * @param string $c_image      Path to C-shaped image (relative to theme, default: 'assets/big_c.svg')
 * @param string $text_color   Text color class (default: 'text-white')
 */
if (!function_exists('text_with_c_pill_small')) {
  function text_with_c_pill_small($side = 'right', $heading = 'DOŚWIADCZENIE', $subtext = 'Lata praktyki w międzynarodowej administracji.', $c_image = 'assets/big_c.svg', $text_color = 'text-white')
  {
    // IMPORTANT: The 'side' parameter specifies where the TEXT appears, not the C shape
    // C shape should be on the opposite side from the text
    $c_position = ($side === 'left') ? 'right-0' : 'left-0';
    $text_alignment = ($side === 'left') ? 'text-left pr-16' : 'text-left pl-16';

    // Get the theme URI for image paths
    $theme_uri = get_template_directory_uri();

    echo '
  <div class="pill-container relative  rounded-full my-4">
    <div class="relative overflow-hidden z-20  ' . $text_color . ' flex flex-col justify-center h-full py-6 px-8 bottom-[-10vh] md:bottom-0">
      <h2 class="' . $text_alignment . ' tracking-15 text-[0.8rem] md:text-[1.750rem] font-bold mb-2 libre-baskerville-regular uppercase">' . $heading . '</h2>
      <p class="' . $text_alignment . ' text-[1.250rem] md:text-base inter-regular">' . esc_html($subtext) . '</p>
    </div>
    <div class="absolute ' . $c_position . ' top-21 z-10">
      <img src="' . $theme_uri . '/' . $c_image . '" alt="" class="h-full w-auto object-cover">
    </div>
  </div>
  <div class="h-[5vh] block md:hidden"></div>
  ';
  }
}
