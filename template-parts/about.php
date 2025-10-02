<?php
/** * Template Name: Strona o nas */
get_header();

require_once get_template_directory() . '/template-parts/pills/photo_oneside.php';
require_once get_template_directory() . '/template-parts/pills/text_with_c.php';
require_once get_template_directory() . '/template-parts/pills/mini_pill_text.php';
require_once get_template_directory() . '/template-parts/pills/double_c_pill.php';
require_once get_template_directory() . '/template-parts/pills/icon_text_item.php';
require_once get_template_directory() . '/template-parts/pills/pill_opinion.php';

// Definiujemy nazwę domeny tekstowej dla tłumaczeń
$text_domain = 'unisved-theme';

$scrolling_heading1 = get_field('scrolling_heading1');
$scrolling_heading2 = get_field('scrolling_heading2');
$scrolling_heading_sub = get_field('scrolling_heading_sub');
$pill_title1 = get_field('pill_title1');
$pill_text1 = get_field('pill_text1');
$pill_title2 = get_field('pill_title2');
$pill_text2 = get_field('pill_text2');
$pill_title3 = get_field('pill_title3');
$pill_text3 = get_field('pill_text3');
$pill_title4 = get_field('pill_title4');
$pill_text4 = get_field('pill_text4');
$pill_title5 = get_field('pill_title5');
$pill_text5 = get_field('pill_text5');
$pill_photo = get_field('pill_photo');
$pill_2_title1 = get_field('pill_2_title1');
$pill_2_text1 = get_field('pill_2_text1');
$pill_2_title2 = get_field('pill_2_title2');
$pill_2_text2 = get_field('pill_2_text2');
$pill_2_title3 = get_field('pill_2_title3');
$pill_2_text3 = get_field('pill_2_text3');
$pill_2_title4 = get_field('pill_2_title4');
$pill_2_text4 = get_field('pill_2_text4');
$pill_2_title5 = get_field('pill_2_title5');
$pill_2_text5 = get_field('pill_2_text5');
$text_on_baner = get_field('text_on_baner');
$opinion_photo_pill = get_field('opinion_photo_pill');
$opinion_text1 = get_field('opinion_text1');
$opinion_text2 = get_field('opinion_text2');
$opinion_text3 = get_field('opinion_text3');
$opinion_text4 = get_field('opinion_text4');
$opinion_signature1 = get_field('opinion_signature1');
$opinion_signature2 = get_field('opinion_signature2');
$opinion_signature3 = get_field('opinion_signature3');
$opinion_signature4 = get_field('opinion_signature4');
$slide_bg = get_field('slide_bg');
?>

<style>
  .icon-text-pill-p {
    white-space: pre-line;
    text-wrap: wrap;
  }
  
  /* Custom klasa dla scrollable-wrapper breakpointów */
  /* Breakpoint 1: 768px do 1280px */
  @media (min-width: 768px) and (max-width: 1280px) {
    .scrollable-wrapper-custom {
      margin-right: 6rem !important; /* mr-24 */
    }
  }

  /* Breakpoint 2: 1440px do 1536px */
  @media (min-width: 1440px) and (max-width: 1536px) {
    .scrollable-wrapper-custom {
      margin-right: 10rem !important; /* mr-40 */
    }
  }

  /* Breakpoint 3: od 1536px wzwyż (oryginalny) */
  @media (min-width: 1536px) {
    .scrollable-wrapper-custom {
      margin-right: 16rem !important; /* mr-64 */
    }
  }
  /* POPRAWIONE - Zmniejszenie obrazka na laptopach BEZ psucia obramówki */
@media (min-width: 1000px) and (max-width: 1600px) {
  /* Zmniejszamy tylko główny kontener, nie ruszając wewnętrznych elementów */
  .max700pxpill {
    transform: scale(0.8) !important;
    transform-origin: center !important;
  }
  
  /* Alternatywnie - jeśli transform nie działa, użyj tego: */
  .pill-container,
  .pill-opinion-container {
    width: 80% !important;
    max-width: 512px !important;
    margin: 0 auto !important;
    /* ZACHOWUJEMY wszystkie inne właściwości bez zmian */
    aspect-ratio: 1.8 / 1 !important;
  }
  
  /* Upewniamy się, że obramówka i dekoracje pozostają nietknięte */
  .pill-container::before,
  .pill-container::after,
  .pill-opinion-container::before,
  .pill-opinion-container::after {
    /* Zachowujemy wszystkie pseudo-elementy */
    content: inherit !important;
    position: inherit !important;
    width: inherit !important;
    height: inherit !important;
    background: inherit !important;
    border-radius: inherit !important;
  }
}

