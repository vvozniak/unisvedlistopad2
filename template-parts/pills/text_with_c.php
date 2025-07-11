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

    if (is_page(49)):
      $c_position = ($side === 'left') ? '2xl:-right-10 md:-right-5 -right-25 -top-5 2xl:-top-10 md:top-10' : '-top-5 md:left-0 2xl:-left-10 2xl:-top-10 md:top-10';
      $text_alignment = ($side === 'left') ? 'text-left md:pr-16 pr-25' : 'text-left md:pl-16 pl-10';
      $text_spaceing = ($side === 'left') ? '2xl:pl-12 md:pl-35 md:mr-[15vw] 2xl:mr-0 md:pr-[2vw] mt-[8rem]' : '2xl:pr-12 md:pr-35 md:ml-[15vw] 2xl:ml-0 mt-[8rem]';
      $sizes = 'h-full 2xl:w-auto w-[20vw] md:w-2/3 object-cover ';
    elseif (is_page(7)):
      $c_position = ($side === 'left') ? '2xl:-right-10 md:-right-5 -right-55 -top-12 2xl:-top-10 md:top-10' : '-top-12 -left-10 2xl:-left-10 2xl:-top-10 md:top-10';
      $text_alignment = ($side === 'left') ? 'text-left md:pr-38 2xl:pr-16  pr-25 ' : 'text-left md:pl-16 pl-2 md:pr-0 pr-25';
      $text_spaceing = ($side === 'left') ? '2xl:pl-0 md:pl-[5rem]' : '2xl:pr-0 md:pr-20';
      $sizes = 'h-full 2xl:w-auto w-1/2 md:w-2/3 object-cover ';

    endif;



    // Get the theme URI for image paths
    $theme_uri = get_template_directory_uri();

    echo '
    <div class="2xl:h-[10vh]"></div>
  <div class="pill_c_con ' . $text_spaceing . ' relative  rounded-full my-4 mt-[8rem]">
    <div class="pill_c_div relative z-20 ' . $text_color . ' flex flex-col justify-center h-full py-6 md:mt-0  md:w-auto w-[100vw] ">
      <h2 class="h2pill ' . $text_alignment . ' tracking-[0.1em] text-[2.3vh] md:text-[1.46vw] font-bold mb-2 libre-baskerville-regular uppercase">' . $heading . '</h2>
      <p class="text_c_p ' . $text_alignment . ' text-[2.3vw] md:text-[1.05vw] inter-regular">' . esc_html($subtext) . '</p>
    </div>
    <div class="pill_c_img absolute ' . $c_position . ' md:-top-10  z-10">
      <img src="' . $theme_uri . '/' . $c_image . '" alt="" class="' . $sizes . '">
    </div>
  </div>
  
  ';
  }
}
