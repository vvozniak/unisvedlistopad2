<?php

/**
 * Template Name: Strona oferty
 */

get_header();
require_once get_template_directory() . '/template-parts/pills/photo_oneside.php';

?>

<!-- <section class="bg-secondary h-[90vh] relative">
  <div class="container mx-auto px-6 -top-[90vh] text-light relative z-20 flex flex-col lg:flex-row justify-between items-center">
    <div class="lg:w-2/3 mt-16">
      <h1 class="text-4xl lg:text-6xl font-bold mb-4">Zobacz w czym możemy Ci pomóc!</h1>
      <h2 class="text-2xl lg:text-3xl text-primary font-semibold mb-8">PAKIETY UNISVED</h2>
      <div class="w-24 h-1 bg-primary mb-8"></div>
      <p class="text-lg lg:text-xl">
        Kompleksowe wsparcie dla firm<br>
        wchodzących i rozwijających<br>
        działalność na rynku szwedzkim
      </p>
    </div>
    <div class="lg:w-1/3 mt-8 lg:mt-0">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/header.svg" alt="Unisved Circle" class="">
    </div>
  </div>
</section> -->

<section class="bg-secondary py-20">
  <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center justify-center">
    <div class="lg:w-1/3 text-light p-8 link_li">
      <div class="flex items-center mb-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class="h-24 mr-4">
        <h2 class="text-4xl lg:text-5xl">UNISVED<br>NA START</h2>
      </div>
      <p class="text-xl mb-4 ml-2">Bezpieczne rozpoczęcie działalności w Szwecji</p>
      <a href="#" id="toggle-offer-1" class="text-primary  text-lg ml-2">( CZYTAJ WIĘCEJ )</a>
      <div id="offer-details-1" class="hidden mt-4 text-light">
        <h3 class="text-2xl font-bold text-primary">Dla kogo:</h3>
        <p class="mb-4">Firmy planujące wejście na rynek szwedzki, które potrzebują wsparcia w formalnościach i rejestracji działalności.</p>
        <div class="w-24 h-px bg-primary my-4"></div>
        <h3 class="text-2xl font-bold text-primary">Zakres usług:</h3>
        <ul class="list-disc list-inside mb-4 marker:text-primary">
          <li class="primary">Konsultacje w wyborze optymalnej formy prowadzenia działalności w Szwecji</li>
          <li>Rejestracja firmy lub oddziału</li>
          <li>Uzyskanie numerów VAT, F-skatt oraz rejestracji podatkowej</li>
          <li>Wsparcie w otwarciu konta bankowego w Szwecji</li>
        </ul>
        <div class="w-24 h-px bg-primary my-4"></div>
        <h3 class="text-2xl font-bold text-primary">Efekt:</h3>
        <p>Działająca i zarejestrowana firma, gotowa do rozpoczęcia działalności w Szwecji.</p>
      </div>
    </div>
    <div class="lg:w-1/2 mt-8 lg:mt-0">
      <div class="relative">
        <?php
        photo_oneside_pill('right', 'assets/pill_photo.jpg'); ?>
      </div>
    </div>
  </div>
</section>

<section class="bg-secondary py-20">
  <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center justify-center">
    <div class="lg:w-1/2 mt-8 lg:mt-0">
      <div class="relative">
        <?php
        photo_oneside_pill('left', 'assets/pill_photo.jpg'); ?>
      </div>
    </div>
    <div class="lg:w-1/3 text-light p-8 link_li">
      <div class="flex items-center mb-4">
        <h2 class="text-4xl lg:text-5xl text-right">UNISVED<br>PROJEKT</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/small_c.svg" alt="C shape" class="h-24 ml-4">
      </div>
      <p class="text-xl mb-4 ml-2 text-right">Wsparcie dla firm realizujących projekty w Szwecji</p>
      <a href="#" id="toggle-offer-2" class="text-primary text-lg ml-2 text-right block">( CZYTAJ WIĘCEJ )</a>
      <div id="offer-details-2" class="hidden mt-4 text-light">
        <h3 class="text-2xl font-bold text-primary">Dla kogo:</h3>
        <p class="mb-4">Firmy, które realizują konkretny projekt w Szwecji i potrzebują lokalnego wsparcia operacyjnego oraz administracyjnego.</p>
        <div class="w-24 h-px bg-primary my-4"></div>
        <h3 class="text-2xl font-bold text-primary">Zakres usług:</h3>
        <ul class="list-disc list-inside mb-4 marker:text-primary">
          <li>Analiza projektu i szwedzkich wymagań lokalnych</li>
          <li>Organizacyjne i administracyjne wsparcie w trakcie realizacji</li>
          <li>Doradztwo strategiczne w całym okresie trwania projektu</li>
        </ul>
        <div class="w-24 h-px bg-primary my-4"></div>
        <h3 class="text-2xl font-bold text-primary">Efekt:</h3>
        <p>Bezproblemowa realizacja projektu zgodnie ze szwedzkimi przepisami i standardami.</p>
      </div>
    </div>
  </div>
