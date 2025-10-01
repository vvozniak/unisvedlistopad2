<?php
/**
 * Template Name: Strona projektowa
 */

get_header();

require_once get_template_directory() . '/template-parts/pills/photo_oneside.php';
require_once get_template_directory() . '/template-parts/pills/text_with_c.php';
require_once get_template_directory() . '/template-parts/pills/text_with_c_small.php';

$slide_bg = get_field('slide_bg');
$text_domain = 'unisved-theme';

?>

<style>
  @media (max-width:768px) {
    .mobile-full-width {
      max-width: 100%;
    }
  }
  
  /* Desktop-only alignment fixes - ONLY for company list bullets */
  @media (min-width: 768px) {
    /* Target ONLY the company list items, not the statistics section */
    ul li {
      display: flex;
      align-items: center;
      min-height: 60px;
    }
    
    ul li .bg-primary:not(.company-bullet) {
      align-self: center;
      margin: 0 !important;
    }
    
    /* Ensure text content in company list is also vertically centered */
    ul li > div {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    
    ul li p {
      margin: 0 !important;
      line-height: 1.4;
    }
    
    /* DO NOT touch the statistics section - let it work normally */
    .max-w-3xl {
      /* Reset any unwanted changes to statistics section */
    }
  }
</style>

<section class="bg-secondary text-light pt-[20vh] pb-12 md:pb-[10vh] relative rounded-t-[60px] -mt-[10vh] z-20">
  <div class="md:ml-28 px-4">
    <div class="block md:hidden text-right mb-4">
      <div class="flex justify-center items-center">
        <div>
          <h1 class="text-xl font-bold libre-baskerville-regular"><?php _e('Horisontal Holding AB', $text_domain); ?></h1>
          <p class="text-lg mt-2"><?php _e('Skuteczny rozwój trzech firm w ramach jednego holdingu', $text_domain); ?></p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="w-16 h-auto ml-4">
      </div>
    </div>
    <div class="hidden md:flex fixed-side-container pt-10 justify-end w-full" data-fixed-side="md:left">
      <div class="fixed-content shrink-0 items-center mb-12 md:mb-24">
        <div class="md:flex flex-col md:flex-row md:items-start libre-baskerville-regular block pt-[10vw]">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="w-[1vw] md:w-12 2xl:w-24 h-auto mr-0 md:mr-8">
          <div>
            <h4 class="text-[1.2rem] md:text-[2.5rem] libre-baskerville-regular pe-0 md:pe-4"><?php _e('Horisontal Holding AB', $text_domain); ?></h4>
            <p class="text-[1rem] md:text-[1.8rem] libre-baskerville-regular pe-0 md:pe-4"><?php _e('Skuteczny rozwój trzech firm<br>w ramach jednego holdingu', $text_domain); ?></p>
          </div>
        </div>
      </div>
      <div class="scrollable-wrapper mobile-full-width shrink-0 md:pr-20 2xl:pr-64">
        <div class="scrollable-content">
          <div class="md:text-[1.2vw] text-[18px] md:-mt-[10vh] pt-[5vh]" style="margin-bottom: 6.5rem;">
            <p><?php _e('W ciągu ostatnich kilku lat Unisved skutecznie wsparło rozwój Horisontal Holding AB, budując od podstaw trzy uzupełniające się firmy działające w sektorze budowlanym i inżynieryjnym. Nasze działania objęły pełne wsparcie – od rejestracji firm i aspektów prawnych, przez budowę struktur i wdrożenie systemów zarządzania, po strategię sprzedaży, pozyskiwanie klientów i optymalizację procesów dostosowanych do rynków skandynawskich.', $text_domain); ?></p>
          </div>
          <div>
            <h2 class="text-[8vw] md:text-[2.2vw] libre-baskerville-regular mb-8"><?php _e('Firmy wchodzące <br>w skład holdingu:', $text_domain); ?></h2>
            <ul class="space-y-6">
              <li class="flex items-center">
                <div class="company-bullet 2xl:w-7 2xl:h-7 w-4 h-4 md:w-5 md:h-5 bg-primary rounded-full mr-6 flex-shrink-0"></div>
                <div>
                  <p class="font-bold md:text-[1.9vw] libre-baskerville-regular"><?php _e('Horisontalplan AB (2018)', $text_domain); ?></p>
                  <p class="md:text-[1.1vw]"><?php _e('geodezja, pomiary inżynieryjne dla sektora budowlanego', $text_domain); ?></p>
                </div>
              </li>
              <li class="flex items-center">
                <div class="company-bullet 2xl:w-7 2xl:h-7 w-4 h-4 md:w-5 md:h-5 bg-primary rounded-full mr-6 flex-shrink-0"></div>
                <div>
                  <p class="font-bold md:text-[1.9vw] libre-baskerville-regular"><?php _e('Horisontal AB (2020)', $text_domain); ?></p>
                  <p class="md:text-[1.1vw]"><?php _e('budownictwo, projekty infrastrukturalne i drogowe', $text_domain); ?></p>
                </div>
              </li>
              <li class="flex items-center company-bullet">
                <div class="company-bullet 2xl:w-7 2xl:h-7 md:w-5 md:h-5 w-4 h-4 bg-primary rounded-full mr-6 flex-shrink-0"></div>
                <div>
                  <p class="font-bold md:text-[1.9vw] libre-baskerville-regular"><?php _e('SMP Bygg (2021)', $text_domain); ?></p>
                  <p class="md:text-[1.1vw]"><?php _e('prace taborowe i zbrojeniowe dla infrastruktury', $text_domain); ?></p>
                </div>
              </li>
            </ul>
          </div>
          <div class="flex justify-center items-center">
            <div class="rounded-[5rem] md:py-12 inline-block relative">
              <?php
              $photos = [
                ['image' => get_template_directory_uri() . '/assets/smpbygg.png', 'side' => 'right'],
                ['image' => get_template_directory_uri() . '/assets/newhor.png', 'side' => 'left'],
                ['image' => get_template_directory_uri() . '/assets/horisontalab.jpg', 'side' => 'right']
              ];
              echo '<div id="photo-carousel">';
              foreach ($photos as $index => $photo) {
                $visibility = ($index === 0) ? '' : 'hidden';
                echo '<div class="carousel-item ' . $visibility . '" data-index="' . $index . '">';
                photo_oneside_pill($photo['side'], $photo['image']);
                echo '</div>';
              }
              echo '</div>';
              echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                  const items = document.querySelectorAll("#photo-carousel .carousel-item");
                  let currentIndex = 0;
                  
                  if (items.length > 0) {
                      setInterval(() => {
                          items[currentIndex].classList.add("hidden");
                          currentIndex = (currentIndex + 1) % items.length;
                          items[currentIndex].classList.remove("hidden");
                      }, 2500);
                  }
                });
              </script>';
              ?>
            </div>
          </div>
          <div class="text-center mb-16">
            <div class="border-t-2 border-primary w-full max-w-[33rem] mx-auto"></div>
            <h2 class="md:text-[2.5vw] 2xl:text-[1.9vw] py-10 text-primary libre-baskerville-regular"><?php _e('Efekty mówią same za siebie:', $text_domain); ?></h2>
            <div class="border-t-2 border-primary w-full max-w-[33rem] mx-auto"></div>
          </div>
          <div class="max-w-3xl mx-auto">
            <?php
            text_with_c_pill_small('right', __('3 SPÓŁKI ZAREJESTROWANE<br> I ROZWINIETE', $text_domain), __('w mniej niż 3 lata', $text_domain), 'assets/small_c.svg', 'text-light');
            text_with_c_pill_small('right', __('PONAD 50', $text_domain), __('zrealizowanych projektów', $text_domain), 'assets/small_c.svg', 'text-light');
            text_with_c_pill_small('right', __('120 + PRACOWNIKÓW', $text_domain), __('zatrudnionych w strukturach holdingu', $text_domain), 'assets/small_c.svg', 'text-light');
            text_with_c_pill_small('right', __('ŚREDNI WZROST<br> PRZYCHODÓW O PONAD 200%', $text_domain), __('w ciągu ostatnich kilku lat', $text_domain), 'assets/small_c.svg', 'text-light');
            text_with_c_pill_small('right', __('OBECNOŚĆ NA 5 RYNKACH EUROPEJSKICH:', $text_domain), __('Szwecja, Norwegia, Dania, Niemcy oraz Polska', $text_domain), 'assets/small_c.svg', 'text-light');
            ?>
            <div class="h-[10vh]"></div>
            <?php photo_oneside_pill('right', 'assets/project-pill-photo.png'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id='video-hide-trigger' class="new-background-section slide bg-cover rounded-t-[60px] -mt-[10vh] relative z-30i py-12" style="background-image: url('<?php echo esc_url($slide_bg); ?>')">
  <div class="flex items-center justify-center h-full w-full text-center text-white relative z-10">
    <div class="hidden md:block my-8">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/logo_biale_unisved.svg" alt="Logo" class="2xl:mx-auto mb-6 w-80">
    </div>
    <h2 class="text-[5.2vw] md:text-[3.0vw] leading-tight mx-8 libre-baskerville-regular text-left"><?php _e('Skontaktuj się z nami już dziś, <br>aby dowiedzieć się, jak możemy <br>pomóc w rozwoju Twojego biznesu', $text_domain); ?></h2>
  </div>
</section>

<section class="py-12 relative z-40i bg-secondary text-white rounded-t-[60px] -mt-[10vh]">
  <div class="2xl:ml-28 lg:ml-20 px-4 md:mr-20">
    <?php
    function process_content_for_mobile($content) {
      $content = str_replace(['<p>', '</p>'], ['', ' '], $content);
      $content = preg_replace('/\s+/', ' ', $content);
      $content = str_replace(['<br>', '<br/>', '<br />'], ' ', $content);
      return trim($content);
    }

    $post_type_name = 'projekt';
    $subtitle_field_name = 'podtytul';

    if ( defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'sv' ) {
        $post_type_name = 'projekt_sv';
        $subtitle_field_name = 'podtytul_sv';
    }

    $projects_args = array(
        'post_type'      => $post_type_name,
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
        'suppress_filters' => false,
    );
    
    $projects = new WP_Query($projects_args);

    if ($projects->have_posts()) :
      $counter = 0;
      while ($projects->have_posts()) : $projects->the_post();
        
        $project_title = get_the_title();
        $project_subtitle = get_field($subtitle_field_name) ?: '';
        $project_content = get_the_content() ?: '';
        $project_thumbnail = get_the_post_thumbnail_url() ?: '';
        
        if ($counter % 2 == 0) { ?>
          <section class="py-12 relative z-30 bg-secondary text-white">
            <div class="px-4 2xl:ml-28 lg:ml-20 md:mr-20">
              <div class="flex flex-row md:hidden">
                <div class="flex flex-row md:flex-row md:justify-end">
                  <div class="flex flex-col items-end pr-2 md:items-end justify-center text-center md:text-right w-[90vw]">
                    <h4 class="whitespace-wrap text-right 2xl:whitespace-normal text-[1.2rem] md:text-[2.5rem] libre-baskerville-regular pe-0 md:pe-4"><?php echo esc_html($project_title); ?></h4>
                    <p class="text-[1rem] text-right md:text-[1.8rem] libre-baskerville-regular pe-0 md:pe-4"><?php echo esc_html($project_subtitle); ?></p>
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="rotate-180 mt-4 md:mt-0 w-[15vw]">
                </div>
              </div>
              <div class="fixed-side-container" data-fixed-side="right">
                <div class="fixed-content flex flex-col md:flex-row md:justify-end mt-[10vw]">
                  <div class="flex flex-col items-center md:items-end justify-center text-center md:text-right">
                    <h4 class="text-[1.2rem] md:text-[2.5rem] libre-baskerville-regular pe-0 md:pe-4"><?php echo esc_html($project_title); ?></h4>
                    <p class="text-[1rem] md:text-[1.8rem] libre-baskerville-regular pe-0 md:pe-4"><?php echo esc_html($project_subtitle); ?></p>
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="rotate-180 mt-4 md:mt-0">
                </div>
                <div class="scrollable-wraper">
                  <div class="scrollable-content">
                    <div class="text-lg" style="margin-bottom: 8rem;">
                      <div class="hidden md:block">
                        <?php echo wpautop($project_content); ?>
                      </div>
                      <div class="block md:hidden">
                        <p><?php echo process_content_for_mobile($project_content); ?></p>
                      </div>
                    </div>
                    <?php if ($project_thumbnail) : ?>
                        <div class="w-full relative rounded-full overflow-hidden" style="aspect-ratio: 1.8 / 1; width: 110%; margin-left: -5%;">
                            <img src="<?php echo esc_url($project_thumbnail); ?>" alt="" class="w-full h-full object-cover absolute inset-0 z-10">
                            <div class="absolute left-0 top-0 h-full z-20">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/big_c.svg" alt="" class="h-full w-auto">
                            </div>
                        </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <?php } else { ?>
          <section class="py-12 relative z-30 bg-secondary text-white">
            <div class="px-4 2xl:ml-28 lg:ml-20 md:mr-20">
              <div class="flex flex-row md:hidden">
                <div class="flex flex-row md:flex-row md:justify-start">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="mt-4 md:mt-0 w-[15vw]">
                  <div class="flex flex-col items-start justify-center text-left w-[90vw] ml-4">
                    <h4 class="project-title libre-baskerville-regular ps-0 md:ps-4 text-[1.2rem]"><?php echo esc_html($project_title); ?></h4>
                    <p class="project-subtitle libre-baskerville-regular ps-0 md:ps-4"><?php echo esc_html($project_subtitle); ?></p>
                  </div>
                </div>
              </div>
              <div class="fixed-side-container" data-fixed-side="left">
                <div class="fixed-content flex flex-col md:flex-row md:justify-start">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="mt-4 md:mt-0">
                  <div class="flex flex-col items-center md:items-start justify-center text-center md:text-left">
                    <h4 class="text-[1.2rem] md:text-[2.5rem] libre-baskerville-regular ps-0 md:ps-4"><?php echo esc_html($project_title); ?></h4>
                    <p class="text-[1rem] md:text-[1.8rem] libre-baskerville-regular ps-0 md:ps-4"><?php echo esc_html($project_subtitle); ?></p>
                  </div>
                </div>
                <div class="scrollable-wraper">
                  <div class="scrollable-content">
                    <div class="text-lg" style="margin-bottom: 8rem;">
                      <div class="hidden md:block">
                        <?php echo wpautop($project_content); ?>
                      </div>
                      <div class="block md:hidden">
                        <p><?php echo process_content_for_mobile($project_content); ?></p>
                      </div>
                    </div>
                    <?php if ($project_thumbnail) : ?>
                        <div class="w-full relative rounded-full overflow-hidden" style="aspect-ratio: 1.8 / 1; width: 110%; margin-left: -5%;">
                            <img src="<?php echo esc_url($project_thumbnail); ?>" alt="" class="w-full h-full object-cover absolute inset-0 z-10">
                            <div class="absolute right-0 top-0 h-full z-20">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/big_c.svg" alt="" class="h-full w-auto rotate-y-180">
                            </div>
                        </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <?php }
        $counter++;
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
  </div>
</section>

<div class="h-[20vh] bg-secondary relative z-40"></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const triggerSection = document.getElementById('video-hide-trigger');
  if (!triggerSection) {
    console.error('Trigger section #video-hide-trigger not found!');
    return;
  }

  const uniqueVideoElements = [...new Set([
    document.getElementById('background-video'),
    document.getElementById('placeholder'),
    document.getElementById('background-image'),
    ...document.querySelectorAll('video[autoplay], header video, header img[id*="background"]')
  ].filter(Boolean))];

  if (uniqueVideoElements.length === 0) {
    console.error('No video elements found to control!');
    return;
  }

  uniqueVideoElements.forEach(element => {
    element.style.transition = 'height 0.6s ease-in-out';
  });

  function setVideoHeight(height) {
    uniqueVideoElements.forEach(element => {
      element.style.height = height;
    });
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        setVideoHeight('0vh'); // Hide video
      } else {
        setVideoHeight('100vh'); // Show video
      }
    });
  }, {
    threshold: 0.1,
    rootMargin: '0px 0px -10% 0px'
  });

  observer.observe(triggerSection);
});
</script>

<?php get_footer(); ?>