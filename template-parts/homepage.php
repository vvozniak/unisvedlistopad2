<?php
/**
 * Template Name: Strona główna
 */

get_header();

// Dołączanie niezbędnych szablonów częściowych
require_once get_template_directory() . '/template-parts/pills/photo_oneside.php';
require_once get_template_directory() . '/template-parts/pills/homepage_oneside.php';
require_once get_template_directory() . '/template-parts/pills/text_with_c.php';
require_once get_template_directory() . '/template-parts/pills/mini_pill_text.php';
require_once get_template_directory() . '/template-parts/pills/double_c_pill.php';
require_once get_template_directory() . '/template-parts/pills/double_c_pill_mobile.php';
require_once get_template_directory() . '/template-parts/pills/icon_text_item.php';

// Zdefiniowanie domeny tekstowej dla tłumaczeń
$text_domain = 'unisved-theme';

// Centralne pobieranie wszystkich wartości z pól ACF do zmiennych
$post_id = get_the_ID();

// Sekcja "Dlaczego my?"
$pill_image = get_field('pill_image', $post_id);
$pill_1_title = get_field('pill_1_title', $post_id);
$pill_1_content = get_field('pill_1_content', $post_id);
$pill_2_title = get_field('pill_2_title', $post_id);
$pill_2_content = get_field('pill_2_content', $post_id);
$pill_3_title = get_field('pill_3_title', $post_id);
$pill_3_content = get_field('pill_3_content', $post_id);
$pill_4_title = get_field('pill_4_title', $post_id);
$pill_4_content = get_field('pill_4_content', $post_id);

// Sekcja "Dlaczego Skandynawia?"
$icon_1_title = get_field('icon_1_title', $post_id);
$icon_1_content = get_field('icon_1_content', $post_id);
$icon_2_title = get_field('icon_2_title', $post_id);
$icon_2_content = get_field('icon_2_content', $post_id);
$icon_3_title = get_field('icon_3_title', $post_id);
$icon_3_content = get_field('icon_3_content', $post_id);
$icon_4_title = get_field('icon_4_title', $post_id);
$icon_4_content = get_field('icon_4_content', $post_id);

// Sekcja "Unisved w pigułce"
$double_pill_1_title = get_field('double_pill_1_title', $post_id);
$double_pill_1_subtitle = get_field('double_pill_1_subtitle', $post_id);
$double_pill_2_title = get_field('double_pill_2_title', $post_id);
$double_pill_2_subtitle = get_field('double_pill_2_subtitle', $post_id);
$double_pill_3_title = get_field('double_pill_3_title', $post_id);
$double_pill_3_subtitle = get_field('double_pill_3_subtitle', $post_id);
$double_pill_4_title = get_field('double_pill_4_title', $post_id);
$double_pill_4_subtitle = get_field('double_pill_4_subtitle', $post_id);
$pill_image_1 = get_field('pill_image_1', $post_id);

// Sekcja "Jesteśmy tu by pomóc" i Kontakt
$pill_image_2 = get_field('pill_image_2', $post_id);
$pill_image_3 = get_field('pill_image_3', $post_id);

// Nowe dynamiczne pola ACF z fallbackami
// Nagłówki sekcji
$section_title_why_us = get_field('section_title_why_us', $post_id) ?: 'Dlaczego my?';
$section_title_why_scandinavia = get_field('section_title_why_scandinavia', $post_id) ?: 'Dlaczego<br>Skandynawia?';
$section_title_unisved_pill = get_field('section_title_unisved_pill', $post_id) ?: 'Unisved <br> w pigułce';
$section_title_we_are_here = get_field('section_title_we_are_here', $post_id) ?: 'Jesteśmy tu, <br> by pomóc!';

// Teksty banerów
$banner_1_text = get_field('banner_1_text', $post_id) ?: 'Od Skandynawii po rynki<br> międzynarodowe.';
$banner_2_text = get_field('banner_2_text', $post_id) ?: 'Wspólnie<br>przekroczymy granice!';

// Zdjęcia tła banerów
$banner_1_bg_image = get_field('banner_1_bg_image', $post_id) ?: get_template_directory_uri() . '/public/pomost-min.jpg';
$banner_2_bg_image = get_field('banner_2_bg_image', $post_id) ?: get_template_directory_uri() . '/public/flaga_lepsza.jpeg';

