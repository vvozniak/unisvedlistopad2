<?php
function homepage_oneside_pill($side = 'right', $photo = 'assets/pill_photo.jpg', $c_image = 'assets/big_c.svg')
{
  $theme_uri = get_template_directory_uri();
  $photo_src = (strpos($photo, 'http') === 0) ? $photo : $theme_uri . '/' . ltrim($photo, '/');
  $c_image_src = $theme_uri . '/' . ltrim($c_image, '/');

  // Positioning
  $c_position_class = $side === 'left' ? 'left-0' : 'right-0';
  $c_flip_class = $side === 'left' ? '' : '-scale-x-100';

  echo '
  <div class="relative flex items-center justify-center max-w-full w-full mx-auto my-10 overflow-hidden">

    <!-- C SHAPE -->
    <div class="absolute ' . $c_position_class . ' top-0 h-full flex items-stretch z-10 pointer-events-none">
      <img 
        src="' . $c_image_src . '" 
        alt="" 
        class="object-contain h-full ' . $c_flip_class . '"
      >
    </div>

    <!-- PHOTO -->
    <div class="relative w-full h-80 md:h-[406px] z-0 rounded-full overflow-hidden">
      <img 
        src="' . $photo_src . '" 
        alt="" 
        class="object-cover w-full h-full"
      >
    </div>
  </div>';
}
?>