</section>

<section class="bg-secondary py-20">
  <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center justify-center">
    <div class="lg:w-1/3 text-light p-8 link_li">
      <div class="flex items-center mb-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class="h-24 mr-4">
        <h2 class="text-4xl lg:text-5xl">UNISVED<br>SPRZEDAŻ</h2>
      </div>
      <p class="text-xl mb-4 ml-2">Skuteczne wprowadzenie produktów i usług na rynek szwedzki</p>
      <a href="#" id="toggle-offer-3" class="text-primary  text-lg ml-2">( CZYTAJ WIĘCEJ )</a>
      <div id="offer-details-3" class="hidden mt-4 text-light">
        <h3 class="text-2xl font-bold text-primary">Dla kogo:</h3>
        <p class="mb-4">Firmy, które mają przygotowaną strategię, gotowy produkt lub usługę i są zdecydowane rozwijać sprzedaż w Szwecji.</p>
        <div class="w-24 h-px bg-primary my-4"></div>
        <h3 class="text-2xl font-bold text-primary">Zakres usług:</h3>
        <ul class="list-disc list-inside mb-4 marker:text-primary">
          <li>Analiza rynku szwedzkiego pod kątem produktu/usługi i konkurencji</li>
          <li>Budowa bazy do 20 potencjalnych klientów (leadów)</li>
          <li>Nawiązywanie kontaktów i organizacja pierwszych rozmów handlowych</li>
          <li>Spotkania B2B z potencjalnymi klientami</li>
          <li>Przygotowanie oferty handlowej dostosowanej do oczekiwań rynku szwedzkiego (język, styl, wartości lokalne)</li>
          <li>Raport podsumowujący oraz rekomendacje dalszych działań</li>
        </ul>
        <div class="w-24 h-px bg-primary my-4"></div>
        <h3 class="text-2xl font-bold text-primary">Efekt:</h3>
        <p>Pierwsze realne rozmowy handlowe w Szwecji, gotowa baza klientów oraz profesjonalna oferta dopasowana do lokalnego rynku.</p>
      </div>
    </div>
    <div class="lg:w-1/2 mt-8 lg:mt-0">
      <div class="relative">
        <?php
        photo_oneside_pill('right', 'assets/pill_photo.jpg'); ?>
      </div>
    </div>
  </div>
</section>

