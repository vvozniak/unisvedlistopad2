<?php
/**
 * Template Name: Strona oferty - Separate Mobile/Desktop
 */

get_header();

require_once get_template_directory() . '/template-parts/pills/photo_oneside.php';
require_once get_template_directory() . '/template-parts/pills/double_c_pill_horizontal.php';

$text_domain = 'unisved-theme';

?>

<style>
/* ... Twoje style pozostają bez zmian ... */
.c-list li {
  list-style: none;
  background: url("<?php echo get_template_directory_uri(); ?>/assets/Ellipse_11.svg") no-repeat left center !important;
  height: 5rem !important;
  padding-left: 3rem !important;
  padding-top: 1.6rem !important;
  background-size: contain !important;
  display: flex !important;
  align-items: center !important;
}
@media (max-width: 767px) {
  .mobile-only .c-list li:not(.kropka) {
    display: flex !important;
    align-items: center !important;
    min-height: 5rem !important;
    background: url("<?php echo get_template_directory_uri(); ?>/assets/Ellipse_11.svg") no-repeat left center !important;
    background-size: contain !important;
    padding-left: 3rem !important;
    padding-bottom: 1rem !important;
  }
}
@media (min-width: 768px) {
  .desktop-only .c-list li {
    background-position: left center !important;
    display: flex !important;
    align-items: center !important;
    min-height: auto !important;
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .desktop-only .c-list li p,
  .desktop-only .c-list li {
    line-height: 1.4 !important;
    margin: 0 !important;
  }
}
ul.c-list li.kropka,
.c-list li.kropka,
li.kropka {
  padding-left: 0 !important;
  padding-right: 0 !important;
  margin-left: 0 !important;
  margin-right: 0 !important;
  background: none !important;
  background-image: none !important;
  list-style: disc !important;
  list-style-position: inside !important;
  height: auto !important;
  padding-top: 0 !important;
  padding-bottom: 0 !important;
  text-align: left !important;
  margin: 0 !important;
  display: list-item !important;
  align-items: initial !important;
}
@media (max-width: 767px) {
  .desktop-only {
    display: none !important;
  }
}
@media (min-width: 768px) {
  .mobile-only {
    display: none !important;
  }
  .offer-header-wrapper {
    position: relative;
    min-height: 120px;
  }
  .offer-header-static,
  .offer-header-dynamic {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
    padding: 2rem;
    margin: 0;
  }
  .offer-header-static.hidden {
    opacity: 0;
    transform: translateY(-10px);
    pointer-events: none;
  }
  .offer-header-dynamic.hidden {
    opacity: 0;
    transform: translateY(10px);
    pointer-events: none;
  }
  .offer-header-dynamic:not(.hidden) {
    opacity: 1;
    transform: translateY(0);
  }
  .offer-header-static:not(.hidden) {
    opacity: 1;
    transform: translateY(0);
  }
  .offer-header-sticky {
    position: sticky;
    top: 20px;
    z-index: 10;
  }
  .offer-header-right .offer-header-static,
  .offer-header-right .offer-header-dynamic {
    text-align: right;
    right: 0;
    left: auto;
  }
  .offer-details-expanded {
    animation: slideDown 0.4s ease-out;
  }
  @keyframes slideDown {
    from {
      opacity: 0;
      transform: translateY(-20px);
      max-height: 0;
    }
    to {
      opacity: 1;
      transform: translateY(0);
      max-height: 1000px;
    }
  }
  .offer-content-container {
    position: relative;
    z-index: 1;
  }
  .offer-image-container {
    position: relative;
    z-index: 1;
  }
  .offer-image-container {
    min-width: 450px;
    min-height: 300px;
  }
  .offer-text-block {
    min-width: 430px;
  }
  @media (min-width: 1280px) {
    .offer-text-block {
      min-width: 500px;
    }
  }
}
</style>

<div class="mobile-only bg-secondary relative z-30 rounded-t-[60px] -mt-[10vh] pb-[10vh]">
 <?php
    // --- POCZĄTEK ZMIENNYCH (MOBILE) ---
    $offer_post_type = 'oferta';
    // ZMIANA: Dodanie funkcji tłumaczących dla zmiennych tekstowych
    $read_more_text = __( '( CZYTAJ WIĘCEJ )', $text_domain );
    $hide_text = __( '( SCHOWAJ )', $text_domain );
    
    // Pola dla szablonu 1
    $szablon1_wlwyl_field = 'szablon_1_wlwyl';
    $podtytul1_field = 'podtytul1';
    $dla_kogo1_field = 'dla_kogo1';
    $zakres_uslug_kropki_field = 'zakres_uslug1';
    $zakres_uslug_polkola_field = 'zakres_uslug2';
    $efekt1_field = 'efekt1';
    // Pola dla szablonu 2
    $szablon2_wlwyl_field = 'szablon_2_wlwyl';
    $podtytul2_field = 'podtytul2';
    $dla_kogo2_field = 'dla_kogo2';
    $sklad2_field = 'sklad';
    $cena_szczegoly2_field = 'cena_i_szczegoly';
    $mozliwosc_laczenia2_field = 'mozliwosc_laczenia_pakietow';

    if ( defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'sv' ) {
        $offer_post_type = 'oferta_sv';
        // ZMIANA: Tłumaczenia dla języka szwedzkiego, jeśli chcesz je nadpisać w kodzie (choć String Translation jest lepsze)
        $read_more_text = __( '( LÄS MER )', $text_domain );
        $hide_text = __( '( DÖLJ )', $text_domain );
        
        // Pola dla szablonu 1
        $szablon1_wlwyl_field = 'szablon_1_wl_wyl_sv';
        $podtytul1_field = 'podtytul_sv';
        $dla_kogo1_field = 'dla_kogo_sv';
        $zakres_uslug_kropki_field = 'zakres_uslug_kropki_sv';
        $zakres_uslug_polkola_field = 'zakres_uslug_polkola_sv';
        $efekt1_field = 'efekt1_sv';
        // Pola dla szablonu 2
        $szablon2_wlwyl_field = 'szablon_2_wl_wyl_sv';
        $podtytul2_field = 'podtytul2_sv';
        $dla_kogo2_field = 'dla_kogo2_sv';
        $sklad2_field = 'sklad2_sv';
        $cena_szczegoly2_field = 'cena_szczegoly2_sv';
        $mozliwosc_laczenia2_field = 'mozliwosc_laczenia2_sv';
    }
    // --- KONIEC ZMIENNYCH (MOBILE) ---

  $offers_mobile = new WP_Query(array(
    'post_type' => $offer_post_type,
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'suppress_filters' => false,
  ));

  if ($offers_mobile->have_posts()) {
    $counter_mobile = 0;
    while ($offers_mobile->have_posts()) {
      $offers_mobile->the_post();
      if ($counter_mobile % 2 == 0) { // Oferty wyrównane do lewej
        if (get_field($szablon1_wlwyl_field) == true) {
 ?>
          <section class="py-20 mb-10 relative">
            <div class="md:ml-16 fixed-content flex-col lg:w-1/3 text-light p-8 link_li <?php if (strlen(get_the_title()) > 7): echo 'lg:min-w-[430px] 2xl:min-w-[500px] md:mr-5 xl:mr-30 2xl:mr-0'; endif; ?>">
              <div id="offer-head-dynamic-mobile-<?php echo $counter_mobile; ?>" class="hidden flex flex-col items-start">
                <div class="flex items-center">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class="mr-4 w-10">
                  <h2 class="text-[1.4rem] md:text-[2.87vw] libre-baskerville-regular text-balance <?php if (strlen(get_the_title()) > 7): echo 'lg:min-w-[430px] 2xl:min-w-[500px]'; endif; ?>">UNISVED<br><?php echo get_the_title(); ?></h2>
                </div>
                <p class="md:text-[1vw] mb-1 2xl:mb-4 2xl:text-nowrap ml-14 inter-thin"><?php echo get_field($podtytul1_field) ?></p>
                <a href="#" id="toggle-offer-dynamic-mobile-<?php echo $counter_mobile; ?>" class="text-primary tracking-20 md:text-[1vw] ml-14 transition duration-200 hover:font-bold"><?php echo $hide_text; ?></a>
              </div>
            </div>
            <div class="md:ml-16 md:mr-64 2xl:mr-32 lg:gap-4 xl:gap-12 2xl:gap-48 gap-restore-130 px-6 flex flex-col lg:flex-row items-center justify-between">
              <div class="lg:w-1/3 text-light p-8 link_li <?php if (strlen(get_the_title()) > 7): echo 'lg:min-w-[430px] 2xl:min-w-[500px] md:mr-5 xl:mr-30 2xl:mr-0'; endif; ?>">
                <div id="offer-head-static-mobile-<?php echo $counter_mobile; ?>" class="flex items-center">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class="mr-4 w-10">
                  <h2 class="text-[1.4rem] md:text-[2.87vw] libre-baskerville-regular text-balance <?php if (strlen(get_the_title()) > 7): echo 'lg:min-w-[430px] 2xl:min-w-[500px]'; endif; ?>">UNISVED<br><?php echo get_the_title(); ?></h2>
                </div>
                <p id="offer-p-static-mobile-<?php echo $counter_mobile; ?>" class="md:text-[1vw] mb-1 2xl:mb-4 ml-14 2xl:text-nowrap inter-thin"><?php echo get_field($podtytul1_field) ?></p>
                <div class="lg:w-1/2 md:min-w-[450px] my-10 lg:mt-0 2xl:min-w-full 2xl:min-h-full">
                  <div class="relative">
                    <?php photo_oneside_pill('right', get_the_post_thumbnail_url()); ?>
                  </div>
                </div>
                <a href="#" id="toggle-offer-mobile-<?php echo $counter_mobile; ?>" class="text-primary tracking-20 md:text-[1vw] ml-14 transition duration-200 hover:font-bold"><?php echo $read_more_text; ?></a>
              </div>
            </div>
            <div id="offer-details-mobile-<?php echo $counter_mobile; ?>" class="hidden scrollable-content mt-10 text-light px-6 md:ml-[50vw] md:mr-32 flex justify-end">
              <div class="mx-5 md:min-w-[450px]">
                <h3 class="text-2xl text-primary mb-10 libre-baskerville-regular"><?php _e('Dla kogo:', $text_domain); ?></h3>
                <p class="mb-4 text-wrap inter-thin"><?php echo get_field($dla_kogo1_field); ?></p>
                <div class="w-[100%] h-px bg-primary my-8"></div>
                <h3 class="text-2xl text-primary mb-10 libre-baskerville-regular"><?php _e('Zakres usług:', $text_domain); ?></h3>
                <?php 
                $polkola_content_mobile = get_field($zakres_uslug_polkola_field);
                if ($polkola_content_mobile):
                    $list_items = preg_replace('/^<ul[^>]*>(.*?)<\\/ul>$/s', '$1', $polkola_content_mobile);
                ?>
                <ul class="c-list c-list-small list-outside mb-4 inter-thin space-y-2">
                    <?php echo $list_items; ?>
                </ul>
                <?php endif; ?>

                <?php 
                $kropki_content_mobile = get_field($zakres_uslug_kropki_field);
                if ($kropki_content_mobile):
                    $list_items = preg_replace('/^<ul[^>]*>(.*?)<\\/ul>$/s', '$1', $kropki_content_mobile);
                ?>
                <ul class="c-list list-outside mb-4 marker:text-primary inter-thin space-y-2">
                    <?php echo $list_items; ?>
                </ul>
                <?php endif; ?>
                <div class="w-[100%] h-px bg-primary my-8"></div>
                <h3 class="text-2xl text-primary mb-10 libre-baskerville-regular"><?php _e('Efekt:', $text_domain); ?></h3>
                <p class="text-wrap inter-thin"><?php echo get_field($efekt1_field); ?></p>
              </div>
            </div>
          </section>
        <?php } elseif (get_field($szablon2_wlwyl_field) == true) { ?>
          <section class="bg-secondary py-20 pb-[20vh] relative">
            <div class="md:ml-16 fixed-content flex-col lg:w-1/2 text-light p-8 link_li <?php if (strlen(get_the_title()) > 9): echo 'lg:min-w-[430px] xl:min-w-[450px] 2xl:min-w-[500px] md:mr-5 xl:mr-30 2xl:mr-0'; endif; ?>">
              <div id="offer-head-dynamic-mobile-<?php echo $counter_mobile; ?>" class="hidden flex flex-col items-start">
                <div class="flex items-center mb-4 <?php if (strlen(get_the_title()) > 9): echo 'lg:min-w-[50vw] 2xl:min-w-[50vw]'; endif; ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class="mr-4 w-10">
                  <h2 class="text-[1.4rem] md:text-[2.87vw] libre-baskerville-regular text-balance">UNISVED EKSPANSJA<br><?php echo get_the_title(); ?></h2>
                </div>
                <p class="md:text-[1vw] mb-1 2xl:mb-4 ml-14 2xl:text-nowrap inter-thin"><?php echo get_field($podtytul2_field) ?></p>
                <a href="#" id="toggle-offer-dynamic-mobile-<?php echo $counter_mobile; ?>" class="text-primary tracking-20 md:text-[1vw] ml-14 transition duration-200 hover:font-bold"><?php echo $hide_text; ?></a>
              </div>
            </div>
            <div class="md:ml-16 md:mr-64 2xl:mr-32 lg:gap-4 xl:gap-12 2xl:gap-48 gap-restore-130 px-6 flex flex-col lg:flex-row items-center justify-between">
              <div class="lg:w-1/3 text-light p-8 link_li <?php if (strlen(get_the_title()) > 9): echo 'lg:min-w-[430px] xl:min-w-[450px] 2xl:min-w-[500px] md:mr-5 xl:mr-30 2xl:mr-0'; endif; ?>">
                <div id="offer-head-static-mobile-<?php echo $counter_mobile; ?>" class="flex items-center">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class="mr-4 w-10">
                  <h2 class="text-[1.4rem] md:text-[2.87vw] libre-baskerville-regular text-balance <?php if (strlen(get_the_title()) > 9): echo 'lg:min-w-[430px] 2xl:min-w-[500px]'; endif; ?>">UNISVED EKSPANSJA<br><?php echo get_the_title(); ?></h2>
                </div>
                <p id="offer-p-static-mobile-<?php echo $counter_mobile; ?>" class="md:text-[1vw] mb-1 2xl:mb-4 ml-14 2xl:text-nowrap inter-thin"><?php echo get_field($podtytul2_field) ?></p>
                <div class="lg:w-1/2 md:min-w-[450px] my-8 lg:mt-0 2xl:min-w-full 2xl:min-h-full">
                  <div class="relative">
                    <?php photo_oneside_pill('right', get_the_post_thumbnail_url()); ?>
                  </div>
                </div>
                <a href="#" id="toggle-offer-mobile-<?php echo $counter_mobile; ?>" class="text-primary tracking-20 md:text-[1vw] ml-14 transition duration-200 hover:font-bold"><?php echo $read_more_text; ?></a>
              </div>
            </div>
            <div id="offer-details-mobile-<?php echo $counter_mobile; ?>" class="hidden mt-10 text-light px-6 md:ml-[50vw] md:mr-32 flex justify-end">
              <div class="mx-5 md:min-w-[450px]">
                <h3 class="text-2xl text-primary libre-baskerville-regular"><?php _e('Dla kogo:', $text_domain); ?></h3>
                <p class="mb-4 inter-thin"><?php echo get_field($dla_kogo2_field); ?></p>
                <div class="w-[100%] h-px bg-primary my-8"></div>
                <h3 class="text-2xl text-primary libre-baskerville-regular"><?php _e('W skład pakietu wchodzi:', $text_domain); ?></h3>
                <?php 
                $sklad_content_mobile = get_field($sklad2_field);
                if ($sklad_content_mobile):
                    $list_items = preg_replace('/^<ul[^>]*>(.*?)<\\/ul>$/s', '$1', $sklad_content_mobile);
                ?>
                <ul class="c-list list-outside mb-4 marker:text-primary inter-thin space-y-2">
                    <?php echo $list_items; ?>
                </ul>
                <?php endif; ?>
                <div class="w-[100%] h-px bg-primary my-8"></div>
                <h3 class="text-2xl text-primary libre-baskerville-regular"><?php _e('Cena i szczegóły:', $text_domain); ?></h3>
                <p class="inter-thin"><?php echo get_field($cena_szczegoly2_field); ?></p>
              </div>
            </div>
          </section>
        <?php
        }
      } elseif ($counter_mobile % 2 == 1) { // Oferty wyrównane do prawej
        if (get_field($szablon1_wlwyl_field) == true) {
        ?>
          <section class="bg-secondary py-20 mb-10 relative">
            <div class="md:mr-16 md:ml-32 xl:ml-64 px-6 flex flex-col lg:flex-row items-center justify-between">
              <div id="offer-head-static-mobile-<?php echo $counter_mobile; ?>" class="text-light p-8 link_li order-1 lg:order-2">
                <div class="flex items-center mb-4 justify-end">
                  <h2 class="text-[1.4rem] md:text-[2.87vw] libre-baskerville-regular text-right text-balance">UNISVED<br><?php echo get_the_title(); ?></h2>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/small_c.svg" alt="C shape" class="ml-4 flex-shrink-0 w-10">
                </div>
                <p id="offer-p-static-mobile-<?php echo $counter_mobile; ?>" class="md:text-[1vw] mb-1 2xl:mb-4 mr-14 text-right 2xl:text-nowrap text-wrap inter-thin"><?php echo get_field($podtytul1_field) ?></p>
                <div class="w-1/2 md:min-w-[450px] my-8 lg:mt-0 2xl:max-w-full 2xl:min-h-full order-2 lg:order-1">
                  <div class="relative md:w-auto w-[90vw] md:left-0">
                    <?php photo_oneside_pill('left', get_the_post_thumbnail_url()); ?>
                  </div>
                </div>
                <a href="#" id="toggle-offer-mobile-<?php echo $counter_mobile; ?>" class="text-primary tracking-20 md:text-[1vw] mr-16 text-right block transition duration-200 hover:font-bold"><?php echo $read_more_text; ?></a>
              </div>
            </div>
            <div class="fixed-content text-light p-8 link_li float-right md:mr-16">
              <div id="offer-head-dynamic-mobile-<?php echo $counter_mobile; ?>" class="hidden flex flex-col">
                <div class="flex items-center mb-4 justify-end">
                  <h2 class="text-[1.4rem] md:text-[2.87vw] libre-baskerville-regular text-right text-balance">UNISVED<br><?php echo get_the_title(); ?></h2>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/small_c.svg" alt="C shape" class="ml-4 flex-shrink-0 w-10">
                </div>
                <p class="md:text-[1vw] mb-1 2xl:mb-4 mr-14 text-right 2xl:text-nowrap text-wrap inter-thin"><?php echo get_field($podtytul1_field) ?></p>
                <a href="#" id="toggle-offer-dynamic-mobile-<?php echo $counter_mobile; ?>" class="text-primary tracking-20 md:text-[1vw] mr-14 text-right block transition duration-200 hover:font-bold"><?php echo $hide_text; ?></a>
              </div>
            </div>
            <div id="offer-details-mobile-<?php echo $counter_mobile; ?>" class="hidden scrollable-content mt-10 text-light px-6 md:mr-16 md:ml-64 w-1/3">
              <div class="mx-5">
                <h3 class="text-2xl mb-10 text-primary libre-baskerville-regular"><?php _e('Dla kogo:', $text_domain); ?></h3>
                <p class="mb-4 text-wrap inter-thin"><?php echo get_field($dla_kogo1_field); ?></p>
                <div class="w-[100%] h-px bg-primary my-8"></div>
                <h3 class="text-2xl text-primary mb-10 libre-baskerville-regular"><?php _e('Zakres usług:', $text_domain); ?></h3>
                <?php 
                $polkola_content_mobile_right = get_field($zakres_uslug_polkola_field);
                if ($polkola_content_mobile_right):
                    $list_items = preg_replace('/^<ul[^>]*>(.*?)<\\/ul>$/s', '$1', $polkola_content_mobile_right);
                ?>
                <ul class="c-list list-outside mb-4 inter-thin space-y-2">
                    <?php echo $list_items; ?>
                </ul>
                <?php endif; ?>

                <?php 
                $kropki_content_mobile_right = get_field($zakres_uslug_kropki_field);
                if ($kropki_content_mobile_right):
                    $list_items = preg_replace('/^<ul[^>]*>(.*?)<\\/ul>$/s', '$1', $kropki_content_mobile_right);
                ?>
                <ul class="c-list list-outside mb-4 marker:text-primary inter-thin space-y-2">
                    <?php echo $list_items; ?>
                </ul>
                <?php endif; ?>
                <div class="w-[100%] h-px bg-primary my-8"></div>
                <h3 class="text-2xl text-primary mb-10 libre-baskerville-regular"><?php _e('Efekt:', $text_domain); ?></h3>
                <p class="text-wrap inter-thin"><?php echo get_field($efekt1_field); ?></p>
              </div>
            </div>
          </section>
        <?php
        } elseif (get_field($szablon2_wlwyl_field) == true) {
        ?>
          <section class="bg-secondary py-20 mb-10 relative">
            <div class="md:mr-16 fixed-content flex-col lg:w-1/3 text-light p-8 link_li float-right">
              <div id="offer-head-dynamic-mobile-<?php echo $counter_mobile; ?>" class="hidden flex flex-col items-end">
                <div class="flex items-center mb-4 justify-end">
                  <h2 class="text-[1.4rem] md:text-[2.87vw] libre-baskerville-regular text-right text-balance">UNISVED EKSPANSJA<br><?php echo get_the_title(); ?></h2>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/small_c.svg" alt="C shape" class="ml-4 flex-shrink-0 w-10">
                </div>
                <p class="md:text-[1vw] mb-1 2xl:mb-4 mr-14 text-right 2xl:text-nowrap inter-thin"><?php echo get_field($podtytul2_field) ?></p>
                <a href="#" id="toggle-offer-dynamic-mobile-<?php echo $counter_mobile; ?>" class="text-primary tracking-20 md:text-[1vw] mr-14 text-right block transition duration-200 hover:font-bold"><?php echo $hide_text; ?></a>
              </div>
            </div>
            <div class="2xl:gap-110 md:mr-16 md:ml-64 px-6 flex flex-col lg:flex-row items-center justify-between">
              <div class="lg:w-1/3 2xl:w-1/2 text-light p-8 lg:pl-0 link_li <?php if (strlen(get_the_title()) > 9): echo 'lg:min-w-[430px] 2xl:min-w-[500px] md:mr-5 xl:mr-30 2xl:mr-0'; endif; ?>">
                <div id="offer-head-static-mobile-<?php echo $counter_mobile; ?>" class="flex items-center">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class="mr-4 w-10">
                  <h2 class="text-[1.4rem] md:text-[2.87vw] libre-baskerville-regular text-balance <?php if (strlen(get_the_title()) > 9): echo 'lg:min-w-[430px] 2xl:min-w-[500px]'; endif; ?>">UNISVED EKSPANSJA<br><?php echo get_the_title(); ?></h2>
                </div>
                <p id="offer-p-static-mobile-<?php echo $counter_mobile; ?>" class="md:text-[1vw] mb-1 2xl:mb-4 ml-14 2xl:text-nowrap inter-thin"><?php echo get_field($podtytul2_field) ?></p>
                <a href="#" id="toggle-offer-mobile-<?php echo $counter_mobile; ?>" class="text-primary tracking-20 md:text-[1vw] ml-14 transition duration-200 hover:font-bold"><?php echo $read_more_text; ?></a>
                <div id="offer-details-mobile-<?php echo $counter_mobile; ?>" class="hidden mt-4 text-light">
                  <h3 class="text-2xl text-primary libre-baskerville-regular"><?php _e('Dla kogo:', $text_domain); ?></h3>
                  <p class="mb-4 inter-thin"><?php echo get_field($dla_kogo2_field); ?></p>
                  <div class="w-[100%] h-px bg-primary my-8"></div>
                  <h3 class="text-2xl text-primary libre-baskerville-regular"><?php _e('W skład pakietu wchodzi:', $text_domain); ?></h3>
                  <?php 
                  $sklad_content_mobile_right = get_field($sklad2_field);
                  if ($sklad_content_mobile_right):
                      $list_items = preg_replace('/^<ul[^>]*>(.*?)<\\/ul>$/s', '$1', $sklad_content_mobile_right);
                  ?>
                  <ul class="c-list list-outside mb-4 marker:text-primary inter-thin space-y-2">
                      <?php echo $list_items; ?>
                  </ul>
                  <?php endif; ?>
                  <div class="w-[100%] h-px bg-primary my-8"></div>
                  <h3 class="text-2xl text-primary libre-baskerville-regular"><?php _e('Cena i szczegóły:', $text_domain); ?></h3>
                  <p class="inter-thin"><?php echo get_field($cena_szczegoly2_field); ?></p>
                </div>
              </div>
              <div class="lg:w-1/2 md:min-w-[450px] mt-8 lg:mt-0 2xl:min-w-full 2xl:min-h-full">
                <div class="relative">
                  <?php photo_oneside_pill('left', get_the_post_thumbnail_url()); ?>
                </div>
              </div>
            </div>
          </section>
        <?php
        }
      }
      $counter_mobile++;
    }
    wp_reset_postdata();
  }
 ?>
 <section class="new-background-section slide bg-black bg-cover rounded-t-[60px] -mt-[10vh] relative z-30 py-12" style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/chmury.jpg')">
    <div class="absolute inset-0 bg-secondary opacity-50 rounded-t-[60px]"></div>
    <div class="container mx-auto flex items-center justify-center h-full text-center text-white relative z-10">
      <div class="md:mb-8">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo_biale_unisved.svg" alt="<?php _e('Logo', $text_domain); ?>" class="hidden md:block 2xl:mx-auto lg:ml-10 mb-6 w-[20vw]">
      </div>
      <h2 class="text-[8vw] md:text-[4vw] leading-tight mx-auto px-3 md:px-0 md:pl-16 libre-baskerville-regular text-left">
        <?php _e('Osiągnij sukces <br>na globalnej scenie!', $text_domain); ?>
      </h2>
    </div>
  </section>

  <section class="py-12 relative z-30 bg-secondary overflow-hidden w-full text-white rounded-t-[60px]">
    <div class="lg:mx-[2rem] 2xl:mx-[8vw] contabg-center overflow-hidden rounded-[40px] min-h-[65vh] space-y-16 md:my-20 pt-5 inter-thin">
      <?php
      double_c_pill_horizontal(
        __("Możliwość <br> łączenia pakietów", $text_domain),
        __("Oferujemy dopasowane pakiety usług dla przedsiębiorstw, które chcą rozpocząć działalność, zrealizować projekt, skutecznie sprzedawać i budować swoją pozycję w Szwecji. Każdy projekt jest inny.<br><br>Dlatego oferujemy możliwość łączenia wybranych pakietów lub stworzenia indywidualnej propozycji szytej na miarę. Skontaktuj się z nami, aby dopasować zakres usług do swoich celów w Szwecji.", $text_domain),
        'assets/big_c.svg',
        'assets/big_c_right.svg',
        'text-white'
      );
      ?>
    </div>
  </section>

 <script>
  // MOBILE JAVASCRIPT
  for (let i = 0; i < <?php echo $counter_mobile; ?>; i++) {
    const toggleLink = document.getElementById(`toggle-offer-mobile-${i}`);
    const detailsDiv = document.getElementById(`offer-details-mobile-${i}`);

    if (toggleLink && detailsDiv) {
      toggleLink.addEventListener("click", (e) => {
        e.preventDefault();
        const isHidden = detailsDiv.classList.toggle("hidden");
        toggleLink.textContent = isHidden ? '<?php echo $read_more_text; ?>' : '<?php echo $hide_text; ?>';
      });
    }
  }
 </script>
</div>

<div class="desktop-only bg-secondary relative z-30 rounded-t-[60px] -mt-[10vh] pb-[10vh]">
 <?php
    // --- POCZĄTEK ZMIENNYCH (DESKTOP) ---
    $offer_post_type_desktop = 'oferta';
    // ZMIANA: Dodanie funkcji tłumaczących dla zmiennych tekstowych
    $read_more_text_desktop = __( '( CZYTAJ WIĘCEJ )', $text_domain );
    $hide_text_desktop = __( '( SCHOWAJ )', $text_domain );

    // Pola dla szablonu 1
    $szablon1_wlwyl_field_desktop = 'szablon_1_wlwyl';
    $podtytul1_field_desktop = 'podtytul1';
    $dla_kogo1_field_desktop = 'dla_kogo1';
    $zakres_uslug_kropki_field_desktop = 'zakres_uslug1';
    $zakres_uslug_polkola_field_desktop = 'zakres_uslug2';
    $efekt1_field_desktop = 'efekt1';
    // Pola dla szablonu 2
    $szablon2_wlwyl_field_desktop = 'szablon_2_wlwyl';
    $podtytul2_field_desktop = 'podtytul2';
    $dla_kogo2_field_desktop = 'dla_kogo2';
    $sklad2_field_desktop = 'sklad';
    $cena_szczegoly2_field_desktop = 'cena_i_szczegoly';
    $mozliwosc_laczenia2_field_desktop = 'mozliwosc_laczenia_pakietow';

    if ( defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'sv' ) {
        $offer_post_type_desktop = 'oferta_sv';
        $read_more_text_desktop = __( '( LÄS MER )', $text_domain );
        $hide_text_desktop = __( '( DÖLJ )', $text_domain );
        // Pola dla szablonu 1
        $szablon1_wlwyl_field_desktop = 'szablon_1_wl_wyl_sv';
        $podtytul1_field_desktop = 'podtytul_sv';
        $dla_kogo1_field_desktop = 'dla_kogo_sv';
        $zakres_uslug_kropki_field_desktop = 'zakres_uslug_kropki_sv';
        $zakres_uslug_polkola_field_desktop = 'zakres_uslug_polkola_sv';
        $efekt1_field_desktop = 'efekt1_sv';
        // Pola dla szablonu 2
        $szablon2_wlwyl_field_desktop = 'szablon_2_wl_wyl_sv';
        $podtytul2_field_desktop = 'podtytul2_sv';
        $dla_kogo2_field_desktop = 'dla_kogo2_sv';
        $sklad2_field_desktop = 'sklad2_sv';
        $cena_szczegoly2_field_desktop = 'cena_szczegoly2_sv';
        $mozliwosc_laczenia2_field_desktop = 'mozliwosc_laczenia2_sv';
    }
    // --- KONIEC ZMIENNYCH (DESKTOP) ---

  $offers_desktop = new WP_Query(array(
    'post_type' => $offer_post_type_desktop,
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'suppress_filters' => false,
  ));

  if ($offers_desktop->have_posts()) {
    $counter_desktop = 0;
    while ($offers_desktop->have_posts()) {
      $offers_desktop->the_post();

      if ($counter_desktop % 2 == 0) { // Oferty wyrównane do lewej
        if (get_field($szablon1_wlwyl_field_desktop) == true) {
 ?>
          <section class="offer-section py-20 mb-10 relative">
            <div class="offer-content-container md:ml-16 md:mr-64 2xl:mr-32 lg:gap-4 xl:gap-12 2xl:gap-48 gap-restore-130 px-6 flex flex-col lg:flex-row items-start justify-between">
              <div class="lg:w-1/3 text-light link_li offer-text-block <?php if (strlen(get_the_title()) > 7): echo 'lg:min-w-[430px] 2xl:min-w-[500px] md:mr-5 xl:mr-30 2xl:mr-0'; endif; ?>">
                <div class="offer-header-wrapper offer-header-sticky">
                  <div id="offer-head-static-desktop-<?php echo $counter_desktop; ?>" class="offer-header-static">
                    <div class="flex items-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class="mr-4 w-10">
                      <h2 class="text-[1.4rem] md:text-[2.87vw] libre-baskerville-regular text-balance <?php if (strlen(get_the_title()) > 7): echo 'lg:min-w-[430px] 2xl:min-w-[500px]'; endif; ?>">
                        UNISVED<br><?php echo get_the_title(); ?>
                      </h2>
                    </div>
                    <p id="offer-p-static-desktop-<?php echo $counter_desktop; ?>" class="md:text-[1vw] mb-1 2xl:mb-4 ml-14 2xl:text-nowrap inter-thin"><?php echo get_field($podtytul1_field_desktop) ?></p>
                    <a href="#" id="toggle-offer-desktop-<?php echo $counter_desktop; ?>" class="text-primary tracking-20 md:text-[1vw] ml-14 transition duration-200 hover:font-bold"><?php echo $read_more_text_desktop; ?></a>
                  </div>
                  <div id="offer-head-dynamic-desktop-<?php echo $counter_desktop; ?>" class="offer-header-dynamic hidden">
                    <div class="flex items-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class="mr-4 w-10">
                      <h2 class="text-[1.4rem] md:text-[2.87vw] libre-baskerville-regular text-balance <?php if (strlen(get_the_title()) > 7): echo 'lg:min-w-[430px] 2xl:min-w-[500px]'; endif; ?>">
                        UNISVED<br><?php echo get_the_title(); ?>
                      </h2>
                    </div>
                    <p class="md:text-[1vw] mb-1 2xl:mb-4 2xl:text-nowrap ml-14 inter-thin"><?php echo get_field($podtytul1_field_desktop) ?></p>
                    <a href="#" id="toggle-offer-dynamic-desktop-<?php echo $counter_desktop; ?>" class="text-primary tracking-20 md:text-[1vw] ml-14 transition duration-200 hover:font-bold"><?php echo $hide_text_desktop; ?></a>
                  </div>
                </div>
              </div>
              <div class="offer-image-container lg:w-1/2 md:min-w-[450px] mt-10 lg:mt-0 2xl:min-w-full 2xl:min-h-full">
                <div class="relative">
                  <?php photo_oneside_pill('right', get_the_post_thumbnail_url()); ?>
                </div>
              </div>
            </div>
            <div id="offer-details-desktop-<?php echo $counter_desktop; ?>" class="hidden mt-10 text-light px-6 md:ml-[50vw] md:mr-32 flex justify-end">
              <div class="mx-5 md:min-w-[450px]">
                <h3 class="text-2xl text-primary mb-10 libre-baskerville-regular"><?php _e('Dla kogo:', $text_domain); ?></h3>
                <p class="mb-4 text-wrap inter-thin"><?php echo get_field($dla_kogo1_field_desktop); ?></p>
                <div class="w-[100%] h-px bg-primary my-8"></div>
                <h3 class="text-2xl text-primary mb-10 libre-baskerville-regular"><?php _e('Zakres usług:', $text_domain); ?></h3>
                <?php 
                $polkola_content_desktop = get_field($zakres_uslug_polkola_field_desktop);
                if ($polkola_content_desktop):
                    $list_items = preg_replace('/^<ul[^>]*>(.*?)<\\/ul>$/s', '$1', $polkola_content_desktop);
                ?>
                <ul class="c-list c-list-small list-outside mb-4 inter-thin space-y-2">
                    <?php echo $list_items; ?>
                </ul>
                <?php endif; ?>

                <?php 
                $kropki_content_desktop = get_field($zakres_uslug_kropki_field_desktop);
                if ($kropki_content_desktop):
                    $list_items = preg_replace('/^<ul[^>]*>(.*?)<\\/ul>$/s', '$1', $kropki_content_desktop);
                ?>
                <ul class="c-list list-outside mb-4 marker:text-primary inter-thin space-y-2">
                    <?php echo $list_items; ?>
                </ul>
                <?php endif; ?>
                <div class="w-[100%] h-px bg-primary my-8"></div>
                <h3 class="text-2xl text-primary mb-10 libre-baskerville-regular"><?php _e('Efekt:', $text_domain); ?></h3>
                <p class="text-wrap inter-thin"><?php echo get_field($efekt1_field_desktop); ?></p>
              </div>
            </div>
          </section>
        <?php 
        } elseif (get_field($szablon2_wlwyl_field_desktop) == true) {
        ?>
          <section class="offer-section bg-secondary py-20 pb-[20vh] relative">
            <div class="offer-content-container md:ml-16 md:mr-64 2xl:mr-32 lg:gap-4 xl:gap-12 2xl:gap-48 gap-restore-130 px-6 flex flex-col lg:flex-row items-start justify-between">
              <div class="lg:w-1/3 text-light link_li offer-text-block <?php if (strlen(get_the_title()) > 9): echo 'lg:min-w-[430px] xl:min-w-[450px] 2xl:min-w-[500px] md:mr-5 xl:mr-30 2xl:mr-0'; endif; ?>">
                <div class="offer-header-wrapper offer-header-sticky">
                  <div id="offer-head-static-desktop-<?php echo $counter_desktop; ?>" class="offer-header-static">
                    <div class="flex items-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class="mr-4 w-10">
                      <h2 class="text-[1.4rem] md:text-[2.87vw] libre-baskerville-regular text-balance <?php if (strlen(get_the_title()) > 9): echo 'lg:min-w-[430px] 2xl:min-w-[500px]'; endif; ?>">
                        UNISVED EKSPANSJA<br><?php echo get_the_title(); ?>
                      </h2>
                    </div>
                    <p id="offer-p-static-desktop-<?php echo $counter_desktop; ?>" class="md:text-[1vw] mb-1 2xl:mb-4 ml-14 2xl:text-nowrap inter-thin"><?php echo get_field($podtytul2_field_desktop) ?></p>
                    <a href="#" id="toggle-offer-desktop-<?php echo $counter_desktop; ?>" class="text-primary tracking-20 md:text-[1vw] ml-14 transition duration-200 hover:font-bold"><?php echo $read_more_text_desktop; ?></a>
                  </div>
                  <div id="offer-head-dynamic-desktop-<?php echo $counter_desktop; ?>" class="offer-header-dynamic hidden">
                    <div class="flex items-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class="mr-4 w-10">
                      <h2 class="text-[1.4rem] md:text-[2.87vw] libre-baskerville-regular text-balance <?php if (strlen(get_the_title()) > 9): echo 'lg:min-w-[430px] 2xl:min-w-[500px]'; endif; ?>">
                        UNISVED EKSPANSJA<br><?php echo get_the_title(); ?>
                      </h2>
                    </div>
                    <p class="md:text-[1vw] mb-1 2xl:mb-4 ml-14 2xl:text-nowrap inter-thin"><?php echo get_field($podtytul2_field_desktop) ?></p>
                    <a href="#" id="toggle-offer-dynamic-desktop-<?php echo $counter_desktop; ?>" class="text-primary tracking-20 md:text-[1vw] ml-14 transition duration-200 hover:font-bold"><?php echo $hide_text_desktop; ?></a>
                  </div>
                </div>
              </div>
              <div class="offer-image-container lg:w-1/2 md:min-w-[450px] mt-8 lg:mt-0 2xl:min-w-full 2xl:min-h-full">
                <div class="relative">
                  <?php photo_oneside_pill('right', get_the_post_thumbnail_url()); ?>
                </div>
              </div>
            </div>
            <div id="offer-details-desktop-<?php echo $counter_desktop; ?>" class="hidden mt-10 text-light px-6 md:ml-[50vw] md:mr-32 flex justify-end">
              <div class="mx-5 md:min-w-[450px]">
                <h3 class="text-2xl text-primary mb-10 libre-baskerville-regular"><?php _e('Dla kogo:', $text_domain); ?></h3>
                <p class="mb-4 inter-thin"><?php echo get_field($dla_kogo2_field_desktop); ?></p>
                <div class="w-[100%] h-px bg-primary my-8"></div>
                <h3 class="text-2xl text-primary mb-10 libre-baskerville-regular"><?php _e('W skład pakietu wchodzi:', $text_domain); ?></h3>
                <?php 
                $sklad_content_desktop = get_field($sklad2_field_desktop);
                if ($sklad_content_desktop):
                    $list_items = preg_replace('/^<ul[^>]*>(.*?)<\\/ul>$/s', '$1', $sklad_content_desktop);
                ?>
                <ul class="c-list list-outside mb-4 marker:text-primary inter-thin space-y-2">
                    <?php echo $list_items; ?>
                </ul>
                <?php endif; ?>
                <div class="w-[100%] h-px bg-primary my-8"></div>
                <h3 class="text-2xl text-primary mb-10 libre-baskerville-regular"><?php _e('Cena i szczegóły:', $text_domain); ?></h3>
                <p class="inter-thin"><?php echo get_field($cena_szczegoly2_field_desktop); ?></p>
              </div>
            </div>
          </section>
        <?php
        }
      } elseif ($counter_desktop % 2 == 1) { // Oferty wyrównane do prawej
        if (get_field($szablon1_wlwyl_field_desktop) == true) {
        ?>
          <section class="offer-section bg-secondary py-20 mb-10 relative">
            <div class="offer-content-container md:mr-16 md:ml-32 xl:ml-64 px-6 flex flex-col lg:flex-row items-start justify-between">
              <div class="text-light link_li order-1 lg:order-2 offer-text-block">
                <div class="offer-header-wrapper offer-header-right offer-header-sticky">
                  <div id="offer-head-static-desktop-<?php echo $counter_desktop; ?>" class="offer-header-static">
                    <div class="flex items-center mb-4 justify-end">
                      <h2 class="text-[1.4rem] md:text-[2.87vw] libre-baskerville-regular text-right text-balance">UNISVED<br><?php echo get_the_title(); ?></h2>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/small_c.svg" alt="C shape" class="ml-4 flex-shrink-0 w-10">
                    </div>
                    <p id="offer-p-static-desktop-<?php echo $counter_desktop; ?>" class="md:text-[1vw] mb-1 2xl:mb-4 mr-14 text-right 2xl:text-nowrap text-wrap inter-thin"><?php echo get_field($podtytul1_field_desktop) ?></p>
                    <a href="#" id="toggle-offer-desktop-<?php echo $counter_desktop; ?>" class="text-primary tracking-20 md:text-[1vw] mr-14 text-right block transition duration-200 hover:font-bold"><?php echo $read_more_text_desktop; ?></a>
                  </div>
                  <div id="offer-head-dynamic-desktop-<?php echo $counter_desktop; ?>" class="offer-header-dynamic hidden">
                    <div class="flex items-center mb-4 justify-end">
                      <h2 class="text-[1.4rem] md:text-[2.87vw] libre-baskerville-regular text-right text-balance">UNISVED<br><?php echo get_the_title(); ?></h2>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/small_c.svg" alt="C shape" class="ml-4 flex-shrink-0 w-10">
                    </div>
                    <p class="md:text-[1vw] mb-1 2xl:mb-4 mr-14 text-right 2xl:text-nowrap text-wrap inter-thin"><?php echo get_field($podtytul1_field_desktop) ?></p>
                    <a href="#" id="toggle-offer-dynamic-desktop-<?php echo $counter_desktop; ?>" class="text-primary tracking-20 md:text-[1vw] mr-14 text-right block transition duration-200 hover:font-bold"><?php echo $hide_text_desktop; ?></a>
                  </div>
                </div>
              </div>
              <div class="offer-image-container w-1/2 md:min-w-[450px] mt-8 lg:mt-0 2xl:max-w-full 2xl:min-h-full order-2 lg:order-1">
                <div class="relative md:w-auto w-[90vw] -left-20 md:left-0">
                  <?php photo_oneside_pill('left', get_the_post_thumbnail_url()); ?>
                </div>
              </div>
            </div>
            <div id="offer-details-desktop-<?php echo $counter_desktop; ?>" class="hidden mt-10 text-light px-6 md:mr-16 md:ml-64 w-1/3">
              <div class="mx-5">
                <h3 class="text-2xl mb-10 text-primary libre-baskerville-regular"><?php _e('Dla kogo:', $text_domain); ?></h3>
                <p class="mb-4 text-wrap inter-thin"><?php echo get_field($dla_kogo1_field_desktop); ?></p>
                <div class="w-[100%] h-px bg-primary my-8"></div>
                <h3 class="text-2xl text-primary mb-10 libre-baskerville-regular"><?php _e('Zakres usług:', $text_domain); ?></h3>
                 <?php 
                $polkola_content_desktop_right = get_field($zakres_uslug_polkola_field_desktop);
                if ($polkola_content_desktop_right):
                    $list_items = preg_replace('/^<ul[^>]*>(.*?)<\\/ul>$/s', '$1', $polkola_content_desktop_right);
                ?>
                <ul class="c-list list-outside mb-4 inter-thin space-y-2">
                    <?php echo $list_items; ?>
                </ul>
                <?php endif; ?>

                <?php 
                $kropki_content_desktop_right = get_field($zakres_uslug_kropki_field_desktop);
                if ($kropki_content_desktop_right):
                    $list_items = preg_replace('/^<ul[^>]*>(.*?)<\\/ul>$/s', '$1', $kropki_content_desktop_right);
                ?>
                <ul class="c-list list-outside mb-4 marker:text-primary inter-thin space-y-2">
                    <?php echo $list_items; ?>
                </ul>
                <?php endif; ?>
                <div class="w-[100%] h-px bg-primary my-8"></div>
                <h3 class="text-2xl text-primary mb-10 libre-baskerville-regular"><?php _e('Efekt:', $text_domain); ?></h3>
                <p class="mb-4 text-wrap inter-thin"><?php echo get_field($efekt1_field_desktop); ?></p>
              </div>
            </div>
          </section>
        <?php
        } elseif (get_field($szablon2_wlwyl_field_desktop) == true) {
        ?>
          <section class="offer-section bg-secondary py-20 mb-10 relative">
            <div class="offer-content-container 2xl:gap-110 md:mr-16 md:ml-64 px-6 flex flex-col lg:flex-row items-start justify-between">
              <div class="lg:w-1/3 2xl:w-1/2 text-light lg:pl-0 link_li offer-text-block <?php if (strlen(get_the_title()) > 9): echo 'lg:min-w-[430px] 2xl:min-w-[500px] md:mr-5 xl:mr-30 2xl:mr-0'; endif; ?>">
                <div class="offer-header-wrapper offer-header-sticky">
                  <div id="offer-head-static-desktop-<?php echo $counter_desktop; ?>" class="offer-header-static">
                    <div class="flex items-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class="mr-4 w-10">
                      <h2 class="text-[1.4rem] md:text-[2.87vw] libre-baskerville-regular text-balance <?php if (strlen(get_the_title()) > 9): echo 'lg:min-w-[430px] 2xl:min-w-[500px]'; endif; ?>">
                        UNISVED EKSPANSJA<br><?php echo get_the_title(); ?>
                      </h2>
                    </div>
                    <p id="offer-p-static-desktop-<?php echo $counter_desktop; ?>" class="md:text-[1vw] mb-1 2xl:mb-4 ml-14 2xl:text-nowrap inter-thin"><?php echo get_field($podtytul2_field_desktop) ?></p>
                    <a href="#" id="toggle-offer-desktop-<?php echo $counter_desktop; ?>" class="text-primary tracking-20 md:text-[1vw] ml-14 transition duration-200 hover:font-bold"><?php echo $read_more_text_desktop; ?></a>
                  </div>
                  <div id="offer-head-dynamic-desktop-<?php echo $counter_desktop; ?>" class="offer-header-dynamic hidden">
                    <div class="flex items-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class="mr-4 w-10">
                      <h2 class="text-[1.4rem] md:text-[2.87vw] libre-baskerville-regular text-balance <?php if (strlen(get_the_title()) > 9): echo 'lg:min-w-[430px] 2xl:min-w-[500px]'; endif; ?>">
                        UNISVED EKSPANSJA<br><?php echo get_the_title(); ?>
                      </h2>
                    </div>
                    <p class="md:text-[1vw] mb-1 2xl:mb-4 ml-14 2xl:text-nowrap inter-thin"><?php echo get_field($podtytul2_field_desktop) ?></p>
                    <a href="#" id="toggle-offer-dynamic-desktop-<?php echo $counter_desktop; ?>" class="text-primary tracking-20 md:text-[1vw] ml-14 transition duration-200 hover:font-bold"><?php echo $hide_text_desktop; ?></a>
                  </div>
                </div>
              </div>
              <div class="offer-image-container lg:w-1/2 md:min-w-[450px] mt-8 lg:mt-0 2xl:min-w-full 2xl:min-h-full">
                <div class="relative">
                  <?php photo_oneside_pill('left', get_the_post_thumbnail_url()); ?>
                </div>
              </div>
            </div>
            <div id="offer-details-desktop-<?php echo $counter_desktop; ?>" class="hidden mt-4 text-light">
              <h3 class="text-2xl text-primary mb-10 libre-baskerville-regular"><?php _e('Dla kogo:', $text_domain); ?></h3>
              <p class="mb-4 inter-thin"><?php echo get_field($dla_kogo2_field_desktop); ?></p>
              <div class="w-[100%] h-px bg-primary my-8"></div>
              <h3 class="text-2xl text-primary mb-10 libre-baskerville-regular"><?php _e('W skład pakietu wchodzi:', $text_domain); ?></h3>
              <?php 
              $sklad_content_desktop_right = get_field($sklad2_field_desktop);
              if ($sklad_content_desktop_right):
                  $list_items = preg_replace('/^<ul[^>]*>(.*?)<\\/ul>$/s', '$1', $sklad_content_desktop_right);
              ?>
              <ul class="c-list list-outside mb-4 marker:text-primary inter-thin space-y-2">
                  <?php echo $list_items; ?>
              </ul>
              <?php endif; ?>
              <div class="w-[100%] h-px bg-primary my-8"></div>
              <h3 class="text-2xl text-primary mb-10 libre-baskerville-regular"><?php _e('Cena i szczegóły:', $text_domain); ?></h3>
              <p class="inter-thin"><?php echo get_field($cena_szczegoly2_field_desktop); ?></p>
            </div>
          </section>
        <?php
        }
      }
      $counter_desktop++;
    }
    wp_reset_postdata();
  }
 ?>
 <section class="new-background-section slide bg-black bg-cover rounded-t-[60px] -mt-[10vh] relative z-20 py-12" style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/chmury.jpg')">
    <div class="absolute inset-0 bg-secondary opacity-50 rounded-t-[60px]"></div>
    <div class="container mx-auto flex items-center justify-center h-full text-center text-white relative z-10">
      <div class="md:mb-8">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo_biale_unisved.svg" alt="Logo" class="hidden md:block 2xl:mx-auto lg:ml-10 mb-6 w-[20vw]">
      </div>
      <h2 class="text-[8vw] md:text-[4vw] leading-tight mx-auto px-3 md:px-0 md:pl-16 libre-baskerville-regular text-left">
        <?php _e('Osiągnij sukces <br>na globalnej scenie!', $text_domain); ?>
      </h2>
    </div>
  </section>

  <section class="py-12 relative z-30 bg-secondary overflow-hidden w-full text-white rounded-t-[60px]">
    <div class="lg:mx-[2rem] 2xl:mx-[8vw] contabg-center overflow-hidden rounded-[40px] min-h-[65vh] space-y-16 md:my-20 pt-5 inter-thin">
      <?php
      double_c_pill_horizontal(
        __("Możliwość <br> łączenia pakietów", $text_domain),
        __("Oferujemy dopasowane pakiety usług dla przedsiębiorstw, które chcą rozpocząć działalność, zrealizować projekt, skutecznie sprzedawać i budować swoją pozycję w Szwecji. Każdy projekt jest inny.<br><br>Dlatego oferujemy możliwość łączenia wybranych pakietów lub stworzenia indywidualnej propozycji szytej na miarę. Skontaktuj się z nami, aby dopasować zakres usług do swoich celów w Szwecji.", $text_domain),
        'assets/big_c.svg',
        'assets/big_c_right.svg',
        'text-white'
      );
      ?>
    </div>
  </section>

 <script>
  // DESKTOP JAVASCRIPT
  document.addEventListener('DOMContentLoaded', function() {
    function initializeDesktopOfferToggles() {
      for (let i = 0; i < <?php echo $counter_desktop; ?>; i++) {
        const toggleLink = document.getElementById(`toggle-offer-desktop-${i}`);
        const toggleLinkDynamic = document.getElementById(`toggle-offer-dynamic-desktop-${i}`);
        const detailsDiv = document.getElementById(`offer-details-desktop-${i}`);
        const staticHead = document.getElementById(`offer-head-static-desktop-${i}`);
        const dynamicHead = document.getElementById(`offer-head-dynamic-desktop-${i}`);

        if (!toggleLink || !detailsDiv) continue;

        function toggleOffer(e) {
          e.preventDefault();
          const isHidden = detailsDiv.classList.contains('hidden');
          
          detailsDiv.classList.toggle('hidden');
          staticHead?.classList.toggle('hidden');
          dynamicHead?.classList.toggle('hidden');

          const readMoreText = '<?php echo $read_more_text_desktop; ?>';
          const hideText = '<?php echo $hide_text_desktop; ?>';

          toggleLink.textContent = isHidden ? hideText : readMoreText;
          if (toggleLinkDynamic) {
            toggleLinkDynamic.textContent = isHidden ? hideText : readMoreText;
          }

          if (!isHidden) { 
            setTimeout(() => {
              const offerSection = detailsDiv.closest('.offer-section');
              if (offerSection) {
                const headerOffset = 100;
                const elementPosition = offerSection.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                window.scrollTo({
                  top: offsetPosition,
                  behavior: 'smooth'
                });
              }
            }, 200);
          }
        }
        
        toggleLink.addEventListener("click", toggleOffer);
        if (toggleLinkDynamic) {
          toggleLinkDynamic.addEventListener("click", toggleOffer);
        }
      }
    }
    initializeDesktopOfferToggles();
  });
 </script>
</div>

<?php get_footer(); ?>