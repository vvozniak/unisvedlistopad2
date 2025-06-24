<?php

/**
 * Template Name: Strona projektowa
 */

get_header();
require_once get_template_directory() . '/template-parts/pills/photo_oneside.php';
require_once get_template_directory() . '/template-parts/pills/text_with_c.php';

?>

<!-- For the main heading section -->
<section class="bg-secondary text-light py-12 md:py-24">
  <div class="container mx-auto px-4">
    <div class="fixed-side-container" data-fixed-side="left">
    <div class="fixed-content items-center mb-12 md:mb-24">
      <div class="flex flex-col md:flex-row md:items-start libre-baskerville-regular">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="w-16 md:w-24 h-auto mr-0 md:mr-8"></img>
        <div>
          <h1 class="text-xl md:text-4xl font-bold leading-tight text-center md:text-left">Horisontal Holding AB</h1>
          <p class="text-lg md:text-3xl mt-2 md:mt-4 text-center md:text-left">Skuteczny rozwój trzech firm w ramach jednego holdingu</p>
        </div>
      </div>
      </div>
      <div class="scrollable-wrapper">
        <div class="scrollable-content">
          <div class="text-lg" style="margin-bottom: 12.5rem;">
            <p>W ciągu ostatnich kilku lat Unisved skutecznie wsparło rozwój Horisontal Holding AB, budując od podstaw trzy uzupełniające się firmy działające w sektorze budowlanym i inżynieryjnym. Nasze działania objęły pełne wsparcie – od rejestracji firm i aspektów prawnych, przez budowę struktur i wdrożenie systemów zarządzania, po strategię sprzedaży, pozyskiwanie klientów i optymalizację procesów dostosowanych do rynków skandynawskich.</p>
          </div>
    

          
            <div>
              <h2 class="text-2xl md:text-4xl font-bold mb-8">Firmy wchodzące w skład holdingu:</h2>
              <ul class="space-y-6">
                <li class="flex items-start">
                  <div class="w-3 h-3 bg-primary rounded-full mt-2 mr-4 flex-shrink-0"></div>
                  <div>
                    <p class="font-bold text-lg md:text-2xl">Horisontalplan AB (2018)</p>
                    <p class="text-lg">geodezja, pomiary inżynieryjne dla sektora budowlanego</p>
                  </div>
                </li>
                <li class="flex items-start">
                  <div class="w-3 h-3 bg-primary rounded-full mt-2 mr-4 flex-shrink-0"></div>
                  <div>
                    <p class="font-bold text-lg md:text-2xl">Horisontal AB (2020)</p>
                    <p class="text-lg">budownictwo, projekty infrastrukturalne i drogowe</p>
                  </div>
                </li>
                <li class="flex items-start">
                  <div class="w-3 h-3 bg-primary rounded-full mt-2 mr-4 flex-shrink-0"></div>
                  <div>
                    <p class="font-bold text-lg md:text-2xl">SMP Bygg (2021)</p>
                    <p class="text-lg">prace taborowe i zbrojeniowe dla infrastruktury</p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="flex justify-center items-center">
              <div class=" rounded-[5rem] md:py-12 md:px-20 inline-block relative">
                <?php
                photo_oneside_pill('right', 'assets/pill_photo.jpg');
                ?>
              </div>
            </div>
          

          <div class="text-center mb-16">
            <div class="border-t-2 border-primary w-full max-w-lg mx-auto"></div>
            <h2 class="text-4xl py-8 text-primary">Efekty mówią same za siebie:</h2>
            <div class="border-t-2 border-primary w-full max-w-lg mx-auto"></div>
          </div>

          <div class="max-w-3xl mx-auto">
            <?php
            text_with_c_pill(
              'right',
              '3 SPÓŁKI ZAREJESTROWANE I ROZWINIĘTE',
              'w mniej niż 3 lata',
              'assets/small_c.svg',
              'text-light'
            );
            text_with_c_pill(
              'right',
              '3 SPÓŁKI ZAREJESTROWANE I ROZWINIĘTE',
              'w mniej niż 3 lata',
              'assets/small_c.svg',
              'text-light'
            );
            text_with_c_pill(
              'right',
              '3 SPÓŁKI ZAREJESTROWANE I ROZWINIĘTE',
              'w mniej niż 3 lata',
              'assets/small_c.svg',
              'text-light'
            );
            text_with_c_pill(
              'right',
              '3 SPÓŁKI ZAREJESTROWANE I ROZWINIĘTE',
              'w mniej niż 3 lata',
              'assets/small_c.svg',
              'text-light'
            );
            text_with_c_pill(
              'right',
              '3 SPÓŁKI ZAREJESTROWANE I ROZWINIĘTE',
              'w mniej niż 3 lata',
              'assets/small_c.svg',
              'text-light'
            );
            photo_oneside_pill('right', 'assets/project-pill-photo.png');
            ?>
          </div>
          </div>
          </div>



    </div>
  </div>
    </section>
    <section class="new-background-section slide  bg-[url(https://unisved.nowa.net.pl/wp-content/uploads/2025/06/beautiful-shot-pier-sea-near-tree-forest-surrounded-by-high-mountains-norway-1.png)]  bg-cover rounded-t-[60px] -mt-[10vh] relative z-20 py-12">
      <div class="container mx-auto flex  items-center justify-center h-full text-center text-white relative z-10">
    <div class="hidden md:block my-8">
      <img src="http://unisved.nowa.net.pl/wp-content/uploads/2025/06/Logo.svg" alt="Logo" class="2xl:mx-auto mb-6 w-80">
    </div>
    <h2 class="text-2xl md:text-4xl leading-tight mx-8 libre-baskerville-regular text-left">
      Skontaktuj się z nami już dziś, <br>
      aby dowiedzieć się, jak możemy pomóc<br> 
      w rozwoju Twojego biznesu
    </h2>
  </div>
      </section>
<section class="py-12 relative z-30 bg-secondary text-white">
  <div class="container mx-auto px-4">

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
    if ($counter % 2 == 0) {?>
    <div class="flex flex-row md:hidden">
      <div class=" flex flex-row md:flex-row md:justify-end ">
          <div class="flex flex-col items-center md:items-end justify-center text-center md:text-right w-[90vw]">
            <h4 class="text-[1.2rem] md:text-[2.5rem] libre-baskerville-regular pe-0 md:pe-4"><?php echo get_the_title(); ?></h4>
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
          <?php photo_oneside_pill("left", get_the_post_thumbnail_url()) ?>
    </div>
    </div>
    </div>
  </section>
      <?php
    }
    elseif ($counter % 2 == 1) {?>
<section class="py-12 relative z-30 bg-secondary text-white">
  <div class="container mx-auto px-4">
    <div class="flex flex-row md:hidden">
      <div class=" flex flex-row md:flex-row md:justify-end ">
          <div class="flex flex-col items-center md:items-end justify-center text-center md:text-right w-[90vw]">
            <h4 class="text-[1.2rem] md:text-[2.5rem] libre-baskerville-regular pe-0 md:pe-4"><?php echo get_the_title(); ?></h4>
            <p class="text-[1rem] md:text-[1.8rem] libre-baskerville-regular pe-0 md:pe-4"><?php echo get_field('podtytul'); ?></p>
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
          <?php photo_oneside_pill("right",get_the_post_thumbnail_url()); ?>
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

<?php
get_footer();
?>