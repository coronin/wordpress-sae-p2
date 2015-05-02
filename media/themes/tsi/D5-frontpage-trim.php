<?php
/*
    Template Name: D5 Front Page Trim
*/
?>

<?php get_header(); wp_enqueue_script( 'slider-main', get_template_directory_uri() . '/js/slider.js' ); ?>
      <div id="slider">
            <div id="slideshow"><ul class="bjqs">
            <?php query_posts('cat=11&showposts=5');
            if (have_posts()) : while (have_posts()) : the_post();?>
            <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('slide-thumb'); ?><div class="post-slide"><h2><?php the_title(); ?></h2><?php  $sbExcerptLength=30; the_excerpt(); ?></div></a></li>
            <?php endwhile; endif; wp_reset_query(); ?>
            </ul></div>
        </div>

<h1 id="heading"><?php echo of_get_option('heading_text', 'TODO: Post Options, Theme Options and Extra Functionalities.'); ?></h1>

<?php get_template_part( 'featured-box' );  ?>

<div class="clear"> </div>

<?php if ( of_get_option('bottom-quotation', 'All the developers of D5 Creation have come from the disadvantaged part or group of the society. All have established themselves after a long and hard struggle in their life ----- D5 Creation Team') != '' ) : ?>
<div class="content-ver-sep"> </div>
<div id="customers-comment">
<blockquote><?php echo of_get_option('bottom-quotation', 'All the developers of D5 Creation have come from the disadvantaged part or group of the society. All have established themselves after a long and hard struggle in their life ----- D5 Creation Team'); ?></blockquote>
</div>
<?php endif; ?>

<?php get_footer(); ?>