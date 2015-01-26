<?php
/*  Template Name: Blog
    based on single wo page-nav
*/
get_header(); ?>

<div id="content">

          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?> <h3 class="subtitle"><?php echo get_post_meta($post->ID, 'sb_subtitle', 'true'); ?></h3>
            <h1 class="page-title"><?php the_title(); ?></h1>

            <div class="content-ver-sep"> </div>
            <div class="entrytext"><?php the_post_thumbnail('category-thumb'); ?>
            <?php the_content(); ?>
            <div class="clear"> </div>
            </div>

            <?php endwhile;?>

          <!-- End the Loop. -->

            <?php comments_template( '', true ); ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>