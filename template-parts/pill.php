<?php

/**
 * Pill component template - without heading
 * 
 * Set these variables before including this template:
 * $pill_side - 'left' or 'right' (defaults to 'right')
 * $pill_photo - Path to photo (defaults to 'assets/pill_photo.jpg')
 * $pill_c_image - Path to C-shaped image (defaults to 'assets/big_c.svg')
 */

// Default values if not set
$pill_side = isset($pill_side) ? $pill_side : 'right';
$pill_photo = isset($pill_photo) ? $pill_photo : 'assets/pill_photo.jpg';
$pill_c_image = isset($pill_c_image) ? $pill_c_image : 'assets/big_c.svg';

// Position the C-shape based on side
$c_position = ($pill_side === 'left') ? 'right-0' : 'left-0';
?>

<!-- Pill component -->
<div class="pill-container relative overflow-hidden rounded-full">
  <!-- C-shaped element -->
  <div class="absolute <?php echo $c_position; ?> top-0 h-full z-10">
    <img src="<?php echo get_template_directory_uri(); ?>/<?php echo $pill_c_image; ?>" alt="" class="h-full">
  </div>

  <!-- Photo fills the entire pill shape -->
  <img src="<?php echo get_template_directory_uri(); ?>/<?php echo $pill_photo; ?>" alt="" class=" object-cover">
</div>

<style>
  .pill-container {
    aspect-ratio: 2.5 / 1;
    background-color: #1a202c;
    width: 100%;
    max-width: 600px;
  }
</style>