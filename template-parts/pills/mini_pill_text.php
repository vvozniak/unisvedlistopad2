<?php


/**
 * Renders a mini pill component with text and a small "C" shape on one side.
 *
 * @param string $side         'left' or 'right' (default: 'right') - side where the C shape appears
 * @param string $heading      Heading text to display (no subtext in mini version)
 * @param string $c_image      Path to C-shaped image (relative to theme, default: 'assets/small_c.svg')
 * @param string $text_color   Text color class (default: 'text-white')
 */
function mini_pill_text($side = 'right', $heading = 'Dlaczego Skandynawia?', $c_image = 'assets/small_c.svg', $text_color = 'text-white') {
  // Determine positions based on which side the C shape appears
  $c_position = ($side === 'left') ? 'left-0' : 'right-0';
  $text_alignment = ($side === 'left') ? 'text-right pr-8' : 'text-left pl-8';

  $text_classess_right = 'text-balance w-1/2 text-right me-14';
    $text_classess_left = 'text-balance w-1/2 text-left ms-14';
  
  // Get the theme URI for image paths
  $theme_uri = get_template_directory_uri();

  echo '
  <div class="mini-pill-container relative overflow-hidden ">
    <div class="relative z-20 ' . ($side === 'left' ? 'items-start' : 'items-end') . ' ' . $text_color . ' flex flex-col justify-center h-full py-5">
    <h3 class="text-2xl libre-baskerville-regular ' . ($side === 'left' ? $text_classess_left : $text_classess_right) . '">' . esc_html($heading) . '</h3>
    </div>
    <div class="absolute ' . $c_position . ' top-0 h-full z-10">
    <img src="' . $theme_uri . '/' . $c_image . '" alt="" class="h-full' . ($side === 'left' ? ' rotate-y-180' : '') . '">
    </div>
  </div>';
}

?>