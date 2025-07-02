<?php

/**
 * Template Name: Strona kontaktowa
 */

get_header();
require_once get_template_directory() . '/template-parts/pills/photo_oneside.php';

?>

<section class="bg-secondary relative text-light pb-12 px-4 sm:px-6 lg:px-8 rounded-t-[60px] md:pt-[35vh] -mt-[3vh] z-20">
  <div class="max-w-7xl mx-auto md:mx-28 grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16 items-center">
    <div class="space-y-6 md:space-y-8">
      <div class="flex items-center space-x-3 md:space-x-4 mt-[10vh] md:mt-0">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="w-12 h-12 md:w-auto md:h-auto">
        <div>
          <h1 class="text-4xl md:text-5xl lg:text-[52px] libre-baskerville-regular">Aleksandra</h1>
          <h1 class="text-4xl md:text-5xl lg:text-[52px] libre-baskerville-regular">Gierdziejewska</h1>
          <p class="text-lg md:text-xl">CEO & FOUNDER</p>
        </div>
      </div>
      <div class="pt-10 md:pt-20">
      </div>
    </div>

    <!-- Right Column -->
    <div class="space-y-6 md:space-y-25 max-w-max md:ml-[10vh]">
      <div class="text-center md:text-left space-y-2 link_li text-lg md:text-xl">
        <p><a href="tel:+48602142949" class="">+48 602 142 949</a></p>
        <p><a href="tel:+46704415690" class="">+46 704 415 690</a></p>
        <p><a href="mailto:ALEKSANDRA@UNISVED.EU" class="">ALEKSANDRA@UNISVED.EU</a></p>
      </div>

      <div class="flex justify-center  space-x-20 py-4 border-t-3 border-b-3 border-primary">
        <!-- Replace with actual SVG icons or font icons -->
        <a href="#" class="social-icon-link p-5">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/facebook.svg" alt="Facebook" class="h-6 w-6 md:h-auto md:w-auto">
        </a>
        <a href="#" class="social-icon-link p-5">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/linkedin.svg" alt="LinkedIn" class="h-6 w-6 md:h-auto md:w-auto">
        </a>
        <a href="#" class="social-icon-link p-5">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/insta.svg" alt="Instagram" class="h-6 w-6 md:h-auto md:w-auto">
        </a>
      </div>

      <div class="text-center md:text-left space-y-1 text-light text-lg md:text-xl">
        <p>NIP: 583 244 62 23</p>
        <p>SARNIA 4, 83-047 PIEKŁO DOLNE</p>
      </div>

      <div class="my-12 md:my-18">
        <?php
        $post_id = get_the_ID();
        $image_url = get_field('pill_image', $post_id);

        if ($image_url) {
          photo_oneside_pill('right', $image_url);
        }
        ?>
      </div>

    </div>
  </div>
</section>

<section class="pb-[20vh] relative z-40 bg-secondary text-white mt-[-1vh]">
  <div class="container mx-auto bg-center rounded-t-[40px]]">
    <div class=" flex justify-end 2xl:mr-35">
      <?php photo_oneside_pill('right', 'assets/pill_photo.jpg'); ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>