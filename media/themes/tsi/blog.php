<?php
/*  Template Name: Blog
    based on fullwidth.php
*/
get_header(); ?>

<div id="content">
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
    <br/>
    </div>

    <?php edit_post_link('Edit This Entry', '<p>', '</p>'); ?>

    <?php
    // End the loop.
    endwhile; ?>

</main><!-- .site-main -->
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>