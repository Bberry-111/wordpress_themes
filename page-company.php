<?php
/*
Template Name: 会社概要
Template Post Type: post, page, event
*/
?>

<?php get_header(); ?>
<?php the_post(); ?>

<div><?php the_post_thumbnail("category-thumb"); ?></div>

<h1><?php the_title(); ?></h1>

<p><?php the_content(); ?></p>

<?php get_footer(); ?>
