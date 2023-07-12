    <!-- Beginning Footer -->
    <footer class="bg-gray-100 pt-10 md:pt-12 lg:pt-16 2xl:pt-18 pb-6">

        <div class="container max-w-full lg:w-11/12 2xl:w-10/12 3xl:w-9/12">
            <div class="md:grid md:grid-cols-2 md:gap-12 lg:flex  justify-between">
                <div class="mb-8 lg:mb-0 lg:w-4/5">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mb-6 lg:mb-8 block">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/image/logo.svg" alt="Logo Brand"
                            class="lazyload w-fukk h-auto mx-auto md:ml-0" width="163" height="41">
                    </a>
                    <p class="text-gray-600 text-center md:text-start mb-8">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <div class="flex items-center  justify-center lg:justify-start order-1 lg:order-2 mb-6 lg:mb-0">
                    <a href="" target="_blank"
                        class="text-gray-600 hover:text-blue-500 ease-in-out duration-200 mr-5"
                        aria-hidden="true">
                        <i class="icon icon-instagram"></i>
                        <span class="sr-only">Facebook Page</span>
                    </a>
                    <a href="" target="_blank"
                        class="text-gray-600 hover:text-blue-500 ease-in-out duration-200 mr-5"
                        aria-hidden="true">
                        <i class="icon icon-facebook"></i>
                        <span class="sr-only">Instagram Account</span>
                    </a>
                    <a href="" target="_blank"
                        class="text-gray-600 hover:text-blue-500 ease-in-out duration-200 mr-5"
                        aria-hidden="true">
                        <i class="icon icon-twitter"></i>
                        <span class="sr-only">Twitter Account</span>
                    </a>
                    <a href="" target="_blank"
                        class="text-gray-600 hover:text-blue-500 ease-in-out duration-200"
                        aria-hidden="true">
                        <i class="icon icon-youtube"></i>
                        <span class="sr-only">Youtube Channel</span>
                    </a>
                </div>
                </div>
                <div class="mb-8 lg:mb-0 lg:w-2/4">
                    <h3 class="text-gray-700 font-bold text-center md:text-start uppercase font-heading text-lg md:text-xl lg:text-xl 3xl:text-2xl mb-8">Quick links</h3>
                    <?php 
                        $args = array(
                            'theme_location' => 'footer-menu',
                            'container' => 'ul',
                            'depth' => 2,
                            'menu_class'=> 'm-0 flex flex-col items-center md:items-start',
                            'fallback_cb' => false,
                            'add_li_class' => 'mb-4',
                            'active_class' => 'capitalize text-gray-700 hover:text-blue-600 ease-in-out duration-300 font-medium',
                            'add_link_class' => 'capitalize text-gray-700 hover:text-blue-600 ease-in-out duration-300 font-medium',
                        );
                        ?>
                    <?php wp_nav_menu( $args ); ?>
                </div>
                <div class="mb-8 lg:mb-0 lg:w-auto">
                    <h3 class="text-gray-700 font-bold text-center md:text-start uppercase font-heading text-lg md:text-xl lg:text-xl 3xl:text-2xl mb-8">Contacts</h3>
                    <ul class="flex flex-col items-center md:items-start">
                        <li class="mb-5">
                            <a href="tel:+976000111000" target="_blank" class="capitalize text-gray-700 hover:text-blue-600 ease-in-out duration-300 font-medium flex items-cnter">
                                <i class="icon icon-phone mr-2"></i>
                                +976000111000
                            </a>
                        </li>
                        <li class="mb-5">
                            <a href="mailto:nfo@wp-tailwind.com" target="_blank" class="capitalize text-gray-700 hover:text-blue-600 ease-in-out duration-300 font-medium flex items-cnter">
                                <i class="icon icon-messag mr-2"></i>
                                Ahmad Gharaibeh
                            </a>
                        </li>
                        <li class="mb-5">
                            <a href="https://goo.gl/maps/xjznnRMoFhAUHUjY9" target="_blank" class="capitalize text-gray-700 hover:text-blue-600 ease-in-out duration-300 font-medium flex items-cnter text-sm">
                                <i class="icon icon-pin mr-2"></i>
                                BB2, Mazaya Business Avenue - 1207 - <br class="md:hidden"> Jumeirah Lake Towers - Dubai - United Arab Emirates
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mb-8 lg:mb-0 lg:w-2/3">
                    <h3 class="text-gray-700 font-bold text-center md:text-start uppercase font-heading text-lg md:text-xl lg:text-xl 3xl:text-2xl mb-8">Newsletter</h3>
                    <p class="text-gray-600 text-sm text-center md:text-start mb-6 capitalize">subscribe to our weekly newsletter and get best offers.</p>
                    <form action="" method="post" class="w-full">
                        <div class="flex items-streach justify-center md:justify-start">
                            <div class="relative hover:text-blue-600 w-full">
                                <i class="icon icon-messag absolute top-2/4 -translate-y-2/4 left-4 ease-in-out duration-300 text-gray-400"></i>
                                <input type="email" name="" id="" class="bg-white border border-gray-100 focus:border-blue-600 py-3 px-12 text-blue-700 outline-0 capitalize ease-in-out duration-300 w-full">
                                <button type="submit" class="absolute top-2/4 -translate-y-2/4 right-4">
                                    <i class="icon icon-messag ease-in-out duration-300 text-gray-400"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="border-t border-gray-300 my-6">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between">
                <p class="text-sm mb-0 text-gray-600 text-center lg:text-start order-2 lg:order-1">&copy; Copyright <a href="/" class="text-gray-600 hover:text-blue-600 ease-in-out duration-200 underline">Ahmad Gharaibeh</a>. All Rights Reserved 2023.</p>
                <?php 
                $args = array(
                    'theme_location' => 'footer-bootom-menu',
                    'container' => 'ul',
                    'depth' => 2,
                    'menu_class'=> 'flex items-stretch justify-center md:hustify-start order-1 lg:order-2 mb-8 lg:mb-0',
                    'fallback_cb' => false,
                    'add_li_class' => 'flex items-center',
                    'active_class' => 'block capitalize text-gray-600 hover:text-blue-600 ease-in-out duration-300 font-medium text-sm',
                    'add_link_class' => 'block capitalize text-gray-600 hover:text-blue-600 ease-in-out duration-300 font-medium text-sm',
                    'after' => '<span class="h-2/4 border-r border-gray-400 border-opacity-40 block mx-3"></span>'
                );
                ?>
                <?php wp_nav_menu( $args ); ?>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Beginning [ Bottom Mobile ] navbar -->
    <nav class="bg-white w-full pt-6 pb-4 px-6 flex items-center justify-between sticky bottom-0 z-[2] md:hidden md:h-0 md:p-0" id="nav-Mobile">
        <div class="shadow-lg absolute left-0 -top-0 h-full w-full rotate-180 z-[-1]"></div>
        <!-- Search Icon -->
        <button class="text-gray-600"
            data-tw-toggle="modal" data-tw-target="#searchModal">
            <i class="icon icon-search"></i>
            <span class="sr-only">Search Icon</span>
        </button>

        <!-- User Icon -->
        <a href="/" class="text-gray-600">
            <i class="icon icon-user"></i>
            <span class="sr-only">User Icon</span>
        </a>

        <!-- Wishlist Icon -->
        <a href="/" class="relative group text-gray-600">
            <i class="icon icon-heart-outline mt-1"></i>
            <span
                class="absolute top-0 -right-1 w-1 h-1 bg-gray-600 rounded-full group-hover:bg-blue-600 transition-colors ease-in-out duration-150"></span>
            <span class="sr-only">Wishlist Icon</span>
        </a>

        <!-- Bag Icon -->
        <button class="relative text-gray-600 hover:text-blue-600 transition-colors ease-in-out duration-150"
            data-tw-toggle="modal" data-tw-target="#cartModal">
            <i class="icon icon-bag"></i>
            <span
                class="absolute -top-4 -right-3 bg-red-500 flex items-center justify-center text-gray-100 rounded-full h-5 w-5 text-xs">2</span>
            <span class="sr-only">Bag Icon</span>
        </button>
    </nav>
    <!-- End navbar -->    

    <!-- Beginning Search Modal -->
    <div class="fixed inset-0 z-10 hidden" id="searchModal" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <!-- Modal Overlay -->
        <div class="fixed inset-0 bg-gray-900 bg-opacity-60 transition-opacity opacity-0 ease-in-out duration-500"
            data-tw-dismiss="overlay"></div>
        
        <!-- Modal Dialog -->
        <div class="flex items-start justify-center">
            <div data-modal="dialog"
                class="md:mt-24 opacity-0 -translate-y-6 sm:scale-95 ease-in-out duration-500 relative transform overflow-hidden bg-white shadow-xl transition-all w-full sm:max-w-lg lg:max-w-xl xl:max-w-2xl 2xl:max-w-3xl">
                <div class="bg-white px-4 py-4">
                    <div class="flex flex-col">
                        <button class="mb-3 ml-auto text-gray-600 hover:text-gray-800 ease-in-out duration-200"
                            data-tw-dismiss="modal" aria-label="Close">
                            <i class="icon icon-close text-base"></i>
                        </button>
                        <!-- Beginning Submit Form -->
                        <form action="" class="flex items-center w-full">
                            <div class="flex items-stretch w-full">
                                <input type="text" name="input[search]" id="inputSearch" placeholder="Search"
                                        class="w-full border border-gray-100 focus:border-primary-400 bg-gray-100 py-4 px-6 placeholder-gray-500 font-normal text-blue-600 outline-0 capitalize ease-in-out duration-300"
                                        required>

                                <button type="submit"
                                    class="border border-blue-600 hover:border-blue-700 bg-blue-600 hover:bg-blue-700 text-white uppercase py-4 px-6 md:px-8 ease-in-out duration-300 shadow-lg text-sm xl:text-base flex items-center">
                                    <span class="hidden md:block">Search</span>
                                    <i class="icon icon-search text-sm font-bold md:hidden"></i>
                                </button>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Beginning Enquiry Modal -->
    <div class="fixed inset-0 z-10 hidden" id="enquiryModal" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <!-- Modal Overlay -->
        <div class="fixed inset-0 bg-gray-900 bg-opacity-60 transition-opacity opacity-0 ease-in-out duration-500"
            data-tw-dismiss="overlay"></div>
        
        <!-- Modal Dialog -->
        <div class="flex h-full items-center justify-center">
            <div data-modal="dialog"
                class="opacity-0 -translate-y-6 sm:scale-95 ease-in-out duration-500 relative transform overflow-hidden bg-white shadow-xl transition-all sm:w-full sm:max-w-lg lg:max-w-xl xl:max-w-2xl 2xl:max-w-3xl">
                <div class="bg-white px-6 py-6">
                    <div class="flex flex-col">
                        <!-- Beginning Submit Form -->
                        <button class="mb-3 ml-auto text-gray-600 hover:text-gray-800 ease-in-out duration-200"
                            data-tw-dismiss="modal" aria-label="Close">
                            <i class="icon icon-close text-base"></i>
                        </button>
                        <form action="">
                            <div class="grid grid-cols-2 gap-5">
                                <div class="col-span-2 sm:col-span-1 md:col-span-2 xl:col-span-1 form-field">
                                    <input type="text" name="input[name]" id="inputName" placeholder="Name"
                                        class="w-full border border-gray-100 focus:border-primary-400 bg-gray-100 py-4 px-6 placeholder-gray-500 font-normal text-blue-600 outline-0 capitalize ease-in-out duration-300 invalid:border-red-500"
                                        required>
                                </div>
                                <div class="col-span-2 sm:col-span-1 md:col-span-2 xl:col-span-1 form-field">
                                    <input type="email" name="input[email]" id="inputEmail" placeholder="Email"
                                        class="w-full border border-gray-100 focus:border-primary-400 bg-gray-100 py-4 px-6 placeholder-gray-500 font-normal text-blue-600 outline-0 capitalize ease-in-out duration-300 invalid:border-red-500"
                                        required>
                                </div>
                                <div class="col-span-2 sm:col-span-1 md:col-span-2 xl:col-span-1 form-field">
                                    <input type="tel" name="input[phone]" id="inputPhone" placeholder="Phone No."
                                        class="w-full border border-gray-100 focus:border-primary-400 bg-gray-100 py-4 px-6 placeholder-gray-500 font-normal text-blue-600 outline-0 capitalize ease-in-out duration-300 invalid:border-red-500"
                                        required>
                                </div>
                                <div class="col-span-2 sm:col-span-1 md:col-span-2 xl:col-span-1 form-field">
                                    <input type="text" name="input[address]" id="inputAddress" placeholder="Address"
                                        class="w-full border border-gray-100 focus:border-primary-400 bg-gray-100 py-4 px-6 placeholder-gray-500 font-normal text-blue-600 outline-0 capitalize ease-in-out duration-300 invalid:border-red-500"
                                        required>
                                </div>
                                <div class="form-field col-span-2 relative">
                                    <select name="input[collection]" id="inputCollection"
                                        class="w-full border border-gray-100 focus:border-primary-400 bg-gray-100 py-4 px-6 invalid:text-gray-500 font-normal text-blue-600 outline-0 capitalize ease-in-out duration-300 invalid:border-red-500"
                                        required>
                                        <option value="" disabled selected>Select Collection</option>
                                        <option value="1">Collection 1</option>
                                        <option value="2">Collection 2</option>
                                        <option value="3">Collection 3</option>
                                        <option value="4">Collection 4</option>
                                        <option value="5">Collection 5</option>
                                        <option value="6">Collection 6</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute m-1 inset-y-0 right-0 flex items-center px-4 text-gray-500 focus:border-primary-400 bg-gray-100">
                                        <i class="icon icon-angle-down text-sm"></i>
                                    </div>
                                </div>
                                <div class="form-field col-span-2">
                                    <textarea name="input[message]" id="inputMessage" cols="30" rows="5"
                                        placeholder="Message"
                                        class="group w-full border border-gray-100 focus:border-primary-400 bg-gray-100 py-4 px-6 placeholder-gray-500 font-normal text-blue-600 outline-0 capitalize ease-in-out duration-300 invalid:border-red-500"
                                        required></textarea>
                                </div>
                                <div class="col-span-2">
                                    <button type="submit"
                                        class="bg-blue-600 hover:bg-blue-700 text-white uppercase py-4 px-12 ease-in-out duration-300 shadow-lg text-sm xl:text-base inline-block">send</button>
                                </div>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Beginning Cart Slide Modal -->
    <div class="fixed inset-0 z-10 hidden" aria-labelledby="slide-over-title" role="dialog" aria-modal="true" id="cartModal">
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
                                <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping Cart
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

                            <div class="mt-8">
                                <div class="flow-root">
                                    <ul role="list" class="-my-6 divide-y divide-gray-200">
                                        <li class="flex py-6">
                                            <div
                                                class="h-24 w-24 flex-shrink-0 overflow-hidden border border-gray-200">
                                                <img src="<?php echo get_template_directory_uri(); ?>/dist/image/prooduct_thumbnail.webp"
                                                    alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch."
                                                    class="lazyload h-full w-full object-cover object-center"
                                                    width="634" height="758">
                                            </div>

                                            <div class="ml-4 flex flex-1 flex-col">
                                                <div>
                                                    <div
                                                        class="flex justify-between text-base font-medium text-gray-900">
                                                        <h3>
                                                            <a href="#">Throwback Hip Bag</a>
                                                        </h3>
                                                        <p class="ml-4">$90.00</p>
                                                    </div>
                                                    <p class="mt-1 text-sm text-gray-500">Salmon</p>
                                                </div>
                                                <div class="flex flex-1 items-end justify-between text-sm">
                                                    <p class="text-gray-500">Qty 1</p>

                                                    <div class="flex">
                                                        <button type="button"
                                                            class="font-medium text-red-400 hover:text-red-600 transition-text ease-in-out duration-300">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="flex py-6">
                                            <div
                                                class="h-24 w-24 flex-shrink-0 overflow-hidden border border-gray-200">
                                                <img src="<?php echo get_template_directory_uri(); ?>/dist/image/prooduct_thumbnail.webp"
                                                    alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch."
                                                    class="lazyload h-full w-full object-cover object-center"
                                                    width="634" height="634">
                                            </div>

                                            <div class="ml-4 flex flex-1 flex-col">
                                                <div>
                                                    <div
                                                        class="flex justify-between text-base font-medium text-gray-900">
                                                        <h3>
                                                            <a href="#">Medium Stuff Satchel</a>
                                                        </h3>
                                                        <p class="ml-4">$32.00</p>
                                                    </div>
                                                    <p class="mt-1 text-sm text-gray-500">Blue</p>
                                                </div>
                                                <div class="flex flex-1 items-end justify-between text-sm">
                                                    <p class="text-gray-500">Qty 1</p>

                                                    <div class="flex">
                                                        <button type="button"
                                                            class="font-medium text-red-400 hover:text-red-600 transition-text ease-in-out duration-300">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- More products... -->
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
                            <div class="flex justify-between text-base font-medium text-blue-600">
                                <p>Subtotal</p>
                                <p>$262.00</p>
                            </div>
                            <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                            <div class="mt-6">
                                <a href="/checkout"
                                    class="flex items-center justify-center border border-transparent bg-blue-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-blue-700 transition-bg ease-in-out duration-300">Checkout</a>
                            </div>
                            <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                                <p>
                                    <a href="/categorys"
                                        class="font-medium text-blue-600 hover:text-blue-700 transition-text ease-in-out duration-300">
                                        Continue Shopping
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="hidden">
        <div
            class="overflow-hidden bg-opacity-40 z-10 opacity-100 translate-x-0 snap-y snap-mandatory !w-3 !h-3 border-blue-600">
        </div>
        <div class="w-3 h-3 gap-1 !opacity-100 overflow-y-hidden"></div>
        <div class="w-2 h-2 gap-1 !translate-y-0 !scale-100 !translate-x-0  overflow-y-scroll"></div>
    </div>

    <?php wp_footer(); ?>

    </body>

    </html>