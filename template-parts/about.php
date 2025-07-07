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
</style>
<section class="bg-secondary rounded-t-[60px] -mt-[3vh] relative pt-24 pb-12 z-20">
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
      <div class="fixed-content flex-shrink-0">
        <div class="flex items-center">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="mr-5">
          <h4 class="text-light text-[55px] libre-baskerville-regular"><?php echo $scrolling_heading1; ?></h4>
        </div>
      </div>

      <!-- Right side - scrollable content -->

      <div class="scrollable-wrapper flex-shrink-0 md:mr-64">
        <div class="scrollable-content">
          <?php



          text_with_c_pill(
            'left',
            $pill_title1,
            $pill_text1,
            'assets/big_c_right.svg',
            'text-white'
          );
          text_with_c_pill(
            'right',
            $pill_title2,
            $pill_text2,
            'assets/big_c.svg',
            'text-white'
          );
          text_with_c_pill(
            'left',
            $pill_title3,
            $pill_text3,
            'assets/big_c_right.svg',
            'text-white'
          );
          text_with_c_pill(
            'right',
            $pill_title4,
            $pill_text4,
            'assets/big_c.svg',
            'text-white'
          );
          text_with_c_pill(
            'left',
            $pill_title5,
            $pill_text5,
            'assets/big_c_right.svg',
            'text-white'
          );
          ?>
          <div class="h-[5vh]"></div>
          <?php
          photo_oneside_pill('right', $pill_photo);
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="new-background-section rounded-t-[60px] slide bg-black bg-cover  -mt-[10vh] relative z-1 py-12" style="background-image: url('<?php echo $slide_bg ?>')">
  <div class="absolute inset-0 bg-black opacity-50 "></div>
  <div class="container  flex  items-center justify-center h-full text-center text-white relative z-10">
    <div class="my-8 hidden md:block">
      <img src="https://unisved.nowa.net.pl/wp-content/uploads/2025/06/Logo.svg" alt="Logo" class="2xl:mx-auto mb-6 w-[33vw]">
    </div>
    <h2 class="md:text-[2.4vw] text-[8vw] leading-tight mx-8 libre-baskerville-regular text-left">
      <?php echo $text_on_baner; ?>
    </h2>
  </div>
</section>

<section class="py-12 relative z-30 bg-secondary text-white rounded-t-[60px] ">
  <div class=" md:ms-20 2xl:ms-48 md:me-28 bg-center rounded-t-[60px] min-h-[80vh] px-4">
    <div class="w-full items-center flex md:hidden ml-10 ">
      <div class="flex-col">
        <h4 class="text-right text-[2rem] libre-baskerville-regular pe-2"><?php echo $scrolling_heading2; ?></h4>
        <p class="text-right text-[1.2rem] md:text-[2.1vw] libre-baskerville-regular pe-4"><?php echo $scrolling_heading_sub; ?></p>
      </div>

      <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class=" rotate-180 w-6">
    </div>
    <div class="fixed-side-container" data-fixed-side="md:right">



      <div class="scrollable-wrapper text-wrap ml-10 md:ml-0">
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
      <div class="fixed-content flex justify-end">
        <div class="flex flex-col items-end justify-center text-right">
          <h4 class="text-right text-[2.88vw] libre-baskerville-regular pe-4"><?php echo $scrolling_heading2; ?></h4>
          <p class="text-right text-[1.8rem] md:text-[2.1vw] libre-baskerville-regular pe-4"><?php echo $scrolling_heading_sub; ?></p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class=" rotate-180 w-[4vw]">
      </div>
    </div>
  </div>
</section>

<section class="py-12 -mt-12 relative z-40 bg-secondary text-white" style="isolation: isolate;">
  <!-- Add this div to ensure complete background coverage -->
  <div class="absolute inset-0 bg-secondary w-full h-full"></div>
  <div class="container mx-auto md:mx-28 bg-center rounded-t-[40px] min-h-[20vh] px-4 relative">
    <div class=" flex justify-start">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="">
      <div class="ms-5 flex flex-col items-end justify-center  text-right">
        <h4 class="text-right text-[2.5rem] md:text-[3rem] libre-baskerville-regular pe-4">Co mówią o nas:</h4>
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



<?php
get_footer();
?>