<?php

/**
 * Template Name: Strona projektowa
 */

get_header();
require_once get_template_directory() . '/template-parts/pills/photo_oneside.php';
require_once get_template_directory() . '/template-parts/pills/text_with_c.php';
require_once get_template_directory() . '/template-parts/pills/text_with_c_small.php';

$slide_bg = get_field('slide_bg');
?>

<style>
  @media (max-width:768px) {
    .mobile-full-width {
      max-width: 100%;

    }
  }
</style>

<!-- For the main heading section -->
<section class="bg-secondary text-light py-12 md:py-24 relative rounded-t-[60px] -mt-[3vh] z-20">
  <div class=" md:ml-28 px-4">
    <!-- Mobile-only heading -->
    <div class="block md:hidden text-center mb-4">
      <div class="flex justify-center items-center">
        <div>
          <h1 class="text-xl font-bold">Horisontal Holding AB</h1>
          <p class="text-lg mt-2">Skuteczny rozwój trzech firm w ramach jednego holdingu</p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="w-16 h-auto ml-4">
      </div>
    </div>

    <!-- Hide this entire block on mobile -->
    <div class="hidden md:flex  fixed-side-container  justify-end w-full" data-fixed-side="md:left">
      <div class="fixed-content shrink-0 items-center mb-12 md:mb-24">
        <div class="md:flex flex-col md:flex-row md:items-start libre-baskerville-regular block">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="w-[1vw] md:w-12 2xl:w-24 h-auto mr-0 md:mr-8"></img>
          <div>
            <h1 class="text-[3vw] leading-tight text-center md:text-left libre-baskerville-regular">Horisontal <br> Holding AB</h1>
            <p class="text-[2vw] mt-2 md:mt-4 text-center md:text-left">Skuteczny rozwój trzech firm <br>w ramach jednego holdingu</p>
          </div>
        </div>
      </div>
      <!-- <div class="speacer 2xl:mr-100"></div> -->
      <div class=" scrollable-wrapper mobile-full-width  shrink-0 md:pr-20 2xl:pr-64">
        <div class="scrollable-content">
          <div class="md:text-[1.2vw] text-[6vw]" style="margin-bottom: 12.5rem;">
            <p>W ciągu ostatnich kilku lat Unisved skutecznie wsparło rozwój Horisontal Holding AB, budując od podstaw trzy uzupełniające się firmy działające w sektorze budowlanym i inżynieryjnym. Nasze działania objęły pełne wsparcie – od rejestracji firm i aspektów prawnych, przez budowę struktur i wdrożenie systemów zarządzania, po strategię sprzedaży, pozyskiwanie klientów i optymalizację procesów dostosowanych do rynków skandynawskich.</p>
          </div>



          <div>
            <h2 class="text-[8vw] md:text-[2.2vw] libre-baskerville-regular mb-8">Firmy wchodzące <br>w skład holdingu:</h2>
            <ul class="space-y-6">
              <li class="flex items-start">
                <div class="2xl:w-7 2xl:h-7 md:w-5 md:h-5 bg-primary rounded-full mt-4 mr-6 flex-shrink-0"></div>
                <div>
                  <p class="font-bold md:text-[1.9vw] libre-baskerville-regular ">Horisontalplan AB (2018)</p>
                  <p class=" md:text-[1.1vw]">geodezja, pomiary inżynieryjne dla sektora budowlanego</p>
                </div>
              </li>
              <li class="flex items-start">
                <div class="2xl:w-7 2xl:h-7 md:w-5 md:h-5 bg-primary rounded-full mt-4 mr-6 flex-shrink-0"></div>
                <div>
                  <p class="font-bold  md:text-[1.9vw] libre-baskerville-regular">Horisontal AB (2020)</p>
                  <p class=" md:text-[1.1vw]">budownictwo, projekty infrastrukturalne i drogowe</p>
                </div>
              </li>
              <li class="flex items-start">
                <div class="2xl:w-7 2xl:h-7 md:w-5 md:h-5 bg-primary rounded-full mt-4 mr-6 flex-shrink-0"></div>
                <div>
                  <p class="font-bold  md:text-[1.9vw] libre-baskerville-regular">SMP Bygg (2021)</p>
                  <p class=" md:text-[1.1vw]">prace taborowe i zbrojeniowe dla infrastruktury</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="flex justify-center items-center">
            <div class=" rounded-[5rem] md:py-12 md:px-20 inline-block relative">
              <?php
              $photos = [
                ['image' => get_template_directory_uri() . '/assets/smpbygg.png', 'side' => 'right'],
                ['image' => get_template_directory_uri() . '/assets/horisontalplan.jpg', 'side' => 'left'],
                ['image' => get_template_directory_uri() . '/assets/horisontalab.jpg', 'side' => 'right']
              ];

              // Add JavaScript for auto-rotation
              echo '<div id="photo-carousel">';
              foreach ($photos as $index => $photo) {
                $visibility = ($index === 0) ? '' : 'hidden';
                echo '<div class="carousel-item ' . $visibility . '" data-index="' . $index . '">';
                photo_oneside_pill($photo['side'], $photo['image']);
                echo '</div>';
              }
              echo '</div>';

              // Add inline JavaScript for rotation
              echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                  const items = document.querySelectorAll("#photo-carousel .carousel-item");
                  let currentIndex = 0;
                  
                  setInterval(() => {
                  items[currentIndex].classList.add("hidden");
                  currentIndex = (currentIndex + 1) % items.length;
                  items[currentIndex].classList.remove("hidden");
                  }, 2500); // Change every 2,5 seconds
                });
                </script>';
              ?>
            </div>
          </div>


          <div class="text-center mb-16">
            <div class="border-t-2 border-primary w-full max-w-[33rem] mx-auto"></div>
            <h2 class="md:text-[2.5vw] 2xl:text-[1.9vw] py-10 text-primary libre-baskerville-regular">Efekty mówią same za siebie:</h2>
            <div class="border-t-2 border-primary w-full max-w-[33rem] mx-auto"></div>
          </div>

          <div class="max-w-3xl mx-auto">
            <?php
            text_with_c_pill_small(
              'right',
              '3 SPÓŁKI ZAREJESTROWANE<br> I ROZWINIĘTE',
              'w mniej niż 3 lata',
              'assets/small_c.svg',
              'text-light'
            );
            text_with_c_pill_small(
              'right',
              'PONAD 50',
              'zrealizowanych projektów',
              'assets/small_c.svg',
              'text-light'
            );
            text_with_c_pill_small(
              'right',
              '120 + PRACOWNIKÓW',
              'zatrudnionych w strukturach holdingu',
              'assets/small_c.svg',
              'text-light'
            );
            text_with_c_pill_small(
              'right',
              'ŚREDNI WZROST<br> PRZYCHODÓW O PONAD 200%',
              'w ciągu ostatnich kilku lat',
              'assets/small_c.svg',
              'text-light'
            );
            text_with_c_pill_small(
              'right',
              'OBECNOŚĆ NA 5 RYNKACH EUROPEJSKICH:',
              'Szwecja, Norwegia, Dania, Niemcy oraz Polska',
              'assets/small_c.svg',
              'text-light'
            ); ?>
            <div class="h-[10vh]"></div>
            <?php
            photo_oneside_pill('right', 'assets/project-pill-photo.png');
            ?>
          </div>
        </div>
      </div>



    </div>
  </div>
