<?php

/**
 * Template Name: Pills Test Page
 * Template Post Type: page
 * Description: A playground template for developing and testing custom components.
 */

get_header();
// Use get_template_part or require_once with the correct absolute path to include pill.php
require_once get_template_directory() . '/template-parts/pills/photo_oneside.php';
require_once get_template_directory() . '/template-parts/pills/text_with_c.php';
require_once get_template_directory() . '/template-parts/pills/mini_pill_text.php';
require_once get_template_directory() . '/template-parts/pills/double_c_pill.php';

?>

<main id="primary" class="site-main w-screen min-h-screen flex flex-col justify-center items-center bg-black text-white">
    <?php
    while (have_posts()) :
        the_post();
        the_content();
    endwhile;

    // Render the original Pill component
    photo_oneside_pill('right', 'assets/pill_photo.jpg');

    echo '<div class="mt-10"></div>'; // Add more spacing

    photo_oneside_pill('left', 'assets/pill_photo.jpg');
    echo '<div class="mt-10"></div>'; // Add more spacing

    // Render the new text-only pill component with C shape (matches the screenshot)
    text_with_c_pill(
        'right',
        'DOŚWIADCZENIE',
        'Lata praktyki w międzynarodowej administracji sprzedażowej.',
        'assets/big_c.svg',
        'text-white'
    );

    echo '<div class="mt-10"></div>'; // Add more spacing

    // Render another variation with the C on the left side
    text_with_c_pill(
        'left',
        'PROFESIONALIZM',
        'Niezawodna jakość i terminowość każdego projektu.',
        'assets/big_c_right.svg',
        'text-white'
    );

    echo '<div class="mt-10"></div>'; // Add more spacing

    mini_pill_text('left', 'Dlaczego Skandynawia?', 'assets/small_c.svg', 'text-white');

    echo '<div class="mt-10"></div>'; // Add more spacing

    mini_pill_text('right', 'x', 'assets/small_c.svg', 'text-white');

    echo '<div class="mt-10"></div>'; // Add more spacing

    // Render the new double-sided pill component
    double_c_pill(
        '5 rynków europejskich',
        'NA KTÓRE SKUTECZNIE WPROWADZAMY FIRMY',
        'assets/big_c.svg',
        'assets/big_c_right.svg',
        'text-white'
    );

    ?>
</main>

<?php
get_footer();
?>