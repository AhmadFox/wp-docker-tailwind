<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Beginning Favicons -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="/<?php echo get_template_directory_uri(); ?>/dist/image/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo get_template_directory_uri(); ?>/dist/image/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo get_template_directory_uri(); ?>/dist/image/favicons/favicon-16x16.png">
    <!-- End Favicons -->

    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- <meta http-equiv="Content-Security-Policy" content="script-src 'none'"> -->
    <title><?php wp_title('WP Tailwind | '); ?></title>
    <link rel="pingback" href="<?php bloginfo('bingback_url'); ?>" />
    <?php wp_head(); ?>
</head>

<body class="bg-white flex flex-col">

    <!-- Beginning site navbar -->
    <nav class="sticky top-0 w-full bg-white py-5 lg:py-6 shadow-lg z-[2]" id="nav-menu">
        <div class="container max-w-full lg:w-11/12 2xl:w-10/12 3xl:w-9/12">
            <div class="flex content-center justify-between">
                <!-- Logo Brand -->
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                    class="w-28 sm:w-36 md:w-40 lg:w-40 3xl:w-52">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/image/logo.svg" alt="Logo Brand"
                        class="lazyload w-full h-auto" width="163" height="41">
                </a>

                <!-- Nav Menu [ Display only on desktop ] -->
                <?php 
                    $args = array(
                        'theme_location' => 'primary-menu',
                        'container' => 'ul',
                        'depth' => 2,
                        'menu_class'=> 'hidden lg:flex items-center justify-center font-medium mx-auto mb-0',
                        'fallback_cb' => false,
                        'active_class' => 'lg:mr-5 xl:mr-6 xl:mr-8 uppercase text-blue-600 font-semibold lg:text-sm xl:text-base',
                        'add_link_class' => 'lg:mr-5 xl:mr-6 xl:mr-8 uppercase text-gray-600 hover:text-blue-600 transition-colors ease-in-out duration-150 lg:text-sm xl:text-base'
                    );
                    ?>
                <?php wp_nav_menu( $args ); ?>

                <div class="flex items-center">

                    <!-- Search Icon -->
                    <button
                        class="bg-transparent border-0 text-gray-600 hover:text-blue-600  ease-in-out duration-200 md:mr-5 xl:mr-7 hidden md:block"
                        data-tw-toggle="modal" data-tw-target="#searchModal">
                        <i class="icon icon-search"></i>
                        <span class="sr-only">Search Icon</span>
                    </button>

                    <!-- User Icon -->
                    <button
                        class="bg-transparent border-0 text-gray-600 hover:text-blue-600  ease-in-out duration-200 md:mr-5 xl:mr-7 hidden md:block">
                        <i class="icon icon-user"></i>
                        <span class="sr-only">User Icon</span>
                    </button>

                    <!-- Wishlist Icon -->
                    <button
                        class="relative group bg-transparent border-0 text-gray-600 hover:text-blue-600  ease-in-out duration-200 md:mr-5 xl:mr-7 hidden md:block">
                        <i class="icon icon-heart-outline mt-1"></i>
                        <span
                            class="absolute top-0 -right-1 w-1 h-1 bg-gray-600 rounded-full group-hover:bg-blue-600 transition-colors ease-in-out duration-150"></span>
                        <span class="sr-only">Wishlist Icon</span>
                    </button>

                    <!-- Bag Icon -->
                    <button
                        class="relative bg-transparent border-0 text-gray-600 hover:text-blue-600 transition-colors ease-in-out duration-150 hidden md:block"
                        data-tw-toggle="modal" data-tw-target="#cartModal">
                        <i class="icon icon-bag"></i>
                        <span
                            class="absolute -top-4 -right-3 bg-red-500 flex items-center justify-center text-gray-100 rounded-full h-5 w-5 text-xs">2</span>
                        <span class="sr-only">Bag Icon</span>
                    </button>
                    
                    <!-- Burger Menu [ Appear only on mobile/tablet ] -->
                    <button class="relative z-[2] flex flex-col justify-center lg:hidden space-y-2 w-8 group ml-9"
                        data-tw-toggle="modal" data-tw-target="#mobileModal">
                        <span
                            class="block w-full h-0.5 bg-gray-600 group-hover:bg-blue-600 transition-bg ease-in-out duration-150"
                            aria-hidden="true"></span>
                        <span
                            class="block w-full h-0.5 bg-gray-600 group-hover:bg-blue-600 transition-bg ease-in-out duration-150"
                            aria-hidden="true"></span>
                        <span
                            class="block w-full h-0.5 bg-gray-600 group-hover:bg-blue-600 transition-bg ease-in-out duration-150"
                            aria-hidden="true"></span>
                        <span class="sr-only">Burger Menu Icon</span>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->


    <!-- Beginning [ Mobile Menu ] Slide Modal -->
    <aside class="fixed inset-0 z-10 hidden" aria-labelledby="slide-over-title" role="dialog" aria-modal="true"
        id="mobileModal">
        <!-- Modal Overlay -->
        <div class="fixed inset-0 bg-gray-900 bg-opacity-60 transition-opacity opacity-0 ease-in-out duration-500"
            data-tw-dismiss="overlay"></div>

        <!-- Modal Dialog -->
        <div class="flex h-full items-center justify-center">
            <div data-modal="dialog"
                class="translate-x-full pointer-events-none fixed inset-y-0 right-0 flex max-w-full transform transition ease-in-out duration-500 sm:duration-700"
                id="cart-content">
                <div class="pointer-events-auto w-screen max-w-md">
                    <div class="flex h-full flex-col bg-white shadow-xl">
                        <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
                            <div class="flex items-start justify-between">
                                <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Menu
                                </h2>
                                <div class="ml-3 flex h-7 items-center">
                                    <button type="button"
                                        class="-m-2 p-2 text-gray-500 hover:text-gray-700 transition-color ease-in-out duration-150"
                                        data-tw-dismiss="modal" aria-label="Close">
                                        <span class="sr-only">Close panel</span>
                                        <!-- Heroicon name: outline/x-mark -->
                                        <i class="icon icon-close text-sm" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="flow-root">
                                <?php 
                                    $args = array(
                                        'theme_location' => 'primary-menu',
                                        'container' => 'ul',
                                        'depth' => 2,
                                        'menu_class'=> 'mb-0',
                                        'fallback_cb' => false,
                                        'active_class' => 'block mb-4 uppercase text-primary-500 font-semibold',
                                        'add_link_class' => 'block mb-4 uppercase text-gray-600 font-medium'
                                    );
                                    ?>
                                <?php wp_nav_menu( $args ); ?>
                            </div>
                            <hr class="mb-6">
                            <div class="flex items-center">
                                <a href="" target="_blank" class="text-gray-700 mr-4">
                                    <i class="icon icon-instagram"></i>
                                    <span class="sr-only">Facebook Page</span>
                                </a>
                                <a href="" target="_blank" class="text-gray-700 mr-4">
                                    <i class="icon icon-facebook"></i>
                                    <span class="sr-only">Instagram Account</span>
                                </a>
                                <a href="" target="_blank" class="text-gray-700 mr-4">
                                    <i class="icon icon-twitter"></i>
                                    <span class="sr-only">Twitter Account</span>
                                </a>
                                <a href="" target="_blank" class="text-gray-700 mr-4">
                                    <i class="icon icon-youtube"></i>
                                    <span class="sr-only">Youtube Channel</span>
                                </a>
                                <a href="" target="_blank" class="text-gray-700">
                                    <i class="icon icon-linkedin mb-1"></i>
                                    <span class="sr-only">Linkedin Account</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </aside>

