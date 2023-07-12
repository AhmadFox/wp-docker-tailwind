<?php
/**
 * The template for displaying 404 pages
 *
 * @link https://codex.wordpress.org
 *
 * @package WordPress
 * @subpackage Marushika
 * @since Marushika 1.0
 * 
 * Template Name: 404 Page
 * 
 */
get_header(); ?>

    <!-- Beginning Page Wrapper Content -->
    <main class="bg-white flex-auto relative z-[1]">

        <!-- Beginning Page Title -->
        <div class="mt-6 md:mt-8 lg:mt-10  relative">
            <div class="container max-w-full lg:w-11/12 2xl:w-10/12 3xl:w-9/12 flex items-center">
                <hr class="border-gray-300 w-full absolute left-0 z-[-1]">
                <h1 class="font-heading text-gray-800 uppercase text-xl 2xl:text-2xl 3xl:text-3xl bg-white px-5 lg:-ml-5">
                    <?php esc_html_e( 'Nothing here', 'marushika' ); ?>
                </h1>
            </div>
        </div>
        <!-- End Title -->

        <section class="py-12 md:py-10 lg:py-12 xl:py-14 2xl:py-20">
            <div class="container max-w-full lg:w-11/12 2xl:w-10/12 3xl:w-9/12">

            <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                <div class="flex flex-col justify-center h-full">
                    <h3 class="drop-shadow-lg text-primary-500 font-bold mb-4 text-8xl 2xl:text-9xl text-center lg:text-start"><?php esc_html_e( '404', 'marushika' ); ?></h3>
                    <p class="text-gray-800 font-heading font-bold text-2xl xl:text-3xl 2xl:text-4xl mb-6 text-center lg:text-start"><?php esc_html_e( 'Ooops, Page Not Found!', 'marushika' ); ?></p>
                    <p class="text-gray-700 xl:text-lg mb-2 text-center lg:text-start"><?php esc_html_e( 'It looks like nothing was found at this location.', 'marushika' ); ?></p>
                    <p class="text-gray-700 xl:text-lg mb-4 text-center lg:text-start"><?php esc_html_e( 'Maybe try a search?', 'marushika' ); ?></p>
                    
                    <form action="" method="post" class="mb-8">
                        <div class="flex shadow-lg w-full md:w-2/4 lg:w-full mx-auto lg:ml-0">
                            <input type="text" name="input-[search]" id="inputSearch" placeholder="Search for: (clothes, dresses, page name ..etc)" class="placeholder:italic w-full border border-primary-100 focus:border-primary-400 bg-primary-50 text-sm lg:text-base py-3 lg:py-4 px-4 lg:px-6 placeholder-gray-500 font-normal text-primary-600 outline-0 ease-in-out duration-300" required>
                            <button type="submit" class="bg-primary-500 hover:bg-primary-600 text-white uppercase y-3 xl:py-5 px-5 md:px-7 xl:px-12 ease-in-out duration-300 text-sm xl:text-base inline-block">
                                <span class="hidden md:block">search</span>
                                <i class="icon icon-search md:hidden text-sm font-bold"></i>
                            </button>
                        </div>
                    </form>

                    <p class="text-gray-700 xl:text-lg mb-4 text-center lg:text-start">Or return to <a href="/" class="text-primary-500 hover:text-primary-600 ease-in-out duration-200 uppercase font-semibold">home page</a> </p>
                </div>
                <div class="lg:flex justify-end hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/image/bnr_404.svg"
                            alt="Contact Us Banner" class="lazyload Page Not Found Banner w-auto h-full" width="416" height="478">
                </div>
            </div>

                
                
            </div>
        </section>
        
    </main>
    <!-- End Wrapper -->

<?php get_footer(); ?>
