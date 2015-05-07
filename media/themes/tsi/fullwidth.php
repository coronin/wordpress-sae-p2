<?php
/*  Template Name: Full Width
    Full Width Page to show the Pages Selected
*/
get_header(); ?>

<div id="content-full">
<main class="site-main" role="main">

    <?php
    // Start the loop.
    while (have_posts()) : the_post();
  $c = new SaeCounter();
  $cc = 'page'.$post->ID;
  if ( $c->create($cc) ) {
    $c->set($cc, 1);
  } else {
    $c->incr($cc); }
?>

    <header class="entry-header">
    <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <div class="content-ver-sep"> </div>
    <div class="entrytext">
        <?php the_post_thumbnail('category-thumb');
              the_content(); ?>
    <br/><!-- 2015/5/4 bug fix -->
    </div>

    <?php edit_post_link('Edit This Entry', '<p>', '</p>'); ?>

    <?php
    // End the loop.
    endwhile; ?>

</main><!-- .site-main -->
</div>

<?php get_footer(); ?>