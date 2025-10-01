<main>
<?php do_action('tailpress_content_end'); ?>
</div>

<?php do_action('tailpress_content_after'); ?>

<footer id="colophon" class="site-footer bg-dark rounded-t-[60px] -mt-[10vh] md:py-14 z-90i" role="contentinfo">
    <?php do_action('tailpress_footer'); ?>
    
    <div class="flex flex-col md:flex-row justify-center md:justify-between items-center w-full px-4 sm:px-6 md:px-30 2xl:px-60 md:py-14 py-4 gap-8 lg:gap-4 xl:gap-6">
    <?php
    // Map the original options page / page ID to current language
    $footer_logo_page_id = apply_filters( 'wpml_object_id', 24, 'page', true, apply_filters( 'wpml_current_language', null ) );
    $image_footer = get_field("logo_footer", $footer_logo_page_id);
        if ($image_footer) {
            echo '<img src="' . esc_url($image_footer) . '" alt="Logo w stopce" class="w-[35vw] md:w-[20vw] lg:w-[8vw] xl:w-[10vw]">';
        } ?>
        
        <?php
        wp_nav_menu(
            array(
                'container_id'    => 'footer-nav',
                'container_class' => '',
                'menu_class'      => 'flex flex-col md:flex-row text-white text-sm md:text-[0.73vw] lg:text-[0.55vw] xl:text-[0.65vw] 2xl:text-[0.73vw] text-center whitespace-nowrap',
                'theme_location'  => 'footer',
                'li_class'        => 'inter-thin tracking-[0.2em] link_li flex justify-center items-center my-2 lg:my-1 xl:my-2 md:after:content-["|"] md:after:mx-4 lg:after:mx-2 xl:after:mx-3 2xl:after:mx-4 md:after:text-white md:last:after:content-none flex-shrink-0',
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