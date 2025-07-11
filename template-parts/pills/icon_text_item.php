<?php

/**
 * Renders an item with an icon, title, and subtitle.
 *
 * @param string $icon_path Path to the icon image (relative to theme assets folder, e.g., 'your_icon.svg').
 * @param string $title     The main title text.
 * @param string $subtitle  The subtitle text.
 * @param string $icon_alt  Alt text for the icon (optional, defaults to title).
 * @param string $classes   Additional CSS classes to apply to the container (optional).
 */
function icon_text_item($icon_path, $title, $subtitle, $icon_alt = '', $classes = '')
{
  $theme_uri = get_template_directory_uri();
  $full_icon_path = $theme_uri . '/assets/' . ltrim($icon_path, '/');
  $alt_text = $icon_alt ?: $title; // Use title as alt text if specific alt is not provided

  echo '
  <div class="flex items-center mb-10 md:ml-0 ml-[10vw]">
    <div class="md:mr-6 flex-shrink-0">
      <img src="' . esc_url($full_icon_path) . '" alt="' . esc_attr($alt_text) . '" class="' . esc_attr($classes) . ' w-[13vw] h-auto object-contain me-5">
    </div>
    <div class="max-w-[500px]">
      <h3 class="icon-text-pill-h3 tracking-widest text-[0.9rem] md:text-[1.46vw] font-bold text-light libre-baskerville-regular mb-1 min-w-[200px] md:min-w-[450px]">' . esc_html($title) . '</h3>
      <p class="icon-text-pill-p text-[0.7rem] md:text-[1.08vw] text-light inter-thin">' . esc_html($subtitle) . '</p>
    </div>
  </div>
  <div class="md:h-[12vh]"></div>
  ';
}
