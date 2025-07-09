<?php

/**
 * Template Name: Strona oferty
 */

get_header();
require_once get_template_directory() . '/template-parts/pills/photo_oneside.php';
require_once get_template_directory() . '/template-parts/pills/double_c_pill_horizontal.php';
?>
<div class="bg-secondary relative">
  <?php
  $offers =  new WP_Query(array(
    'post_type' => 'oferta',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC'
  ));
  if ($offers->have_posts()) {
    $counter = 0; // do zmiany po tym jak wszystkie oferty bedą postami
    while ($offers->have_posts()) {
      $offers->the_post();
      if ($counter % 2 == 0) {
        if (get_field('szablon_1_wlwyl') == true) {
  ?>
          <section class="bg-secondary py-20 mb-10 relative ">
            <div class="  md:ml-16 md:mr-64 2xl:gap-130 px-6 flex flex-col lg:flex-row items-center justify-between">
              <div class="lg:w-1/3 text-light p-8 link_li <?php if (strlen(get_the_title()) > 7): echo 'lg:min-w-[430px] 2xl:min-w-[500px] md:mr-30 2xl:mr-0';
                                                          endif; ?>">
                <div class="flex items-center ">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class=" mr-4 w-10">
                  <h2 class="text-[1.4rem] md:text-[2.87vw] libre-baskerville-regular text-balance <?php if (strlen(get_the_title()) > 7): echo 'lg:min-w-[430px] 2xl:min-w-[500px] ';
                                                                                                    endif; ?>">UNISVED<br><?php echo get_the_title(); ?></h2>

                </div>
                <p class="text-[1vw] mb-1 2xl:mb-4 ml-14 2xl:text-nowrap inter-regular"><?php echo get_field('podtytul1') ?></p>
                <a href="#" id="toggle-offer-<?php echo $counter; ?>" class="text-primary tracking-20 text-[1vw] ml-14">( CZYTAJ WIĘCEJ )</a>
              </div>
              <div class="lg:w-1/2 md:min-w-[450px] mt-10 lg:mt-0 2xl:min-w-full 2xl:min-h-full">
                <div class="relative">
                  <?php photo_oneside_pill('right', get_the_post_thumbnail_url()); ?>
                </div>
              </div>
            </div>
            <!-- Move the expandable content outside the flex container and position it under the right pill -->
            <div id="offer-details-<?php echo $counter; ?>" class="hidden mt-10 text-light px-6 md:ml-16 md:mr-32 flex justify-end ">
              <div class=" w-1/3 md:min-w-[450px]">
                <h3 class="text-2xl font-bold text-primary mb-10 libre-baskerville-regular">Dla kogo:</h3>
                <p class="mb-4 text-wrap inter-regular"><?php echo get_field('dla_kogo1'); ?></p>
                <div class="w-[100%] h-px bg-primary my-8"></div>
                <h3 class="text-2xl font-bold text-primary mb-10 libre-baskerville-regular">Zakres usług:</h3>
                <ul class="list-disc list-inside mb-4 marker:text-primary inter-regular">
                  <?php echo get_field('zakres_uslug1'); ?>
                </ul>
                <div class="w-[100%] h-px bg-primary my-8 "></div>
                <h3 class="text-2xl font-bold text-primary mb-10 libre-baskerville-regular">Efekt:</h3>
                <p class="text-wrap inter-regular"><?php echo get_field('efekt1'); ?></p>
              </div>
            </div>
          </section>
        <?php } elseif (get_field('szablon_2_wlwyl') == true) {
        ?>
          <section class="bg-secondary py-20 pb-[20vh] relative">
            <div class="  px-6 md:ml-16 md:mr-64 2xl:gap-130 flex flex-col lg:flex-row items-center justify-between">
              <div class="lg:w-1/3 text-light p-8 link_li <?php if (strlen(get_the_title()) > 9): echo 'lg:min-w-[430px] xl:min-w-[450px] 2xl:min-w-[500px] md:mr-30 2xl:mr-0';
                                                          endif; ?>">
                <div class="flex items-center mb-4 <?php if (strlen(get_the_title()) > 9): echo 'lg:min-w-[50vw] 2xl:min-w-[50vw] ';
                                                    endif; ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class=" mr-4 w-10">
                  <h2 class="text-[1.4rem] md:text-[2.87vw]   libre-baskerville-regular text-pretty">UNISVED EKSPANSJA<br> <?php echo get_the_title(); ?></h2>
                </div>
                <p class="text-[1vw] mb-1 2xl:mb-4 ml-14 2xl:whitespace-pre whitespace-wrap inter-regular"><?php echo get_field('podtytul2') ?></p>
                <a href="#" id="toggle-offer-<?php echo $counter; ?>" class="text-primary  tracking-20 text-[1vw] ml-14">( CZYTAJ WIĘCEJ )</a>
              </div>
              <div class="lg:w-1/2 md:min-w-[450px] mt-8 lg:mt-0 2xl:min-w-full 2xl:min-h-full">
                <div class="relative">
                  <?php photo_oneside_pill('right', get_the_post_thumbnail_url()); ?>
                </div>
              </div>
            </div>
            <!-- Move the expandable content outside the flex container and position it under the right pill -->
            <div id="offer-details-<?php echo $counter; ?>" class="hidden mt-10 text-light px-6 md:ml-16 md:mr-64 flex justify-end">
              <div class="w-1/3 md:min-w-[450px]">
                <h3 class="text-2xl font-bold text-primary">Dla kogo:</h3>
                <p class="mb-4 inter-regular"><?php echo get_field('dla_kogo2'); ?></p>
                <div class="w-24 h-px bg-primary my-4"></div>
                <h3 class="text-2xl font-bold text-primary">W skład pakietu wchodzi:</h3>
                <ul class="list-disc list-inside mb-4 marker:text-primary inter-regular">
                  <?php echo get_field('sklad'); ?>
                </ul>
                <div class="w-24 h-px bg-primary my-4"></div>
                <h3 class="text-2xl font-bold text-primary">Cena i szczegóły:</h3>
                <p class="inter-regular"><?php echo get_field('cena_i_szczegoly'); ?></p>
                <div class="w-24 h-px bg-primary my-4 "></div>
                <h3 class="text-2xl font-bold text-primary">Możliwość łączenia pakietów</h3>
                <p class="inter-regular"><?php echo get_field('mozliwosc_laczenia_pakietow'); ?></p>
              </div>
            </div>
          </section>
        <?php
        }
        $counter++;
      } elseif ($counter % 2 == 1) {
        if (get_field('szablon_1_wlwyl') == true) {
        ?>
          <section class="bg-secondary py-20 mb-10 relative">
            <div class="    md:mr-16 md:ml-64  px-6 flex flex-col lg:flex-row items-center justify-between">
              <div class="w-1/2 md:min-w-[450px] mt-8 lg:mt-0 2xl:max-w-full 2xl:min-h-full">
                <div class="relative">
                  <?php
                  photo_oneside_pill('left', get_the_post_thumbnail_url()); ?>
                </div>
              </div>
              <div class="text-light p-8 link_li">
                <div class="flex items-center mb-4 justify-end">
                  <h2 class="text-[1.4rem] md:text-[2.87vw] libre-baskerville-regular text-right text-balance">UNISVED<br><?php echo get_the_title(); ?></h2>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/small_c.svg" alt="C shape" class="ml-4 flex-shrink-0 w-10">
                </div>
                <p class="text-[1vw] mb-1 2xl:mb-4 mr-14 text-right 2xl:text-nowrap text-wrap inter-regular"><?php echo get_field('podtytul1') ?></p>
                <a href="#" id="toggle-offer-<?php echo $counter; ?>" class="text-primary tracking-20 text-[1vw] mr-14 text-right block">( CZYTAJ WIĘCEJ )</a>
              </div>
            </div>
            <!-- Move the expandable content outside the flex container -->
            <div id="offer-details-<?php echo $counter; ?>" class="hidden mt-10 text-light px-6 md:mr-16 md:ml-64 w-1/3">
              <h3 class="text-2xl font-bold mb-10 text-primary">Dla kogo:</h3>
              <p class="mb-4 text-wrap inter-regular"><?php echo get_field('dla_kogo1'); ?></p>
              <div class="w-[100%] h-px bg-primary my-8"></div>
              <h3 class="text-2xl font-bold text-primary mb-10">Zakres usług:</h3>
              <ul class="list-disc list-inside mb-4 marker:text-primary inter-regular">
                <?php echo get_field('zakres_uslug1'); ?>
              </ul>
              <div class="w-[100%] h-px bg-primary my-8"></div>
              <h3 class="text-2xl font-bold text-primary mb-10">Efekt:</h3>
              <p class="text-wrap inter-regular"><?php echo get_field('efekt1'); ?></p>
            </div>
          </section>

        <?php
        } elseif (get_field('szablon_2_wlwyl') == true) {
        ?>
          <section class="bg-secondary py-20 mb-10 relative">
            <div class=" 2xl:gap-110 md:mr-16 md:ml-64 px-6 flex flex-col lg:flex-row items-center justify-between">
              <div class="lg:w-1/3 2xl:w-1/2 text-light p-8 lg:pl-0 link_li <?php if (strlen(get_the_title()) > 9): echo 'lg:min-w-[430px] 2xl:min-w-[500px] md:mr-30 2xl:mr-0';
                                                                            endif; ?>">
                <div class="flex items-center">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/left_c.svg" alt="C shape" class=" mr-4 w-10">
                  <h2 class="text-[1.4rem] md:text-[2.87vw] libre-baskerville-regular text-balance <?php if (strlen(get_the_title()) > 9): echo 'lg:min-w-[430px] 2xl:min-w-[500px] ';
                                                                                                    endif; ?>">UNISVED<br><?php echo get_the_title(); ?></h2>
                </div>
                <p class="2xl:text-xl text-[1.5vw]  mb-4 mr-14 2xl:whitespace-pre whitespace-wrap inter-regular"><?php echo get_field('podtytul2') ?></p>
                <a href="#" id="toggle-offer-<?php echo $counter; ?>" class="text-primary  tracking-20 text-[1vw] mr-14">( CZYTAJ WIĘCEJ )</a>
                <div id="offer-details-<?php echo $counter; ?>" class="hidden mt-4 text-light">
                  <h3 class="text-2xl font-bold text-primary">Dla kogo:</h3>
                  <p class="mb-4 inter-regular"><?php echo get_field('dla_kogo2'); ?></p>
                  <div class="w-24 h-px bg-primary my-4"></div>
                  <h3 class="text-2xl font-bold text-primary">W skład pakietu wchodzi:</h3>
                  <ul class="list-disc list-inside mb-4 marker:text-primary inter-regular">
                    <?php echo get_field('sklad'); ?>
                  </ul>
                  <div class="w-24 h-px bg-primary my-4"></div>
                  <h3 class="text-2xl font-bold text-primary">Cena i szczegóły:</h3>
                  <p class="inter-regular"><?php echo get_field('cena_i_szczegoly'); ?></p>
                  <div class="w-24 h-px bg-primary my-4"></div>

                  <h3 class="text-2xl font-bold text-primary">Możliwość łączenia pakietów</h3>
                  <p class="inter-regular"><?php echo get_field('mozliwosc_laczenia_pakietow'); ?></p>
                </div>
              </div>
              <div class="lg:w-1/2 md:min-w-[450px] mt-8 lg:mt-0 2xl:min-w-full 2xl:min-h-full">
                <div class="relative">
                  <?php
                  photo_oneside_pill('left', get_the_post_thumbnail_url()); ?>
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
  <section class="new-background-section slide bg-black bg-cover rounded-t-[60px] -mt-[10vh] relative z-20 py-12" style="background-image: url('https://unisved.nowa.net.pl/wp-content/uploads/2025/06/7f552ee8caf604bbd62f57eef089c83d7b250042-scaled.jpg')">
    <div class="absolute inset-0 bg-black opacity-50 rounded-t-[60px]"></div>
    <div class="container mx-auto flex items-center justify-center h-full text-center text-white relative z-10">
      <div class="md:mb-8">
        <img src="https://unisved.nowa.net.pl/wp-content/uploads/2025/06/Logo.svg" alt="Logo" class="hidden md:block 2xl:mx-auto lg:ml-10 mb-6 w-[20vw]">
      </div>
      <h2 class=" text-[8vw] md:text-[4vw] leading-tight mx-auto px-3 md:px-0 md:pl-16 libre-baskerville-regular text-left">
        Osiągnij sukces <br>
        na globalnej scenie!
      </h2>
    </div>
  </section>
  <section class="py-12 relative z-30 bg-secondary overflow-hidden w-full text-white rounded-t-[60px]">
    <div class="container mx-auto bg-center overflow-hidden rounded-[40px] min-h-[65vh] space-y-16 my-20 pt-5">
      <?php
      double_c_pill_horizontal(
        "Możliwość <br> łączenia  pakietów",
        "Oferujemy dopasowane pakiety usług dla przedsiębiorstw, które chcą rozpocząć działalność, zrealizować projekt, skutecznie sprzedawać i budować swoją pozycję w Szwecji. Każdy projekt jest inny.<br><br>
Dlatego oferujemy możliwość łączenia wybranych pakietów lub stworzenia indywidualnej propozycji szytej na miarę. Skontaktuj się z nami, aby dopasować zakres usług do swoich celów w Szwecji.",
        'assets/big_c.svg',
        'assets/big_c_right.svg',
        'text-white'
      );
      ?>
    </div>
  </section>

  <script>
    for (let i = 0; i <= <?php echo $counter; ?>; i++) {
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
</div>
<?php
get_footer();
?>