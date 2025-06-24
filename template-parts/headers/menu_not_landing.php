<div class="fixed top-0 left-0 w-screen z-[999] md:px-18">
    <div class="lg:flex lg:items-center py-6 px-10">
        <div class="flex justify-between items-center">
            <div class="mr-8 custom-logo">
                <?php if (has_custom_logo()) { ?>
                    <?php the_custom_logo(); ?>
                <?php } else { ?>
                    <a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase text-light">
                        <?php echo get_bloginfo('name'); ?>
                    </a>
                    <p class="text-sm font-light text-light">
                        <?php echo get_bloginfo('description'); ?>
                    </p>
                <?php } ?>
            </div>
            <div class="lg:hidden">
                <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
                    <svg id="hamburger-icon" viewBox="0 0 20 20" class="inline-block w-6 h-6 text-light" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                            <g id="icon-shape">
                                <path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
                            </g>
                        </g>
                    </svg>
                    <svg id="close-icon" class="hidden w-6 h-6 text-light" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </a>
            </div>
            <!-- X icon in top right corner for closing menu -->
            <button id="menu-close-topright" class="hidden fixed top-10 right-10 z-[1000] lg:hidden" aria-label="Close menu">
                <svg class="w-8 h-8 text-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <?php wp_nav_menu(
            array(
                'container_id'    => 'primary-menu',
                'container_class' => 'hidden fixed inset-0 bg-black bg-opacity-90 z-[998] flex items-center justify-center lg:bg-transparent lg:relative lg:block lg:mt-0 lg:p-0',
                'menu_class'      => 'flex flex-col text-center lg:flex-row lg:items-center lg:gap-0 text-light text-2xl lg:text-sm uppercase tracking-20',
                'theme_location'  => 'primary',
                'li_class'        => 'link_li flex items-center my-4 lg:my-0 lg:after:content-["|"] lg:after:mx-4 lg:after:text-light lg:last:after:content-none',
                'fallback_cb'     => false,
            )
        ); ?>
    </div>
</div>