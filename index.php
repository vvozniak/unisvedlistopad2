<?php get_header(); ?>

<div class="container mx-auto my-8 bg-secondary">
	<?php if (is_front_page()) { ?>
		<?php get_template_part('template-parts/homepage'); ?>
	<?php } ?>

	<?php if (have_posts()) : ?>
		<?php
		while (have_posts()) :
			the_post();
		?>


		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php
get_footer();
