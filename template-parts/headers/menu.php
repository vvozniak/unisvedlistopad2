<div class="fixed top-0 left-0 w-screen z-[999] mx-10">
    <div class="lg:flex lg:items-center py-6 px-10">
        <div class="flex justify-between items-center">
            <div class="mr-8 custom-logo-landing">
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
                    <svg viewBox="0 0 20 20" class="inline-block w-6 h-6 text-light" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <?php // Ensure icon color is visible 
                                                                                                                                                                                                                                                                                                                                                ?>
                        <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                            <g id="icon-shape">
                                <path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
                            </g>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
        <?php wp_nav_menu(
            array(
                'container_id'    => 'primary-menu',
                'container_class' => 'hidden bg-slate-800 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
                'menu_class'      => 'lg:flex lg:items-center lg:gap-0 text-light text-sm uppercase tracking-20',
                'theme_location'  => 'primary',
                'li_class'        => 'link_li flex items-center md:after:content-["|"] md:after:mx-4 md:after:text-light md:last:after:content-none',
                'fallback_cb'     => false,
            )
        ); ?>
    </div>
</div>