<section class="bg-secondary py-20">
  <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center justify-center">
    <div class="lg:w-1/2 mt-8 lg:mt-0">
      <div class="relative">
        <?php
        photo_oneside_pill('left', 'assets/pill_photo.jpg'); ?>
      </div>
    </div>
    <div class="lg:w-1/3 text-light p-8 link_li">
      <div class="flex items-center mb-4 justify-end">
        <h2 class="text-4xl lg:text-5xl text-right">UNISVED<br>MENTORING</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/small_c.svg" alt="C shape" class="h-24 ml-4">
      </div>
      <p class="text-xl mb-4 ml-2 text-right">Strategiczne i osobiste wsparcie w prowadzeniu biznesu w Szwecji</p>
      <a href="#" id="toggle-offer-6" class="text-primary text-lg ml-2 text-right block">( CZYTAJ WIĘCEJ )</a>
      <div id="offer-details-6" class="hidden mt-4 text-light text-left">
        <h3 class="text-2xl font-bold text-primary">Dla kogo:</h3>
        <p class="mb-4">Przedsiębiorcy oraz managerowie, którzy chcą rozwijać swoją firmę oraz umiejętności działania na rynku szwedzkim.</p>
        <div class="w-24 h-px bg-primary my-4"></div>
        <h3 class="text-2xl font-bold text-primary">Zakres usług:</h3>
        <ul class="list-disc list-inside mb-4 marker:text-primary">
          <li>Indywidualny plan mentoringowy dostosowany do celów firmy i właściciela</li>
          <li>Sesje 1:1 (online lub hybrydowo)</li>
          <li>Praktyczne tematy:
            <ul class="list-disc list-inside ml-6 marker:text-primary">
              <li>budowanie i rozwijanie relacji biznesowych w Szwecji</li>
              <li>różnice kulturowe i skuteczne komunikowanie się w środowisku szwedzkim</li>
              <li>codzienne decyzje i prowadzenie działalności zgodnie ze standardami rynku</li>
              <li>rozwój osobisty i biznesowy</li>
            </ul>
          </li>
          <li>Podsumowanie każdej sesji w formie przejrzystego dokumentu PDF (podsumowanie i wskazówki)</li>
        </ul>
        <div class="w-24 h-px bg-primary my-4"></div>
        <h3 class="text-2xl font-bold text-primary">Efekt:</h3>
        <p>Lepsze zrozumienie specyfiki rynku szwedzkiego i umiejętność skuteczniejszego działania w tym środowisku.</p>
      </div>
    </div>
  </div>
</section>
<section class="bg-secondary py-20">
  <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center justify-center">
    <div class="lg:w-1/3 text-light p-8 link_li">
      <div class="flex items-center mb-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class="h-24 mr-4">
        <h2 class="text-4xl lg:text-5xl">UNISVED<br>EKSPANSJA ALL-IN-ONE</h2>
      </div>
      <p class="text-xl mb-4 ml-2">Kompleksowy pakiet dla firm, które chcą całościowo i profesjonalnie wejść na rynek szwedzki</p>
      <a href="#" id="toggle-offer-5" class="text-primary  text-lg ml-2">( CZYTAJ WIĘCEJ )</a>
      <div id="offer-details-5" class="hidden mt-4 text-light">
        <h3 class="text-2xl font-bold text-primary">Dla kogo:</h3>
        <p class="mb-4">Dla firm, które chcą powierzyć cały proces — od rejestracji, przez realizację projektów, po sprzedaż i rozwój osobisty — jednej doświadczonej firmie.</p>
        <div class="w-24 h-px bg-primary my-4"></div>
        <h3 class="text-2xl font-bold text-primary">W skład pakietu wchodzi:</h3>
        <ul class="list-disc list-inside mb-4 marker:text-primary">
          <li>UNISVED NA START</li>
          <li>UNISVED PROJEKT</li>
          <li>UNISVED SPRZEDAŻ</li>
          <li>UNISVED MENTORING</li>
        </ul>
        <div class="w-24 h-px bg-primary my-4"></div>
        <h3 class="text-2xl font-bold text-primary">Cena i szczegóły:</h3>
        <p>Ustalane indywidualnie w zależności od zakresu i potrzeb.</p>
        <div class="w-24 h-px bg-primary my-4"></div>

        <h3 class="text-2xl font-bold text-primary">Możliwość łączenia pakietów</h3>
        <p>Oferujemy dopasowane pakiety usług dla przedsiębiorstw, które chcą rozpocząć działalność, zrealizować projekt, skutecznie sprzedawać i budować swoją pozycję w Szwecji.
          Każdy projekt jest inny.
          Dlatego oferujemy możliwość łączenia wybranych pakietów lub stworzenia indywidualnej propozycji szytej na miarę.</p>
        <br>
        <p>Skontaktuj się z nami, aby dopasować zakres usług do swoich celów w Szwecji.</p>
      </div>
    </div>
    <div class="lg:w-1/2 mt-8 lg:mt-0">
      <div class="relative">
        <?php
        photo_oneside_pill('right', 'assets/pill_photo.jpg'); ?>
      </div>
    </div>
  </div>
