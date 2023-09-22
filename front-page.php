<?php
/**
 * 
 * Template part for displaying page content in page.php
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package landing-page-development
 */
 get_header();
/*$post_id = get_the_ID();*/

?>

<?php the_content(); ?>

<?php

get_footer();
