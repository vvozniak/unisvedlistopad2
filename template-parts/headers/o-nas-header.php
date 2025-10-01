<style>
/* Breakpoint dla niskich ekranów (landscape) */
@media (min-width: 2000px) and (max-height: 800px) {
  .header-landscape-fix {
    height: 120vh !important;
  }
  
  .text-container-landscape-fix {
    top: 15vh !important;
  }
  
  .text-container-landscape-fix h1 {
    font-size: 3vw !important;
    margin-bottom: 8vh !important;
  }
  
  .text-container-landscape-fix p {
    font-size: 0.9vw !important;
    line-height: 1.3 !important;
  }
  
  .text-container-landscape-fix .flex-col {
    gap: 2vh !important;
  }
}

/* Dodatkowy breakpoint dla bardzo niskich ekranów */
@media (min-width: 1024px) and (max-height: 700px) {
  .header-landscape-fix {
    height: 100vh !important;
  }
  
  .text-container-landscape-fix {
    top: 10vh !important;
  }
  
  .text-container-landscape-fix h1 {
    font-size: 2.5vw !important;
    margin-bottom: 3vh !important;
  }
}

/* Laptopy 1000px - 1199px */
@media (min-width: 1000px) and (max-width: 1199px) {
  .header-landscape-fix {
    height: 120vh !important; /* ZMIANA: Zmniejszono wysokość z 170vh */
  }
  
  .text-container-landscape-fix {
    top: 22vh !important;
  }
  
  .laptop-heading-1000 {
    font-size: 3.2vw !important;
    margin-bottom: 10vh !important;
  }
  
  .laptop-text-large-1000 {
    font-size: 1.4vw !important;
    line-height: 1.4 !important;
  }
  
  .laptop-text-small-1000 {
    font-size: 1.0vw !important;
    line-height: 1.5 !important;
  }
  
  .laptop-text-container-1000 {
    height: auto !important;
    min-height: 20vh !important;
  }
}

/* Laptopy 1200px - 1399px */
@media (min-width: 1200px) and (max-width: 1399px) {
  .header-landscape-fix {
    height: 130vh !important; /* ZMIANA: Zmniejszono wysokość z 180vh */
  }
  
  .text-container-landscape-fix {
    top: 20vh !important;
  }
  
  .laptop-heading-1200 {
    font-size: 3.5vw !important;
    margin-bottom: 12vh !important;
  }
  
  .laptop-text-large-1200 {
    font-size: 1.6vw !important;
    line-height: 1.4 !important;
  }
  
  .laptop-text-small-1200 {
    font-size: 1.1vw !important;
    line-height: 1.5 !important;
  }
  
  .laptop-text-container-1200 {
    height: auto !important;
    min-height: 25vh !important;
  }
}

/* Laptopy 1400px - 1599px */
@media (min-width: 1400px) and (max-width: 1599px) {
  .header-landscape-fix {
    height: 140vh !important; /* ZMIANA: Zmniejszono wysokość z 190vh */
  }
  
  .text-container-landscape-fix {
    top: 18vh !important;
  }
  
  .laptop-heading-1400 {
    font-size: 4.0vw !important;
    margin-bottom: 14vh !important;
  }
  
  .laptop-text-large-1400 {
    font-size: 1.8vw !important;
    line-height: 1.4 !important;
  }
  
  .laptop-text-small-1400 {
    font-size: 1.2vw !important;
    line-height: 1.5 !important;
  }
  
  .laptop-text-container-1400 {
    height: auto !important;
    min-height: 30vh !important;
  }
}

/* Zapobieganie znikaniu tekstu - ogólne poprawki */
.text-container-landscape-fix {
  overflow: visible !important;
  z-index: 30 !important;
}

.text-container-landscape-fix .flex-col {
  overflow: visible !important;
}

/* Lepsze zawijanie długich wyrazów w wersji szwedzkiej */
:lang(sv) .text-container-landscape-fix p {
  overflow-wrap: anywhere;
  word-break: break-word;
}
</style>

<?php get_template_part('template-parts/headers/menu_not_landing') ?>

