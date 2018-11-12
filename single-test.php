<?php 
/*
Template Name: single test template
Template Post Type: post, page
*/

?>

 <?php get_header(); ?>


        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
 
            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */


            the_title();
            the_post_thumbnail( $size, $attr );
 


 
        // End the loop.
        endwhile;
        ?>
 



        </main><!-- .site-main -->
    </div><!-- .content-area -->
 
<?php get_footer(); ?>