/* Bardziej delikatne podejście dla różnych rozmiarów */
@media (min-width: 1000px) and (max-width: 1200px) {
  .max700pxpill {
    transform: scale(0.75) !important;
  }
}

@media (min-width: 1200px) and (max-width: 1400px) {
  .max700pxpill {
    transform: scale(0.8) !important;
  }
}

@media (min-width: 1400px) and (max-width: 1600px) {
  .max700pxpill {
    transform: scale(0.85) !important;
  }
}
</style>

<section class="bg-secondary rounded-t-[60px] -mt-[10vh] relative pt-[20vh] pb-12 z-30i">
  <div class=" xl:ml-28 w-screen">
    <!-- jak działamy mobile -->
    <div class="flex items-center justify-start w-full md:hidden ml-8 md:ml-0 ">
      <div class="flex items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="mr-5 h-[20vw] md:h-auto">
        <h4 class="text-light text-[6vw] libre-baskerville-regular"><?php echo $scrolling_heading1; ?></h4>
      </div>
    </div>
    
    <div class="fixed-side-container ml-15 md:ml-0" data-fixed-side="left">
      <!-- Left side - heading (fixed) -->
      <!-- jak działamy pc -->
      <div class="fixed-content flex-shrink-0 mt-[10vh] padding-left-tablet">
    <div class="flex items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="mr-5 md:w-[4vw] 2xl:w-max">
        <h4 class="text-light md:text-[2.5rem] 2xl:text-[3rem] libre-baskerville-regular"><?php echo $scrolling_heading1; ?></h4>
    </div>
</div>

