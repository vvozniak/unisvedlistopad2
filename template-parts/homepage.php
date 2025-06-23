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

<section class="bg-secondary py-12 relative">
  <div class="container mx-auto">
    <div class="fixed-side-container" data-fixed-side="left">
      <!-- Left side - fixed content -->
      
        <div class="fixed-content">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="mr-5">
          <h4 class="text-light text-[2.5rem] libre-baskerville-regular">Dlaczego my?</h4>
        </div>
      

      <!-- Right side - scrollable content -->
      <div class="scrollable-wrapper">
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
  </div>
</section>
<!-- New section with rounded top corners that appears after scrolling -->
<section class="new-background-section slide bg-black bg-[url(http://unisved.nowa.net.pl/wp-content/uploads/2025/06/2039da1d109140349f07fd17a8bf52a6a7e03a52-scaled.jpg)]  bg-cover rounded-t-[60px] -mt-[10vh] relative z-20 py-12">
  <div class="absolute inset-0 bg-black opacity-50 rounded-t-[60px]"></div>
  <div class="container mx-auto flex  items-center justify-center h-full text-center text-white relative z-10">
    <div class="mb-8">
      <img src="http://unisved.nowa.net.pl/wp-content/uploads/2025/06/Logo.svg" alt="Logo" class="2xl:mx-auto lg:ml-10 mb-6 w-80">
    </div>
    <h2 class="text-4xl md:text-6xl leading-tight mx-auto libre-baskerville-regular text-left">
      Od Skandynawii po rynki<br>
      międzynarodowe.
    </h2>
  </div>
</section>

<section class="py-12 relative z-30 bg-secondary text-white">
  <div class="container mx-auto bg-center rounded-t-[40px] min-h-[80vh] px-4">
    <div class="fixed-side-container" data-fixed-side="right">

      <div class="fixed-content flex justify-end">
          <h4 class="text-right text-[2.5rem] libre-baskerville-regular pe-2">Dlaczego<br>Skandynawia?</h4>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class=" rotate-180">

        </div>
      
      <div class="scrollable-wrapper">
        <div class="scrollable-content">
       <div>
        <?php
        $post_id = get_the_ID(); 
        icon_text_item(
          'gospodarka.svg',
          get_field('icon_1_title', $post_id),
          get_field('icon_1_content', $post_id),
          'alt text for gospodarka',
          'hidden md:block'
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
<section class="new-background-section slide bg-black bg-[url(http://unisved.nowa.net.pl/wp-content/uploads/2025/06/ff43581d96bce748ee60811861ca062f1fd29e08.jpg)] bg-cover rounded-t-[60px] -mt-[10vh] relative z-30 py-12">
 <div class="absolute inset-0 bg-black opacity-50 rounded-t-[60px]"></div>
<div class="container mx-auto flex  items-center justify-center h-full text-center text-white relative z-10">
    <div class="mb-8">
     
    </div>
    <h2 class="text-4xl md:text-6xl leading-tight mx-auto libre-baskerville-regular text-left">
     Wspólnie<br>przekroczymy granice!
    </h2>
  </div>

</section>
<section class="py-12 relative z-30 bg-secondary text-white">
  <div class="container mx-auto bg-center rounded-[40px] min-h-[100vh] space-y-16">
    <div class="fixed-side-container" data-fixed-side="left">
      <div class="fixed-content">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="mr-5">
        <h4 class="text-light text-[2.6rem] leading-none libre-baskerville-regular">Unisved <br> w pigułce</h4>
      </div>
      <div class="scrollable-wrapper">
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

<section class="pt-12 relative z-30 bg-secondary text-white">
  <div class="container flex w-full items-center mx-auto">
        
        <div class="w-1/2">
           <?php
        $post_id = get_the_ID();
        $image_pill_2 = get_field('pill_image_2', $post_id); 

        if ($image_pill_2) {
          photo_oneside_pill('left', $image_pill_2); }
        ?>
        </div>
        <div class="flex items-center mb-12 w-1/2 justify-end">
          <h2 class="text-[2.4rem] font-['Libre_Baskerville'] leading-tight pe-5">Jesteśmy tu, <br> by pomóc!</h2>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/small_c.svg" alt="C" class="">
        </div>
    </div>
</section>

<section class="relative z-30 bg-secondary text-white py-12">
  <div class="container mx-auto">
    <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-16">
      <!-- Left side - Photo -->
      <div class="lg:w-1/2">
        <?php
        $post_id = get_the_ID();
        $image_pill_3 = get_field('pill_image_3', $post_id); 

        if ($image_pill_3) {
          photo_oneside_pill('right', $image_pill_3);
        }
        ?>
      </div>
      
      <!-- Right side - Text content -->
      <div class="w-1/2 text-right flex flex-col items-end">
        <h3 class="text-[2rem] libre-baskerville-regular mb-4">Aleksandra Gierdziejewska</h3>
        <hr class=" border-t-2 border-primary my-6 w-2/3">
        <p class="text-lg mb-8 tracking-widest">CEO & FOUNDER</p>
        <div class="space-y-2">
          <p class="text-lg">+48 602 142 949</p>
          <p class="text-lg">+46 704 415 690</p>
          <p class="text-lg uppercase">ALEKSANDRA@UNISVED.EU</p>
        </div>
      </div>
    </div>
  </div>
</section>
</section>
<?php
get_footer();
?>