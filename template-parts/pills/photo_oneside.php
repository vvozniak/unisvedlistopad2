<?php

/**
 * Renders a Pill component with photo inside and "C" shape on left or right(without heading).
 *
 * @param string $side      'left' or 'right' (default: 'right')
 * @param string $photo     Path to photo (relative to theme, default: 'assets/pill_photo.jpg')
 * @param string $c_image   Path to C-shaped image (relative to theme, default: 'assets/big_c.svg')
 */
function photo_oneside_pill($side = 'right', $photo = 'assets/pill_photo.jpg', $c_image = 'assets/big_c.svg')
{
  $c_position = ($side === 'left') ? 'right-0' : 'left-0';

  // Jeśli $photo to pełny URL (np. z ACF), zostaw go; jeśli nie, dodaj ścieżkę do motywu
  $photo_src = (strpos($photo, 'http') === 0) ? $photo : get_template_directory_uri() . '/' . ltrim($photo, '/');

  // Domyślnie zostawiamy big_c.svg z motywu
  $c_image_src = get_template_directory_uri() . '/' . ltrim($c_image, '/');

  echo '
  <div class="pill-container relative overflow-hidden rounded-full flex items-center justify-center">
    <div class="absolute ' . $c_position . ' top-0 h-full z-10">
      <img src="' . $c_image_src . '" alt="" class="h-full ' . ($side === 'left' ? ' rotate-y-180' : '') . '">
    </div>
    <img src="' . $photo_src . '" alt="" class="object-cover w-full h-full">
  </div>
  ';
}
