<?php

/**
 * Template Name: Strona główna
 */

get_header();
require_once get_template_directory() . '/template-parts/pills/photo_oneside.php';
require_once get_template_directory() . '/template-parts/pills/text_with_c.php';
require_once get_template_directory() . '/template-parts/pills/mini_pill_text.php';
require_once get_template_directory() . '/template-parts/pills/double_c_pill.php';
require_once get_template_directory() . '/template-parts/pills/icon_text_item.php';
?>
<style>
  @media (min-width:768px) {
    .h2pill {

      white-space: nowrap;
      text-wrap: nowrap;

    }

    .icon-text-pill-p {
      text-wrap: balance;
    }
  }

  @media (max-width:768px) {
    .h2pill {

      text-wrap: wrap;
      font-size: 1.8vh;

    }
  }



  /* .icon-text-pill-h3 {
    white-space: pre-line;
  } */
</style>
<section class="bg-secondary py-12 rounded-t-[60px] relative -mt-[10vh] z-20">
  <div class=" ml-10 xl:ml-28 w-screen">
    <!-- dlaczego my mobile -->
    <div class="w-full items-center flex md:hidden">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="mr-5 w-6">
      <h4 class="text-light text-[2rem] libre-baskerville-regular">Dlaczego my?</h4>
    </div>

    <div class="fixed-side-container" data-fixed-side="left">
      <!-- Left side - fixed content -->

      <!-- dlaczego my PC -->
      <div class="fixed-content flex-shrink-0">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="mr-5">
        <h4 class="text-light text-[3rem] libre-baskerville-regular">Dlaczego my?</h4>
      </div>

      <!-- Increased spacer width -->
      <!-- <div class="spacer flex-grow min-w-[1rem]  mr-auto  2xl:min-w-[30rem]"></div> -->

      <!-- Scrollable content with additional left padding -->
      <div class="scrollable-wrapper flex-shrink-0 md:mr-64 ml-8 md:ml-0">
        <div class="scrollable-content">
          <?php
          $post_id = get_the_ID();
          $image_url = get_field('pill_image', $post_id);

          if ($image_url) {
            photo_oneside_pill('right', $image_url);
          }
          text_with_c_pill(
            'left',
            get_field('pill_1_title', $post_id),
            get_field('pill_1_content', $post_id),
            'assets/big_c_right.svg',
            'text-white'
          );

          text_with_c_pill(
            'right',
            get_field('pill_2_title', $post_id),
            get_field('pill_2_content', $post_id),
            'assets/big_c.svg',
            'text-white'
          );

          text_with_c_pill(
            'left',
            get_field('pill_3_title', $post_id),
            get_field('pill_3_content', $post_id),
            'assets/big_c_right.svg',
            'text-white'
          );

          text_with_c_pill(
            'right',
            get_field('pill_4_title', $post_id),
            get_field('pill_4_content', $post_id),
            'assets/big_c.svg',
            'text-white'
          );
          ?>
        </div>
      </div>
    </div>
    <div class="min-h-[10vh]"></div>
  </div>
</section>
<!-- New section with rounded top corners that appears after scrolling -->
<section class="new-background-section slide bg-black  bg-cover rounded-t-[60px] -mt-[10vh] relative z-20 py-12" style="background-image: url('https://unisved.nowa.net.pl/wp-content/uploads/2025/06/2039da1d109140349f07fd17a8bf52a6a7e03a52-scaled.jpg')">
  <div class="absolute inset-0 bg-black opacity-50 rounded-t-[60px]"></div>
  <div class=" flex items-center justify-center h-full w-screen text-center text-white relative z-10 md:pb-10">
    <div class="md:mr-8">
      <img src="https://unisved.nowa.net.pl/wp-content/uploads/2025/06/Logo.svg" alt="Logo" class="hidden md:block 2xl:mx-auto lg:ml-10 mb-6 w-80">
    </div>
    <h2 class="text-[7vw] md:text-[4.167vw] leading-tight px-3 md:px-0 md:pl-2 libre-baskerville-regular text-left text-pretty">
      Od Skandynawii po rynki<br>
      międzynarodowe.
    </h2>
  </div>
</section>

<section class="py-12 relative z-30 bg-secondary text-white rounded-t-[60px]">
  <div class=" bg-center rounded-t-[40px] min-h-[80vh] px-4 mt-20 ">
    <!-- dlaczego skandywnawia mobile -->
    <div class="w-full items-center flex md:hidden ml-10 ">
      <h4 class="text-right text-[2rem] libre-baskerville-regular pe-2">Dlaczego<br>Skandynawia?</h4>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class=" rotate-180 w-6">
    </div>

    <div class="fixed-side-container md:ml-28" data-fixed-side="md:right">
      <!-- dlaczego skandynawia PC -->
      <div class="fixed-content flex justify-end md:mr-40 2xl:mr-50">
        <h4 class="text-right text-[3vw] libre-baskerville-regular pe-2 shrink-0">Dlaczego<br>Skandynawia?</h4>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class=" rotate-180 w-[4vw]">

      </div>
      <!-- <div class="spacer flex-grow min-w-[1rem]  mr-auto  2xl:min-w-[30rem]"></div> -->
      <div class="scrollable-wrapper shrink-0 2xl:ml-28 md:ml-0 ml-8">
        <div class="scrollable-content">
          <div>
            <?php
            $post_id = get_the_ID();
            icon_text_item(
              'gospodarka.svg',
              get_field('icon_1_title', $post_id),
              get_field('icon_1_content', $post_id),
              'alt text for gospodarka',
              ''
            );
            icon_text_item(
              'innowacyjnosc.svg',
              get_field('icon_2_title', $post_id),
              get_field('icon_2_content', $post_id)
            );
            icon_text_item(
              'otwartosc.svg',
              get_field('icon_3_title', $post_id),
              get_field('icon_3_content', $post_id)
            );
            icon_text_item(
              'przyjazne.svg',
              get_field('icon_4_title', $post_id),
              get_field('icon_4_content', $post_id)
            );
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="new-background-section slide bg-black bg-cover rounded-t-[60px] -mt-[10vh] relative z-30 py-12" style="background-image: url('https://unisved.nowa.net.pl/wp-content/uploads/2025/06/ff43581d96bce748ee60811861ca062f1fd29e08.jpg')">
  <div class="absolute inset-0 bg-black opacity-50 rounded-t-[60px]"></div>
  <div class="container mx-auto flex  items-center justify-center h-full text-center text-white relative z-10">
    <h2 class="text-[7vw] md:text-[4.167vw] leading-tight mx-auto libre-baskerville-regular text-left mt-16">
      Wspólnie<br>przekroczymy granice!
    </h2>
  </div>

