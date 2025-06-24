</main>

<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>

<footer id="colophon" class="site-footer bg-dark rounded-t-[60px] -mt-[10vh] z-50" role="contentinfo">
	<?php do_action('tailpress_footer'); ?>
	<div class="flex flex-col md:flex-row justify-center md:justify-between items-center container mx-auto px-4 md:py-14 py-4 gap-4">
		<?php
		$image_footer = get_field("logo_footer", 24);
		if ($image_footer) {
			echo '<img src="' . esc_url($image_footer) . '" alt="Logo w stopce" class=" w-[35vw] md:w-[20vw] lg:w-[10vw]">';
		} ?>
		<?php
		wp_nav_menu(
			array(
				'container_id'    => 'footer-nav',
				'container_class' => '',
				'menu_class'      => 'flex flex-col md:flex-row text-white text-sm md:text-base text-center',
				'theme_location'  => 'footer',
				'li_class'        => 'link_li flex justify-center items-center my-2  md:after:content-["|"] md:after:mx-4 md:after:text-white md:last:after:content-none',
				'fallback_cb'     => false,
			)
		);
		?>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>