// Dane kontaktowe
$contact_name = get_field('contact_name', $post_id) ?: 'Aleksandra Gierdziejewska';
$contact_role = get_field('contact_role', $post_id) ?: 'CEO & FOUNDER';
$contact_phone_1 = get_field('contact_phone_1', $post_id) ?: '+48 602 142 949';
$contact_phone_2 = get_field('contact_phone_2', $post_id) ?: '+46 704 415 690';
$contact_email = get_field('contact_email', $post_id) ?: 'ALEKSANDRA@UNISVED.EU';

?>
<section class="bg-secondary py-12 rounded-t-[60px] relative -mt-[10vh] z-20">
  <div class=" ml-0 xl:ml-28 w-screen">
    <div class="ml-10 w-full items-center flex min-[1101px]:hidden">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="mr-5 w-[10vw]">
      <h4 class="text-light text-[2rem] libre-baskerville-regular"><?php echo wp_kses_post($section_title_why_us); ?></h4>
    </div>
    <div class="fixed-side-container" data-fixed-side="left">
      <div class="fixed-content flex-shrink-0 lg:pt-[0vw] lg:mt-[10vw] padding-left-tablet">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="mr-5 md:w-[4vw] 2xl:w-max">
        <h4 class="text-light md:text-[2.5rem] 2xl:text-[3rem] libre-baskerville-regular "><?php echo wp_kses_post($section_title_why_us); ?></h4>
      </div>

      <?php
      $leftPathURL = get_template_directory_uri() . '/assets/big_c.svg';
      $rightPathURL = get_template_directory_uri() . '/assets/big_c_right.svg';
      ?>
      <div class="hidden [@media(width<=1100px)]:flex mb-8 w-screen justify-center items-center flex-col pl-8">

            <!-- PILL DEKORACYJNY -->
            <div class="relative w-full md:w-[75%] h-[25vh] sm:h-[30vh] md:h-[40vh] xl:h-[35vh] object-cover object-center rounded-full mx-auto" 
                style="background: url(<?= esc_url($pill_image) ?>); background-size: cover; background-position: center;">
                <img src="<?= esc_url($leftPathURL) ?>" alt="C-left" class="absolute left-0 top-0 z-10 h-full">
            </div>
              
            <!-- PILL 1 -->
            <div class="relative flex justify-center items-center h-[25vh] sm:h-[30vh] md:h-[40vh] xl:h-[35vh]  my-12 w-full md:w-[75%] text-white px-[20%]
              <img src="<?= esc_url($leftPathURL) ?>" alt="c-left" class="absolute top-0 left-0 h-full opacity-0">
              <div class="flex flex-col justify-center w-full">
                <h2 class="icon-text-pill-h3 break-words tracking-widest text-[0.9rem] md:text-[1.46vw] font-bold text-light libre-baskerville-regular mb-1 min-w-[200px] md:min-w-[350px] xl:min-w-[400px] custom-min-w-1600 uppercase">
                  <?php _e('DOŚWIADCZENIE', $text_domain) ?>
                </h2>
                <p class="icon-text-pill-p text-[0.7rem] md:text-[1.08vw] text-light inter-thin">
                  <?php _e('Lata praktyki w międzynarodowej administracji biznesowej', $text_domain) ?>
                </p>
              </div>
              <img src="<?= esc_url($rightPathURL) ?>" alt="c-right" class="absolute top-0 right-0 h-full">
            </div>

            <!-- PILL 2 -->
            <div class="relative flex justify-center items-center h-[25vh] sm:h-[30vh] md:h-[40vh] xl:h-[35vh]  my-12 w-full md:w-[75%] text-white px-[20%]">
              <img src="<?= esc_url($leftPathURL) ?>" alt="c-left" class="absolute top-0 left-0 h-full">
              <div class="flex flex-col justify-center w-full">
                <h2 class="icon-text-pill-h3 break-words tracking-widest text-[0.9rem] md:text-[1.46vw] font-bold text-light libre-baskerville-regular mb-1 min-w-[200px] md:min-w-[350px] xl:min-w-[400px] custom-min-w-1600 uppercase">
                  <?php _e('INDYWIDUALNE PODEJŚCIE', $text_domain) ?>
                </h2>
                <p class="icon-text-pill-p text-[0.7rem] md:text-[1.08vw] text-light inter-thin">
                  <?php _e('Strategia dopasowana do Twoich potrzeb', $text_domain) ?>
                </p>
              </div>
              <img src="<?= esc_url($rightPathURL) ?>" alt="c-right" class="absolute top-0 right-0 h-full opacity-0">
            </div>
            
            <!-- PILL 3 -->
            <div class="relative flex justify-center items-center h-[25vh] sm:h-[30vh] md:h-[40vh] xl:h-[35vh]  my-12 w-full md:w-[75%] text-white px-[20%]">
              <img src="<?= esc_url($leftPathURL) ?>" alt="c-left" class="absolute top-0 left-0 h-full opacity-0">
              <div class="flex flex-col justify-center w-full">
                <h2 class="icon-text-pill-h3 break-words tracking-widest text-[0.9rem] md:text-[1.46vw] font-bold text-light libre-baskerville-regular mb-1 min-w-[200px] md:min-w-[350px] xl:min-w-[400px] custom-min-w-1600 uppercase">
                  <?php _e('SZEROKA SIEĆ KONTAKTÓW', $text_domain) ?>
                </h2>
                <p class="icon-text-pill-p text-[0.7rem] md:text-[1.08vw] text-light inter-thin">
                  <?php _e('Pomagamy w pozyskiwaniu klientów i nawiązywaniu wartościowych relacji biznesowych', $text_domain) ?>
                </p>
              </div>
              <img src="<?= esc_url($rightPathURL) ?>" alt="c-right" class="absolute top-0 right-0 h-full">
            </div>

            <!-- PILL 4 -->
            <div class="relative flex justify-center items-center h-[25vh] sm:h-[30vh] md:h-[40vh] xl:h-[35vh]  my-12 w-full md:w-[75%] text-white px-[20%]">
              <img src="<?= esc_url($leftPathURL) ?>" alt="c-left" class="absolute top-0 left-0 h-full">
              <div class="flex flex-col justify-center w-full">
                <h2 class="icon-text-pill-h3 break-words tracking-widest text-[0.9rem] md:text-[1.46vw] font-bold text-light libre-baskerville-regular mb-1 min-w-[200px] md:min-w-[350px] xl:min-w-[400px] custom-min-w-1600 uppercase">
                  <?php _e('EKSPERCI OD SKANDYNAWII', $text_domain) ?>
                </h2>
                <p class="icon-text-pill-p text-[0.7rem] md:text-[1.08vw] text-light inter-thin">
                  <?php _e('Znamy biznes, prawo i kulturę krajów nordyckich', $text_domain) ?>
                </p>
              </div>
              <img src="<?= esc_url($rightPathURL) ?>" alt="c-right" class="absolute top-0 right-0 h-full opacity-0">
            </div>
      </div>

      <div class="block max-[1101px]:hidden mb-24 min-[1100px]:ml-[8%] 2xl:ml-[15%] dlaczego-my">
          <div class="scrollable-wrapper-unified">
              <div class="scrollable-content-unified w-[60vw] xl:w-[55vw] 2xl:w-[40vw]">
                  <!-- PILL DEKORACYJNY -->
                  <div class="relative w-full h-[40vh] xl:h-[35vh] object-cover object-center rounded-full mx-auto" 
                      style="background: url(<?= esc_url($pill_image) ?>); background-size: cover; background-position: center;">
                      <img src="<?= esc_url($leftPathURL) ?>" alt="C-left" class="absolute left-0 top-0 z-10 h-full">
                  </div>
                    
                  <!-- PILL 1 -->
                  <div class="relative flex justify-center items-center h-[40vh] xl:h-[35vh]  my-12 w-full text-white px-[20%]
                    <img src="<?= esc_url($leftPathURL) ?>" alt="c-left" class="absolute top-0 left-0 h-full opacity-0">
                    <div class="flex flex-col justify-center w-full">
                      <h2 class="icon-text-pill-h3 break-words tracking-widest text-[0.9rem] md:text-[1.46vw] font-bold text-light libre-baskerville-regular mb-1 min-w-[200px] md:min-w-[350px] xl:min-w-[400px] custom-min-w-1600 uppercase">
                        <?php _e('DOŚWIADCZENIE', $text_domain) ?>
                      </h2>
                      <p class="icon-text-pill-p text-[0.7rem] md:text-[1.08vw] text-light inter-thin">
                        <?php _e('Lata praktyki w międzynarodowej administracji biznesowej', $text_domain) ?>
                      </p>
                    </div>
                    <img src="<?= esc_url($rightPathURL) ?>" alt="c-right" class="absolute top-0 right-0 h-full">
                  </div>

                  <!-- PILL 2 -->
                  <div class="relative flex justify-center items-center h-[40vh] xl:h-[35vh]  my-12 w-full text-white px-[20%]">
                    <img src="<?= esc_url($leftPathURL) ?>" alt="c-left" class="absolute top-0 left-0 h-full">
                    <div class="flex flex-col justify-center w-full">
                      <h2 class="icon-text-pill-h3 break-words tracking-widest text-[0.9rem] md:text-[1.46vw] font-bold text-light libre-baskerville-regular mb-1 min-w-[200px] md:min-w-[350px] xl:min-w-[400px] custom-min-w-1600 uppercase">
                        <?php _e('INDYWIDUALNE PODEJŚCIE', $text_domain) ?>
                      </h2>
                      <p class="icon-text-pill-p text-[0.7rem] md:text-[1.08vw] text-light inter-thin">
                        <?php _e('Strategia dopasowana do Twoich potrzeb', $text_domain) ?>
                      </p>
                    </div>
                    <img src="<?= esc_url($rightPathURL) ?>" alt="c-right" class="absolute top-0 right-0 h-full opacity-0">
                  </div>
                  
                  <!-- PILL 3 -->
                  <div class="relative flex justify-center items-center h-[40vh] xl:h-[35vh]  my-12 w-full text-white px-[20%]">
                    <img src="<?= esc_url($leftPathURL) ?>" alt="c-left" class="absolute top-0 left-0 h-full opacity-0">
                    <div class="flex flex-col justify-center w-full">
                      <h2 class="icon-text-pill-h3 break-words tracking-widest text-[0.9rem] md:text-[1.46vw] font-bold text-light libre-baskerville-regular mb-1 min-w-[200px] md:min-w-[350px] xl:min-w-[400px] custom-min-w-1600 uppercase">
                        <?php _e('SZEROKA SIEĆ KONTAKTÓW', $text_domain) ?>
                      </h2>
                      <p class="icon-text-pill-p text-[0.7rem] md:text-[1.08vw] text-light inter-thin">
                        <?php _e('Pomagamy w pozyskiwaniu klientów i nawiązywaniu wartościowych relacji biznesowych', $text_domain) ?>
                      </p>
                    </div>
                    <img src="<?= esc_url($rightPathURL) ?>" alt="c-right" class="absolute top-0 right-0 h-full">
                  </div>

                  <!-- PILL 4 -->
                  <div class="relative flex justify-center items-center h-[40vh] xl:h-[35vh]  my-12 w-full text-white px-[20%]">
                    <img src="<?= esc_url($leftPathURL) ?>" alt="c-left" class="absolute top-0 left-0 h-full">
                    <div class="flex flex-col justify-center w-full">
                      <h2 class="icon-text-pill-h3 break-words tracking-widest text-[0.9rem] md:text-[1.46vw] font-bold text-light libre-baskerville-regular mb-1 min-w-[200px] md:min-w-[350px] xl:min-w-[400px] custom-min-w-1600 uppercase">
                        <?php _e('EKSPERCI OD SKANDYNAWII', $text_domain) ?>
                      </h2>
                      <p class="icon-text-pill-p text-[0.7rem] md:text-[1.08vw] text-light inter-thin">
                        <?php _e('Znamy biznes, prawo i kulturę krajów nordyckich', $text_domain) ?>
                      </p>
                    </div>
                    <img src="<?= esc_url($rightPathURL) ?>" alt="c-right" class="absolute top-0 right-0 h-full opacity-0">
                  </div>
              </div>
          </div>
      </div>

      <div class="min-h-[10vh]"></div>
    </div>
