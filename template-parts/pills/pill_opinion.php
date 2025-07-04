<?php

/**
 * Renders an opinion/testimonial pill component with a quote and attribution.
 *
 * @param string $quote       The testimonial/quote text
 * @param string $attribution The name/title of the person being quoted
 * @param string $company     The company or organization of the person
 * @param string $text_color  Text color class (default: 'text-white')
 * @param string $border_color Border color class (default: 'border-yellow-500')
 */
function pill_opinion($quote = '„Aleksandra jest bardzo zaangażowana i oddana swoim zadaniom oraz obowiązkom, co czyni ją matką chrzestną wielu projektów w Europie Północnej i Wschodniej. To dla mnie zaszczyt móc z nią współpracować."', $attribution = 'PIOTR PUKALUK', $company = 'HORISONTALPLAN AB', $text_color = 'text-white', $border_color = 'border-yellow-500')
{

  echo '
  <div class="pill-opinion-container relative overflow-hidden rounded-full border-2 ' . $border_color . ' bg-[#11151c] p-10 md:p-12 lg:p-16 flex flex-col items-center justify-center">
    <!-- Text content -->
    <div class="relative z-20 flex flex-col items-center justify-center text-center ' . $text_color . ' max-w-3xl mx-auto">
      <p class="text-[2.2vw] md:text-lg md:mb-6 mb-2 libre-baskerville-italic">' . $quote . '</p>
      
      <!-- Attribution -->
      <div class="text-center">
        <p class="text-[0.4rem] md:text-base tracking-wider uppercase">— ' . esc_html($attribution) . ', ' . esc_html($company) . '</p>
      </div>
    </div>
  </div>';
}