</section>
<section class="py-12 relative z-30 bg-secondary text-white rounded-t-[60px]">
  <div class=" bg-center rounded-[40px] min-h-[100vh] space-y-16 mt-20 xl:ml-28">
    <!-- unisved w pigułce mobile -->
    <div class="w-full items-center flex md:hidden mb-8 ml-10">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="mr-5 h-[20vw] md:h-auto">
      <h4 class="text-light text-[2rem] leading-none libre-baskerville-regular">Unisved <br> w pigułce</h4>
    </div>
    <div class="fixed-side-container md:mr-40 2xl:mr-64 justify-center" data-fixed-side="md:left">
      <!-- unisved w pigułce PC -->
      <div class="fixed-content shrink-0">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="mr-5">
        <h4 class="text-light text-[3rem] leading-none libre-baskerville-regular ">Unisved <br> w pigułce</h4>
      </div>
      <!-- Increased spacer width -->
      <!-- <div class="spacer flex-grow min-w-[1rem]    2xl:min-w-[15rem]"></div> -->
      <div class="scrollable-wrapper shrink-0 md:mx-0 mx-auto">
        <div class="scrollable-content">
          <?php
          $post_id = get_the_ID();

          double_c_pill(
            get_field('double_pill_1_title', $post_id),
            get_field('double_pill_1_subtitle', $post_id),
            'assets/big_c.svg',
            'assets/big_c_right.svg',
            'text-white'
          );

          double_c_pill(
            get_field('double_pill_2_title', $post_id),
            get_field('double_pill_2_subtitle', $post_id),
            'assets/big_c.svg',
            'assets/big_c_right.svg',
            'text-white'
          );

          double_c_pill(
            get_field('double_pill_3_title', $post_id),
            get_field('double_pill_3_subtitle', $post_id),
            'assets/big_c.svg',
            'assets/big_c_right.svg',
            'text-white'
          );

          double_c_pill(
            get_field('double_pill_4_title', $post_id),
            get_field('double_pill_4_subtitle', $post_id),
            'assets/big_c.svg',
            'assets/big_c_right.svg',
            'text-white'
          );


          $post_id = get_the_ID();
          $image_pill = get_field('pill_image_1', $post_id);

          if ($image_pill) {
            photo_oneside_pill('left', $image_pill);
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pt-12 relative z-30 bg-secondary text-white mt-[-10px]">
  <div class="xl:ps-[10vw] xl:pe-[12vw] flex flex-col md:flex-row w-full items-center">

    <div class="md:w-1/2">
      <?php
      $post_id = get_the_ID();
      $image_pill_2 = get_field('pill_image_2', $post_id);

      if ($image_pill_2) {
        photo_oneside_pill('left', $image_pill_2);
      }
      ?>
    </div>
    <div class="flex items-center mb-12 mt-12 md:mt-0 md:w-1/2 justify-end">
      <h2 class="text-[2.4rem] font-['Libre_Baskerville'] leading-tight pe-5">Jesteśmy tu, <br> by pomóc!</h2>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/small_c.svg" alt="C" class="">
    </div>
  </div>
</section>

<section class="relative z-30 bg-secondary text-white pt-12 pb-[20vh] md:mt-[-5px]">
  <div class="xl:px-[10vw]">
    <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-16">
      <!-- Left side - Photo -->
      <div class="">
        <?php
        $post_id = get_the_ID();
        $image_pill_3 = get_field('pill_image_3', $post_id);

        if ($image_pill_3) {
          photo_oneside_pill('right', $image_pill_3);
        }
        ?>
      </div>

      <!-- Right side - Text content -->
      <div class="md:w-1/2 text-right flex flex-col items-end md:mx-0 pb-10 md:pb-0">
        <h3 class="text-[6vw] md:text-[2.3vw] libre-baskerville-regular mb-4">Aleksandra Gierdziejewska</h3>
        <hr class=" border-t-2 border-primary my-6 w-2/3">
        <p class="md:text-[1.3vw] mb-8 tracking-widest">CEO & FOUNDER</p>
        <div class="space-y-2">
          <p class="md:text-[1.3vw] tracking-wider">+48 602 142 949</p>
          <p class="md:text-[1.3vw] tracking-wider">+46 704 415 690</p>
          <p class="md:text-[1.3vw] uppercase tracking-wider">ALEKSANDRA@UNISVED.EU</p>
        </div>
      </div>
    </div>
  </div>
</section>
</section>
<?php
get_footer();
?>