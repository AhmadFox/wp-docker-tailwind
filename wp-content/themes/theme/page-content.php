<?php
/**
 * The template for displaying Content pages
 *
 * @link https://codex.wordpress.org
 *
 * @package WordPress
 * @subpackage Marushika
 * @since Marushika 1.0
 * 
 * Template Name: Content Page
 * 
 */
get_header(); ?>

    <!-- Beginning Page Wrapper Content -->
    <main class="bg-white flex-auto relative z-[1]">

        <section class="py-10 xl:pt-12 2xl:pt-14 3xl:pt-16 lg:pb-20 3xl:pb-20">
            <div class="container max-w-full lg:w-11/12 2xl:w-10/12 3xl:w-9/12">
                <h1 class="font-heading font-bold text-gray-800 uppercase text-xl 2xl:text-2xl 3xl:text-3xl mb-10">
                    <?php the_title() ?>
                </h1>
                <?php the_content() ?>
                
            </div>
        </section>
        
    </main>
    <!-- End Wrapper -->

<?php get_footer(); ?>