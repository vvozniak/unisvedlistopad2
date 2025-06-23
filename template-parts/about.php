<?php

/**
 * Template Name: Strona o nas
 */

get_header();
require_once get_template_directory() . '/template-parts/pills/photo_oneside.php';
require_once get_template_directory() . '/template-parts/pills/text_with_c.php';
require_once get_template_directory() . '/template-parts/pills/mini_pill_text.php';
require_once get_template_directory() . '/template-parts/pills/double_c_pill.php';
require_once get_template_directory() . '/template-parts/pills/icon_text_item.php';
require_once get_template_directory() . '/template-parts/pills/pill_opinion.php';

?>
<section class="bg-secondary pt-24 pb-12">
  <div class="container mx-auto">
    <div class="fixed-side-container" data-fixed-side="left">
      <!-- Left side - heading (fixed) -->
      <div class="fixed-content">
        <div class="flex items-center">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="mr-5">
          <h4 class="text-light text-[2.4rem] libre-baskerville-regular">Jak działamy?</h4>
        </div>
      </div>

      <!-- Right side - scrollable content -->
      <div class="scrollable-wrapper">
        <div class="scrollable-content">
          <?php



          text_with_c_pill(
            'left',
            'Praktyczne wsparcie,<br>realne efekty',
            'Nasze wsparcie to praktyczne działania, a nie tylko doradztwo. Pomagamy firmom wejść i działać na rynku skandynawskim lub polskim – bez zbędnych komplikacji.',
            'assets/big_c_right.svg',
            'text-white'
          );
          text_with_c_pill(
            'right',
            'Analiza i dopasowanie strategii',
            'Rozpoznajemy potrzeby firmy i dostosowujemy działania do konkretnego rynku.',
            'assets/big_c.svg',
            'text-white'
          );
          text_with_c_pill(
            'left',
            'Obsługa administracyjna<br>i operacyjna',
            'Przejmujemy formalności, rejestracje i kontakt z urzędami – Ty skupiasz się na biznesie.',
            'assets/big_c_right.svg',
            'text-white'
          );
          text_with_c_pill(
            'right',
            'Lokalne wsparcie ekspertów',
            'Zapewniamy dostęp do sprawdzonych doradców prawnych, księgowych i podatkowych.',
            'assets/big_c.svg',
            'text-white'
          );
          text_with_c_pill(
            'left',
            'Koordynacja działań<br>i relacje biznesowe',
            'Wspieramy Cię w prowadzeniu projektów i pomagamy nawiązać właściwe kontakty.',
            'assets/big_c_right.svg',
            'text-white'
          );
          photo_oneside_pill('right', 'assets/pill_photo.jpg');
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="new-background-section slide bg-black bg-[url(https://unisved.nowa.net.pl/wp-content/uploads/2025/06/beautiful-shot-pier-sea-near-tree-forest-surrounded-by-high-mountains-norway-1.png)]  bg-cover rounded-t-[60px] -mt-[10vh] relative z-20 py-12">
  <div class="absolute inset-0 bg-black opacity-50 rounded-t-[60px]"></div>
  <div class="container mx-auto flex  items-center justify-center h-full text-center text-white relative z-10">
    <div class="my-8">
      <img src="http://unisved.nowa.net.pl/wp-content/uploads/2025/06/Logo.svg" alt="Logo" class="2xl:mx-auto mb-6 w-80">
    </div>
    <h2 class="text-4xl leading-tight mx-8 libre-baskerville-regular text-left">
      Skontaktuj się z nami już dziś, <br>
      aby dowiedzieć się, jak możemy pomóc<br> 
      w rozwoju Twojego biznesu
    </h2>
  </div>
</section>

