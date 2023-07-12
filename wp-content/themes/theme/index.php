<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Marushika
 * @since Marushika 1.0
 */

get_header(); ?>

    <!-- Beginning Page Wrapper Content -->
    <main class="bg-white flex-auto relative z-[1]">

        <section class="py-12 md:py-10 lg:py-12 xl:py-14 2xl:py-20">
            <div class="container max-w-full lg:w-11/12 2xl:w-10/12 3xl:w-9/12">

                <?php the_content() ?>
                
            </div>
        </section>
        
    </main>
    <!-- End Wrapper -->

<?php get_footer(); ?>