<div class="hidden md:block mb-24 md:ml-[8%] 2xl:ml-[15%] dlaczego-my">
        <div class="scrollable-wrapper-unified">
          <div class="scrollable-content-unified">
            
            <!-- STATYCZNE PILLE -->

            <!-- PILL 1 -->
            <div class="relative flex items-center my-16 rounded-full overflow-hidden w-[880px] h-[489px] max-w-full mx-auto">
              <!-- Right C -->
              <div class="absolute right-0 top-1/2 -translate-y-1/2 h-full z-10 ">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/big_c_right.svg" alt="" class="h-full object-contain">
              </div>
              <!-- Text -->
              <div class="relative z-20 h-full mx-auto flex flex-col justify-center text-white" style="width: calc(100% - 2 * 8rem);">
                <h2 class="text-left tracking-[0.1em] text-[2.3vh] md:text-[1.46vw] font-bold mb-2 libre-baskerville-regular uppercase">
                  <?php _e( 'Praktyczne wsparcie, realne efekty', 'unisved-theme' ); ?>
                </h2>
                <p class="text-left text-[2.3vw] md:text-[1.05vw] inter-regular">
                  <?php _e( 'Nasze wsparcie to praktyczne działania, a nie tylko doradztwo. Pomagamy firmom wejść i działać na rynku skandynawskim lub polskim – bez zbędnych komplikacji.', 'unisved-theme' ); ?>
                </p>
              </div>
            </div>

            <!-- PILL 2 -->
            <div class="relative flex items-center my-16 rounded-full overflow-hidden w-[880px] h-[489px] max-w-full mx-auto">
              <!-- Left C -->
              <div class="absolute left-0 top-1/2 -translate-y-1/2 h-full z-10 ">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/big_c.svg" alt="" class="h-full object-contain">
              </div>
              <!-- Text -->
              <div class="relative z-20 h-full mx-auto flex flex-col justify-center text-white" style="width: calc(100% - 2 * 8rem);">
                <h2 class="text-left tracking-[0.1em] text-[2.3vh] md:text-[1.46vw] font-bold mb-2 libre-baskerville-regular uppercase">
                  <?php _e( 'Analiza i dopasowanie strategii', 'unisved-theme' ); ?>
                </h2>
                <p class="text-left text-[2.3vw] md:text-[1.05vw] inter-regular">
                  <?php _e( 'Rozpoznajemy potrzeby firmy i dostosowujemy działania do konkretnego rynku.', 'unisved-theme' ); ?>
                </p>
              </div>
            </div>

            <!-- PILL 3 -->
            <div class="relative flex items-center my-16 rounded-full overflow-hidden w-[880px] h-[489px] max-w-full mx-auto">
              <!-- Right C -->
              <div class="absolute right-0 top-1/2 -translate-y-1/2 h-full z-10 ">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/big_c_right.svg" alt="" class="h-full object-contain">
              </div>
              <!-- Text -->
              <div class="relative z-20 h-full mx-auto flex flex-col justify-center text-white" style="width: calc(100% - 2 * 8rem);">
                <h2 class="text-left tracking-[0.1em] text-[2.3vh] md:text-[1.46vw] font-bold mb-2 libre-baskerville-regular uppercase">
                  <?php _e( 'Obsługa administracyjna i operacyjna', 'unisved-theme' ); ?>
                </h2>
                <p class="text-left text-[2.3vw] md:text-[1.05vw] inter-regular">
                  <?php _e( 'Przejmujemy formalności, rejestracje i kontakt z urzędami – Ty skupiasz się na biznesie.', 'unisved-theme' ); ?>
                </p>
              </div>
            </div>
            
            <!-- PILL 4 -->
            <div class="relative flex items-center my-16 rounded-full overflow-hidden w-[880px] h-[489px] max-w-full mx-auto">
              <!-- Left C -->
              <div class="absolute left-0 top-1/2 -translate-y-1/2 h-full z-10 ">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/big_c.svg" alt="" class="h-full object-contain">
              </div>
              <!-- Text -->
              <div class="relative z-20 h-full mx-auto flex flex-col justify-center text-white" style="width: calc(100% - 2 * 8rem);">
                <h2 class="text-left tracking-[0.1em] text-[2.3vh] md:text-[1.46vw] font-bold mb-2 libre-baskerville-regular uppercase">
                  <?php _e( 'Lokalne wsparcie ekspertów', 'unisved-theme' ); ?>
                </h2>
                <p class="text-left text-[2.3vw] md:text-[1.05vw] inter-regular">
                  <?php _e( 'Zapewniamy dostęp do sprawdzonych doradców prawnych, księgowych i podatkowych.', 'unisved-theme' ); ?>
                </p>
              </div>
            </div>
            
            <!-- PILL 5 -->
            <div class="relative flex items-center my-16 rounded-full overflow-hidden w-[880px] h-[489px] max-w-full mx-auto">
              <!-- Right C -->
              <div class="absolute right-0 top-1/2 -translate-y-1/2 h-full z-10 ">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/big_c_right.svg" alt="" class="h-full object-contain">
              </div>
              <!-- Text -->
              <div class="relative z-20 h-full mx-auto flex flex-col justify-center text-white" style="width: calc(100% - 2 * 8rem);">
                <h2 class="text-left tracking-[0.1em] text-[2.3vh] md:text-[1.46vw] font-bold mb-2 libre-baskerville-regular uppercase">
                  <?php _e( 'Koordynacja działań i relacje biznesowe', 'unisved-theme' ); ?>
                </h2>
                <p class="text-left text-[2.3vw] md:text-[1.05vw] inter-regular">
                  <?php _e( 'Wspieramy Cię w prowadzeniu projektów i pomagamy nawiązać właściwe kontakty.', 'unisved-theme' ); ?>
                  </p>
              </div>
            </div>
            <div class="block">
              <!-- PILL DEKORACYJNY -->
              <div class="pill-wyrownanie pill-photo-oneside relative overflow-hidden rounded-full flex items-center justify-center w-[880px] h-[489px] max-w-full mx-auto">
                <div class="absolute left-0 top-0 h-full z-10 flex items-center ">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/big_c.svg" alt="" class="h-full w-auto">
                </div>
                <img src="<?php echo esc_url($pill_photo); ?>" alt="" class="w-full h-full object-cover object-center">
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
      
    <!-- OBRAZEK NA MOBILE - POZA SCROLLABLE-WRAPPER (JAK BYŁO WCZEŚNIEJ) -->
    <div class="md:hidden my-6 px-4">
      <?php
      photo_oneside_pill('right', $pill_photo, 'assets/big_c.svg', 'max700pxpill');
      ?>
    </div>
    
    <div class="h-[10vh]"></div>
  </div>
