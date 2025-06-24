<?php

/**
 * Template Name: Strona oferty
 */

get_header();
require_once get_template_directory() . '/template-parts/pills/photo_oneside.php';

?>
<?php
$offers =  new WP_Query(array(
  'post_type' => 'oferta',
  'posts_per_page' => -1,
  'orderby' => 'menu_order',
  'order' => 'ASC'
));
if ($offers->have_posts()) {
  $counter = 8; // do zmiany po tym jak wszystkie oferty bedą postami
  while ($offers->have_posts()) {
    $offers->the_post();
    if ($counter % 2 == 0) {
      if (get_field('szablon_1_wlwyl') == true) {
?>
        <section class="bg-secondary py-20 mb-10">
          <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center justify-center">
            <div class="lg:w-1/3 text-light p-8 link_li">
              <div class="flex items-center mb-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class="h-24 mr-4">
                <h2 class="text-4xl lg:text-5xl">UNISVED<br><?php echo get_the_title(); ?></h2>
              </div>
              <p class="text-xl mb-4 ml-2"><?php echo get_field('podtytul1') ?></p>
              <a href="#" id="toggle-offer-<?php echo $counter; ?>" class="text-primary  text-lg ml-2">( CZYTAJ WIĘCEJ )</a>
              <div id="offer-details-<?php echo $counter; ?>" class="hidden mt-4 text-light">
                <h3 class="text-2xl font-bold text-primary">Dla kogo:</h3>
                <p class="mb-4"><?php echo get_field('dla_kogo1'); ?></p>
                <div class="w-24 h-px bg-primary my-4"></div>
                <h3 class="text-2xl font-bold text-primary">Zakres usług:</h3>
                <ul class="list-disc list-inside mb-4 marker:text-primary">
                  <?php echo get_field('zakres_uslug1'); ?>
                </ul>
                <div class="w-24 h-px bg-primary my-4"></div>
                <h3 class="text-2xl font-bold text-primary">Efekt:</h3>
                <p><?php echo get_field('efekt1'); ?></p>
              </div>
            </div>
            <div class="lg:w-1/2 mt-8 lg:mt-0">
              <div class="relative">
                <?php
                photo_oneside_pill('right', 'assets/pill_photo.jpg'); ?>
              </div>
            </div>
          </div>
        </section>
      <?php } elseif (get_field('szablon_2_wlwyl') == true) {
      ?>
        <section class="bg-secondary py-20 pb-[20vh]">
          <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center justify-center">
            <div class="lg:w-1/3 text-light p-8 link_li">
              <div class="flex items-center mb-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class="h-24 mr-4">
                <h2 class="text-4xl lg:text-5xl">UNISVED<br><?php echo get_the_title(); ?></h2>
              </div>
              <p class="text-xl mb-4 ml-2">Kompleksowy pakiet dla firm, które chcą całościowo i profesjonalnie wejść na rynek szwedzki</p>
              <a href="#" id="toggle-offer-<?php echo $counter; ?>" class="text-primary  text-lg ml-2">( CZYTAJ WIĘCEJ )</a>
              <div id="offer-details-<?php echo $counter; ?>" class="hidden mt-4 text-light">
                <h3 class="text-2xl font-bold text-primary">Dla kogo:</h3>
                <p class="mb-4"><?php echo get_field('dla_kogo2'); ?></p>
                <div class="w-24 h-px bg-primary my-4"></div>
                <h3 class="text-2xl font-bold text-primary">W skład pakietu wchodzi:</h3>
                <ul class="list-disc list-inside mb-4 marker:text-primary">
                  <?php echo get_field('sklad'); ?>
                </ul>
                <div class="w-24 h-px bg-primary my-4"></div>
                <h3 class="text-2xl font-bold text-primary">Cena i szczegóły:</h3>
                <p><?php echo get_field('cena_i_szczegoly'); ?></p>
                <div class="w-24 h-px bg-primary my-4"></div>

                <h3 class="text-2xl font-bold text-primary">Możliwość łączenia pakietów</h3>
                <p><?php echo get_field('mozliwosc_laczenia_pakietow'); ?></p>
                <br>

              </div>
            </div>
            <div class="lg:w-1/2 mt-8 lg:mt-0">
              <div class="relative">
                <?php
                photo_oneside_pill('right', 'assets/pill_photo.jpg'); ?>
              </div>
            </div>
          </div>
        </section>
      <?php
      }
      $counter++;
    } elseif ($counter % 2 == 1) {
      if (get_field('szablon_1_wlwyl') == true) {
      ?>
        <section class="bg-secondary py-20 mb-10">
          <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center justify-center">
            <div class="lg:w-1/2 mt-8 lg:mt-0">
              <div class="relative">
                <?php
                photo_oneside_pill('left', 'assets/pill_photo.jpg'); ?>
              </div>
            </div>
            <div class="lg:w-1/3 text-light p-8 link_li">
              <div class="flex items-center mb-4">
                <h2 class="text-4xl lg:text-5xl text-right">UNISVED<br><?php echo get_the_title(); ?></h2>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/small_c.svg" alt="C shape" class="h-24 ml-4">
              </div>
              <p class="text-xl mb-4 ml-2 text-right"><?php echo get_field('podtytul1') ?></p>
              <a href="#" id="toggle-offer-<?php echo $counter; ?>" class="text-primary text-lg ml-2 text-right block">( CZYTAJ WIĘCEJ )</a>
              <div id="offer-details-<?php echo $counter; ?>" class="hidden mt-4 text-light">
                <h3 class="text-2xl font-bold text-primary">Dla kogo:</h3>
                <p class="mb-4"><?php echo get_field('dla_kogo1'); ?></p>
                <div class="w-24 h-px bg-primary my-4"></div>
                <h3 class="text-2xl font-bold text-primary">Zakres usług:</h3>
                <ul class="list-disc list-inside mb-4 marker:text-primary">
                  <?php echo get_field('zakres_uslug1'); ?>
                </ul>
                <div class="w-24 h-px bg-primary my-4"></div>
                <h3 class="text-2xl font-bold text-primary">Efekt:</h3>
                <p><?php echo get_field('efekt1'); ?></p>
              </div>
            </div>
          </div>
        </section>

      <?php
      } elseif (get_field('szablon_2_wlwyl') == true) {
      ?>
        <section class="bg-secondary py-20 mb-10">
          <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center justify-center">
            <div class="lg:w-1/3 text-light p-8 link_li">
              <div class="flex items-center mb-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class="h-24 mr-4">
                <h2 class="text-4xl lg:text-5xl">UNISVED<br><?php echo get_the_title(); ?></h2>
              </div>
              <p class="text-xl mb-4 ml-2">Kompleksowy pakiet dla firm, które chcą całościowo i profesjonalnie wejść na rynek szwedzki</p>
              <a href="#" id="toggle-offer-<?php echo $counter; ?>" class="text-primary  text-lg ml-2">( CZYTAJ WIĘCEJ )</a>
              <div id="offer-details-<?php echo $counter; ?>" class="hidden mt-4 text-light">
                <h3 class="text-2xl font-bold text-primary">Dla kogo:</h3>
                <p class="mb-4"><?php echo get_field('dla_kogo2'); ?></p>
                <div class="w-24 h-px bg-primary my-4"></div>
                <h3 class="text-2xl font-bold text-primary">W skład pakietu wchodzi:</h3>
                <ul class="list-disc list-inside mb-4 marker:text-primary">
                  <?php echo get_field('sklad'); ?>
                </ul>
                <div class="w-24 h-px bg-primary my-4"></div>
                <h3 class="text-2xl font-bold text-primary">Cena i szczegóły:</h3>
                <p><?php echo get_field('cena_i_szczegoly'); ?></p>
                <div class="w-24 h-px bg-primary my-4"></div>

                <h3 class="text-2xl font-bold text-primary">Możliwość łączenia pakietów</h3>
                <p><?php echo get_field('mozliwosc_laczenia_pakietow'); ?></p>

              </div>
            </div>
            <div class="lg:w-1/2 mt-8 lg:mt-0 ">
              <div class="relative">
                <?php
                photo_oneside_pill('left', 'assets/pill_photo.jpg'); ?>
              </div>
            </div>
          </div>
        </section>
<?php
      }

      $counter++;
    }
  }
}

?>
<script>
  for (let i = 1; i <= <?php echo $counter; ?>; i++) {
    const toggleLink = document.getElementById(`toggle-offer-${i}`);
    const detailsDiv = document.getElementById(`offer-details-${i}`);

    if (toggleLink && detailsDiv) {
      toggleLink.addEventListener("click", (e) => {
        e.preventDefault();
        const isHidden = detailsDiv.classList.toggle("hidden");
        if (isHidden) {
          toggleLink.textContent = "( CZYTAJ WIĘCEJ )";
        } else {
          toggleLink.textContent = "( SCHOWAJ )";
        }
      });
    }
  }
</script>
<?php
get_footer();
?>