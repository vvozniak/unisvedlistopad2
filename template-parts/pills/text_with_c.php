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
if (!function_exists('text_with_c_pill')) {
  function text_with_c_pill($side = 'right', $heading = 'DOŚWIADCZENIE', $subtext = 'Lata praktyki w międzynarodowej administracji.', $c_image = 'assets/big_c.svg', $text_color = 'text-white')
  {
    // IMPORTANT: The 'side' parameter specifies where the TEXT appears, not the C shape
    // C shape should be on the opposite side from the text
    $c_position = ($side === 'left') ? '2xl:-right-10 md:-right-5 -right-40 -top-10' : 'left-0 2xl:-left-10 -top-10';
    $text_alignment = ($side === 'left') ? 'text-left md:pr-16 ' : 'text-left md:pl-16 pl-20';
    $text_spaceing = ($side === 'left') ? 'md:pl-25' : 'md:pr-25';

    // Get the theme URI for image paths
    $theme_uri = get_template_directory_uri();

    echo '
    <div class="h-[10vh]"></div>
  <div class="pill_c_con ' . $text_spaceing . ' relative  rounded-full my-4 ">
    <div class="pill_c_div relative z-20 ' . $text_color . ' flex flex-col justify-center h-full py-6 md:pl-8">
      <h2 class="h2pill ' . $text_alignment . ' tracking-[0.1em] text-[2.3vh] md:text-[1.46vw] font-bold mb-2 libre-baskerville-regular uppercase">' . $heading . '</h2>
      <p class="text_c_p ' . $text_alignment . ' text-[2.3vw] md:text-[1.05vw] inter-regular">' . esc_html($subtext) . '</p>
    </div>
    <div class="pill_c_img absolute ' . $c_position . ' md:-top-10  z-10">
      <img src="' . $theme_uri . '/' . $c_image . '" alt="" class="h-full md:w-auto w-1/2 object-cover">
    </div>
  </div>
  
  ';
  }
}