</section>

<section class="new-background-section rounded-t-[60px] slide bg-black bg-cover  -mt-[10vh] relative z-40i py-12" style="background-image: url('<?php echo $slide_bg ?>')">
  <div class="absolute inset-0 bg-secondary opacity-50 "></div>
  <div class="  flex  items-center justify-center h-full text-center text-white relative z-10">
    <div class="my-8 hidden md:block">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/logo_biale_unisved.svg" alt="Logo" class=" mb-6 lg:w-[20vw] md:ml-[10vw] 2xl:w-[30vw] ">
    </div>
    <h2 class="md:text-[3vw] text-[8vw] leading-tight mx-8 libre-baskerville-regular text-left ml-[13vw] mr-[5vw] 2xl:ml-[15vw]  2xl:text-[3vw]">
      <?php echo $text_on_baner; ?>
    </h2>
  </div>
</section>

<section class="py-12 relative z-50i bg-secondary text-white rounded-t-[60px] nasze-wartosci">
  <div class=" md:ms-20 2xl:ms-48 md:me-28 bg-center rounded-t-[60px] min-h-[80vh] px-4">
    <div class="w-full items-center flex md:hidden ml-10 ">
      <div class="flex-col">
        <h4 class="text-right text-[2rem] libre-baskerville-regular pe-2"><?php echo $scrolling_heading2; ?></h4>
        <p class="text-right text-[1.2rem] md:text-[2.1vw] libre-baskerville-regular pe-4"><?php echo $scrolling_heading_sub; ?></p>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class=" rotate-180 w-10 md:w-6">
    </div>
    
    <div class="fixed-side-container" data-fixed-side="md:right">
      <div class="scrollable-wrapper text-wrap  md:ml-0">
        <div class="scrollable-content">
          <div>
            <?php
            $post_id = get_the_ID();
            icon_text_item(
              'partnerstwo.svg',
              $pill_2_title1,
              $pill_2_text1
            );
            icon_text_item(
              'przejrzystosc.svg',
              $pill_2_title2,
              $pill_2_text2
            );
            icon_text_item(
              'rozwoj.svg',
              $pill_2_title3,
              $pill_2_text3
            );
            icon_text_item(
              'zrozumienie.svg',
              $pill_2_title4,
              $pill_2_text4
            );
            icon_text_item(
              'skutecznosc.svg',
              $pill_2_title5,
              $pill_2_text5
            );
            ?>
          </div>
        </div>
      </div>
      
      <div class="fixed-content flex justify-end lg:mt-[15vh]">
        <div class="flex flex-col items-end justify-center text-right ">
          <h4 class="text-right text-[2.88vw] libre-baskerville-regular pe-4"><?php echo $scrolling_heading2; ?></h4>
          <p class="text-right text-[1.8rem] md:text-[2.1vw] libre-baskerville-regular pe-4"><?php echo $scrolling_heading_sub; ?></p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class=" rotate-180 w-[4vw]">
      </div>
    </div>
  </div>
</section>

