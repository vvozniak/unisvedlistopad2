<?php
/**
 * Template Name: Strona kontaktowa
 */
get_header();
require_once get_template_directory() . '/template-parts/pills/photo_oneside.php';
?>

<style>
/* Breakpoint dla obrazka: 1280px do 1440px */
@media (min-width: 1280px) and (max-width: 1441px) {
  .contact-image-custom {
    min-width: 500px !important;
  }
}
</style>

<div class="fixed inset-0 bg-gray-900 z-0" style="top: 100vh;"></div>

<section class="bg-secondary relative text-light pb-12 px-4 sm:px-6 lg:px-8 rounded-t-[50px] md:pt-[35vh] lg:-mt-[6.5vh] 2xl:-mt-[5.2vh] z-20 mt-[-6vh]">
  <div class="contact-section-overlay"></div>
  <div class=" md:mx-28 grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16 items-start">
    
    <!-- Desktop version - only visible on md screens and up -->
    <div id='video-hide-trigger' class="fixed-content space-y-6 md:space-y-8 hidden md:block ">
      <div class="flex items-start space-x-3 md:space-x-4 mt-[10vh] pt-[8vw] lg:pt-[15vw] md:mt-0">
        <!-- Powiększone C z w-12 h-12 na w-16 h-16 -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="w-10 md:w-12 lg:w-12 xl:w-14  contact-icon-fix mt-1 md:mt-2">
        <div>
          <!-- Zmniejszony nagłówek z text-3xl na text-2xl i z text-[3vw] na text-[2.8vw] -->
          <h1 class="text-2xl md:text-3xl lg:text-[2.8vw] libre-baskerville-regular">Aleksandra</h1>
          <h1 class="text-2xl md:text-3xl lg:text-[2.8vw] libre-baskerville-regular">Gierdziejewska</h1>
          <p class="text-lg md:text-xl lg:text-[1.2vw] mt-4 tracking-wider">CEO & FOUNDER</p>
        </div>
      </div>
      <div class="md:pt-20">
      </div>
    </div>
    
    <!-- Mobile version - fixed position, only visible on small screens -->
    <div class="md:hidden absolute top-[10vh] left-0 right-0 bg-secondary px-4 py-5 z-30 text-center">
      <div class="flex items-start md:items-center space-x-3">
        <!-- Powiększone C również na mobile -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="" class="w-16 h-16 mt-1">
        <div>
          <!-- Zmniejszony nagłówek również na mobile -->
          <h1 class="text-2xl libre-baskerville-regular">Aleksandra</h1>
          <h1 class="text-2xl libre-baskerville-regular">Gierdziejewska</h1>
          <p class="text-lg mt-4 tracking-wider">CEO & FOUNDER</p>
        </div>
      </div>
    </div>
    
    <!-- Right Column -->
    <div class="scrollable-content">
      <div class="pt-[35vh] md:pt-0 space-y-6 md:space-y-25 max-w-[760px]  md:ml-[10vh]">
        <div class="text-center md:text-left link_li">
          <p><a href="tel:+48602142949" class="inter-thin tracking-[.2rem] text-[1rem] md:text-[1vw]">+48 602 142 949</a></p>
          <p><a href="tel:+46704415690" class="inter-thin tracking-[.2rem] text-[1rem] md:text-[1vw]">+46 704 415 690</a></p>
          <p><a href="mailto:ALEKSANDRA@UNISVED.EU" class="inter-thin tracking-[.2rem] text-[1rem] md:text-[1vw]">ALEKSANDRA@UNISVED.EU</a></p>
        </div>
        
        <!-- Linie z ikonkami jak na zdjęciu -->
        <div class="py-6 max-w-[400px] mx-auto md:mx-0">
          <!-- Górna linia -->
          <div class="w-full h-0.5 bg-primary mb-8"></div>
          
          <!-- Ikonki w jednym rzędzie -->
          <div class="flex justify-between items-center mb-8">
            <a href="#" class="social-icon-link">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/facebook.svg" alt="Facebook" class="h-12 w-12 md:h-14 md:w-14 contact-icon-fix">
            </a>
            <a href="#" class="social-icon-link">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/linkedin.svg" alt="LinkedIn" class="h-12 w-12 md:h-14 md:w-14 contact-icon-fix">
            </a>
            <a href="#" class="social-icon-link">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/insta.svg" alt="Instagram" class="h-12 w-12 md:h-14 md:w-14 contact-icon-fix">
            </a>
          </div>
          
          <!-- Dolna linia -->
          <div class="w-full h-0.5 bg-primary"></div>
        </div>
        
        <div class="text-center md:text-left space-y-1 text-light">
          <p class="inter-thin tracking-[.2rem] text-[1rem] md:text-[1vw] ">NIP: 583 244 62 23</p>
          <p class="inter-thin tracking-[.2rem] text-[1rem] md:text-[1vw]">SARNIA 4, 83 - 047 PIEKŁO DOLNE</p>
        </div>
      </div>
      
      <div class="space-y-6 md:space-y-8 hidden"></div>
      <div class="my-12 md:ml-13 md:my-18 overflow-visible max-w-[700px] min-w-[300px] xl:min-w-[460px] 2xl:min-w-[700px] justify-end contact-image-custom">
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

<section class="pb-[20vh] relative z-40 bg-secondary text-white mt-[-1vh]"></section>

<?php
get_footer();
?>