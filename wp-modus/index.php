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
 * @package wp-travercy
 */

get_header();
?>

<?php get_template_part('template-parts/content', 'sub-header'); ?>

    <div class="blog-listing">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-main">

                        <?php
                        if (have_posts()) :

                            if (is_home() && !is_front_page()) :
                                ?>
                                <header>
                                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                </header>
                            <?php
                            endif;

                            /* Start the Loop */
                            while (have_posts()) :
                                the_post();

                                /*
                                 * Include the Post-Type-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                 */
                                get_template_part('template-parts/content', get_post_type());

                            endwhile;

                            the_posts_navigation();

                        else :

                            get_template_part('template-parts/content', 'none');

                        endif;
                        ?>

                    </div><!-- .blog-main -->
                </div><!-- .col-lg-9 -->
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="blog-sidebar">
                        <?php get_sidebar(); ?>
                    </div><!-- .col-lg-3 -->
                </div><!-- .blog-sidebar -->

            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .blog-listing -->

<?php
get_footer();
