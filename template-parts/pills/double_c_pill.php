<?php
function double_c_pill(
  $heading = '5 rynków europejskich',
  $subtext = 'NA KTÓRE SKUTECZNIE WPROWADZAMY FIRMY',
  $left_c_image = 'assets/big_c.svg',
  $right_c_image = 'assets/big_c.svg',
  $text_color = 'text-white'
) {
  $theme_uri = get_template_directory_uri();

  echo '
  <div class="relative flex items-center justify-center max-w-full w-full mx-auto my-10 overflow-hidden">

    <!-- LEFT C -->
    <div class="absolute left-0 top-0 h-full flex items-stretch z-10 pointer-events-none">
      <img 
        src="' . $theme_uri . '/' . $left_c_image . '"
        alt="" 
        class="object-contain h-full"
      >
    </div>
    
    <!-- TEXT -->
    <div class="relative flex flex-col items-center justify-center w-full h-80 md:h-[406px] ' . $text_color . ' z-0 rounded-full overflow-hidden">
      <h2 class="text-[4.5vw] md:text-[2.8rem] font-bold mb-3 libre-baskerville-regular">' . $heading . '</h2>
      <p class="text-[2.5vw] md:text-xs 2xl:text-[0.875rem] tracking-[0.1em] leading-6 uppercase inter-regular">' . $subtext . '</p>
    </div>

    <!-- RIGHT C -->
    <div class="absolute right-0 top-0 h-full flex items-stretch z-10 pointer-events-none">
      <img 
        src="' . $theme_uri . '/' . $right_c_image . '"
        alt="" 
        class="object-contain h-full"
      >
    </div>

  </div>';
}
?>