</section>
<section id="video-hide-trigger" class="new-background-section slide bg-[#101820] bg-cover rounded-t-[60px] -mt-[10vh] relative z-30i py-12" style="background-image: url('<?php echo esc_url($banner_1_bg_image); ?>')">
  <div class="absolute inset-0 bg-black opacity-50 rounded-t-[60px] "></div>
  <div class=" flex items-center justify-center h-full w-screen text-center text-white relative z-10 md:pb-10">
    <div class="md:mr-8">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/logo_biale_unisved.svg" alt="logo" class="hidden md:block 2xl:mx-auto lg:ml-10 mb-6 w-80">
    </div>
    <h2 class="text-[7vw] md:text-[4.167vw] leading-tight px-3 md:px-0 md:pl-2 libre-baskerville-regular text-left text-pretty">
      <?php echo wp_kses_post($banner_1_text); ?>
    </h2>
  </div>
</section>

<section class="py-12 relative z-40i bg-secondary text-white rounded-t-[60px] dlaczego-skandynawia">
  <div class=" bg-center rounded-t-[40px] min-h-[80vh] px-4 mt-20 ">
    <div class="w-full items-center flex md:hidden ml-10 ">
      <h4 class="text-right text-[2rem] libre-baskerville-regular pe-2"><?php echo wp_kses_post($section_title_why_scandinavia); ?></h4>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class=" rotate-180 w-10">
    </div>

    <div class="fixed-side-container md:ml-28" data-fixed-side="md:right">
      <div class="scrollable-wrapper shrink-0 2xl:ml-16 md:ml-0 ml:10 xl:mr-8">
        <div class="scrollable-content">
          <div>
            <?php
            icon_text_item('gospodarka.svg', $icon_1_title, $icon_1_content, __('Ikona przedstawiająca rosnący wykres gospodarczy', $text_domain), '');
            icon_text_item('innowacyjnosc.svg', $icon_2_title, $icon_2_content);
            icon_text_item('otwartosc.svg', $icon_3_title, $icon_3_content);
            icon_text_item('przyjazne.svg', $icon_4_title, $icon_4_content);
            ?>
          </div>
        </div>
      </div>
      <div class="fixed-content flex justify-end md:mr-20 2xl:mr-50 lg:pt-[0vw] lg:mt-[10vw] ">
        <h4 class="text-right md:text-[2.5rem] 2xl:text-[3rem] libre-baskerville-regular pe-2 shrink-0 "><?php echo wp_kses_post($section_title_why_scandinavia); ?></h4>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class=" rotate-180 w-[4vw]">
      </div>
    </div>
  </div>