<section class="py-12 relative z-30 bg-secondary text-white">
  <div class="container mx-auto bg-center rounded-t-[40px] min-h-[80vh] px-4">
    <div class="fixed-side-container" data-fixed-side="right">

      <div class="fixed-content flex justify-end">
          <div class="flex flex-col items-end justify-center text-right">
            <h4 class="text-right text-[2.5rem] libre-baskerville-regular pe-4">Nasze wartośći</h4>
            <p class="text-right text-[1.8rem] libre-baskerville-regular pe-4">- to, co nas deifniuje</p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class=" rotate-180">
      </div>
      
      <div class="scrollable-wrapper">
        <div class="scrollable-content">
       <div>
        <?php
        $post_id = get_the_ID(); 
        icon_text_item(
          'partnerstwo.svg',
          'Partnerstwo',
          'Wierzymy w siłę relacji opartych na wzajemnym zaufaniu, szacunku i zaangażowaniu. Działamy ramię w ramię z naszymi klientami – jesteśmy nie tylko usługodawcą, ale realnym wsparciem.',
        );
        icon_text_item(
          'przejrzystosc.svg',
          'Przejrzystość',
          'Komunikujemy się jasno i uczciwie. Transparentność w działaniach to fundament każdej naszej współpracy – bez ukrytych warunków, bez niejasności.'
        );
        icon_text_item(
          'rozwoj.svg',
          'Rozwój',
          'Nie stoimy w miejscu – ani my, ani nasi klienci. Wspieramy firmy w rozwoju, bo sami też stale się doskonalimy.'
        );
        icon_text_item(
          'zrozumienie.svg',
          'Zrozumienie międzykulturowe',
          'Znamy i szanujemy różnice między Polską a Skandynawią. Nasza rola to tłumaczyć, łączyć i ułatwiać współpracę – bez nieporozumień.'
        );
         icon_text_item(
          'skutecznosc.svg',
          'Sktueczność',
          'Skupiamy się na realnych rezultatach. Działamy konkretnie i zadaniowo, tak by klienci widzieli efekty, a nie tylko proces.'
        );
        ?>
      </div>
      </div>
      </div>
    </div>
  </div>
</section>

<section class="py-12 relative z-40 bg-secondary text-white">
  <div class="container mx-auto bg-center rounded-t-[40px] min-h-[80vh] px-4">
    <div class=" flex justify-start">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="">
        <div class="ms-5 flex flex-col items-end justify-center text-right">
          <h4 class="text-right text-[2.5rem] libre-baskerville-regular pe-4">Co mówią o nas:</h4>
        </div>
    </div>
    <div class="my-12 w-full overflow-x-auto opinions-scroll cursor-grab">
      <div class="flex gap-x-4 min-w-max pt-5">
      <?php 
        photo_oneside_pill('right', 'assets/pill_photo.jpg');
        pill_opinion(
        '"Aleksandra jest bardzo zaangażowana i oddana swoim zadaniom oraz obowiązkom, co czyni ją matką chrzestną wielu projektów w Europie Północnej i Wschodniej. To dla mnie zaszczyt móc z nią współpracować."', 
        'Piotr Pukaluk', 
        'Horisontalplan AB',
        'text-gray-100',
        'border-primary'
        );
        pill_opinion(
        '"Aleksandra jest bardzo zaangażowana i oddana swoim zadaniom oraz obowiązkom, co czyni ją matką chrzestną wielu projektów w Europie Północnej i Wschodniej. To dla mnie zaszczyt móc z nią współpracować.”', 
        'Piotr Pukaluk', 
        'Horisontalplan AB',
        'text-gray-100',
        'border-primary'
        );
        pill_opinion(
        '"Aleksandra jest bardzo zaangażowana i oddana swoim zadaniom oraz obowiązkom, co czyni ją matką chrzestną wielu projektów w Europie Północnej i Wschodniej. To dla mnie zaszczyt móc z nią współpracować.”', 
        'Piotr Pukaluk', 
        'Horisontalplan AB',
        'text-gray-100',
        'border-primary'
        );
        pill_opinion(
        '"Aleksandra jest bardzo zaangażowana i oddana swoim zadaniom oraz obowiązkom, co czyni ją matką chrzestną wielu projektów w Europie Północnej i Wschodniej. To dla mnie zaszczyt móc z nią współpracować.”', 
        'Piotr Pukaluk', 
        'Horisontalplan AB',
        'text-gray-100',
        'border-primary'
        );
      ?>
      </div>
    </div>
  </div>
</section>



<?php
get_footer();
?>