</section>
<?php
$offers =  new WP_Query(array(
    'post_type' => 'oferta',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC'
));
if ($offers->have_posts( )){
  $counter = 8; // do zmiany po tym jak wszystkie oferty bedą postami
  while ($offers->have_posts()) {
     $offers->the_post();
    if ($counter % 2 == 0) {
      if (get_field('szablon_1_wlwyl')==true){
        ?>
        <section class="bg-secondary py-20">
  <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center justify-center">
    <div class="lg:w-1/3 text-light p-8 link_li">
      <div class="flex items-center mb-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class="h-24 mr-4">
        <h2 class="text-4xl lg:text-5xl">UNISVED<br><?php echo get_the_title( ); ?></h2>
      </div>
      <p class="text-xl mb-4 ml-2"><?php echo get_field('podtytul1') ?></p>
      <a href="#" id="toggle-offer-<?php echo $counter; ?>" class="text-primary  text-lg ml-2">( CZYTAJ WIĘCEJ )</a>
      <div id="offer-details-<?php echo $counter; ?>" class="hidden mt-4 text-light">
        <h3 class="text-2xl font-bold text-primary">Dla kogo:</h3>
        <p class="mb-4"><?php echo get_field('dla_kogo1'); ?></p>
        <div class="w-24 h-px bg-primary my-4"></div>
        <h3 class="text-2xl font-bold text-primary">Zakres usług:</h3>
        <ul class="list-disc list-inside mb-4 marker:text-primary">
          <?php echo get_field('zakres_uslug1'); ?>
        </ul>
        <div class="w-24 h-px bg-primary my-4"></div>
        <h3 class="text-2xl font-bold text-primary">Efekt:</h3>
        <p><?php echo get_field('efekt1'); ?></p>
      </div>
    </div>
    <div class="lg:w-1/2 mt-8 lg:mt-0">
      <div class="relative">
        <?php
        photo_oneside_pill('right', 'assets/pill_photo.jpg'); ?>
      </div>
    </div>
  </div>
</section>
        <?php }
        elseif (get_field('szablon_2_wlwyl')==true){
          ?>
          <section class="bg-secondary py-20">
  <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center justify-center">
    <div class="lg:w-1/3 text-light p-8 link_li">
      <div class="flex items-center mb-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class="h-24 mr-4">
        <h2 class="text-4xl lg:text-5xl">UNISVED<br><?php echo get_the_title( ); ?></h2>
      </div>
      <p class="text-xl mb-4 ml-2">Kompleksowy pakiet dla firm, które chcą całościowo i profesjonalnie wejść na rynek szwedzki</p>
      <a href="#" id="toggle-offer-<?php echo $counter; ?>" class="text-primary  text-lg ml-2">( CZYTAJ WIĘCEJ )</a>
      <div id="offer-details-<?php echo $counter; ?>" class="hidden mt-4 text-light">
        <h3 class="text-2xl font-bold text-primary">Dla kogo:</h3>
        <p class="mb-4"><?php echo get_field('dla_kogo2');?></p>
        <div class="w-24 h-px bg-primary my-4"></div>
        <h3 class="text-2xl font-bold text-primary">W skład pakietu wchodzi:</h3>
        <ul class="list-disc list-inside mb-4 marker:text-primary">
          <?php echo get_field('sklad'); ?>
        </ul>
        <div class="w-24 h-px bg-primary my-4"></div>
        <h3 class="text-2xl font-bold text-primary">Cena i szczegóły:</h3>
        <p><?php echo get_field('cena_i_szczegoly'); ?></p>
        <div class="w-24 h-px bg-primary my-4"></div>

        <h3 class="text-2xl font-bold text-primary">Możliwość łączenia pakietów</h3>
        <p><?php echo get_field('mozliwosc_laczenia_pakietow'); ?></p>
        <br>
        
      </div>
    </div>
    <div class="lg:w-1/2 mt-8 lg:mt-0">
      <div class="relative">
        <?php
        photo_oneside_pill('right', 'assets/pill_photo.jpg'); ?>
      </div>
    </div>
  </div>
</section>
<?php
        }
        $counter++;

      
      
    } elseif ($counter % 2 == 1) {
      if (get_field('szablon_1_wlwyl')==true){
        ?>
        <section class="bg-secondary py-20">
  <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center justify-center">
    <div class="lg:w-1/2 mt-8 lg:mt-0">
      <div class="relative">
        <?php
        photo_oneside_pill('left', 'assets/pill_photo.jpg'); ?>
      </div>
    </div>
    <div class="lg:w-1/3 text-light p-8 link_li">
      <div class="flex items-center mb-4">
        <h2 class="text-4xl lg:text-5xl text-right">UNISVED<br><?php echo get_the_title( );?></h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/small_c.svg" alt="C shape" class="h-24 ml-4">
      </div>
      <p class="text-xl mb-4 ml-2 text-right"><?php echo get_field('podtytul1') ?></p>
      <a href="#" id="toggle-offer-2" class="text-primary text-lg ml-2 text-right block">( CZYTAJ WIĘCEJ )</a>
      <div id="offer-details-2" class="hidden mt-4 text-light">
        <h3 class="text-2xl font-bold text-primary">Dla kogo:</h3>
        <p class="mb-4"><?php echo get_field('dla_kogo1'); ?></p>
        <div class="w-24 h-px bg-primary my-4"></div>
        <h3 class="text-2xl font-bold text-primary">Zakres usług:</h3>
        <ul class="list-disc list-inside mb-4 marker:text-primary">
          <?php echo get_field('zakres_uslug1'); ?>
        </ul>
        <div class="w-24 h-px bg-primary my-4"></div>
        <h3 class="text-2xl font-bold text-primary">Efekt:</h3>
        <p><?php echo get_field('efekt1'); ?></p>
      </div>
    </div>
  </div>
</section>
    
        <?php
        }
        elseif (get_field('szablon_2_wlwyl')==true){
          ?>
          <section class="bg-secondary py-20">
  <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center justify-center">
    <div class="lg:w-1/3 text-light p-8 link_li">
      <div class="flex items-center mb-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class="h-24 mr-4">
        <h2 class="text-4xl lg:text-5xl">UNISVED<br><?php echo get_the_title( ); ?></h2>
      </div>
      <p class="text-xl mb-4 ml-2">Kompleksowy pakiet dla firm, które chcą całościowo i profesjonalnie wejść na rynek szwedzki</p>
      <a href="#" id="toggle-offer-<?php echo $counter; ?>" class="text-primary  text-lg ml-2">( CZYTAJ WIĘCEJ )</a>
      <div id="offer-details-<?php echo $counter; ?>" class="hidden mt-4 text-light">
        <h3 class="text-2xl font-bold text-primary">Dla kogo:</h3>
        <p class="mb-4"><?php echo get_field('dla_kogo2');?></p>
        <div class="w-24 h-px bg-primary my-4"></div>
        <h3 class="text-2xl font-bold text-primary">W skład pakietu wchodzi:</h3>
        <ul class="list-disc list-inside mb-4 marker:text-primary">
          <?php echo get_field('sklad'); ?>
        </ul>
        <div class="w-24 h-px bg-primary my-4"></div>
        <h3 class="text-2xl font-bold text-primary">Cena i szczegóły:</h3>
        <p><?php echo get_field('cena_i_szczegoly'); ?></p>
        <div class="w-24 h-px bg-primary my-4"></div>

        <h3 class="text-2xl font-bold text-primary">Możliwość łączenia pakietów</h3>
        <p><?php echo get_field('mozliwosc_laczenia_pakietow'); ?></p>
        
      </div>
    </div>
    <div class="lg:w-1/2 mt-8 lg:mt-0">
      <div class="relative">
        <?php
        photo_oneside_pill('left', 'assets/pill_photo.jpg'); ?>
      </div>
    </div>
  </div>
</section>
          <?php
        }
        
        $counter++;
        
      
      
    }
  }
}

?>
<script>
  for (let i = 1; i <= <?php echo $counter; ?>; i++) {
    const toggleLink = document.getElementById(`toggle-offer-${i}`);
    const detailsDiv = document.getElementById(`offer-details-${i}`);

    if (toggleLink && detailsDiv) {
      toggleLink.addEventListener("click", (e) => {
        e.preventDefault();
        const isHidden = detailsDiv.classList.toggle("hidden");
        if (isHidden) {
          toggleLink.textContent = "( CZYTAJ WIĘCEJ )";
        } else {
          toggleLink.textContent = "( SCHOWAJ )";
        }
      });
    }
  }
  </script>
<?php
get_footer();
?>