</section>
<section class="new-background-section slide bg-black bg-cover rounded-t-[60px] -mt-[10vh] relative z-50i py-12" style="background-image: url('<?php echo esc_url($banner_2_bg_image); ?>')">
  <div class="absolute inset-0 bg-black opacity-50 rounded-t-[60px]"></div>
  <div class=" mx-auto flex items-center justify-center h-full text-center text-white relative z-10">
    <h2 class="md:pl-[20vw] text-[7vw] md:text-[4.167vw] leading-tight mx-auto libre-baskerville-regular text-left mt-16">
      <?php echo wp_kses_post($banner_2_text); ?>
    </h2>
  </div>
</section>

<section class="py-12 relative z-60 bg-secondary text-white rounded-t-[60px]">
  <div class="bg-center rounded-[40px] min-h-[100vh] space-y-16 mt-20 xl:ml-28">

    <!-- MOBILE HEADING (centered) -->
    <div class="show-below-1100 min-[1101px]:hidden w-full mb-8">
      <div class="flex justify-center items-center text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="h-[20vw] mb-4">
        <h4 class="text-light text-[2rem] leading-none libre-baskerville-regular">
          <?php echo wp_kses_post($section_title_unisved_pill); ?>
        </h4>
      </div>
    </div>


    <!-- MAIN CONTENT CONTAINER -->
    <div class="fixed-side-container -mb-10 md:mb-0 md:mr-40 2xl:mr-64 justify-center unisved-w-pigulce" data-fixed-side="md:left">
      
      <!-- DESKTOP FIXED CONTENT -->
      <div class="fixed-content shrink-0 lg:mt-[10vw] padding-left-tablet hidden md:flex">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="mr-5">
        <h4 class="text-light md:text-[2.5rem] 2xl:text-[3rem] leading-none libre-baskerville-regular">
          <?php echo wp_kses_post($section_title_unisved_pill); ?>
        </h4>
      </div>

      <!-- SCROLLABLE WRAPPER -->
      <div class="scrollable-wrapper md:mx-0">
        <div class="overflow-hidden hidden md:flex flex-col justify-center items-center w-full text-center py-20 space-y-10">
          <?php
          double_c_pill($double_pill_1_title, $double_pill_1_subtitle, 'assets/big_c.svg', 'assets/big_c_right.svg', 'text-white');
          double_c_pill($double_pill_2_title, $double_pill_2_subtitle, 'assets/big_c.svg', 'assets/big_c_right.svg', 'text-white');
          double_c_pill($double_pill_3_title, $double_pill_3_subtitle, 'assets/big_c.svg', 'assets/big_c_right.svg', 'text-white');
          double_c_pill($double_pill_4_title, $double_pill_4_subtitle, 'assets/big_c.svg', 'assets/big_c_right.svg', 'text-white');
          ?>
          <?php if ($pill_image_1): ?>
            <div class="hidden md:block">
              <?php homepage_oneside_pill('right', $pill_image_1, 'assets/big_c.svg'); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="pt-12 relative z-70i bg-secondary text-white mt-[-10px]">
  <div class="xl:px-[10vw] flex flex-col md:flex-row w-full items-center">
    <div class="md:w-1/2 padding-left-tablet px-4">
      <?php
      if ($pill_image_2) {
        photo_oneside_pill('left', $pill_image_2);
      }
      ?>
    </div>
    <div class="flex items-center mb-12 mt-12 md:mt-0 md:w-1/2 justify-end padding-right-tablet">
      <h2 class="text-[2rem] md:text-[2.4rem] lg:text-[3rem] font-['Libre_Baskerville'] leading-tight pe-5"><?php echo wp_kses_post($section_title_we_are_here); ?></h2>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/small_c.svg" alt="C" class="w-10 md:w-12 lg:w-12 xl:w-16">
    </div>
  </div>