<section class="py-12 -mt-12 relative z-60i bg-secondary text-white" style="isolation: isolate;">
  <!-- Add this div to ensure complete background coverage -->
  <div class="absolute inset-0 bg-secondary w-full h-full"></div>
  <div class="container mx-auto md:mx-28 bg-center rounded-t-[40px] min-h-[20vh] px-4 relative">
    <div class=" flex justify-start">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="w-10 md:w-[4vw] 2xl:w-[5vw] mr-4">
      <div class="ms-5 flex flex-col items-end justify-center  text-right">
        <h4 class="text-right text-[2rem] md:text-[3vw] libre-baskerville-regular pe-4"><?php _e('Co mówią o nas:', $text_domain); ?></h4>
      </div>
    </div>
  </div>
  
  <div class="my-12 pb-12 w-full overflow-x-auto opinions-scroll cursor-grab mb-20 px-4 md:pl-47">
    <div class="flex gap-x-4 min-w-max pt-5">
      <?php
      photo_oneside_pill('right', $opinion_photo_pill, 'assets/big_c.svg', 'pill-opinion-container');
      pill_opinion(
        $opinion_text1,
        $opinion_signature1,
        '',
        'text-gray-100',
        'border-primary'
      );
      pill_opinion(
        $opinion_text2,
        $opinion_signature2,
        '',
        'text-gray-100',
        'border-primary'
      );
      pill_opinion(
        $opinion_text3,
        $opinion_signature3,
        '',
        'text-gray-100',
        'border-primary'
      );
      pill_opinion(
        $opinion_text4,
        $opinion_signature4,
        '',
        'text-gray-100',
        'border-primary'
      );
      ?>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('🎯 Section-based video control started');
    
    // Znajdź sekcję trigger
    const triggerSection = document.getElementById('video-hide-trigger');
    
    if (!triggerSection) {
        console.error('❌ Trigger section not found! Make sure you added id="video-hide-trigger"');
        return;
    }
    
    console.log('✅ Trigger section found:', triggerSection);
    
    // Znajdź elementy video (uniwersalny sposób)
    const videoElements = [
        document.getElementById('background-video'),
        document.getElementById('placeholder'),
        document.getElementById('background-image'),
        ...document.querySelectorAll('video[autoplay]'),
        ...document.querySelectorAll('header video'),
        ...document.querySelectorAll('header img[id*="background"]')
    ].filter(el => el !== null && el !== undefined);
    
    // Usuń duplikaty
    const uniqueVideoElements = [...new Set(videoElements)];
    
    console.log('🎬 Found video elements:', uniqueVideoElements.length);
    uniqueVideoElements.forEach((el, i) => {
        console.log(`   ${i}: ${el.tagName}#${el.id}`);
    });
    
    if (uniqueVideoElements.length === 0) {
        console.error('❌ No video elements found!');
        return;
    }
    
    // Dodaj smooth transitions
    uniqueVideoElements.forEach(element => {
        element.style.transition = 'height 0.6s ease-in-out';
    });
    
    // Funkcje kontroli video
    function hideVideo() {
        uniqueVideoElements.forEach(element => {
            element.style.height = '0vh';
        });
        console.log('🙈 Video hidden - trigger section is visible');
    }
    
    function showVideo() {
        uniqueVideoElements.forEach(element => {
            element.style.height = '100vh';
        });
        console.log('👁️ Video shown - trigger section is not visible');
    }
    
    // Intersection Observer - wykrywa kiedy sekcja wchodzi w viewport
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            console.log('📊 Trigger section intersection:', {
                isIntersecting: entry.isIntersecting,
                intersectionRatio: entry.intersectionRatio,
                boundingRect: entry.boundingClientRect.top
            });
            
            if (entry.isIntersecting) {
                // Sekcja jest widoczna - ukryj video
                hideVideo();
            } else {
                // Sekcja nie jest widoczna - pokaż video
                showVideo();
            }
        });
    }, {
        // OPCJE INTERSECTION OBSERVER:
        threshold: 0.1,           // Uruchom gdy 10% sekcji jest widoczne
        rootMargin: '0px 0px -10% 0px'  // Dodaj margines - uruchom wcześniej
    });
    
    // Zacznij obserwować sekcję
    observer.observe(triggerSection);
    console.log('👀 Started observing trigger section');
    
    // Test functions
    window.testHideVideo = hideVideo;
    window.testShowVideo = showVideo;
    
    window.testTriggerSection = function() {
        console.log('🧪 Testing trigger section detection...');
        triggerSection.scrollIntoView({ behavior: 'smooth' });
    };
    
    console.log('✅ Section-based script loaded!');
    console.log('💡 Commands: testHideVideo(), testShowVideo(), testTriggerSection()');
});
</script>

<?php
get_footer();
?>