<header class="header-landscape-fix relative h-[180vh] md:h-[160vh] 2xl:h-[140vh] text-light">
    <div class="absolute inset-0 custom-overlay-kontakt z-10"></div>
    
    <?php
  // ACF-driven texts for the About (O nas) header. Fallbacks keep existing copy.
  $onas_title_l1 = trim((string) get_field('onas_header_title_line1')) ?: 'Hej! Nazywam się Aleksandra';
  $onas_title_l2 = trim((string) get_field('onas_header_title_line2')) ?: 'i jestem założycielką Unisved';
  $onas_intro_large_raw = get_field('onas_header_intro_large');
  $onas_intro_large = is_string($onas_intro_large_raw) && trim($onas_intro_large_raw) !== ''
    ? $onas_intro_large_raw
    : 'Firmy, która powstała, aby wspierać przedsiębiorstwa w rozwoju na rynkach skandynawskich i międzynarodowych.';
  $onas_intro_small_1_raw = get_field('onas_header_intro_small_1');
  $onas_intro_small_1 = is_string($onas_intro_small_1_raw) && trim($onas_intro_small_1_raw) !== ''
    ? $onas_intro_small_1_raw
    : 'Moja historia ze Skandynawią rozpoczęła się w 2006 roku, kiedy zamieszkałam w Szwecji. Dzięki wieloletniemu doświadczeniu w różnych branżach poznałam zarówno skandynawską kulturę i społeczeństwo, jak i unikalny sposób prowadzenia biznesu, który stał się fundamentem mojej obecnej pracy.';
  $onas_intro_small_2_raw = get_field('onas_header_intro_small_2');
  $onas_intro_small_2 = is_string($onas_intro_small_2_raw) && trim($onas_intro_small_2_raw) !== ''
    ? $onas_intro_small_2_raw
    : 'W 2018 roku postanowiłam wykorzystać tę wiedzę, tworząc Unisved – most łączący międzynarodowe firmy z rynkiem skandynawskim. Moim celem jest wspieranie klientów w czerpaniu korzyści z dynamicznego rozwoju Skandynawii oraz pomaganie im w osiąganiu sukcesów na arenie międzynarodowej.';

    $other_page_header_bg = get_field("other_page_header_bg_image");
    $other_page_header_bg_url = '';
    if (is_array($other_page_header_bg) && isset($other_page_header_bg['url'])) {
        $other_page_header_bg_url = $other_page_header_bg['url'];
    } elseif (is_string($other_page_header_bg)) {
        $other_page_header_bg_url = $other_page_header_bg;
    }
    if ($other_page_header_bg_url) : ?>
        <div class="fixed inset-0 z-0">
            <img id='background-image' src="<?php echo esc_url($other_page_header_bg_url); ?>" alt="<?php echo esc_attr(is_array($other_page_header_bg) && isset($other_page_header_bg['alt']) ? $other_page_header_bg['alt'] : ''); ?>" class="w-full h-screen object-cover">
        </div>
    <?php endif; ?>
 
    <img src="<?php echo get_template_directory_uri(); ?>/assets/o_nas_svg1.svg" alt="brandowy element dekoracyjny 1" class="absolute z-10 top-[15vh] left-0 w-[16vw] md:w-[8vw] h-auto object-cover">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/o_nas_svg2.svg" alt="brandowy element dekoracyjny 2" class="absolute z-10 top-[50vh] right-0 w-[10vw] md:w-[5vw] h-auto object-cover">
    
    <div class="text-container-landscape-fix absolute top-[45vh] md:top-[25vh] left-[10vw] md:left-[17vw] inset-0 flex flex-col items-start justify-start z-20 text-left md:px-4 w-screen md:w-screen">
    <h1 class="md:ps-10 text-light text-[5vw] md:text-[4vw] laptop-heading-1000 laptop-heading-1200 laptop-heading-1400 libre-baskerville-regular md:mb-[15vh]">
      <?php echo esc_html($onas_title_l1); ?><br><?php echo esc_html($onas_title_l2); ?>
    </h1>
        
        <div class="flex flex-col md:flex-row w-[80%] items-start justify-start mt-4 gap-x-[10vh]">
            <div class="md:ps-10 w-full md:w-1/2 md:h-[20vh] laptop-text-container-1000 laptop-text-container-1200 laptop-text-container-1400 flex items-start justify-start pt-2">
                <span class="block w-full h-[0.2rem] bg-primary"></span>
            </div>
            
            <div class="md:w-1/2 md:h-[20vh] laptop-text-container-1000 laptop-text-container-1200 laptop-text-container-1400 pt-15 md:pt-0">
  <p class="leading-none text-light text-[5.0vw] md:text-[1.6vw] laptop-text-large-1000 laptop-text-large-1200 laptop-text-large-1400 2xl:text-[1.850rem] mt-auto inter-thin 2xl:max-w-[616px] tracking-[0.09em]">
        <?php echo nl2br(esc_html($onas_intro_large)); ?>
    </p>
                
    <p class="text-light text-[4vw] md:text-[1vw] laptop-text-small-1000 laptop-text-small-1200 laptop-text-small-1400 2xl:text-[1.250rem] mt-8 inter-thin 2xl:max-w-[600px] md:pr-[5rem] 2xl:pr-[2vw]">
        <?php echo nl2br(esc_html($onas_intro_small_1)); ?>
    </p>
                
    <p class="text-light text-[4vw] md:text-[1vw] laptop-text-small-1000 laptop-text-small-1200 laptop-text-small-1400 2xl:text-[1.250rem] mt-4 inter-thin 2xl:max-w-[600px] md:pr-[5rem] 2xl:pr-[2vw]">
           <?php echo nl2br(esc_html($onas_intro_small_2)); ?>
    </p>
            </div>
        </div>
    </div>
</header>