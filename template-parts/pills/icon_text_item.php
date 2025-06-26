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
  <div class="flex items-center mb-10">
    <div class="mr-6 flex-shrink-0">
      <img src="' . esc_url($full_icon_path) . '" alt="' . esc_attr($alt_text) . '" class="' . esc_attr($classes) . ' w-[13vw] h-auto object-contai me-5">
    </div>
    <div>
      <h3 class="text-[1.4rem] md:text-[1.8rem] font-bold text-light libre-baskerville-regular mb-1">' . esc_html($title) . '</h3>
      <p class="text-[1rem] text-light inter-regular">' . esc_html($subtitle) . '</p>
    </div>
  </div>
  <div class="h-[5vh]"></div>
  ';
}
