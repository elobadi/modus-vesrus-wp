<?php
/**
 * Template Name: Home Page
 */

get_header();
?>

<?php get_template_part( 'template-parts/content', 'showcase' ); ?>

<?php get_template_part( 'template-parts/content', 'intro' ); ?>

<?php get_template_part( 'template-parts/content', 'services' ); ?>

<?php get_template_part( 'template-parts/content', 'about' ); ?>

<?php get_template_part( 'template-parts/content', 'clients' ); ?>

<?php
get_footer();