</section>
<section class="new-background-section slide  bg-cover rounded-t-[60px] -mt-[10vh] relative z-20 py-12" style="background-image: url('<?php echo $slide_bg ?>')">
  <div class="flex  items-center justify-center h-full w-full text-center text-white relative z-10">
    <div class="hidden md:block my-8">
      <img src="https://unisved.nowa.net.pl/wp-content/uploads/2025/06/Logo.svg" alt="Logo" class="2xl:mx-auto mb-6 w-80">
    </div>
    <h2 class="text-[5.2vw] md:text-[2.4vw] leading-tight mx-8 libre-baskerville-regular text-left">
      Skontaktuj się z nami już dziś, <br>
      aby dowiedzieć się, jak możemy pomóc<br>
      w rozwoju Twojego biznesu
    </h2>
  </div>
</section>
<section class="py-12 relative z-30 bg-secondary text-white">
  <div class=" 2xl:ml-28 lg:ml-20 px-4 md:mr-20">

    <?php
    $projects = new WP_Query(array(
      'post_type' => 'projekt',
      'posts_per_page' => -1,
      'post_status' => 'publish',
      'orderby' => 'menu_order',
      'order' => 'ASC',
    ));

    if ($projects->have_posts()) :
      $counter = 0;
      while ($projects->have_posts()) : $projects->the_post();
        if ($counter % 2 == 0) { ?>
          <div class="flex flex-row md:hidden">
            <div class=" flex flex-row md:flex-row md:justify-end ">
              <div class="flex flex-col items-center md:items-end justify-center text-center md:text-right w-[90vw]">
                <h4 class="whitespace-wrap 2xl:whitespace-normal text-[1.2rem] md:text-[2.5rem] libre-baskerville-regular pe-0 md:pe-4"><?php echo get_the_title(); ?></h4>
                <p class="text-[1rem] md:text-[1.8rem] libre-baskerville-regular pe-0 md:pe-4"><?php echo get_field('podtytul'); ?></p>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="rotate-180 mt-4 md:mt-0 w-[15vw]">
            </div>
          </div>
          <div class="fixed-side-container" data-fixed-side="right">


            <div class="fixed-content flex flex-col md:flex-row md:justify-end">
              <div class="flex flex-col items-center md:items-end justify-center text-center md:text-right">
                <h4 class="text-[1.2rem] md:text-[2.5rem] libre-baskerville-regular pe-0 md:pe-4"><?php echo get_the_title(); ?></h4>
                <p class="text-[1rem] md:text-[1.8rem] libre-baskerville-regular pe-0 md:pe-4"><?php echo get_field('podtytul'); ?></p>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="rotate-180 mt-4 md:mt-0">
            </div>

            <div class="scrollable-wraper">
              <div class="scrollable-content">
                <div class="text-lg" style="margin-bottom: 8rem;">
                  <p><?php echo the_content(); ?></p>
                </div>
                <?php photo_oneside_pill("right", get_the_post_thumbnail_url()) ?>
              </div>
            </div>
          </div>
</section>
<?php
        } elseif ($counter % 2 == 1) { ?>
  <section class="py-12 relative z-30 bg-secondary text-white">
    <div class=" px-4 2xl:ml-28 lg:ml-20 md:mr-20">
      <div class="flex flex-row md:hidden">
        <div class=" flex flex-row md:flex-row md:justify-end ">
          <div class="flex flex-col items-center md:items-end justify-center text-center md:text-right w-[90vw]">
            <h4 class="text-[1.2rem] md:text-[3rem] libre-baskerville-regular pe-0 md:pe-4"><?php echo get_the_title(); ?></h4>
            <p class="text-[1rem] md:text-[2.1rem] libre-baskerville-regular pe-0 md:pe-4"><?php echo get_field('podtytul'); ?></p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="rotate-180 mt-4 md:mt-0 w-[15vw]">
        </div>
      </div>
      <div class="fixed-side-container" data-fixed-side="left">

        <div class="fixed-content flex flex-col md:flex-row md:justify-start">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="mt-4 md:mt-0">
          <div class="flex flex-col items-center md:items-start justify-center text-center md:text-left">
            <h4 class="text-[1.2rem] md:text-[2.5rem] libre-baskerville-regular ps-0 md:ps-4"><?php echo get_the_title(); ?></h4>
            <p class="text-[1rem] md:text-[1.8rem] libre-baskerville-regular ps-0 md:ps-4"><?php echo get_field('podtytul'); ?></p>
          </div>
        </div>
        <div class="scrollable-wraper">
          <div class="scrollable-content">
            <div class="text-lg" style="margin-bottom: 8rem;">
              <?php echo the_content(); ?>
            </div>
            <?php photo_oneside_pill("left", get_the_post_thumbnail_url()); ?>
          </div>
        </div>
  <?php
        }

        $counter++;
      endwhile;
      wp_reset_postdata();
    endif;
  ?>
      </div>
  </section>
  <div class="h-[20vh] bg-secondary relative z-40"></div>
  <?php
  get_footer();
  ?>