</section>

<section class="relative z-80i bg-secondary text-white pt-12 pb-[20vh] md:mt-[-5px]">
  <div class="xl:px-[10vw] md:pr-40 2xl:pr-64">
    <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-16">
      <div class="padding-left-tablet px-4">
        <?php
        if ($pill_image_3) {
          photo_oneside_pill('right', $pill_image_3);
        }
        ?>
      </div>

      <div class="md:w-1/2 text-right flex flex-col items-end md:mx-0 pb-10 md:pb-0 padding-right-tablet">
        <h3 class="text-[6vw] md:text-[2.3vw] libre-baskerville-regular mb-4"><?php echo esc_html($contact_name); ?></h3>
        <hr class=" border-t-2 border-primary my-6 w-2/3">
        <p class="md:text-[1.3vw] mb-8 tracking-widest"><?php echo esc_html($contact_role); ?></p>
        <div class="space-y-2">
          <p class="md:text-[1.3vw] tracking-wider"><?php echo esc_html($contact_phone_1); ?></p>
          <p class="md:text-[1.3vw] tracking-wider"><?php echo esc_html($contact_phone_2); ?></p>
          <p class="md:text-[1.3vw] uppercase tracking-wider"><?php echo esc_html($contact_email); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
</section>
<script>
// Twój skrypt JavaScript pozostaje bez zmian
document.addEventListener('DOMContentLoaded', function() {
    const triggerSection = document.getElementById('video-hide-trigger');
    if (!triggerSection) { return; }
    
    const videoElements = [
        document.getElementById('background-video'),
        document.getElementById('placeholder'),
        document.getElementById('background-image'),
        ...document.querySelectorAll('video[autoplay]'),
        ...document.querySelectorAll('header video'),
        ...document.querySelectorAll('header img[id*="background"]')
    ].filter(el => el);
    
    const uniqueVideoElements = [...new Set(videoElements)];
    if (uniqueVideoElements.length === 0) { return; }
    
    uniqueVideoElements.forEach(element => {
        element.style.transition = 'height 0.6s ease-in-out';
    });
    
    function hideVideo() {
        uniqueVideoElements.forEach(element => {
            element.style.height = '0vh';
        });
    }
    
    function showVideo() {
        uniqueVideoElements.forEach(element => {
            element.style.height = '100vh';
        });
    }
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                hideVideo();
            } else {
                showVideo();
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -10% 0px'
    });
    
    observer.observe(triggerSection);
});
</script>

<?php
get_footer();
?>