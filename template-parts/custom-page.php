<?php
/**
 * Template Name: Podstrona
 */

get_header();
?>

<section class="bg-secondary min-h-[90vh] pt-32 pb-32">
  <div class="mx-20 text-light">
    <?php
    while (have_posts()) : the_post();
      the_content();
    endwhile;
    ?>
  </div>
</section>

<?php
get_footer();
?>